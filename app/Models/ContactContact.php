<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactContact extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'contact_contacts';

    public $orderable = [
        'id',
        'company.company_name',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    public $filterable = [
        'id',
        'company.company_name',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_id',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    public function company()
    {
        return $this->belongsTo(ContactCompany::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
