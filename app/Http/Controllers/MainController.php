<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function checkout()
    {
        return view("checkout");
    }

    public function contactPage()
    {
        return view("contactPage");
    }

    public function productPage()
    {
        return view("productPage");
    }

    public function productPage2()
    {
        return view("productPage2");
    }

    public function productPage3()
    {
        return view("productPage3");
    }


    // SignUp and SignIn

    public function form()
    {
        return view("form");
    }

    public function SignIn()
    {
        return view('SignIn');
    }

    public function registerUser(Request $req)
    {

        $NewUser = new User();
        $NewUser->username = $req->input('username');
        $NewUser->email = $req->input('email');
        $NewUser->password = $req->input('pass');
        $NewUser->confirmPassword = $req->input('cnfrmpass');
        $NewUser->type = 'Customer';

        
        if($NewUser->save()){
            return redirect('/SignIn')->with('SuccessMessage', 'Congratulations! Your Account is Ready.');
        }
        return view('form');

    }

    public function LoginUser(Request $req)
    {

        $User = User::where('email', $req->input('email'))->first();

        if($User && Hash::check($req->input('pass'), $User->password)){
            session()->put('id', $User->id);
            session()->put('type', $User->type);

            if($User->type == 'Customer'){
                return redirect('/');
            }

        }else{
            return redirect('/SignIn')->with('ErrorMessage', 'Email or Password Incorrect.');
        }

    }
}
