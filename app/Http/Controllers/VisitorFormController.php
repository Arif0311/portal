<?php

namespace App\Http\Controllers;

use App\Models\VisitorForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use DB;

class VisitorFormController extends Controller
{
    public function index()
    {
        $datas = VisitorForm::all();
        return view('dataVisitor', compact('datas'));
    }


    public function create()
    {
        $datas = new VisitorForm;
        return view('CreateVisitor', compact('datas'));
    }


    public function store(Request $request)
    {
        DB::table('visitor_forms')->insert([
            'visitor_name' => $request->visitor_name,
            'visitor_email' => $request->visitor_email,
            'visitor_information' => $request->visitor_information,
            'visitor_mobile_number' => $request->visitor_mobile_number,
            'reason_for_visit' => $request->reason_for_visit,
            'person_visiting' => $request->person_visiting,
            'body_temperature' => $request->body_temperature,
            'visitor_access_card' => $request->visitor_access_card,
            'date_in_visitor' => $request->date_in_visitor,
            'time_out' => $request->time_out,
            'description' => $request->description,
            'photo' => $request->file('photo')->store('post-photo')
        ]);

        return view('CreateVisitor')->with('success', 'Insert Data Successfully!');
    }


    public function edit($id)
    {
        $datas = VisitorForm::find($id);
        return view('EditVisitor', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $datas = VisitorForm::find($id);
        $datas->visitor_name = $request->visitor_name;
        $datas->visitor_email = $request->visitor_email;
        $datas->visitor_information = $request->visitor_information;
        $datas->visitor_mobile_number = $request->visitor_mobile_number;
        $datas->reason_for_visit = $request->reason_for_visit;
        $datas->person_visiting = $request->person_visiting;
        $datas->body_temperature = $request->body_temperature;
        $datas->visitor_access_card = $request->visitor_access_card;
        $datas->time_out = $request->time_out;
        $datas->description = $request->description;
        // if ($request->file('photo')){
        //     if ($request->oldPhoto){
        //         Storage::delete($request->oldPhoto);
        //     }
        // }
        // $datas->photo = $request->file('photo')->store('post-photo');
        $datas->save();

        return redirect()->route('dataVisitor');
    }

    public function destroy($id)
    {
        $datas = VisitorForm::find($id)->delete();
        return redirect()->route('dataVisitor');
    }

    public function checkout($id)
    {
        $datas = VisitorForm::find($id);
        return view('checkoutVisitor', compact('datas'));
    }
}