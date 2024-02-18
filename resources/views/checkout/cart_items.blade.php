@if (session('cart'))
    @foreach (session('cart') as $id => $details)
        <tr class="cart-single-product-table-wrapper">
            <td class="table-head-1">
                <div class="cart-single-product-first-col">
                    <button onclick="removeCartItems({{ $id }})" type="button" class="cart-single-product-remove"><i class="fi-rr-trash"></i></button>
                    <div>
                        <span class="cart-single-product-title d-block">{{ $details['name'] }}</span>

                        @if (isset($details['unit_id']))
                            @php
                                $unitInfo = DB::table('units')
                                    ->where('id', $details['unit_id'])
                                    ->first();
                            @endphp
                            @if ($unitInfo)
                                <small><b>Unit</b>: {{ $unitInfo ? $unitInfo->name : '' }}</small>
                            @endif
                        @endif

                    </div>
                </div>
            </td>
            <td class="table-head-2">
                <div class="quantity__box minicart__quantity">
                    <button type="button" class="quantity__value decrease" data-id="{{ $id }}" aria-label="quantity value" value="Decrease Value">-</button>
                    <label>
                        <input type="number" class="quantity__number" value="{{ $details['quantity'] }}" data-counter="">
                    </label>
                    <button type="button" class="quantity__value increase" data-id="{{ $id }}" value="Increase Value">+</button>
                </div>
            </td>
            <td class="table-head-3">
                @php
                    $checkoutUnitPrice = $details['discount_price'] > 0 ? $details['discount_price'] : $details['price'];
                @endphp
                <span class="cart-product-price">{{ number_format($checkoutUnitPrice, 2) }} BDT</span>
            </td>
            <td class="table-head-4">
                <span class="cart-product-price">{{ number_format($checkoutUnitPrice * $details['quantity'], 2) }} BDT</span>
            </td>
        </tr>
    @endforeach
@endif
