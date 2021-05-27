@extends('admin.layout')
@section('content')


<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
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
                <h3>Restaurants</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('add_restaurant') }}">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with multiple buttons" name="name">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Restaurent Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($restaurants as $restaurant)
                            <tr>
                                <td>{{$restaurant->name}}</td>
                                <td>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary">
                                        <span class="fa icon-ban"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('javascript')

<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables-example').DataTable();
    });

</script>
@endsection
