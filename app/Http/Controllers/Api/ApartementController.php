<?php

namespace App\Http\Controllers\Api;
use App\Models\Apartement;
use App\Http\Requests\ApartementStoreRequest;
use App\Http\Resources\ApartementCollection;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartementController extends Controller
{
  protected $apartement;
  
  /**
   * Constructor
   * 
   * @param Apartement $apartement
   */

  public function __construct(Apartement $apartement)
  {
    $this->apartement = $apartement;
  }

  /**
   * Get all records
   *
   * @return \Illuminate\Http\Response
   */

  public function get()
  {
    $apartements = $this->apartement->orderBy('number')->get();
    return new ApartementCollection($apartements);
  }

  /**
   * Store a newly created resource.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ApartementStoreRequest $request)
  {
    $apartement = new Apartement($request->all());
    $apartement->last_update_by = auth()->user()->name;
    $apartement->save();
    return response()->json(['apartementId' => $apartement->id]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Apartement $apartement
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function edit(Apartement $apartement)
  {
    return response()->json($this->apartement->find($apartement->id));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Apartement $apartement
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(Apartement $apartement, ApartementStoreRequest $request)
  {
    $apartement->last_update_by = auth()->user()->name;
    $apartement->update($request->all());
    return response()->json('successfully updated');
  }

  /**
   * Remove a specified resource.
   * 
   * @param  Apartement $apartement
   * @return \Illuminate\Http\Response
   */
  public function destroy(Apartement $apartement)
  {
    $apartement->delete();
    return response()->json('successfully deleted');
  }
}
