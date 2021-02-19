@extends('layout')
@section('header')
<!-- Header -->
<section id="header">
    <div class="container">
        <!-- Logo -->
        <h1 id="logo"><a href="index.html">Planet Poster</a></h1>
        <p>Design with passion</p>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
                <li>
                    <a href="#" class="icon fa-chart-bar"><span>Dropdown</span></a>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam dolore nisl</a></li>
                        <li>
                            <a href="#">Phasellus consequat</a>
                            <ul>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam dolore nisl</a></li>
                                <li><a href="#">Phasellus consequat</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Veroeros feugiat</a></li>
                    </ul>
                </li>
                <li><a class="icon solid fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
                <li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
                <li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
            </ul>
        </nav>
    </div>
</section>
@endsection

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
