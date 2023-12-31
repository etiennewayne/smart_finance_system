<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AllotmentClass;

class AllotmentClassController extends Controller
{
    //

    public function index(){
        return view('administrator.allotment.allotment-class');
    }

    public function getData(Request $req){
        $sort = explode('.', $req->sort_by);

        return AllotmentClass::where('allotment_class', 'like', '%'. $req->allotment . '%')
            ->orderBy($sort[0], $sort[1])
            ->paginate($req->perpage);
    }

    public function show($id){
        return AllotmentClass::find($id);
    }


    public function store(Request $req){

        $req->validate([
            'allotment_class' => ['required', 'unique:allotment_classes']
        ]);

        AllotmentClass::create([
            'allotment_class' => strtoupper($req->allotment_class)
        ]);


        return response()->json([
            'status' => 'saved'
        ], 200);
    }

    public function update(Request $req, $id){

        $req->validate([
            'allotment_class' => ['required', 'unique:allotment_classes,allotment_class,' .$id. ',allotment_class_id']
        ]);

        $data = AllotmentClass::find($id);
        $data->allotment_class = strtoupper($req->allotment_class);
        $data->save();

        return response()->json([
            'status' => 'updated'
        ], 200);
    }



    public function destroy($id){
        AllotmentClass::destroy($id);

        return response()->json([
            'status' => 'deleted'
        ], 200);
    }

}
