<!-- start step 3 section -->
<style>
    .checkin-hero-bg {
        background: url('/images/book-desktop.jpg') center center/cover no-repeat;
        position: relative;
        min-height: 420px;
        display: flex;
        align-items: flex-end;
    }
    .checkin-hero-bg::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(40,40,40,0.55);
        z-index: 1;
    }
    .checkin-hero-content {
        position: relative;
        z-index: 2;
        padding: 60px 0 40px 0;
        color: #fff;
        text-align: left;
        max-width: 900px;
        margin: 0 auto;
    }
    .checkin-room-card {
        background: #fff;
        border-radius: 0 0 6px 6px;
        box-shadow: 0 8px 32px #0002;
        display: flex;
        align-items: stretch;
        max-width: 900px;
        margin: 0px auto 0 auto;
        overflow: hidden;
    }
    .checkin-room-img {
        width: 340px;
        min-height: 240px;
        object-fit: cover;
        display: block;
    }
    .checkin-room-details {
        flex: 1;
        padding: 40px 40px 40px 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .checkin-room-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #222;
        margin-bottom: 8px;
    }
    .checkin-room-dates {
        font-size: 1.1rem;
        color: #222;
        margin-bottom: 8px;
    }
    .checkin-room-dates .date {
        color: #e57373;
        font-weight: 500;
    }
    .checkin-room-confirm {
        font-size: 0.95rem;
        color: #888;
        margin-bottom: 18px;
    }
    .checkin-btn {
        background: #e57373;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 1.1rem;
        font-weight: 500;
        padding: 12px 0;
        width: 100%;
        margin-top: 8px;
        transition: background 0.2s;
    }
    .checkin-btn:hover {
        background: #d36b6b;
    }
    /* --- CHECKOUT --- */
    .checkout-label { color: #222; font-size: 1.15rem; }
    .checkout-value { color: #e57373; font-weight: 500; font-size: 1.15rem; }
    .checkout-bold { font-weight: bold; color: #222; }
    .checkout-amount { color: #e57373; font-weight: bold; font-size: 1.18rem; }
    .checkout-btn {
        background: #0082a3;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 1.1rem;
        font-weight: 500;
        padding: 14px 0;
        width: 100%;
        margin-top: 18px;
        transition: background 0.2s;
    }
    .checkout-btn:hover { background: #005f7a; }
    .checkout-confirm { color: #222; font-size: 1rem; margin-top: 18px; }
    @media (max-width: 900px) {
        .checkin-room-card { flex-direction: column; max-width: 98vw; }
        .checkin-room-img { width: 100%; min-height: 180px; }
        .checkin-room-details { padding: 24px; }
    }
</style>
<section style="background: #f6f6f6; padding-bottom: 60px;">
    <div class="checkin-hero-bg" style="padding-bottom: 60px;">
        <div class="checkin-hero-content">
            @if($mode === 'checkin')
                <div style="font-size:2.1rem; font-weight:300; line-height:1.2;">
                    Hello <span style="font-weight:600;">Miss {{ $reservation['firstName'] ?? '' }} {{ $reservation['lastName'] ?? '' }}</span>,<br>
                    Your stay at <span style="font-weight:600; color:#fff; text-shadow:0 1px 4px #0003;">Ariane Resort</span> begins right now!
                </div>
                <div style="font-size:1.15rem; color:#e0e0e0; margin-top:24px;">Complete your self check-in in minutes.</div>
            @else
                <div style="font-size:2.1rem; font-weight:300; line-height:1.2;">
                    Hello <span style="font-weight:600;">Miss {{ $reservation['firstName'] ?? '' }} {{ $reservation['lastName'] ?? '' }}</span>,<br>
                    <span style="color:#e0e0e0;">It is already time to say goodbye!</span>
                </div>
                <div style="font-size:1.25rem; color:#fff; margin-top:32px; font-weight:500;">Complete your self check-out at Ariane Resort in minutes.</div>
            @endif
        </div>
    </div>
    @if(is_array($reservation) && isset($reservation['arrivalDate'], $reservation['departureDate']))
        <div class="checkin-room-card">
            <img class="checkin-room-img" src="{{ asset('images/' . ($reservation['roomImage'] ?? 'ExecutiveBedroom.jpg')) }}" alt="Room">
            <div class="checkin-room-details">
                @if($mode === 'checkin')
                    <div class="checkin-room-title">{{ $reservation['roomTypeDescription'] ?? 'Executive Room' }}</div>
                    <div class="checkin-room-dates">
                        Sat, <span class="date">{{ \Carbon\Carbon::parse($reservation['arrivalDate'])->format('M d,Y') }}</span>
                        to Mon, <span class="date">{{ \Carbon\Carbon::parse($reservation['departureDate'])->format('M d,Y') }}</span>
                        ({{ $reservation['nrNights'] ?? 1 }} nights)
                    </div>
                    <div class="checkin-room-confirm">Confirmation number: <span style="color:#222; font-weight:500;">{{ $reservation['confirmationNumber'] ?? '' }}</span></div>
                    <button class="checkin-btn" wire:click="startPersonalInfoForm">CHECK-IN</button>
                @else
                    <div class="checkout-label">Room number: <span class="checkout-value">{{ $reservation['roomNumber'] ?? '107' }}</span></div>
                    <div class="checkout-label">Departure date: <span class="checkout-bold">Sat,</span> <span class="checkout-value">{{ \Carbon\Carbon::parse($reservation['departureDate'])->format('M d,Y') }}</span></div>
                    <div class="checkout-label">Total stay amount: <span class="checkout-amount">${{ $reservation['totalAmount'] ?? '446.52' }}</span></div>
                    <div class="checkout-confirm">Confirmation number: <span style="font-weight:bold;">{{ $reservation['confirmationNumber'] ?? '' }}</span></div>
                    <button class="checkout-btn">PROCEED TO CHECK-OUT</button>
                @endif
            </div>
        </div>
    @endif

    <!-- معلومات إضافية أسفل الصفحة -->
    <div style="background: #f6f6f6; padding: 50px 0;">
        <div class="container">
            @if($mode === 'checkin')
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/bulb-light-icon.png') }}" style="height:56px;">
                        <div class="fw-bold mt-2">Intuitive & fast process</div>
                        <div class="text-muted">Delight yourself of an intuitive, quick and easy pre-checkin</div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/timer-icon.png') }}" style="height:40px;">
                        <div class="fw-bold mt-2" style="color:#b85c5c;">Speed up the access to your room</div>
                        <div class="text-muted">Save time and pickup your room key in the blink of an eye.</div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/chat-icon.png') }}" style="height:40px;">
                        <div class="fw-bold mt-2" style="color:#b85c5c;">Communicate with hotel</div>
                        <div class="text-muted">Inform the hotel of your arrival in advance with a new communication platform.</div>
                    </div>
                </div>
            @else
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('images/timer-icon.png') }}" style="height:40px;">
                        <div class="fw-bold mt-2">Intuitive & fast</div>
                        <div class="text-muted">Check your bill and pay your stay in just 3 clicks made on your preferred device.</div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/credit-card.png') }}" style="height:40px;">
                        <div class="fw-bold mt-2" style="color:#0082a3;">Simplicity of payment</div>
                        <div class="text-muted">The settlement of your reservation is automatically processed on the credit card submitted during check-in.</div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/bill.png') }}" style="height:40px;">
                        <div class="fw-bold mt-2" style="color:#0082a3;">Don't forget your bill</div>
                        <div class="text-muted">You can ask for your stay invoice during the flow. It will be automatically issued and sent to the provided email address.</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- end step 3 section --> 