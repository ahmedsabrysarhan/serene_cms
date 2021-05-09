@extends('dashboard.app')
@section('title' , 'Trash Box')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="float-left">{{__('Trashed Categories')}}</h3>
                </div>
                <div class="card-body">
                    @if ($categories->count() > 0)
                        <ul class="list-group listgroup-flush">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <span>{{$category->name}}</span>
                                <span class="float-right ml-2">
                                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="{{__('Delete')}}">
                                    </form>
                                </span>
                                <span class="float-right">
                                    <a href="{{route('categories.restore', $category->id)}}" class="btn btn-success">{{__('Restore')}}</a>
                                </span>
                            </li>
                        @endforeach
                        </ul>
                    @else
                        <div class="empty-div"> {{__('Empty div message')}} </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="float-left">{{__('Trashed Products')}}</h3>
                </div>
                <div class="card-body">
                    @if ($products->count() > 0)
                        <ul class="list-group listgroup-flush">
                        @foreach ($products as $product)
                            <li class="list-group-item">
                                <span>{{$product->name}}</span>
                                <span class="float-right ml-2">
                                    <form action="{{route('products.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="{{__('Delete')}}">
                                    </form>
                                </span>
                                <span class="float-right">
                                    <a href="{{route('product.restore', $product->id)}}" class="btn btn-success">{{__('Restore')}}</a>
                                </span>
                            </li>
                        @endforeach
                        </ul>
                    @else
                        <div class="empty-div"> {{__('Empty div message')}} </div>
                    @endif
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">
                    <h3 class="float-left">{{__('Trashed Users')}}</h3>
                </div>
                <div class="card-body">
                    @if ($users->count() > 0)
                        <ul class="list-group listgroup-flush">
                        @foreach ($users as $user)
                            <li class="list-group-item">
                                <span>{{$user->name}}</span>
                                <span class="float-right ml-2">
                                    <form action="{{route('users.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="{{__('Delete')}}">
                                    </form>
                                </span>
                                <span class="float-right">
                                    <a href="{{route('users.restore', $user->id)}}" class="btn btn-success">{{__('Restore')}}</a>
                                </span>
                            </li>
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