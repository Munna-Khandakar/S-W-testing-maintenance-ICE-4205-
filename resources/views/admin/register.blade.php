@extends('admin.layout')
@section('content')


<div class="col-md-12 top-20 padding-0">
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
        <div class="panel">
            <div class="panel-heading">
                <h3>Register a Seller</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form class="cmxform" id="signupForm" method="POST" action="{{ route('seller_store') }}">
                        @csrf
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="name" name="name" required>
                            <span class="bar"></span>
                            <label>Name</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="email" name="email" required>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>
                        <div class="col-sm-12 padding-0">
                            <select class="form-control" name="restaurant_id">
                                <option value="0">Select restaurant</option>
                                @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input class="submit btn btn-danger" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

    </div>

    @endsection

    @section('javascript')


    @endsection
