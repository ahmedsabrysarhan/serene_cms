@extends('dashboard.app')
@section('title' , 'Edit Category')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          .<div class="card">
            <div class="card-header">
              <h3>{{__('Edit Category')}}</h3>
            </div>
            <div class="card-body">
              <form action="{{route('categories.update', $category->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="catName">{{__('Category Name')}}</label>
                  <input type="text" name="catName" class="form-control" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn btn-primary"> {{__('Edit categroy')}}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection