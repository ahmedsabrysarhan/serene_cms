@extends('dashboard.app')
@section('title' , 'Edit Product')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3>{{__('Edit Product')}}</h3>
          </div>
          <div class="card-body">
            <form action="{{route('products.update', $product->id)}}" method="POST" 
              enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
              {{-- Name --}}
              <div class="form-group">
                <label for="productName">{{__('product name : ')}}</label>
                <input type="text" name="name" class="form-control" placeholder="{{$product->name}}">
              </div>
              {{-- Price --}}
              <div class="form-group">
                <label for="productPrice">{{__('product Price : ')}}</label>
                <input type="number" name="price" class="form-control" placeholder="{{$product->price}}">
              </div>
              {{-- Description --}}
              <div class="form-group">
                <label for="description">{{__("Product description : ")}}</label>
                <textarea class="form-control" name="description" rows="3">{{$product->description }}
                </textarea>
              </div>
              {{-- Category --}}
              <div class="form-group">
                <label for="productCategory">{{__('product Category : ')}}</label>
                <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}"
                    @if ($product->category_id === $category->id)
                      selected
                    @endif>
                    {{$category->name}}
                    </option>
                @endforeach
                </select>
              </div>
              {{-- Image --}}
              <img src="{{asset('storage/'. $product->image)}}" alt="product" style="width: 25%">
              <div class="form-group mt-2">
                <label for="image">{{__('Product Image : ')}}</label>
                <input type="file" class="form-control" name="image" id="imageProduct" >
              </div>

              <button type="submit" class="btn btn-primary"> {{__('Update product')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
