<?php
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
function albumList($albumID)
{
  $fb = app(LaravelFacebookSdk::class);
  $fb->setDefaultAccessToken(env('FACEBOOK_APP_LONG_ACCESS_TOKEN'));

  $response = $fb->get("$albumID/photos?fields=images");
  $albumsEdge = ($response->getGraphEdge());
  foreach ($albumsEdge as $photo) {
    $photos[] = $photo->asArray()['images'][0]['source'];
  }
  return $photos;
}

function albumRandomPhoto($albumID){
  $photos = albumList($albumID);
  return $photos[rand(0, count($photos)-1)];
}
