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
    public function course()
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
        $attribute_name = 'path';
        $disk = 'uploads';
        $destination_path = 'images';

        if (starts_with($value, 'data:image')) {
            // 0. Get image extension
            preg_match("/^data:image\/(.*);base64/i", $value, $match);
            $extension = $match[1];
            // 1. Make the image
            $image = Image::make($value);
            if (!is_null($image)) {
                // 2. Generate a filename.
                $filename = md5($value.time()).'.'.$extension;

                try {
                    // 3. Store the image on disk.
                    Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
                    // 4. Save the path to the database
                    $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
                } catch (\InvalidArgumentException $argumentException) {
                    // 3. failed to save file
                    Alert::error($argumentException->getMessage())->flash();
                    // 4. set as null when fail to save the image to disk
                    $this->attributes[$attribute_name] = null;
                }
            }
        } else {
            $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
        }
    }
}
