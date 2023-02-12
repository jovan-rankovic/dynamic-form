<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormsRequest;
use App\Models\Field;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormsController extends Controller
{
    public function index()
    {
        $response = [];

        foreach (Form::all() as $key => $form) {

            $response[] = ['name' => $form->name];
            $fields = [];

            foreach ($form->fields as $key2 => $field) {

                $fields[$key2++] = [
                    'title' => $field->title,
                    'value' => $field->value,
                    'type' => $field->fieldType->type
                ];
            }

            $response[$key] += ['fields' => $fields];
        }

        return $response;
    }

    public function store(FormsRequest $request)
    {
        DB::transaction(static function () use ($request) {

            $form = Form::create([
                'name' => $request->name
            ]);

            foreach ($request->fields as $fieldTitle => $field) {

                Field::create([
                    'title' => $fieldTitle,
                    'value' => $field['value'],
                    'field_type_id' => $field['type'],
                    'form_id' => $form->id
                ]);
            }
        });
    }

    public function destroy(Form $form)
    {
        $form->delete();
    }
}
