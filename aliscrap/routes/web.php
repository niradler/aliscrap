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
use Illuminate\Http\Request;
use App\User;
use App\Product;
Route::post('/addProducts', function (Request $request) {
    $request->validate([
        'products' => 'required',
        'key' => 'required',
    ]);
    if ($validator->fails()) {
        $this->setStatusCode(422);
        return $this->respondWithError($validator->errors());
    }
    $user = App\User::where('key', $request->input('key'))->firstOrFail();
    $productArr = $request->input('products');
    foreach ($productArr as $key => $value) {
        $product = App\Product::updateOrCreate(
            ['link'=> $value["url"],'user_id' => $user->id],
            [        
            'name'=> $value["name"],
        'link' => $value["url"],
         'user_id' => $user->id,
        'page_id'=> $value["page_id"],
       'description'=> $value["description"],
        'image'=> $value["image"],
       'keywords'=> $value["keywords"],
      'price'=> $value["price"],
      'priceCurrency'=> $value["priceCurrency"],
      'site_name'=> $value["site_name"],
      ]);
    }

    return response()->json([
        'msg' => 'success',
    ]);
});



Auth::routes();

Route::get('/', function (Request $request) {
    return redirect()->route('dashboard');
});
Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile', 'ProfileController@update');

Route::get('/products', 'ProductController@index')->name('products');
Route::post('/products', 'ProductController@add');
Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/exportImport', 'ExportImportController@index')->name('exportImport');
Route::get('/exportImport/exportCsv', 'ExportImportController@exportCsv');


Route::get('/databases', 'DatabaseController@index')->name('databases');
Route::post('/databases', 'DatabaseController@add');
Route::put('/databases', 'DatabaseController@add');
Route::delete('/databases/{id}', 'DatabaseController@destroy');