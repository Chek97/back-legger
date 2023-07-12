<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    //
    public function store(Request $request){

        $lead = new Lead();

        $lead->name = $request->name;
        $lead->nit = $request->nit;
        $lead->point_name = $request->pointName;
        $lead->team_name = $request->teamName;
        $lead->city = $request->city;
        $lead->promotor = $request->promotor;
        $lead->rtc = $request->rtc;
        $lead->captain = $request->captain;
        $lead->terms = $request->terms;
        $lead->ip = $request->ip;

        $status = $lead->save();
        if($status){
            return response()->json(
                ["ok" => true, "message" => "El lead fue agregado con exito"],
                200
            );
        }else{
            return response()->json(
                ["ok" => false, "message" => "No fue posible guardar el lead, intentelo de nuevo"],
                400
            );
        }
    }

    public function download(){

    }
}
