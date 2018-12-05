<section>
  <section>
    <div class="mb-3" align="right">
      <button type="button" class="btn btn-warning btn-floating" data-toggle="modal" data-target="#exampleModalCenter">
        <i class="fal fa-plus"></i>
      </button>
      <button type="button" class="btn btn-floating btn-danger">
        <i class="fal fa-list"></i>
      </button>
      <button type="button" class="btn btn-info btn-floating">
        <i class="fal fa-grip-horizontal"></i>
      </button>
    </div>

  </section>

  <section>
    <div class="card mb-5 ">
      <div class="card-body table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">NAME
              </th>
              <th class="th-sm">DESCRIPTION
              </th>
              <th class="th-sm">ACTION
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p>Sample</p>
              </td>
              <td>
                <p>Sample</p>
              </td>
              <td width="30">
                <div class="mx-auto">
                  <a>
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Update"></i>
                  </a>
                  <a>
                    <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
                  </a>
                  <a>
                    <i class="fas fa-info" data-toggle="tooltip" data-placement="bottom" title="View Information"></i>
                  </a>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate="novalidate">
              <div class="w-75 mx-auto">
                <div class="md-form">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control " id="username" required="required">
                  <div class="invalid-feedback">
                    Username is required
                  </div>
                </div>
                <div class="md-form">
                  <label for="username">Password</label>
                  <input type="password" name="password" class="form-control " id="password" required="required" aria-describedby="pass-mute">
                  <div class="invalid-feedback">
                    Password is required
                  </div>
                  <small id="pass-mute" class="form-text text-muted mb-4">
                    All new passwords must contain at least 8 characters. We also suggest having at least one capital and one lower-case letter (Aa-Zz), one special symbol (#, &, % etc), and one number (0-9) in your password for the best strength.
                  </small>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn aqua-gradient btn-rounded waves-effect waves-light">Save changes</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

</section>
