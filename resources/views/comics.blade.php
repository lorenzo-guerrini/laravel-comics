@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <section>
        <div class="jumbotron"></div>
    </section>
    <section>
        <div class="container">
            <h2>Current Series</h2>
            <div class="series-container">
                @foreach ($comics as $key => $value)
                    <div class="comic">
                        <a href="#">
                            <div class="comic-thumb">
                                <img src="{{ $value['thumb'] }}" alt="{{ $value['title'] }}">
                            </div>
                            <div class="comic-title">
                                {{ $value['title'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button>Load More</button>
        </div>
    </section>
@endsection
