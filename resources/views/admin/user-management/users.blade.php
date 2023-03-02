@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
Users
@endsection

@section('page_heading')
    Users Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add User
  </button>

  @if (session('success'))

    <div class="alert alert-warning" role="alert">
       {{session('success')}}
      </div>

    @endif


<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{ucfirst($user->first_name)}}</td>
                        <td>{{ucfirst($user->last_name)}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}" >
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('users.destroy',$user->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$user->first_name}}')">
                                 <i class="fa fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.user-management.model')
@endsection







@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

@endsection
