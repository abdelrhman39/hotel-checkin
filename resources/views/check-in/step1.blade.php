<!-- start section -->
<section class="big-section bg-spring-wood" style="background: url(http://angie-scenario-online-demo-dev.azurewebsites.net/themes/standard/images/app/book-desktop.jpg)">
    <div class="layout"></div>
    <div class="container step1_style pt-5">
        <div class="row">
            <div class="col-xl-4 col-lg-5 md-mb-50px">
                <h3 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-20px">Find Reservation</h3>
                <p class="mb-30px">Check-out or check-in here from 23 hours before your departure or arrival.</p>
                
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-form-style-05">
                    <!-- start contact form -->
                    <form >
                        <div class="row justify-content-center">
                            <div class="col-md-12 sm-mb-20px">
                                <input class="mb-20px input-name border-radius-4px border-color-white box-shadow-double-large form-control required @error('reservationNumber') is-invalid @enderror" type="number" name="reservationNumber" placeholder="Reservation Number *" wire:model.lazy="reservationNumber" />
                                @error('reservationNumber')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <input class="mb-20px input-name border-radius-4px border-color-white box-shadow-double-large form-control required @error('lastName') is-invalid @enderror" type="text" name="lastName" placeholder="Last Name *" wire:model.lazy="lastName" />
                                @error('lastName')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            <div class="col-md-12 text-center text-md-end mt-30px sm-mt-20px">
                                <input class="bg-transparent" type="hidden" name="redirect" value="">
                                <button wire:click.prevent="findReservation" class="btn btn-large btn-round-edge btn-box-shadow btn-switch-text btn-dark-gray left-icon submit w-100" type="submit">
                                    <span>
                                        <span><i class="feather icon-feather-calendar"></i></span>
                                        <span class="btn-double-text" data-text="Find reservation">Find reservation</span> 
                                    </span>
                                </button> 
                            </div>
                            <div class="col-12">
                                <div class="form-results d-none text-center mt-15px ps-15px pe-15px"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->



<!-- start page title -->
<section class="ipad-top-space-margin pt-0 pb-0" style="position: relative;z-index: 5;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">
                <div class="d-flex flex-column justify-content-center extra-very-small-screen">
                    <h2 class="text-dark-gray d-inline-block fw-400 ls-0px mb-4">
                        By proceeding online check-in, you will avoid queuing at the frontdesk<br>
                        and will get your room key in seconds.
                    </h2> 
            
                    <h2 class="text-dark-gray d-inline-block fw-400 ls-0px mb-0">
                        You can also inform us of your estimated arrival time<br>
                        to make sure your room will be ready when you reach us.
                    </h2> 
                </div>

                <div class="d-flex align-items-center justify-content-center pb-5">
                    <img width="80px" class="pt-5" src="{{ asset('images/desk-bell-icon.png') }}" alt="">
                    <img width="80px" class="pb-5" src="{{ asset('images/timer-icon.png') }}" alt="">
                    <img width="80px" class="pt-5" src="{{ asset('images/chat-icon.png') }}" alt="">
                </div>
                
            </div>
        </div>
    </div>
</section> 
<!-- end page title --> 