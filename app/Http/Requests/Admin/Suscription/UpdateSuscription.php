<?php

namespace App\Http\Requests\Admin\Suscription;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateSuscription extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.suscription.edit', $this->suscription);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'features' => ['sometimes', 'string'],
            'price' => ['sometimes', 'numeric'],
            'type' => ['sometimes', 'string'],
            'stripe_id' => ['nullable', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
