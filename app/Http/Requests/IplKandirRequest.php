<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IplKandirRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'pers_no' => 'required|unique:iplkandirs,pers_no|min:7',
            'name' => 'required',
            'gender' => 'required',
            'forperiodforpayroll' => 'required',
            'inperiodforpayroll' => 'required',
            'start_date' => 'required',
            'endofpayrollperiodforperiod' => 'required',
            'endofpayrollperiodinperiod' => 'required',
            'positionname' => 'required',
            'organizationname' => 'required',
            'dateofbirth' => 'required',
            'payrollarea' => 'required',
            'persarea' => 'required',
            'persareadesc' => 'required',
            'perssubarea' => 'required',
            'perssubareadesc' => 'required',
            'costcenter' => 'required',
            'costcentertext' => 'required',
            'empgroup' => 'required',
            'empgroupdesc' => 'required',
            'empsubgroup' => 'required',
            'empsubgroupdesc' => 'required',
            'statusdesc' => 'required',
            'persongrade' => 'required',
            'phdpgolongan' => 'required',
            'stax' => 'required',
            'skel' => 'required',
            'gajipokokng' => 'required',
            'tunjangantetapng' => 'required',
            'insentifkerja' => 'required',
            'lembur' => 'required',
            'hargaperjam' => 'required',
            'jamlembur' => 'required'
        ];
    }
}
