<?php
namespace App\Actions;
use App\Actions\FetchData;
use Illuminate\Support\Facades\Storage;

class GetData
{
  public function execute()
  {
    if (!Storage::disk('public')->exists('apartements.json'))
    {
      (new FetchData)->execute();
    }
    $data = Storage::disk('public')->get('apartements.json');
    return collect(json_decode($data, true))->sortBy('title'); 
  }
}