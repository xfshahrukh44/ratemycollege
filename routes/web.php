<?php


Route::get('/clear-config', function() 
{
    Artisan::call('config:clear');
    
return "config is cleared";
});


Route::get('/clear-cache', function() 
{
    Artisan::call('cache:clear');
    
return "Cache is cleared";
});


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});




Auth::routes();


Route::get('/adminlogin', [App\Http\Controllers\HomeController::class, 'adminlogin'])->name('adminlogin'); 

Route::post('/post_login', [App\Http\Controllers\HomeController::class, 'post_login'])->name('post_login'); 
Route::get('/logout_user', [App\Http\Controllers\HomeController::class, 'logout_user'])->name('logout_user'); 


Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','checkrole']);

Route::get('/find/{id?}', [App\Http\Controllers\HomeController::class, 'find'])->name('find');

Route::get('/coach_single', [App\Http\Controllers\HomeController::class, 'coach_single'])->name('coach_single');


Route::get('/search_coach_school', [App\Http\Controllers\HomeController::class, 'search_coach_school'])->name('search_coach_school'); 


Route::post('/add_submit_correction', [App\Http\Controllers\HomeController::class, 'add_submit_correction'])->name('add_submit_correction'); 


Route::get('/coachbyid/{id?}', [App\Http\Controllers\HomeController::class, 'coachbyid'])->name('coachbyid');
Route::get('/school_single', [App\Http\Controllers\HomeController::class, 'school_single'])->name('school_single');

Route::post('/Add_review', [App\Http\Controllers\HomeController::class, 'Add_review'])->name('Add_review'); 
Route::post('/Add_flag_review', [App\Http\Controllers\HomeController::class, 'Add_flag_review'])->name('Add_flag_review');

  
Route::get('/accept_coach/{id?}', [App\Http\Controllers\HomeController::class, 'accept_coach'])->name('accept_coach');
Route::get('/reject_coach/{id?}', [App\Http\Controllers\HomeController::class, 'reject_coach'])->name('reject_coach');

Route::get('/delete_review/{id?}', [App\Http\Controllers\HomeController::class, 'delete_review'])->name('delete_review');


Route::get('/change_coach_form/{id?}', [App\Http\Controllers\HomeController::class, 'change_coach_form'])->name('change_coach_form'); 
Route::post('/change_coach', [App\Http\Controllers\HomeController::class, 'change_coach'])->name('change_coach');


Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'admin_dashboard'])->name('admin_dashboard')->middleware('auth');
Route::get('/admin/review', [App\Http\Controllers\HomeController::class, 'admin_review'])->name('admin_review')->middleware('auth');
Route::get('/admin/coaches', [App\Http\Controllers\HomeController::class, 'admin_coaches'])->name('admin_coaches')->middleware('auth');


Route::get('/admin/coachesdetails', [App\Http\Controllers\HomeController::class, 'coaches_details'])->name('coaches_details')->middleware('auth');


Route::get('/admin/coach_change_step_1', [App\Http\Controllers\HomeController::class, 'coach_change_step_1'])->name('coach_change_step_1')->middleware('auth');
Route::get('/admin/coach_change_step_2', [App\Http\Controllers\HomeController::class, 'coach_change_step_2'])->name('coach_change_step_2')->middleware('auth');
Route::get('/admin/coach_change_step_3', [App\Http\Controllers\HomeController::class, 'coach_change_step_3'])->name('coach_change_step_3')->middleware('auth');


Route::get('/admin/school_change_step_1', [App\Http\Controllers\HomeController::class, 'school_change_step_1'])->name('school_change_step_1')->middleware('auth');
Route::get('/admin/school_change_step_2', [App\Http\Controllers\HomeController::class, 'school_change_step_2'])->name('school_change_step_2')->middleware('auth');
Route::get('/admin/school_change_step_3', [App\Http\Controllers\HomeController::class, 'school_change_step_3'])->name('school_change_step_3')->middleware('auth');



Route::post('/add_change_coaches', [App\Http\Controllers\HomeController::class, 'add_change_coaches'])->name('add_change_coaches')->middleware('auth');
Route::post('/add_change_school', [App\Http\Controllers\HomeController::class, 'add_change_school'])->name('add_change_school')->middleware('auth');


Route::get('/admin/view_coach', [App\Http\Controllers\HomeController::class, 'view_coach'])->name('view_coach')->middleware('auth');
Route::get('/admin/add_coach', [App\Http\Controllers\HomeController::class, 'add_coach'])->name('add_coach')->middleware('auth');
Route::post('/post_add_new_coach', [App\Http\Controllers\HomeController::class, 'post_add_new_coach'])->name('post_add_new_coach')->middleware('auth');
Route::get('/admin/view_coach_edit/{id?}', [App\Http\Controllers\HomeController::class, 'view_coach_edit'])->name('view_coach_edit')->middleware('auth');

Route::get('/admin/activity_log', [App\Http\Controllers\HomeController::class, 'activity_log'])->name('activity_log')->middleware('auth');
Route::get('/admin/see_a_mistake', [App\Http\Controllers\HomeController::class, 'see_a_mistake'])->name('see_a_mistake')->middleware('auth');


Route::get('/admin/view_school', [App\Http\Controllers\HomeController::class, 'view_school'])->name('view_school')->middleware('auth');
Route::get('/admin/add_school', [App\Http\Controllers\HomeController::class, 'add_school'])->name('add_school')->middleware('auth');
Route::post('/post_add_school', [App\Http\Controllers\HomeController::class, 'post_add_school'])->name('post_add_school')->middleware('auth');


Route::get('admin/generator', ['uses'  => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator'])->middleware(['auth','checkrole']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator'])->middleware(['auth','checkrole']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('admin/pages', 'App\Http\Controllers\Admin\PagesController')->middleware(['auth','checkrole']);
Route::resource('admin/section', 'App\Http\Controllers\Section\SectionController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/logo', 'App\Http\Controllers\Logo\LogoController')->middleware(['auth','checkrole']);
Route::resource('admin/banner', 'App\Http\Controllers\Banner\BannerController')->middleware(['auth','checkrole']);
Route::resource('admin/innerbanner', 'App\Http\Controllers\Innerbanner\InnerbannerController')->middleware(['auth','checkrole']);
Route::resource('admin/category', 'App\Http\Controllers\Category\CategoryController')->middleware(['auth','checkrole']);
Route::resource('admin/product', 'App\Http\Controllers\Product\ProductController')->middleware(['auth','checkrole']);
Route::resource('admin/uploadimage', 'App\Http\Controllers\Uploadimage\UploadimageController')->middleware(['auth','checkrole']);


Route::resource('admin/inquiry', 'App\Http\Controllers\Inquiry\InquiryController')->middleware(['auth','checkrole']);
Route::resource('admin/newsletter', 'App\Http\Controllers\Newsletter\NewsletterController')->middleware(['auth','checkrole']);
Route::resource('admin/faq', 'App\Http\Controllers\Faq\FaqController')->middleware(['auth','checkrole']);
Route::resource('admin/blog', 'App\Http\Controllers\Blog\BlogController')->middleware(['auth','checkrole']);
Route::resource('admin/subcategory', 'App\Http\Controllers\Subcategory\SubcategoryController')->middleware(['auth','checkrole']);
Route::resource('admin/testimonial', 'App\Http\Controllers\Testimonial\TestimonialController')->middleware(['auth','checkrole']);
Route::post('/place-order', 'App\Http\Controllers\OrderController@placeOrder')->name('order.place');

//Website Front End Section From Here 
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);
Route::get('/product_detail/{slug?}', [App\Http\Controllers\ProductController::class, 'product_detail']);


Route::get('cart', [App\Http\Controllers\ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [App\Http\Controllers\ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductController::class, 'remove'])->name('remove.from.cart');
Route::get('checkout', [App\Http\Controllers\ProductController::class, 'checkout'])->name('checkout');


Route::resource('admin/color', 'App\Http\Controllers\Color\ColorController')->middleware(['auth','checkrole']);
Route::resource('admin/size', 'App\Http\Controllers\Size\SizeController')->middleware(['auth','checkrole']);





Route::resource('admin/order', 'App\Http\Controllers\Order\OrderController')->middleware(['auth','checkrole']);
Route::resource('admin/orderproduct', 'App\Http\Controllers\Orderproduct\OrderproductController')->middleware(['auth','checkrole']);
Route::resource('admin/orderproduct', 'App\Http\Controllers\Orderproduct\OrderproductController')->middleware(['auth','checkrole']);
Route::resource('admin/orderproduct', 'App\Http\Controllers\Orderproduct\OrderproductController')->middleware(['auth','checkrole']);