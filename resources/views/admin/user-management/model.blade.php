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
            <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name"name = "first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name"name = "last_name" placeholder="Last Name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"name = "email" placeholder="Email" required>
                  </div>
                <div class="from-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="from-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" id="Password" name="password_confirmation" placeholder="Enter Confirm Password" required>
                  </div>

                  <div class="from-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                        <option selected disabled>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                  </div>


                  <div class="from-group">
                    <label for="password">image</label>
                    <input type="file" class="form-control" id="Image" name="image" placeholder="Select Image">
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
