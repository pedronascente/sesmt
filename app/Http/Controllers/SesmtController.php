<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesmtController extends Controller
{

    public function index()
    {
        return view('sesmt.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        //return redirect('/success');

        var_dump($request->request);

        dd($request->request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
                return 'pescoco';
                break;
            case 2:
                return 'ombros';
                break;
            case 3:
                return 'cotovelos';
                break;
            case 4:
                return 'antebracos';
                break;
            case 5:
                return 'punhos_maos_dedos';
                break;
            case 6:
                return 'parte_superior_das_costas';
                break;
            case 7:
                return 'parte_Inferior_das_costas';
                break;
            case 8:
                return 'quadril_coxas';
                break;
            case 9:
                return 'Joelhos';
                break;
            case 10:
                return 'tornozelos_pes';
                break;
            case 11:
                return 'cabeca';
                break;
        }
    }
}
