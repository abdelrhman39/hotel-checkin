<!-- start step 4 section -->
<style>
    body { background: #f4f4f4; }
    .step4-container {
        display: flex;
        min-height: 100vh;
        background: #f4f4f4;
        justify-content: center;
        flex-wrap: wrap;
    }
    .step4-form-area {
        /* flex: 0 0 60vw; */
        /* min-width: 340px; */
        background: #fff;
        padding: 0;
        /* display: flex; */
        flex-direction: column;
        align-items: flex-start;
        min-height: 100vh;
        border-right: 1px solid #ededed;
    }
    .step4-title {
        font-size: 2.7rem;
        font-weight: 400;
        color: #444;
        margin-bottom: 0.1em;
        margin-top: 2.2em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        letter-spacing: -1px;
        /* margin-left: 60px; */
    }
    .step4-subtitle {
        color: #bdbdbd;
        font-size: 1.13rem;
        margin-bottom: 2.2em;
        margin-top: 0.1em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        letter-spacing: 0.1px;
        /* margin-left: 60px; */
    }
    .step4-section-title {
        font-size: 1.18rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 1.2em;
        margin-top: 1.5em;
        text-align: left;
        width: 100%;
        max-width: 520px;
        /* margin-left: 60px; */
    }
    .step4-form-box {
        width: 100%;
        /* max-width: 520px; */
        background: #fff;
        border-radius: 8px;
        border: 1px solid #cfd8dc;
        padding: 0;
        margin-bottom: 2em;
        box-shadow: none;
        /* margin-left: 60px; */
        overflow: hidden;
    }
    .step4-form-group {
        width: 100%;
        padding: 6px 15px;
        border-bottom: 1px solid #e0e0e0;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-bottom: 12px;
    }
    .step4-form-group:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    .step4-form-label {
        display: block;
        color: #2196f3;
        margin-bottom: 2px;
        font-weight: 200;
        letter-spacing: 0.1px;
        line-height: 1;
    }
    input, select, textarea, .form-control, .form-select {
        padding: 0px 25px!important;
        width: 100%;
        max-width: 100%;
        resize: none;
        outline: none;
        font-size: 16px;
        border: 1px solid #e4e4e4;
        color: var(--medium-gray);
        line-height: inherit;
        word-break: normal;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        padding-right: 38px !important;
    }
    .step4-form-input, .step4-form-select {
        width: 100%;
        border: none;
        background: transparent;
        padding: 0 0 0px 0;
        color: #222;
        outline: none;
        font-weight: 200;
        border-radius: 0;
        box-shadow: none;
        border: none !important;
    }
    .step4-form-input:focus, .step4-form-select:focus {
        background: #f8f8f8;
    }
    .step4-form-row {
        display: flex;
        width: 100%;
        background: #fff;
        border-bottom: 1px solid #e0e0e0;
    }
    .step4-form-row .step4-form-group {
        border-bottom: none;
        padding: 0 0 0 0px;
        margin-bottom: 0;
    }
    
    
    .step4-form-row .step4-form-group {
        padding: 5px 15px!important; 
        /* margin-left: 1px;
        margin-right: 1px; */
    }
    .step4-form-row .step4-form-group:not(:last-child) {
        border-right: 1px solid #e0e0e0;
    }
    .step4-update-btn {
        background: #0082a3;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 300;
        padding: 4px 0px;
        display: block;
        transition: background 0.2s;
        min-width: 155px;
        letter-spacing: 0.5px;
    }
    .step4-update-btn:hover {
        background: #005f7a;
    }
    .step4-sections-list {
        width: 100%;
        max-width: 520px;
        margin: 2.5em 0 0 0;
        background: none;
        margin-left: 60px;
    }
    .step4-section-link {
        color: #d0d0d0;
        font-size: 1.09rem;
        padding: 18px 0 18px 0;
        border-bottom: 1px solid #ededed;
        display: block;
        text-decoration: none;
        transition: color 0.2s;
        background: none;
        font-weight: 400;
        letter-spacing: 0.1px;
    }
    .step4-section-link.active {
        color: #444;
        font-weight: 600;
        background: none;
        cursor: default;
    }
    .step4-section-link:last-child {
        border-bottom: none;
    }
    /* Right summary */
    .step4-summary-area {
        width: 40vw;
        min-width: 260px;
        background: #f7f7f7;
        padding: 38px 0 0 0;
        min-height: 100vh;
        border-left: 1px solid #e0e0e0;
    }
    .step4-summary-title {
        font-size: 1.55rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 0.7em;
        text-align: left;
        margin-left: 0;
    }
    .step4-summary-dates {
        color: #888;
        font-size: 1.22rem;
        margin-bottom: 0.7em;
        text-align: left;
        margin-left: 0;
    }
    .step4-summary-img {
        width: 290px;
        max-width: 95%;
        border-radius: 8px;
        margin: 0.7em auto 0.7em auto;
        box-shadow: 0 2px 12px #bbb;
        display: block;
    }
    .step4-summary-nights {
        color: #888;
        font-size: 1.18rem;
        text-align: left;
        margin-left: 0;
        margin-top: 0.5em;
    }
    @media (max-width: 1100px) {
        /* لا تغير flex-direction في التابلت، فقط صغر العرض */
        .step4-form-area { flex: 0 0 60vw; min-width: 340px; }
        .step4-summary-area { width: 40vw; min-width: 260px; padding: 32px 0 0 0; }
        .step4-form-box { max-width: 98vw; }
        .step4-update-btn { margin: 32px 0 0 0; width: 100%; min-width: 0; }
    }
    @media (max-width: 700px) {
        .step4-title { font-size: 2rem; }
        .step4-summary-img { width: 98vw; max-width: 98vw; }
        .step4-container { flex-direction: column; }
        .step4-form-area { flex: 1 1 100%; min-width: 0; border-right: none; }
        .step4-summary-area { width: 100%; padding: 18px 0 0 0; border-left: none; }
    }
    .is-invalid {
        border: 1px solid #e53935 !important;
        background: #fff8f8;
        position: relative;
    }
    .input-error-message {
        color: #e53935;
        font-size: 0.97em;
        margin-top: 2px;
        margin-bottom: 2px;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .input-error-icon {
        right: 36px !important;
        pointer-events: none;
        z-index: 2;
    }
    .signature-pad-container {
        position: relative;
        width: 100%;
        min-height: 160px;
    }
    #signaturex_pad {
        background: #fff;
        border-radius: 6px;
        border: 2px dotted #CCCCCC;
        width: 100%;
        height: 160px;
        touch-action: none;
        display: block;
    }
    /* Modern select for estimate arrival time */
    .modern-time-select {
        width: 150px;
        margin-left: 18px;
        font-size: 1.04em;
        padding: 7px 36px 7px 14px;
        border-radius: 6px;
        border: 1px solid #cfd8dc;
        background: #fff url('data:image/svg+xml;utf8,<svg fill="%23888" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>') no-repeat right 10px center/18px 18px;
        box-shadow: 0 2px 8px rgba(60,60,60,0.06);
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        transition: border 0.2s, box-shadow 0.2s;
    }
    .modern-time-select:focus {
        border: 1.5px solid #2196f3;
        box-shadow: 0 2px 12px rgba(33,150,243,0.08);
        outline: none;
    }
    .modern-time-select:disabled, select:disabled {
        opacity: 1;
        background: #e4e4e4 !important;
    }
</style>
<div class="container mb-5 pb-5">
    <div class="row">
        <div class="col-md-8 step4-form-area px-4">
            <div class="step4-title">Review & complete</div>
            <div class="step4-subtitle">the following form</div>
            <div class="step4-section-title">Personal information</div>
            @if($step4Section === 'personal' || !$personalInfoCompleted)
                <form class="step4-form-box" wire:submit.prevent="validatePersonalInfoAndNext">
                    <div class="step4-form-group @error('personalInfo.first_name') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">First name</label>
                        <input type="text" class="step4-form-input" wire:model.lazy="personalInfo.first_name" />
                        @error('personalInfo.first_name')
                            <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-group @error('personalInfo.last_name') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Last name</label>
                        <input type="text" class="step4-form-input" readonly wire:model.lazy="personalInfo.last_name" />
                        @error('personalInfo.last_name')
                            <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-row">
                        <div class="step4-form-group @error('personalInfo.birth_day') is-invalid @enderror" style="flex:1; min-width:0; position:relative;">
                            <label class="step4-form-label">Day of birth</label>
                            <select class="step4-form-select" wire:model.lazy="personalInfo.birth_day">
                                <option value="">Day</option>
                                @for($i=1;$i<=31;$i++)
                                    <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                                @endfor
                            </select>
                            @error('personalInfo.birth_day')
                                <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                            @enderror
                        </div>
                        <div class="step4-form-group @error('personalInfo.birth_month') is-invalid mx-1 @enderror" style="flex:1; min-width:0; position:relative;">
                            <label class="step4-form-label">Month of birth</label>
                            <select class="step4-form-select" wire:model.lazy="personalInfo.birth_month">
                                <option value="">Month</option>
                                @foreach(['January','February','March','April','May','June','July','August','September','October','November','December'] as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                            </select>
                            @error('personalInfo.birth_month')
                                <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                            @enderror
                        </div>
                        <div class="step4-form-group @error('personalInfo.birth_year') is-invalid @enderror" style="flex:1; min-width:0; position:relative;">
                            <label class="step4-form-label">Year of birth</label>
                            <select class="step4-form-select" wire:model.lazy="personalInfo.birth_year">
                                <option value="">Year</option>
                                @for($y = date('Y'); $y >= 1900; $y--)
                                    <option value="{{ $y }}">{{ $y }}</option>
                                @endfor
                            </select>
                            @error('personalInfo.birth_year')
                                <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                            @enderror
                        </div>
                    </div>
                    <div class="step4-form-group @error('personalInfo.nationality') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Nationality</label>
                        <select class="step4-form-select" wire:model.lazy="personalInfo.nationality">
                            <option value="">Select Nationality</option>
                            <option value="US">USA</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            <option value="GB">United Kingdom</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua And Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State Of</option>
                            <option value="BQ">Bonaire</option>
                            <option value="BA">Bosnia And Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, The Democratic Republic Of The</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island And Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic Of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle Of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic Of</option>
                            <option value="KR">Korea, Republic Of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, The Former Yugoslav Republic Of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States Of</option>
                            <option value="MD">Moldova, Republic Of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestine</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option>
                            <option value="KN">Saint Kitts And Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="SX">Saint Martin</option>
                            <option value="PM">Saint Pierre And Miquelon</option>
                            <option value="VC">Saint Vincent And The Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome And Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia And The South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard And Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province Of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic Of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad And Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks And Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic Of</option>
                            <option value="VN">Vietnam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis And Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        @error('personalInfo.nationality')
                            <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @else
                <div class="step4-form-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>{{ $personalInfo['first_name'] ?? '' }} {{ $personalInfo['last_name'] ?? '' }}, {{ $personalInfo['birth_year'] ?? '' }}-{{ $personalInfo['birth_month'] ?? '' }}-{{ $personalInfo['birth_day'] ?? '' }}</div>
                    <button type="button" class="btn btn-link" wire:click="editPersonalInfo" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;">Edit</button>
                </div>
            @endif
    
            {{-- Contact information section --}}
            <div class="step4-section-title">Contact information</div>
            @if($step4Section === 'contact')
                <form class="step4-form-box" wire:submit.prevent="validateContactInfoAndNext">
                    <div class="step4-form-group @error('contactInfo.email') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Email</label>
                        <input type="email" class="step4-form-input" wire:model.lazy="contactInfo.email" />
                        @error('contactInfo.email')
                            <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-row">
                        <div class="step4-form-group @error('contactInfo.phone_code') is-invalid me-1 @enderror" style="flex:0.6; min-width:0; position:relative;">
                            <label class="step4-form-label">Country code</label>
                            <select class="step4-form-select" wire:model.lazy="contactInfo.phone_code">
                                <option value="">Code</option>
                                <option value="+1">+1 (USA)</option>
                                <option value="+33">+33 (France)</option>
                                <option value="+49">+49 (Germany)</option>
                                <option value="+44">+44 (UK)</option>
                                <!-- ... باقي الأكواد ... -->
                            </select>
                            @error('contactInfo.phone_code')
                                <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                            @enderror
                        </div>
                        <div class="step4-form-group @error('contactInfo.phone') is-invalid @enderror" style="flex:1.4; min-width:0; position:relative;">
                            <label class="step4-form-label">Phone</label>
                            <input type="text" class="step4-form-input" wire:model.lazy="contactInfo.phone" maxlength="14" />
                            @error('contactInfo.phone')
                                <span class="input-error-icon" style="position:absolute; right:10px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                            @enderror
                        </div>
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @elseif($contactInfoCompleted)
                <div class="step4-form-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>{{ $contactInfo['email'] ?? '' }}<br>{{ $contactInfo['phone_code'] ?? '' }} {{ $contactInfo['phone'] ?? '' }}</div>
                    <button type="button" class="btn btn-link" wire:click="editContactInfo" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;">Edit</button>
                </div>
            @endif
    
            {{-- Address information section --}}
            <div class="step4-section-title">Address information</div>
            @if($step4Section === 'address')
                <form class="step4-form-box" wire:submit.prevent="validateAddressInfoAndNext">
                    <div class="step4-form-group @error('addressInfo.country') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Country</label>
                        <select class="step4-form-select" wire:model.lazy="addressInfo.country">
                            <option value="">Country</option>
                            <option value="FR">France</option>
                            <option value="US">USA</option>
                            <option value="DE">Germany</option>
                            <option value="GB">United Kingdom</option>
                            <!-- ... باقي الدول ... -->
                        </select>
                        @error('addressInfo.country')
                            <span class="input-error-icon" style="position:absolute; right:36px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-group @error('addressInfo.address1') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Address line 1</label>
                        <input type="text" class="step4-form-input" wire:model.lazy="addressInfo.address1" />
                        @error('addressInfo.address1')
                            <span class="input-error-icon" style="position:absolute; right:36px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-group" style="position:relative;">
                        <label class="step4-form-label">Address line 2 ( Optional )</label>
                        <input type="text" class="step4-form-input" wire:model.lazy="addressInfo.address2" />
                    </div>
                    <div class="step4-form-group @error('addressInfo.city') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">City</label>
                        <input type="text" class="step4-form-input" wire:model.lazy="addressInfo.city" />
                        @error('addressInfo.city')
                            <span class="input-error-icon" style="position:absolute; right:36px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <div class="step4-form-group @error('addressInfo.zip') is-invalid @enderror" style="position:relative;">
                        <label class="step4-form-label">Zip code</label>
                        <input type="text" class="step4-form-input" wire:model.lazy="addressInfo.zip" />
                        @error('addressInfo.zip')
                            <span class="input-error-icon" style="position:absolute; right:36px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @elseif($addressInfoCompleted)
                <div class="step4-form-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>
                        {{ $addressInfo['country'] ?? '' }} 
                        {{ $addressInfo['address1'] ?? '' }} 
                        @if(!empty($addressInfo['address2'])){{ $addressInfo['address2'] }} @endif
                        {{ $addressInfo['city'] ?? '' }} 
                        {{ $addressInfo['zip'] ?? '' }}
                    </div>
                    <button type="button" class="btn btn-link" wire:click="editAddressInfo" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;text-wrap-mode: nowrap;">Edit</button>
                </div>
            @endif
    
            {{-- Main guest signature section --}}
            <div class="step4-section-title">Main guest signature</div>
            @if($step4Section === 'signature')
                <form class="step4-form-box" wire:submit.prevent="validateSignatureAndNext">
                    <div class="step4-form-group @error('signature') is-invalid @enderror" style="position:relative; background: #f7f7f7;">
                        <label class="step4-form-label" style="color:#444; font-size: 0.98em; font-weight:400;">Onscreen Signature</label>
                        <div class="signature-pad-container" style="background:#fff; border-radius:6px; border:2px dotted #CCCCCC; width:100%; position:relative;">
                            <canvas id="signaturex_pad" width="600" height="160" style="width:100%;height:160px;touch-action: none;display:block;"></canvas>
                            <button type="button" id="clear_button" style="position:absolute; right:18px; bottom:8px; font-size:0.97em; color:#2196f3; text-decoration:underline; background:none; border:none; cursor:pointer;">Clear</button>
                        </div>
                        <input type="hidden" wire:model="signature" id="sig-dataUrl">
                        @error('signature')
                            <span class="input-error-icon" style="position:absolute; right:36px; top:65%; transform:translateY(-50%); color:#e53935;">&#9888;</span>
                        @enderror
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @elseif($signatureCompleted)
                <div class="step4-form-box step4-summary-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <span>Signature captured</span>
                    <button type="button"  class="btn btn-link" wire:click="editSignature" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;">Edit</button>
                </div>
            @endif
    
            {{-- Arrival Details section --}}
            <div class="step4-section-title">Arrival Details</div>
            @if($step4Section === 'arrival')
                <form class="step4-form-box" wire:submit.prevent="validateArrivalDetailsAndNext">
                    <div class="step4-form-group" style="position:relative;">
                        <label class="step4-form-label">Flight number (if arriving at the airport) <span style="color:#bdbdbd; font-weight:400;">( Optional )</span></label>
                        <input type="text" class="step4-form-input" wire:model.lazy="arrivalDetails.flight_number" placeholder="Flight number (Optional)" />
                    </div>
                    <div class="step4-form-group" style="position:relative;">
                        <label class="step4-form-label">User-Defined Field 2 <span style="color:#bdbdbd; font-weight:400;">( Optional )</span></label>
                        <input type="text" class="step4-form-input" wire:model.lazy="arrivalDetails.user_defined_2" placeholder="User-Defined Field 2 (Optional)" />
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @elseif($arrivalDetailsCompleted)
                <div class="step4-form-box step4-summary-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>
                        @if($arrivalDetails['flight_number'])
                            Flight: {{ $arrivalDetails['flight_number'] }}<br>
                        @endif
                        @if($arrivalDetails['user_defined_2'])
                            User Field: {{ $arrivalDetails['user_defined_2'] }}
                        @endif
                    </div>
                    <button type="button" class="btn btn-link" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;" wire:click="editArrivalDetails">Edit</button>
                </div>
            @endif
    
            {{-- Marketing and Communication preferences section --}}
            <div class="step4-section-title">Marketing and Communication preferences</div>
            @if($step4Section === 'marketing')
                <form class="step4-form-box" wire:submit.prevent="validateMarketingAndNext">
                    <div class="step4-form-group" style="position:relative;">
                        <div style="font-size:1.04em; color:#444; margin-bottom:10px;">We would like to send you promotional offers and news</div>
                        <div style="display:flex; align-items:center; gap:8px;">
                            <input type="checkbox" id="marketing_opt_in" style="width:18px; height:18px;" wire:model.lazy="marketing.opt_in">
                            <label for="marketing_opt_in" style="margin:0; font-size:0.98em; color:#444;">Yes please. I would like to receive promotional offers and news from you.</label>
                        </div>
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 18px auto 18px auto; width: 220px;">UPDATE</button>
                </form>
            @elseif(isset($marketingCompleted) && $marketingCompleted)
                <div class="step4-form-box step4-summary-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>
                        @if(isset($marketing['opt_in']) && $marketing['opt_in'])
                            I accept
                        @else
                            I do not accept
                        @endif
                    </div>
                    <button type="button" class="btn btn-link" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;" wire:click="editMarketing">Edit</button>
                </div>
            @endif
    
            {{-- Estimate arrival time section --}}
            <div class="step4-section-title" style="margin-top: 18px; color: #666; font-size: 1.15rem; font-weight: 500;">Estimate arrival time</div>
            @if($step4Section === 'estimate')
                <form class="step4-form-box" wire:submit.prevent="validateEstimateAndNext">
                    <div style="display: flex; flex-direction: column; gap: 0;">
                        <div style="display: flex; align-items: center; border-bottom: 1px solid #e0e0e0; padding: 16px 12px;">
                            <input type="radio" id="arrival_time_radio" name="estimate_option" value="time" wire:model.lazy="estimate.option" style="margin-right: 12px; width: 18px; height: 18px;">
                            <label for="arrival_time_radio" style="flex:1; margin:0; font-size:1.04em; color:#444;">Select your estimated arrival time</label>
                            <select wire:model.lazy="estimate.time" class="modern-time-select" id="arrival_time_select" @if($estimate['option'] !== 'time') disabled @endif>
                                <option value="">--:--</option>
                                @for($h=0;$h<24;$h++)
                                    <option value="{{ sprintf('%02d:00', $h) }}">{{ sprintf('%02d:00', $h) }}</option>
                                    <option value="{{ sprintf('%02d:30', $h) }}">{{ sprintf('%02d:30', $h) }}</option>
                                @endfor
                            </select>
                        </div>
                        <div style="display: flex; align-items: center; padding: 16px 12px;">
                            <input type="radio" id="dont_know_radio" name="estimate_option" value="unknown" wire:model.lazy="estimate.option" style="margin-right: 12px; width: 18px; height: 18px;">
                            <label for="dont_know_radio" style="margin:0; font-size:1.04em; color:#444;">I don't know my arrival time</label>
                        </div>
                    </div>
                    <button class="step4-update-btn" type="submit" style="margin: 24px auto 12px auto; width: 220px; font-size: 1.08em;">CONFIRM</button>
                </form>
            @elseif(isset($estimateCompleted) && $estimateCompleted)
                <div class="step4-form-box step4-summary-box" style="display: flex; align-items: center; justify-content: space-between; padding: 0 18px; min-height: 56px;">
                    <div>
                        @if(isset($estimate['option']) && $estimate['option'] === 'time' && !empty($estimate['time']))
                            Estimated arrival: {{ $estimate['time'] }}
                        @else
                            Arrival time unknown
                        @endif
                    </div>
                    @if(isset($showFinalConfirm) || $showFinalConfirm)
                        <button type="button" class="btn btn-link" style="color: #888; border: 1px solid #cfd8dc; border-radius: 4px; padding: 4px 18px;" wire:click="editEstimate">Edit</button>
                    @endif
                </div>
            @endif
    
            {{-- Final confirmation section (horizontal box, left message, right button) --}}
            @if($step4Section === 'finalConfirm' || !isset($showFinalConfirm) && !$showFinalConfirm)
                <div style="width:100%;display:flex;justify-content:center;align-items:center;margin-top:32px;">
                    <div style="background:#fff;border-radius:2px;box-shadow:0 2px 8px #ededed;padding:32px 0 28px 0;max-width:1000px;width:100%;display:flex;flex-direction:row;align-items:center;justify-content:space-between;border:1px solid #e0e0e0;">
                        <div style="font-size:1.13rem;color:#444;margin-left:60px;">Guest profile completed.</div>
                        <button class="step4-update-btn" style="width:220px;font-size:1.13rem;padding:10px 0;margin-right:60px;" wire:click="finalConfirm">CONFIRM</button>
                    </div>
                </div>
            @endif
    
         
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
<!-- end step 4 section -->

@push('scripts')
<script>
function initSignaturePad() {
    var canvas = document.getElementById("signaturex_pad");
    if (!canvas) return;
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#000";
    ctx.lineWidth = 2;

    let drawing = false;
    let last = {x: 0, y: 0};

    // Mouse events
    canvas.onmousedown = function(e) {
        drawing = true;
        last = getPos(e);
    };
    canvas.onmousemove = function(e) {
        if (!drawing) return;
        let pos = getPos(e);
        draw(last, pos);
        last = pos;
    };
    canvas.onmouseup = function(e) {
        drawing = false;
        updateLivewireSignature();
    };
    canvas.onmouseleave = function(e) {
        drawing = false;
        updateLivewireSignature();
    };

    // Touch events
    canvas.ontouchstart = function(e) {
        e.preventDefault();
        drawing = true;
        last = getTouchPos(e);
    };
    canvas.ontouchmove = function(e) {
        e.preventDefault();
        if (!drawing) return;
        let pos = getTouchPos(e);
        draw(last, pos);
        last = pos;
    };
    canvas.ontouchend = function(e) {
        drawing = false;
        updateLivewireSignature();
    };

    function getPos(e) {
        var rect = canvas.getBoundingClientRect();
        return {
            x: (e.clientX - rect.left) * (canvas.width / rect.width),
            y: (e.clientY - rect.top) * (canvas.height / rect.height)
        };
    }
    function getTouchPos(e) {
        var rect = canvas.getBoundingClientRect();
        var t = e.touches[0];
        return {
            x: (t.clientX - rect.left) * (canvas.width / rect.width),
            y: (t.clientY - rect.top) * (canvas.height / rect.height)
        };
    }
    function draw(from, to) {
        ctx.beginPath();
        ctx.moveTo(from.x, from.y);
        ctx.lineTo(to.x, to.y);
        ctx.stroke();
    }

    // Clear button
    var clearBtn = document.getElementById("clear_button");
    if (clearBtn) {
        clearBtn.onclick = function(e) {
            e.preventDefault();
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            updateLivewireSignature();
        };
    }

    // Update Livewire model
    function updateLivewireSignature() {
        var dataUrl = canvas.toDataURL("image/png");
        document.getElementById("sig-dataUrl").value = dataUrl;
        if (window.Livewire) {
            Livewire.find(document.querySelector('[wire\\:id]').getAttribute('wire:id')).set('signature', dataUrl);
        }
    }

    // إعادة رسم التوقيع إذا كان موجود
    if (window.signatureImageData) {
        var img = new window.Image();
        img.onload = function() { ctx.drawImage(img, 0, 0, canvas.width, canvas.height); };
        img.src = window.signatureImageData;
    }
}

// عند تحميل الصفحة لأول مرة
setTimeout(initSignaturePad, 300);
// عند كل تحديث Livewire
if (window.Livewire) {
    Livewire.hook('message.processed', (message, component) => {
        setTimeout(initSignaturePad, 100);
    });
}
// حفظ صورة التوقيع (Base64) في متغير عالمي عند العودة من Edit
window.signatureImageData = @json($signature ?? '');

document.addEventListener('livewire:load', function () {
    window.livewire && window.livewire.hook('message.processed', (message, component) => {
        const radio = document.getElementById('arrival_time_radio');
        const select = document.getElementById('arrival_time_select');
        if (radio && select && radio.checked) {
            select.disabled = false;
            setTimeout(() => select.focus(), 100);
        } else if (select) {
            select.disabled = true;
        }
    });
});
</script>
@endpush


