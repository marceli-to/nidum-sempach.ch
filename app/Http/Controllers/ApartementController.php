<?php
namespace App\Http\Controllers;
use App\Models\Apartement;
use App\Models\Isometrie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartementController extends Controller
{
  protected $apartement;

  protected $isometrie;
  
  /**
   * Constructor
   * 
   * @param Apartement $apartement
   */

  public function __construct(Apartement $apartement, Isometrie $isometrie)
  {
    $this->apartement = $apartement;
    $this->isometrie  = $isometrie;
  }

  public function index()
  {
    return 
      view(
        'frontend.pages.apartements',
        [
          'apartements' => $this->fetchData(),
          // 'apartements_minerva' => $apartements_minerva,
          // 'iso_billroth' => $iso_billroth,
          // 'iso_minerva' => $iso_minerva
        ]
      );
  }

  private function fetchData()
  {
    if (session()->has('apartements')) {
      $data = session('apartements');
      return collect(json_decode($data, true))->sortBy('title');
    }

    // rest api uri
    $api_uri = 'https://nidumsempach.api.melon.rent/api/v2/objects/?format=json';

    // get data from api
    $data = file_get_contents($api_uri);

    // save data to session for 15minutes
    session(['apartements' => $data]);
    session()->save();

    // get data from session
    $data = session('apartements');
    return collect(json_decode($data, true))->sortBy('title');
  }
}
