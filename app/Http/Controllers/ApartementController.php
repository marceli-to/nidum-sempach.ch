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
    $apartements_billroth = $this->apartement->orderBy('order')->orderBy('floor')->where('building', '=', 5)->get();
    $apartements_minerva = $this->apartement->orderBy('order')->orderBy('floor')->where('building', '=', 136)->get();

    $iso_billroth = [];
    foreach($this->isometrie->where('building', '=', 5)->get() as $i)
    {
      $iso_billroth[$i->floor][] = $i;
    }

    $iso_minerva = [];
    foreach($this->isometrie->where('building', '=', 136)->get() as $i)
    {
      $iso_minerva[$i->floor][] = $i;
    }

    return 
      view(
        'frontend.pages.apartements',
        [
          'apartements_billroth' => $apartements_billroth,
          'apartements_minerva' => $apartements_minerva,
          'iso_billroth' => $iso_billroth,
          'iso_minerva' => $iso_minerva
        ]
      );
  }

  public function iso()
  {
    
    dd($this->isometrie->get());
    
    foreach($this->isometrie->get() as $i)
    {
      
      // $search = [
      //   'style="fill: #8ea494;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"',
      //   'style="fill: #6d9878;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"',
      //   'style="fill: #647e68;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"',
      //   'style="fill: #9d9d9c;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"',
      //   'style="fill: #878787;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"',
      //   'style="fill: none;stroke: #1d1d1b;stroke-miterlimit: 10;stroke-width: 0.25px"'
      // ];

      // $replace = [
      //   'class="light-green"',
      //   'class="medium-green"',
      //   'class="dark-green"',
      //   'class="light-grey"',
      //   'class="dark-grey"',
      //   'class="line"'
      // ];
      
      // $iso = str_replace($search, $replace, $i->svg);
      // $i->svg = $iso;
      // $i->save();
      
    }
  }

}
