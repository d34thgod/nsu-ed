<?php
  require_once("../includes/head.php");
  if($USERNAME==NULL) jump("/index.php");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_survey">
<?php require_once("../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-paperclip glyphicon-pad"></span> Post <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a> <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-remove"></span> delete</a></h1>
    <div class="content-block">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
      </ol>
    </div>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
        <nav class="navbar navbar-default visible-xs">
          <div class="container">
            <button type="button" class="btn navbar-btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</button>
            <button type="button" class="btn navbar-btn btn-primary pull-right" data-toggle="offcanvas"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </nav>
        <div class="col-lg-12"><!--content-->
          <!--if solved-->
          <h2 class="errata sm-margin-bottom alert-success text-center"><span class="glyphicon glyphicon-ok"></span> Solved</h2>

          <!--post starts-->
          <div class="post errata bg-info">
            <div class="post-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
              </span>
            </div>
            <h4 class="post-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="post-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="post-owner text-right">
              asked by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
            <div class="post-tags text-left xs-margin-top">
              <div class="btn-group btn-group-xs">
                <button type="button" class="btn btn-primary"><a class="display-block" href="#"><span class="glyphicon glyphicon-tag glyphicon-pad"></span> Tags</a></button>
                <ul class="list-horizontal post-tags-list">
                  <li><a href="#">php, </a></li>
                  <li><a href="#">js, </a></li>
                  <li><a href="#">html, </a></li>
                  <li><a href="#">bts</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/.post-->

          <div class="comment errata m-margin-top bg-success">
            <div class="comment-best text-success text-center">
              <span class="glyphicon glyphicon-ok glyphicon-pad"></span> Best Answer
            </div>
            <div class="comment-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
                <button type="button" class="btn btn-danger btn-xs"><span class="hidden-xs">report </span><span class="glyphicon glyphicon-remove"></span></button>
              </span>
            </div>
            <h4 class="comment-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="comment-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="comment-owner text-right">
              comment by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
          </div>

          <div class="comment errata m-margin-top bg-warning">
            <div class="comment-votes">
              <span class="badge">40</span>
              <span class="text-muted"> votes</span>
              <span class="pull-right clearfix">
                <button type="button" class="btn btn-success btn-xs"><span class="hidden-xs">vote up </span><span class="glyphicon glyphicon-thumbs-up"></span></button>
                <button type="button" class="btn btn-warning btn-xs"><span class="hidden-xs">vote down </span><span class="glyphicon glyphicon-thumbs-down"></span></button>
                <button type="button" class="btn btn-danger btn-xs"><span class="hidden-xs">report </span><span class="glyphicon glyphicon-remove"></span></button>
              </span>
            </div>
            <h4 class="comment-heading">How to do the node.js and js and jQuery and all and all?</h4>
            <p class="comment-body">The less/, js/, and fonts/ are the source code for our CSS, JS, and icon fonts (respectively). The dist/ folder includes everything listed in the precompiled download section above. The docs/ folder includes the source code for our documentation, and examples/ of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
            <div class="comment-owner text-right">
              comment by <a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-question-sign"></span> Jafar</a>
            </div>
          </div>
        </div><!--/.col+content-->
      </div><!--/.col-->

      <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 sidebar-offcanvas" id="sidebar">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h6><span class="glyphicon glyphicon-flash glyphicon-pad"></span> Go To</h6>
          </div>
          <ul class="list-group">
            <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> ask</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-map-marker glyphicon-pad"></span> activites</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-apple glyphicon-pad"></span> groups</a>
            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-check glyphicon-pad"></span> survey</a>
          </ul>
        </div>
      </div><!--/.sidebar-offcanvas-->
      <div class="col-lg-12 clearfix clear-both"></div>
    </div><!--/row-->
  </div><!--/.container-->

<?php require_once("../includes/footer.php"); ?>

  <!--js scripts -->
  <!--page unspecific--><!--
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="/js/jquery-1.11.3.min.js"><\/script>')
  </script>-->
  <!--testing--><script src="/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.placeholder.min.js"></script>
  <!--Init tabs - page specific-->
  <script type="text/javascript">
    $(function() {
      $('.nav-tabs a:first').tab('show')
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
      });
    });
  </script>
  <script type="text/javascript">
    $('input, textarea').placeholder();
  </script>
</body>

</html>
