<?php

namespace App\Http\Controllers\Api;

use App\Beer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class BeerController extends Controller
{
    public function index(){

        $beers = Beer::all();

        return response()->json($beers, Response::HTTP_OK);
    }

    public function store(Request $request){

        $beer = Beer::create($request->all());

        return response()->json($beer, Response::HTTP_CREATED);
    }

    public function show(Beer $beer){

        return $beer;

    }

    public function update(Request $request, $id){

        Beer::findOrFail($id)->update($request->all());

        return response()->noContent();

    }

    public function destroy($id){

        Beer::findOrFail($id)->delete();

        return response()->noContent();
    }
}
