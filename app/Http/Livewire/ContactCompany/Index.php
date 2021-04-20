<?php

namespace App\Http\Livewire\ContactCompany;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\ContactCompany;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new ContactCompany())->orderable;
    }

    public function render()
    {
        $query = ContactCompany::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $contactCompanies = $query->paginate($this->perPage);

        return view('livewire.contact-company.index', compact('query', 'contactCompanies', 'contactCompanies'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ContactCompany::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactCompany->delete();
    }
}
