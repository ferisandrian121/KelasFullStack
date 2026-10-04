<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return "<h1>Dashboard</h1>";
});



 $users = [];
    for($i =0; $i < 10; $i++){
        $user[] = [
        "nama" => "feris",
        "alamat" => "jakarta",
        "umur" => 25    
        ];
        }



// belajar Route::get,put,post,delete,patch
Route::get('/belajar', function(){
    $user = [];
    for($i =0; $i < 10; $i++){
        $user[] = [
        "nama" => "feris",
        "alamat" => "jakarta",
        "umur" => 25    
        ];
        }
        return $user;
    }

);

// Post
Route::post('/belajar', function(){
    return request()->all();
    }
    );
    
    // put
Route::put('/belajar/{id}', function($id) use($users){
        $umur = request()->umur;
        $users = [];
        $users[] = [
        "id" => $id,
        "nama" => request()->nama,
        "alamat" => request()->alamat,
        "umur" => $umur    
        ];
        return $users;
    }
   

);