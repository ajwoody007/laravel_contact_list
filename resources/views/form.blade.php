@extends('layouts.app')

@section('title',isset($contact) ? 'Edit Contact' : 'Add Contact')
@section('styles')
<style>
    .error_message {color: red; font-size: 0.8rem;}
</style>
@endsection

@section('content')

    <!-- {{ $errors }} -->

    <form method="POST" action="{{ isset($contact) ? route('contacts.update', ['contact' => $contact->id]) : route('contacts.store') }}">
        
        {{-- csrf directives protects used from cross site request forgery by adding a token to the form and checking it before rendering, a bit like a handshake --}}
        @csrf
        
        @isset($contact)
            @method('PUT')
        @endisset

        <div>
            <label for="name">
                Name
            </label>
            <input text="text" name="name" id="name" value="{{ $contact->name ?? old('name') }}"/>
            @error('name')
                <p class='error_message'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Email</label>
            <input text="text" name="email" id="email" value="{{ $contact->email ?? old('email') }}"/>
            @error('email')
                <p class='error_message'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Mobile Phone</label>
            <input text="text" name="mobile" id="mobile" value="{{ $contact->mobile ?? old('mobile') }}"/>
            @error('mobile')
                <p class='error_message'>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button class='app_button' type="submit">
                @isset($contact)
                    Update Contact
                @else
                    Add Contact
                @endisset
            </button>
        </div>

        <div>

            <a class='link' href="{{ route('contacts.index') }}">Cancel</a>

        </div>
    
    </form>

@endsection
