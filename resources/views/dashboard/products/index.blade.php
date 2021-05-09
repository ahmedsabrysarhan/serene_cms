  @extends('dashboard.app')
  @section('title' , 'All Products')

  @section('content')
  <div class="container">
  <div class="row">
      <div class="col-md-12">
          @if ( session()->has('success') )
              <div class="alert alert-success" id="flashMessage">{{ session()->get('success') }}</div>
          @elseif(session()->has('danger'))
              <div class="alert alert-danger" id="flashMessage">{{ session()->get('deleted') }}</div>
          @endif
          <div class="card">
              <div class="card-header">
                  <h3 class="float-left">{{__('All products')}}</h3>
                  <span class="float-right">
                      <a href="{{route('products.create')}}" class="btn btn-success text-light">
                          {{__('Add new product')}}
                      </a>
                  </span>
              </div>
              <div class="card-body">
                  @if ($products->count() > 0)
                      <ul class="list-group listgroup-flush">
                      @foreach ($products as $product)
                      <div class="card" style="width: 18rem;">
                          <img src="{{asset('storage/'. $product->image)}}" class="card-img-top" alt="product">
                          <div class="card-body">
                              <h3 class="card-title text-center">
                                  <a href="{{route('products.show', $product->id)}}">
                                      {{$product->name}}
                                  </a>
                              </h3>
                              <p class="card-text">{{$product->description}}</p>
                              <div class="row justify-content-center">
                                  <form action="{{route('products.destroy', $product->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" class="btn btn-danger" value="{{__('Trash')}}">
                                  </form>
                                  <div class="ml-3">
                                      <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">{{__('Edit')}}</a>
                                  </div>
                              </div>
                              <span style="font:menu " class='mt-3'>
                                  {{__('Added by: ' . $product->user->name)}}</span>
                          </div>
                      </div>
                      @endforeach
                      </ul>
                  @else
                      <div class="empty-div"> {{__('Empty div message')}} </div>
                  @endif
              </div>
          </div>
      </div>
  </div>
  </div>
  @endsection
