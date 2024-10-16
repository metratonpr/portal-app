<?php

use App\Http\Controllers\CadernoController;
use App\Models\Autor;
use App\Models\Caderno;
use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/faker', function () { 
  
    dd(Caderno::factory()->create());   
});

//GET: requisicao via URL
//POST: requisição via cabecalho da request
//UPDATE: requisição via URL e cabecalho
//DELETE: serve pra destruir o objeto
//DELETE OU SOFTDELETE: quando eu quero apenas ocultar eu uso
// o segundo, tem que configurar migration e model.

Route::get('/cadernos',[CadernoController::class,'index'])
->name('cadernos.index');

Route::get('/cadernos/create',[CadernoController::class,'create'])
->name('cadernos.create');

Route::post('/cadernos',[CadernoController::class,'store'])
->name('cadernos.store');

Route::get('/cadernos/{caderno}',[CadernoController::class,
'edit'])->name('cadernos.edit');

Route::put('/cadernos/{caderno}',[CadernoController::class,
'update'])->name('cadernos.update');

Route::delete('/cadernos/{caderno}',[CadernoController::class,
'destroy'])->name('cadernos.destroy');
//php artisan route:list+
// Resources