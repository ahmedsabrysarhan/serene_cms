@extends('dashboard.app')
@section('title' , 'Edit User')

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
              <h3>{{__('Update [' . $user->name . '] date')}}</h3>
            </div>
            <div class="card-body">
              <form action="{{route('users.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
                {{-- Name --}}
                <div class="form-group">
                  <label for="userName">{{__('user name : ')}}</label>
                  <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                {{-- Email --}}
                <div class="form-group">
                  <label for="user-email">{{__('user email : ')}}</label>
                  <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                {{-- Password --}}
                <div class="form-group">
                  <label for="user-password">{{__('user password : ')}}</label>
                  <input type="password" name="password" class="form-control" placeholder="Update Password">
                </div>
                {{-- Role --}}
                <div class="form-group">
                  <label for="user-role">{{__('User role : ')}}</label>
                  <select class="form-control" name="role">
                    @foreach ($roles as $role)
                      <option value="{{$role}}" @if ($user->rule_id === $role->id) selected @endif>
                        {{$role->name}}
                      </option>
                    @endforeach
                  </select>
                </div>
                {{-- Submit --}}
                <button type="submit" class="btn btn-primary"> {{__('Update')}}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
