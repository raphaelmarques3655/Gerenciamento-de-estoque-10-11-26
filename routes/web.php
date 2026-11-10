<?php

use App\Livewire\CategoriaCreate;
use App\Livewire\CategoriaIndex;
use App\Livewire\FornecedorCreate;
use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;


Route::get('/categoria/create', CategoriaCreate::class)->middleware('auth')->name('categoria.create');

Route::get('/categoria', CategoriaIndex::class)->middleware('auth')->name('categoria.index');

Route::get('/produto/create', ProdutoCreate::class)->middleware('auth')->name('produto.create');

Route::get('/produto', ProdutoIndex::class)->middleware('auth')->name('produto.index');

Route::get('/fornecedor', FornecedorCreate::class)->middleware('auth')->name('fornecedor.create');

Route::get('/login', Login::class)
    ->name('login');


