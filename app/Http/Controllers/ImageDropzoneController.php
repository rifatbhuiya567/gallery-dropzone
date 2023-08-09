<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageDropzoneController extends Controller
{
    function image_dropzone() {
        return view('dropzone.dropzone');
    }
}
