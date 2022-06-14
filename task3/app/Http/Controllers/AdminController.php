<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function dash(){
        return view('Admin.dash');
    }

    public function adminCreate(){
        return view('Admin.registration');
    }
    public function adminCreateSubmit(Request $request){

        $validate = $request->validate([
            'username'=>'required|min:5',
            'password'=>'required|min:8|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{5,20}$/',
        ],
        ['password.regex'=>"Please use atleast 1 uppercase, 1 lowercase, 1 special charactee, 1 number"]
    );
    $rating = 0;
    $ErrorMsg = "User name doesn't exist";


    $userCheck = Admin::where('username',$request->username)->first();
    if($userCheck){

        return redirect()->back()->with('failed', 'Username already exist');
    }
    else{

      $customer = new Admin();

        $customer->username = $request->username;

        $customer->password = $request->password;

        $result = $customer->save();
        if($result){
           // $image->storeAs('public/images',$nameImage);
            return redirect()->back()->with('success', 'Registration Done successfully');
        }
        else{
            return redirect()->back()->with('failed', 'Registration Failed');
        }
    }

    }

    public function adminLoginSubmit(Request $request){
        $validate = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]
    );
    $loginCheck = Admin::where('username',$request->username)->where('password',$request->password)->first();
    if($loginCheck){
        $request->session()->put('username',$loginCheck->username);
        return  redirect()->route('dashadmin');
    }
    else{
        return redirect()->back()->with('failed', 'Invalid user');
    }
    }
    public function logout(){
        session()->forget('username');
        return redirect()->route('adminLogin');
    }

    public function userList(){
        $customers = Customer::all();
        return view('Admin.userList')->with('customers', $customers);
    }
    public function userEdit(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        return view('Admin.edit')->with('customer', $customer);

    }
    public function userEditSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'dob'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'email'
            
        ],
        ['name.required'=>"Please put you name here"]
    );

        $user = Customer::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('userList');

    }
}
