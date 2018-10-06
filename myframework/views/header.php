<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/main.css" rel="stylesheet">

  </head>

  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
          <li <?=@$data["pagename"]=="welcome"?'class="active nav-item"':'class="nav-item"'?>><a href="/welcome" class='nav-link'>Home</a></li>
          <li <?=@$data["pagename"]=="about"?'class="active nav-item"':'class="nav-item"'?>><a href="/welcome/about" class='nav-link'>About</a></li>
          <li <?=@$data["pagename"]=="contact"?'class="active nav-item"':'class="nav-item"'?>><a href="/welcome/contact" class='nav-link'>Contact</a></li>
      </ul>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Sign In
      </button>
    </div>
  </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log Into Your Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body was-validated">
                <form action="/welcome/contactRecv" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="loginemail" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="loginpassword" placeholder="Password" required>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <input type="button" class="btn btn-primary" value="Sign In" id="ajaxsubmit"></input>
            </div>
            </div>
        </div>
    </div>
</header>

