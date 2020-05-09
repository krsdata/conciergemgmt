<?php

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

Route::prefix('dashboard')->middleware('auth')->group(function(){
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

    Route::get('/insta', function(){
        return view('insta-test');
    });
});

Route::get('/', 'Frontend@index');
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
        'js' => 'frontend.pages.js.instagram-js',
        'style' => 'frontend.pages.styles.instagram-styles'
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
//Route::get('/payment', 'Frontend@payment');

Route::post('payment1', 'PayPalController@payment1')->name('payment1');


Route::get('/{slug}', 'Frontend@singlePage');
Route::post('/make-contact', 'Frontend@makeContact');
Route::post('/send-email', 'Frontend@sendEmail');

Route::get('payment', 'PayPalController@index')->name('payment');

Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');



/*Route::get('payment-status',array('as'=>'payment.status','uses'=>'PaymentController@paymentInfo'));
Route::get('paymentnew',array('as'=>'paymentnew','uses'=>'PaymentController@payment'));
Route::get('payment-cancel', function () {
   return 'Payment has been canceled';
});*/