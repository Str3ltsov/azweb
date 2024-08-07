<?php

namespace App\Services;

use App\Models\ContactForm;
use App\Models\Contact;
use Error;

class ContactService
{
    public function getContacts(): object
    {
        return Contact::all();
    }

    public function getContactById(int $id): object
    {
        $contact = Contact::find($id);

        !$contact && throw new Error('messages.errorGetContact');

        return $contact;
    }

    public function getContactsForFooter(): object
    {
        return Contact::select('description')->get();
    }

    public function updateContact(object $contact, array $validated): void
    {
        $contact->title = $validated['title'];
        $contact->description = $validated['description'];
        $contact->updated_at = now();
        $contact->save();
    }

    public function createContactForm(array $validated): void
    {
        ContactForm::firstOrCreate([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'topic' => $validated['topic'],
            'description' => $validated['description'] ?? NULL,
            'created_at' => now()
        ]);
    }
}
