<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestUser;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function create(){
        return view('adduser');
    }

    public function store(RequestUser $request){
        $this->user->addUser($request);
    }
    public function show(){
        $list = $this->user->list();
        return view('list',['list'=>$list]);
    }
    public function edit($id){
        $user = User::find($id);
        return view('edit',['user'=>$user]);
    }
    public  function update(Request $request , $id){
        $this->user->updateUser($request, $id);
    }

}
