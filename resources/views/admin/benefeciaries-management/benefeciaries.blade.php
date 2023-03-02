@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
Benefeciares Data
@endsection

@section('page_heading')
Benefeciares Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add Data
  </button>

  <a href="{{route('benefpdf')}}"><button> PDF</button> </a>

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
                        <th>Male</th>
                        <th>Female</th>
                        <th>Number of total Men</th>
                        <th>Number of total Woman</th>
                        <th>Number of Disabled Benefeciares</th>
                        <th>Challenges</th>
                        <th>Lesson Learnt</th>
                        <th>Name of Reporting Person</th>
                        <th>phone no Reporting Person</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse ($benefeciares as $benefeciarie)
                    <tr>
                        <td>{{ucfirst($benefeciarie->male)}}</td>
                        <td>{{ucfirst($benefeciarie->female)}}</td>
                        <td>{{$benefeciarie->number_of_total_men}}</td>
                        <td>{{$benefeciarie->number_of_total_women}}</td>
                        <td>{{$benefeciarie->number_of_disabled_beneficiaries}}</td>
                        <td>{{$benefeciarie->challenges}}</td>
                        <td>{{$benefeciarie->lesson_learnt}}</td>
                        <td>{{$benefeciarie->name_of_reporting_person}}</td>
                        <td>{{$benefeciarie->phone_no_reporting_person}}</td>
                        <td>{{$benefeciarie->created_at}}</td>
                        <td>
                            <a href="{{route('benefeciariess.edit',$benefeciarie->id)}}">
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('benefeciariess.destroy',$benefeciarie->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$benefeciarie->male}}')">
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
@include('admin.benefeciaries-management.model')
@endsection







@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

@endsection
