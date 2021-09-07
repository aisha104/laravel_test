@extends('layouts.app')

@section('title', 'Customer')

<!-- introduced in Laravel 8 -->
<!-- @push('scripts')
    <script src="example.js"></script>
@endpush -->
@section('scripts')
    <script>
        function showAlert() {
            alert("Alert!");
        }
    </script>
@endsection

@php
    $message= 'Alert component';
@endphp

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <p>This is my body content</p>
    <button onclick="showAlert()">Click</button>
    <x-alert type="danger" :message="$message"/>
@endsection

@section('footer')
    <p>This is my footer content</p>
@endsection

