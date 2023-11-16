   <!-- ***** Menu Area Starts ***** -->
   <style>
    .add-to-cart-btn {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 10px;
    cursor: pointer;
   
    }.quantity-section {
    margin-top: 10px;
    padding: 7px;
 
    }
    .quantity-section input {
    width: 70px;
    }
    .quantity-section label {
    font-weight: bold;
    }

</style>
   <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($data as $data)
                    <form action="{{route('add.cart' , $data->id)}}" method="post">
                        @csrf
                    <div class="item">         
                        <div style="height: 450px; width:100%; background-image: url('/foodimage/{{$data->image}}')" class='card'>
                            <div class="price"><h6>${{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>                      
                            </div>       
                        </div>
                        {{-- <input type="number" name="quality" min="0" style="width: 80px;">
                        <input type="submit" value="add cart"> --}}
                        <div class="quantity-section">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" min="1" value="1">
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>