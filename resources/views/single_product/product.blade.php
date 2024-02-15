
@foreach ($products as $product)
    <div class="swiper-slide">
        <div class="product__items">
            <div class="product__items--thumbnail">
                <a class="product__items--link" href="{{url('product/details')}}/{{$product->slug}}">
                    <img class="product__items--img product__primary--img lazy" src="{{url('assets')}}/img/product-load.gif" data-src="{{env('ADMIN_URL').'/'.$product->image}}" alt="" />
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

                @php
                    $totalStockAllVariants = 0; // jekonon variant er at least ekta stock e thakleo stock in dekhabe
                    $variants = DB::table('product_variants')->select('discounted_price', 'price', 'stock')->where('product_id', $product->id)->get();
                    if($variants && count($variants) > 0){
                        $variantMinDiscountPrice = 0;
                        $variantMinPrice = 0;
                        $variantMinDiscountPriceArray = array();
                        $variantMinPriceArray = array();

                        foreach ($variants as $variant) {
                            $variantMinDiscountPriceArray[] = $variant->discounted_price;
                            $variantMinPriceArray[] = $variant->price;
                            $totalStockAllVariants = $totalStockAllVariants + (int) $variant->stock;
                        }

                        $variantMinDiscountPrice = min($variantMinDiscountPriceArray);
                        $variantMinPrice = min($variantMinPriceArray);
                    }
                @endphp

                @include('single_product.price')
                @include('single_product.buttons')

            </div>
        </div>

    </div>
@endforeach

@php
    use Illuminate\Pagination\Paginator;
    use Illuminate\Pagination\LengthAwarePaginator;
@endphp

@if($products instanceof Paginator || $products instanceof LengthAwarePaginator)
    <div class="pagination-wrapper pt-4 text-center">
        {{ $products->links() }}
    </div>
@endif
