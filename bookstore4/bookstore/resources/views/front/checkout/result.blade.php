@extends('front.layout.master')

@section('title', 'Result')

@section('body')
    <div class="hero page-inner overlay" style="background-image: url('front/img/hero_bg_6.jpg');">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
{{--                    <h1 class="heading" data-aos="fade-up">Products</h1>--}}

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="./">Home</a></li>
                            <li class="breadcrumb-item "><a href="./checkout">Check Out</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Result</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout-section spad" style="margin-top: 30px;">
        <div class="container">
            <div class="col-lg-12">
                <h4>
                    {{ $notification }}
                </h4>

                <a href="./" style="background-color: #005555; color: #fff; padding: 10px 20px">Continue Shopping</a>
            </div>
        </div>
    </div>

@endsection
