@extends ('layout')

@section ('content')
    <div id="wrapper">

        <div
            id="page"
            class="container"
        >
        
    @foreach ($products as $product)
        <div class="content">
            <div class="title">
                <h2>
                    <a href="/products/{{ $product->id }}">
                        {{ $product->product_image }}
                    </a>
                </h2>
            </div>

        <p>
            <img
                src="/images/banner.jpg"
                alt=""
                class="image image-full"
            />
        </p>

        {!! $product->product_image !!}
    </div>
    @endforeach
</div>
</div>
@endsection