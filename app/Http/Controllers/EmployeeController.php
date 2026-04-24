<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom'=>'required|string|min:3',
            'email'=>'required|email|unique:employees',
            'poste'=>'required|string',
            'salaire'=>'required|numeric',
            'statut'=>'required'
        ]);

        $employee = new Employee([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'poste'=>$request->poste,
            'salaire'=>$request->salaire,
            'statut'=>$request->statut
        ]);
        $employee->save();
        return redirect()->route('employee.index')->with('success','Ajout réussi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Employe supprimé avec succès');
    }


    public function changeStatut($id){
        $employee = Employee::findOrFail($id);
        $employee->statut = ($employee->statut == 'actif') ? 'inactif' : 'actif';
        $employee->save();
        
        return back();
    }


    public function Filtrer(Request $request){
        $query = Employee::query();

        if($request->has('nom') && $request->nom !=""){
            $query->where('nom','like','%'.$request->nom.'%');
        }
        $employees = $query->get();
        
        return view('employees.index', compact('employees'));
    }
}
