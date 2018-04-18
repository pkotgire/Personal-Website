<?php

  function generatePage($body, $title) {
    $page = <<< EOPAGE
    <!doctype html>
    <html lang="en">
        <head>
            <title>Prathamesh Kotgire</title>

            <!-- Bootstrap stuff -->
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- jQuery (needed for Bootstrap's JS plugins) -->
            <script src="bootstrap/jquery-3.2.1.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>

            <!-- CSS -->
            <link href="mainstyle.css" rel="stylesheet">
        </head>

        <body>

            <!-- Navigation Bar -->
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">

                <!-- Navbar Header -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">Prathamesh Kotgire</a>

                  <!-- Show menu button only when navbar collapses -->
                  <button type="button" class="navbar-toggle collapsed"
                          data-toggle="collapse"
                          data-target="#navbarcontent">

                  <!-- Create the menu button -->
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Navbar Body -->
                <div id="navbarcontent" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"</span></a></li>
                    <li><a href="resume.pdf">Resume</a><li>
                    <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">
                          Profiles <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="https://github.com/pkotgire">GitHub</a></li>
                        <li class="divider"></li>
                        <li><a href="https://www.linkedin.com/in/prathamesh-kotgire-39419ba0">LinkedIn</a></li>
                      </ul>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- Main Body -->
            <div class="container-fluid" style="margin-top: 80px;">
              $body

              <!-- Footer -->
              <!-- <div class="row">
                <div class="col-xs-6 col-xs-offset-3 text-center">
                  <footer>
                    <a href="http://github.com/pkotgire">Github</a>
                    |
                    <a href="">Linked-In</a>
                  </footer>
                </div>
              </div>
            </div>
          </div> -->
      </body>
  </html>
EOPAGE;

    return $page;
  }
?>
