@extends('layouts.app')

@section('main_content')
    <section class="containerProducts">
        <div class="container">  
            <div class="products">
                @foreach ($comics as $comic)
                    <div class="product">
                             <figure>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                         </figure>
                        <figcaption class="title">
                            {{ $comic['series'] }}
                        </figcaption>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
@endsection 

@section('side_content')
    <section class="section2">
       <div class="container"> 
          <div class="product_placement">
            <div class="product_accessory">
                <img src="{{ asset('img\buy-comics-digital-comics.png') }} " alt="">
                <span class="textAccessory">DIGITAL COMICS</span>
            </div>

            <div class="product_accessory">
                <img src="{{ asset('img\buy-comics-merchandise.png') }} " alt="">
                <span class="textAccessory">DC MERCHANDISE</span>
            </div>

            <div class="product_accessory">
                <img src="{{ asset('img\buy-comics-subscriptions.png') }} " alt="">
                <span class="textAccessory">SUBSCRIPTION</span>
            </div>

            <div class="product_accessory">
                <img src="{{ asset('img\buy-comics-shop-locator.png') }} " alt="">
                <span class="textAccessory">COMIC SHOP LOCATOR</span>
            </div>

            <div class="product_accessory">
                <img src="{{ asset('img\buy-dc-power-visa.svg') }} " alt="">
                <span class="textAccessory">DC POWER VISA</span>
            </div>
          </div>
       </div>
    </section>
@endsection
