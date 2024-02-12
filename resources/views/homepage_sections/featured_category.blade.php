<!-- Featured Category section -->
<section class="shop-category-area section--padding">
    <div class="container">
        <div class="section__heading text-center mb-35">
            <h2 class="section__heading--maintitle">Featured Category</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="shop-category-inner">

                    @foreach ($featuedCategories as $category)
                        <a href="{{url('shop')}}?category={{$category->slug}}" class="shop-category-card">
                            <div class="shop-category-icon">
                                <img src="{{env('ADMIN_URL').'/'.$category->icon}}" alt="" />
                            </div>
                            <div class="shop-category-title">
                                <h4>{{$category->name}}</h4>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Category section -->
