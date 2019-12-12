
@extends('layout.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur facilis deserunt reprehenderit. Culpa corporis iusto maiores dolores! Culpa, libero. Necessitatibus ex nobis atque perspiciatis dolorum animi maiores saepe ea vel.</p>
<button class="btn btn-success">button</button>

@endsection

@section('sidebar')

  @parent
  <p>
  This is a home page append to sidebar
  </p>
@endsection
