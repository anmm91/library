@extends('adminlayout.app')


@section('content')
@section('page_title')
    users
@endsection
@section('small_title')
@endsection



<section class="content">



    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List of users</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <a href="" class="btn btn-primary"><i class="fa fa-plus"></i>New user</a>
                @if(count($users))
                <table class="table table-bordered table-responsive">

                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>email</td>
                            <td class="text-center">Edit</td>
                            <td class="text-center">Delete</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center"></td>

                            </tr>
                        @endforeach
                        </tbody>
                </table>
                @else
                <div class="alert alert-danger" role="alert">
                    No Data exists
                </div>
                @endif





        </div>
        <!-- /.box-body -->

        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>

@endsection
