
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    @foreach ($title as $title )
        
    
    <title>{{$title->cafe_name}} - Resturent</title>

    @endforeach
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">



    </head>
    
    <body>
    

    
<!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                       @include('logo')
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        @include('menu')                             
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            @foreach ($baner as $baner )
                            <h4>{{$baner->cafe_name}}</h4>
                            <h6>{{$baner->short_desc}}</h6>
                            @endforeach 
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          @foreach ( $banerimage as  $banerimage)    
                          <div class="item">
                            <div class="img-fill">
                                <img src="banerimage/{{$banerimage->image}}" alt="">
                            </div>
                          </div>
                          @endforeach
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>                                          
                        @foreach ($about as $about )        
                            <h2>{{$about->about_title}}</h2>
                            <p>{{$about->about_desc}}</p>                          
                        </div>                          
                        <div style=" float: left; width: 50%; ">                                                  
                                <div class="col-md-12">                       
                                   <img src="aboutimage/{{$about->image}}" alt="">
                                </div>  
                         @endforeach                         
                        </div>                
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>                 
                            <img src="banerimage/{{$banerimage->image}}" alt="">                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    @include('food_menu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('chef')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Area Starts ***** -->
    @include('reservation')
    <!-- ***** Reservation Area Ends ***** -->

    
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>{{$baner->cafe_name}} Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row text-center" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>                                  
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach ($breakfastleft as  $breakfastleft)  
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">                                                                                                                                                
                                                            <img src="mealimage/{{$breakfastleft->image}}" alt="">
                                                            <h4>{{$breakfastleft->name}}</h4>
                                                            <p>{{$breakfastleft->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$breakfastleft->price}}</h6>
                                                            </div>                                                         
                                                        </div>
                                                    </div> 
                                                    @endforeach  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list"> 
                                                    @foreach ($breakfastright as  $breakfastright)                                               
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="mealimage/{{$breakfastright->image}}" alt="">
                                                            <h4>{{$breakfastright->name}}</h4>
                                                            <p>{{$breakfastright->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$breakfastright->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach ($lunchleft as  $lunchleft)                                               
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="mealimage/{{$lunchleft->image}}" alt="">
                                                            <h4>{{$lunchleft->name}}</h4>
                                                            <p>{{$lunchleft->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$lunchleft->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach                                                     
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach ($lunchright as  $lunchright)                                               
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="mealimage/{{$lunchright->image}}" alt="">
                                                            <h4>{{$lunchright->name}}</h4>
                                                            <p>{{$lunchright->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$lunchright->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">                                                   
                                                    @foreach ($dinnerleft as  $dinnerleft)                                               
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="mealimage/{{$dinnerleft->image}}" alt="">
                                                            <h4>{{$dinnerleft->name}}</h4>
                                                            <p>{{$dinnerleft->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$dinnerleft->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                      @foreach ($dinnerright as  $dinnerright)                                               
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="mealimage/{{$dinnerright->image}}" alt="">
                                                            <h4>{{$dinnerright->name}}</h4>
                                                            <p>{{$dinnerright->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$dinnerright->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                @foreach ($footer as  $footer)
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="{{$footer->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$footer->youtube}}"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="{{$footer->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{$footer->instagram}}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div style="padding-left:100px;">
                         
                        <a href=""><img src="footerimage/{{$footer->image}}" alt=""></a>
                      
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright By : {{$footer->copyright}}
                        
                        <br>Design By: {{$footer->design}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>