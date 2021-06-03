@extends('layouts.main-layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>Cars:</h1>
                <ul>
                    @foreach($cars as $car)
                        <li>
                            {{ $car -> name }}
                            -
                            {{ $car -> model }}
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
