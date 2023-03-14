<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExaminationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|min:3|max:255',
            'age' => 'required|string|min:3|max:255',
            'village' => 'required|string|min:3|max:255',
            'subdistrict' => 'required|string|min:3|max:255',
            'regency' => 'required|string|min:3|max:255',
            'anamnese' => 'required|string|min:3|max:255',
            'checkup_result' => 'required|string|min:3|max:255',
            'therapy' => 'required|string|min:3|max:255',
            'action' => 'required|string|min:3|max:255',
            'visit_to' => 'required|string|min:3|max:255',
            'queue_number' => 'required|string|min:3|max:255',
            'examiner' => 'required|string|min:3|max:255',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Nama lengkap wajib diisi',
            'fullname.min' => 'Nama lengkap minimal 3 kata',
            'fullname.max' => 'Nama lengkap maksimal 255 kata',
            'age.required' => 'Umur wajib diisi',
            'age.min' => 'Umur minimal 3 kata',
            'age.max' => 'Umur maksimal 255 kata',
            'village.required' => 'Desa wajib diisi',
            'village.min' => 'Desa minimal 3 kata',
            'village.max' => 'Desa maksimal 255 kata',
            'subdistrict.required' => 'Kecamatan wajib diisi',
            'subdistrict.min' => 'Kecamatan minimal 3 kata',
            'subdistrict.max' => 'Kecamatan maksimal 255 kata',
            'regency.required' => 'Kabupaten wajib diisi',
            'regency.min' => 'Kabupaten minimal 3 kata',
            'regency.max' => 'Kabupaten maksimal 255 kata',
            'anamnese.required' => 'Anamnese wajib diisi',
            'anamnese.min' => 'Anamnese minimal 3 kata',
            'anamnese.max' => 'Anamnese maksimal 255 kata',
            'checkup_result.required' => 'Hasil pemeriksaan wajib diisi',
            'checkup_result.min' => 'Hasil pemeriksaan minimal 3 kata',
            'checkup_result.max' => 'Hasil pemeriksaan maksimal 255 kata',
            'therapy.required' => 'Terapi wajib diisi',
            'therapy.min' => 'Terapi minimal 3 kata',
            'therapy.max' => 'Terapi maksimal 255 kata',
            'action.required' => 'Tindakan wajib diisi',
            'action.min' => 'Tindakan minimal 3 kata',
            'action.max' => 'Tindakan maksimal 255 kata',
            'visit_to.required' => 'Kunjungan ke wajib diisi',
            'visit_to.min' => 'Kunjungan ke minimal 3 kata',
            'visit_to.max' => 'Kunjungan ke maksimal 255 kata',
            'queue_number.required' => 'Nomor antri wajib diisi',
            'queue_number.min' => 'Nomor antri minimal 3 kata',
            'queue_number.max' => 'Nomor antri maksimal 255 kata',
            'examiner.required' => 'Pemeriksa wajib diisi',
            'examiner.min' => 'Pemeriksa minimal 3 kata',
            'examiner.max' => 'Pemeriksa maksimal 255 kata',
        ];
    }
}
