<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;
use function Laravel\Prompts\alert;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class CheckInFlow extends Component
{
    public $step = 1;
    public $reservationData = [];
    public $personalInfo = [];
    public $extras = [];
    public $isConfirmed = false;
    public $reservationNumber;
    public $lastName;
    public $results = [];
    public $reservation;
    public $mode = 'checkin';
    public $step4Section = 'personal'; // personal, contact, address, ...
    public $personalInfoCompleted = false;
    public $contactInfo = [];
    public $contactInfoCompleted = false;
    public $addressInfo = [];
    public $addressInfoCompleted = false;
    public $signature = '';
    public $signatureCompleted = false;
    public $arrivalDetails = [
        'flight_number' => '',
        'user_defined_2' => '',
    ];
    public $arrivalDetailsCompleted = false;

    // Add marketing step state
    public $marketing = [
        'opt_in' => false,
    ];
    public $marketingCompleted = false;

    // Add estimate arrival time step state
    public $estimate = [
        'option' => 'time', // 'time' or 'unknown'
        'time' => '',
    ];
    public $estimateCompleted = false;
    public $showFinalConfirm = false;

    public $step5Extras = [];

    // For step 5 extras selection
    public $extrasQuantities = [
        'breakfast_adults' => 0,
        'breakfast_children' => 0,
        'airport_transfer' => 0,
        'internet_hotspot' => 0,
        'romantic_package' => 0,
    ];

    // أسعار الإضافات
    public $extrasPrices = [
        'breakfast_adults' => 15, // لكل ليلة
        'breakfast_children' => 10, // لكل ليلة
        'airport_transfer' => 75, // مرة واحدة
        'internet_hotspot' => 10, // مرة واحدة
        'romantic_package' => 50, // مرة واحدة
    ];
    public $roomPrice = 400; // سعر الغرفة الأساسي (يمكنك تعديله حسب الداتا)
    public $roomTotal = 0;
    public $extrasTotal = 0;
    public $finalTotal = 0;
    public $extrasBreakdown = [];

    public $activationCode = '';
    public $activationError = '';
    public $allowedActivationCodes = ['123456', '654321', '111222']; // أكواد ثابتة

    public $termsAccepted = false;

    public function mount()
    {
        $this->loadSampleData();
    }

    public function loadSampleData()
    {
        $jsonPath = storage_path('app/api/sample_reservations.json');
        Log::info('Attempting to load JSON from: ' . $jsonPath);

        if (File::exists($jsonPath)) {
            $data = json_decode(File::get($jsonPath), true);
            Log::info('JSON content: ', $data);
            if (!empty($data) && isset($data[0]) && is_array($data[0])) {
                $this->reservationData = $data[0];
                $this->personalInfo = [
                    'first_name' => $this->reservationData['firstName'] ?? 'Unknown',
                    'last_name' => $this->reservationData['lastName'] ?? 'Unknown',
                    'arrival_date' => $this->reservationData['arrivalDate'] ?? '',
                    'departure_date' => $this->reservationData['departureDate'] ?? '',
                ];
                Log::info('Reservation data loaded: ', $this->reservationData);
            } else {
                Log::warning('No valid data found in JSON or data[0] is not an array.');
                $this->reservationData = [
                    'firstName' => 'Unknown',
                    'lastName' => 'Unknown',
                    'roomImage' => 'default.jpg',
                    'roomTypeDescription' => 'Unknown Room',
                    'arrivalDate' => now()->toDateTimeString(),
                    'departureDate' => now()->addDays(1)->toDateTimeString(),
                    'nrNights' => 1,
                ];
                $this->personalInfo = ['first_name' => 'Unknown', 'last_name' => 'Unknown'];
            }
        } else {
            Log::error('JSON file not found at: ' . $jsonPath);
            $this->reservationData = [
                'firstName' => 'Unknown',
                'lastName' => 'Unknown',
                'roomImage' => 'default.jpg',
                'roomTypeDescription' => 'Unknown Room',
                'arrivalDate' => now()->toDateTimeString(),
                'departureDate' => now()->addDays(1)->toDateTimeString(),
                'nrNights' => 1,
            ];
            $this->personalInfo = ['first_name' => 'Unknown', 'last_name' => 'Unknown'];
        }
    }

    public function checkIn()
    {
        $this->step = 2;
    }

    public function updatePersonalInfo()
    {
        $this->step = 3;
    }

    public function confirmData()
    {
        $this->step = 4;
    }

    public function confirmExtras()
    {
        $this->step = 5;
        $this->extras = ['Continental Breakfast', 'Mini Portable Internet'];
    }
    public function calcExtrasDataAndConfirm()
    {
        $nights = $this->reservationData['nrNights'] ?? 1;
        $this->roomTotal = $this->roomPrice; // أو يمكنك حسابها بناءً على $nights إذا كان السعر لليلة
        $this->extrasTotal = 0;
        $this->extrasBreakdown = [];

        // حساب كل إضافة
        foreach ($this->extrasQuantities as $key => $qty) {
            if ($qty > 0) {
                $price = 0;
                if ($key === 'breakfast_adults') {
                    $price = $qty * $nights * $this->extrasPrices[$key];
                } elseif ($key === 'breakfast_children') {
                    $price = $qty * $nights * $this->extrasPrices[$key];
                } else {
                    $price = $qty * $this->extrasPrices[$key];
                }
                $this->extrasBreakdown[$key] = $price;
                $this->extrasTotal += $price;
            }
        }
        $this->finalTotal = $this->roomTotal + $this->extrasTotal;
        $this->step = 6;
    }

    public function confirmPaymentWithCode()
    {
        if (!$this->termsAccepted) {
            $this->activationError = 'You must accept the terms & conditions.';
            return;
        }
        if (!in_array($this->activationCode, $this->allowedActivationCodes)) {
            $this->activationError = 'Activation code is invalid.';
            return;
        }
        $this->activationError = '';
        $this->finalizeCheckIn();
    }

    public function finalizeCheckIn()
    {
        $paidAmount = $this->finalTotal;
        $now = now();
        // معالجة تواريخ الحجز
        $arrival = $this->reservationData['arrivalDate'] ?? $now;
        $departure = $this->reservationData['departureDate'] ?? $now->addDays(1);
        // إذا كان التاريخ يحتوي على T أو Z (تنسيق ISO)، نحوله إلى Y-m-d H:i:s
        if (is_string($arrival) && (str_contains($arrival, 'T') || str_contains($arrival, 'Z'))) {
            $arrival = date('Y-m-d H:i:s', strtotime($arrival));
        }
        if (is_string($departure) && (str_contains($departure, 'T') || str_contains($departure, 'Z'))) {
            $departure = date('Y-m-d H:i:s', strtotime($departure));
        }
        Guest::create([
            'reservation_number' => $this->reservationData['reservationNumber'] ?? 'N/A',
            'confirmation_number' => $this->reservationData['confirmationNumber'] ?? 'N/A',
            'first_name' => $this->personalInfo['first_name'],
            'last_name' => $this->personalInfo['last_name'],
            'arrival_date' => $arrival,
            'departure_date' => $departure,
            'nr_nights' => $this->reservationData['nrNights'] ?? 1,
            'room_type' => $this->reservationData['roomTypeDescription'] ?? 'Unknown Room',
            'check_in_status' => true,
            'extras' => json_encode($this->extrasQuantities),
            'payment_status' => 'paid',
            'paid_amount' => $paidAmount,
            'check_type' => 'checkin',
            'payment_date' => $now,
        ]);
        $this->isConfirmed = true;
        $this->step = 7;
    }

    public function checkOut()
    {
        if (isset($this->reservationData['canAccessCheckOut']) && $this->reservationData['canAccessCheckOut']) {
            $this->step = 7;
        }
    }

    public function confirmCheckOut()
    {
        Guest::where('reservation_number', $this->reservationData['reservationNumber'] ?? 'N/A')->update([
            'check_in_status' => false,
        ]);
        $this->step = 8;
    }

    public function findReservation()
    {
        if (empty($this->reservationNumber)) {
            $this->addError('reservationNumber', 'Reservation number is required.');
            return;
        }
        if (empty($this->lastName)) {
            $this->addError('lastName', 'Last name is required.');
            return;
        }
        $this->loadReservations();
        $this->step = 2;
    }

    public function loadReservations()
    {
        $checkinPath = storage_path('app/api/OnlineCheckin.json');
        $checkoutPath = storage_path('app/api/OnlineCheckout.json');
        $results = [];

        if (file_exists($checkinPath)) {
            $checkinData = json_decode(file_get_contents($checkinPath), true) ?? [];
            Log::info('Loaded checkin data: ', $checkinData);
            $results = array_merge($results, $checkinData);
        }
        if (file_exists($checkoutPath)) {
            $checkoutData = json_decode(file_get_contents($checkoutPath), true) ?? [];
            Log::info('Loaded checkout data: ', $checkoutData);
            $results = array_merge($results, $checkoutData);
        }

        // فلترة النتائج لتكون فقط مصفوفات تحتوي على arrivalDate و departureDate
        $results = array_filter($results, function($item) {
            return is_array($item) && isset($item['arrivalDate'], $item['departureDate']);
        });

        $this->results = array_values($results); // إعادة ترتيب الفهارس
        
        Log::info('Final results count: ' . count($this->results));
        Log::info('Results: ', $this->results);
    }

    public function goToStep3($index, $mode = 'checkin')
    {
        Log::info('goToStep3 called with index: ' . $index . ', mode: ' . $mode);
        Log::info('Results count: ' . count($this->results));
        
        if (isset($this->results[$index])) {
            $this->reservation = $this->results[$index];
            $this->mode = $mode;
            $this->step = 3;
            
            Log::info('Reservation set: ', $this->reservation);
            Log::info('Mode set: ' . $this->mode);
        } else {
            Log::error('Index ' . $index . ' not found in results');
            // يمكن إضافة رسالة خطأ للمستخدم هنا
        }
    }

    public function goBackToStep2()
    {
        $this->step = 2;
        $this->reservation = null;
        $this->mode = 'checkin';
    }

    public function startPersonalInfoForm()
    {
        $this->step = 4;
    }

    public function validatePersonalInfoAndNext()
    {
        $this->resetErrorBag();
        $this->validate([
            'personalInfo.first_name' => 'required|string',
            'personalInfo.last_name' => 'required|string',
            'personalInfo.birth_day' => 'required',
            'personalInfo.birth_month' => 'required',
            'personalInfo.birth_year' => 'required',
            'personalInfo.nationality' => 'required',
        ]);
        $this->personalInfoCompleted = true;
        $this->step4Section = 'contact';
    }

    public function editPersonalInfo()
    {
        $this->step4Section = 'personal';
    }

    public function validateContactInfoAndNext()
    {
        $this->resetErrorBag();
        $this->validate([
            'contactInfo.email' => 'required|email',
            'contactInfo.phone_code' => 'required',
            'contactInfo.phone' => 'required',
        ]);
        $this->contactInfoCompleted = true;
        $this->step4Section = 'address';
    }

    public function editContactInfo()
    {
        $this->step4Section = 'contact';
    }

    public function validateAddressInfoAndNext()
    {
        $this->resetErrorBag();
        $this->validate([
            'addressInfo.country' => 'required',
            'addressInfo.address1' => 'required',
            'addressInfo.city' => 'required',
            'addressInfo.zip' => 'required',
        ]);
        $this->addressInfoCompleted = true;
        $this->step4Section = 'signature';
    }

    public function editAddressInfo()
    {
        $this->step4Section = 'address';
    }

    public function validateSignatureAndNext()
    {
        $this->resetErrorBag();
        // $this->validate([
        //     'signature' => 'required|string|min:2',
        // ]);
        $this->signatureCompleted = true;
        $this->step4Section = 'arrival';
    }

    public function editSignature()
    {
        $this->step4Section = 'signature';
    }

    public function clearSignature()
    {
        $this->signature = '';
    }

    public function validateArrivalDetailsAndNext()
    {
        $this->resetErrorBag();
        // الحقول اختيارية، لكن يمكن التحقق من الطول أو النوع إذا رغبت
        $this->arrivalDetailsCompleted = true;
        $this->step4Section = 'marketing';
    }

    public function editArrivalDetails()
    {
        $this->step4Section = 'arrival';
    }

    // Add marketing step validation and navigation
    public function validateMarketingAndNext()
    {
        $this->resetErrorBag();
        // No required fields, but you can add validation if needed
        $this->marketingCompleted = true;
        $this->step4Section = 'estimate'; // Next step
    }

    public function editMarketing()
    {
        $this->step4Section = 'marketing';
    }

    // Add estimate step validation and navigation
    public function validateEstimateAndNext()
    {
        $this->resetErrorBag();
        // If option is 'time', time must be selected
        if ($this->estimate['option'] === 'time' && empty($this->estimate['time'])) {
            $this->addError('estimate.time', 'Please select an estimated arrival time.');
            return;
        }
        $this->estimateCompleted = true;
        // $this->showFinalConfirm = true;
        $this->step4Section = 'finalConfirm'; // Or any next step if needed
    }

    public function editEstimate()
    {
        $this->step4Section = 'estimate';
    }

    public function finalConfirm()
    {
        // You can add any final save/submit logic here
        // For now, just hide the confirm box or redirect, etc.
        $this->showFinalConfirm = false;
        $this->step = 5;
        $this->confirmExtras();
        // Optionally, set a flag for a thank you message or redirect
    }

    public function incrementExtra($key)
    {
        if (!isset($this->extrasQuantities[$key])) $this->extrasQuantities[$key] = 0;
        $this->extrasQuantities[$key]++;
    }

    public function decrementExtra($key)
    {
        if (!isset($this->extrasQuantities[$key])) $this->extrasQuantities[$key] = 0;
        if ($this->extrasQuantities[$key] > 0) $this->extrasQuantities[$key]--;
    }

    public function removeExtra($key)
    {
        $this->extrasQuantities[$key] = 0;
    }

    public function resetForNewGuest()
    {
        $this->reset();
        $this->step = 1;
    }

    public function render()
    {
        return view('livewire.check-in-flow', [
            'results' => $this->results,
            'reservation' => $this->reservation,
            'mode' => $this->mode,
        ]);
    }
}
