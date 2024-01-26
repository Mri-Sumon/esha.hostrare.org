<?php
// Route::get('/gen',function(){
//   echo bcrypt('Bindim@321'); 
// });
// Route::get('/',function(){
//     $products=\DB::table('products')->get();
//     print_r(json_decode($products));
// });
Route::get('/', 'MainController@home')->name('home');

Route::get('page/{slug?}', 'MainController@subpage');
Route::get('blog/{slug?}', 'MainController@post');
Route::get('blogcat/{catid?}', 'MainController@catpost');
Route::get('gallery/pictures/{album?}', 'MainController@subgallery');
Route::get('details/{product_id}','DetailsController@index')->name('details');
Route::get('shop','ShopController@index')->name('shop');
Route::get('shop/cat/{category_id}','ShopController@shopByCategory')->name('cat.shop');
Route::get('search','ShopController@search');
Route::get('searchsuggestion/{searchkey}',function($searchkey){
    $product = \DB::table('products')->where('name', 'LIKE', '%'.$searchkey.'%')->select('name','product_code','f_pic')->get();
    return json_decode($product,true);
});



Route::get('cart','CartController@index')->name('product.cart');

Route::post('addtocart/{id}','CartController@addtocart')->name('addtocart');


Route::get('checkout','CartController@checkout')->name('checkout');
Route::post('confirm-order','CartController@placeorder')->name('placeorder');
Route::get('thank-you','CartController@thankyou')->name('thank-you');
Route::get('removeformcart/{id}','CartController@removeformcart')->name('removeformcart');
Route::get('decreasequantity/{rowId}','CartController@decreasequantity')->name('decreasequantity');
Route::get('increasequantity/{rowId}','CartController@increasequantity')->name('increasequantity');
Route::get('decreasequantitydetails/{rowId}','DetailsController@decreasequantity')->name('decreasequantitydetails');
Route::get('increasequantitydetails/{rowId}','DetailsController@increasequantity')->name('increasequantitydetails');
//Route::post('addtocart/{product_id}','DetailsController@store')->name('addtocart');
Route::post('carts/{id}','CartController@detailstocart')->name('addtocartss');
Route::get('buynow/{id}','CartController@buynow')->name('buynow');
Route::post('confirm_buynow/{id}','CartController@confirm_buynow')->name('confirm_buynow');
Route::post('action_search','MainController@action_search')->name('action_search');
Route::get('track_order','MainController@track_order')->name('track_order');
Route::post('trackorder','MainController@trackorder')->name('trackorder');
Route::get('track_order_details','MainController@trackorder')->name('trackorderdetails');
Auth::routes();
Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
Route::resource('users', 'UserController');
Route::resource('pages', 'PagesController');
Route::resource('medias', 'MediasController');

Route::get('open_modal','MediasController@media_image')->name('open.modal');
Route::post('get_media','MediasController@getMedia')->name('get_medias');
Route::post('file-upload', 'MediasController@fileUploadPost')->name('fileUploadPost');

Route::resource('slider', 'SliderController');
Route::resource('sections', 'SectionController');
Route::resource('posts', 'PostController');
Route::resource('themes', 'ThemeController');
Route::resource('bkashs', 'BkashController');
Route::get('theme_activate/{themeid}', 'ThemeController@theme_activate');
Route::get('theme_inactivate/{themeid}', 'ThemeController@theme_inactivate');
Route::get('mediasbycat/{cat?}', 'MediasController@cat');
Route::get('settings', 'HomeController@settings');



Route::get('cheque', 'HomeController@cheque');
Route::get('cheque_List', 'HomeController@cheque_List');
Route::post('saveCheque', 'HomeController@saveCheque');
Route::get('editCheque/{id}', 'HomeController@editCheque');
Route::patch('updateChequeInformation/{id}', 'HomeController@updateChequeInformation');
Route::delete('deleteCheque/{id}', 'HomeController@deleteCheque');
Route::get('chequePrint/{id}', 'HomeController@chequePrint'); 





Route::post('saveSettings', 'HomeController@saveSettings');
Route::post('feedbackemail', 'HomeController@feedbackemail');
Route::resource('contacts', 'ContactController');
Route::get('category','CategoryController@index')->name('category');
Route::get('addcategory','CategoryController@create')->name('admin.addcategory');
Route::get('deleteCategory/{cat_id}','CategoryController@delete')->name('admin.deletecategory');
Route::get('editcategory/{cat_id}','CategoryController@edit')->name('admin.editcategory');
Route::post('saveCategory','CategoryController@saveCategory');
Route::post('updateCategory/{cat_id}','CategoryController@updateCategory')->name('admin.updataecategory');
Route::get('products','ProductController@index')->name('product');

Route::get('productSinglePage/{id}','ProductController@productSinglePage');
Route::get('productSubCategory/{id}','ProductController@productSubCategory');
Route::get('searchingresult','ProductController@searchingresult');

Route::get('addproduct','ProductController@create')->name('admin.addproduct');
Route::post('updateproduct/{id}','ProductController@updateProduct')->name('admin.updateproduct');
Route::get('deleteproduct/{product_id}','ProductController@delete')->name('admin.deleteproduct');
Route::get('editproduct/{product_id}','ProductController@edit')->name('admin.editproduct');
Route::post('saveproduct','ProductController@saveProduct');
Route::get('removefeaturedproductpic/{pid}','ProductController@removefeaturedproductpic');
Route::get('removesingleproductpic/{pid}/{picturename}','ProductController@removesingleproductpic');
Route::post('updateproduct/{product_id}','ProductController@updateProduct')->name('admin.updataeproduct');

//Admin order
Route::get('admin/order','AdminOrderController@index')->name('admin.order');
Route::get('admin/order/update/{id}/{status}','AdminOrderController@updateorder')->name('admin.updateorder');
Route::get('admin/deleteorder/{id}','AdminOrderController@deleteorder')->name('admin.deleteorder');
Route::get('admin/view/orderdetails/{id}','AdminOrderController@viewdetails')->name('admin.view.orderdetails');
Route::get('admin/order-item','AdminOrderController@showOrderDetails')->name('admin.orderitem');
Route::get('admin/shipping-different','AdminOrderController@shippingDifferent')->name('admin.shipping.different');
Route::get('admin/deletshipping/{id}','AdminOrderController@deleteshipping')->name('admin.deleteshipping');
Route::get('admin/transaction','AdminOrderController@transaction')->name('admin.transaction');
Route::get('admin/transaction/update/{id}/{status}','AdminOrderController@updatetransaction')->name('admin.updatetransaction');
Route::get('admin/delete/transaction/{id}','AdminOrderController@deletetransaction')->name('admin.delete.transaction');
// Route::get('admin/slider','SliderController@index')->name('admin.slider');


// User Order
Route::get('user/order','UserOrderController@index')->name('user.order');
Route::get('user/order/update/{id}/{status}','UserOrderController@updateorder')->name('user.updateorder');
Route::get('user/view/orderdetails/{id}','UserOrderController@viewdetails')->name('user.view.orderdetails');
