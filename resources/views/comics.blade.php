@extends('layouts.app')

@section('content')
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
