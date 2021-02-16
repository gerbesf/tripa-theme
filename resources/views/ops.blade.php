@extends('tripa-theme::frontend')
@section('content')
    <div class="container">

        <div class="py-5">

            <h1>{{ $title ?: "Oops" }}</h1>
            @if($description)
                <p class="lead">{{ $description }}</p>
            @endif

        </div>
    </div>
@endsection
