<style>
    body { background: #f4f4f4; }
    .extras-container {
        display: flex;
        min-height: 100vh;
        background: #f4f4f4;
        justify-content: center;
        flex-wrap: wrap;
    }
    .extras-form-area {
        flex: 0 0 600px;
        background: #fff;
        padding: 0 0 0 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        min-height: 100vh;
        border-right: 1px solid #ededed;
    }
    .extras-title {
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
    .extras-subtitle {
        color: #bdbdbd;
        font-size: 1.13rem;
        margin-bottom: 2.2em;
        margin-top: 0.1em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        letter-spacing: 0.1px;
    }
    .extras-section-title {
        font-size: 1.18rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 1.2em;
        margin-top: 1.5em;
        text-align: left;
        width: 100%;
        max-width: 520px;
    }
    .extras-form-box {
        width: 100%;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        padding: 0;
        margin-bottom: 2em;
        box-shadow: none;
        overflow: hidden;
    }
    .extras-summary-area {
        width: 35%;
        background: #f7f7f7;
        padding: 38px 0 0 0;
        min-height: 100vh;
        border-left: 1px solid #e0e0e0;
    }
    .extras-summary-title {
        font-size: 1.55rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 0.7em;
        text-align: left;
        margin-left: 0;
    }
    .extras-summary-dates {
        color: #888;
        font-size: 1.22rem;
        margin-bottom: 0.7em;
        text-align: left;
        margin-left: 0;
    }
    .extras-summary-img {
        width: 290px;
        max-width: 95%;
        border-radius: 8px;
        margin: 0.7em auto 0.7em auto;
        box-shadow: 0 2px 12px #bbb;
        display: block;
    }
    .extras-summary-nights {
        color: #888;
        font-size: 1.18rem;
        text-align: left;
        margin-left: 0;
        margin-top: 0.5em;
    }
    .extras-included-box {
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 8px #ededed;
        border: 1px solid #e0e0e0;
        padding: 18px 24px;
        margin-top: 32px;
        margin-bottom: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 700px;
        width: 100%;
    }
    .extras-confirm-btn {
        background: #0082a3;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 0.8rem;
        font-weight: 400;
        padding: 10px 0px;
        min-width: 220px;
        letter-spacing: 0.5px;
        transition: background 0.2s;
        margin-left: 32px;
    }
    .extras-confirm-btn:hover {
        background: #005f7a;
        color: white;
    }
    .extras-card {
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        box-shadow: 0 2px 8px #ededed;
        padding: 18px 24px 18px 24px;
        margin-bottom: 18px;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        max-width: 700px;
        width: 100%;
    }
    .extras-card-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        margin-right: 18px;
    }
    .extras-card-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .extras-card-title {
        font-size: 1.13rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 2px;
    }
    .extras-card-desc {
        font-size: 0.98rem;
        color: #888;
        margin-bottom: 8px;
    }
    .extras-card-qty-row {
        display: flex;
        align-items: center;
        margin-top: 8px;
    }
    .extras-card-qty-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid #cfd8dc;
        background: #fafbfc;
        color: #888;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 8px;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
    }
    .extras-card-qty-btn:hover {
        background: #e0e0e0;
        color: #444;
    }
    .extras-card-qty-value {
        font-size: 1.13rem;
        min-width: 24px;
        text-align: center;
        color: #444;
    }
    .extras-card-price {
        font-size: 1.08rem;
        color: #0082a3;
        font-weight: 600;
        margin-left: 18px;
        white-space: nowrap;
    }
    .extras-card-add-btn {
        background: #fff;
        color: #0082a3;
        border: 1.5px solid #0082a3;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 500;
        padding: 7px 24px;
        min-width: 120px;
        letter-spacing: 0.5px;
        transition: background 0.2s, color 0.2s;
        margin-left: 18px;
    }
    .extras-card-add-btn:hover {
        background: #0082a3;
        color: #fff;
    }
</style>
<br>
<div class="container">
    <div class="extras-container mt-5">
        <div class="col-md-8 step4-form-area px-4 bg-white">
            <div class="extras-title">Enhance your stay</div>
            <div class="extras-subtitle">Review & add extras to your reservation</div>
            <div class="extras-section-title">Extras in your reservation</div>
            @php
                $extrasList = [
                    'breakfast_adults' => 'Continental breakfast (adults)',
                    'breakfast_children' => 'Continental breakfast (children age 2-10)',
                    'airport_transfer' => 'Private airport transfer',
                    'internet_hotspot' => 'Mini portable internet hotspot',
                    'romantic_package' => 'Romantic package',
                ];
            @endphp
            @if(collect($extrasQuantities)->filter(fn($q) => $q > 0)->count() > 0)
                <div style="width:100%;margin-bottom:18px;">
                    @foreach($extrasList as $key => $label)
                        @if(($extrasQuantities[$key] ?? 0) > 0)
                            <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 0;">
                                <span>{{ $extrasQuantities[$key] }} x {{ $label }}</span>
                                <button style="color:#c00;border:1px solid #cfd8dc;border-radius:6px;padding:4px 22px;background:#fff;font-size:1em;" type="button" wire:click="removeExtra('{{ $key }}')">REMOVE</button>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            <div class="extras-form-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px; margin-bottom: 18px;">
                <div>Guarded parking</div>
                <div style="color: #0082a3; font-size: 0.98em; cursor:pointer;">See details</div>
                <div style="color: #888; font-size: 0.98em;">Bundled in your reservation</div>
            </div>
            <div class="extras-section-title" style="margin-top: 32px;">You could be interested in the following extras</div>
            <div class="extras-card">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=80&q=80" class="extras-card-img" alt="Continental breakfast adults">
                <div class="extras-card-content">
                    <div class="extras-card-title">Continental breakfast (adults)</div>
                    <div class="extras-card-desc">A selection of coffe/tea, juice, pastries, bread, jam, and fruits served in our dining room.</div>
                    <div style="color:#888; font-size:0.97em; margin-bottom:2px;">{{ $extrasQuantities['breakfast_adults'] ?? 0 }} Continental breakfast (adults) x 2 nights x 15$ = {{ ($extrasQuantities['breakfast_adults'] ?? 0) * 2 * 15 }} $</div>
                    <div class="extras-card-qty-row">
                        <button class="extras-card-qty-btn" type="button" wire:click="decrementExtra('breakfast_adults')">-</button>
                        <span class="extras-card-qty-value">{{ $extrasQuantities['breakfast_adults'] ?? 0 }}</span>
                        <button class="extras-card-qty-btn" type="button" wire:click="incrementExtra('breakfast_adults')">+</button>
                        <span style="margin-left:18px; color:#888; font-size:0.97em;">Select the quantity per day</span>
                    </div>
                </div>
            </div>
            <div class="extras-card">
                <img src="https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=crop&w=80&q=80" class="extras-card-img" alt="Continental breakfast children">
                <div class="extras-card-content">
                    <div class="extras-card-title">Continental breakfast (children age 2-10)</div>
                    <div class="extras-card-desc">A selection of coffe/tea, juice, pastries, bread, jam, and fruits served in our dining room.</div>
                    <div style="color:#888; font-size:0.97em; margin-bottom:2px;">{{ $extrasQuantities['breakfast_children'] ?? 0 }} Continental breakfast (children age 2-10) x 2 nights x 10$ = {{ ($extrasQuantities['breakfast_children'] ?? 0) * 2 * 10 }} $</div>
                    <div class="extras-card-qty-row">
                        <button class="extras-card-qty-btn" type="button" wire:click="decrementExtra('breakfast_children')">-</button>
                        <span class="extras-card-qty-value">{{ $extrasQuantities['breakfast_children'] ?? 0 }}</span>
                        <button class="extras-card-qty-btn" type="button" wire:click="incrementExtra('breakfast_children')">+</button>
                        <span style="margin-left:18px; color:#888; font-size:0.97em;">Select the quantity per day</span>
                    </div>
                </div>
            </div>
            <div class="extras-card">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=80&q=80" class="extras-card-img" alt="Private airport transfer">
                <div class="extras-card-content">
                    <div class="extras-card-title">Private airport transfer</div>
                    <div class="extras-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
                <div style="display:flex; flex-direction:column; align-items:flex-end; justify-content:space-between; height:100%;">
                    <div class="extras-card-price">+ 75.00$ per stay</div>
                    @if(($extrasQuantities['airport_transfer'] ?? 0) == 0)
                        <button class="extras-card-add-btn" type="button" wire:click="incrementExtra('airport_transfer')">ADD (+75.00$)</button>
                    @else
                        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;margin-top:8px;">
                            <img src="http://angie-scenario-online-demo-dev.azurewebsites.net/themes/standard/images/app/ci-done-icon.png" alt="done" style="width:32px;height:32px;display:block;" />
                            <span style="color:#888;line-height:1.2;margin-top:2px;text-align:center;">just added to your<br>reservation</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="extras-card">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=80&q=80" class="extras-card-img" alt="Mini portable internet hotspot">
                <div class="extras-card-content">
                    <div class="extras-card-title">Mini portable internet hotspot</div>
                    <div class="extras-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
                <div style="display:flex; flex-direction:column; align-items:flex-end; justify-content:space-between; height:100%;">
                    <div class="extras-card-price">+ 10$ per stay</div>
                    @if(($extrasQuantities['internet_hotspot'] ?? 0) == 0)
                        <button class="extras-card-add-btn" type="button" wire:click="incrementExtra('internet_hotspot')">ADD (+10$)</button>
                    @else
                        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;margin-top:8px;">
                            <img src="http://angie-scenario-online-demo-dev.azurewebsites.net/themes/standard/images/app/ci-done-icon.png" alt="done" style="width:32px;height:32px;display:block;" />
                            <span style="color:#888;line-height:1.2;margin-top:2px;text-align:center;">just added to your<br>reservation</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="extras-card">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=80&q=80" class="extras-card-img" alt="Romantic package">
                <div class="extras-card-content">
                    <div class="extras-card-title">Romantic package</div>
                    <div class="extras-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
                <div style="display:flex; flex-direction:column; align-items:flex-end; justify-content:space-between; height:100%;">
                    <div class="extras-card-price">+ 50$ per stay</div>
                    @if(($extrasQuantities['romantic_package'] ?? 0) == 0)
                        <button class="extras-card-add-btn" type="button" wire:click="incrementExtra('romantic_package')">ADD (+50$)</button>
                    @else
                        <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;margin-top:8px;">
                            <img src="http://angie-scenario-online-demo-dev.azurewebsites.net/themes/standard/images/app/ci-done-icon.png" alt="done" style="width:32px;height:32px;display:block;" />
                            <span style="color:#888;line-height:1.2;margin-top:2px;text-align:center;">just added to your<br>reservation</span>
                        </div>
                    @endif
                </div>
            </div>
            @php
                $addedCount = collect($extrasQuantities)->filter(fn($q, $k) => $k !== 'parking' && $q > 0)->count();
            @endphp
            <div class="extras-included-box" style="margin-bottom: 48px;">
                <span>1 included and {{ $addedCount }} added</span>
                <button class="extras-confirm-btn" wire:click="calcExtrasDataAndConfirm">CONFIRM YOUR OPTIONS</button>
            </div>
        </div>
        <div class="col extras-summary-area px-4">
            <div class="extras-summary-title">Ariane Resort</div>
            <div class="extras-summary-dates">
                {{ \Carbon\Carbon::parse($reservation['arrivalDate'])->format('M d') }} - {{ \Carbon\Carbon::parse($reservation['departureDate'])->format('M d') }}<br>
                Confirmation # : {{ $reservation['confirmationNumber'] ?? '' }}
            </div>
            <img class="img-fluid" src="{{ asset('images/' . ($reservation['roomImage'] ?? 'ExecutiveBedroom.jpg')) }}" alt="Room">
            <div class="extras-summary-nights">{{ $reservation['nrNights'] ?? 1 }} nights stay</div>
        </div>
    </div>
</div>
