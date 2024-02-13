<h3 class="product-details-title">
    {{$product->name}} {{$product->strength}}
</h3>
<p class="product-details-ctaegory">
    Category:<span>@if($product->is_otc) OTC medicine, @endif @if($product->is_antibiotic) Antibiotic, @endif {{$product->category_name}}</span>
</p>

@if($product->generic_name)
<p class="product-details-ctaegory" style="margin-top: 5px">
    Generic: <span>{{$product->generic_name}}</span>
</p>
@endif

@if($product->disease_name)
<p class="product-details-ctaegory" style="margin-top: 5px">
    Disease: <span>{{$product->disease_name}}</span>
</p>
@endif

@if($product->medicine_type_name)
<p class="product-details-ctaegory" style="margin-top: 5px">
    Meidicine Type: <span>{{$product->medicine_type_name}}</span>
</p>
@endif

<p class="product-details-ctaegory" style="margin-top: 5px">
    @if($product->piece_per_leaf)Pieces Per Leaf: <span class="m-0">{{$product->piece_per_leaf}}</span>@endif
    @if($product->leaf_per_box)&nbsp;Leaf Per Box: <span class="m-0">{{$product->leaf_per_box}}</span>@endif
</p>

<div class="product-d-info-group">
    @if($product->code)
    <div class="product-d-info-single">
        <p>Product Code:<span>{{$product->code}}</span></p>
    </div>
    @endif

    <div class="product-d-info-single">
        <p>
            Status:
            @if($variants && count($variants) > 0)
                @if($totalStockAllVariants > 0)
                    <span id="stock_status_text" class="text-success">Stock In</span>
                @else
                    <span id="stock_status_text" class="text-danger">Stock Out</span>
                @endif
            @else
                @if($product->stock && $product->stock > 0)
                    <span id="stock_status_text" class="text-success">Stock In</span>
                @else
                    <span id="stock_status_text" class="text-danger">Stock Out</span>
                @endif
            @endif
        </p>

    </div>

    @if($product->points)
    <div class="product-d-info-single points">
        <p>+<span>{{$product->points}} points</span></p>
    </div>
    @endif
</div>
