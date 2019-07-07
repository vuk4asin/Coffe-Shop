@extends('layouts.app')

@section('content')

<div  class="container">
    <form action="{{ route('shops.update', $shop->id) }}" id="form-add" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card animated bounce" id="shop-add" role="dialog">
        
        <div class="card-header">
            <h3>Add Coffee Shop</h3>
        </div>

        <div class="card-body">
            <label for="name">Name:</label>
            <input type="text" name="name" id="" class="form-control mb-2" value="{{ $shop->name}}" required>
            <label for="Address">Address:</label>
            <input type="text" name="address" class="form-control mb-2" value="{{ $shop->address}}" required>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="" class="form-control mb-2" value="{{ $shop->phone}}" required>
            <label for="picture">Picture:</label>
            <input type="file" name="picture" id=""  class="form-control-file">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success float-left">update</button>
        </div>    
    </div>
    </form>
</div>
@endsection