<?php
session_start();
?>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/a3.jpg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style type="text/css">
    #top{
      color:white;
    }
    body{
      font-family: 'Sunflower', sans-serif;
    }
    h4{
      color:#A4A4A4;
    }
    .jumbotron{
      height:70%;
      background-image:url("images/a8.jpg");
      color:white;
    }
    .lead{
      width:50%;
    }
    .container{
      text-align:center;
      font-size:140%;
    }
    h3{
      color:white;
    }
    #carouselExampleIndicators
    {
      margin-top:100px;
    }
    #text1{
      margin-top:60px;
    }
    #text2
    {
      margin-top:60px;
    }
    #text3
    {
      padding-top:80px;
      width:40%;
      float:left;
    }
    #iframe1
    {
      float:left;
    }
    .ev1{
      margin-top:60px;

    }

    #text4
    {
      padding-top:70px;
      width:40%;
      float:left;
    }
    #iframe2
    {
      float:left;

    }
    .clear{
      clear:both;
    }
    #stext{
      margin-bottom:60px;
    }
    #footer{
     text-align:center;
     padding-top:50px;
     margin-bottom:10px;
     background-color:black;
     color:white;
   }
   .accordion{
     margin-top:50px;
   }
    </style>
    <title>Alienverse</title>
  </head>
  <body>
    <div id="top">
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">The World of Aliens</h5>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="https://www.google.co.in/search?q=aliens&rlz=1C1CHBD_enIN768IN768&oq=aliens&aqs=chrome..69i57j0l5.1519j0j7&sourceid=chrome&ie=UTF-8"><img width="40px" height="40px" src="images/p1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.youtube.com/results?search_query=signs+of+aliens">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.co.in/search?q=proof+of+aliens&rlz=1C1CHBD_enIN768IN768&oq=proof+of+aliens&aqs=chrome..69i57j0.3351j0j7&sourceid=chrome&ie=UTF-8">Article</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.google.co.in/search?q=alien+movies&rlz=1C1CHBD_enIN768IN768&oq=alien+movies&aqs=chrome..69i57j0l5.2807j0j7&sourceid=chrome&ie=UTF-8">Movies</a>
          <a class="dropdown-item" href="https://www.google.co.in/search?rlz=1C1CHBD_enIN768IN768&ei=WhIVW8yHAcfUvgS4_4RY&q=alien+anime&oq=alien+anime&gs_l=psy-ab.3..0l3j0i22i30k1l2.27638.30752.0.31054.13.12.1.0.0.0.320.1995.0j3j5j1.9.0....0...1c.1.64.psy-ab..6.7.1339...0i67k1j0i131k1j0i10k1.0.TXhmuvEKiqI">Anime</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.google.co.in/search?rlz=1C1CHBD_enIN768IN768&ei=pBIVW7qVKMjTvwTOs7PYBQ&q=+government+on+aliens&oq=+government+on+aliens&gs_l=psy-ab.3...5319.5982.0.6667.8.4.0.0.0.0.207.403.0j1j1.2.0....0...1c.1.64.psy-ab..6.0.0....0.V21pIk3-_Qg">The government</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      <span class="text-muted">The search for aliens is on!.Let's search for them together<p>It's time to unravel the mystery of the cosmos</p></span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h2>The Alienverse</h2>
    <h4>Welcome <?php echo $_SESSION['onee']?><img width="30px" height="30px" src="images/rocket4.png"></h4>
  </nav>
</div>
</div>
<div class="jumbotron">
  <h2 class="display-4">Are they already here?</h2>
  <p class="lead">The question is remarkable and so is it's answer,maybe they came and never left.The evidence is difficult to neglect,go look for yourself </p>

  <hr class="my-4">
  <p>You think you know everything about them,think again!</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
<div class="container">
  <div id="text1">
  <h1>About</h1>
  <p>There are many evidences supporting the theory of aliens on earth.But the most significant one is the evidence left by our ancestors,the ancient drawings and scriptures.Did the aliens came and helped them build those monuments? Are the gods we all pray and worship actually aliens from other planets? Nothing can be said for sure but one thing is certain they are out there and they are waiting.....</p>
</div>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <h1>The Evidence</h1>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/a14.jpg?auto=yes&bg=777&fg=555&text=First slide" height="80%" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>"Astronaut in Ancient Times"</h3>

  </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/a10.jpg?auto=yes&bg=666&fg=444&text=Second slide" height="80%" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>"Bear on Mars"</h3>

  </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/a11.jpg?auto=yes&bg=555&fg=333&text=Third slide" height="80%" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>"Female statue or Actual female"</h3>

  </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/a13.jpg?auto=yes&bg=555&fg=333&text=Third slide" height="80%" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>"Alien Base on Moon"</h3>

  </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/a12.jpg?auto=yes&bg=555&fg=333&text=Fourth slide" height="80%" alt="Fourth slide">
        <div class="carousel-caption d-none d-md-block">
    <h3>"Is it Possible?"</h3>
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <div id="text2" class="container">
    <div id="stext">
    <h1>The Interpretation</h1>
    <p>Although th evidence is quite strange and negotiable but still the number of such instances just keep on rising day by day.All of this leads to the one inescapable question<strong> "Are they Here?"</strong></p>
  </div>
    <div id="ev1">
    <div id="text3">
    Could NASA be in contact with alien civilisations but are doing all they can to prevent this becoming public knowledge?
    </div>
    <div id="iframe1">
      <iframe width="400" height="315" src="https://www.youtube.com/embed/cmdS6ULeZG4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
<div class="clear">
</div>
  <p></p>
  <p></p>

  <div class="ev1">
    <div id="iframe2">
      <iframe width="400" height="315" src="https://www.youtube.com/embed/ziu4nM7C_zg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div id="text4">
      NASA detected, intercepted, and decoded a mathematically-based distress signal from a purportedly doomed planetoid outside our own galaxy.

  </div>
  </div>
  </div>
  <div class="clear">
  </div>

<div class="accordion" id="accordionExample" class="container">
  <h1>Still Don't believe read the articles in newpapers</h1>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Aurora Texas Incident
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        The Aurora, Texas, UFO incident reportedly occurred on April 17, 1897 when, according to locals, a UFO crashed on a farm near Aurora, Texas.The incident (similar to the more famous Roswell UFO incident 50 years later) is claimed to have resulted in a fatality from the crash and the alleged alien body is to have been buried in an unmarked grave at the local cemetery.During the 1896–1897 timeframe, numerous sightings of a cigar-shaped mystery airship were reported across the United States.

One of these accounts appeared in the April 17, 1897, edition of the Dallas Morning News. Written by Aurora resident S.E. Haydon,the alleged UFO is said to have hit a windmill on the property of a Judge J.S. Proctor two days earlier at around 6am local (Central) time,resulting in its crash.
      <a class="btn btn-primary" href="https://en.wikipedia.org/wiki/Aurora,_Texas,_UFO_incident" role="button">Read More</a>
      </div>

    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          U.F.O.s: Is This All There Is?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        “How dare we think that the physics we have today is all that there is,” he said in an interview published recently in HuffPost.

I could hardly agree more, having spent my professional life in the company of physicists and astronomers trying to poke out of the cocoon of present knowledge into the unknown, to overturn Einstein and what passes for contemporary science. Lately, they haven’t gotten anywhere.

The last time physicists had to deal with faster-than-light travel was six years ago, when a group of Italy-based physicists announced that they had seen the subatomic particles known as <strong>neutrinos going faster than light</strong>. It turned out they had wired up their equipment wrong.
        <a class="btn btn-primary" href="https://www.nytimes.com/2017/12/29/science/ufos-aliens-space-travel.html" role="button">Read More</a>
      </div>
    </div>
  </div>
  <div class="card" >
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          The Search and the Effort
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          Everyone wonders at some point in their life whether alien life exists or not.Some even try to search for it,many individuals with their varied efforts are trying to search for them their methods may be different but their goal is same.Maybe the Aliens are also trying to find Us....
          <a class="btn btn-primary" href="https://www.nytimes.com/2017/12/29/science/ufos-aliens-space-travel.html" role="button">Read More</a>
      </div>
    </div>
  </div>
</div>
  <div class="container" id="footer">
  <h1>Download the app!</h1>
  <p>There's plenty of Alien stuff out there</p>
  <a href="https://play.google.com/store/search?q=Aliens&hl=en"><img src="images/app.png" height="100px" width="300px"></a>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
