@extends('layouts.app')

@section('content')

    {{-- use the sub-form called form - as editing, need to pass the associated ID to the edit form  --}}
    @include('form', ['contact' => $contact])

@endsection
