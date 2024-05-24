<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Classes;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('admin.dataClass.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers = Trainer::all();
        return view('admin.dataClass.create', compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_trainers' => 'required|exists:tbl_trainers,id_trainers',
            'class_name' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $trainer = Trainer::findOrFail($request->id_trainers)->name;

        Classes::create([
            'id_trainers' => $request->id_trainers,
            'class_name' => $request->class_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.dataClass.index')->with('success', 'Data Class berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $class = Classes::findOrFail($id);
        $trainers = Trainer::all(); 
        return view('admin.dataClass.edit', compact('class', 'trainers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_trainers' => 'required|exists:tbl_trainers,id_trainers',
            'class_name' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
    
        $class = Classes::findOrFail($id);
        $class->update([
            'id_trainers' => $request->id_trainers,
            'class_name' => $request->class_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
    
        return redirect()->route('admin.dataClass.index')->with('success', 'Data Class berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();

        return redirect()->route('admin.dataClass.index')->with('success', 'Data Class berhasil dihapus.');
    }
}
