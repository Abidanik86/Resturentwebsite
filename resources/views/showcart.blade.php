<style>
    body {
    font-family: Arial, sans-serif;
    padding: 60px;
    }

    h1 {
    text-align: center;
    font-size: 50px;

    }

    .cart-container {
    margin: 20px auto;
    max-width: 100%;
    padding: 80px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    }

    table, th, td {
    border: 1px solid #ddd;
    }

    th, td {
    padding: 10px;
    text-align: center;
    }

    th {
    background-color: #f2f2f2;
    }

    .cart-summary {
    text-align: right;
    }

    .cart-summary p {
    font-weight: bold;
    }

    .cart-summary a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-top: 10px;
    }

    .cart-summary a:hover {
    background-color: #0056b3;
    }



    body 
    {
        font-family: Arial, sans-serif;
        margin: 0;
        justify-content: center;
        align-items: center;
        height: 110vh;
    }
    .header
    {
        font-size: 50px;
        font-weight: bold;
        text-align: center;
    }
    label
    {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input 
    {
        width: 100%;
        padding: 8px;
        border: 1px solid #c20000;
        border-radius: 5px;
        color: rgb(0, 0, 0); 
    } 
    input[type="text"],input[type="email"],input[type="password"] 
    {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ffffff;
        border-radius: 4px;   
    }
    input[type="submit"] 
    {
        background-color: #4caf50;
        color: #fff;
        padding-bottom: 50px;
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer; 
    }
    .form-group button:hover 
    { 
        background-color: rgb(197, 77, 77);
    }
    .form-container 
    {
        max-width: 400px;
        margin: 0 auto;
        background-color: rgba(185, 163, 202, 0.655);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-group button 
    {
        background-color: #4caf50;
        color: #fff;
        position: relative; 
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group 
    {
        margin-bottom: 20px;
    }
    input[type="text"],input[type="num"]
    {
        color: rgb(0, 0, 0); /* Change 'blue' to the desired color */
    }
    
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     
    <title>Bee Cafe - Restaurant</title>
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
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-11">
                 
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            @foreach ($logo as $logo)
                            <img style="height: 80px; width:150px;" src="logoimage/{{$logo->image}}" align="klassy cafe html template">
                            @endforeach
                            
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section "><a href="{{route('home')}}">Home</a></li>
                                                     
                            @auth
                                 <li class="scroll-to-section ">
                                    <a class="{{ request()->routeIs('view.cart') ? ' active' : '' }}" href="{{route('view.cart',Auth::user()->id)}}">Cart's:[{{$count}}] </a></li> 
                            @endauth                        
                            <li>
                                @if (Route::has('login'))    
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <x-app-layout></x-app-layout>                                        
                                        @else
                                           <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                            </li>
                                         @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>                               
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <x-app-layout>
    </x-app-layout>
    <div class="cart-container">
        <h1 >Order Food Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody  class="form-container" >
                <form action="{{route('order.food')}}" method="post" class="">
                    @csrf
                    @method('post')
                <!-- Loop through your cart items here -->
               @foreach ($data  as  $data) 
              
                    <tr> 
                        <td>  
                            <input type="text" name="food_name[]" value="{{$data->title}}" hidden="" > 
                            {{$data->title}}
                        </td>
                        
                        <td>
                            <input type="integer" name="food_price[]" value="{{$data->price}}" hidden="">
                            {{$data->price}}
                        </td>
                        <td>
                            <input type="integer" name="food_quantity[]" value="{{$data->quantity}}" hidden="" >{{$data->quantity}}
                        </td>
                        <td>
                            <input type="integer" name="total_amount[]" value="{{$data->total}}" hidden ="">${{$data->total}}
                        </td>    
                     <td>
                         <a type="button" href="{{route('remove.cart' , $data->cid )}}" class="btn btn-warning">Remove</a>
                    </td>                       
                    </tr>
                    @endforeach                     
               </tbody>
        </table>
        <div class="cart-summary">
            <p>Total: {{$total}}$</p>
            <a id="checkout">Proceed to Checkout</a>
        </div>

        <div id="appear" style="display: none;">
            <div class="form-container">          
                @foreach ($info as  $info)
                @endforeach
                <div class="form-group" >
                    <label >NAME:</label>
                        <input type="text"   name="user_name"  value="{{$info->name}}">
                </div>
                <div class="form-group">
                    <label >PHONE:</label>
                        <input type="text"   name="user_phone"  value="">
                </div>
                <div class="form-group">
                    <label >EMAIL:</label>
                        <input type="text"   name="user_email"  value="{{$info->email}}">
                </div>
                <div class="form-group">
                    <label >ADDRESS:</label>
                        <input type="text"   name="user_address"  value="">
                </div>  
                    <td>
                        <input type="text" name="payment_method" value="cash_on_delivery" hidden ="">
                    </td>        
                <div style="margin-top: 30px; font-size: 19px; font-weight: bold; color: green;">
                    <tr>Total Ammount :</tr>
                    <td >{{$total}}$</td>
                </div>
                <div class="form-group">
                    <label for="payment_method">Select Payment Method:</label>
                    <select class="" id="payment_method">
                        <option value="cash_on_delivery">Cash on Delivery</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <button type="submit">ORDER NOW</button>
                    <a style="padding: 10px; font-size:25px; color: rgb(255, 0, 0)" href="{{route('view.cart',Auth::user()->id)}}" >Cancel</a>    
                </div>   
            </div>
        </form>
        </div>
    </div>
        
      <!-- jQuery -->
      <script src="assets/js/jquery-2.1.0.min.js"></script>
      <script>
        $("#checkout").click(
        function(){
            $("#appear").show();
        }
        );
      </script>

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
