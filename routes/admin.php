
<?php
Route::get("/dashboard", [\App\Http\Controllers\AdminController::class, "homeAdmin"]);
Route::get("/detailOrder/{id:id}", [\App\Http\Controllers\AdminController::class, "detailOrder"]);
Route::get("/carsList", [\App\Http\Controllers\AdminController::class, "carsList"]);
Route::get("/order", [\App\Http\Controllers\AdminController::class, "orders"]);
