<div>

    @if($step === 1)
    <div>
        @include('check-in.step1')
    </div>
    @elseif($step === 2)
        @include('check-in.step2', ['results' => $results])
        {{-- @if(empty($reservationData))
            <p class="text-red-500">No reservation data available.</p>
        @else
            <div class="text-center">
                <h1 class="text-2xl font-bold mb-4">Hello {{ $reservationData['firstName'] ?? 'Unknown' }} {{ $reservationData['lastName'] ?? 'Unknown' }}</h1>
                <p class="mb-4">Your stay at Ariane Resort begins right now!</p>
                <p class="mb-4">Complete your self check-in in minutes.</p>
                <img src="{{ asset('images/' . ($reservationData['roomImage'] ?? 'default.jpg')) }}" alt="Room" class="mx-auto mb-4" style="max-width: 300px;" onerror="this.src='{{ asset('images/default.jpg') }}';">
                <button wire:click="updatePersonalInfo" class="bg-red-500 text-white px-4 py-2 rounded">CHECK-IN</button>
            </div>
        @endif --}}
    @elseif($step === 3)
        @include('check-in.step3', ['reservation' => $reservation, 'mode' => $mode])
        {{-- <div class="max-w-md mx-auto">
            <h1 class="text-2xl font-bold mb-4">Review & Complete</h1>
            <form>
                <div class="mb-4">
                    <label>Personal Information</label>
                    <input wire:model="personalInfo.first_name" class="border p-2 w-full" value="{{ $personalInfo['first_name'] ?? 'Unknown' }}" readonly>
                    <input wire:model="personalInfo.last_name" class="border p-2 w-full" value="{{ $personalInfo['last_name'] ?? 'Unknown' }}" readonly>
                </div>
                <button wire:click="confirmData" class="bg-blue-500 text-white px-4 py-2 rounded">UPDATE</button>
            </form>
        </div> --}}
    @elseif($step === 4)
        @include('check-in.step4', ['reservation' => $reservation])
    @elseif($step === 5)
        @include('check-in.step5')
    @elseif($step === 6)
        @include('check-in.step6')
    @elseif($step === 7)
        <div class="vh-100 d-flex justify-content-center align-items-center bg-light">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1 class="mb-3">Thank You!</h1>
                    <p class="mb-4">Your check-in is complete. We look forward to welcoming you at <b>Ariane Resort</b>.<br>
                        Confirmation #: <span class="fw-bold">{{ $reservationData['confirmationNumber'] ?? 'N/A' }}</span>
                    </p>
                    <button class="btn btn-large btn-round-edge btn-box-shadow btn-switch-text btn-dark-gray left-icon px-4 py-3" wire:click="resetForNewGuest">Start New Check-In</button>
                </div>
            </div>
        </div>
    @elseif($step === 8)
        <div class="text-center">
            <h1 class="text-2xl font-bold mb-4">Check-Out Completed!</h1>
            <p>Thank you for staying with us.</p>
            <p>Confirmation number: {{ $reservationData['confirmationNumber'] ?? 'N/A' }}</p>
        </div>
    @endif


</div>