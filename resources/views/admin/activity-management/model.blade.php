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
            <form action="{{route('activitys.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="clts">CLTS</label>
                  <input type="text" class="form-control" id="clts"name = "clts" placeholder="CLTS" required>
                </div>
                <div class="form-group">
                    <label for="slts">SLTS</label>
                    <input type="text" class="form-control" id="slts"name = "slts" placeholder="SLTS" required>
                  </div>
                  <div class="form-group">
                    <label for="activity_start_date">Activity Start Date</label>
                    <input type="date" class="form-control" id="activity_start_date"name = "activity_start_date" placeholder="Activity Start Date" required>
                  </div>
                <div class="from-group">
                  <label for="distt">Activity End Date</label>
                  <input type="date" class="form-control" id="activity_end_date" name="activity_end_date" placeholder="Activity End Date" required>
                </div>

                <div class="from-group">
                    <label for="triggering">Triggering</label>
                    <input type="text" class="form-control" id="triggering" name="triggering" placeholder="Triggering" required>
                  </div>

                  <div class="from-group">
                    <label for="declaration"">Declaration</label>
                    <input type="text" class="form-control" id="declaration" name="declaration" placeholder="Declaration" required>
                  </div>

                  <div class="form-group">
                    <label for="verification">Verification</label>
                    <input type="text" class="form-control" id="verification"name = "verification" placeholder="Verification" required>
                  </div>

                  <div class="form-group">
                    <label for="certification">Certification</label>
                    <input type="text" class="form-control" id="certification"name = "certification" placeholder="Certification" required>
                  </div>

                  <div class="form-group">
                    <label for="yes">Yes</label>
                    <input type="text" class="form-control" id="yes"name = "yes" placeholder="Yes" required>
                  </div>
                  <div class="form-group">
                    <label for="no">No</label>
                    <input type="text" class="form-control" id="no"name = "No" placeholder="No" required>
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
