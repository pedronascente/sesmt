@extends('dashboard.app')

@section('content')


<style>

    .myXFAc.RjsPE {
    font-family: Roboto,Arial,sans-serif;
    font-size: 16px;
    letter-spacing: .2px;
    line-height: 24px;
    color: #202124;
    font-weight: 400;
}

.myXFAc {
    font-family: "Google Sans",Roboto,Arial,sans-serif;
    font-size: 16px;
    letter-spacing: .1px;
    line-height: 24px;
    color: #202124;
    font-weight: 400;
    max-width: 100%;
    min-width: 0%;
    word-break: break-word;
}

.bXtdDb {
    font-family: Roboto,Arial,sans-serif;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: .3px;
    line-height: 16px;
    color: #70757a;
    color: #202124;
    padding-top: 8px;
}

.SLvR0 {
    -webkit-box-align: start;
    box-align: start;
    -webkit-align-items: flex-start;
    align-items: flex-start;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    font-size: 20px;
    line-height: 135%;
    margin-bottom: 24px;
    margin-right: 8px;
    margin-top: 8px;
    min-width: 0;
}

.rPU8He {
    overflow-x: auto;
    overflow-y: hidden;
    width: 100%;
}


</style>
    <div class="containner">
        <div class="col-md-6 offset-md-3">
            <div class="card mb-4 ">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="M7eMe mb-4"> <b>{{$total_respostas}} respostas </b></h4>
                        <b>Com o intuito de melhorar nossa ginástica laboral, gostaríamos que respondesse o questionário abaixo:</b>
                    </blockquote>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                     <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                            <b style="font-style:normal;white-space:normal">#1 Quanto tempo por dia você fica sentado em um dia de semana ?</b>
                            </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                        </div>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['sintomas', 'horario'],
                                @foreach ($array_pergunta1 as $item)
                                    ["{{$item['resposta']}}",{{$item['total']}}], 
                                @endforeach
                            ]);
                            var chart = new google.visualization.PieChart(document.getElementById('pergunta1'));
                            chart.draw(data);
                            }
                        </script>
                        <div  class="rPU8He"  id="pergunta1" style="position: relative; width: 100%; max-width: 732px; height: 350px;" ></div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                        <b style="font-style:normal;white-space:normal">#2 Quanto tempo por dia você fica sentado no final de semana ?</b>
                        </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                    </div>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['sintomas', 'time'],
                                @foreach ($array_pergunta2 as $item)
                                    ["{{$item['resposta']}}",{{$item['total']}}], 
                                @endforeach
                            ]);
                            var chart = new google.visualization.PieChart(document.getElementById('pergunta2'));
                            chart.draw(data);
                        }
                    </script>
                    <div  class="rPU8He"  id="pergunta2" style="position: relative; width: 100%; max-width: 732px; height: 350px;" ></div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4 class="M7eMe mb-4"> 
                            <b>SINAIS E SINTOMAS</b>
                        </h4>
                    </blockquote>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                        <b style="font-style:normal;white-space:normal">#3 Nos Últimos 12 meses, você teve problemas como dor , formigamento/dormência em:</b>
                        </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                    </div>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['sintomas', 'Contagem'],
                            @foreach ($array_pergunta3 as $item)
                                ["{{$item['resposta']}}",{{$item['total']}}], 
                            @endforeach
                            ]);
                            var options = {
                                colors:['green'],
                                legend: { position: "none" },
                                width:850,
                            };
                            var chart = new google.visualization.BarChart(document.getElementById('pergunta3'));
                            chart.draw(data,options);
                        }
                    </script>  
                    <div class="col-md-12 offset-md-1">
                        <div class="rPU8He" id="pergunta3" style ="  height:500px; position:relative ; margin-top:-50px"></div>
                    </div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                            <b style="font-style:normal;white-space:normal">#4 Nos Últimos 12 meses, você foi impedido(a) de realizar atividades normais (trabalho, atividades domesticas e de lazer) por causa desse problema em:</b>
                            </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                        </div>
                        <script type="text/javascript">
                            google.charts.safeLoad({ packages: ['corechart'] });
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                ['sintomas', 'Contagem'],
                                @isset($array_pergunta4)
                                    @foreach ($array_pergunta4 as $item)
                                        ["{{$item['resposta']}}",{{$item['total']}}], 
                                    @endforeach
                                @endisset 
                                ]);
                                var options = {
                                    colors:['green'],
                                    legend: { position: "none" },
                                    width:850,
                                };
                                var chart = new google.visualization.BarChart(document.getElementById('pergunta4'));
                                chart.draw(data,options);
                            }
                        </script>  
                        <div class="col-md-12 offset-md-1">
                            <div class="rPU8He" id="pergunta4" style ="   height:500px; position:relative ; margin-top:-50px"></div>
                        </div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                            <b style="font-style:normal;white-space:normal">#5 No último ano você foi ao médico por esta queixa:</b>
                            </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                        </div>
                        <script type="text/javascript">
                            google.charts.safeLoad({ packages: ['corechart'] });
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                ['sintomas', 'Contagem'],
                                @isset($array_pergunta5)
                                    @foreach ($array_pergunta5 as $item)
                                        ["{{$item['resposta']}}",{{$item['total']}}], 
                                    @endforeach
                                @endisset 
                                ]);
                                var options = {
                                    colors:['green'],
                                    legend: { position: "none" },
                                    width:850,
                                };
                                var chart = new google.visualization.BarChart(document.getElementById('pergunta5'));
                                chart.draw(data,options);
                            }
                        </script>  
                        <div class="col-md-12 offset-md-1">
                            <div class="rPU8He" id="pergunta5" style ="   height:500px; position:relative ; margin-top:-50px"></div>
                        </div>
                </div>
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                            <b style="font-style:normal;white-space:normal"> #6 No último ano você foi ao médico por esta queixa:</b>
                            </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                        </div>
                        <script type="text/javascript">
                            google.charts.safeLoad({ packages: ['corechart'] });
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                ['sintomas', 'Contagem'],
                                @isset($array_pergunta6)
                                    @foreach ($array_pergunta6 as $item)
                                        ["{{$item['resposta']}}",{{$item['total']}}], 
                                    @endforeach
                                @endisset 
                                ]);
                                var options = {
                                    colors:['green'],
                                    legend: { position: "none" },
                                    width:850,
                                };
                                var chart = new google.visualization.BarChart(document.getElementById('pergunta6'));
                                chart.draw(data,options);
                            }
                        </script>  
                        <div class="col-md-12 offset-md-1">
                            <div class="rPU8He" id="pergunta6" style ="  height:500px; position:relative ; margin-top:-50px"></div>
                        </div>
                    </div>     
            </div>

            <div class="card mb-4 ">
                <div class="card-body">
                    <div class="SLvR0" id="c477" role="heading"><span class="myXFAc RjsPE" jsname="tbOalc" data-questiontitle="423774284">
                        <b style="font-style:normal;white-space:normal">  #7 No últimos 7 dias você teve problema em:</b>
                        </span><span class="bXtdDb" jsname="RUmyUe" data-responseslabel="423774284">{{$total_respostas}} respostas </b></span>
                    </div>
                    <script type="text/javascript">
                        google.charts.safeLoad({ packages: ['corechart'] });
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['sintomas', 'Contagem'],
                            @isset($array_pergunta7)
                                @foreach ($array_pergunta7 as $item)
                                    ["{{$item['resposta']}}",{{$item['total']}}], 
                                @endforeach
                            @endisset 
                            ]);
                            var options = {
                                colors:['green'],
                                legend: { position: "none" },
                                width:850,
                            };
                            var chart = new google.visualization.BarChart(document.getElementById('pergunta7'));
                            chart.draw(data,options);
                        }
                    </script>  
                    <div class="col-md-12 offset-md-1">
                        <div class="rPU8He" id="pergunta7" style ="  height:500px; position:relative ; margin-top:-50px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection