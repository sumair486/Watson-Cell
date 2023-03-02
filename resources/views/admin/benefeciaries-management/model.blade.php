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
            <form action="{{route('benefeciariess.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="male">Male</label>
                  <input type="text" class="form-control" id="male"name = "male" placeholder="Male" required>
                </div>
                <div class="form-group">
                    <label for="female">Female</label>
                    <input type="text" class="form-control" id="female"name = "female" placeholder="Female" required>
                  </div>
                  <div class="form-group">
                    <label for="number_of_total_men">Number of total Men</label>
                    <input type="text" class="form-control" id="number_of_total_men"name = "number_of_total_men" placeholder="Number of total Men" required>
                  </div>
                <div class="from-group">
                  <label for="number_of_total_women">Number of total Woman</label>
                  <input type="text" class="form-control" id="number_of_total_women" name="number_of_total_women" placeholder="Number of total Woman" required>
                </div>

                <div class="from-group">
                    <label for="number_of_disabled_beneficiaries">Number of Disabled Benefeciares</label>
                    <input type="text" class="form-control" id="number_of_disabled_beneficiaries" name="number_of_disabled_beneficiaries" placeholder="Number of Disabled Benefeciares" required>
                  </div>

                  <div class="from-group">
                    <label for="challenges"">Challenges</label>
                    <input type="text" class="form-control" id="challenges" name="challenges" placeholder="Challenges" required>
                  </div>

                  <div class="form-group">
                    <label for="lesson_learnt">Lesson Learnt</label>
                    <input type="text" class="form-control" id="lesson_learnt"name = "lesson_learnt" placeholder="Lesson Learnt" required>
                  </div>

                  <div class="form-group">
                    <label for="name_of_reporting_person">Name of Reporting person</label>
                    <input type="text" class="form-control" id="name_of_reporting_person"name = "name_of_reporting_person" placeholder="Name of Reporting person" required>
                  </div>

                  <div class="form-group">
                    <label for="phone_no_reporting_person">Phone no Reporting person</label>
                    <input type="text" class="form-control" id="phone_no_reporting_person"name = "phone_no_reporting_person" placeholder="Phone no Reporting person" required>
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
