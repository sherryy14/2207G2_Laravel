@extends('template.section')
@push('title')
    <title>About</title>
@endpush
@php
    $arr = [
        [
            'name' => 'Car 1',
            'price' => "$239249",
            'description' => 'A beautiful car',
        ],
        [
            'name' => 'Car 2',
            'price' => "$45349",
            'description' => 'A beautiful car',
        ],
        [
            'name' => 'Car 3',
            'price' => "$12349",
            'description' => 'A beautiful car',
        ],
    ];
    
@endphp

@section('cards')
    <h1 class="text-center my-4">Top Selling Products</h1>

    <div class="row">
        @foreach ($arr as $item)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/2023-mclaren-artura-101-1655218102.jpg?crop=1.00xw:0.847xh;0,0.153xh&resize=1200:*"
                        class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                        <p class="card-text">{{ $item['description'] }}</p>
                        <p class="card-text">{{ $item['price'] }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
