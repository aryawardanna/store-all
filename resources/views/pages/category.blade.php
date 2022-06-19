@extends('layouts.app')

@section('title')
    Store Categories Page
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="store-trend-categories ">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Categories</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-gadgets.svg" alt="gadget" class="w-100">
                            </div>
                            <p class="categories-text">
                                Monitoring
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-fruit.svg" alt="gadget" class="w-100">
                            </div>
                            <p class="categories-text">
                                Fruits
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-vegetable.svg" alt="vegetable" class="w-100">
                            </div>
                            <p class="categories-text">
                                Vegetable
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-sneaker.svg" alt="boots" class="w-100">
                            </div>
                            <p class="categories-text">
                                Boots
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-tools.svg" alt="gadget" class="w-100">
                            </div>
                            <p class="categories-text">
                                Tools
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="/images/categories-tractor.svg" alt="gadget" class="w-100">
                            </div>
                            <p class="categories-text">
                                Tractor
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('/images/products-broccoli.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Broccoli
                            </div>
                            <div class="products-price">
                                $890
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('/images/products-apple.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Apple
                            </div>
                            <div class="products-price">
                                $94,509
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-strawberry.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Strawberry
                            </div>
                            <div class="products-price">
                                $1,409
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-bubuk-maketti.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Bubuk Maketti
                            </div>
                            <div class="products-price">
                                $225
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('/images/products-durian.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Durian
                            </div>
                            <div class="products-price">
                                $45,184
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-mavic-kawe.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Mavic Kawe
                            </div>
                            <div class="products-price">
                                $503
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-black-edition-nike.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Black Edition Nike
                            </div>
                            <div class="products-price">
                                $70,482
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                        <a href="/details.html" class="components-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-bawang-putih.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Bawang Putih
                            </div>
                            <div class="products-price">
                                $783
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
