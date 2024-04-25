@extends('layouts.app')

@section('title',isset($contact) ? 'Edit Contact' : 'Add Contact')
@section('styles')
<style>
    .error_message {color: red; font-size: 0.8rem;}
</style>
@endsection

@section('content')

<<<<<<< HEAD
    {{ $errors }}
=======
    <!-- {{ $errors }} -->
>>>>>>> 6f08307 (laravel update 1)

    <form method="POST" action="{{ isset($contact) ? route('contacts.update', ['contact' => $contact->id]) : route('contacts.store') }}">
        
        {{-- csrf directives protects used from cross site request forgery by adding a token to the form and checking it before rendering, a bit like a handshake --}}
        @csrf
        
        @isset($contact)
            @method('PUT')
        @endisset

<<<<<<< HEAD
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
            <button type="submit">
=======

        <table>

            <tr>

                <td><label for="name">Name: </label></td>
                <td> 
                    <input text="text" name="name" id="name" value="{{ $contact->name ?? old('name') }}"/>
                    @error('name')
                        <p class='error_message'>{{ $message }}</p>
                    @enderror
                </td>

            </tr>

            <tr>

                <td><label>Email :</label></td>

                <td>
                    <input text="text" name="email" id="email" value="{{ $contact->email ?? old('email') }}"/>
                    @error('email')
                        <p class='error_message'>{{ $message }}</p>
                    @enderror
                </td>

            </tr>

            <tr>

                <td><label>Mobile :</label></td>
                <td>

                    <input text="text" name="mobile" id="mobile" value="{{ $contact->mobile ?? old('mobile') }}"/>
                    @error('mobile')
                        <p class='error_message'>{{ $message }}</p>
                    @enderror

                </td>

            </tr>

        <table>

        <div>
            <button class='app_button mt-4' type="submit">
>>>>>>> 6f08307 (laravel update 1)
                @isset($contact)
                    Update Contact
                @else
                    Add Contact
                @endisset
            </button>
<<<<<<< HEAD
=======
            <br><br>
            <a class='link mt-4' href="{{ route('contacts.index') }}">Cancel</a>
>>>>>>> 6f08307 (laravel update 1)
        </div>
    
    </form>

@endsection
<<<<<<< HEAD
=======



>>>>>>> 6f08307 (laravel update 1)
