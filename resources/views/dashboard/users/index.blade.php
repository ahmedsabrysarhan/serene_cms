@extends('dashboard.app')
@section('title' , 'Users')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">{{__('All users')}}</h3>
                        <span class="float-right">
                            <a href="{{route('users.create')}}" class="btn btn-success text-light">
                                {{__('Add new user')}}
                            </a>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($users->count() > 0)
                            <ul class="list-group listgroup-flush">
                            @foreach ($users as $user)
                                <li class="list-group-item">
                                    <a href="#">{{$user->name}}</a>
                                    <span class="border border-success rounded ml-4 mt-2 p-2">
                                        {{$user->rule->name}}
                                    </span>
                                    <span class="float-right ml-2">
                                        <form action="{{route('users.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="{{__('Trash')}}">
                                        </form>
                                    </span>
                                    <span class="float-right">
                                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-success">{{__('Edit')}}</a>
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

