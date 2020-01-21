@extends('adminlayout.app')


@section('content')
@section('page_title')
    categories
@endsection
@section('small_title')
    categories
@endsection



<section class="content">



    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List of categories</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <a href="{{action('AdminCategoriesController@create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>New Categories</a>
                @if(count($categories))
                <table class="table table-bordered table-responsive">

                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>

                            <td class="text-center">Edit</td>
                            <td class="text-center">Delete</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td class="text-center"><a href="{{route('categories.edit',$category->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center">
                                    {!! Form::open(['method'=>'delete','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','onclick'=>"return confirm('are you sure to delete this category')"]) !!}
                                    {!! Form::close() !!}
                                </td>
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
