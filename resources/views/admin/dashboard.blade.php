@extends('admin.layout')
@section('content')

<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3>Today's Order</h3>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                             <th>Time</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Restaurant</th>
                                <th>Customer Name</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Total Cost</th>
                                <th>Payment</th>
                                <th>Coupon</th>
                                <th>Action</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->created_at->format('g:i a')}}</td>
                                <td>{{$order->item_name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->restaurant_name}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->cost}}</td>
                                <td>{{$order->payment}}</td>
                                <td>{{$order->coupon}}</td>
                                <td>
                                    @if($order->admin_action == 'not_seen')
                                    <button class=" btn btn-circle btn-mn btn-danger" value="primary">
                                        <span class="fa fa-eye-slash"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary" onclick="window.location='{{ route('order_cancel_action',['id' => $order->id])}}'">
                                        <span class="fa fa-times"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary" onclick="window.location='{{ route('order_approve_action',['id' => $order->id])}}'">
                                        <span class="fa fa-check"></span>
                                    </button>
                                    @elseif($order->admin_action == 'cancelled')
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary">
                                        <span class="fa fa-eye-slash"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-warning" value="primary" onclick="window.location='{{ route('order_cancel_action',['id' => $order->id])}}'">
                                        <span class="fa fa-times"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary" onclick="window.location='{{ route('order_approve_action',['id' => $order->id])}}'">
                                        <span class="fa fa-check"></span>
                                    </button>
                                    @elseif($order->admin_action == 'approved')
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary">
                                        <span class="fa fa-eye-slash"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-default" value="primary" onclick="window.location='{{ route('order_cancel_action',['id' => $order->id])}}'">
                                        <span class="fa fa-times"></span>
                                    </button>
                                    <button class=" btn btn-circle btn-mn btn-success" value="primary" onclick="window.location='{{ route('order_approve_action',['id' => $order->id])}}'">
                                        <span class="fa fa-check"></span>
                                    </button>
                                    @endif
                                </td>
                                 <td>{{$order->status}}</td>
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
