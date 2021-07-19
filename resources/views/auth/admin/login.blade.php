@extends('auth.login')
@section('form')
    <form method="POST" action="{{ route('admin.login') }}">
@endsection
@section('role')
    <input type="hidden" name="role" value="admin">
@endsection
