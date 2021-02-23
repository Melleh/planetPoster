@extends('layout')
@section('header')
<div class="spacer">
    <p></p>

</div>
@endsection

@section('content')

{{-- <div class="container">

                    <div class="title">
                        <h2>{{ $product->product_name }}</h2>
<img src="{{ $product->product_image }}" alt="" />
</div>

</div> --}}

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div id="content" class="col-8 col-12-medium">

                <!-- Post -->
                <article class="box post">

                    <span class="image featured"><img src="{{ $product->product_image }}" alt="" /></span>
                    <br>
                    <h3>More lovely posters</h3>


                        <div class="row aln-center">
                                @foreach ($features as $feature)
                                <div class="col-3 col-4-large col-6-medium col-12-small">


                                        <h3>
                                            <a href="/{{ $feature->path() }}">{{ $feature->product_name }}</a>
                                        </h3>
                                            <img src="{{ $feature->product_image }}" alt="" />


                                </div>
                                @endforeach

                        </div>


                </article>

            </div>

            <!-- Sidebar -->
            <div id="sidebar" class="col-4 col-12-medium">

                <!-- Excerpts -->
                <section>





                            <!-- Excerpt -->
                            <br>
                            <article class="box excerpt">
                                <header>
                                    <h3><a href="#">Select poster size:</a></h3><br>
                                </header>
                                <p>
                                    <input type="radio" id="a1" name="postersize" value="A1">
                                    <label for="a1">A1</label>
                                    <input type="radio" id="a2" name="postersize" value="A2">
                                    <label for="a2">A2</label>
                                    <input type="radio" id="a3" name="postersize" value="A3">
                                    <label for="a3">A3</label>
                                    <input type="radio" id="a4" name="postersize" value="A4">
                                    <label for="a3">A4</label><br><br>
                                </p>

                                    <h2>Price: $$</h2>

                                    <button type="button" id="putincart">Put in cart!</button>
                            </article>



                </section>

            </div>

        </div>
    </div>
</section>


@endsection
