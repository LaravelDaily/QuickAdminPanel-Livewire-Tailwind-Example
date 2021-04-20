<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContactContactsTable extends Migration
{
    public function up()
    {
        Schema::table('contact_contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id', 'company_fk_3707298')->references('id')->on('contact_companies');
        });
    }
}
