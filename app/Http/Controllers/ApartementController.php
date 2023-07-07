<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Actions\GetData;
use Illuminate\Http\Request;

class ApartementController extends Controller
{
  public function index()
  {
    return 
      view(
        'frontend.pages.apartements',
        [
          'apartements' => (new GetData)->execute(),
        ]
      );
  }
}
