<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactContact;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactContactController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-contact.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contact_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-contact.create');
    }

    public function edit(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-contact.edit', compact('contactContact'));
    }

    public function show(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContact->load('company');

        return view('admin.contact-contact.show', compact('contactContact'));
    }
}
