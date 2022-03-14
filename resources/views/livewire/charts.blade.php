<div>

    <div class="flex mb-4 justify-end">
        <a href="{{route('admin.chart-status-print',['type'=>'bmi'])}}" target="_blank" class="bg-gray-700 px-2 text-white p-1 flex space-x-1 rounded-md" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-printer">
                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                <rect x="6" y="14" width="12" height="8"></rect>
            </svg>
            <span class="font-bold">Print</span>
        </a>
    </div>

    <div class="flex space-x-5">
        <div class="w-6/12">
            <h1 class="font-bold uppercase text-white bg-green-400 px-2 flex justify-between text-xl">
                <span>Male</span>
            </h1>
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
                    {{ $bmioverweight }}, {{ $bmiobese }}
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
                data: [{{ $femalesevereunderweight }}, {{ $femaleunderweight }}, {{ $femalenormal }},
                    {{ $femaleoverweight }}, {{ $femaleobese }}
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
