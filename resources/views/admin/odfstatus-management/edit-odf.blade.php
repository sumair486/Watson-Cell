@extends('admin.layout.master')

@section('title')
    Edit ODF
@endsection

@section('page_heading')
     Edit ODF
@endsection

@section('content')

<div class="row">
    <div class="col-6 offset-3">

        <div class="card">
            <div class="card-body">

                <form action="{{route('odfs.update',$odf->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="sustained">Sustained</label>
                        <input type="text" class="form-control" id="sustained"name = "sustained" placeholder="Sustained" required value="{{$odf->sustained}}">
                      </div>
                      <div class="form-group">
                          <label for="revert">Revert</label>
                          <input type="text" class="form-control" id="revert"name = "revert" placeholder="Revert" required value="{{$odf->revert}}">
                        </div>
                        <div class="form-group">
                          <label for="reasons_in_case_of_revert">Reasons in case of Revert</label>
                          <input type="text" class="form-control" id="reasons_in_case_of_revert"name = "reasons_in_case_of_revert" placeholder="Reasons in case of Revert" required value="{{$odf->reasons_in_case_of_revert}}">
                        </div>
                      <div class="from-group">
                        <label for="total_number_of_house_hold">Total Number of House hold</label>
                        <input type="text" class="form-control" id="total_number_of_house_hold" name="total_number_of_house_hold" placeholder="Total Number of House hold" required value="{{$odf->total_number_of_house_hold}}">
                      </div>
                      <div class="from-group">
                        <label for="total_population_of_village">Total Population of village</label>
                        <input type="text" class="form-control" id="total_population_of_village" name="total_population_of_village" placeholder="Total Population of village" required value="{{$odf->total_population_of_village}}">
                      </div>

                      <div class="from-group">
                        <label for="number_of_laterine_in_village_during_tiggering"">Number of village during Triggering</label>
                        <input type="text" class="form-control" id="number_of_laterine_in_village_during_tiggering" name="number_of_laterine_in_village_during_tiggering" placeholder="Number of village during Triggering" required value="{{$odf->number_of_laterine_in_village_during_tiggering}}">
                      </div>

                      <div class="form-group">
                        <label for="laterine_built_by_community">Leterine Built by Community</label>
                        <input type="text" class="form-control" id="laterine_built_by_community"name = "laterine_built_by_community" placeholder="Leterine Built by Community" required value="{{$odf->laterine_built_by_community}}">
                      </div>

                      <div class="form-group">
                        <label for="laterine_built_by_organization">Laterine Built by Organization</label>
                        <input type="text" class="form-control" id="laterine_built_by_organization"name = "laterine_built_by_organization" placeholder="Laterine Built by Organization" required value="{{$odf->laterine_built_by_organization}}">
                      </div>

                      <div class="form-group">
                        <label for="number_of_targeted_schools">Number of Targeted Schools</label>
                        <input type="text" class="form-control" id="number_of_targeted_schools"name = "number_of_targeted_schools" placeholder="Number of Targeted Schools" required value="{{$odf->number_of_targeted_schools}}">
                      </div>
                      <div class="form-group">
                        <label for="school_name">School Name</label>
                        <input type="text" class="form-control" id="school_name"name = "school_name" placeholder="School Name" required value="{{$odf->school_name}}">
                      </div>
                      <div class="form-group">
                        <label for="zero_star">Zero Star</label>
                        <input type="text" class="form-control" id="zero_star"name = "zero_star" placeholder="Zero Star" required value="{{$odf->zero_star}}">
                      </div>





                      <div class="card-footer">
                        <a href="{{route('odfs.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
