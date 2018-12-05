<section>
  <style>
    .mdb-upload {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      position: relative;
      cursor: pointer;
      overflow: hidden;
      width: 100%;
      max-width: 100%;
      height: 200px;
      padding: 5px 10px;
      font-size: 1rem;
      text-align: center;
      color: #ccc;
    }
    .fileupload-wrapper .card.card-body.has-error .mdb-upload-message .mdb-error,
    .fileupload-wrapper .card.card-body.has-preview .btn.btn-sm.btn-danger {
      display: block;
    }
    .mdb-upload i {
      font-size: 3rem;
    }
    .mdb-upload .mask.rgba-stylish-slight {
      opacity: 0;
      -webkit-transition: all 0.15s linear;
      -o-transition: all 0.15s linear;
      transition: all 0.15s linear;
    }
    .mdb-upload:hover .mask.rgba-stylish-slight {
      opacity: 0.8;
    }
    .fileupload-wrapper .card.card-body.has-error {
      border-color: #f34141;
    }
    .fileupload-wrapper .card.card-body.has-error:hover .mdb-errors-container {
      visibility: visible;
      opacity: 1;
      -webkit-transition-delay: 0s;
      -o-transition-delay: 0s;
      transition-delay: 0s;
    }
    .fileupload-wrapper .card.card-body.disabled input {
      cursor: not-allowed;
    }
    .fileupload-wrapper .card.card-body.disabled:hover {
      background-image: none;
      -webkit-animation: none;
      animation: none;
    }
    .fileupload-wrapper .card.card-body.disabled .mdb-upload-message {
      opacity: 0.5;
      text-decoration: line-through;
    }
    .fileupload-wrapper .card.card-body.disabled .mdb-infos-message {
      display: none;
    }
    .fileupload-wrapper .card.card-body input {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      cursor: pointer;
      z-index: 5;
    }
    .fileupload-wrapper .card.card-body .mdb-upload-message {
      position: relative;
      top: 50px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }
    .fileupload-wrapper .card.card-body .mdb-upload-message span.file-icon {
      font-size: 50px;
      color: #ccc;
    }
    .fileupload-wrapper .card.card-body .mdb-upload-message p {
      margin: 5px 0 0;
    }
    .fileupload-wrapper .card.card-body .mdb-upload-message p.mdb-error {
      color: #f34141;
      font-weight: 700;
      display: none;
    }
    .fileupload-wrapper .card.card-body .btn.btn-sm.btn-danger {
      display: none;
      position: absolute;
      opacity: 0;
      z-index: 7;
      top: 10px;
      right: 10px;
      -webkit-transition: all 0.15s linear;
      -o-transition: all 0.15s linear;
      transition: all 0.15s linear;
    }
    .fileupload-wrapper .card.card-body .mdb-preview {
      display: none;
      position: absolute;
      z-index: 1;
      background-color: #fff;
      padding: 5px;
      width: 100%;
      height: 100%;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      overflow: hidden;
      text-align: center;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-render .mdb-preview-img {
      width: 100%;
      height: 100%;
      background-color: #fff;
      -webkit-transition: border-color 0.15s linear;
      -o-transition: border-color 0.15s linear;
      transition: border-color 0.15s linear;
      -o-object-fit: cover;
      object-fit: cover;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-render i {
      font-size: 80px;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
      position: absolute;
      color: #777;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-render .mdb-extension {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
      margin-top: 10px;
      text-transform: uppercase;
      font-weight: 900;
      letter-spacing: -.03em;
      font-size: 1rem;
      color: #fff;
      width: 42px;
      white-space: nowrap;
      overflow: hidden;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-infos {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      background: rgba(0,0,0,.7);
      opacity: 0;
      -webkit-transition: opacity 0.15s linear;
      -o-transition: opacity 0.15s linear;
      transition: opacity 0.15s linear;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-infos .mdb-infos-inner {
      position: absolute;
      top: 50%;
      -webkit-transform: translate(0,-40%);
      -ms-transform: translate(0,-40%);
      transform: translate(0,-40%);
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      width: 100%;
      padding: 0 20px;
      -webkit-transition: all 0.2s ease;
      -o-transition: all 0.2s ease;
      transition: all 0.2s ease;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-infos .mdb-infos-inner p {
      padding: 0;
      margin: 0;
      position: relative;
      width: 100%;
      white-space: nowrap;
      overflow: hidden;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      color: #fff;
      text-align: center;
      line-height: 25px;
      font-weight: 700;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-infos .mdb-infos-inner p.mdb-infos-message {
      margin-top: 15px;
      padding-top: 15px;
      font-size: 12px;
      position: relative;
      opacity: 0.5;
    }
    .fileupload-wrapper .card.card-body .mdb-preview .mdb-infos .mdb-infos-inner p.mdb-infos-message::before {
      content: "";
      position: absolute;
      top: 0;
      left: 50%;
      -webkit-transform: translate(-50%,0);
      -ms-transform: translate(-50%,0);
      transform: translate(-50%,0);
      background: #fff;
      width: 30px;
      height: 2px;
    }
    .fileupload-wrapper .card.card-body:hover .btn.btn-sm.btn-danger,
    .fileupload-wrapper .card.card-body:hover .mdb-preview .mdb-infos {
      opacity: 1;
    }
    .fileupload-wrapper .card.card-body:hover .mdb-preview .mdb-infos .mdb-infos-inner {
      margin-top: -5px;
    }
    .fileupload-wrapper .card.card-body.touch-fallback {
      height: auto!important;
    }
    .fileupload-wrapper .card.card-body.touch-fallback:hover {
      background-image: none;
      -webkit-animation: none;
      animation: none;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview {
      position: relative;
      padding: 0;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-render {
      display: block;
      position: relative;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-infos .mdb-infos-inner p.mdb-infos-message::before,
    .fileupload-wrapper .card.card-body.touch-fallback.has-preview .mdb-upload-message {
      display: none;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-render .mdb-font-file {
      position: relative;
      -webkit-transform: translate(0,0);
      -ms-transform: translate(0,0);
      transform: translate(0,0);
      top: 0;
      left: 0;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-render .mdb-font-file::before {
      margin-top: 30px;
      margin-bottom: 30px;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-render img {
      position: relative;
      -webkit-transform: translate(0,0);
      -ms-transform: translate(0,0);
      transform: translate(0,0);
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-infos {
      position: relative;
      opacity: 1;
      background: 0 0;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-infos .mdb-infos-inner {
      position: relative;
      top: 0;
      -webkit-transform: translate(0,0);
      -ms-transform: translate(0,0);
      transform: translate(0,0);
      padding: 5px 90px 5px 0;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-infos .mdb-infos-inner p {
      padding: 0;
      margin: 0;
      position: relative;
      width: 100%;
      white-space: nowrap;
      overflow: hidden;
      -o-text-overflow: ellipsis;
      text-overflow: ellipsis;
      color: #777;
      text-align: left;
      line-height: 25px;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-preview .mdb-infos .mdb-infos-inner p.mdb-infos-message {
      margin-top: 0;
      padding-top: 0;
      font-size: 18px;
      position: relative;
      opacity: 1;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .mdb-upload-message {
      -webkit-transform: translate(0,0);
      -ms-transform: translate(0,0);
      transform: translate(0,0);
      padding: 40px 0;
    }
    .fileupload-wrapper .card.card-body.touch-fallback .btn.btn-sm.btn-danger {
      top: auto;
      bottom: 23px;
      opacity: 1;
    }
    .fileupload-wrapper .card.card-body.touch-fallback:hover .mdb-preview .mdb-infos .mdb-infos-inner {
      margin-top: 5rem;
    }
    .fileupload-wrapper .card.card-body .mdb-loader {
      position: absolute;
      top: 15px;
      right: 15px;
      display: none;
      z-index: 9;
    }
    .fileupload-wrapper .card.card-body .mdb-loader::after {
      display: block;
      position: relative;
      width: 20px;
      height: 20px;
      -webkit-animation: rotate 0.6s linear infinite;
      animation: rotate 0.6s linear infinite;
      -webkit-border-radius: 100%;
      border-radius: 100%;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #777;
      border-left: 1px solid #ccc;
      border-right: 1px solid #777;
      content: "";
    }
    .fileupload-wrapper .card.card-body .mdb-errors-container {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      background: rgba(243,65,65,.8);
      text-align: left;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: visibility 0s linear 0.15s,opacity 0.15s linear;
      -o-transition: visibility 0s linear 0.15s,opacity 0.15s linear;
      transition: visibility 0s linear 0.15s,opacity 0.15s linear;
    }
    .fileupload-wrapper .card.card-body .mdb-errors-container ul {
      padding: 10px 20px;
      margin: 0;
      position: absolute;
      left: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }
    .fileupload-wrapper .card.card-body .mdb-errors-container ul li {
      margin-left: 20px;
      color: #fff;
      font-weight: 700;
    }
    .fileupload-wrapper .card.card-body .mdb-errors-container.visible {
      visibility: visible;
      opacity: 1;
      -webkit-transition-delay: 0s;
      -o-transition-delay: 0s;
      transition-delay: 0s;
    }
    .fileupload-wrapper .card.card-body~.mdb-errors-container ul {
      padding: 0;
      margin: 15px 0;
    }
    .fileupload-wrapper .card.card-body~.mdb-errors-container ul li {
      margin-left: 20px;
      color: #f34141;
      font-weight: 700;
    }
    @-webkit-keyframes rotate {
      0% {
        -webkit-transform: rotateZ(-360deg);
        transform: rotateZ(-360deg);
      }
      100% {
        -webkit-transform: rotateZ(0);
        transform: rotateZ(0);
      }
    }
    @keyframes rotate {
      0% {
        -webkit-transform: rotateZ(-360deg);
        transform: rotateZ(-360deg);
      }
      100% {
        -webkit-transform: rotateZ(0);
        transform: rotateZ(0);
      }
    }
  </style>
  <div class="card mb-5 col-md-6 col-md-offset-3 mx-auto">
    <div class="card-body px-lg-5 pt-0">
      <form method="POST" id="vform" onsubmit="return Validate()" class="text-center needs-validation" novalidate="novalidate">
        <div class="fileupload-wrapper mt-5 ml-0 mr-0">
          <input type="file" id="input-file-now" class="mdb_upload"/>
        </div>
        <div class="form-row">
          <div class="col">
            <!-- First name -->
            <div class="md-form">
              <label for="username">First name</label>
              <input type="text" name="firstname" class="form-control " id="firstname" value="" required>
              <div class="invalid-feedback">
                First is required
              </div>
            </div>
          </div>
          <div class="col">
            <!-- Last name -->
            <div class="md-form">
              <label for="username">Last name</label>
              <input type="text" name="lastname" class="form-control " id="lastname" value="" required>
              <div class="invalid-feedback">
                Lastname is required
              </div>
            </div>
          </div>
        </div>
        <div class="md-form mt-0">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control " id="username" value="" required>
          <div class="invalid-feedback">
            Username is required
          </div>
        </div>
        <div class="md-form">
          <label for="username">Password</label>
          <input type="password" name="password" class="form-control " id="password" value="" required aria-describedby="pass-mute">
          <div class="invalid-feedback">
            Password is required
          </div>
          <small id="pass-mute" class="form-text text-muted mb-4">
            All new passwords must contain at least 8 characters.
            We also suggest having at least one capital and one lower-case letter (Aa-Zz), one special symbol (#, &, % etc), and one number (0-9) in your password for the best strength.
             </small>
        </div>
        <div class="mt-5 pull-right">
          <button class="btn aqua-gradient btn-rounded waves-effect waves-light" type="submit">Add</button>
        </div>

      </form>
    </div>
  </div>
</section>
