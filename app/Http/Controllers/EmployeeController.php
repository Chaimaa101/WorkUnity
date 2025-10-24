<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
    
        return view('home', ['employees' => $employees]);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.add");
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $info = $request->validate([
        'firstName'   => ['required', 'string', 'min:3', 'max:255'],
        'lastName'    => ['required', 'string', 'min:3', 'max:255'],
        'email'       => ['required', 'email', 'unique:employees,email'],
        'birthDate'   => ['required', 'date'],
        'phoneNumber' => ['required', 'string', 'max:20'],
        'job'         => ['required', 'string', 'min:3', 'max:255'],
        'salary'      => ['required', 'numeric', 'min:0'],
        'image'       => ['nullable', 'file', 'mimes:png,jpg'],
    ]);

    // handle upload
    if ($request->hasFile('image')) {
        $info['image'] = $request->file('image')->store('profiles', 'public');
    }

    Employee::create($info);        

    return redirect()->route('home')->with('success', 'Employé créer.');
}

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view("pages.details",['employee' => $employee ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view("pages.update",['employee' => $employee ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
         $info = $request->validate([
        'firstName'   => ['required', 'string', 'min:3', 'max:255'],
        'lastName'    => ['required', 'string', 'min:3', 'max:255'],
        'email'       => ['required'],
        'birthDate'   => ['required', 'date'],
        'phoneNumber' => ['required', 'string', 'max:20'],
        'job'         => ['required', 'string', 'min:3', 'max:255'],
        'salary'      => ['required', 'numeric', 'min:0'],
        'image'       => ['nullable', 'file', 'max:3000', 'mimes:png,jpg'],
    ]);

    if ($request->hasFile('image')) {
        $info['image'] = $request->file('image')->store('profiles', 'public');
    }

    $employee->update($info);        

    return redirect()->route('home')->with('success', 'Employé modifier.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
         if($employee->image){
            Storage::disk('public')->delete($employee->image);
        }
        $employee->delete();
        return redirect()->route('home')->with('success', 'Employé supprimer.');
        
    }
}
