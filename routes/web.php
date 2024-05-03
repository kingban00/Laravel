<?php

use Illuminate\Support\Facades\Route;

use App\Models\Jobs;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return view('user', ['id'=> $id]);
});

Route::prefix('jobs')->group(function () {
    

     

    Route::get('/', function (){
        return view('jobs', [
            'jobs' => Jobs::all()
        ]);
    });

    Route::get('/{id}', function ($id){
    
        $job = Jobs::find($id);
    
        return view('job', ['job' => $job]);
    });
});


Route::get('/contact', function () {
    return view('contact');
});



// Route::get('/', function () {
//     return view('');

// });

// Route::get('/', function () {
//     return view('');

// });
