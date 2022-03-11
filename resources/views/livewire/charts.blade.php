<div>
    {{-- <div class="h-96 w-96">
        
      </div> --}}
    {{-- @dump($bmisevereunderweight) --}}
    <div class="flex space-x-5">
        <div class="w-6/12">
            <h1 class="font-bold uppercase text-white bg-green-400 px-2 p-2  flex justify-between text-xl">
                <span>Male</span>
                <button class="px-2 rounded-md bg-gray-700 text-sm border">Print</button>
            </h1>
            <div class="bg-white shadow-lg px-3 py-2">
                <canvas id="myMale" width="1000" height="1000"></canvas>
            </div>
        </div>
        <div class=" w-6/12">
            <h1 class="font-bold uppercase text-white bg-green-400 px-2 p-2  flex justify-between text-xl">
                <span>Female</span>
                <button class="px-2 rounded-md bg-gray-700 text-sm border">Print</button>
            </h1>
            <div class="bg-white shadow-lg px-3 py-2">
                <canvas id="myFemale" width="1000" height="1000"></canvas>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        const labels = [
            'Severely Underweight',
            'Underweight',
            'Normal',
            'Overweight',
            'Obese',
        ];

        const data1 = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['#ee3333',
                    '#ff8800',
                    '#3355ff',
                    '#065535',
                    '#444444',
                ],
                data: [{{ $bmisevereunderweight }}, {{ $bmiunderweight }}, {{ $bminormal }},
                    {{ $bmioverweight }}, {{$bmiobese}}
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
                data: [{{$femalesevereunderweight}}, {{$femaleunderweight}}, {{$femalenormal}},
                    {{$femaleoverweight}}, {{$femaleobese}}
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
