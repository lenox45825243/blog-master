@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('subscribers.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subs as $subscriber)
                        <tr>
                            <td>{{$subscriber->id}}</td>
                            <td>{{$subscriber->email}}</td>
                            <td>{{Form::open(['route'=>['subscribers.destroy', $subscriber->id], 'method'=>'delete'])}}
                            <div class="btn-group-sm">
                                <button onclick="return confirm('Вы уверены?')" type="submit" class="btn btn-danger  delete">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </div>
                            {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            {{$subs->links()}}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
