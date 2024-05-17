<?php

namespace App\Services;

use App\Models\ContactForm;
use Error;

class ContactFormService extends ImageService
{
    public function getContactForms(): object
    {
        return ContactForm::all();
    }

    public function getContactFormById(int $id): object
    {
        $contactForm = ContactForm::find($id);

        !$contactForm && throw new Error('messages.errorGetContactForm');

        return $contactForm;
    }
}
