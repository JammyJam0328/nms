@extends('layouts.adviser')
@section('header')
     Students BMI
@endsection
@section('content')
    <div>
        @livewire('student-bmi', [
            'id' => $id,
        ])
    </div>
@endsection
