<!-- Start product section -->
@foreach ($flags as $flag)
    @if($flag->featured == 1)
        <section class="product__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-35">
                    <h2 class="section__heading--maintitle">{{$flag->name}}</h2>
                </div>

                <div class="product__section--inner">
                    @php
                        $products = DB::table('products')
                            ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                            ->leftJoin('flags', 'products.flag_id', 'flags.id')
                            ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                            ->where('products.flag_id', $flag->id)
                            ->inRandomOrder()
                            ->skip(0)
                            ->limit(10)
                            ->get();
                    @endphp

                    @include('single_product.product', ['products' => $products])
                </div>

                <div class="section__bottom-btn">
                    <a href="{{url('shop')}}?flag={{$flag->slug}}" class="primary__btn">Show more</a>
                </div>
            </div>
        </section>
    @endif
@endforeach
<!-- End product section -->
