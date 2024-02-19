@php
    $appSection = DB::table('mobile_apps')->where('id', 1)->first();
@endphp

<!-- Download App section -->
@if($appSection->status == 1)
<section class="download-app">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="download-app-inner">
                    <div class="download-app-img">
                        @if($appSection->image)
                            <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{url(env('ADMIN_URL').'/'.$appSection->image)}}">
                        @else
                            <img src="https://placehold.co/700x520/EEE/31343C" alt="" />
                        @endif
                    </div>
                    <div class="download-app-content">
                        <h2>{{$appSection->title}}</h2>
                        <p>
                            {{$appSection->description}}
                        </p>
                        <form class="download-app-form" action="{{url('send/app/link')}}" method="post">
                            @csrf
                            @honeypot
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fi fi-rr-phone-call"></i>
                                </div>
                                <input type="tel" name="phone" placeholder="01234567890" required />
                            </div>
                            <div class="download-app-form-btn">
                                <button type="submit">{{$appSection->btn_text}}</button>
                            </div>
                        </form>
                        <div class="download-app-links">
                            @if($appSection->play_store_link)
                            <a href="{{$appSection->play_store_link}}" target="_blank">
                                <img src="{{url('assets')}}/img/icon/google-play.svg" alt="" />
                            </a>
                            @endif

                            @if($appSection->app_store_link)
                            <a href="{{$appSection->app_store_link}}" target="_blank">
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
@endif
<!-- End Download App section -->
