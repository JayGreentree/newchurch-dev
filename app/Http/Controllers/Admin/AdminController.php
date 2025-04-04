<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;


// let me try using this auth property
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        // // this one is chatgpt example.
        // if (!auth()->check()) {
        //     return redirect()->route('login')->with('error', 'You must log in first');
        // }
        $contact = Contact::all();
        $totalMembers = Contact::count();


        return view('admin.admin', ['contact' => $contacts, 'totalMembers' => $totalMembers]);
    }


    public function add()
    {

        return view('admin.login');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);



        $admin = Admin::create($validatedData);

        return redirect()->route('newadmin.index')
            ->with('success', 'New admin created successfully.');
    }

    // // to authenticate admins logging in.
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials, $request->boolean('remember'))) {
    //         $request->session()->regenerate();

    //         return redirect()->intended(route('admin.dashboard'));
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin && $credentials['password'] === $admin->password) {
            Auth::guard('admin')->login($admin, $request->filled('remember'));
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
