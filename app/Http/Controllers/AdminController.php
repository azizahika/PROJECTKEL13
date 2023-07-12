<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psychologist;
use App\Models\Consultation;
use App\Models\Questionnaire;
use App\Models\UserQuestionnaire;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function managePsychologists(Request $request)
    {
        $psychologists = Psychologist::all();

        return view('admin.psychologists', compact('psychologists'));
    }

    public function manageConsultations(Request $request)
    {
        $consultations = Consultation::all();

        return view('admin.consultations', compact('consultations'));
    }

    public function manageQuestionnaires(Request $request)
    {
        $questionnaires = Questionnaire::all();

        return view('admin.questionnaires', compact('questionnaires'));
    }

    public function manageQuestionnaireResults(Request $request)
    {
        $results = UserQuestionnaire::all();

        return view('admin.questionnaire_results', compact('results'));
    }
}
