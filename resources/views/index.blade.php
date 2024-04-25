@extends('layouts.app')

@section('title', 'Contact List')

@section('content')

<nav class='mb-4'>
    <a href="{{ route('contacts.create') }}"
        class="link">Add new contact</a>
</nav>

    @if (count($contacts) > 0)
        I have the following {{ count($contacts) }} contacts:<br><br>

        <table>

            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            
            @foreach ($contacts as $contact)
                <tr>
                    <td><a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->name }}</a></td>
                    <td><a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->email }}</a></td>
                    <td><a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->mobile }}</a></td>
                    <td><a class="underline" href="{{ route('contacts.edit', ['contact' => $contact->id]) }}">Edit</a></td>
                </tr>
            @endforeach

        </table>

    @else
        I have no contacts.
    @endif

    @if ($contacts->count())
        <nav class="mt-4">
            {{ $contacts->links() }}
        </nav>
    @endif

@endsection




