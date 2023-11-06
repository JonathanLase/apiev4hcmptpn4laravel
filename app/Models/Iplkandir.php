<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Iplkandir extends Model
{
    use HasFactory;

    protected $table = 'iplkandirs';
    protected $fillable = [
        'pers_no',
        'name',
        'gender',
        'forperiodforpayroll',
        'inperiodforpayroll',
        'start_date',
        'endofpayrollperiodforperiod',
        'endofpayrollperiodinperiod',
        'positionname',
        'organizationname',
        'divisionname',
        'dateofbirth',
        'payrollarea',
        'persarea',
        'persareadesc',
        'perssubarea',
        'perssubareadesc',
        'costcenter',
        'costcentertext',
        'empgroup',
        'empgroupdesc',
        'empsubgroup',
        'empsubgroupdesc',
        'status',
        'statusdesc',
        'persongrade',
        'phdpgolongan',
        'stax',
        'skel',
        'gajipokokng',
        'tunjangantetapng',
        'insentifkerja',
        'lembur',
        'hargaperjam',
        'jamlembur'
    ];
}
