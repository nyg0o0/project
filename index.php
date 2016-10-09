<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style ="text/css"> 
            <!-- 
               @import "css/bootstrap.css";  
                @import "css/style.css"; 
                @import "css/navbar.css";
            --> 
        </style>

        <head>
            <title>u10116054</title>
        </head>

<body>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>



    <nav class="navbar navbar-inverse navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">資產借還系統</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li><a class="Sign-in" data-toggle="modal" href="#login-modals">登入</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


</div>
    <div class="login-panel modal" id="login-modals">
        <!-- close button -->
        <span class="close glyphicon glyphicon-remove" aria-hidden="true" data-dismiss="modal"></span>
        <!-- Login-form -->
        <div class="login-form active">
            <h2>User login</h2>
            <div class="form-group">
                
                <div class="glyphicon glyphicon-star"></div>
                    <input type="text" name="u_name" placeholder="User Id"/>
                </div>
                <input type="password" placeholder="password"/>
                <label>
                    <input type="checkbox" /> Keep me signed in
                </label>
                <!-- btn col -->
                <div class="btn-coll">
                    <button class="btn-submit">Sign in</button>
                    <button class="btn-signup" id="sign-up">Sign up</button>
                </div>
                <p id="forget-pwd">Forgot your password?</p>
            </div><!-- /Login-form -->
 
            <!-- signup form  --> 
            <div class="sign-up">
                <h2>Create User</h2>
                <input type="email" placeholder="E-mail" autofocus />
                <input type="password" placeholder="password"/>
                <button class="btn-submit">Register</button>
            
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <span class="glyphicon glyphicon-home login-breadcrumb"  data-toggle="tooltip" data-placement="left" title="login" ></span>
                    <span class="glyphicon glyphicon-ok-circle pwd-breadcrumb" data-toggle="tooltip" data-placement="right" title="forget password" ></span>
                </div><!-- /breadcrumb -->
            </div><!-- /signup form  --> 
    
            <!-- password recover -->
            <div class="pwd-recover">
                <h2>Recover Account</h2>
                <p>Lost your password? Please enter your username or email address.</p>
                <input type="email" placeholder="E-mail" autofocus />
                <button class="btn-submit">Reset Password</button>
      
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <span class="glyphicon glyphicon-home login-breadcrumb"  data-toggle="tooltip" data-placement="left" title="login" ></span>
                    <span class="glyphicon glyphicon-heart sign-up-breadcrumb" data-toggle="tooltip" data-placement="right" title="User sign up" ></span>
                </div><!-- /breadcrumb -->
            </div> <!-- /password recover -->

        </div><!-- login-panel  --> 
    
<script type="text/javascript">
$(document).ready(function(){

    $("a.forgot").click(function(){
        $("#login-modal").modal("hide");
        $("#forgetform").modal({show:!0})
    });
    
    $("#signup-modal").modal("hide");
    $("#forgetform").modal("hide");
    $("#login-modal").modal("hide");
    $("#activation-modal").modal("hide");
    $("#setpassword-modal").modal("hide");
    
});
</script>
<div id="content">
<div id="header">
    <div class="row">
        <div class="col-md-4"><div class="panel panel-primary">
            這是中文字
        </div>
    </div>

<div class="col-md-4">.col-md-4</div>
    <div class="col-md-4">.col-md-4</div>
</div>
</div>

  </div>
  </body>
</html>