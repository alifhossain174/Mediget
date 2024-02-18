@php
    $appSectionLink = DB::table('general_infos')
        ->select('play_store_link', 'app_store_link')
        ->where('id', 1)
        ->first();
@endphp

<!-- Download App section -->
<section class="download-app">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="download-app-inner">
                    <div class="download-app-img">
                        <img src="https://placehold.co/700x520/EEE/31343C" alt="" />
                    </div>
                    <div class="download-app-content">
                        <h2>Download the Mediget mobile app</h2>
                        <p>
                            Order medicine from the mobile app. Enter your mobile number
                            to receive the app download link.
                        </p>
                        <form class="download-app-form" action="#" method="post">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fi fi-rr-phone-call"></i>
                                </div>
                                <input type="tel" name="phone" placeholder="+8801234567890" required />
                            </div>
                            <div class="download-app-form-btn">
                                <button type="submit">Send link</button>
                            </div>
                        </form>
                        <div class="download-app-links">
                            @if($appSectionLink->play_store_link)
                            <a href="{{$appSectionLink->play_store_link}}" target="_blank">
                                <img src="{{url('assets')}}/img/icon/google-play.svg" alt="" />
                            </a>
                            @endif

                            @if($appSectionLink->app_store_link)
                            <a href="{{$appSectionLink->app_store_link}}" target="_blank">
                                <img src="{{url('assets')}}/img/icon/app-store.svg" alt="" />
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Download App section -->
