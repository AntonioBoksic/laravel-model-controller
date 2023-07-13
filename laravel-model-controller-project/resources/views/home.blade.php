@extends('layouts.main-layout')

@section('content')


<div id="home">


        <h1>
            QUESTA è LA PAGINA HOME.BLADE.PHP

            <br>
            <a href="{{route('lista-fumetti')}}">LISTA FUMETTI</a>
        </h1>
</div>

@endsection
