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
              <td></td>
              <td>System Architect</td>
              <td>
                <a class="m-2">
                  <i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Update"></i>
                </a>
                <a class="m-2">
                  <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
                </a>
                <a class="m-2">
                  <i class="fas fa-info" data-toggle="tooltip" data-placement="bottom" title="View Information"></i>
                </a>
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
                  <label for="username">Surname</label>
                  <input type="text" name="username" class="form-control " id="username" required="required">
                  <div class="invalid-feedback">
                    Username is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="username">First name</label>
                  <input type="text" name="username" class="form-control " id="username" required="required">
                  <div class="invalid-feedback">
                    Username is required
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn aqua-gradient btn-rounded waves-effect waves-light">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</section>
