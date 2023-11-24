@extends('layout.site')

@section('title', "Shop")

@section('content')

    {{-- page breadcrumb --}}
    <x-breadcrumb />

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active"><a href="{{ route('site.shop') }}">All</a></li>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('site.shop', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item {{ $product->categories->first()?->slug }}">
                            <div class="product-image">
                                <a href="{{ route('site.shop.single-product', $product->slug) }}">
                                    <img src="{{ asset('assets/img/products/product-img-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price"><span>Per Kg</span> {{ $product->price }}$ </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
@endsection
