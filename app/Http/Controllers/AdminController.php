<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\basic_datas;
use DB;
class AdminController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); 
                  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin');
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
    public function edit($id)
    {
        $admin = admin::find($id);
        return view('cpanel.admin-edit',['admin' => $admin]);
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
        $admin = admin::find($id);

        $this->validate($request,[
            'name' => 'required|max:10',
            'email'      => 'required|email',

        ],[
            'name.required' => 'الرجاء ادخال الاسم ',
            'name.max' => 'يجب ان يكون الاسم اقل من 10 حرف',
            'email.required' => 'الرجاء ادخال البريد',
            'email.email'   => 'الرجاء ادخال بريد الكتروني صالح',

        ]);
        
        $old_password = $admin->password;
        $admin->name = $request['name'];
        $admin->email     = $request['email'];
        $admin->password = $request['password'] == '' ? $old_password : bcrypt($request['password']);

        $admin->save();
        
        $message = "تم التعديل بنجاح ";

        return redirect()->back()->with('status',$message);

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
