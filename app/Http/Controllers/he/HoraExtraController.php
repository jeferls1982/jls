<?php

namespace jlsonline\Http\Controllers\he;

use Illuminate\Http\Request;
use jlsonline\Http\Controllers\Controller;
use jlsonline\models\he\TotalHoras;
use jlsonline\models\he\HoraPaga as HoraPaga;

class HoraExtraController extends Controller {

    private $totalHoras, $horaPaga;

    function __construct(TotalHoras $totalHoras) {
        $this->totalHoras = $totalHoras;
        $this->horaPaga = new HoraPaga();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if (auth()->check()) {
            $totalHoras = $this->totalHoras->where('user_id', auth()->id())->first();
            $relatorios = $this->horaPaga->where('user_id', auth()->id())->orderBy('data', 'desc')->get();
            $horas = json_decode($this->getDados($relatorios));
            
            return view('sites.hora-extra.home', compact('horas', 'relatorios','totalHoras'));
        } else {
            return redirect('/login');
        }
    }

    public function getDados($relatorios) {
        $totalHoras = $this->totalHoras->where('user_id', auth()->id())->first();
        $horasPagas = $this->somaHoras($relatorios);
        if ($totalHoras) {
            $qtdHoras = $totalHoras->totalHoras;
        } else {
            $qtdHoras = '0:0:0';
            $horasPagas = '0:0:0';
        }
        $horasFaltantes = $this->calculaTempo($horasPagas, $qtdHoras);
        $array = [];
        $array['total'] = intval($qtdHoras);
        $array['pagas'] = intval($horasPagas);
        $array['faltantes'] = intval($horasFaltantes);

        return json_encode($array);
    }
    
    public function getDadosGrafico() {
        $relatorios = $this->horaPaga->where('user_id', auth()->id())->orderBy('data', 'desc')->get();
        return response()->json(json_decode($this->getDados($relatorios)));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $totalHoras = new TotalHoras($request->all());
        $totalHoras->totalHoras = $request->totalHoras . ':0:0';
        $totalHoras->save();
        return redirect('/he');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $totalHoras = $this->totalHoras->find($id);       
        $totalHoras->totalHoras = $request->totalHoras . ':0:0';
        $totalHoras->update();
        return redirect('/he');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->horaPaga->destroy($id);
        return redirect('/he');
    }

    public function addPagamento(Request $request) {
        $horasPagas = new HoraPaga($request->all());
        $horasPagas->user_id = auth()->id();
        $horasPagas->total = $this->calculaTempo($request->inicio, $request->fim);

        $horasPagas->save();
        return redirect('/he');
    }

    function calculaTempo($hora_inicial, $hora_final) {
        $i = 1;
        $tempo_total;

        $tempos = array($hora_final, $hora_inicial);

        foreach ($tempos as $tempo) {
            $segundos = 0;

            list($h, $m, $s) = explode(':', $tempo);

            $segundos += $h * 3600;
            $segundos += $m * 60;
            $segundos += $s;

            $tempo_total[$i] = $segundos;

            $i++;
        }
        $segundos = $tempo_total[1] - $tempo_total[2];

        $horas = floor($segundos / 3600);
        $segundos -= $horas * 3600;
        $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
        $segundos -= $minutos * 60;
        $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

        return "$horas:$minutos:$segundos";
    }

    public function somaHoras($horasPagas) {
        $tempos = [];
        foreach ($horasPagas as $horaPaga) {
            $tempos[] = $horaPaga->total;
        }

//        $tempos = array(
//            '1:34:00',
//            '12:37:00',
//            
//        );
//inicializa a variavel segundos com 0
        $segundos = 0;

        foreach ($tempos as $tempo) { //percorre o array $tempo
            list( $h, $m, $s ) = explode(':', $tempo); //explode a variavel tempo e coloca as horas em $h, minutos em $m, e os segundos em $s
//transforma todas os valores em segundos e add na variavel segundos

            $segundos += $h * 3600;
            $segundos += $m * 60;
            $segundos += $s;
        }

        $horas = floor($segundos / 3600); //converte os segundos em horas e arredonda caso nescessario
        $segundos %= 3600; // pega o restante dos segundos subtraidos das horas
        $minutos = floor($segundos / 60); //converte os segundos em minutos e arredonda caso nescessario
        $segundos %= 60; // pega o restante dos segundos subtraidos dos minutos

        $result = "{$horas}:{$minutos}:{$segundos}";

        return $result;
    }

    public function setGrafico() {
        
    }

}
