@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category <a href="{{url('/admin/category/create')}}" class="btn btn-primary btn-sm float-right">+</a></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name GE</th>
                                    <th>Name EN</th>
                                    <th>Sort</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryes as $categoy)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$categoy->name_ge}}</td>
                                    <td>{{$categoy->name_en}}</td>
                                    <td>{{$categoy->sort}}</td>
                                    <td><a href="{{route('admin.category.edit',$categoy)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a></td>
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