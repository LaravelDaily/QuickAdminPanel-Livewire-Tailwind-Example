<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('contactContact.company_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.contactContact.fields.company') }}</label>
        <x-select-list class="form-control" required id="company" name="company" :options="$this->listsForFields['company']" wire:model="contactContact.company_id" />
        <div class="validation-message">
            {{ $errors->first('contactContact.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_first_name') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_first_name">{{ trans('cruds.contactContact.fields.contact_first_name') }}</label>
        <input class="form-control" type="text" name="contact_first_name" id="contact_first_name" wire:model.defer="contactContact.contact_first_name">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_first_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_first_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_last_name') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_last_name">{{ trans('cruds.contactContact.fields.contact_last_name') }}</label>
        <input class="form-control" type="text" name="contact_last_name" id="contact_last_name" wire:model.defer="contactContact.contact_last_name">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_last_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_last_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_phone_1') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_phone_1">{{ trans('cruds.contactContact.fields.contact_phone_1') }}</label>
        <input class="form-control" type="text" name="contact_phone_1" id="contact_phone_1" wire:model.defer="contactContact.contact_phone_1">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_phone_1') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_phone_1_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_phone_2') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_phone_2">{{ trans('cruds.contactContact.fields.contact_phone_2') }}</label>
        <input class="form-control" type="text" name="contact_phone_2" id="contact_phone_2" wire:model.defer="contactContact.contact_phone_2">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_phone_2') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_phone_2_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_email') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_email">{{ trans('cruds.contactContact.fields.contact_email') }}</label>
        <input class="form-control" type="text" name="contact_email" id="contact_email" wire:model.defer="contactContact.contact_email">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_skype') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_skype">{{ trans('cruds.contactContact.fields.contact_skype') }}</label>
        <input class="form-control" type="text" name="contact_skype" id="contact_skype" wire:model.defer="contactContact.contact_skype">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_skype') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_skype_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contactContact.contact_address') ? 'invalid' : '' }}">
        <label class="form-label" for="contact_address">{{ trans('cruds.contactContact.fields.contact_address') }}</label>
        <input class="form-control" type="text" name="contact_address" id="contact_address" wire:model.defer="contactContact.contact_address">
        <div class="validation-message">
            {{ $errors->first('contactContact.contact_address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.contactContact.fields.contact_address_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.contact-contacts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>