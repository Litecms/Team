<?php

namespace Litecms\Team\Http\Requests;

use App\Http\Requests\Request as FormRequest;
use Illuminate\Http\Request;

class TeamUserApiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $team = $this->route('team');

        if (is_null($team)) {
            // Determine if the user is authorized to access team module,
            return $request->user('api')->canDo('team.team.view');
        }

        if ($request->isMethod('POST') || $request->is('*/create')) {
            // Determine if the user is authorized to create an entry,
            return $request->user('api')->can('create', $team);
        }

        if ($request->isMethod('PUT') || $request->isMethod('PATCH') || $request->is('*/edit')) {
            // Determine if the user is authorized to update an entry,
            return $request->user('api')->can('update', $team);
        }

        if ($request->isMethod('DELETE')) {
            // Determine if the user is authorized to delete an entry,
            return $request->user('api')->can('delete', $team);
        }

        // Determine if the user is authorized to view the module.
        return $request->user('api')->can('view', $team);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {

        if ($request->isMethod('POST')) {
            // validation rule for create request.
            return [

            ];
        }

        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            // Validation rule for update request.
            return [

            ];
        }

        // Default validation rule.
        return [

        ];
    }

}
