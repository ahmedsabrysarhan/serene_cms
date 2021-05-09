@extends('dashboard.app')
@section('title' , 'Add New User')

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
              <h3>{{__('Add New user')}}</h3>
            </div>
            <div class="card-body">
              <form action="{{route('users.store')}}" method="post">
                @csrf
                {{-- Name --}}
                <div class="form-group">
                  <label for="userName">{{__('user name : ')}}</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter the name of user">
                </div>
                {{-- Email --}}
                <div class="form-group">
                  <label for="user-email">{{__('user email : ')}}</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email of user">
                </div>
                {{-- Password --}}
                <div class="form-group">
                  <label for="user-password">{{__('user password : ')}}</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                {{-- Role --}}
                <div class="form-group">
                  <label for="user-role">{{__('User role : ')}}</label>
                  <select class="form-control" name="role">
                    @foreach ($roles as $role)
                      <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select>
                </div>
                {{-- Submit --}}
                <button type="submit" class="btn btn-primary"> {{__('Add new user')}}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
