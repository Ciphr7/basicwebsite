
@extends('layout.app')

@section('content')
<div class="container">
<h1>Home</h1>
<button class="btn btn-success">button</button>

@endsection

@section('sidebar')

  @parent

  This is a home page append to sidebar

@endsection
</div>