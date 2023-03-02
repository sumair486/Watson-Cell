@extends('admin.layout.master')

@section('title')
    Edit User
@endsection

@section('page_heading')
     Edit User
@endsection

@section('content')

<div class="row">
    <div class="col-6 offset-3">

        <div class="card">
            <div class="card-body">

                <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control" id="first_name"name = "first_name" placeholder="First Name" required value="{{$user->first_name}}">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name"name = "last_name" placeholder="Last Name" required value="{{$user->last_name}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email"name = "email" placeholder="Email" required value="{{$user->email}}">
                      </div>
                      <div class="from-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control">
                            <option selected disabled>Select Role</option>
                            <option value="admin" {{$user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{$user->role == 'user' ? 'selected' : ''}}>User</option>
                        </select>
                      </div>
                      <div class="from-group">
                        <label for="password">image</label>
                        <input type="file" class="form-control" id="Image" name="image" placeholder="Select Image">
                      </div>
                      <div class="card-footer">
                        <a href="{{route('users.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
