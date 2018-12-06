<section>
  <section>
    <div class="mb-3" align="right">
      <button type="button" class="btn btn-warning btn-floating" id="add" data-toggle="modal" data-target="#exampleModalCenter">
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
              <th class="th-sm">Name
              </th>
              <th class="th-sm">Position
              </th>
              <th class="th-sm">Action
              </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </section>

  <section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                <div align="left" class="pl-0 mt-0">
                  <label for="username" style="color : #757575">Gender</label>
                  <div class="fileupload-wrapper ml-0 mr-0 mb-3">
                    <input type="file" id="picuploader" name="picuploader" class="mdb_upload"/>
                  </div>
                </div>

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
                  <label for="middlename">Middle name</label>
                  <input type="text" name="middlename" class="form-control " id="middlename" required="required">
                  <div class="invalid-feedback">
                    Lastname is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="nameext">Name extension</label>
                  <input type="text" name="nameext" class="form-control " id="nameext" aria-describedby="ext">
                  <small id="ext-mute" class="form-text text-muted">
                    (optional)
                  </small>
                </div>

                <div align="left" class="pl-0 mt-0">
                  <label for="username" style="color : #757575">Gender</label>
                  <div class="">
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" name="gender" value="Female" required="required">
                      <label class="form-check-label" for="materialInline1">Female</label>
                    </div>

                    <!-- Material inline 2 -->
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" name="gender" value="male" required="required">
                      <label class="form-check-label" for="materialInline2">male</label>
                    </div>
                  </div>
                  <div class="invalid-feedback">
                    You must to select before submitting.
                  </div>
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

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn aqua-gradient btn-rounded waves-effect waves-light">Save changes</button>
              <input type="hidden" name="action" id="action">
              <input type="hidden" name="id" id="id">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</section>
