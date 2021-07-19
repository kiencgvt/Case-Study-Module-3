@extends('auth.login')
@section('form')
    <form method="POST" action="{{ route('collaborator.login') }}">
        @endsection
@section('role')
    <input type="hidden" name="role" value="collaborator">
@endsection
