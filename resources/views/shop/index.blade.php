@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <img alt="Card image cap" class="card-img-top embed-responsive-item" src="Coffee shops.png" />
            </div>
        @include('shop.errors')
        <button type="button" class="btn btn-info btn-sm mb-2 form-control" data-toggle="modal" data-target="#shop-add">Add Shop</button>
       <div class="row">
           @foreach($shops as $shop)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $shop->name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="CS.jpg" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                Address: {{ $shop->address }}
                            </div>
                            <div class="col-md-12">
                                Phone: {{ $shop->phone }}
                            </div>
                            <div class="col-md-12">
                                <h5>Rating</h5>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
       </div>
    </div>
@endsection
@include('shop.create')

