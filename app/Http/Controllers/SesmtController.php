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

class SesmtController extends Controller
{

    public function index()
    {
        return view('sesmt.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'pergunta1' => 'required',
            'pergunta2' => 'required',
            'pergunta3' => 'required',
            'pergunta4' => 'required',
            'pergunta5' => 'required',
            'pergunta6' => 'required',
            'pergunta7' => 'required',

        ], [
            'pergunta1.required' => 'Esta pergunta é obrigatória',
            'pergunta2.required' => 'Esta pergunta é obrigatória',
            'pergunta3.required' => 'Esta pergunta é obrigatória',
            'pergunta4.required' => 'Esta pergunta é obrigatória',
            'pergunta5.required' => 'Esta pergunta é obrigatória',
            'pergunta6.required' => 'Esta pergunta é obrigatória',
            'pergunta7.required' => 'Esta pergunta é obrigatória',
        ]);

        //registrar quiz
        $quiz = new QuizModel();
        $quiz->usuario = "USER-QUIZ-SESMT-" . md5(time()); //gerar user automatico
        $quiz->save();
        $quiz_id = $quiz->id; //recuperar quiz_id

        if ($quiz_id) {
            //registrar pergunta1
            $Pergunta1 = new Pergunta1Model();
            $Pergunta1->quiz_id = $quiz_id;
            $Pergunta1->resposta = $this->get_dia_semana($request->pergunta1);
            $Pergunta1->save();
            //registrar pergunta2
            $Pergunta2 = new Pergunta2Model();
            $Pergunta2->quiz_id = $quiz_id;
            $Pergunta2->resposta = $this->get_dia_semana($request->pergunta2);
            $Pergunta2->save();
            //percorres os dados vindos do formulario, e registrar pergunta3
            foreach ($request->pergunta3 as $resposta) {
                $Pergunta3 = new Pergunta3Model();
                $Pergunta3->quiz_id = $quiz_id;
                $Pergunta3->resposta = $this->get_problema($resposta);
                $Pergunta3->save();
            }
            //percorres os dados vindos do formulario, e registrar pergunta4
            foreach ($request->pergunta4 as $resposta) {
                $Pergunta4 = new Pergunta4Model();
                $Pergunta4->quiz_id = $quiz_id;
                $Pergunta4->resposta = $this->get_problema($resposta);
                $Pergunta4->save();
            }
            //percorres os dados vindos do formulario, e registrar pergunta5
            foreach ($request->pergunta5 as $resposta) {
                $Pergunta5 = new Pergunta5Model();
                $Pergunta5->quiz_id = $quiz_id;
                $Pergunta5->resposta = $this->get_problema($resposta);
                $Pergunta5->save();
            }
            //percorres os dados vindos do formulario, e registrar pergunta6
            foreach ($request->pergunta6 as $resposta) {
                $Pergunta6 = new Pergunta6Model();
                $Pergunta6->quiz_id = $quiz_id;
                $Pergunta6->resposta = $this->get_problema($resposta);
                $Pergunta6->save();
            }
            //percorres os dados vindos do formulario, e registrar pergunta7
            foreach ($request->pergunta7 as $resposta) {
                $Pergunta7 = new Pergunta7Model();
                $Pergunta7->quiz_id = $quiz_id;
                $Pergunta7->resposta = $this->get_problema($resposta);
                $Pergunta7->save();
            }
        } else {
            dd('Error:Não foi possivel Registrar , tente novamente mais Tarde!');
        }
        return redirect('sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function success()
    {
        return view('sesmt.success');
    }
    private function get_dia_semana($data)
    {
        switch ($data) {
            case 1:
                return 'Entre :  1 - 2  Horas';
                break;
            case 2:
                return 'Entre :  2 - 3 Horas';
                break;
            case 3:
                return 'Entre :  3 - 4 Horas';
                break;
            case 4:
                return 'Entre :  4 - 5 Horas';
                break;
            case 5:
                return 'Entre :  5 - ou mais';
                break;
        }
    }

    private function get_problema($data)
    {
        switch ($data) {
            case 1:
                return 'Pescoço';
                break;
            case 2:
                return 'Ombros';
                break;
            case 3:
                return 'Cotovelos';
                break;
            case 4:
                return 'Antebraços';
                break;
            case 5:
                return 'Punhos / Mãos / Dedos';
                break;
            case 6:
                return 'Parte Superior das costas';
                break;
            case 7:
                return 'Parte Inferior das costas';
                break;
            case 8:
                return 'Quadril / coxas';
                break;
            case 9:
                return 'Joelhos';
                break;
            case 10:
                return 'Tornozelos / Pés';
                break;
            case 11:
                return 'Cabeça';
                break;
        }
    }
}
