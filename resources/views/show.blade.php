@extends('layouts.app')

@section('name', $contact -> name)

@section('content')     

    <div class="mb-4">

        <a href="{{ route('contacts.index') }}"
        class="link">Go back to contact list</a>

    </div>

    <p class="mb-4 text-slate-700">{{ $contact -> name }}</p>

    @if ($contact->email) 
        <p class="mb-4 text-slate-700">{{ $contact -> email }}</p>
    @endif

    @if ($contact->mobile) 
        <p class="mb-4 text-slate-700">{{ $contact -> mobile }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500"> Created {{ $contact->created_at->diffForHumans() }} / Updated {{  $contact->updated_at->diffForHumans() }} </p>

    <div class="mt-4 flex gap-4">

        <a class="app_button" href="{{ route('contacts.edit', ['contact' => $contact]) }}">Edit</a>

    </div>

@endsection