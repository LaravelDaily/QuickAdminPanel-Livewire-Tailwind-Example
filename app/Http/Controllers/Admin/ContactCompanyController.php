<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactCompany;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactCompanyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-company.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contact_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-company.create');
    }

    public function edit(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-company.edit', compact('contactCompany'));
    }

    public function show(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-company.show', compact('contactCompany'));
    }
}
