<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class PutRequest extends FormRequest
{
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // se escribe el name del input => las reglas de validacion https://laravel.com/docs/9.x/validation#available-validation-rules
            'title' => 'required|min:5|max:500',
            // elemento unico: unique:nombreTabla
            // 'slug' => 'required|min:5|max:500|unique:posts',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|integer',
            'posted' => 'required'
        ];
    }
}
