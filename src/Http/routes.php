<?php
Route::prefix('admin')->group(function () {
    Route::get('minhaslojas','LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@index')->name('minhaslojas.admin.index');
    Route::get('minhaslojas/create', 'LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@create')->name('minhaslojas.admin.create');
    Route::post('minhaslojas/store', 'LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@store')->name('minhaslojas.admin.store');
    Route::get('minhaslojas/{id}', 'LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@edit')->name('minhaslojas.admin.edit');
    Route::post('minahslojas/{id}','LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@update')->name('minhaslojas.admin.update');
    Route::get('minhaslojas/delete/{id}', 'LuanCS\MinhasLojas\Http\Controllers\Admin\MinhasLojasController@destroy')->name('minhaslojas.admin.destroy');
});