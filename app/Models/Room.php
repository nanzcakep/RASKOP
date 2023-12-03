<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';

    protected $primaryKey = 'id_room';

    protected $fillable = [
        'room_name',
        'image_url',
        'slug',
        'capacity',
        'description',
    ];


    public static function boot()
    {
        parent::boot();

        static::deleting(function($model){
            // delete data image from cloudinary
            Storage::disk('cloudinary')->delete($model->image_url);
            $model->category()->detach();
        });
    }



}
