@extends('layout')

@section('content')

 <!-- Features -->
 <section id="features">
    <div class="container">

        <div class="row aln-center">

            <div class="col-3 col-6-medium col-12-small">
                <div class="product-container">

        @forelse ($articles as $article)

        <div class="col-3 col-6-medium col-12-small">
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

        @endforelse



    </div>
</div>

@endsection
