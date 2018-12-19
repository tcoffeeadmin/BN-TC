<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


use Auth;
use App\Foods;
use Session;
class AdminController extends Controller
{
	public function __construct()
    {
       // return 'hello';
    }

    public function user1()
    {
    	return view('Admin.users');
    }

    public function orders()
    {
        
    	return view('Admin.orders');
    }
    public function fooditems()
    {
        $food = DB::table('foods')->get();
 
    	return view('Admin.foods',['foods' => $food]);
    }

    public function addfood()
    {
    	return view('Admin.add_food');
    }

    public function dashboard()
    {
        return view('home');
    }
    public function foodadd(Request $request)
    {
        $this->validate($request,[

            'code' => 'required|unique:foods',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'gst' => 'required|integer',
            'image' => 'required'
        ]);

        $foods = new Foods;

        $foods->code = $request->input('code');
        $foods->name = $request->input('name');
        $foods->description = $request->input('description');
        $foods->price = $request->input('price');
        $foods->gst = $request->input('gst');

                if(Input::hasFile('image'))
                {
                    $file = Input::file('image');
                    $file->move(public_path().'/uploads/',$file->getClientOriginalName());
                    $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();

                    $foods->image = $url;
                }
                
        $foods->save();
        return redirect('/addfoodpage')->with('response','Food Added Successfully');
    }

    public function food_edit($id)
    {
        $edit_food = DB::table('foods')->where('id', $id)->get();
        return view('Admin.edit_food',['editfoods' => $edit_food]);

    }

    public function update_biryani(Request $request)
    {
        $this->validate($request,[

            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'gst' => 'required|integer',
            'item_id' => 'required|integer'  ]);


            $foods = new Foods;
            $item_id = $request->input('item_id');
            $updateDetails=array(
                                    'code' => $request->input('code'),
                                    'name' => $request->input('name'),
                                    'description' => $request->input('description'),
                                    'price' => $request->input('price'),
                                    'gst' => $request->input('gst')

                                );

                                   DB::table('foods')
                                    ->where('id', $request->input('item_id'))
                                    ->update($updateDetails);


      

                if(Input::hasFile('image'))
                {

                    $file = Input::file('image');
                    $file->move(public_path().'/uploads/',$file->getClientOriginalName());
                    $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();


                    $updateDetails=array(
                                    'image' => $url
                                  );

                    DB::table('foods')
                        ->where('id', $request->input('item_id'))
                        ->update($updateDetails);

                    $foods->image = $url;
                }
          
        return redirect('/addfoodpage')->with('response','Food Updated Successfully');
    }


    public function delete_food($id)
    {
        DB::table('foods')->where('id', $id)->delete();
       
        $food = DB::table('foods')->get();
        return view('Admin.foods',['foods' => $food]);


    }

   
}
