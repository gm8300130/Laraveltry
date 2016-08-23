<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//接參數 限定數字
// Route::get('posts/{id}', function ($id) {
//     return 'Post : '.$id;
// })
// ->where('id','[0-9]+');

//接參數 設定預設值
Route::get('user/{name?}', function ($name ='king') {
    return 'My Name is : '.$name;
});

// Route::get('aposts/{id}',['as'=>'posts.show' ,function () {
//     //view 直接用helper 產生 url 
//     //<a href="{{ route('posts.show',$id) }} "></a>
// }]);

//群組
// Route::group(['{function}' => '{setting}'],function(){
//     Route::get('{url}',function(){

//     });
// });

// Route::group(['prefix' => 'admin'],function(){
//     Route::get('users/{name?}',function($name ='king'){
//         //實際上的URL 會是 "admin/users"
//         return 'admin is '.$name;
//     }); 
// });

//限制Route 只能在某個Sub-Domain 才接受
// Route::group(['domain' => '{account}.myapp.com'],function(){
//     Route::get('users/{id}',function($account,$id){
//         //若是{account}.myapp.com 就會進入這裡"
       
//     }); 
// });

/*
文章範例Route
*/

Route::get('/',['as'=>'home.index' ,function () {
    //return 'index';
    //資料夾用 "." 區隔 
    //return view('home.routetry');
    return view('index');
}]);

Route::get('index',['as'=>'home.index' ,function () {
    return view('index');
}]);

Route::get('about',['as'=>'about.index' ,function () {
    //return 'about';
    return view('about');
}]);

Route::get('post',['as'=>'post.index' ,function () {
    //return 'about';
    return view('post');
}]);

Route::get('contact',['as'=>'contact.index' ,function () {
    //return 'about';
    return view('contact');
}]);

// Route::get('hot/page/{page?}',['as'=>'posts.hot' ,function ($page) {
//     return 'hot'.$page;
// }]);

Route::group(['prefix' => 'hot'],function(){
    Route::get('page/{page?}',['as'=>'posts.hot' ,function($page='1'){
        return 'hot :'.$page;
    }])
    ->where('page','[0-9]+');
});


Route::group(['prefix' => 'posts'],function(){
    //新增
    Route::post('create/{id?}',['as'=>'posts.create' ,function($id){
        return 'create :'.$id;
    }])
    ->where('id','[0-9]+');
    //更新
    Route::patch('update/{id?}',['as'=>'posts.update' ,function($id){
        return 'update :'.$id;
    }])
    ->where('id','[0-9]+');
    //刪除
    Route::delete('delete/{id?}',['as'=>'posts.delete' ,function($id){
        return 'delete :'.$id;
    }])
    ->where('id','[0-9]+');
    //修改
    Route::get('edit/{id?}',['as'=>'posts.edit' ,function($id){
        return 'edit :'.$id;
    }])
    ->where('id','[0-9]+');


});
