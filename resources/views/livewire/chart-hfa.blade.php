<div>
    {{-- <div class="h-96 w-96">
        
      </div> --}}
    {{-- @dump($bmisevereunderweight) --}}
    <div class="flex space-x-5">
        <div class="w-6/12">
            <h1 class="font-bold uppercase text-white bg-green-400 px-2 text-xl">Male</h1>
            <div class="bg-white shadow-lg px-3 py-2">
                <canvas id="myMale" width="1000" height="1000"></canvas>
            </div>
        </div>
        <div class=" w-6/12">
            <h1 class="font-bold uppercase text-white bg-green-400 px-2 text-xl">Female</h1>
            <div class="bg-white shadow-lg px-3 py-2">
                <canvas id="myFemale" width="1000" height="1000"></canvas>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        const labels = [
            'Severely Stunted',
            'Stunted',
            'Normal',
            'Tall',
        ];

        const data1 = {
            labels: labels,
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
        const data2 = {
            labels: labels,
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

        const config1 = {
            type: 'pie',
            data: data1,
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
        const config2 = {
            type: 'pie',
            data: data2,
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

        const myChart = new Chart(
            document.getElementById('myMale'),
            config1
        );
        const myChart1 = new Chart(
            document.getElementById('myFemale'),
            config2
        );
    </script>
@endpush
