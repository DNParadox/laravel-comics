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
                        {{ $comic['series   '] }}
                    </figcaption>
                </div>
@endforeach
        </div>


</div>
</section>
@endsection 