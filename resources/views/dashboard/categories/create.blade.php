@extends('dashboard.app')
@section('title' , 'Add New Category')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @if ( session()->has('success') )
              <div class="alert alert-success" id="flashMessage">{{ session()->get('success') }}</div>            
          @elseif(session()->has('danger'))
              <div class="alert alert-danger" id="flashMessage">{{ session()->get('danger') }}</div>            
          @endif
          <div class="card">
            <div class="card-header">
              <h3>{{__('Add New Category')}}</h3>
            </div>
            <div class="card-body">
              <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="categoryName">{{__('category name : ')}}</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter the name of category">
                </div>
                <button type="submit" class="btn btn-primary"> {{__('Add new categroy')}}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
