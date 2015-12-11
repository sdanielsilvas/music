<!doctype html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=1280,height=720">
  <title> Tigo Music </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
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
                  <div id="div-rock"><li class="list-element"><a href="#">Rock</a></li></div>
                  <div id="div-salsa"><li class="list-element"><a href="#">Salsa</a></li></div>
                  <div id="div-electronica"><li class="list-element"><a href="#">Electronica</a></li></div>
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
        <div id="audios"></div>
        <!-- <audio id="speech" src="http://www.smartecsolutions.com/public/file1.mp3" controls="controls" autoplay="autoplay" type="audio/mp3">Your browser does not support the audio element.</audio> -->
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="box-div">
            <div class="col-md-12 enterUserText">
              ingresa con tu usuario de DEEZER
            </div>
            <div class="col-md-4 fixedCol">
              <input id="userLogin" type="text" class="form-control loginBox" placeholder="NOMBRE DE USUARIO">
            </div>
            <div class="col-md-4 fixedCol">
              <input id="passwordLogin" type="password" class="form-control loginBox" placeholder="CONTRASEÑA">
            </div>
            <div class="col-md-4 fixedCol">
              <button id="btnLogin" class="btnIngresar">INGRESAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>