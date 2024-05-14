<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['return_login_view','logininto']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function return_login_view(Request $request){
        if(Auth::check()){
            return redirect()->intended('home');
        }
        else{
            return view('login');
        }
      
    
        
    } 
    public function logininto(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate('your_session', 'your message');
 
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function home(){
        if(Auth::check()){
            $data=User::get();
            return view('home',compact('data'));
        }
        else{
            return redirect()->intended('login');
            }
    }



    public function logout(Request $request){

            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/');
    } 
   
    public function addNewAdminModerator(Request $request){ 
        if(Auth::User()->type == 1){
      return view('addNewAdminModerator');
     } 
        else {
        return redirect()->intended('home');
        }
    }

    public function addnewuser(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email','unique:users'],
            'password' => ['required','min:8'],
            'name'=>['required'],
            'type'=>['required']
        ]);
        
        if($credentials){
             User::create([
                'name' => $request->name,
                'email' => $request->email,
                'type'=> $request->type,
                'password' => Hash::make( $request->password)
            ]);
            return redirect()->back()->with('success', 'Successful Added'); 
        }
        else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
         } 
    }
    public function removeUsersView(Request $request){
        if(Auth::User()->type==1){
        $data=User::get();
        return view('removeUsersView',compact('data'));
        }
        else{
            return redirect()->intended('home');
            }
    
    }  
    
    public function deleteuser(Request $request){
        $user = User::find($request->id);    
        $user->forceDelete();
        return redirect()->back()->with('success', 'Successful removed'); 
    }
} 