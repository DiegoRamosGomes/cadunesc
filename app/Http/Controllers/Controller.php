<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Valida o request com os campos passados
     *
     * @param array $fields Campos para serem validados
     * @return void
     * @throws ValidationException
     */
    protected function validate(array $fields)
    {
        // Indica se nao e array associativo
        $notAssoc = ! Arr::isAssoc($fields);

        if ($notAssoc) {
            $rules = [];
            foreach ($fields as $key => $value) {
                $rules[$value] = 'required';
            }
        } else {
            $rules = $fields;
        }

        $validator = Validator::make(request()->all(), $rules);

        // Lanca erro se request nao for validado
        $this->throwValidationIf($validator->errors()->toArray(), $validator->fails());
    }

    /**
     * Determina se condicao for verdadeira para lancar a excecao.
     *
     * @param array $errors
     * @param Closure|bool $condition
     * @return void
     *
     * @throws ValidationException
     */
    protected function throwValidationIf(array $errors, $condition)
    {
        if (is_bool($condition)) {
            if ($condition) {
                $this->throwValidation($errors);
            }
        } else {
            if (!call_user_func($condition)) {
                $this->throwValidation($errors);
            }
        }
    }

    /**
     * Lanca uma excecao de validacao com os erros, para ser convertido em uma resposta Http.
     *
     * @param  array  $errors
     * @return void
     *
     * @throws ValidationException
     */
    protected function throwValidation(array $errors)
    {
        throw ValidationException::withMessages($errors);
    }
}
