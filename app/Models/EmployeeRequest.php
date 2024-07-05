<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EmployeeRequest extends Model
{
    use HasFactory;

    protected $table = 'employee_requests';
    protected $fillable = ['name', 'email', 'phone', 'file_path'];

    public function uploadFile($file)
    {
        if ($file === null) return;

        $ext = $file->extension();
        $fileName = 'resume_' . Str::random(10) . '.' . $ext;
        $path = 'employee/';

        $file->storeAs($path, $fileName, 'uploads');
        $this->file_path = $path . $fileName;
        $this->save();
    }

    public function getFile()
    {
        if ($this->file_path !== null)
            return asset('uploads/' . $this->file_path);
        return false;
    }
}
