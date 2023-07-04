@extends('template.section')
@push('title')
    <title>Product</title>
@endpush
@php
    $cars = [
        [
            'name' => 'Toyota Camry',
            'price' => 20,
            'description' => 'A beautiful car',
        ],
        [
            'name' => 'Toyota Camry',
            'price' => 20,
            'description' => 'A beautiful car',
        ],
        [
            'name' => 'Toyota Camry',
            'price' => 20,
            'description' => 'A beautiful car',
        ],
    ];
@endphp

@section('cards')
    <div class="row">
        @foreach ($cars as $item)
       
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://w0.peakpx.com/wallpaper/310/1013/HD-wallpaper-mustang-car-cars.jpg" height="300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item['name']}}</h5>
                    <p class="card-text">{{$item['description']}}</p>
                    <p class="card-text">{{$item['price']}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
             
        @endforeach
    </div>
@endsection
