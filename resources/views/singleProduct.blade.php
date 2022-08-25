@extends('layouts.app')

@section('main_content')
    <section class="comic-info">
       <div class="colorline"></div>
      <div class="container2">
      
        <figure class="comicCover">
              <img src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['title'] }}">
              <figcaption class="upComic btntiny">
               <a href="#"> COMIC BOOK</a>
              </figcaption>
              <figcaption class="downComic btntiny">

                <a href="#">VIEW GALLERY</a>
              </figcaption>
        </figure>
        <div class="comicSection">
            <h1>{{ $current_comic['title'] }} </h1>

        <div class="undertext">
            <div class="bar">
                <span class="greenbar border maxwidth">
                    <div class="price"> U.S. Price: <span class="colortext">  {{ $current_comic['price'] }}</span></div>
                    <div class="available"> AVAILABLE</div>
                 
                </span>
                <span class="greenbar lowwidth">
                    <div class="checkavailable "> Check Availability <i class="fa-solid fa-chevron-down"></i></div>
                </span>
             </div>
    
        
        </div>
        <div class="description">
            {{ $current_comic['description']}}
       
         </div> 
            
      
        </div>
        <img class="adv" src="{{asset('img/adv.jpg')}}" alt="adv Superman">
    </section>

    <section class="greysection"> 
        <div class="container3">
            <div class="details">
                <div class="talent">
                    <h3>Talent</h3>

                    <div class="specific">
                     <span class="artists">  Art by: </span>  <span class="area-artist">
                        @foreach ( $current_comic['artists']  as $artist)
                                    <span class="second-text">{{$artist}},</span>
                                  
                                @endforeach
                     </span>
                    </div>

                  
                        <div class="specific border-bottom">
                                    <span class="artists">  Written by: </span> 
                                        <span class="area-artist">
                                            @foreach ( $current_comic['writers']  as $writers)
                                                <span class="second-text">{{$writers}},</span>
                                         
                                            @endforeach
                                        </span>
                         </div>

               

            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="specific">
                    <span class="artists">  Series: </span>  <span class="area-artist">
                      {{ $current_comic['series'] }}
                    </span>
                </div>

                <div class="specific">
                    <span class="artists">  U.S. Price: </span>  <span class="area-artist">
                      {{ $current_comic['price'] }}
                    </span>
                </div>

                <div class="specific border-bottom">
                    <span class="artists">  On Sale Date: </span>  <span class="area-artist">
                      {{ $current_comic['sale_date'] }}
                    </span>
                </div>
            </div>
        </div>

    </section>
@endsection