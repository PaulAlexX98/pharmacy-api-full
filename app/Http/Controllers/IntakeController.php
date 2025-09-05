<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientIntake;

class IntakeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:new_patient,transfer_patient',
            'first_name' => 'required|string|max:120',
            'last_name' => 'required|string|max:120',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:40',
            'email' => 'nullable|email',
            'address_line1' => 'nullable|string|max:200',
            'address_line2' => 'nullable|string|max:200',
            'city' => 'nullable|string|max:120',
            'postcode' => 'nullable|string|max:40',
            'nhs_number' => 'nullable|string|max:40',
            'current_pharmacy' => 'nullable|string|max:200',
            'notes' => 'nullable|string',
            'consent_signed' => 'boolean',
            'assessment' => 'nullable|array',
        ]);

        $row = PatientIntake::create($data);

        // return saved record for debugging
        return response()->json($row, 201);
    }
}
