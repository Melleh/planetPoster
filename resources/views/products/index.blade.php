@extends('layout')
@section('header')
<div class="container">

    <!-- Logo -->
    <h1 id="logo"><a href="/">Planet Poster</a></h1>
    <p></p>

</div>
@endsection
@section('content')

<!-- Features -->
<section id="features">
    <div class="container">

        <div class="row aln-center">


            @foreach ($products as $product)

            <div class="col-3 col-4-large col-6-medium col-12-small">
                <div class="product-container">
                    <div class="product-image">
                        <a href="{{ $product->path() }}" class="image featured">
                            <img src="{{ $product->product_image }}" alt="" />
                        </a>
                    </div>
                    <div class="product-price">

                    </div>
                    <div class="product-caption">
                        <h3>{{ $product->product_name }}
                            <div>
                                <a href="{{ $product->path() }}"></a>
                            </div>
                        </h3>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

</section>
@endsection
