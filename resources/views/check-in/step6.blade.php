<style>
    body { background: #f4f4f4; }
    .step6-container {
        display: flex;
        min-height: 100vh;
        background: #f4f4f4;
        justify-content: center;
        flex-wrap: wrap;
    }
    .step6-form-area {
        flex: 0 0 600px;
        background: #fff;
        padding: 0 0 0 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        min-height: 100vh;
        border-right: 1px solid #ededed;
    }
    .step6-title {
        font-size: 2.3rem;
        font-weight: 400;
        color: #444;
        margin-bottom: 0.1em;
        margin-top: 2.2em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        letter-spacing: -1px;
    }
    .step6-subtitle {
        color: #bdbdbd;
        font-size: 1.13rem;
        margin-bottom: 2.2em;
        margin-top: 0.1em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        letter-spacing: 0.1px;
    }
    .step6-section-title {
        font-size: 1.18rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 1.2em;
        margin-top: 1.5em;
        text-align: left;
        width: 100%;
        max-width: 520px;
    }
    .step6-form-box {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        padding: 0;
        margin-bottom: 2em;
        box-shadow: none;
        overflow: hidden;
    }
    .step6-checkbox-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 18px 18px 0 18px;
        border-bottom: 1px solid #ededed;
        position: relative;
    }
    .step6-checkbox-row:last-child {
        border-bottom: none;
    }
    .step6-checkbox {
        width: 22px;
        height: 22px;
        margin-top: 2px;
    }
    .step6-checkbox-label {
        font-size: 1.04em;
        color: #444;
        font-weight: 400;
        margin-bottom: 2px;
        line-height: 1.4;
    }
    .step6-checkbox-link {
        color: #0082a3;
        font-size: 0.98em;
        margin-left: 8px;
        text-decoration: underline;
        cursor: pointer;
    }
    .step6-checkbox-error {
        color: #e53935;
        font-size: 0.98em;
        position: absolute;
        right: 18px;
        top: 8px;
        font-weight: 500;
    }
    .step6-summary-box {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        padding: 24px 28px 18px 28px;
        margin-bottom: 2em;
        box-shadow: none;
        overflow: hidden;
    }
    .step6-summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        font-size: 1.08em;
        color: #444;
    }
    .step6-summary-total {
        font-size: 1.25em;
        font-weight: bold;
        color: #0082a3;
        margin-top: 18px;
        border-top: 1px solid #ededed;
        padding-top: 12px;
        display: flex;
        justify-content: space-between;
    }
    .step6-payment-box {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        padding: 32px 28px 32px 28px;
        margin-bottom: 2em;
        box-shadow: none;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .step6-payment-btn {
        background: #0082a3;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 1.13em;
        font-weight: 400;
        padding: 10px 0px;
        min-width: 220px;
        letter-spacing: 0.5px;
        transition: background 0.2s;
        margin-top: 18px;
        margin-bottom: 0;
        cursor: pointer;
        width: 100%;
        max-width: 320px;
    }
    .step6-payment-btn:disabled {
        background: #bdbdbd;
        cursor: not-allowed;
    }
    .step6-activation-input {
        width: 220px;
        font-size: 1.08em;
        padding: 8px 12px;
        border: 1px solid #cfd8dc;
        border-radius: 6px;
        margin-top: 12px;
        margin-bottom: 0;
    }
    .step6-activation-label {
        color: #444;
        font-size: 1.04em;
        margin-top: 18px;
        margin-bottom: 4px;
    }
    .step6-activation-error {
        color: #e53935;
        font-size: 0.98em;
        margin-top: 4px;
        margin-bottom: 0;
    }
</style>
<div class="container pt-5 mt-2">
    <div class="step6-container">
        <div class="col-md-8 step6-form-area px-4 bg-white">
            <div class="step6-title">Finalize Check-in</div>
            <div class="step6-subtitle">Payment</div>
            
            <div class="step6-section-title">Terms & conditions</div>
            <div class="step6-form-box">
                <div class="step6-checkbox-row">
                    <input type="checkbox" class="step6-checkbox" id="terms1" wire:model="termsAccepted">
                    <label for="terms1" class="step6-checkbox-label">I fully acknowledge and agree to the hotel terms & conditions</label>
                    <a class="step6-checkbox-link" href="#">See terms & conditions</a>
                </div>
            </div>
            <div class="step6-section-title">Reservation summary</div>
            <div class="step6-summary-box">
                <div class="step6-summary-row">
                    <span>Room reservation</span>
                    <span>${{ number_format($roomTotal, 2) }}</span>
                </div>
                @foreach($extrasBreakdown as $key => $price)
                    <div class="step6-summary-row">
                        <span>{{ ucfirst(str_replace('_', ' ', $key)) }}</span>
                        <span>${{ number_format($price, 2) }}</span>
                    </div>
                @endforeach
                <div class="step6-summary-total">
                    <span>Total</span>
                    <span>${{ number_format($finalTotal, 2) }}</span>
                </div>
            </div>
            <div class="step6-section-title">Payment</div>
            <div class="step6-payment-box">
                <div style="color:#888; font-size:1.08em; margin-bottom:18px;">Please pay the total amount in cash at the reception desk to complete your check-in.<br>Once payment is confirmed by the reception team, you will receive your invoice by email.</div>
                {{-- عرض الأكواد التجريبية في وضع الديمو --}}
                <div style="background:#f7f7f7;border:1px solid #cfd8dc;padding:10px 18px;margin-bottom:12px;border-radius:6px;color:#0082a3;font-size:1.08em;">
                    <b>Activation Codes(Test):</b> {{ implode(', ', $allowedActivationCodes) }}
                </div>

                <label class="step6-activation-label" for="activation_code">Enter activation code from the receptionist</label>
                <input type="text" class="step6-activation-input" id="activation_code" placeholder="Activation code" wire:model="activationCode">
                @if($activationError)
                    <div class="step6-activation-error">{{ $activationError }}</div>
                @endif
                <button class="step6-payment-btn" wire:click="confirmPaymentWithCode">CONFIRM PAYMENT</button>
            </div>
        </div>
        <div class="col step4-summary-area px-4">
            <div class="step4-summary-title">Ariane Resort</div>
            <div class="step4-summary-dates">
                {{ \Carbon\Carbon::parse($reservation['arrivalDate'])->format('M d') }} - {{ \Carbon\Carbon::parse($reservation['departureDate'])->format('M d') }}<br>
                Confirmation # : {{ $reservation['confirmationNumber'] ?? '' }}
            </div>
            <img class="step4-summary-img" src="{{ asset('images/' . ($reservation['roomImage'] ?? 'ExecutiveBedroom.jpg')) }}" alt="Room">
            <div class="step4-summary-nights">{{ $reservation['nrNights'] ?? 1 }} nights stay</div>
        </div>
    </div>
</div>
