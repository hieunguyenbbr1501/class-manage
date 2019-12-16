<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'lectures';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setDocUploadAttribute($value)
    {
        $attribute_name = "path";
        $disk_name = "public";
        $destination_path = "uploads/documents";
        $disk = \Storage::disk($disk_name);
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
//        if ($value == null) {
//            $path = preg_replace('/(storage\/)/', '', $this->{$attribute_name});
//            // Delete the image from disk
//            $disk->delete($path);
//            // Set null in the database column
//            $this->attributes[$attribute_name] = null;
//        }
//
//        if (starts_with($value, 'data:image')) {
//            // Make the image
//            $image = \Image::make($value);
//            // Generate a filename.
//            $filename = md5($value . time()) . '.jpg';
//            // Store the image on disk.
//            try {
//                $disk->put($destination_path . '/' . $filename, $image->stream());
//                // Save the path to the database
//                $path_image = 'storage/' . $destination_path . '/' . $filename;
//            } catch (\Exception $e) {
//                $path_image = null;
//            }
//            if (!$disk->exists($destination_path . '/' . $filename)) {
//                $path_image = null;
//            };
//            $this->attributes[$attribute_name] = config('app.url') . '/' . ltrim($path_image, '/');
//        }
//

    }
}
