<div>
  <div class="flex justify-center">
      <img src="{{asset('images/deped.png')}}" class="h-14" alt="">
    <div class="flex flex-col items-center">
        <h1 class="text-sm">Department of Education</h1>
        <h1 class="text-sm">Bureau of Learner Support Services</h1>
        <h1 class="text-sm font-semibold">SCHOOL HEALTH DIVISION</h1>
        <h1 class="text-sm font-semibold">NUTRITIONAL STATUS REPORT FOR MADANDING NATIONAL HIGH SCHOOL</h1>
        @if ($type=='bmi')
        <h1 class="text-sm font-bold">(BODY MASS INDEX)</h1>
        @else
          <h1 class="text-sm font-bold">(HEIGHT FOR AGE)</h1>
        @endif
    </div>
    <img src="{{asset('images/madandinglogo.jpg')}}" class="h-14" alt="">
  </div>

   @if ($type=='bmi')
   <div class="mt-10">
    <div class="flex uppercase text-xl font-bold">Male</div>
    <div class=" wrapper shadow-lg px-3 py-2">
     <canvas id="myMalebmi" width="1000" height="1000"></canvas>
 </div>
</div>
<div class="mt-64">
    <div class="flex uppercase text-xl font-bold">Female</div>
    <div class=" wrapper shadow-lg px-3 py-2">
     <canvas id="myFemalebmi" width="1000" height="1000"></canvas>
 </div>
</div>
@else
<div class="mt-10">
    <div class="flex uppercase text-xl font-bold">Male</div>
    <div class=" wrapper shadow-lg px-3 py-2">
     <canvas id="myMalehfa" width="1000" height="1000"></canvas>
 </div>
</div>
<div class="mt-64">
    <div class="flex uppercase text-xl font-bold">Female</div>
    <div class=" wrapper shadow-lg px-3 py-2">
     <canvas id="myFemalehfa" width="1000" height="1000"></canvas>
 </div>
</div>
   @endif
</div>
@push('scripts')
    <script>
        const labelsbmi = [
            'Severely Underweight',
            'Underweight',
            'Normal',
            'Overweight',
            'Obese',
        ];

        const data1bmi = {
            labels: labelsbmi,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['#ee3333',
                    '#ff8800',
                    '#3355ff',
                    '#065535',
                    '#444444',
                ],
                data: [{{ $bmisevereunderweight }}, {{ $bmiunderweight }}, {{ $bminormal }},
                    {{ $bmioverweight }}, {{ $bmiobese }}
                ],
            }]
        };
        const data2bmi = {
            labels: labelsbmi,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['#ee3333',
                    '#ff8800',
                    '#3355ff',
                    '#065535',
                    '#444444',
                ],
                data: [{{ $femalesevereunderweight }}, {{ $femaleunderweight }}, {{ $femalenormal }},
                    {{ $femaleoverweight }}, {{ $femaleobese }}
                ],
            }]
        };

        const config1bmi = {
            type: 'pie',
            data: data1bmi,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                },
            }
        };
        const config2bmi = {
            type: 'pie',
            data: data2bmi,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                },
            }
        };

        


       
        const myChartbmi = new Chart(
            document.getElementById('myMalebmi'),
            config1bmi
        );
        const myChart1bmi = new Chart(
            document.getElementById('myFemalebmi'),
            config2bmi
        );

    </script>
    <script>
         const labelshfa = [
            'Severely Stunted',
            'Stunted',
            'Normal',
            'Tall',
        ];

        const data1hfa = {
            labels: labelshfa,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['#ee3333',
                    '#ff8800',
                    '#3355ff',
                    '#065535',
                ],
                data: [{{ $maleseverelystudented }}, {{ $malestunted }}, {{ $malenormal }},
                    {{ $maletall }}
                ],
            }]
        };
        const data2hfa = {
            labels: labelshfa,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['#ee3333',
                    '#ff8800',
                    '#3355ff',
                    '#065535',
                    '#444444',
                ],
                data: [{{$femaleseverelystunted}}, {{$femalestunted}}, {{$femalenormal}},
                   {{$femaletall}},
                ],
            }]
        };

        const config1hfa = {
            type: 'pie',
            data: data1hfa,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                },
            }
        };
        const config2hfa = {
            type: 'pie',
            data: data2hfa,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                },
            }
        };

        const myCharthfa = new Chart(
            document.getElementById('myMalehfa'),
            config1hfa
        );
        const myChart1hfa = new Chart(
            document.getElementById('myFemalehfa'),
            config2hfa
        );
    </script>
@endpush
