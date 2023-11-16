<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UserTypeMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::middleware(['usertype:0'])->group(function () {
    // This route can only be accessed by users with usertype 'admin'

    Route::get('/Add_Contact', function () {
        return view('admin.contact');
    })->name('contact');

    Route::get('/Add_New_Chef', function () {
        return view('admin.add_chef');
    })->name('add_chef');

    Route::get("/add_user",function(){return view('admin.adduser');})->name('add.user');

    Route::get("/users", [AdminController::class,"user"])->name("adpanle");

    Route::get("/delete_users/{id}", [AdminController::class,"delete"])->name("delete.user");

    Route::post("/add_user", [AdminController::class, "adduser"])->name("add_user");

    Route::get("/foodmenu", [AdminController::class,"foodmenu"])->name("add_food");

    Route::get("/delete_food/{id}", [AdminController::class,"deletefood"])->name("delete.food");

    Route::get("/updatepage/{id}", [AdminController::class,"updatepage"])->name('update.page');

    Route::post("/update_user/{id}", [AdminController::class,"updateuser"])->name('update.user');

    Route::get("/add_food", [AdminController::class,"food"])->name('add_food');

    Route::get("/all_food", [AdminController::class,"allfood"])->name('all_food');

    Route::post("/upload_food", [AdminController::class,"uploadfood"])->name('upload.food');

    Route::post("/updatefood/{id}", [AdminController::class,"updatefood"])->name('update.food');

    Route::get("/edit_food/{id}", [AdminController::class,"editfood"])->name('edit_food');  

    Route::get("/admin_panel", [HomeController::class,"redirects"]);

    Route::get("/All_Reservations", [AdminController::class,"all_reservation"])->name('all.reservation');
    
    Route::get("/reservation/{id}", [AdminController::class,"deletereservation"])->name("delete.reservation");

    Route::get("/View_All_Chef's", [AdminController::class,"all_chef"])->name("all.chef");
 
    Route::post("/upload_chef", [AdminController::class,"upload_chef"])->name('upload.chef');

    Route::get("/edit_chef/{id}", [AdminController::class,"edit_chef"])->name('edit.chef');

    Route::post("/updatechef/{id}", [AdminController::class,"update_chef"])->name('update.chef');

    Route::get("/DeleteChef/{id}", [AdminController::class,"delete_chef"])->name('delete.chef');

  
    Route::post("/Add_New_Contact", [AdminController::class,"add_contact"])->name("add.contact");

    Route::get("/View_Contact's", [AdminController::class,"contact_info"])->name("contact.info");

    Route::get("/View_Orders", [AdminController::class,"view_order"])->name("view.order");

    Route::get('/Logo', [AdminController::class,'view_logo'])->name('logo');

    Route::post('/Upload_Logo', [AdminController::class,'upload_logo'])->name('add.logo');

    Route::get('/Edit_Logo/{id}', [AdminController::class,'edit_logo'])->name('edit.logo');

    Route::post('/Update_Logo/{id}', [AdminController::class,'update_logo'])->name('update.logo');

    Route::get('/Baner', [AdminController::class,'baner'])->name('baner');

    Route::post('/Add_Baner', [AdminController::class,'add_baner'])->name('add.baner'); 

    Route::get('/Edit_Cafe_Description/{id}', [AdminController::class,'edit_baner'])->name('edit.baner');

    Route::post('/Update_Cafe_Description/{id}', [AdminController::class,'update_baner'])->name('update.baner');

    Route::get('/Baner_Images', [AdminController::class,'baner_image'])->name('baner.image');

    Route::post('/Upload_Baner_Images', [AdminController::class,'baner_imageupload'])->name('upload.baner.image');

    Route::get('/Delete_Banerimage/{id}', [AdminController::class,'delete_banerimage'])->name('delete.banerimage');

    Route::get('/About_Us', [AdminController::class,'about'])->name('about');

    Route::post('/Add_About_US', [AdminController::class,'add_about_us'])->name('add.about_us');

    Route::get('/Meal_Offers', [AdminController::class,'meal'])->name('meal_offer');
    
    Route::post('/Add_Meal', [AdminController::class,'add_meal'])->name('add.meal');

    Route::get('/Delete_Meal/{id}', [AdminController::class,'delete_meal'])->name('delete.meal');

    Route::get('/Footer', [AdminController::class,'footer'])->name('footer');

    Route::post('/Add_Footer', [AdminController::class,'add_footer'])->name('add.footer');

});




Route::post("/Add_To_Cart/{id}", [HomeController::class,"add_cart"])->name("add.cart");

Route::get("/View_Cart/{id}", [HomeController::class,"view_cart"])->name("view.cart");

Route::get("/Remove_Cart/{id}", [HomeController::class,"remove_cart"])->name("remove.cart");



Route::post("/Order_food", [HomeController::class,"placeorder"])->name("order.food");


Route::post("/add_reservation", [AdminController::class,"add_reservation"])->name('add.reservation');

Route::get("/", [HomeController::class,"index"])->name('home');

Route::get('/dashboard', function () {

    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
