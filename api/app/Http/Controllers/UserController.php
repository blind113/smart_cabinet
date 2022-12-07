<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return $this->user->paginate(10);
    }

    /** TODO:
     *  Validation and encrypt password
     */
    public function store(Request $request)
    {
        $this->user->create($request->all());
        return response()->json(['data'=>['message' => 'Salvo']]);
    }

    public function show($id)
    {
        return $this->user->findOrFail($id);
    }

    public function destroy($id)
    {
        $this->user->findOfFail($id)->delete();

        return response()->json(['data'=>['message'=>'Usuario removido ']]);
    }

    public function update($id, Request $request)
    {
        $this->user->findOrFail($id)->update($request->all());
        return response()->json(['data'=>['message'=>'Usuario Atualizado']]);
    }


}