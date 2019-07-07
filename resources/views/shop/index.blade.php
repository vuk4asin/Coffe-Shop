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
                    <div class="card-header" >
                        <h5>{{ $shop->name }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            @php 
                                $picture = "";
                                $shop->picture === NULL ? $picture = "coffee_shop.jpg" : $picture = $shop->picture; 
                            @endphp
                            <img alt="Card image cap" class="card-img-top embed-responsive-item" src="{{$picture}}" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <b>Address: </b> {{ $shop->address }}
                            </div>
                            <div class="col-md-12">
                               <b> Phone: </b> {{ $shop->phone }}
                            </div>
                            <div class="col-md-12">
                               <example-component></example-component>
                                <a class="float-right ml-1" href="{{route('shops.edit', $shop->id)}}"><i class="fas fa-pen"></i></a>
                                <a class="float-right mr-1" href="{{route('shops.show', $shop->id)}}"><i class="fas fa-align-justify"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
       </div>
       <div class="pag-links">
           {{$shops->links()}}
       </div>
    </div>
    @endsection
@include('shop.create')

