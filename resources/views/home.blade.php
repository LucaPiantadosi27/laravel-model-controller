@extends('Layouts/app')

@section ('content')



<div class="container py-5  ">
   <h1> Lista Film: </h1> 
    <div class="row row-cols-4 ">

        @foreach($movies as $movie)

            <div class="col p-2">
                <div class="card border-black rounded-3" style="width: 17rem">
                    
                    <div class="card-body bg-body-tertiary ">

                      <h4 class="card-title">{{$movie->title}}</h4>
                      <p class="card-text">({{$movie->nationality}})</p>
                      <p class="card-text">({{$movie->original_title}})</p>
                      <a href="#" class="btn btn-primary">Go Watch</a>

                    </div>
                </div>
                

            </div>

        @endforeach

    </div>






    
    
    

   

    

</div>
@endsection