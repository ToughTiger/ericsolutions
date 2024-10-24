<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function clinical_operation()
    {
        $title = 'Clinical Operations';
        $metaDescription = 'ERIC Provides its Healthcare Partners, Clinical Data Standardization Services since inception';
        return view('services/clinical_operation', compact('title', 'metaDescription'));

    }

    public function biostatistics()
    {
        return view('services/biostatistics');

    }

    public function clinical_data()
    {
        return view('services/clinical_data');

    }

    public function data_management()
    {
        return view('services/data_management');

    }

    public function medical_writing()
    {
        return view('services/medical_writing');
    }

    public function pharmacovigilance()
    {
        return view('services/pharmacovigilance');

    }

    public function etmf()
    {
        return view('services/etmf');

    }

    public function findById($id)
    {
        $data = Service::select('description', 'name')->where('id', $id)->get();
//       dd($data);
        return response()->json($data);
    }

}
