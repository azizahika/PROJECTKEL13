<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychologist;
use App\Models\Consultation;
use App\Models\MedicalRecord;
use Illuminate\Support\Facades\Auth;

class PsychologistController extends Controller
{
    public function viewConsultations()
    {
        $psychologist = Auth::user();

        $consultations = Consultation::where('psychologist_id', $psychologist->id)->get();

        return view('psychologist.consultation', compact('consultations'));
    }

    public function createMedicalRecord(Request $request)
    {
        $psychologist = Auth::user();

        $consultation = Consultation::find($request->consultation_id);

        $medicalRecord = MedicalRecord::create([
            'user_id' => $consultation->user_id,
            'psychologist_id' => $psychologist->id,
            'diagnosis' => $request->diagnosis,
            'treatment_notes' => $request->treatment_notes,
            'evaluation_results' => $request->evaluation_results,
        ]);

        return redirect()->back()->with('success', 'Rekam medis berhasil dibuat');
    }

    public function manageCommunication(Request $request)
    {
        // Proses komunikasi dengan pengguna melalui chat
    }
}
