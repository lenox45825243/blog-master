@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Список тегов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group col-md-12">
                        <a href="{{route('tags.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <div class="form-group col-md-2">
                        <div class="input-group">
                            <form method="get">
                                <input value="{{old('search')}}" type="search" class="form-control" placeholder="Поиск по названию" name="search">
                                <button type="submit" class="btn btn-success">Поиск</button>
                                <button type="reset" class="btn btn-default">Сбросить</button>
                            </form>
                            <span class="input-group-btn"></span>
                        </div>
                    </div>
                    @if(!count($tags))
                        <div class="col-md-8">
                            <h5 class="text-center">Данных по запросу не найдено</h5>
                        </div>
                    @else
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($tags as $tag)
                           <tr>
                               <td>{{$tag->id}}</td>
                               <td>{{$tag->title}}</td>
                               <td>
                                   {{Form::open(['route'=>['tags.destroy', $tag->id], 'method'=>'delete'])}}
                                   <div class="btn-group-sm">
                                       <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-default ">
                                           <i class="fa fa-pencil"></i>
                                       </a>
                                       <button onclick="return confirm('Вы уверены?')" type="submit" class="btn btn-danger  delete">
                                           <i class="fa fa-remove"></i>
                                       </button>
                                   </div>
                                   {{Form::close()}}
                               </td>
                           </tr>
                       @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            {{$tags->links()}}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection