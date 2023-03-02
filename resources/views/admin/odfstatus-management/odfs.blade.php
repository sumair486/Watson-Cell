@extends('admin.layout.master')
@section('style')
<!-- Custom styles for this page -->
<link href="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title')
ODF Status
@endsection

@section('page_heading')
ODF Status Management
@endsection

@section('content')
<button type="button" class="btn btn-sm btn-primary ml-2 mb-2" data-toggle="modal" data-target="#exampleModal">
    Add Data
  </button>

  <a href="{{route('odfpdf')}}"> <button>PDF</button> </a>

  @if (session('success'))

    <div class="alert alert-warning" role="alert">
       {{session('success')}}
      </div>

    @endif


<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="example"  width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sustained</th>
                        <th>Revert</th>
                        <th>Reasons in case of Revert</th>
                        <th>Total Number of House Hold</th>
                        <th>Total Population of Village</th>
                        <th>Number of village During Triggering</th>
                        <th>Laterine Built by Community</th>
                        <th>Laterine Built by Organization</th>
                        <th>Number of Targeted School</th>
                        <th>School Name</th>
                        <th>Zero Star</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse ($odfs as $odf)
                    <tr>
                        <td>{{ucfirst($odf->sustained)}}</td>
                        <td>{{ucfirst($odf->revert)}}</td>
                        <td>{{$odf->reasons_in_case_of_revert}}</td>
                        <td>{{$odf->total_number_of_house_hold}}</td>
                        <td>{{$odf->total_population_of_village}}</td>
                        <td>{{$odf->number_of_laterine_in_village_during_tiggering}}</td>
                        <td>{{$odf->laterine_built_by_community}}</td>
                        <td>{{$odf->laterine_built_by_organization}}</td>
                        <td>{{$odf->number_of_targeted_schools}}</td>
                        <td>{{$odf->school_name}}</td>
                        <td>{{$odf->zero_star}}</td>
                        <td>{{$odf->created_at}}</td>
                        <td>
                            <a href="{{route('odfs.edit',$odf->id)}}" >
                                 <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('odfs.destroy',$odf->id)}}" class="ml-1" onclick="return confirm('Are you want to delete {{$odf->sustained}}')">
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
@include('admin.odfstatus-management.model')
@endsection









@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>


@endsection


{{-- <script>
    $(document).ready(function() {
$('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'

    ]
} );
});
</script> --}}
