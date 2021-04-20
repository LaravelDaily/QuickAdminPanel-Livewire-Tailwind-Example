<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('transaction.amount') ? 'invalid' : '' }}">
        <label class="form-label" for="amount">{{ trans('cruds.transaction.fields.amount') }}</label>
        <input class="form-control" type="number" name="amount" id="amount" wire:model.defer="transaction.amount" step="0.01">
        <div class="validation-message">
            {{ $errors->first('transaction.amount') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.transaction.fields.amount_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('transaction.transaction_date') ? 'invalid' : '' }}">
        <label class="form-label" for="transaction_date">{{ trans('cruds.transaction.fields.transaction_date') }}</label>
        <x-date-picker class="form-control" wire:model="transaction.transaction_date" id="transaction_date" name="transaction_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('transaction.transaction_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.transaction.fields.transaction_date_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.transactions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>