@extends('layout')

@section('content')

<!-- Features -->
<section id="features">
    <div class="container">

        <div class="row aln-center">



            @foreach ($products as $product)

            <div class="col-3 col-6-medium col-12-small">
                <div class="product-container">
                    <div class="product-image">
                        <a href="{{ $product->id }}" class="image featured">
                            <img src="{{ $product->product_image }}" alt="" />
                        </a>
                    </div>
                    <div class="product-price">

                    </div>
                    <div class="product-caption">
                        <h3>{{ $product->product_name }}
                            <div>
                                <a href="{{ $product->id }}"></a>
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
