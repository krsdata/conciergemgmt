<?php
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


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

Auth::routes();

Route::post('/login', 'Auth\LoginController@login')->name('admin.login.submit');
Route::get('/signup', 'Auth\RegisterController@signup')->name('admin.signup');
Route::post('/signup', 'Auth\RegisterController@signup');
Route::post('/signupSubmit', 'Auth\RegisterController@signupSubmit')->name('admin.signup.submit');
Route::post('/resetPassword', 'Auth\ResetPasswordController@resetUpdate')->name('reset.password.update');

Route::prefix('dashboard')->middleware('web')->group(function(){
    Route::get('/', 'Admin@dashboard')->name('home');
    Route::get('/boats', 'Admin@boats');
    Route::get('/boats-add', 'Admin@addBoats');
    Route::post('/boats-add', 'Admin@addBoats');
    Route::get('/boats/{id}', 'Admin@editBoat');
    Route::post('/boats/{id}', 'Admin@editBoat');
    Route::post('/boats-delete', 'Admin@deleteBoat');
    Route::get('/boat-categories', 'Admin@categories');
    Route::post('/boat-categories', 'Admin@categories');
    Route::post('/boats', 'Admin@boats');
    Route::get('/sliders', 'Admin@sliders');
    Route::get('/sliders/add', 'Admin@addSliders');
    Route::post('/sliders/add', 'Admin@addSliders');
    Route::get('/slider/{id}', 'Admin@singleSlider');
    Route::post('/slider/{id}', 'Admin@singleSlider');
    Route::post('/sliders/delete', 'Admin@deleteSlide');
    Route::post('/slider-delete', 'Admin@deleteSlider');
    Route::get('/pages/add', 'Admin@addPages');
    Route::post('/pages/add', 'Admin@addPages');
    Route::get('/pages/all', 'Admin@pages');
    Route::get('/pages/{id}', 'Admin@editPage');
    Route::post('/pages/{id}', 'Admin@editPage');
    Route::get('/pages/delete/{id}', 'Admin@deletePages');
    Route::get('/menus', 'Admin@allMenus');
    Route::post('/menus', 'Admin@allMenus');
    Route::post('/menus/delete', 'Admin@deleteMenu');
    Route::get('/menus/{id}', 'Admin@menus');
    Route::post('/menus/{id}', 'Admin@menus');
    Route::get('/settings', 'Admin@settings');
    Route::post('/settings', 'Admin@settings');
    Route::get('/contact-forms', 'Admin@contactForms');
    Route::get('/contact-forms/edit/{id}', 'Admin@editContactForms');
    Route::post('/contact-forms/edit/{id}', 'Admin@editContactForms');
    Route::get('/contact-forms/add', 'Admin@addContactForms');
    Route::post('/contact-forms/add', 'Admin@addContactForms');
    Route::post('/contact-form/delete', 'Admin@deleteContactForms');
    Route::get('/media-library', 'Admin@media');

    Route::get('/logo', 'Admin@logo');
    Route::post('/logo', 'Admin@logo');
    Route::post('/addlogo', 'Admin@addlogo');

    Route::get('/changeinstastatus', 'Admin@changeinstastatus');

    Route::get('/change-password', 'Admin@changePassword');
    Route::post('/change-password', 'Admin@changePassword');
    
    Route::get('/activity-log', 'Admin@activityLog');
    Route::get('/activity-log/{id}', 'Admin@activityLog');

    Route::get('/add-user', 'Admin@addUser');
    Route::get('/add-user/{id}', 'Admin@addUser');
    Route::post('/add-user', 'Admin@addUser');
    Route::post('/add-user/{id}', 'Admin@addUser');
    Route::get('/list-users', 'Admin@listUsers');
    Route::get('/list-users/{id}', 'Admin@listUsers');

    /* Destination Routes */
    Route::get('/add-destination', 'Admin@addDestination');
    Route::get('/add-destination/{id}', 'Admin@addDestination');
    Route::post('/add-destination', 'Admin@addDestination');
    Route::post('/add-destination/{id}', 'Admin@addDestination');
    Route::get('/list-destinations', 'Admin@listDestinations');
    Route::get('/list-destinations/{id}', 'Admin@listDestinations');
    Route::get('/deleteDestinationImages/{id}','Admin@deleteDestinationImages');

    /* My Profile Routes */
    Route::get('/my-profile/', 'Admin@myProfile');
    Route::post('/my-profile/', 'Admin@myProfile');

    /* User Roles & Priviles Routes */
    Route::get('/add-role/', 'Admin@addRole');
    Route::post('/add-role/', 'Admin@addRole');
    Route::get('/list-roles/', 'Admin@listRoles');
    Route::get('/list-roles/{id}', 'Admin@listRoles');
    Route::get('/edit-role/{id}', 'Admin@editRole');
    Route::post('/edit-role/{id}', 'Admin@editRole');

    Route::post('/logout', 'Admin@logout');

    Route::get('/insta', function(){
        return view('insta-test');
    });
});

Route::get('/', 'Main@homePage');
Route::get('/insta-data', function(){
    $data = null;
    try{
        $insta = new \Vinkla\Instagram\Instagram(config('services.instagram.accessToken'));
        $data = $insta->media();
    }catch (Exception $e){
        $data = null;
    }
    dd($data);
});
Route::get('/sitemap.xml', function(){
    $routes = \App\Routes::all();
    return response()->view('sitemap', [
        'routes' => $routes
    ])->header('Content-Type', 'application/xml');
});
Route::get('/insta', function(){
    return view('insta-test', [
        'js' => 'Main.pages.js.instagram-js',
        'style' => 'Main.pages.styles.instagram-styles'
        ]);
});
Route::get('/img', function(){
    $img = \App\SliderDetail::all();
    foreach($img as $i){
        $i->image_path = str_replace('http', 'https', $i->image_path);
        $i->save();
    }
});
Route::get('/img', function(){
    $img = \App\Category::all();
    foreach($img as $i){
        $i->featured_image = str_replace('http', 'https', $i->featured_image);
        $i->save();
    }
    dd($img);
});
    
// Destination Routes
//Route::get('/destination/{slug}','Main@destination')->name('destination');
Route::get('/loadDestination','Main@loadDestination')->name('loadDestination');
Route::get('/loadBoatInfo','Main@loadBoatInfo')->name('loadBoatInfo');
Route::get('/updateCount','Main@updateCount')->name('updateCount');
Route::get('/filterBoats','Main@filterBoats')->name('filterBoats');

Route::post('payment1', 'PayPalController@payment1')->name('payment1');

Route::post('redirectpage', 'Main@redirectpage')->name('redirectpage');

Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
Route::post('/send-email', 'Main@sendEmail');
Route::post('/make-contact', 'Main@makeContact');

Route::get('/{slug}', 'Main@singlePage');
Route::post('/{slug}', 'Main@singlePage');

Route::get('/payment', 'PayPalController@index')->name('payment');

Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


// Route::post('/storeUpboardLead', 'Main@storeUpboardLead');
Route::get('/custom-work', 'Main@customWork'); //Testing Route
/*
Route::get('/payment', 'PaymentController@paymentInfo');
Route::get('donation_recu_return', 'PaymentController@payment_return_donation');*/

Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:cache');
     return 'Routes cache cleared';
});

Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache cleared';
});

Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache cleared';
 });

 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache cleared';
 });
