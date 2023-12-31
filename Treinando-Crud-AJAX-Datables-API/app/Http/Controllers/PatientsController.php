<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    protected $patients;

    public function __construct(Patients $patients)
    {
        $this->patients = $patients;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = $this->patients->all();
        dd($patients);
        $data = [
            'patients' => $patients,
        ];

        return view('admin.patients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Patients $patients)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patients $patients)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patients $patients)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patients $patients)
    {
    }
}
