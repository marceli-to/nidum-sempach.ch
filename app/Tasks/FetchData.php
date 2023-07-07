<?php
namespace App\Tasks;
use App\Actions\FetchData as FetchDataAction;

class FetchData
{
  public function __invoke()
  {
    (new FetchDataAction)->execute();
  }
}