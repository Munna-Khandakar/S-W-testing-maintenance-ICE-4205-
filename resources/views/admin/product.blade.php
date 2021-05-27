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
                <p><strong>Operation Success!</strong> {{ session()->get('message') }}</p>
            </div>
        </div>
        @endif
        <div class="panel">
            <div class="panel-heading">
                <h3>All Products</h3>
                <button class="btn ripple-infinite btn-round btn-success" onclick="window.location='{{ route('add_product') }}'">
                    <div>
                        ADD
                    </div>
                </button>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Restaurant</th>
                                <th>Price</th>
                                <th>Offer</th>
                                <th>Ratings</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->restaurant_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->offer}}</td>
                                <td>{{$product->ratings}}</td>
                                <td>
                                    <button class=" btn btn-circle btn-mn btn-warning" value="primary" onclick="window.location='{{ route('edit_product',['id' => $product->id]) }}'">
                                        <span class="fa fa-edit"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-danger" value="primary" onclick="alert('Are you sure ?');window.location='{{ route('delete_product',['id' => $product->id]) }}'">
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
