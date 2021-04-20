<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;

class Edit extends Component
{
    public Transaction $transaction;

    public function mount(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function render()
    {
        return view('livewire.transaction.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->transaction->save();

        return redirect()->route('admin.transactions.index');
    }

    protected function rules(): array
    {
        return [
            'transaction.amount' => [
                'numeric',
                'nullable',
            ],
            'transaction.transaction_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }
}
