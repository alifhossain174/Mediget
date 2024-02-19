<!-- Service section -->
<section class="service-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-card-grid">

                    <!-- Single Service -->
                    @foreach ($services as $service)

                        @php
                            $url = 'javascript:void(0)';
                            if($service->id == 1){
                                $url = url('nursing/service/request');
                            }
                            if($service->id == 2){
                                $url = url('doctor/service/request');
                            }
                        @endphp

                        <a href="{{$url}}" class="single-service-card">
                            <div class="service-card-img">
                                <img class="lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{url(env('ADMIN_URL').'/'.$service->image)}}" alt="" />
                            </div>
                            <div class="single-service-content">
                                <h4>{{$service->title}}</h4>
                                <p>{{$service->description}}</p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service section -->
