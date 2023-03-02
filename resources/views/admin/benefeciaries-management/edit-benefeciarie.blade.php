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
                    <form action="{{route('benefeciariess.update',$benefeciarie->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="male">Male</label>
                        <input type="text" class="form-control" id="male" name ="male" placeholder="Male" required value="{{$benefeciarie->male}}">
                      </div>
                      <div class="form-group">
                          <label for="female">Female</label>
                          <input type="text" class="form-control" id="female" name ="female" placeholder="Female" required  value="{{$benefeciarie->female}}">
                        </div>
                        <div class="form-group">
                          <label for="number_of_total_men">Number of total Men</label>
                          <input type="text" class="form-control" id="number_of_total_men" name ="number_of_total_men" placeholder="Number of total Men" required  value="{{$benefeciarie->number_of_total_men}}">
                        </div>
                      <div class="from-group">
                        <label for="number_of_total_women">Number of total Woman</label>
                        <input type="text" class="form-control" id="number_of_total_women" name="number_of_total_women" placeholder="Number of total Woman" required  value="{{$benefeciarie->number_of_total_women}}">
                      </div>
                      <div class="from-group">
                          <label for="number_of_disabled_beneficiaries">Number of Disabled Benefeciares</label>
                          <input type="text" class="form-control" id="number_of_disabled_beneficiaries" name="number_of_disabled_beneficiaries" placeholder="Number of Disabled Benefeciares" required  value="{{$benefeciarie->number_of_disabled_beneficiaries}}">
                        </div>
                        <div class="from-group">
                          <label for="challenges"">Challenges</label>
                          <input type="text" class="form-control" id="challenges" name="challenges" placeholder="Challenges" required  value="{{$benefeciarie->challenges}}">
                        </div>
                        <div class="form-group">
                          <label for="lesson_learnt">Lesson Learnt</label>
                          <input type="text" class="form-control" id="lesson_learnt"name ="lesson_learnt" placeholder="Lesson Learnt" required  value="{{$benefeciarie->lesson_learnt}}">
                        </div>
                        <div class="form-group">
                          <label for="name_of_reporting_person">Name of Reporting person</label>
                          <input type="text" class="form-control" id="name_of_reporting_person"name ="name_of_reporting_person" placeholder="Name of Reporting person" required  value="{{$benefeciarie->name_of_reporting_person}}">
                        </div>
                        <div class="form-group">
                          <label for="phone_no_reporting_person">Phone no Reporting person</label>
                          <input type="text" class="form-control" id="phone_no_reporting_person"name ="phone_no_reporting_person" placeholder="Phone no Reporting person" required  value="{{$benefeciarie->phone_no_reporting_person}}">
                        </div>
                      <div class="card-footer">
                        <a href="{{route('benefeciariess.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
