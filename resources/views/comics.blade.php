@extends('layouts.app')

@section('content')
    {{-- jumbotron --}}
    <div class="jumbotron">
        <div class="container">
            <h2>CURRENT SERIES</h2>
        </div>
    </div>

    {{-- comics section --}}
    <div class="comics-section">
        <div class="container">
            <div class="comics">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src=" {{ $comic['thumb'] }} " alt=" {{ $comic['title'] }} ">
                        <h3>
                            <a href=""> {{ $comic['series'] }} </a>
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
