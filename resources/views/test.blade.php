 @extends('templates.layout-test')
 @section('content')
@yield('content')
<h1> {{ $nom }} </h1>
@if ($mavariable = 1)
    Ma condition est bone!
  @elseif ($mavariable > 1)
    Ma condition est fausse!
@else
    mon autre condition est fausse!
@endif

@endsection
          