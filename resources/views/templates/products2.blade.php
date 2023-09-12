
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">#Type d'huile</a></li>
                                <li><a href="#featured" data-toggle="tab">#Type d'huile</a></li>
                                <li><a href="#latest" data-toggle="tab">#Type d'huile</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 5)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ $product->img }}"
                                                                style="height: 300px; width: 250px;"
                                                                alt="polo shirt img"></a>
                                                        <form
                                                            action="{{ route('cart.add', ['product' => $product->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class=" aa-add-card-btn"><strong>Add To
                                                                    Cart</strong></button>
                                                        </form>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $product->name }}</a></h4>
                                                            <span
                                                                class="aa-product-price">${{ $product->price }}</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->
                                        {{--  --}}
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 6)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ $product->img }}"
                                                                style="height: 300px; width: 250px;"
                                                                alt="polo shirt img"></a>
                                                        <form
                                                            action="{{ route('cart.add', ['product' => $product->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class=" aa-add-card-btn"><strong>Add To
                                                                    Cart</strong></button>
                                                        </form>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $product->name }}</a></h4>
                                                            <span
                                                                class="aa-product-price">${{ $product->price }}</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 7)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ $product->img }}"
                                                                style="height: 300px; width: 250px;"
                                                                alt="polo shirt img"></a>
                                                        <form
                                                            action="{{ route('cart.add', ['product' => $product->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class=" aa-add-card-btn"><strong>Add To
                                                                    Cart</strong></button>
                                                        </form>
                                                        <figcaption>
                                                            <h4 class="aa-product-title"><a
                                                                    href="#">{{ $product->name }}</a></h4>
                                                            <span
                                                                class="aa-product-price">${{ $product->price }}</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->

                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
