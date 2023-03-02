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
            <form action="{{route('odfs.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="sustained">Sustained</label>
                  <input type="text" class="form-control" id="sustained"name = "sustained" placeholder="Sustained" required>
                </div>
                <div class="form-group">
                    <label for="revert">Revert</label>
                    <input type="text" class="form-control" id="revert"name = "revert" placeholder="Revert" required>
                  </div>
                  <div class="form-group">
                    <label for="reasons_in_case_of_revert">Reasons in case of Revert</label>
                    <input type="text" class="form-control" id="reasons_in_case_of_revert"name = "reasons_in_case_of_revert" placeholder="Reasons in case of Revert" required>
                  </div>
                <div class="from-group">
                  <label for="total_number_of_house_hold">Total Number of House hold</label>
                  <input type="text" class="form-control" id="total_number_of_house_hold" name="total_number_of_house_hold" placeholder="Total Number of House hold" required>
                </div>

                <div class="from-group">
                    <label for="total_population_of_village">Total Population of village</label>
                    <input type="text" class="form-control" id="total_population_of_village" name="total_population_of_village" placeholder="Total Population of village" required>
                  </div>

                  <div class="from-group">
                    <label for="number_of_laterine_in_village_during_tiggering"">Number of village during Triggering</label>
                    <input type="text" class="form-control" id="number_of_laterine_in_village_during_tiggering" name="number_of_laterine_in_village_during_tiggering" placeholder="Number of village during Triggering" required>
                  </div>

                  <div class="form-group">
                    <label for="laterine_built_by_community">Leterine Built by Community</label>
                    <input type="text" class="form-control" id="laterine_built_by_community"name = "laterine_built_by_community" placeholder="Leterine Built by Community" required>
                  </div>

                  <div class="form-group">
                    <label for="laterine_built_by_organization">Laterine Built by Organization</label>
                    <input type="text" class="form-control" id="laterine_built_by_organization"name = "laterine_built_by_organization" placeholder="Laterine Built by Organization" required>
                  </div>

                  <div class="form-group">
                    <label for="number_of_targeted_schools">Number of Targeted Schools</label>
                    <input type="text" class="form-control" id="number_of_targeted_schools"name = "number_of_targeted_schools" placeholder="Number of Targeted Schools" required>
                  </div>
                  <div class="form-group">
                    <label for="school_name">School Name</label>
                    <input type="text" class="form-control" id="school_name"name = "school_name" placeholder="School Name" required>
                  </div>
                  <div class="form-group">
                    <label for="zero_star">Zero Star</label>
                    <input type="text" class="form-control" id="zero_star"name = "zero_star" placeholder="Zero Star" required>
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
