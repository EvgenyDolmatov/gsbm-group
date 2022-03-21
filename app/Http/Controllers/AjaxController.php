<?php

namespace App\Http\Controllers;

use App\Models\ServiceImage;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function removeImage(ServiceImage $image)
    {
        $image->removeImage();
    }
}
