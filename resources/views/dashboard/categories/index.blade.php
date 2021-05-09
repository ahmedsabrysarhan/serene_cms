@extends('dashboard.app')
@section('title' , 'Categories')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">{{__('All Categories')}}</h3>
                        <span class="float-right">
                            <a href="{{route('categories.create')}}" class="btn btn-success text-light">
                                {{__('Add new category')}}
                            </a>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($categories->count() > 0)
                            <ul class="list-group listgroup-flush">
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <a href="#">{{$category->name}}</a>
                                    <span class="float-right ml-2">
                                        <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="{{__('Trash')}}">
                                        </form>
                                    </span>
                                    <span class="float-right">
                                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-success">{{__('Edit')}}</a>
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