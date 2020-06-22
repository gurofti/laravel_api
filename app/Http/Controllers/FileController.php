<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList()
    {
        return response()->download(public_path("user2.png", "User Image"));
    }

    public function countrySave(Request $request)
    {
        $fileName = "user_image.png";
        $path = $request->file('photo')->move(public_path("/"), $fileName);
        $photoURL = url('/' . $fileName);
        return response()->json(['url' => $photoURL], 200);
    }
}
