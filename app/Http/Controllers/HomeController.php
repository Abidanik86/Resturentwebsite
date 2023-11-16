<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Baner;
use App\Models\Banerimage;
use App\Models\Cart;
use App\Models\Footer;
use App\Models\Mealoffer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Chef;
use App\Models\Contact;
use App\Models\Food;
use App\Models\Order;
use App\Models\Logo;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        $data2 = chef::all();
        $data3 = Contact::all();
        $user_id = Auth::id();
        $count = cart::where('user_id',$user_id)->count();
        $logo = Logo::all();
        $baner = Baner::all();
        $banerimage = Banerimage::all();
        $title = Baner::all();
        $about = About::all();
        $breakfastleft = Mealoffer::where('category','1')->take(3)->get();
        $breakfastright = Mealoffer::where('category','1')->skip(3)->take(3)->get();
        $lunchleft = Mealoffer::where('category','2')->take(3)->get();
        $lunchright = Mealoffer::where('category','2')->skip(3)->take(3)->get();
        $dinnerleft = Mealoffer::where('category','3')->take(3)->get();
        $dinnerright = Mealoffer::where('category','3')->skip(3)->take(3)->get();
        $footer = Footer::all();
        return view("home",
               compact("data","data2","data3",
                       'count','logo',
                       'baner','banerimage',
                       'about','title',
                       'breakfastleft','breakfastright',
                       'lunchleft','lunchright',
                       'dinnerleft','dinnerright',
                       'footer',
        ));
        
    } 
    public function redirects()
    {
        $data=user::all();
        $data = food::all();
        $data2 = chef::all();
        $data3 = Contact::all();
        $usertype = Auth::user()->usertype;
        $logo = Logo::all();
        if($usertype=='0')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home',compact('data','data2',"data3",'logo'));
        }
    }
    public function add_cart(Request $request,$id){
        if(Auth::id()){
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $food = Food::find($food_id);
            $price = $food->price;
            $total = $quantity * $price;
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->total = $total;
            $cart->save();


            return redirect()->back()->with('success_message', 'Item has been removed!');
        }else{
            return redirect('/login');
        }
    }
    public function view_cart(Request $request,$id){

        
        $count = cart::where('user_id',$id)->count();

        if ($count > 0) {
            $info  = cart::where('user_id', $id)->join('users', 'carts.user_id', '=', 'users.id')->get();
            $data  = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
            $total = cart::sum('total');
            $logo = logo::all();
            return view('showcart', compact('count', 'data', 'info', 'total','logo'));
        } else {
            // Redirect or show a message if the cart is empty
            return redirect()->route('home')->with('success'); // Adjust the route name as needed
        }
    }
    public function remove_cart(String $id){
       $remove = cart::select('*')->where('cid', $id)->delete();
        if ($remove) {
            return redirect()->back()->with('success_message', 'Item has been removed!');
        } else {
            return redirect()->back()->with('error_message', 'Item not found in cart!');
        }
    }

    public function placeorder(Request $request){
       
        foreach($request->food_name as $key => $food_name) {
            $data = new Order;
            $data->food_name     = $food_name;
            $data->food_price    = $request->food_price[$key];
            $data->food_quantity = $request->food_quantity[$key];
            $data->user_name     = $request->user_name;
            $data->user_phone    = $request->user_phone;
            $data->user_email    = $request->user_email;
            $data->user_address  = $request->user_address;
            $data->payment_method= $request->payment_method;
            $data->total_amount  = $request->total_amount[$key];
            $data->save();
           
        }
        
        return redirect()->back()->with('success_message', 'Item has been removed!'); 
    }

  
   
}
