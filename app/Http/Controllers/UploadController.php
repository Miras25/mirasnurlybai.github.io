<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class UploadController extends Controller
{
    public function index() {

        return view('form');
    }

    public function store(Request $request){
        $form = new Registration();

        $form->name = $request->input('name');
        $form->surname = $request->input('surname');
        $form->email = $request->input('email');
       
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/form/', $filename);
            $form->photo = $filename;
        } else{
            return $request;
            $form->photo = '';
        }
        
        $form->save();

        return view('form')->with('form', $form);
    }
}
