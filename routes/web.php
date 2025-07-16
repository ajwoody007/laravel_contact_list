<?php

use App\Http\Requests\ContactRequest;
use App\Models\Contacts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contacts.index');
});

Route::get('/contacts', function ()  {
    $records_to_retreive = Contacts::latest()->paginate(10);
    return view('index', ['contacts' => $records_to_retreive] );
  })->name('contacts.index');

  Route::get('/contacts/{contact}/edit', function (Contacts $contact)  { return view('edit',['contact' => $contact]); })->name('contacts.edit');

  Route::get('/create', function ()  {
    $records_to_retreive = Contacts::latest()->paginate(10);
    return view('create',  ['contacts' => $records_to_retreive] );
  })->name('contacts.create');

  Route::get('/contacts/{contact}/show', function (Contacts $contact)  { return view('show',['contact' => $contact]);})->name('contacts.show');

  Route::post('/contacts', function (ContactRequest $request) {

    //rather than set each field above, as each field is part of that validation, you can use the following line - the fields need setting in the model file (like CI)
  
    $contact = Contacts::create($request->validated());
  
    return redirect()->route('contacts.show', ['contact' => $contact->id])
      ->with('success','The contact has been created successfully!');
    
  })->name('contacts.store');


  Route::put('/contacts/{contact}', function (Contacts $contact, ContactRequest $request) {
  
    $contact->update($request->validated());
  
    return redirect()->route('contacts.show', ['contact' => $contact->id])
      ->with('success','The contact has been saved successfully!');
    
  })->name('contacts.update');





