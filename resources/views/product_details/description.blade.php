<!-- Start product details tab section -->
<section class="product__details--tab__section section--padding">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <ul class="product__details--tab d-flex mb-30">
                    <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">
                        Product description
                    </li>
                    @if($product->specification)
                    <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">
                        Specification
                    </li>
                    @endif
                    <li class="product__details--tab__list" data-toggle="tab" data-target="#information">
                        Product review
                    </li>
                    @if($product->warrenty_policy)
                    <li class="product__details--tab__list" data-toggle="tab" data-target="#custom">
                        Warrenty Policy
                    </li>
                    @endif
                </ul>
                <div class="product__details--tab__inner border-radius-10">
                    <div class="tab_content">
                        <div id="description" class="tab_pane active show">
                            <div class="product__tab--content">
                                {{ $product->short_description }}
                                <div class="product__tab--content__step mb-30">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                        @if($product->specification)
                        <div id="reviews" class="tab_pane">
                            <div class="product__tab--conten">
                                <div class="product__tab--content__step mb-30">
                                    {!! $product->specification !!}
                                </div>
                            </div>
                        </div>
                        @endif

                        <div id="information" class="tab_pane">
                            <div class="product__reviews">

                                <div id="writereview" class="reviews__comment--reply__area">
                                    <form action="{{url('submit/product/review')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="review_product_id" value="{{$product->id}}">
                                        <h3 class="reviews__comment--reply__title mb-15">
                                            Add a review
                                        </h3>

                                        <div class="row">
                                            <div class="col-12 mb-10">
                                                <textarea class="reviews__comment--reply__textarea" name="review" placeholder="Your Comments...." required></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15">
                                                <label>
                                                    <select name="rarting" class="reviews__comment--reply__input" required style="background: transparent; height: 40px;">
                                                        <option value="">Select Rating</option>
                                                        <option value="1">★</option>
                                                        <option value="2">★★</option>
                                                        <option value="3">★★★</option>
                                                        <option value="4">★★★★</option>
                                                        <option value="5">★★★★★</option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15 text-right">
                                                <button class="reviews__comment--btn text-white primary__btn" data-hover="Submit" type="submit">
                                                    SUBMIT
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="product__reviews--header" style="margin-top: 20px">
                                    <h2 class="product__reviews--header__title h3 mb-20">
                                        Customer Reviews
                                    </h2>
                                    <div class="reviews__ratting d-flex align-items-center">
                                        @for ($i=1;$i<=round($averageRating);$i++)
                                        <i class="fi fi-ss-star" style="color: var(--yellow-color); margin-right: 2px"></i>
                                        @endfor
                                        @for ($i=1;$i<=5-round($averageRating);$i++)
                                        <i class="fi fi-rs-star" style="color: var(--border-color); margin-right: 2px"></i>
                                        @endfor
                                        <span class="reviews__summary--caption">Based on {{$totalReviews}} reviews</span>
                                    </div>
                                </div>
                                <div class="reviews__comment--area">
                                    @foreach ($productReviews as $productReview)
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumb" style="width: 55px;">
                                                @if($productReview->user_image)
                                                <img src="{{url(env('ADMIN_URL').'/'.$productReview->user_image)}}" alt="comment-thumb" style="height: 55px; width: 55px; border-radius: 100%; object-fit: cover;"/>
                                                @endif
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4">
                                                            {{$productReview->username}}
                                                        </h3>
                                                        @for ($i=1;$i<=round($productReview->rating);$i++)
                                                        <i class="fi fi-ss-star" style="color: var(--yellow-color); margin-right: 2px"></i>
                                                        @endfor
                                                        @for ($i=1;$i<=5-round($productReview->rating);$i++)
                                                        <i class="fi fi-rs-star" style="color: var(--border-color); margin-right: 2px"></i>
                                                        @endfor
                                                    </div>
                                                    <span class="reviews__comment--content__date">{{date("F d, Y", strtotime($productReview->created_at))}}</span>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    {{$productReview->review}}
                                                </p>
                                            </div>
                                        </div>

                                        @if($productReview->reply)
                                        <div class="reviews__comment--list margin__left d-flex">
                                            <div class="reviews__comment--thumb" style="width: 55px;">
                                                @php
                                                    $logo = DB::table('general_infos')->where('id', 1)->select('logo', 'fav_icon')->first();
                                                @endphp
                                                @if($logo && $logo->fav_icon)
                                                <img src="{{url(env('ADMIN_URL').'/'.$logo->fav_icon)}}" alt="comment-thumb" style="height: 55px; width: 55px; border-radius: 100%; object-fit: cover;"/>
                                                @elseif($logo && $logo->logo)
                                                <img src="{{url(env('ADMIN_URL').'/'.$logo->logo)}}" alt="comment-thumb" style="height: 55px; width: 55px; border-radius: 100%; object-fit: cover;"/>
                                                @else

                                                @endif
                                            </div>
                                            <div class="reviews__comment--content">
                                                <div class="reviews__comment--top d-flex justify-content-between" style="margin-bottom: 0px">
                                                    <div class="reviews__comment--top__left">
                                                        <h3 class="reviews__comment--content__title h4" style="margin-bottom: 0px">
                                                            {{env('APP_NAME')}}
                                                        </h3>
                                                        <small style="color: gray; font-style: italic;">Replied on 2023-02-12</small>
                                                    </div>
                                                </div>
                                                <p class="reviews__comment--content__desc">
                                                    {{$productReview->reply}}
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="product__reviews">
                                <div class="product__reviews--header">
                                    <h2 class="product__reviews--header__title h3 mb-20">
                                        Customer Reviews
                                    </h2>
                                    <div class="reviews__ratting d-flex align-items-center">
                                        <ul class="rating d-flex">
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="reviews__summary--caption">Based on 2 reviews</span>
                                    </div>
                                    <a class="actions__newreviews--btn primary__btn" href="#writereview">Write A
                                        Review</a>
                                </div>
                                <div class="reviews__comment--area">
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="{{url('assets')}}/img/other/comment-thumb1.png" alt="comment-thumb" />
                                        </div>
                                        <div class="reviews__comment--content">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title h4">
                                                        Richard Smith
                                                    </h3>
                                                    <ul class="rating reviews__comment--rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="reviews__comment--content__date">February 18, 2022</span>
                                            </div>
                                            <p class="reviews__comment--content__desc">
                                                Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Eos ex repellat officiis neque.
                                                Veniam, rem nesciunt. Assumenda distinctio, autem
                                                error repellat eveniet ratione dolor facilis
                                                accusantium amet pariatur, non eius!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list margin__left d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="{{url('assets')}}/img/other/comment-thumb2.png" alt="comment-thumb" />
                                        </div>
                                        <div class="reviews__comment--content">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title h4">
                                                        Laura Johnson
                                                    </h3>
                                                    <ul class="rating reviews__comment--rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="reviews__comment--content__date">February 18, 2022</span>
                                            </div>
                                            <p class="reviews__comment--content__desc">
                                                Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Eos ex repellat officiis neque.
                                                Veniam, rem nesciunt. Assumenda distinctio, autem
                                                error repellat eveniet ratione dolor facilis
                                                accusantium amet pariatur, non eius!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reviews__comment--list d-flex">
                                        <div class="reviews__comment--thumb">
                                            <img src="{{url('assets')}}/img/other/comment-thumb3.png" alt="comment-thumb" />
                                        </div>
                                        <div class="reviews__comment--content">
                                            <div class="reviews__comment--top d-flex justify-content-between">
                                                <div class="reviews__comment--top__left">
                                                    <h3 class="reviews__comment--content__title h4">
                                                        John Deo
                                                    </h3>
                                                    <ul class="rating reviews__comment--rating d-flex">
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="rating__list">
                                                            <span class="rating__list--icon">
                                                                <svg class="rating__list--icon__svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                                    height="14.732" viewBox="0 0 10.105 9.732">
                                                                    <path data-name="star - Copy"
                                                                        d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                        transform="translate(0 -0.018)"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="reviews__comment--content__date">February 18, 2022</span>
                                            </div>
                                            <p class="reviews__comment--content__desc">
                                                Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Eos ex repellat officiis neque.
                                                Veniam, rem nesciunt. Assumenda distinctio, autem
                                                error repellat eveniet ratione dolor facilis
                                                accusantium amet pariatur, non eius!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="writereview" class="reviews__comment--reply__area">
                                    <form action="#">
                                        <h3 class="reviews__comment--reply__title mb-15">
                                            Add a review
                                        </h3>
                                        <div class="reviews__ratting d-flex align-items-center mb-20">
                                            <ul class="rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                            height="14.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy"
                                                                d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                transform="translate(0 -0.018)" fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-10">
                                                <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...."></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15">
                                                <label>
                                                    <input class="reviews__comment--reply__input"
                                                        placeholder="Your Name...." type="text" />
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-15">
                                                <label>
                                                    <input class="reviews__comment--reply__input"
                                                        placeholder="Your Email...." type="email" />
                                                </label>
                                            </div>
                                        </div>
                                        <button class="reviews__comment--btn text-white primary__btn"
                                            data-hover="Submit" type="submit">
                                            SUBMIT
                                        </button>
                                    </form>
                                </div>
                            </div> --}}
                        </div>

                        @if($product->warrenty_policy)
                        <div id="custom" class="tab_pane">
                            <div class="product__tab--content">
                                <div class="product__tab--content__step mb-30">
                                    {!! $product->warrenty_policy !!}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End product details tab section -->
