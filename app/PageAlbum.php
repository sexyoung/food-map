<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageAlbum extends Model
{
  protected $fillable = [
    "page_id",
    "page_name",
    "location",
    "latitude",
    "longitude",
    "album_id",
    "type",
    "page_user",
    "page_email"
  ];

  protected $hidden = [
    "id",
    "type",
    "page_user",
    "page_email",
    "album_id",
    "confirmed",
    "created_at",
    "updated_at"
  ];

  protected $appends = ['photo'];

  public function scopeType($query, $type)
  {
      return $query->where('type', $type);
  }

  public function scopeConfirmed($query)
  {
      return $query->where('confirmed', 1);
  }

  public function getPhotoAttribute()
  {
    return albumRandomPhoto($this->attributes['album_id']);
  }
}
