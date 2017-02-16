 @extends('templates.layout')
 @section('content')
<div class="title m-b-md">Laravel</div>
<h1> {{ $nom }} </h1>
@if ($mavariable = 1)
    Ma condition est bone!
  @elseif ($mavariable > 1)
    Ma condition est fausse!
@else
    mon autre condition est fausse!
@endif

@endsection
          