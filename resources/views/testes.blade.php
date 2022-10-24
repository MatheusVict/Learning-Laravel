@extends('layouts.main')

@section('title', 'Id')

@section('content')
@if($id != null)
<p>id: {{$id}}</p>
@endif
@endsection
