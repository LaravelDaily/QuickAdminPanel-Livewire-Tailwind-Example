<?php

namespace App\Http\Livewire\ContactContact;

use App\Models\ContactCompany;
use App\Models\ContactContact;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public ContactContact $contactContact;

    public function mount(ContactContact $contactContact)
    {
        $this->contactContact = $contactContact;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.contact-contact.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->contactContact->save();

        return redirect()->route('admin.contact-contacts.index');
    }

    protected function rules(): array
    {
        return [
            'contactContact.company_id' => [
                'integer',
                'exists:contact_companies,id',
                'required',
            ],
            'contactContact.contact_first_name' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_last_name' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_phone_1' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_phone_2' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_email' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_skype' => [
                'string',
                'nullable',
            ],
            'contactContact.contact_address' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['company'] = ContactCompany::pluck('company_name', 'id');
    }
}
