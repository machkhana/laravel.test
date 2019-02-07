@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm float-right">+</a></div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{url('/admin/category')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name GE</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_ge" id="name_ge" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name EN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_en" id="name_en" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="cat" class="form-control">
                                        <option value="" selected disabled>Select cat</option>
                                        @foreach($categoryes as $category)
                                           <option value="{{$category->id}}">{{$category->name_ge}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Sort</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sort" id="sort" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection