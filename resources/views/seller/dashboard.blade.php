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
                                <th>Item Name</th>
                                <th>Order Time</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mutton Biriyani</td>
                                <td>10.11 am</td>
                                <td>
                                    <button class="btn ripple-infinite btn-outline btn-danger">
                                        <div>
                                            <span>Not seen</span>
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
                                    <button class="btn ripple-infinite btn-outline btn-warning">
                                        <div>
                                            <span>Not Possible</span>
                                        </div>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>Teheri</td>
                                <td>2.20 pm</td>
                                <td> 
                                    <button class="btn ripple-infinite btn-outline btn-danger">
                                        <div>
                                            <span>Not seen</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-primary">
                                        <div>
                                            <span>Making</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-success">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-round btn-warning">
                                        <div>
                                            <span>Not Possible</span>
                                        </div>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>Chicken Polau</td>
                                <td>12.129 pm</td>
                                <td>
                                    <button class="btn ripple-infinite btn-round btn-danger">
                                        <div>
                                            <span>Not seen</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-primary">
                                        <div>
                                            <span>Making</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-success">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-warning">
                                        <div>
                                            <span>Not Possible</span>
                                        </div>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Halim</td>
                                <td>07.15 pm</td>
                                <td>
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
                                    <button class="btn ripple-infinite btn-outline btn-success">
                                        <div>
                                            <span>Finish</span>
                                        </div>
                                    </button>
                                    <button class="btn ripple-infinite btn-outline btn-warning">
                                        <div>
                                            <span>Not Possible</span>
                                        </div>
                                    </button>
                                </td>
                            </tr>
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
