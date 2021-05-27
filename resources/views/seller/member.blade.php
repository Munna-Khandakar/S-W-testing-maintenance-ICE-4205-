@extends('seller.layout')
@section('content')

<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3>Team Members</h3>
            </div>
            <div class="panel-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button class="btn-flip btn btn-raised btn-default">
                                        <div class="flip">
                                            <div class="side">
                                                Delete <span class="fa fa-trash"></span>
                                            </div>
                                            <div class="side back">
                                                are you sure?
                                            </div>
                                        </div>
                                        <span class="icon"></span>
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
    $(document).ready(function() {
        $(".btn-flip").on("click", function() {
            $(this).find(".flip").animate().replaceWith("<span class='fa fa-check' style='font-size:2em;'></span>");
        });
    });

</script>
@endsection
