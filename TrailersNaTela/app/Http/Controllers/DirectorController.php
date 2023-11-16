<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use App\Models\Director;
use App\Traits\Common;

class DirectorController extends Controller
{
    use Common;
    protected $director;

    public function __construct(Director $director)
    {
        $this->director = $director;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = $this->director->paginate(20);

        $data = [
            'directors' => $directors,
            'scripts' => [
                '/assets/js/admin/director/index.js',
            ],
        ];

        return view('admin.director.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'scripts' => [
                '/assets/js/admin/director/index.js',
            ],
        ];

        return view('admin.director.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDirectorRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest = $this->sanitizeDoctorData($validatedRequest);

        $director = $this->director->create($validatedRequest);

        return redirect()->route('directors.index')->with('success', 'Diretor cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        $data = [
            'director' => $director,
            'scripts' => [
                '/assets/js/admin/director/index.js',
            ],
        ];

        return view('admin.director.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
        $validatedRequest = $request->validated();
        $validatedRequest = $this->sanitizeDoctorData($validatedRequest);

        $director->update($validatedRequest);

        return redirect()->route('directors.index')->with('success', 'Diretor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        $director->delete();

        return response()->json(['success' => 'Diretor deletado com sucesso!']);
    }

    private function sanitizeDoctorData($data)
    {
        $phone = $this->sanitizePhone($data['phone']);
        $cpf = $this->sanitizeCpfCnpj($data['cpf']);
        $zipcode = $this->sanitizeZipcode($data['zipcode']);

        $data['phone'] = $phone;
        $data['cpf'] = $cpf;
        $data['zipcode'] = $zipcode;

        return $data;
    }
}
