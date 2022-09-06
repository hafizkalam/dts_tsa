<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Tutorial Sample Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>

  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <header class="page-header header container-fluid">
      <div class="overlay">
        <div class="description">
          <h1>Welcome to the Landing Page!</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
            interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id
            sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id
            libero fringilla, in pharetra sem ullamcorper.
          </p>
        </div>
    </header>
    
    <div class="container features">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Lorem ipsum</h3>
          <img src="img/rose.jpg" class="img-fluid" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
            interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
            id sapien rutrum, id vulputate quam iaculis.
          </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-title">Lorem ipsum</h3>
          <img src="img/moon.jpg" class="img-fluid" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
            interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor
            id sapien rutrum, id vulputate quam iaculis.
          </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
      </div>
    </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>
