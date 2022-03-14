<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Charts-Print</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .wrapper {
            width: 500px;
            height: 500px;
            border: 1px solid black;
            /* for demonstration purposes*/
        }

    </style>
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    @livewire('chart-print')

    @stack('scripts')
    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded',function(){
            setTimeout(() => {
                window.print();
            }, 2000);
        })
    </script>
</body>

</html>
