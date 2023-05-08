<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'file',
        'dimension',
        'user_id',
        'slug'
    ];


    public static function makeDirectory()
    {
        $subFolder = 'images/' . date('Y/m/d');
        Storage::makeDirectory($subFolder);
        return $subFolder;
    }

    public static function getDimension($image)
    {
        [$width, $height] = getImageSize(Storage::path($image));
        return $width . "X" . $height;
    }

    public static function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function fileUrl()
    {
        return Storage::url($this->file);
    }

    public function getSlug()
    {
        $slug = str($this->title)->slug();
        $numSlugFound = static::where('slug', 'regexp', "^" . $slug . "(-[0-9])?")->count();
        if ($numSlugFound > 0) {
            $slug = $slug . "-" . $numSlugFound + 1;
            // dd($numSlugFound);
        }
        return $slug;
    }

    protected static function booted(){
        static::creating(function($image){
            if ($image->title) {
                $image->slug = $image->getSlug();
                $image->is_published = true;
            }
        }); 

        static::updating(function($image){
            if ($image->title && !$image->slug) {
                $image->slug = $image->getSlug();
                $image->is_published = true;
            }
        });

        static::deleted(function($image){
            Storage::delete($image->file); 
        }); 
    }

}
