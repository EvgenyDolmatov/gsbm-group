<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\LessonAttachment;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function removeImage(ServiceImage $image)
    {
        $image->removeImage();
    }

    public function removeLeaderPhoto(Leader $leader)
    {
        $leader->removePhoto();
    }

    public function removeAttachment(LessonAttachment $attachment)
    {
        $attachment->removeFile();
    }
}
