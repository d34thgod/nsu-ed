<?php
  require_once("../includes/head.php");
  //if($USERNAME==NULL) jump("/index.php"); //check this
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkpoint - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_verify">
  <nav class="navbar navbar-fixed-top navbar-inverse" id="topbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topbar_menu_collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>--><!--navbar-toggle collapsed-->
        <a class="navbar-brand" href="#">nsu-ed</a>
      </div><!--/.navbar-header-->
      <div id="topbar_menu_collapse" class="collapse navbar-collapse">
        <button type="button" class="btn btn-default navbar-btn navbar-right"><a class="display-block" href="#">Sign in</a></button><!--
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="img-rounded avatar avatar-navbar" src="http://placehold.it/40x36.gif">
              <span class="caret"></span>
              <div class="btn-group visible-xs-inline-block navbar-right">
                <button type="button" class="btn btn-success">
                  <span class="badge">245</span>--><!--php here for number--><!--
                  <span class="hidden-xxxs"> views</span><span class="hidden-xs visible-xxxs-inline-block glyphicon glyphicon-eye-open"></span>
                </button>
                <button type="button" class="btn btn-warning">
                  <span class="badge">457</span>--><!--php here for number--><!--
                  <span class="hidden-xxxs"> posts</span><span class="hidden-xs visible-xxxs-inline-block glyphicon glyphicon-flash"></span>
                </button>
                <button type="button" class="btn btn-info">
                  <span class="badge">9</span>--><!--php here for number--><!--
                  <span class="hidden-xxxs"> comments</span><span class="hidden-xs visible-xxxs-inline-block glyphicon glyphicon-comment"></span>
                </button>
                <button type="button" class="btn btn-danger hidden-xxs">
                  <span class="badge">23</span>--><!--php here for number--><!--
                  <span class="hidden-xxxs"> likes</span><span class="hidden-xs visible-xxxs-inline-block glyphicon glyphicon-heart"></span>
                </button>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#"><span class="glyphicon glyphicon-user glyphicon-pad"></span> username</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#"><span class="glyphicon glyphicon-globe glyphicon-pad"></span> notifications <span class="badge badge-leftpad badge-active">2</span></a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#"><span class="glyphicon glyphicon-envelope glyphicon-pad"></span> messages <span class="badge badge-leftpad badge-active">6</span></a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#"><span class="glyphicon glyphicon-wrench glyphicon-pad"></span> settings</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#"><span class="glyphicon glyphicon-off glyphicon-pad"></span> logout</a>
              </li>
            </ul>--><!--dropdown-menu--><!--
          </li>--><!--/.dropdown--><!--
        </ul>--><!--/.navbar-nav--><!--
        <form class="navbar-form navbar-search">
        	<div class="form-group">
          	<div class="form-group">
            	<input type="text" class="form-control search-input" placeholder="type anything">
            </div>
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search hidden-xs"></span><span class="visible-xs-inline-block text-muted">Submit</span></button>
        </form>-->
      </div><!--/#topbar_menu_collapse-->
    </div><!--/.container-->
  </nav><!--/.navbar-->
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-bell glyphicon-pad"></span>Verification</h1>
    <div class="row clearfix">
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <h2 class="text-center">Enter verification code!</h2>
        <p class="errata text-muted">Te hinc laudem sea. Virtute fabellas mea no, et duis intellegam cum. Cu tota adhuc quo, dicit dolor nec an. Quando vocibus scribentur eam ex, <a class="text-info" href="#">resend verfication code</a> principes ea. Ignota equidem id has, no quis molestiae eam, denique deseruisse nec id. Ne elaboraret adversarium mea.</p>
        <form>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="verification code">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
              </span>
            </div>
          </div>
        </form>
        <p class="text-info bg-info errata">In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready.</p>
      </div><!--/.column-->
    </div><!--/.row-->
  </div><!--/.container-->

<?php require_once("../includes/footer.php"); ?>

  <!--js scripts -->
  <!--page unspecific-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<!--Init tabs - page specific-->
  <script>
  	$(function() {
  		$('.nav-tabs a:first').tab('show')
  	});
  </script>
</body>

</html>
