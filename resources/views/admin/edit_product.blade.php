@extends('admin.layout')
@section('content')

<div class="col-md-12">
    @if(session()->has('warn'))
    <div class="alert alert-warning col-md-12 col-sm-12 alert-icon alert-dismissible fade in" role="alert">
        <div class="col-md-2 col-sm-2 icon-wrapper text-center">
            <span class="fa fa-exclamation-triangle fa-2x"></span></div>
        <div class="col-md-10 col-sm-10">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p><strong>Warning!</strong> {{ session()->get('warn') }}</p>
        </div>
    </div>
    @endif
    @if(session()->has('message'))
    <div class="alert alert-success col-md-12 col-sm-12  alert-icon alert-dismissible fade in" role="alert">
        <div class="col-md-2 col-sm-2 icon-wrapper text-center">
            <span class="fa fa-check fa-2x"></span></div>
        <div class="col-md-10 col-sm-10">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p><strong>Success!</strong> {{ session()->get('message') }}</p>
        </div>
    </div>
    @endif
    <div class="col-md-12 tabs-area">
     <div class="panel-heading">
                <h2>Edit Product</h2>
            </div>
        <form class="cmxform" method="POST" action="{{ route('update_product') }}">
            @csrf
            <div class="col-md-6">
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="name" name="name" value="{{$product->name}}" required>
                    <span class="bar"></span>
                    <label>Name</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                  <p>Ratings</p>
                    <select class="form-control" name="ratings">
                        <option value="0">Ratings</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="{{$product->ratings}}" selected>{{$product->ratings}}</option>
                    </select>
                </div>
                <input type="text" name="id" value="{{$product->id}}"required hidden>
            </div>
            <div class="col-md-6">
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="number" class="form-text" id="price" name="price" value="{{$product->price}}" required>
                    <span class="bar"></span>
                    <label>Price</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="number" class="form-text" id="offer" name="offer" value="{{$product->offer}}">
                    <span class="bar"></span>
                    <label>Offer</label>
                </div>
            </div>
            <div class="col-md-12">
                <input class="submit btn btn-danger" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>

@endsection
@section('javascript')


@endsection
