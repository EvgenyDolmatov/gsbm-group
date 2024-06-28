<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = ['surname', 'name', 'position', 'phone', 'email', 'service_id', 'photo'];

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

        $compressImage = Image::make($image);
        $compressImage->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($fullPathImage, 100);

        $this->photo = $path . '/' . $filename . '.' . $ext;
        $this->save();
    }

    public function getPhoto(): string
    {
        if ($this->photo != null)
            return '/uploads/' . $this->photo;
        return asset('assets/app/img/no-image.jpg');
    }

    public function removePhoto()
    {
        if ($this->photo != null) {
            Storage::disk('uploads')->delete($this->photo);
            $this->photo = null;
            $this->save();
        }
    }

    public function remove()
    {
        if ($this->photo) {
            Storage::disk('uploads')->delete($this->photo);
        }
        $this->delete();
    }

    public function getFullName(): string
    {
        return $this->surname . ' ' . $this->name;
    }

    public function getPhoneLink(): string
    {
        return str_replace(' ', '', $this->phone);
    }
}
