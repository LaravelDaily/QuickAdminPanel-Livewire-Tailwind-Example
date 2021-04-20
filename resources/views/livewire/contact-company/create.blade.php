<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contactCompany.company_name') ? 'invalid' : '' }}">
        <label class="form-label" for="company_name">{{ trans('cruds.contactCompany.fields.company_name') }}</label>
        <input class="form-control" type="text" name="company_name" id="company_name" wire:model.defer="contactCompany.company_name">
        <div class="validation-message">
            {{ $errors->first('contactCompany.company_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactCompany.fields.company_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactCompany.company_address') ? 'invalid' : '' }}">
        <label class="form-label" for="company_address">{{ trans('cruds.contactCompany.fields.company_address') }}</label>
        <input class="form-control" type="text" name="company_address" id="company_address" wire:model.defer="contactCompany.company_address">
        <div class="validation-message">
            {{ $errors->first('contactCompany.company_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactCompany.fields.company_address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactCompany.company_website') ? 'invalid' : '' }}">
        <label class="form-label" for="company_website">{{ trans('cruds.contactCompany.fields.company_website') }}</label>
        <input class="form-control" type="text" name="company_website" id="company_website" wire:model.defer="contactCompany.company_website">
        <div class="validation-message">
            {{ $errors->first('contactCompany.company_website') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactCompany.fields.company_website_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactCompany.company_email') ? 'invalid' : '' }}">
        <label class="form-label" for="company_email">{{ trans('cruds.contactCompany.fields.company_email') }}</label>
        <input class="form-control" type="text" name="company_email" id="company_email" wire:model.defer="contactCompany.company_email">
        <div class="validation-message">
            {{ $errors->first('contactCompany.company_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactCompany.fields.company_email_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contact-companies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>