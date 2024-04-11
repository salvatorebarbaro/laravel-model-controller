<!-- estendiamo il nostro layout app per avere l'intelayatura iniziale -->
@extends ('layouts/app')

@section('content')
<div class="container text-center ">
    <h1 class=" bg-danger ">Film in sala</h1>

    <div class="row row-cols-3  justify-content-center gap-2 ">
            <!-- iterazione per ogni film -->
                @foreach($movies as $movie)
                <div class=" col  d-flex  flex-column border  border-1 border-black rounded-2  justify-content-around my-4 gap-1">
                    <h3 class=" text-uppercase fs-2 fw-bolder  ">titolo:{{$movie->title}}</h3>
                    <span class=" text-uppercase fs-5 text-primary ">titolo originale:{{$movie->original_title}}</span>
                    <span class="text-uppercase fs-5 text-primary">nazionalità:{{$movie->nationality}}</span>
                    <span class="text-uppercase fs-5 text-primary">data di uscità:{{$movie->date}}</span>
                    <span id="voto" class=" {{ $movie->vote < 8 ? 'text-danger' :($movie->vote < 9 ? 'text-warning' : 'text-success') }} fs-4 mb-5">voto: {{$movie->vote}}</span> 
                </div>
        

        
                
        
        

        @endforeach
    </div>
    
</div>

@endsection