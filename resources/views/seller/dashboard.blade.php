@extends('seller.layout')
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
                                <th>Order Time</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->created_at->format('g:i a')}}</td>
                                <td>{{$order->item_name}}</td>
                                <td>{{$order->quantity}}</td>   
                                <td>
                                    @if($order->seller_action == 'not_seen')
                                    <button class="btn ripple-infinite btn-round btn-danger">
                                        <div>
                                            <span>Not seen</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-primary" onclick="window.location='{{ route('seller_making_action',['id' => $order->id])}}'">
                                        <div>
                                            <span>Making</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-success">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    @elseif($order->seller_action == 'making')
                                    <button class="btn ripple-infinite btn-outline btn-danger">
                                        <div>
                                            <span>Not seen</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-round btn-primary">
                                        <div>
                                            <span>Making</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-success" onclick="window.location='{{ route('seller_finished_action',['id' => $order->id])}}'">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    @elseif($order->seller_action == 'finished')
                                    <button class="btn ripple-infinite btn-outline btn-danger">
                                        <div>
                                            <span>Not seen </span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-primary">
                                        <div>
                                            <span>Making</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-round btn-success">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    @endif
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
