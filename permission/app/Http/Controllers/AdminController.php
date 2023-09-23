<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    
public function AdminDashboard(){
   return view('admin.dashboard');
}

public function AdminLogin(){
    return view('admin.login');
 }

//  public function list(){
//     $adminUsers = User::where('role', 'admin')->get();
//     return view('admin.chat', compact('adminUsers'));
//  }   //admin list




 
public function AdminProfile(){
    $profileData = User::find(Auth::id());
    return view('admin.profile', compact('profileData'));
}// End Method





public function StoreProfile(Request $request){
    $id = Auth::user()->id;
    $data = User::find($id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->username = $request->username;
    $data->phone = $request->phone;
    $data->address = $request->address;

    
    if ($request->file('photo')) {
       $file = $request->file('photo');
       $filename = date('YmdHi').$file->getClientOriginalName();
       $file->move(public_path('upload/admin_images'),$filename);
       $data['photo'] = $filename;
    }
    $data->save();

    $notification = array(
        'message' => 'Admin Profile Updated Successfully',
        'alert-type' => 'info'
    );

    return redirect()->route('admin.profile')->with($notification);
}

public function AdminChangePassword(){
    $Data = User::find(Auth::id());
    return view('admin.change_password', compact('Data'));

}// End Method


public function AdminUpdatePassword(Request $request){

    $validateData = $request->validate([
        'oldpassword' => 'required',
        'newpassword' => 'required',
        'confirm_password' => 'required|same:newpassword',

    ]);

    $hashedPassword = Auth::user()->password;
    if (Hash::check($request->oldpassword,$hashedPassword )) {
        $users = User::find(Auth::id());
        $users->password = bcrypt($request->newpassword);
        $users->save();

        session()->flash('message','Password Updated Successfully');
        return redirect()->back();
    } else{
        session()->flash('message','Old password is not match');
        return redirect()->back();
    }

}




// public function AdminProfile(Request $request): View{
//     return view('admin.profile', [
//         'user' => $request->user(),
//     ]);
// } 

public function AdminLogout(Request $request): RedirectResponse{
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin/login');
}

}
