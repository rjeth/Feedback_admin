<?php include('../layout/header.php'); ?>
<div class="d-flex justify-content-center mt-5">
  <div class="card z-depth-0 col-md-5 col-md-offset-3">
    <div class="card-body">
      <h1 class="card-title pt-0 text-center">NEO INDUSTRY</h1>
      <p class="card-subtitle text-center text-black-50">Welcome back! Please login to your account.</p>
      <hr class="border-dark w-25 mb-5">
      <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate="novalidate">
        <div id="alert" role="alert">

        </div>
        <div class="md-form">
          <label for="username">E-mail</label>
          <input type="text" name="username" class="form-control " id="username" value="" required="required">
          <div class="invalid-feedback">
            Looks good!
          </div>
        </div>
        <div class="md-form">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control " id="password" value="" required="required">
          <div class="invalid-feedback">
            Looks good!
          </div>
        </div>
        <div class="row ">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agree" name="agree">
            <label class="form-check-label" for="agree">remember me</label>
          </div>
          <div class="col">
            <a class="pull-right" href="../forgot">forgot password</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <button class="btn btn-block btn-mdb-color waves-effect waves-light z-depth-0" type="submit">Sign in</button>
          </div>
          <div class="col">
            <a class="btn btn-block btn-outline-mdb-color waves-effect z-depth-0" href="../register">Sign</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="text-center py-1 fixed-bottom mb-5">© 2018 Copyright:
  <a>
    Loan-M</a>
</div>

<?php include('../layout/footer.php'); ?>
<script>
  function Validate() {
    var form = $('#vform').serialize();
    $.ajax({
      url: 'login.php',
      method: 'POST',
      data: form,
      success: function (data) {
        if (data == 'Success') {
          $('#alert').removeClass('alert alert-success');
          $('#alert').html('');
          window.location = '../dashboard';
        } else {
          $('#alert').addClass('alert alert-danger alert-dismissible fade show');
          $('#alert').html('Invalid Username or Password<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
        }
      }
    });
    return false
  }
</script>
<script>
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
