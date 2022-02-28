@extends('layouts.adviser')
@section('header')
    Manage Section
@endsection
@section('content')
    <div>
        <livewire:adviser.manage-students.student-section
            :section_id="$id"
        />
    </div>
@endsection
