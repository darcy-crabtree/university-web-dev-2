<?php

namespace App\Http\Controllers;
use App\Models\Medication;
use App\Models\Effect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Laravel\Prompts\search;

class MedicationController extends Controller
{

    //(https://www.youtube.com/watch?v=R58XZ8pAXoE&t=449s) used as a guide to create the search facility within the index function. Accessed 13/11/24
    // (https://laravel.com/docs/11.x/pagination) used as a guide to create the pagination facility. Accessed: 11/11/24
    function index(){
        $medications = DB::table('medications')->paginate(4);

        if (request() ->has('search')){
            $medications= $medications->where('name','like', '%'.request()->get('search',"").'%');
        }
    
        return view('medications.index',['medications' => $medications]);
    }

    function create(){
        return view('medications.create');
    }

    function about(){
        return view('medications.about');
    }

    // (https://www.youtube.com/watch?v=cR10ZT1MJR4&t=338s) used as a guide to implement user input validation within the store function. Accessed 10/11/24.
    function store(Request $request){
        request()->validate([
            'name' => 'required|string|min:5|max:20',
            'contraindication' => 'required|string|min:2|max:3',
            'medication_interaction' => 'nullable|string|min:5|max:20'
        ]);
    $medication = new Medication();
    $medication->name = $request->name;
    $medication->contraindication = $request->contraindication;
    $medication->medication_interaction = $request->medication_interaction;
    $medication->save();
    $effects = $request->effects;
    $effects->name = $request->name;
    $medication->effects()->sync($effects);
    return redirect('/medications');
    }

    function show($id){
        $medication = Medication::find($id);
        return view('medications.show', ['medication' => $medication]);
    }

    function edit($id){
        $medication = Medication::find($id);
        return view('medications.edit', ['medication' => $medication]);
    }

    // (https://www.youtube.com/watch?v=cR10ZT1MJR4&t=338s) used as a guide to implement user input validation within the update function. Accessed 10/11/24.
    function update(Request $request){
        request()->validate([
            'name' => 'required|string|min:5|max:255',
            'contraindication' => 'required|string|min:2|max:3',
            'medication_interaction' => 'nullable|string|min:5|max:255'
        ]);
        $id = $request->id;
        $medication = Medication::find($id);
        $medication->name = $request->name;
		$medication->contraindication = $request->contraindication;
		$medication->medication_interaction = $request->medication_interaction;
        $medication->save();
        return redirect('/medications');
    }

    function destroy(Request $request){
        $id = $request->id;
        $medication = Medication::find($id);
        $medication->delete();
        return redirect('/medications');
    }

    function search(){

        $medications = DB::table('medications')->paginate(4);
        if (request() ->has('search')){
            $medications = $medications->where('name','like', '%'.request()->get('search',"").'%');
        }
        
        else{
            return "No result found";
        }
        return view('medications.search',['medications' => $medications]);
    }
}
