<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

Route::get(uri:'front',action:function(){
     return view(view:'front-egency');
});

Route::get(uri:'home',action:function(){
     return view(view:'front_home');
});

Route::get(uri:'/',action:[FrontPageController::class,'index'])->name(name:'front.home');

Route::get(uri:'/about',action:[FrontPageController::class,'about'])->name(name:'front.about');

Route::get(uri:'/services',action:[FrontPageController::class,'services'])->name(name:'front.services');

Route::get(uri:'/packages',action:[FrontPageController::class,'packages'])->name(name:'front.packages');

Route::get(uri:'/contact',action:[FrontPageController::class,'contact'])->name(name:'front.contact');

Route::get(uri:'/desination',action:[FrontPageController::class,'desination'])->name(name:'front.desination');

Route::get(uri:'/booking',action:[FrontPageController::class,'booking'])->name(name:'front.booking');



// Route::get(uri:'master',action:function(){
//      return view(view:'front_master');
// });






?>