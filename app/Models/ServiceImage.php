<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceImage extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'title', 'image_path'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public static function uploadImage($image, $service)
    {
        if ($image == null) return;
        $ext = $image->extension();

        if ($ext == 'jpeg') $ext = 'jpg';
        if (!in_array($ext, ['jpg', 'png', 'gif'])) return;

        $filename = 'service-' . $service->id . '_' . Str::random(3);
        $path = 'services/id_' . $service->id;
        $fullPathImage = 'uploads/' . $path . '/' . $filename . '.' . $ext;
        $fullPathThumb = 'uploads/' . $path . '/' . $filename . '_thumb.' . $ext;

        if (!File::exists('uploads/' . $path)) {
            File::makeDirectory('uploads/' . $path);
        }

        $compressImage = Image::make($image);
        // Save Full Size Image
        $compressImage->resize(null, 1200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($fullPathImage, 80);
        // Save Thumbnail
        $compressImage->resize(null, 360, function ($constraint) {
            $constraint->aspectRatio();
        })->save($fullPathThumb, 100);

        $newImage = new static();
        $newImage->service_id = $service->id;
        $newImage->title = $filename . '.' . $ext;
        $newImage->image_path = $path . '/' . $filename . '_thumb.' . $ext;
        $newImage->save();
    }

    public function getImage()
    {
        if ($this->image_path != null)
            return '/uploads/' . $this->image_path;
        return false;
    }

    public function getFullImage()
    {
        if ($this->image_path != null) {
            $tmp = explode('.', $this->image_path);
            $ext = end($tmp);
            $filename = $tmp[array_key_last($tmp)-1];
            $newFilename = str_replace('_thumb', '', $filename);

            return '/uploads/' . $newFilename . '.' . $ext;
        }
        return false;
    }

    public function removeImage()
    {
        if ($this->image_path != null) {

            $fullImage = $this->getFullImage();
            if ($fullImage) {
                $fullImage = str_replace('/uploads/', '', $fullImage);
                Storage::disk('uploads')->delete($fullImage);
            }

            Storage::disk('uploads')->delete($this->image_path);
            $this->delete();
        }
    }
}
