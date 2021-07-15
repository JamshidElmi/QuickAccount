<?php

namespace App\Http\Controllers;

use App\User;
use App\User_role;
use Illuminate\Http\Request;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $Roles = Role::all();
        return view('cms.admin.user.create')->with([
            'Roles'=>$Roles,
            'users'=>$users
        ]);
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

       if($request->isMethod('post')){
           $this->validate(
               $request, [
                   'first_name'=>'required|min:3',
                   'last_name'=>'required|min:3',
                   'email'=>'required|unique:users|email',
                   'phone_number'=>'required|min:10|max:13'
               ]
           );
//           dd($request->image);
            $role = Role::findOrFail(decrypt($request->Role));

            if($role== Null){
                return redirect()->back()->with(['error'=>'Role dose not exists in the Role table.']);
            }else{
                $newUser=new User();
                $newUser->first_name=$request->first_name;
                $newUser->last_name=$request->last_name;
                $newUser->email=$request->email;
                $newUser->phone_number=$request->phone_number;
                $newUser->password=bcrypt($request->password);

                $userImage=time().'-'.\Auth::user()->id.'-'.'rahmimistore'.'.'.$request->image->getClientOriginalExtension();
                $newUser->image='profileImages/'.$userImage;

                if($newUser->save()){
                    $request->image->move(public_path('profileImages/'), $userImage);
                    $newUser->roles()->attach($role);
                    return redirect()->back()->with(['save'=>'User created.']);
                }else{
                    return redirect()->back()->with(['error'=>'User creation faild.']);
                }
            }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
