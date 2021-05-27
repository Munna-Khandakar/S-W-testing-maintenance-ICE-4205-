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
        <ul id="tabs-demo6" class="nav nav-tabs nav-tabs-v6" role="tablist">
            <li role="presentation" class="active">
                <a href="#demo" id="tabs-demo6-3" role="tab" data-toggle="tab" aria-expanded="true"></a>
            </li>
            @foreach($categories as $category)
            <li role="presentation" class="">
                <a href="#{{$category->name}}" id="tabs-demo6-1" role="tab" data-toggle="tab" aria-expanded="false">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
        <div id="tabsDemo6Content" class="tab-content tab-content-v6 col-md-12">
            <div role="tabpanel" class="tab-pane fade active in" id="demo" aria-labelledby="tabs-demo7-demo">
                <p>
                    Press the selected item to add
                </p>
            </div>
            @foreach($categories as $category)
            <div role="tabpanel" class="tab-pane fade" id="{{$category->name}}" aria-labelledby="tabs-demo7-{{$category->name}}">
                <form class="cmxform" id="signupForm" method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="name" name="name" required>
                            <span class="bar"></span>
                            <label>Item</label>
                        </div>
                        <input type="text" value="{{$category->id}}" name="category_id" hidden required>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="file" class="form-text" id="image" name="image" required accept="image/*">
                            <span class="bar"></span>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <select class="form-control" name="restaurant_id">
                                <option value="0">Select restaurant</option>
                                @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="number" class="form-text" id="price" name="price" required>
                            <span class="bar"></span>
                            <label>Price</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="number" class="form-text" id="offer" name="offer"
                            <span class="bar"></span>
                            <label>Offer</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <select class="form-control" name="ratings">
                                <option value="0">Ratings</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="submit btn btn-danger" type="submit" value="Submit">
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@section('javascript')


@endsection
