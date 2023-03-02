@extends('admin.layout.master')

@section('title')
    Edit Activity
@endsection

@section('page_heading')
     Edit Activity
@endsection

@section('content')

<div class="row">
    <div class="col-6 offset-3">

        <div class="card">
            <div class="card-body">

                <form action="{{route('activitys.update',$activity->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="clts">CLTS</label>
                        <input type="text" class="form-control" id="clts"name = "clts" placeholder="CLTS" required value="{{$activity->clts}}">
                      </div>
                      <div class="form-group">
                          <label for="slts">SLTS</label>
                          <input type="text" class="form-control" id="slts"name = "slts" placeholder="SLTS" required value="{{$activity->slts}}">
                        </div>
                        <div class="form-group">
                          <label for="activity_start_date">Activity Start Date</label>
                          <input type="date" class="form-control" id="activity_start_date"name = "activity_start_date" placeholder="Activity Start Date" required value="{{$activity->activity_start_date}}">
                        </div>
                      <div class="from-group">
                        <label for="distt">Activity End Date</label>
                        <input type="date" class="form-control" id="activity_end_date" name="activity_end_date" placeholder="Activity End Date" required value="{{$activity->activity_end_date}}">
                      </div>

                      <div class="from-group">
                        <label for="triggering">Triggering</label>
                        <input type="text" class="form-control" id="triggering" name="triggering" placeholder="Triggering" required value="{{$activity->triggering}}">
                      </div>

                      <div class="from-group">
                        <label for="declaration"">Declaration</label>
                        <input type="text" class="form-control" id="declaration" name="declaration" placeholder="Declaration" required value="{{$activity->declaration}}">
                      </div>

                      <div class="form-group">
                        <label for="verification">Verification</label>
                        <input type="text" class="form-control" id="verification"name = "verification" placeholder="Verification" required value="{{$activity->verification}}">
                      </div>

                      <div class="form-group">
                        <label for="certification">Certification</label>
                        <input type="text" class="form-control" id="certification"name = "certification" placeholder="Certification" required value="{{$activity->certification}}">
                      </div>

                      <div class="form-group">
                        <label for="yes">Yes</label>
                        <input type="text" class="form-control" id="yes"name = "yes" placeholder="Yes" required value="{{$activity->Yes}}">
                      </div>
                      <div class="form-group">
                        <label for="no">No</label>
                        <input type="text" class="form-control" id="no"name = "No" placeholder="No" required value="{{$activity->No}}">
                      </div>


                      <div class="card-footer">
                        <a href="{{route('activitys.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
