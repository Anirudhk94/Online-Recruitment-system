    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Apply for Zomato</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Apply for Zomato</div>
                    </div>     
                    
                      <?php 

                      if (!empty($success)) {
                        echo '<div class="alert alert-success">';
                        echo $success;
                        echo '</div>';
                        }

                      ?>
                    
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="registrationform"  enctype="multipart/form-data" class="form-horizontal" role="form" action="http://localhost:8888/work/index.php/candidate/register" method="post" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="register-username" type="name" class="form-control" name="name" value="" placeholder="Your Name" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="register-email" type="email" class="form-control" name="email" placeholder="Your email address" required>
                                    </div>
                             <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="register-pno" type="test" class="form-control" name="pno" value="" placeholder="Your Phone Number" required>                                         
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                        <input id="register-url" type="url" class="form-control" name="url" value="" placeholder="Your LinkedIn profile" >                                        
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
                                        <textarea id="register-info" class="form-control" name="info" value="" placeholder="A little about yourself"></textarea>                                        
                                    </div> 
                                  <div style="position:relative;">
                                          Choose File...
                                          <input type="file" class="btn btn-file" name="resume" required>
                                      &nbsp;
                                      <span class='label label-info' id="upload-file-info"></span>
                                  </div>
                            <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Login</button>

                                    </div>
                                </div>
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="http://localhost:8888/work/index.php/home/register" method="post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="First Name">
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">LinkedIn URL</label>
                                    <div class="col-md-9">
                                        <input type="url" class="form-control" name="url" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="textarea" class="form-control" name="pno" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">A little about yourself</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="text" placeholder="Password">
                                    </div>
                                </div> 



                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                        
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    