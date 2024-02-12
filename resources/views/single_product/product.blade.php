<div class="product__items">
    <div class="product__items--thumbnail">
        <a class="product__items--link" href="{{url('product/details')}}/{{$product->slug}}">
            <img class="product__items--img product__primary--img" src="{{env('ADMIN_URL').'/'.$product->image}}" alt="product-img" />
        </a>
        @if($product->flag_name)
        <div class="product__badge">
            <span class="product__badge--items sale">{{$product->flag_name}}</span>
        </div>
        @endif
    </div>
    <div class="product__items--content">
        <span class="product__items--content__subtitle">{{$product->medicine_type}}</span>
        <h3 class="product__items--content__title h4">
            <a href="{{url('product/details')}}/{{$product->slug}}" style="display: -webkit-box; overflow: hidden; -webkit-line-clamp:1; -webkit-box-orient: vertical;">{{$product->name}} {{$product->strength}}</a>
        </h3>
        <div class="product__items--price">
            <span class="current__price">BDT 110</span>
            <span class="price__divided"></span>
            <span class="old__price">BDT 78</span>
        </div>
        <ul class="product__items--action d-flex">
            <li class="product__items--action__list">
                <a class="product__items--action__btn add__to--cart" href="#">
                    <i class="fi fi-rs-shopping-cart"></i>
                    <span class="add__to--cart__text">Add to cart</span>
                </a>
            </li>
        </ul>
    </div>
</div>
