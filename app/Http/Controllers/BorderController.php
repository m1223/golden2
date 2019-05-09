<?php

namespace App\Http\Controllers;

use App\border;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borders=border::latest()->get();
//        $c=border::count();
       return view('admin.border.index',compact('borders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.border.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator=validator::make($request->all(),[
        'name'=>'required',
        'father'=>'required',
        'mother'=>'required',
        'mobile'=>'required',
        'email'=>'required',
        'room'=>'required',
        'block'=>'required',
        'shift'=>'required',
        'semester'=>'required',
      ]);
      if ($validator->fails()){
          return redirect()->back()->with('error','something went wrong');
      }
      $input=$request->all();
      try
      {
          $border=border::create($input);
          return redirect()->route('border.index')->with('success','Successfully Add');
      }
      catch (\Exception $e)
      {
          return redirect()->route('border.create')->with('error','something went wrong');
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
        $borders=border::findOrFail($id);
        return view('admin.border.show',compact('borders'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $borders=border::findOrFail($id);
        return view('admin.border.edit',compact('borders'));
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
        $input=$request->all();
        $border=border::findOrFail($id);
        try
        {
            $border->update($input);
            return redirect()->route('border.index')->with('success','Update Done');
        }
        catch (\Exception $e)
        {
            return redirect()->route('border.create')->withInput()->with('error','Worng');
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
       $border=border::findOrFail($id);
       $border->delete();
       return redirect()->route('border.index')->with('success','Delete Done');
    }
    public function trash()
    {
        $borders=border::onlyTrashed()->latest()->get();
        return view('admin.trash.border_trash',compact('borders'));
    }
    public function restore($id)
    {
        $borders=border::withTrashed()->where('id',$id)->restore();
        return redirect()->route('border.index')->with('success','Border Restore');
    }
}
