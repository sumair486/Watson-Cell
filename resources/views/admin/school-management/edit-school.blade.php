@extends('admin.layout.master')

@section('title')
    Edit SCHOOL
@endsection

@section('page_heading')
     Edit SCHOOL
@endsection

@section('content')

<div class="row">
    <div class="col-6 offset-3">

        <div class="card">
            <div class="card-body">

                <form action="{{route('schools.update',$school->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="one_star">One Star</label>
                        <input type="text" class="form-control" id="one_star"name = "one_star" placeholder="One Star" required value="{{$school->one_star}}">
                      </div>
                      <div class="form-group">
                          <label for="two_star">Two star</label>
                          <input type="text" class="form-control" id="two_star"name = "two_star" placeholder="Two star" required value="{{$school->two_star}}">
                        </div>
                        <div class="form-group">
                          <label for="four_star">Four Star</label>
                          <input type="text" class="form-control" id="four_star"name = "four_star" placeholder="Four Star" required value="{{$school->four_star}}">
                        </div>
                      <div class="from-group">
                        <label for="yes">Yes</label>
                        <input type="text" class="form-control" id="yes" name="yes" placeholder="Yes" required value="{{$school->yes}}">
                      </div>
                      <div class="from-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control" id="no" name="no" placeholder="No" required value="{{$school->no}}">
                      </div>

                      <div class="from-group">
                        <label for="functional"">Functional</label>
                        <input type="text" class="form-control" id="functional" name="functional" placeholder="Functional" required value="{{$school->functional}}">
                      </div>

                      <div class="form-group">
                        <label for="non_functional">Non Functional</label>
                        <input type="text" class="form-control" id="non_functional"name = "non_functional" placeholder="Non Functional" required value="{{$school->non_functional}}">
                      </div>

                      <div class="form-group">
                        <label for="reasons_in_case_of_non_functionality">Reasons in Case Non Functional</label>
                        <input type="text" class="form-control" id="reasons_in_case_of_non_functionality"name = "reasons_in_case_of_non_functionality" placeholder="Reasons in Case Non Functional" required value="{{$school->reasons_in_case_of_non_functionality}}">
                      </div>

                      <div class="form-group">
                        <label for="number_of_targeted_schools">Number of Total Beneficiaries</label>
                        <input type="text" class="form-control" id="number_of_total_beneficiaries"name = "number_of_total_beneficiaries" placeholder="Number of Total Beneficiaries" required value="{{$school->number_of_total_beneficiaries}}">
                      </div>
                      <div class="form-group">
                        <label for="male">Male</label>
                        <input type="text" class="form-control" id="male"name = "male" placeholder="Male" required value="{{$school->male}}">
                      </div>
                      <div class="form-group">
                        <label for="female">Female</label>
                        <input type="text" class="form-control" id="female"name = "female" placeholder="Female" required value="{{$school->female}}">
                      </div>







                      <div class="card-footer">
                        <a href="{{route('schools.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
