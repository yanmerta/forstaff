<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $pageTitle = 'Home Data List';
        return view('backpage.home.homedatalist', compact('homes', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'home_title' => 'required',
            'home_description' => 'required',
            'button_teks' => 'required',
            'button_url' => 'required',
            'home_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $homes = Home::find($id);

        if ($request->hasFile('home_image')) {
            $imagePath = $request->file('home_image')->store('uploads', 'public');
            $homes->home_image = $imagePath;
        }

        $homes->update([
            'home_title' => $validatedData['home_title'],
            'home_description' => $validatedData['home_description'],
            'button_teks' => $validatedData['button_teks'],
            'button_url' => $validatedData['button_url'],
        ]);

        return redirect()->back()->with('success', 'home updated successfully');
    }
}

