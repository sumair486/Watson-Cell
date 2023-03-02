@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
School Data
@endsection

@section('page_heading')
School Data Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add Data
  </button>

  <a href="{{route('schpdf')}}"><button> PDF</button> </a>




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
                        <th>One Star</th>
                        <th>Two Star</th>
                        <th>Four Star</th>
                        <th>Yes</th>
                        <th>No</th>
                        <th>Functional</th>
                        <th>Non Functional</th>
                        <th>Reasone in case of Non Functionality</th>
                        <th>Number of total beneficiaries</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse ($schools as $school)
                    <tr>
                        <td>{{ucfirst($school->one_star)}}</td>
                        <td>{{ucfirst($school->two_star)}}</td>
                        <td>{{$school->four_star}}</td>
                        <td>{{$school->yes}}</td>
                        <td>{{$school->no}}</td>
                        <td>{{$school->functional}}</td>
                        <td>{{$school->non_functional}}</td>
                        <td>{{$school->reasons_in_case_of_non_functionality}}</td>
                        <td>{{$school->number_of_total_beneficiaries}}</td>
                        <td>{{$school->male}}</td>
                        <td>{{$school->female}}</td>
                        <td>{{$school->created_at}}</td>
                        <td>
                            <a href="{{route('schools.edit',$school->id)}}" >
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('schools.destroy',$school->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$school->one_star}}')">
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
@include('admin.school-management.model')
@endsection







@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

@endsection
