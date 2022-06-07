<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //protected  $table = "";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addUser($request){
        User::create([
            'email'=> (string) $request->input('mail_address'),
            'password'=> (string)bcrypt( $request->input('password')),
            'name'=> (string) $request->input('name'),

        ]);
        return true;
    }
    public function list(){
        return User::orderBy('id','asc')->paginate(20);
    }
    public function updateUser( $request,$id){
        $news = User::find($id);
        $news->email = $request->email;
        $news->name = $request->name;
        if($request->password !=''){
            $news->password = bcrypt($request->password);
       }
       $news->save();
    }

}
