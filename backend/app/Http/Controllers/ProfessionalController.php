<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;

class ProfessionalController extends Controller
{
    public function listProfessionals(Request $request) {
        $listProfessionals = Professional::all();
        return response()->json($listProfessionals);
    }

    public function createProfessional(Request $request) {
        $newProfessional = new Professional();
        $newProfessional->name = $request->name;
        $newProfessional->github = $request->github;
        $result = $newProfessional->save();

        return response()->json($newProfessional);
    }
}
