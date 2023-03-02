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
            <form action="{{route('schools.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="one_star">One Star</label>
                  <input type="text" class="form-control" id="one_star"name = "one_star" placeholder="One Star" required>
                </div>
                <div class="form-group">
                    <label for="two_star">Two star</label>
                    <input type="text" class="form-control" id="two_star"name = "two_star" placeholder="Two star" required>
                  </div>
                  <div class="form-group">
                    <label for="four_star">Four Star</label>
                    <input type="text" class="form-control" id="four_star"name = "four_star" placeholder="Four Star" required>
                  </div>
                <div class="from-group">
                  <label for="yes">Yes</label>
                  <input type="text" class="form-control" id="yes" name="yes" placeholder="Yes" required>
                </div>

                <div class="from-group">
                    <label for="no">No</label>
                    <input type="text" class="form-control" id="no" name="no" placeholder="No" required>
                  </div>

                  <div class="from-group">
                    <label for="functional"">Functional</label>
                    <input type="text" class="form-control" id="functional" name="functional" placeholder="Functional" required>
                  </div>

                  <div class="form-group">
                    <label for="non_functional">Non Functional</label>
                    <input type="text" class="form-control" id="non_functional"name = "non_functional" placeholder="Non Functional" required>
                  </div>

                  <div class="form-group">
                    <label for="reasons_in_case_of_non_functionality">Reasons in Case Non Functional</label>
                    <input type="text" class="form-control" id="reasons_in_case_of_non_functionality"name = "reasons_in_case_of_non_functionality" placeholder="Reasons in Case Non Functional" required>
                  </div>

                  <div class="form-group">
                    <label for="number_of_targeted_schools">Number of Total Beneficiaries</label>
                    <input type="text" class="form-control" id="number_of_total_beneficiaries"name = "number_of_total_beneficiaries" placeholder="Number of Total Beneficiaries" required>
                  </div>
                  <div class="form-group">
                    <label for="male">Male</label>
                    <input type="text" class="form-control" id="male"name = "male" placeholder="Male" required>
                  </div>
                  <div class="form-group">
                    <label for="female">Female</label>
                    <input type="text" class="form-control" id="female"name = "female" placeholder="Female" required>
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
