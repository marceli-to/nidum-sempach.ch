<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImportApartments extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'import:apartments';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Import apartments from txt file';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
      parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    // read file line by line located in storage/app/public/apartments.txt
    $file = fopen(storage_path('app/public/apartments.txt'), 'r');
    while (($line = fgets($file)) !== false) {
      // split line by comma
      $apartment = explode(",", $line);

      // remove \r\n from $apartment[8]
      $apartment[8] = str_replace("\r\n", "", $apartment[8]);

      // create new apartment
      $newApartment = new \App\Models\Apartement;
      $newApartment->number = $apartment[0];
      $newApartment->building = $apartment[1];
      $newApartment->floor = $apartment[2];
      $newApartment->rooms = $apartment[3];
      $newApartment->footage = $apartment[4];
      $newApartment->footage_outer = $apartment[5];
      $newApartment->rent_net = $apartment[6];
      $newApartment->additional_cost = $apartment[7];
      $newApartment->rent_gross = $apartment[8];
      $newApartment->save();
    }
  }
}
