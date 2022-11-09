<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class DinnerRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        // $route = $this->route()->getName();
        $rule = [
            'title' => 'required|string|max:30',
            'description' => 'required|string|max:200',
            'category_id' => 'required',
            'country' => 'required',
            'language' => 'required',
            'calendar' => 'required',

        ];
        // if ($route === 'meals.store' || ($route === 'meals.update' && $request->file('image'))) {
        //     $rule['image'] = 'required|file|image|mimes:jpg,png';
        // }
        return $rule;
    }

}
