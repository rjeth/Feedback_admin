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
              <th class="th-sm"></th>
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
              <td scope="col" width="50"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="img-fluid z-depth-1 rounded-circle" alt="Responsive image" width="50"></td>
              <td>
                <p class="mt-3">Sample</p>
              </td>
              <td>
                <p class="mt-3">Sample</p>
              </td>
              <td width="30">
                <div class="mt-3 mx-auto">
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
              <div class="fileupload-wrapper ml-0 mr-0 mb-3">
                <input type="file" id="input-file-now" class="mdb_upload"/>
              </div>
              <div class="w-75 mx-auto">

                <div class="md-form">
                  <label for="surname">Surname</label>
                  <input type="text" name="surname" class="form-control " id="surname" required="required">
                  <div class="invalid-feedback">
                    Surname is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="firstname">First name</label>
                  <input type="text" name="firstname" class="form-control " id="firstname" required="required">
                  <div class="invalid-feedback">
                    Firstname is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="lastname">Last name</label>
                  <input type="text" name="lastname" class="form-control " id="lastname" required="required">
                  <div class="invalid-feedback">
                    Lastname is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="nameext">Name extension</label>
                  <input type="text" name="nameext" class="form-control " id="nameext" aria-describedby="ext">
                  <small id="ext-mute" class="form-text text-muted mb-4">
                  (optional)
                  </small>
                </div>

                <div align="left" class="mt-0">
                  <label for="birthday" style="color : #757575">Birthday</label>
                  <input type="date" name="birthday" class="form-control datepicker" id="birthday" required="required">
                  <div class="invalid-feedback">
                    Birthday is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="placebirth">Place of Birth</label>
                  <input type="text" name="placebirth" class="form-control " id="placebirth" required="required">
                  <div class="invalid-feedback">
                    Place of Birth is required
                  </div>
                </div>

                <div align="left" class="form-check pl-0">
                  <label for="username" style="color : #757575">Gender</label>
                  <div class="">
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" id="gender" name="gender" required>
                      <label class="form-check-label" for="materialInline1">Female</label>
                    </div>

                    <!-- Material inline 2 -->
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" id="gender" name="gender" required>
                      <label class="form-check-label" for="materialInline2">male</label>
                    </div>
                  </div>
                  <div class="invalid-feedback">
                    You must to select before submitting.
                  </div>

                </div>


              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn aqua-gradient btn-rounded waves-effect waves-light">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</section>
