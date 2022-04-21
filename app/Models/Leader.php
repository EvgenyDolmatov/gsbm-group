<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = ['surname', 'name', 'position', 'phone', 'email', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function uploadPhoto($image)
    {
        if ($image == null) return;
        $ext = $image->extension();

        if ($ext == 'jpeg') $ext = 'jpg';
        if (!in_array($ext, ['jpg', 'png', 'gif'])) return;

        $filename = 'leader-' . $this->id . '_' . Str::random(3);
        $path = 'leaders';
        $fullPathImage = 'uploads/' . $path . '/' . $filename . '.' . $ext;

        if (!File::exists('uploads/' . $path)) {
            File::makeDirectory('uploads/' . $path);
        }

//        $compressImage = Image::make($image);
//        // Save Full Size Image
//        $compressImage->resize(null, 1200, function ($constraint) {
//            $constraint->aspectRatio();
//        })->save($fullPathImage, 80);
//        // Save Thumbnail
//        $compressImage->resize(null, 360, function ($constraint) {
//            $constraint->aspectRatio();
//        })->save($fullPathThumb, 100);
    }
}
