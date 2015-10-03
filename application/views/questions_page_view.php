    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Test Module</title>

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
  <h2>Zomato Online Test</h2>
  <form class="form-horizontal" role="form" action="http://localhost:8888/work/index.php/interview/getAnswers" method="post">
    <?php
    foreach($questions as $tuple) {
		    echo '<div class="form-group">
		      <label class="control-label col-sm-3" for="email">';
		     echo $tuple['question'].'</label><br/>
		      <div class="form-group">
			      <div class="col-sm-5">          
			     	<textarea name="'.$tuple['q_id'].'" placeholder="Enter answer"></textarea>
			      </div>
    		  </div><br/>
    		  <input type="hidden" name="iid" value="'.$tuple['interview_id'].'">';
    }
    ?>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit Answer</button>
      </div>
    </div>
  </form>
</div>