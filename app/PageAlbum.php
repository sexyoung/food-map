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
}
