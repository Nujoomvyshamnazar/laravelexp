@extends('layout.app')

@section('page')


@if(count($people))

<ul>
@foreach( $people as $person)

  <li>{{$person}}</li>


@endforeach
</ul>
@endif
@stop
