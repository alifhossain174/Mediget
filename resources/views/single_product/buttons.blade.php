@if($variants && count($variants) > 0)
    @if($totalStockAllVariants > 0)
        @include('single_product.add_to_cart')
    @else
        @include('single_product.stock_out')
    @endif
@else
    @if($product->stock && $product->stock > 0)
        @include('single_product.add_to_cart')
    @else
        @include('single_product.stock_out')
    @endif
@endif
