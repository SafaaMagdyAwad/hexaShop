    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-{{ $loop->last?12:4 }}">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{ route('singleProduct',$product) }}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="{{ route('singleProduct',$product) }}"><i class="fa fa-star"></i></a></li>
                                    <li><a href="{{ route('singleProduct',$product) }}"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/images/products/'.$product->image) }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ $product->title }}</h4>
                            <span>${{ $product->price }}</span>
                            <ul class="stars">
                                @for ($i = 1; $i < $product->star ; $i++)
                                <li><i class="fa fa-star"></i></li>
                                @endfor

                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
