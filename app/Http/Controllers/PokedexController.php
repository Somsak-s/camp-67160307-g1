<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
      public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }
    // ฟอร์มเพิ่มข้อมูล
    public function create()
    {
        return view('pokedex.create');
    }
 // บันทึกข้อมูล (CREATE)
      public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect('/pokedex');
    }
     // ฟอร์มแก้ไข
      public function edit($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedex.edit', compact('pokedex'));
    }
     public function update(Request $request, $id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());
        return redirect('/pokedex');
    }
     // ลบข้อมูล (DELETE)
    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect('/pokedex');
    }
}
