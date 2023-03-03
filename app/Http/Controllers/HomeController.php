<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizModel;
use App\Models\Pergunta1Model;
use App\Models\Pergunta2Model;
use App\Models\Pergunta3Model;
use App\Models\Pergunta4Model;
use App\Models\Pergunta5Model;
use App\Models\Pergunta6Model;
use App\Models\Pergunta7Model;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quiz = QuizModel::get();
        $total_respostas = $quiz->count('id');
        $pergunta1 = Pergunta1Model::select(Pergunta1Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta2 = Pergunta2Model::select(Pergunta2Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta3 = Pergunta3Model::select(Pergunta3Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta4 = Pergunta4Model::select(Pergunta4Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta5 = Pergunta5Model::select(Pergunta5Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta6 = Pergunta6Model::select(Pergunta6Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();
        $pergunta7 = Pergunta7Model::select(Pergunta7Model::raw('count(id) as total , resposta'))
            ->groupBy('resposta')
            ->orderBy('resposta', 'asc')
            ->get();

        return view('home', [
            'total_respostas' => $total_respostas,
            'array_pergunta1' => $pergunta1,
            'array_pergunta2' => $pergunta2,
            'array_pergunta3' => $pergunta3,
            'array_pergunta4' => $pergunta4,
            'array_pergunta5' => $pergunta5,
            'array_pergunta6' => $pergunta6,
            'array_pergunta7' => $pergunta7,
        ]);
    }
}
