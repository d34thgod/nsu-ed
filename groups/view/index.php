<?php
  require_once("../../includes/head.php");
  if($USERNAME==NULL) jump("/index.php");
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Group - NSU-ED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="page_message">
<?php require_once("../../includes/header.php"); ?>
  <div class="container">
    <h1 class="page-header"><span class="glyphicon glyphicon-folder-open glyphicon-pad"></span> CSE 311 Labs <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-thumbs-down"></span> report</a></h1>
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
          <h3 class="h1 sm-margin-top"><span class="glyphicon glyphicon-eye-open"></span> Group is Public</h3>

          <p class="errata text-info bg-info sm-margin-top"><strong>created by</strong> <a href="#" class="btn btn-default btn-xs">Jafar</a></p>

          <p class="errata text-info bg-info sm-margin-top m-margin-bottom">
            <strong>Description: </strong>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
          </p>
          <!--group pills-->
          <ul class="nav nav-pills">
            <li class="active"><a href="#group_posts" data-toggle="tab"><span class="glyphicon glyphicon-question-sign visible-xs-inline-block"></span><span class="hidden-xs">Posts</span></a></li><!--
            <li><a href="#group_create_post" data-toggle="tab"><span class="glyphicon glyphicon-pencil visible-xs-inline-block"></span><span class="hidden-xs">Create</span></a></li>--><!--
            <li><a href="#group_add_member" data-toggle="tab"><span class="glyphicon glyphicon-plus-sign visible-xs-inline-block"></span><span class="hidden-xs">Add</span></a></li>-->
            <li><a href="#group_search" data-toggle="tab"><span class="glyphicon glyphicon-search visible-xs-inline-block"></span><span class="hidden-xs">Search</span></a></li><!--
            <li><a href="#group_mission" data-toggle="tab"><span class="glyphicon glyphicon-wrench visible-xs-inline-block"></span><span class="hidden-xs">Mission</span></a></li>-->
          </ul><!--/.nav-tabs-->
          <!--pills data-->
          <div class="tab-content xs-margin-top">
            <div class="tab-pane fade active in" id="group_posts">
              <div class="list-group">
                <a href="#" class="list-group-item notify">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                      <ul class="list-horizontal list-item-tags-list text-muted">
                        <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                        <li>php, </li>
                        <li>bts, </li>
                        <li>css, </li>
                        <li>html, </li>
                        <li>js, </li>
                        <li>jQuery, </li>
                        <li>normalize</li>
                      </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                      <ul class="list-horizontal list-item-tags-list text-muted">
                        <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                        <li>php, </li>
                        <li>bts, </li>
                        <li>css, </li>
                        <li>html, </li>
                        <li>js, </li>
                        <li>jQuery, </li>
                        <li>normalize</li>
                      </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                      <ul class="list-horizontal list-item-tags-list text-muted">
                        <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                        <li>php, </li>
                        <li>bts, </li>
                        <li>css, </li>
                        <li>html, </li>
                        <li>js, </li>
                        <li>jQuery, </li>
                        <li>normalize</li>
                      </ul>
                  </div>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading xs-margin-bottom">How do I activate my account? <span class="label label-default">New</span></h4>
                  <div class="list-group-item-text">
                    <div class="btn-group btn-group-sm btn-group-xs-in xs-margin-bottom">
                      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok glyphicon-pad"></span> solved</button>
                      <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-question-sign glyphicon-pad"></span> Jafar</button>
                    </div>
                      <ul class="list-horizontal list-item-tags-list text-muted">
                        <button type="button" class="btn btn-info btn-sm btn-xs-in"><span class="glyphicon glyphicon-tags glyphicon-pad"></span> Tags</button>
                        <li>php, </li>
                        <li>bts, </li>
                        <li>css, </li>
                        <li>html, </li>
                        <li>js, </li>
                        <li>jQuery, </li>
                        <li>normalize</li>
                      </ul>
                  </div>
                </a>
              </div>
            </div><!--/#group_posts-->
            <div class="tab-pane fade" id="group_create_post">
              <form>
                <div class="form-group">
                  <label for="group_title">Title</label>
                  <input type="text" class="form-control" id="group_title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="group_intro">Body</label>
                  <textarea class="form-control" rows="6" id="group_intro"></textarea>
                </div>
                <div class="form-group">
                  <label for="group_tags">Tags</label>
                  <input type="text" class="form-control" id="group_tags" placeholder="php, js, html">
                  <p class="help-block">separate tags with a comma <kbd>,</kbd>.</p>
                </div>
                <button type="submit" class="btn btn-default">Post</button>
              </form>
            </div><!--/#group_create_post--><!--
            <div class="tab-pane fade" id="group_add_member">
              <form>
                <div class="form-group">
                  <label for="group_search_member">Search for users</label>
                  <input type="text" class="form-control" id="group_search_member" placeholder="Username">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>--><!--/#groups_add_member-->
            <div class="tab-pane fade" id="group_search">
              <form>
                <div class="form-group">
                  <label for="groups_search_input">Search for posts</label>
                  <input type="text" class="form-control" id="groups_search_input" placeholder="Post title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/#groups_search--><!--
            <div class="tab-pane fade" id="group_mission">
              --><!--plans to add members list--><!--
              <form>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="set_private" checked> Set group as private
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>--><!--/#groups_search-->
          </div><!--/.tab-content ends-->
          <!--#groups ends-->
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

<?php require_once("../../includes/footer.php"); ?>

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