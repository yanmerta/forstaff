<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $pageTitle = 'Admin | Halaman Profil';
        $user = User::findOrFail(Auth::id());
        return view('backpage.profile.index', compact('user', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|unique:users,email,' . $id . ',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->filled('old_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->password);
            } else {
                return back()
                    ->withErrors([
                        'old_password' => __('Please enter the correct password'),
                    ])
                    ->withInput();
            }
        }
    
        if ($request->hasFile('photo')) {
            if ($user->photo && Storage::exists('public/' . $user->photo)) {
                Storage::delete('public/' . $user->photo);
            }
            $fileName = $request->file('photo')->store('photos', 'public');
            $user->photo = $fileName;
        }
    
        $user->save();
    
        return back()->with('status', 'Profile updated successfully');
    }    
    public function deletePhoto($id)
{
    $user = User::find($id);

    if ($user->photo) {
        // Hapus foto dari storage
        if (Storage::disk('public')->exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
        }

        // Kosongkan kolom foto di database
        $user->photo = null;
        $user->save();

        return back()->with('status', 'Profile photo deleted successfully');
    }

    return back()->with('error', 'No profile photo to delete');
}
}
