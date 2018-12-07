<section>
  <section>
    <div class="row">
      <div class="col-lg-3 mb-4">
        <div class="list-group z-depth-1">
          <a href="#" class="list-group-item active">
            Cras justo odio</a>
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
        </div>
      </div>
      <div class="col-lg-6 mb-4">

        <div class="card">
          <div class="card-body">
            <div class="text-left">
              <h2>Profile</h2>
              <hr>
            </div>

            <div class="w-50">
              <div class="md-form">
                <label for="surname" class="active">Account Id</label>
                <input type="text" name="acro" class="form-control" id="acro" required="required" value="sampple" disabled>
                <div class="invalid-feedback">
                  Acronym is required
                </div>
              </div>

              <div class="md-form">
                <label for="surname" class="active">Name</label>
                <input type="text" name="acro" class="form-control" id="acro" required="required" value="sampple">
                <div class="invalid-feedback">
                  Acronym is required
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="modal fade right" id="exampleModalCenter" name="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-full-height modal-right modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation">

              <div class="w-75 mx-auto">

                <div class="md-form">
                  <label for="surname">Acronym</label>
                  <input type="text" name="acro" class="form-control" id="acro" required="required">
                  <div class="invalid-feedback">
                    Acronym is required
                  </div>
                </div>

                <div class="md-form">
                  <label for="firstname">Full Division Name</label>
                  <textarea type="text" name="fdname" class="form-control md-textarea" id="fdname" required="required"></textarea>
                  <div class="invalid-feedback">
                    Full Division Name is required
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
