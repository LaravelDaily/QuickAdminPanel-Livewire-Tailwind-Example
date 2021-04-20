<?php

namespace App\Http\Livewire\ContactCompany;

use App\Models\ContactCompany;
use Livewire\Component;

class Create extends Component
{
    public ContactCompany $contactCompany;

    public function mount(ContactCompany $contactCompany)
    {
        $this->contactCompany = $contactCompany;
    }

    public function render()
    {
        return view('livewire.contact-company.create');
    }

    public function submit()
    {
        $this->validate();

        $this->contactCompany->save();

        return redirect()->route('admin.contact-companies.index');
    }

    protected function rules(): array
    {
        return [
            'contactCompany.company_name' => [
                'string',
                'nullable',
            ],
            'contactCompany.company_address' => [
                'string',
                'nullable',
            ],
            'contactCompany.company_website' => [
                'string',
                'nullable',
            ],
            'contactCompany.company_email' => [
                'string',
                'nullable',
            ],
        ];
    }
}
