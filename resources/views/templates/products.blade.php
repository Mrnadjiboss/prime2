
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">#Type d'huile</a></li>
                                <li><a href="#women" data-toggle="tab">#Type d'huile</a></li>
                                <li><a href="#sports" data-toggle="tab">#Type d'huile</a></li>
                                <li><a href="#electronics" data-toggle="tab">#Type d'huile</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 1)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ $product->img }}"
                                                                style="height: 300px; width: 250px;"
                                                                alt="polo shirt img"></a>
                                                        {{-- <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
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
                                                                class="aa-product-price">{{ $product->price }}$</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <!-- <p>Category: {{ $product->category->name }}</p> -->
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Compare"><span
                                                                class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip"
                                                            data-placement="top" title="Quick View"
                                                            data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    {{-- <span class="aa-badge aa-sale" href="#">Nouveau!</span> --}}
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                    <a class="aa-browse-btn" href="/products">backoffice <span
                                            class="fa fa-long-arrow-right"></span></a>
                                    <a class="aa-browse-btn" href="/banners">Banners <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>


                                <!-- start women product category -->
                                <div class="tab-pane fade" id="women">
                                    <ul class="aa-product-catg">
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 2)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ $product->img }}"
                                                                style="height: 300px; width: 250px;"
                                                                alt="polo shirt img"></a>
                                                        {{-- <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a> --}}
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
                                                                class="aa-product-price">{{ $product->price }}$</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <!-- <p>Category: {{ $product->category->name }}</p> -->
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Compare"><span
                                                                class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip"
                                                            data-placement="top" title="Quick View"
                                                            data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                                                </li>
                                            @endif
                                        @endforeach
                                        <!-- start single product item -->
                                    </ul>
                                    <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                                </div>
                                <!-- / women product category -->
                                <!-- start sports product category -->
                                <div class="tab-pane fade" id="sports">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 3)
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
                                                                class="aa-product-price">{{ $product->price }}</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Compare"><span
                                                                class="fa fa-exchange"></span></a>

                                                        <a href="#" data-toggle2="tooltip"
                                                            data-placement="top" title="Quick View"
                                                            data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                                <!-- / sports product category -->
                                <!-- start electronic product category -->
                                <div class="tab-pane fade" id="electronics">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach ($products as $product)
                                            @if ($product->category_id === 4)
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
                                                                class="aa-product-price">{{ $product->price }}</span>
                                                            <span class="aa-product-price"><del>$65.50</del></span>
                                                            <!-- Display the category name -->
                                                            <p>Category: {{ $product->category->name }}</p>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip"
                                                            data-placement="top" title="Compare"><span
                                                                class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip"
                                                            data-placement="top" title="Quick View"
                                                            data-toggle="modal"
                                                            data-target="#quick-view-modal-{{ $product->id }}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                                                </li>
                                            @endif
                                        @endforeach
                                        <!-- start single product item -->
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / electronic product category -->
                            </div>
                            @foreach ($products as $product)
                                <!-- quick view modal -->
                                <div class="modal fade" id="quick-view-modal-{{ $product->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider">
                                                            <div class="simpleLens-gallery-container"
                                                                id="demo-1">
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a class="simpleLens-lens-image"
                                                                            data-lens-image="{{ $product->img }}">
                                                                            <img src="{{ $product->img }}"
                                                                                style="height: 200px; width: 200px"
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>{{ $product->name }}</h3>
                                                            <div class="aa-price-block">
                                                                <span
                                                                    class="aa-product-view-price">{{ $product->price }}
                                                                    $ </span>
                                                                <p id="availability-{{ $product->id }}"
                                                                    class="aa-product-avilability">In stock</p>

                                                            </div>
                                                            <p>{{ $product->description }} </p>
                                                            <div class="aa-prod-quantity">
                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#"></a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <form
                                                                    action="{{ route('cart.add', ['product' => $product->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="aa-add-to-cart-btn"><span
                                                                            class="fa fa-shopping-cart"></span><strong>Add
                                                                            To Cart</strong></button>
                                                                </form>
                                                                <a href="#" class="aa-add-to-cart-btn"
                                                                    onclick="toggleAvailability({{ $product->id }})"
                                                                    data-product-id="{{ $product->id }}"><span
                                                                        class="fa fa-shopping-cart"></span>
                                                                    Availability</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

