@extends('app')

@section('title', 'Decorator')

@section('content')
<h1>Decorator Pattern</h1>
<hr>
<p>Decorators allow us to build up our object at run-time.</p>
<p>The output below is the combination of a BasicInspection and TireRotation Class that implement a CarService Interface. These two classes are calling the getDescription() and getCost() methods of the interface. </p>
{!! $service->getDescription(); !!}
<span>${!! $service->getCost(); !!}</span>

@stop