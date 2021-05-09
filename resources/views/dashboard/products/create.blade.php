@extends('dashboard.app')
@section('title' , 'Add New Product')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>{{__('Add New Product')}}</h3>
          </div>
          <div class="card-body">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
              {{-- Name --}}
              <div class="form-group">
                <label for="productName">{{__('product name : ')}}</label>
                <input type="text" name="name" class="form-control" placeholder="Enter the name of product">
              </div>
              {{-- Price --}}
              <div class="form-group">
                <label for="productPrice">{{__('product Price : ')}}</label>
                <input type="number" name="price" class="form-control" placeholder="Enter price of product in $">
              </div>
              {{-- Description --}}
              <div class="form-group">
                <label for="description">{{__("Product description : ")}}</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Descripe Your Product"></textarea>
              </div>
              {{-- Category --}}
              <div class="form-group">
                <label for="productCategory">{{__('product Category : ')}}</label>
                <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
              </div>
              {{-- Image --}}
              <div class="form-group">
                <label for="image">{{__('Product Image')}}</label>
                <input type="file" class="form-control" name="image" id="imageProduct">
              </div>

              <button type="submit" class="btn btn-primary"> {{__('Add new product')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
