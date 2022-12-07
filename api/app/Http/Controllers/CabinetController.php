<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\User;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    protected $cabinet;
    protected $user;
    
    public function __construct(Cabinet $cabinet, User $user)
    {
        $this->cabinet = $cabinet;
        $this->user = $user;

    }
    public function showByUserId($user_id)
    {
        return $this->cabinet->where('user_id', $user_id)->paginate(10);
    }
    
    public function show($id)
    {
        return $this->cabinet->findOrFail($id);
    }

    public function store(Request $request)
    {
        $this->cabinet->create($request->all());
        return response()->json(['data'=>['message'=>'New Cabinet save']]);
    }

    public function update($id, Request $request)
    {
        $this->cabinet->findOrFail($id)->update($request->all());
        return response()->json(['data'=>['message'=>'Update '.$this->cabinet->id.' Cabinet']]);
    }
    public function destroy($id)
    {
        $this->cabinet->findOrFail($id)->delete();
        return response()->json(['data'=>['message'=>'Remove '.$this->cabinet->id.' Cabinet']]);
    }
}