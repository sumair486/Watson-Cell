@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
Organization
@endsection

@section('page_heading')
    Organization Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add Data
  </button>
 <a href="{{route('orgpdf')}}"><button> PDF</button> </a>
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
                        <th>Organization</th>
                        <th>Donor</th>
                        <th>Number villages</th>
                        <th>District</th>
                        <th>Tehsil</th>
                        <th>Name of village council</th>
                        <th>Name of village</th>
                        <th>Map Latitude</th>
                        <th>Map Longititude</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse ($organizations as $org)
                    <tr>
                        <td>{{ucfirst($org->organization)}}</td>
                        <td>{{ucfirst($org->donor)}}</td>
                        <td>{{$org->number_of_targeted_villages}}</td>
                        <td>{{$org->district}}</td>
                        <td>{{$org->tehsil}}</td>
                        <td>{{$org->name_of_village_council}}</td>
                        <td>{{$org->name_of_village}}</td>
                        <td>{{$org->map_latitude}}</td>
                        <td>{{$org->map_longititude}}</td>
                        <td>{{$org->created_at}}</td>
                        <td>
                            <a href="{{route('organizations.edit',$org->id)}}" >
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('organizations.destroy',$org->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$org->organization}}')">
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
@include('admin.organization-management.model')
@endsection







@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

@endsection
