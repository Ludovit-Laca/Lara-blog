<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            echo $user->mail . " " .$user->vek . " " . $user->updated_at."<br>";
        }
    }

    public function create()
    {
        $user = new User();
        $user->meno = str_random(5);
        $user->priezvisko = str_random(5);
        $user->heslo = bcrypt(str_random(5));
        $user->email = $user->meno . '.' . $user->priezvisko . '@gmail.com';
        $user->vek = mt_rand(1,80);
        $user->save();
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        echo $user->email."<br>";
        echo $user->meno . " " . $user->priezvisko."<br>";
        echo $user->vek."<br>";
        echo $user->updated_at;
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', "=", $id)->first();
        $user->update(["vek" => mt_rand(1,80)]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
