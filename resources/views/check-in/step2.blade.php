<!-- start step 2 section -->
<section class="py-5" style="background: #f6f6f6; min-height: 80vh;">
    <div class="container">
        <div class="mb-0 mt-5 fs-10 text-dark-gray fw-100" style="color: #888;">
            {{ count($results ?? []) }} results
        </div>
        @foreach($results as $index => $reservation)
            @if(is_array($reservation) && isset($reservation['arrivalDate'], $reservation['departureDate']))
                <div class="bg-white rounded shadow-sm p-4 mb-4" style=" margin: 0 auto;">
                    <div class="text-center mb-2" style="color: #888;">
                        Your stay at <span style="color: #e57373;">Ariane Resort</span>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-2" style="font-size: 20px;">
                        <span class="fw-700 fs-30">
                            {{ \Carbon\Carbon::parse($reservation['arrivalDate'])->format('D, M d,Y') }}
                        </span>
                        <span class="mx-3" style="color: #888;">|</span>
                        <span class="fw-700 fs-30">
                            {{ \Carbon\Carbon::parse($reservation['departureDate'])->format('D, M d,Y') }}
                        </span>
                    </div>
                    <div class="text-center mb-2" style="font-size: 18px; color: #444;">
                        {{ $reservation['roomTypeDescription'] ?? 'Executive Room' }}
                    </div>
                    <div class="text-center mb-3" style="color: #888;">
                        Open for {{ $reservation['canAccessCheckOut'] ?? false ? 'check-out' : 'check-in' }}
                    </div>
                    <div class="text-center mb-2">
                        @if($reservation['canAccessCheckOut'] ?? false)
                            <button class="btn btn-primary rounded" style="min-width: 160px;" disabled>CHECK-OUT</button>
                        @else
                            <button class="btn btn-primary rounded" style="min-width: 160px;" wire:click="goToStep3({{ $index }}, 'checkin')">CHECK-IN</button>
                        @endif
                    </div>
                    <div class="text-end" style="color: #bbb; font-size: 14px;">
                        Confirmation number: {{ $reservation['confirmationNumber'] ?? '' }}
                    </div>
                </div>
            @endif
        @endforeach
        @if(empty($results))
            <div class="alert alert-warning text-center">No reservations found.</div>
        @endif
    </div>
</section>
<!-- end step 2 section --> 