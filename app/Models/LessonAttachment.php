<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class LessonAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['lesson_id', 'title', 'file_path'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public static function uploadFile($lesson, $file)
    {
        if ($file == null) return;

        $fileName = $file->getClientOriginalName();
        $path = 'courses/lessons/id_' . $lesson->course_id . '/';

        $file->storeAs($path, $fileName, 'uploads');

        $attachment = new static;
        $attachment->lesson_id = $lesson->id;
        $attachment->title = $fileName;
        $attachment->file_path = $path . $fileName;
        $attachment->save();
    }

    public function getFile()
    {
        if ($this->file_path != null)
            return '/uploads/' . $this->file_path;
        return false;
    }

    public function removeFile()
    {
        if ($this->file_path != null) {
            Storage::disk('uploads')->delete($this->file_path);
            $this->delete();
        }
    }
}
