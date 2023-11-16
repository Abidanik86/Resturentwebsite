<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Baner;
use App\Models\Banerimage;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Mealcategory;
use App\Models\Mealoffer;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class AdminController extends Controller
{

   public function user()
   {
    $data=user::all();
    return view("admin.user",compact("data"));
   }

   //Create User From User Table.
   public function adduser(Request $request){
    $data = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'usertype' => $request->usertype,
        'password' => Hash::make($request->password),  
    ]);
    return redirect()->back();
   }

   //Delete User From User Table.
   public function delete(string $id) 
   {
    $data=user::find($id);
    $data->delete();
    return redirect()->back();
   }

   public function deletefood(string $id) 
   {
    $data=food::find($id);
    $data->delete();
    return redirect()->route('all_food')->with('success','Food item deleted successfully');
   }
       
   //Update Page .
   public function updatepage(string $id){
      //$users = DB::table('users')->where('id', $id)->get();
      $users = DB::table('users')->find($id);
      return view('admin.edituser' , ['data' => $users]); 
  }

  //Update User From User Table
  public function updateuser(request $request,$id){
  $data = DB::table("users")
               ->where("id", $id)
               ->update([
                   'name'=> $request->name,
                   'email'=> $request->email,
                   'password'=> bcrypt($request->password),
               ]);
               if($data){
                   return redirect()->route('adpanle');
               }else{
                   echo "<h1>Data Not Updated</h1>";
               }      
}

//Update The Food Menu
public function updatefood(request $request,$id){
    
    $data = Food::find($id);
        $image = $request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('foodimage', $imagename);
            $data->image = $imagename;
        }
        $data->title = $request->title;
        $data->price =  $request->price;
        $data->description = $request->description;
        $data->save();

       if($data){
            return redirect()->route('all_food')->with('success','Chef Data Updated');
          }else{
            echo "<h1>Data Not Updated</h1>";
        }     
  }


  //Upload The Food 
    public function uploadfood(Request $request){
    

      $data = new food;
      
      $image = $request->file('image');
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $request->image->move('foodimage', $imagename);
      $data->image = $imagename;
      $data->title = $request->title;
      $data->price = $request->price;
      $data->description = $request->description;
      
      $data->save();
       
      return redirect()->back();
    }

    //Edit The Food
    public function editfood(string $id){
        $data=food::all()->find($id);
        return view("admin.editfood", compact('data'));
    }

    //Show ALL Food
    public function allfood(){
        $data=food::all();
        return view("admin.allfood", compact('data'));
    }

    //Go TO FOOD PAGE
    public function food(){
        return view("admin.foodmenu");
    }

    public function add_reservation(Request $request){
        $data = Reservation::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,           
        ]);
        return redirect()->back();
    }

    public function all_reservation(){
        $data=reservation::all();
        return view("admin.reservation", compact('data'));
    }
    public function deletereservation(string $id) 
    {
     $data= reservation::find($id);
     $data->delete();
     return redirect()->back();
    }

    public function all_chef(){
        $data=chef::all();
        return view("admin.all_chef", compact('data'));
        
    }

    public function upload_chef(Request $request){
        $data = new chef;
      
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality =  $request->speciality;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->insta = $request->insta;
        
        $data->save();
     
        return redirect()->back();
    }
    public function edit_chef(string $id){
        $data=Chef::all()->find($id);
        return view("admin.editchef", compact('data'));
    }
    
    public function update_chef(request $request , $id){
        $data = chef::find($id);
        $image = $request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }
        $data->name = $request->name;
        $data->speciality =  $request->speciality;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->insta = $request->insta;

        $data->save();

       if($data){
            return redirect()->route('all.chef')->with('success','Chef Data Updated');
          }else{
            echo "<h1>Data Not Updated</h1>";
        } 

    }




    public function add_contact(Request $request){
        $data = Contact::insert([
            'heading' => $request->heading,
            'details' => $request->details,
            'phone' => $request->phone,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'email2' => $request->email2,
                      
        ]);
        return redirect()->back();
    }

    public function contact_info(){
        $data=Contact::all();
        return view("admin.contact_info", compact('data'));
        
    }
    public function view_order(){
        $total = cart::sum('total');
        $data=Order::all();
        
        return view("admin.view_order", compact('data','total'));
        
    }
    

    public function upload_logo(Request $request){
        $data = new Logo;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('logoimage', $imagename);
        $data->image = $imagename;
        $data->logo_title = $request->logo_title;
        $data->save();
        return redirect()->back();
       
    }
    public function view_logo(){
        $data = logo::all();
        return view('admin.logo', compact('data'));
    }
    public function edit_logo(Request $request,$id){
        $data = Logo::find( $id );
        return view('admin.editlogo', compact('data'));
    }
    public function update_logo(Request $request,$id){
        $data = Logo::find($id);  
        $image = $request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }
        $data->logo_title = $request->logo_title;
        $data->save();
        return redirect()->back();
    }
    public function baner(Request $request){
        $data = baner::all();
        return view('admin.baner',compact('data'));
    }

    public function add_baner(Request $request){
        $data = new Baner;
        $data->cafe_name = $request->cafe_name;
        $data->short_desc = $request->short_desc;
        $data->save();
        return redirect()->back();
    }
    public function edit_baner(string $id){
        
        $data = DB::table('baners')->find($id);
        return view('admin.edit_baner' , ['data' => $data]); 
    }

    public function update_baner(Request $request, $id){
        $data = Baner::find($id);
        $data->cafe_name = $request->cafe_name;
        $data->short_desc = $request->short_desc;
        $data->save();
        return redirect()->route('baner');
    }
    
    public function baner_image(){
        $datas = Banerimage::all();
        return view('admin.baner_image',compact('datas'));
    }
         
    public function baner_imageupload(Request $request){
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
        foreach ($request->file('image') as $image) {
            $data = new Banerimage;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('banerimage', $imagename);   
            $data->image = $imagename;
            $data->save();
        }
        return redirect()->back();
      }
    }
    public function delete_banerimage($id){
        $data = Banerimage::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function about(Request $request){
        $about = About::all();
        return view('admin.about',compact('about'));
    }

    public function add_about_us(Request $request){
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        foreach ($request->file('image') as $image) {
            $data = new About;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('aboutimage', $imagename);   
            $data->image = $imagename;
            $data->about_title = $request->about_title;
            $data->about_desc = $request->about_desc;
            $data->save();
        }
        return redirect()->back();

    }

    public function meal(Request $request){
        $meal = Mealoffer::join('mealcategories' , 'mealoffers.category','=','mealcategories.id')->get();      
        $categories = Mealcategory::pluck('categoryname', 'id');
        return view('admin.meal',compact('meal','categories'));
    }

    public function add_meal(Request $request){

        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Mealoffer;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('mealimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->save();
        return redirect()->back();
    }
    
    public function delete_meal(Request $request,$id){
        $data = Mealoffer::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function footer(Request $request){
        $data = Footer::all();
        return view('admin.footer',compact('data'));
    }

    public function add_footer(Request $request){
        $data = new Footer;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('footerimage', $imagename);
        $data->image = $imagename;
        $data->facebook = $request->facebook;
        $data->youtube = $request->youtube;
        $data->linkedin = $request->linkedin;
        $data->instagram = $request->instagram;
        $data->copyright = $request->copyright;
        $data->design = $request->design;
        
        $data->save();
        return redirect()->back();
    }

}

