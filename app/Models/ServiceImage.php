<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

        $filename = 'service-' . $service->id . '_' . Str::random(3) . '.' . $ext;
        $path = 'services/id_' . $service->id;
        $image->storeAs($path . '/', $filename, 'uploads');

        $newImage = new static();
        $newImage->service_id = $service->id;
        $newImage->title = $filename;
        $newImage->image_path = $path . '/' . $filename;
        $newImage->save();
    }

    public function getImage()
    {
        if ($this->image_path != null)
            return '/uploads/' . $this->image_path;
        return false;
    }

    public function removeImage()
    {
        if ($this->image_path != null) {
            Storage::disk('uploads')->delete($this->image_path);
            $this->delete();
        }
    }
}
