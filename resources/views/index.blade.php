@extends('layouts.app')

@section('title', 'Contact List')

@section('content')

<nav class='mb-4'>
    <a href="{{ route('contacts.create') }}"
        class="link">Add new contact</a>
</nav>

    @if (count($contacts) > 0)
        I have the following {{ count($contacts) }} contacts:<br><br>
        <ol>
            @foreach ($contacts as $contact)
                <li>
                    <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->name }}</a>
                    <a class="underline" href="{{ route('contacts.edit', ['contact' => $contact->id]) }}">Edit</a>
                </li>
            @endforeach
        </ol>
    @else
        I have no contacts.
    @endif

    @if ($contacts->count())
        <nav class="mt-4">
            {{ $contacts->links() }}
        </nav>
    @endif

@endsection




