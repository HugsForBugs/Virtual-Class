@extends('layouts.app')

@section('content')

<div></div>




 <div class="features text-center">
   <div class="container">
    <div class="row justify-content-center">
      <h1>Popular online course categories </h1>
    </div>
    <div class="row">
        <div class="col-sm col-lg-3">
          <h4>Computer science</h4>


          <a href="{{ URL::to('/les_cours') }}" ><img src="images/e.jpg" class="img img-fluid "></a>
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


     

@endsection
