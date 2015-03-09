<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo base_url(); ?>_template/jumbotron/ico/favicon.ico">    
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>_templates/jumbotron/css/jumbotron.less" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>  
  <header>
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-target="nav" data-toggle="collapse" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand">
              Project Name
          </a>
      </div>
      <nav class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php 
            if ($logged_in)
            {
          ?>
          <!-- Grid 12 Menu -->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">User Menu<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-sm-12">.col-sm-12</div>
                </div>
                <div class="row">
                  <div class="col-sm-6">.col-sm-6</div>
                  <div class="col-sm-6">.col-sm-6</div>
                </div>
                <div class="row">
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
                </div>
                <div class="row">
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                </div>
                <div class="row">
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                </div>
                <div class="row">
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                </div>
              </li>
            </ul>
          </li>
            <?php 
              if ($is_admin)
              {
            ?><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Menu<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-sm-12">.col-sm-12</div>
                </div>
                <div class="row">
                  <div class="col-sm-6">.col-sm-6</div>
                  <div class="col-sm-6">.col-sm-6</div>
                </div>
                <div class="row">
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
                </div>
                <div class="row">
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                  <div class="col-sm-3">.col-sm-3</div>
                </div>
                <div class="row">
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                  <div class="col-sm-2">.col-sm-2</div>
                </div>
                <div class="row">
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                  <div class="col-sm-1">.col-sm-1</div>
                </div>
              </li>
            </ul>
          </li>
            <?php
              }
            ?>
          <?php
            }
          ?>
          <!--With Offsets 
          -->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Offset<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-sm-4">4</div>
                  <div class="col-sm-4 col-sm-offset-4">4 offset 4</div>
                </div>
                <div class="row">
                  <div class="col-sm-3 col-sm-offset-3">3 offset 3</div>
                  <div class="col-sm-3 col-sm-offset-3">3 offset 3</div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">6 offset 6</div>
                </div>
              </li>
            </ul>
          </li>
          <!--Aside Menu 
          -->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Aside<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-sm-3"><br>
                    <h3>3</h3><br>
                  </div>
                  <div class="col-sm-9"><br>
                    <h3>9</h3><br>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!--Nesting Menu 
          -->
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nesting<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-sm-12">12</div>
                </div>
                <div class="row">
                  <div class="col-sm-12">12
                    <div class="row">
                      <div class="col-sm-4">4</div>
                      <div class="col-sm-4">4</div>
                      <div class="col-sm-4">4</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav login">
          <?php
            if ($logged_in)
            {
            ?>
              <li><a id='user' href='/auth/edit_user/<?php echo $user->id; ?>' title='Edit your details'><?php echo ucwords($user->username);?></a> <a id="logout" href="/auth/logout" title="Logout">Logout</a></li>
            <?php
            }
            else
            {
            ?>
              <li><a  id="login" href="/auth/login" title="Login">Login</a></li>
            <?php
            }
            ?>
        </ul>
      </nav>
    </div>
  </header>
  
  