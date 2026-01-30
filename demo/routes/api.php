
<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function() {
    return "Hello, User!";
});

Route::post('/data', function() {
    return response()->json([
        'message' => 'Data received successfully'
    ]);
});

Route::delete('/item/{id}', function($id){
    return response("Delete : ".$id, 200);
});

Route::put('/item/{id}', function($id){
    return response("Item {$id} updated", 200);
});