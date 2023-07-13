@extends('layouts.main-layout')

@section('content')

<div>

    QUESTA è LA PAGINA LISTA-FUMETTI.BLADE.PHP
    <br>
    <a href="{{route('home')}}">HOME</a>

    <div>
        <h2 class="mt-5">Lista fumetti:</h2>

        <div class="d-flex flex-wrap">
            
            @foreach($fumetti as $fumetto)
            <div class="card my-2 col-2 ">

                <div class="immagine-fumetto">
                <img src="{{$fumetto['thumb']}}" alt="??immagine fumetto??">
                </div>
                
                <div>
                {{$fumetto['title']}}
                </div>
                
            </div>
            @endforeach
        </div>
        
    </div>
        
</div>

@endsection