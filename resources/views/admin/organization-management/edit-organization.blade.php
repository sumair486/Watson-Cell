@extends('admin.layout.master')

@section('title')
    Edit Organization
@endsection

@section('page_heading')
     Edit Organization
@endsection

@section('content')

<div class="row">
    <div class="col-6 offset-3">

        <div class="card">
            <div class="card-body">

                <form action="{{route('organizations.update',$organization->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="organization">Organization</label>
                        <input type="text" class="form-control" id="organization"name = "organization" placeholder="organization" required value="{{$organization->organization}}">
                      </div>
                      <div class="form-group">
                          <label for="donor">Donor</label>
                          <input type="text" class="form-control" id="donor"name = "donor" placeholder="Donor" required value="{{$organization->donor}}">
                        </div>
                        <div class="form-group">
                          <label for="numbervillage">Number of villages</label>
                          <input type="text" class="form-control" id="numbervillage"name = "number_of_targeted_villages" placeholder="villages" required value="{{$organization->number_of_targeted_villages}}">
                        </div>
                      <div class="from-group">
                        <label for="distt">District</label>
                        <input type="text" class="form-control" id="district" name="district" placeholder="District" required value="{{$organization->district}}">
                      </div>

                      <div class="from-group">
                          <label for="tehi">Tehsil</label>
                          <input type="text" class="form-control" id="tehsil" name="tehsil" placeholder="Tehsil" required value="{{$organization->tehsil}}">
                        </div>

                        <div class="from-group">
                          <label for="villcouncil"">Name of Village Council</label>
                          <input type="text" class="form-control" id="name_of_village_council" name="name_of_village_council" placeholder="Name of Village Council" required value="{{$organization->name_of_village_council}}">
                        </div>

                        <div class="form-group">
                          <label for="namevillage">Name of villages</label>
                          <input type="text" class="form-control" id="name_of_village"name = "name_of_village" placeholder="Name of villages" required value="{{$organization->name_of_village}}">
                        </div>

                        <div class="form-group">
                          <label for="maplatit">Map Latitude</label>
                          <input type="text" class="form-control" id="map_latitude"name = "map_latitude" placeholder="Map Latitude" required value="{{$organization->map_latitude}}">
                        </div>

                        <div class="form-group">
                          <label for="maplong">Map Longititude</label>
                          <input type="text" class="form-control" id="map_longititude"name = "map_longititude" placeholder="Map Longititude" required value="{{$organization->map_longititude}}">
                        </div>
                      <div class="card-footer">
                        <a href="{{route('organizations.index')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>


            </div>
        </div>
    </div>
</div>



@endsection
