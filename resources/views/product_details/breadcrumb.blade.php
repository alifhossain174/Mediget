<!-- Start breadcrumb section -->
<div class="product-details-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="product-d-breadcrumbs-menu">
                    <li>
                        <a href="{{url('/')}}">Home</a><i class="fi-rr-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{url('shop')}}?category={{$product->category_slug}}">{{$product->category_name}}</a><i class="fi-rr-angle-right"></i>
                    </li>
                    <li class="active">
                        <a href="{{url('product/details')}}/{{$product->slug}}">{{$product->name}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End breadcrumb section -->
