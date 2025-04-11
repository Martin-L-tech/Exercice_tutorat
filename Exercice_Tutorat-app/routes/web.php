<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $eleves=[
        'matricule'=>'123141414',
        'prenom'=>'Adam',
        'nom'=>'Bernard'
    ];
return view('simulationConnection', ['eleves'=>$eleves]);
});

