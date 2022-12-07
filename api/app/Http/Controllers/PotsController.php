<?php

namespace App\http\Controllers;


use App\Models\User;
use App\Models\Cabinet;
use App\Models\Pots;
use Illuminate\Http\Request;


class PotsController extends Controller
{
    protected $user, $cabinet, $pots;

    public function __construct(User $user, Cabinet $cabinet, Pots $pots)
    {
        $this->user = $user;
        $this->cabinet = $cabinet;
        $this->pots = $pots;
    }

    public function show($id)
    {
        return $this->pots->findOrFail($id);
    }

    
    public function store(Request $request)
    {
        $this->pots->create($request->all());
        return response()->json(['data'=>['message'=>'New Pots save']]);
    }

    public function update($id, Request $request)
    {
        $this->pots->findOrFail($id)->update($request->all());
        return response()->json(['data'=>['message'=>'Update '.$this->pots->id.' Cabinet']]);
    }
    public function destroy($id)
    {
        $this->pots->findOrFail($id)->delete();
        return response()->json(['data'=>['message'=>'Remove '.$this->pots->id.' Cabinet']]);
    }

}