<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Tournament extends Model
{
    //
  use CrudTrait;

  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
//  protected $fillable =
//    ['name', 'description', 'rules',
//      'squadsize', 'title', 'champion_id',
//      'registration_end','startdate','enddate'];

    protected $table = 'tournaments';
    protected $primaryKey = 'id';
    public $timestamps = true;
    //protected $guarded = ['id'];
    protected $fillable = ['name', 'description', 'rules', 'registration_end',
                          'startdate', 'enddate', 'squadsize', 'title','standings_json', 'banner'];
    // protected $hidden = [];
    // protected $dates = [];
    //protected $hidden = [];
  /*
   |--------------------------------------------------------------------------
   | RELATIONS
   |--------------------------------------------------------------------------
   */
    public function esport()
    {
      return $this->belongsTo('App\Esport','title'); // FK title references id
    }

    public function contenders()
    {
      return $this->hasMany('App\ContendingTeam');
    }

    public function matches()
    {
      return $this->hasMany('App\Match');
    }

  /*
  |--------------------------------------------------------------------------
  | ACCESORS
  |--------------------------------------------------------------------------
  */
  public function getExcerptAttribute()
  {
    $body = $this->description;
    $words = explode(" ", $body);
    $words20 = array_slice($words,0,30);

    $excerpt = implode(' ', $words20);

    return $excerpt;
  }

  public function getBannerAttribute($value)
  {
    $prefix = "/uploads/images/tournament_banners/";
    $link = $prefix.$value;

    return $link;
  }

  /*
  |--------------------------------------------------------------------------
  | MUTATORS
  |--------------------------------------------------------------------------
  */
  public function setBannerAttribute($value)
  {
    $disk = "uploads";
    $destination_path = "images/tournament_banners";


    // if a base64 was sent, save the image in disk and store its name in db
    if (starts_with($value, 'data:image'))
    {
      // 1. Make the image
      $image = \Image::make($value);
      // 2. Generate a filename.
      $filename = md5($value.time()).'.jpg';
      // 3. Store the image on disk.
      \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream()); //***
      // 4. Delete existing image

      // 5. Save the path to the database
      $this->attributes['banner'] = $filename;
    }
  }
}
