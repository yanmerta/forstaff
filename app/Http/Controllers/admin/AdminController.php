<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Tambahkan use statement untuk Hash

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        $pageTitle = 'Admin | Data User';
        return view('backpage.masterAdmin.dataAdmin', compact('users', 'pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Admin | Create Data User';
        return view('backpage.masterAdmin.createdataAdmin', compact('pageTitle'));
    } 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);
    
        $imagePath = $request->file('photo')->store('uploads', 'public');
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'photo' => $imagePath,
        ]);
    
        return redirect()->route('admin.users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $pageTitle = 'Admin | Edit Data User';
        return view('backpage.masterAdmin.editdataAdmin', compact('user', 'pageTitle'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'role' => 'required',
        'status' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::findOrFail($id);
    $password = $request->filled('password') ? Hash::make($request->password) : $user->password;

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        'role' => $request->role,
        'status' => $request->status,
    ];

    if ($request->hasFile('photo')) {
        $imagePath = $request->file('photo')->store('uploads', 'public');
        $data['photo'] = $imagePath;
    }

    $user->update($data);

    return redirect()->route('admin.admin.users')->with('success', 'User updated successfully');
}

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.admin.users')->with('success', 'User deleted successfully');
    }
}

