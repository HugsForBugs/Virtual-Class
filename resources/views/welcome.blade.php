<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <title>Virtual class</title>
</head>
<body >


	<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark sticky-top  navbar-light  ">
     <a class="navbar-brand" href="{{URL::to('/')}}"><img src="images/logo.png" alt="Logo du site" class="animated infinite bounce"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id="mainnav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('/ ') }}">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#">about</a>
         </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Courses by subjects</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url::to('/les_cours') }}">Computer science</a>
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


<div class="slider">   
 <div class=" carousel slide" id="carouselExampleControls"  data-ride="carousel">
  

       <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner"> 

              
     <header>     
             <div class="overlay"></div>
   <div class="container">
      <div class="description row ">
    <h1>
      Learn new skills, pursue your interests, advance your career 
     <div class="row" style="margin-top: 30px;">
     <div class="col-2">
     <div class ="login align-bottom mt-auto">
          <div class="box">
        <a class="buttonjc" href="#popup1">
      <a class=" btn btn-outline-secondary btn-lg login1" href="{{ URL::to('/home ') }}">Log in</a></a> </div>
        <div id="popup1" class="overlayy">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                    <form class="join">
                            <div class="hh">
                                    <h1 id="joinus">Join class </h1>
                            </div>
                            <input class="formul" placeholder="E-mail" type="text" required="">
                            <input class="formul" placeholder="Password" type="password" required="">
                            <button class="" id="submit">connect</button>  
                            <br/> <br/>
                                  <a class="forgot" href="#">Forgot Password?</a>               
                    </form>
    
            </div>
        </div>
      </div>
      </div>
      <div class="col-2">
      <a class=" btn btn-outline-secondary btn-lg register" href="{{ URL::to('/home ') }}">Register</a>
      </div>
      </div>
    </h1>
  </div>
</div>
        </header>              
               


        <div class="carousel-item carousel-one active">
          
        </div>
        <div class="carousel-item carousel-two">
            
        </div>
         <div class="carousel-item carousel-three ">
          
        </div>
        
      </div>
    </div>
  
</div>
</div>

 <div class="features text-center">
   <div class="container">
    <div class="row justify-content-center">
      <h1>Popular online course categories </h1>
    </div>
    <div class="row">
        <div class="col-sm col-lg-3">
          <h4>Computer science</h4>


          <a href="{{ url::to('/les_cours') }}" ><img src="images/e.jpg" class="img img-fluid "></a>
        </div>
         <div class="col-sm col-lg-3">
          <h4>Businis & Management</h4>
          <a href="#"><img src="images/f.jpg" class="img img-fluid"></a>
        </div>
         <div class="col-sm col-lg-3">
          <h4>Health & Psychologie</h4>
          <a href="#"><img src="images/c.jpg" class="img img-fluid"></a>
        </div>
         <div class="col-sm col-lg-3">
          <h4>Art & Culture</h4>
          <a href="#"><img src="images/j.jpg" class="img img-fluid"></a>
        </div>
     </div>
   </div>
   <div class="row justify-content-center" style="margin-top: 28px;"><button type="button" class="btn btn-outline-secondary btn-lg">View more categorie</button></div>
 </div>
		<hr>
 
<div class="why">
		<div class="container text-center">
    <div class="row justify-content-center">
      <h2>Why VirtualClass?</h2>
    </div> 
    <div class="row justify-content-center">
      <div class="col-sm col-lg-4 ">
        <i class="fas fa-lightbulb"></i>
        <h4>Learn anything </h4>
        <p> <em>Whether you want to develop as a professional or discover a new hobby, there's an online course for that.

You can even take your learning further with online programs and degrees.</em> </p>
   </div>

       <div class="col-sm col-lg-4 ">
        <i class="fas fa-american-sign-language-interpreting"></i>
        <h4>Learn together </h4>
        <p> <em>Join 7,759,858 people from around the world learning together.

Learning is as easy and natural as chatting with a group of friends. </em></p>
      </div>
       <div class="col-sm col-lg-4 ">
        <i class="fas fa-briefcase"></i>
        <h4>Learn with experts </h4>
        <p> <em>Meet educators from top universities and cultural institutions,

who'll share their experience through videos, articles, quizzes and discussions. </em></p>
      </div>
    </div> 
  </div>
  <div class="row justify-content-center"><button class=" btn btn-outline-secondary btn-lg">Join now</button></div>
    </div>
</div>
<hr>
<div class="founder" >
      <div class="container text-center">
        <div class="row justify-content-center " >
          <h1 >Co-Founder</h1>
        </div>
        <div class="row">
            <div class="col-sm col-lg-4">
                <img src="images/z.png" alt="elhit fatima">
            </div>

            <div class="col-sm col-lg-4">
                <img src="images/s.png " alt="touzani soukaina">
            </div>

            <div class="col-sm col-lg-4">
                <img src="images/b.png" alt="boukhar soukaina">
            </div>
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
          <a href="{{url('/instructor1')}}"<button class=" btn btn-outline-secondary btn-lg">Welcome!</button></a>
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
          
          <p class="h6">&copy All right Reversed VirtualClass 2018</a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
         	



       <script
			  src="{{asset('js/jquery.min.js')}}"></script>

			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
			  <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script  src="{{asset('js/main,js')}}">

        </script>

</body>
</html>
