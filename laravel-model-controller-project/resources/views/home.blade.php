@extends('layouts.main-layout')

@section('content')


<div id="home">


        <h1>
            QUESTA è LA PAGINA HOME.BLADE.PHP

            <br>
            <!-- <a href="{{route('lista-fumetti')}}">LISTA Studenti</a> -->

            <ul>
                @foreach ($students as $student)
                <li>
                    <div>
                        {{$student['name']}}  {{$student['surname']}}
                    </div>
                </li>
                @endforeach
            </ul>
        </h1>
</div>

@endsection
