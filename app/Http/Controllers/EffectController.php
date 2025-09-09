<?php

namespace App\Http\Controllers;

use App\Models\Effect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EffectController extends Controller
{
    function index(){
        $effects = DB::table('effects')->paginate(4);
        return view('effects.index',['effects' => $effects]);
    }

    function effects() {
        return view('effects.index');
    }

    function show($id){
        $effect = Effect::find($id);
        return view('effects.show', ['effect' => $effect]);
    }

    function store(Request $request){
        request()->validate([
            'name' => 'required|string|min:5|max:255',
            'description' => 'nullable|string|max:255',
            'url' => 'nullable|string|min:5|max:255'
        ]);
        $effect = new Effect();
        $effect->name = $request->name;
        $effect->description = $request->description;
        $effect->url = $request->url;
        $effect->save();
        return redirect('/effects');
    }

    function edit($id){
        $effect = Effect::find($id);
        return view('effects.edit', ['effect' => $effect]);
    }

    function update(Request $request){
        request()->validate([
            'name' => 'required|string|min:5|max:255',
            'description' => 'nullable|string|max:255',
            'url' => 'nullable|string|min:5|max:255'
        ]);
        $id = $request->id;
        $effect = Effect::find($id);
        $effect->name = $request->name;
		$effect->description = $request->description;
		$effect->url = $request->url;
        $effect->save();
        return redirect('/effects');
    }

    function destroy(Request $request){
        $id = $request->id;
        $effect = Effect::find($id);
        $effect->delete();
        return redirect('/effects');
    }
}
