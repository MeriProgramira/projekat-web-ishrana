@extends('layouts.user')
@section('content_user')
    dashboard
    <p>{{ auth()->user()->admin_role }}</p>
@endsection

@section('style_user')

@endsection
