@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
Activity Type
@endsection

@section('page_heading')
Activity Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add Data
  </button>

  <a href="{{route('pdf')}}"><button> PDF</button> </a>

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
                        <th>CLTS</th>
                        <th>SLTS</th>
                        <th>Activity Start Date</th>
                        <th>Activity End Date</th>
                        <th>Triggering</th>
                        <th>Declaration</th>
                        <th>Verification</th>
                        <th>Certification</th>
                        <th>Yes</th>
                        <th>No</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse ($activitys as $activty)
                    <tr>
                        <td>{{ucfirst($activty->clts)}}</td>
                        <td>{{ucfirst($activty->slts)}}</td>
                        <td>{{$activty->activity_start_date}}</td>
                        <td>{{$activty->activity_end_date}}</td>
                        <td>{{$activty->triggering}}</td>
                        <td>{{$activty->declaration}}</td>
                        <td>{{$activty->verification}}</td>
                        <td>{{$activty->certification}}</td>
                        <td>{{$activty->yes}}</td>
                        <td>{{$activty->No}}</td>
                        <td>{{$activty->created_at}}</td>
                        <td>
                            <a href="{{route('activitys.edit',$activty->id)}}" >
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('activitys.destroy',$activty->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$activty->clts}}')">
                                 <i class="fa fa-trash text-danger"></i>
                            </a>

                        </td>
                    </tr>

                    @empty

                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.activity-management.model')
@endsection







@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

@endsection
