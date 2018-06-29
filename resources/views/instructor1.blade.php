<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.0.12/css/all.css')}}" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <title>Teach Online</title>
</head>
<body >


	<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark sticky-top  navbar-light  ">
     <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/logo.png" alt="Logo du site" class="animated infinite bounce"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="mainnav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#">about</a>
         </li>
         <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Courses by subjects</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Computer science</a>
          <a class="dropdown-item" href="#">Arts & Culture</a>
          <a class="dropdown-item" href="#">Biologie </a>
          <a class="dropdown-item" href="#">Sociologie </a>
          <a class="dropdown-item" href="#">Linguistique</a>
          <a class="dropdown-item" href="#">Busniss</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Blog</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
      
    </form>
  </div>
</nav>



<!--<div class="side-crop row">
  <img src="images/teach.jpg" class="img-fluid" alt="Responsive image">
  <div class="col-2">
      <button class=" btn btn-outline-secondary btn-lg">Register</button>
      </div>
</div>-->



      <div class="cont row ">
      <img src="images/techer1.jpg" class="img-fluid" alt="Responsive image" style=" max-height: initial;">
    <h1 id="h" style="margin:150px;">
      Teach The World </br>
      <p style="margin:5px;">Share your knowledge and reach millions of students across the globe </p>
     <div class="row" style="margin-top:20px;">
     
    
      <div class="col-2">
      <a class=" btn btn-outline-secondary btn-lg bn" href="{{ URL::to('/instructor2 ') }}">Become An Instructor</a>
      </div>
      </div>
    </h1>
  </div>

    
    <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
      <h2>Discover Your Potential</h2>
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
        <h4>Earn extra income </h4>
        <p> <em>Once your course is live on our marketplace, students will be able to discover and purchase it. You'll earn money every time a student purchases your course.</em> </p>
   </div>

       <div class="col-sm col-lg-4 ">
        <h4>Inspire students </h4>
        <p> <em>Help students advance their careers, learn new skills, and explore different hobbies by teaching what you're passionate about. </em></p>
      </div>
       <div class="col-sm col-lg-4 ">
        <h4>Get support</h4>
        <p> <em>Take advantage of our teaching resources, our support team, or join our active community of instructors to help you through your course creation process. </em></p>
      </div>
    </div> 
  </div>
    </div>

   <hr>

   <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
      <h2>How it work</h2>
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
        <i class="fas fa-mouse-pointer"></i>
        <p> Choose your topic</p>
   </div>

       <div class="col-sm col-lg-4 ">
        <i class="fas fa-play-circle"></i>
        <p> Create a course</p>
      </div>
       <div class="col-sm col-lg-4 ">
       <i class="fas fa-plug"></i>
        <p> Connect with students</p>
      </div>
    </div> 
  </div>
    </div>

  <hr>

   <section>
<div class="content">
  <div class="container">
  <div class="row justify-content-center">
      <h2>Expand your reach</h2>
    </div> 
     <br>
    <div class="row justify-content-center">
      <p>We've changed lives by connecting instructors with students around the world.</p>
    </div> 
   

   <div class="row"> 
    <div class="col-sm col-lg-4">
       <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="images/p1.jpeg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Virtual Class has given me the opportunity to reach a global audience for my classes that wouldn’t have been possible otherwise. go no wehere and comme enjoy.</p>
  </div>
</div>
    </div>
    <div class="col-sm col-lg-4">
       <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="images/p1.jpeg" alt="Card image cap">
  <div class="card-body">
    
    <p class="card-text">Launching my first course on Virtual Class allowed me to quit my full-time job and start my own company. I went from working 60+ hour weeks to setting my own.</p>
    
  </div>
</div>
    </div>
    <div class="col-sm col-lg-4">
       <div class="card" style="width: 18rem;">
       <img class="card-img-top" src="images/p1.jpeg" alt="Card image cap">
  <div class="card-body">
   
    <p class="card-text">There's no greater success on the Virtual Class marketplace than hearing that you've helped a student achieve their goals. go no where  go fgjry fdrtuye .</p>
    
  </div>
</div>
    </div>
   
   </div>
  </div>
  </div>

</section>

<hr>

<div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
      <h1>Become an instructor today</h1>
    </div> 
    <div class="row justify-content-center">
      <h2>join the world's largest online learning marketplace.</h2>
   </div>
   <div class="row justify-content-center">
      <button class=" btn btn-outline-secondary btn-lg bn">Become An Instructor</button>
   </div>

    </div> 
  </div>






<!--footer-->

  <section id="footer" style="margin-top: 100px;">
    <div class="container text-center">
      <div class="row text-xs-center text-sm-left text-md-left justify-content-center">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h5>About Virtual Class</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();">Our Story</a></li>
            <li><a href="javascript:void();">Our Team</a></li>
            <li><a href="javascript:void();">Our learners</a></li>
            <li><a href="javascript:void();">OUR Instructors </a></li>
            <li><a href="javascript:void();">Our Blog</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();">Home</a></li>
            <li><a href="javascript:void();">About</a></li>
            <li><a href="javascript:void();">FAQ</a></li>
            <li><a href="javascript:void();">Get Started</a></li>
            <li><a href="javascript:void();">Videos</a></li>
          </ul>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
          <h5>Become An Instructor</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In illum voluptates incidunt voluptatem architecto soluta dolore ducimus. </p>
          <button class=" btn btn-outline-secondary btn-lg">Welcome!</button>
        </div>
         
      </div class="row">
      <div class="btn-group dropup">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English
          </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="#" style="color: #000;">Français</a>
    <a class="dropdown-item" href="#" style="color: #000;">Arabe</a>
    <a class="dropdown-item" href="#" style="color: #000;">Tarifit</a>
  </div>
</div>


      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></i></a></li>
            <li class="list-inline-item"><a href=""><i class="fab fa-google-plus-g"></i></i></a></li>
            <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          
          <p class="h6">&copy All right Reversed VrtualClass 2018</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
         	



       <script
			  src="js/jquery.min.js"></script>

			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
			  <script src="js/bootstrap.min.js"></script>
        <script  src="js/main,js">

        </script>

</body>
</html>
