<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use DB;
use Session;
// use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $users = User::all();

        // TO DO! Make the pagination not so Botstrap fix CSS
        $users = User::orderBy('id', 'desc')->paginate(4);
        return view('manage.users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.users.create');
        
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // The array withe the saved user 
        //is shown on page so ti stores
        // dd($request->all());
        // $name = $request->input('user.name');
         // $name = $request->input('name');
         // $input = $request->all();




        //=========================================================================
            
            // When to store the user and password in DB
            // failiur shows
            // with the has Request::password?????????????????????????????

        // Because session() isn't a static method. You can use the global request helper though:
       // $validationCode = request()->session()->get('validation_code', '');

        //=========================================================================

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users'
        ]);

       //  if (Request::has('password') && !empty($request->password)) {
       //      $password = trim ($request->password);
       //  }else {
       //      //set manual password
       //      $lenght = 10;
       //      $keyspace = '123456789abcdefghijklmnopqrstuvxyz ABCDEFGHIJKLMNOPQRSTUVXYZ';
       //      $str ='';
       //      $max = mb_strlen($keyspace, '8bit') - 1;
       //      for ($i = 0; $i < $lenght; ++$i) { 
       //          $str .= $keyspace[random_int(0, $max)];
       //      }

       //      $password = $str;
       //  }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        //  THIS HAS::make dosent work?????????????????
        // $user->password =  Hash::make($password);
        $user->save();

       if ($user->save()) {
           return redirect()->route('users.show', $user->id);
       }else{
        
        Session::flash('danger', 'Sorrry a problem has occured whille creating a new user');
        return redirect()->route('users.create');

       }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('manage.users.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
    

       //  $this->validate($request, [
       //       'name' => 'required|max:255',
       //      'email' => 'required|email|unique:users,email,'.$id
       //  ]);
       //  $user = User::findOrFail($id);
       //  $user->name = $request->name;
       //  $user->email = $request->email;
       //  if ($request->password_options == 'auto') {
       //      $lenght = 10;
       //      $keyspace = '123456789abcdefghijklmnopqrstuvxyz ABCDEFGHIJKLMNOPQRSTUVXYZ';
       //      $str ='';
       //      $max = mb_strlen($keyspace, '8bit') - 1;
       //      for ($i = 0; $i < $lenght; ++$i) { 
       //          $str .= $keyspace[random_int(0, $max)];
       //      }
       //      $password = $str;
       //  }elseif ($request->password_options == 'manual') {
       //      $user->password = Has::make($request->password);

       //  }

       //  if ($user->save()) {
       //     return redirect()->route('user.show', $id);
       // }else{
       //  Session::flash('danger', 'Sorrry a problem has occured whille updating user info to database');
       //  return redirect()->route('users.edit', $id);
       //  }
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
