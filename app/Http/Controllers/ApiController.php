<?php

namespace App\Http\Controllers;

use App\PageAlbum;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PageAlbumRequest;

use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

use Facebook\Exceptions\FacebookSDKException;

class ApiController extends Controller
{
  function __construct()
  {
    $this->fb = app(LaravelFacebookSdk::class);
  }
    public function applyFor(PageAlbum $pageAlbum, PageAlbumRequest $request)
    {
      $data = $request->except("_token");
      $pageData = $this->pageInfo($data['album_id']);
      if(!$pageData){
        return response()->json([
          "errorMessage" => [
            "請輸入正確的 FB 粉絲團相簿網址"
          ]
        ], 500);
      }

      $pageAlbum->create(array_merge($pageData, $data));
      // return $aaa;
      return response()->json(array_merge($pageData, $data));
    }

    public function glt()
    {
      $oauth_client = $this->fb->getOAuth2Client();
      $long_token = $oauth_client->getLongLivedAccessToken(env("FACEBOOK_APP_LONG_ACCESS_TOKEN"));
      return $long_token;
    }

    private function pageInfo($albumID)
    {
      $this->fb->setDefaultAccessToken(env('FACEBOOK_APP_LONG_ACCESS_TOKEN'));
      try {
        $response = $this->fb->get("$albumID?fields=from");
      } catch (FacebookSDKException $e) {
        return false;
      }
      $page_id = $response->getGraphAlbum()->getFrom()->getId();
      $page_name = $response->getGraphAlbum()->getFrom()->getName();
      $response = $this->fb->get("$page_id?fields=location");
      $page_location = $response->getGraphPage()->getLocation();
      $location = $page_location->getZip().
                  $page_location->getCountry().
                  $page_location->getCity().
                  $page_location->getStreet();
      $latitude = $page_location->getLatitude();
      $longitude = $page_location->getLongitude();

      return [
        "page_id"   => $page_id,
        "page_name" => $page_name,
        "location"  => $location,
        "latitude"  => $latitude,
        "longitude" => $longitude
      ];
    }

}
