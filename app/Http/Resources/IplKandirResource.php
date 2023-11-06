<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IplKandirResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'pers_no' => $this->pers_no,
            'name' => $this->name,
            'gender' => $this->gender,
            'forperiodforpayroll' => $this->forperiodforpayroll,
            'inperiodforpayroll' => $this->inperiodforpayroll,
            'start_date' => $this->start_date,
            'endofpayrollperiodforperiod' => $this->endofpayrollperiodforperiod,
            'endofpayrollperiodinperiod' => $this->endofpayrollperiodinperiod,
            'positionname' => $this->positionname,
            'organizationname' => $this->organizationname,
            'divisionname' => $this->divisionname,
            'dateofbirth' => $this->dateofbirth,
            'payrollarea' => $this->payrollarea,
            'persarea' => $this->persarea,
            'persareadesc' => $this->name,
            'perssubarea' => $this->name,
            'perssubareadesc' => $this->name,
            'costcenter' => $this->name,
            'costcentertext' => $this->name,
            'empgroup' => $this->name,
            'empgroupdesc' => $this->name,
            'empsubgroup' => $this->name,
            'empsubgroupdesc' => $this->name,
            'status' => $this->name,
            'statusdesc' => $this->name,
            'persongrade' => $this->name,
            'phdpgolongan' => $this->name,
            'stax' => $this->name,
            'skel' => $this->name,
            'gajipokokng' => $this->name,
            'tunjangantetapng' => $this->name,
            'insentifkerja' => $this->name,
            'lembur' => $this->name,
            'hargaperjam' => $this->name,
            'jamlembur' => $this->name
        ];
    }
}
