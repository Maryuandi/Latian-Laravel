@extends('app')
@section('content')
@if(session('success'))

<p class="alert alert-success">{{session('success')}}</p>
@endif

<div class="card card-default">
    div
</div>