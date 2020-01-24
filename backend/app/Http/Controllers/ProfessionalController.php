<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Technology;

class ProfessionalController extends Controller
{
    public function listProfessionals(Request $request) {
        $listProfessionals = Professional::find(1);
        return response()->json($listProfessionals->technologies);
    }

    public function createProfessional(Request $request) {
        $technologyID = $request->technology;
        $newProfessional = new Professional();
        $newProfessional->name = $request->name;
        $newProfessional->github = $request->github;        
        $result = $newProfessional->save();
        $technology = Technology::find($technologyID);
        if($technology) {
            $technology->professionals()->attach($newProfessional->id);
        } else {
            return response()->json(["error"=>"O id da tecnologia não existe"]);
        }
    
        return response()->json($newProfessional);
    }
}
