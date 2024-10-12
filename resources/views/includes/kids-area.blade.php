    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            @foreach ($products['kidsProducts'] as $product)
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="{{ route('singleProduct', $product) }}"><i
                                                            class="fa fa-eye"></i></a></li>
                                                <li><a href="{{ route('singleProduct', $product) }}"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li><a href="{{ route('singleProduct', $product) }}"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('assets/images/products/' . $product->image) }}"
                                            alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $product->title }}</h4>
                                        <span>${{ $product->price }}</span>
                                        <ul class="stars">
                                            @for ($i = 1; $i < $product->star; $i++)
                                                <li><i class="fa fa-star"></i></li>
                                            @endfor

                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->
