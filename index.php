<!doctype html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=1280,height=720">
  <title> Tigo Music </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Mis listas
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <ul>
                  <li class="list-element"><a href="#">Rock</a></li>
                  <li class="list-element"><a href="#">Salsa</a></li>
                  <li class="list-element"><a href="#">Electronica</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Sugeridas
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Holi 2
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <p id="change-text"></p>
        <audio id="speech" src="http://www.smartecsolutions.com/public/file1.mp3"></audio>
        oelo
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
    <!-- <div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <label>Usuario:</label>
              </div>
              <div class="col-md-9">
                <input id="userLogin" type="text" class="form-control">
              </div>
              <div class="col-md-3">
                <label>Contraseña:</label>
              </div>
              <div class="col-md-9">
                <input id="passwordLogin" type="password" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-md-9">
                <h4 id="fail" class="fail_login hiddenDiv">Usuario o contraseña invalidos</h4>
              </div>
              <div class="col-md-3">
                <button id="btnLogin" class="btn btn-success">Aceptar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </body>
  </html>