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

  <title>instuctor form</title>
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
<form action="">
   <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
      <h2>Please Fill This Form Bellow</h2>
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
   </div>

       <div class="col-sm col-lg-4 ">
        <h4>what is your motivation to teach </h4>
        <input class="form-control" type="text" placeholder="my motivation is">
      </div>
       <div class="col-sm col-lg-4 ">
      </div>
    </div> 
  </div>
    </div>
    <hr>

   <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
   </div>

       <div class="col-sm col-lg-4 ">
        <h4>choose the catégorie of your course </h4>
        <select id="inputState" class="form-control">
        <option selected>Computer Sience</option>
        <option>medecine</option>
        <option>art and culture</option>
        <option>health and psychologie</option>
        <option>business and management</option>
      </select>
      </div>
       <div class="col-sm col-lg-4 ">
      </div>
    </div> 
  </div>
    </div>
    <hr>

   <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
   </div>

       <div class="col-sm col-lg-4 ">
        <h4>upload your resume </h4>
          <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
      </div>
       <div class="col-sm col-lg-4 ">
      </div>
    </div> 
  </div>
    </div>
    <hr>

    <div class="why">
    <div class="container text-center">
    <div class="row justify-content-center">
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
   </div>

       <div class="col-sm col-lg-4 ">
        <a href="{{ URL::to('/instructor3 ') }}" class="btn btn-primary">Submitt</a>
      </div>
       <div class="col-sm col-lg-4 ">
      </div>
    </div> 
  </div>
    </div>
</form>
s

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
