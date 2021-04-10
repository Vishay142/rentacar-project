<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = $request->validate([
                'first_name' => 'min:2',
                'last_name' => 'min:2',
                'email' => 'max:255',
                'adress' => 'max:255',
                'zip_code' => 'max:6',
                'city' => 'max:55',
                'phone_number' => 'max:10',
//                'birth' => 'date'
            ]);
        }

        if($user) {
            $user->name = $request['first_name'];
            $user->name = $request['last_name'];
            $user->email = $request['email'];
            $user->adress = $request['adress'];
            $user->zip_code = $request['zip_code'];
            $user->city = $request['city'];
            $user->phone_number = $request['phone_number'];
//            $user->date = $request['date'];


//            dd($user);
           $user->save();

            return redirect()->back();
        } else{
            return  redirect()->back();
        }
    }

    public function profile($id)
    {
        $user = User::find($id);

        if($user){
            return view('user.profile')->withUser($user);
        }else{
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
