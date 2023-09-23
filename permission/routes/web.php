<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Middleware\RedirectIfAuthenticated;

use App\Http\Controllers\AgoraVideoController;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {

    Route::get('/video-chat', function () {
        // fetch all users apart from the authenticated user
        $users = User::where('id', '<>', Auth::id())->get();
        return view('video-chat', ['users' => $users]);
    });



     Route::get('/agora-chat', [AgoraVideoController::class, 'index'])->name('agora-chat'); 
     Route::post('/agora/token', [AgoraVideoController::class, 'token'])->name('agora/token');    
     Route::post('/agora/call-user', [AgoraVideoController::class, 'callUser'])->name('agora/call-user'); 



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






/// Admin Group Middleware 
Route::middleware(['auth','roles:admin'])->group(function(){
    Route::get('/chat', [AdminController::class, 'list'])->name('admin.chat'); 

    Route::get('/secure', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard'); 
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); 
     Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile'); 
      Route::post('/store_password', [AdminController::class, 'StoreProfile'])->name('admin.profile.store'); 
      Route::get('/change_password', [AdminController::class, 'AdminChangePassword'])->name('admin.change_password'); 
      Route::post('/update_password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update_password'); 
}); // End Group Admin Middleware
   

 Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);  
   
   
    /// Agent Group Middleware 
   Route::middleware(['auth','roles:agent'])->group(function(){

   Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
   Route::get('/agent/logout', [AgentController::class, 'AgentLogout'])->name('agent.logout');
   Route::get('/agent/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');
   Route::post('/agent/profile/store', [AgentController::class, 'AgentProfileStore'])->name('agent.profile.store');
   Route::get('/agent/change/password', [AgentController::class, 'AgentChangePassword'])->name('agent.change.password');
   Route::post('/agent/update/password', [AgentController::class, 'AgentUpdatePassword'])->name('agent.update.password');
   
   
   }); // End Group Agent Middleware

