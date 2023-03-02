<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('organizations.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="organization">Organization</label>
                  <input type="text" class="form-control" id="organization"name = "organization" placeholder="organization" required>
                </div>
                <div class="form-group">
                    <label for="donor">Donor</label>
                    <input type="text" class="form-control" id="donor"name = "donor" placeholder="Donor" required>
                  </div>
                  <div class="form-group">
                    <label for="numbervillage">Number of villages</label>
                    <input type="text" class="form-control" id="numbervillage"name = "number_of_targeted_villages" placeholder="villages" required>
                  </div>
                <div class="from-group">
                  <label for="distt">District</label>
                  <input type="text" class="form-control" id="district" name="district" placeholder="District" required>
                </div>

                <div class="from-group">
                    <label for="tehi">Tehsil</label>
                    <input type="text" class="form-control" id="tehsil" name="tehsil" placeholder="Tehsil" required>
                  </div>

                  <div class="from-group">
                    <label for="villcouncil"">Name of Village Council</label>
                    <input type="text" class="form-control" id="name_of_village_council" name="name_of_village_council" placeholder="Name of Village Council" required>
                  </div>

                  <div class="form-group">
                    <label for="namevillage">Name of villages</label>
                    <input type="text" class="form-control" id="name_of_village"name = "name_of_village" placeholder="Name of villages" required>
                  </div>

                  <div class="form-group">
                    <label for="maplatit">Map Latitude</label>
                    <input type="text" class="form-control" id="map_latitude"name = "map_latitude" placeholder="Map Latitude" required>
                  </div>

                  <div class="form-group">
                    <label for="maplong">Map Longititude</label>
                    <input type="text" class="form-control" id="map_longititude"name = "map_longititude" placeholder="Map Longititude" required>
                  </div>





        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
      </div>
    </div>
  </div>
