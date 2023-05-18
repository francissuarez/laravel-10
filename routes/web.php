<?php


use App\Http\Controllers\Profile\AvatarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use OpenAI\Laravel\Facades\OpenAI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');

});

//Route::controller(\App\Http\Controllers\customerController::class)->group(function (){
//   Route::post('/avatar','index');

//});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Route::get('/fix', function () {
//    return view('students.index');
//})->middleware(['auth', 'verified'])->name('fix');


Route::get('/view',[UsersController::class,'users']);

Route::controller(StudentController::class)->group(function (){
   Route::get('/student','index')->name('student.search');
    Route::get('/create','create');
    Route::post('create','store');
    Route::get('/show/{id}','show');
    Route::get('edit/{id}','edit');
    Route::post('edit/{id}','update')->name('edit.update');
    Route::get('delete/{id}','destroy');

});


Route::get('/alpha', function () {
    return view('alpha');
});

Route::get('/beta', function () {
    return view('beta');
});


//Route::resource("/classmate", StudentController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('openai',function (){


//
//    $result = OpenAI::completions()->create([
//        'model' => 'text-davinci-003',
//        'prompt' => 'PHP is',
//    ]);

    $result = OpenAI::images()->create([
//        'model' => 'text-davinci-003',
//        'prompt' => 'PHP is',

        "prompt"=> "create avatar for user with name".auth()->user()->name,
        "n"=> 1,
        "size"=> "256x256"

    ]);
    dd($result);
    echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.


});



require __DIR__.'/auth.php';
