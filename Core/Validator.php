<?php

namespace Core;

class validator
{
    public static function formValidator(array $validate, $formData) : array
    {
        $validatedData = null;
        foreach ($validate as $key => $data) {
            $rules = explode(',', $data);
            $rowValidtion = [];
            foreach ($rules as $rule) {
                $rowValidtion[$rule] = getValidation($formData[$key], $rule);
            }
            $validatedData[$key] = $rowValidtion;
        }
        return $validatedData;
    }

    private function getValidation($formData ,string $rule)
    {
        switch ($rule){
            case 'required' :
                return !empty($formData);
            case 'string' :
                return is_string($formData);
            case 'integer' :
                return is_int($formData);
            case 'bool' :
                return is_bool($formData);
            case 'email' :
                return filter_var($formData, FILTER_VALIDATE_EMAIL);
        }
    }

    public static function validateError(array $inputs) : ?array
    {
        $error = null;
        $inputName = null;
        foreach ($inputs as $key => $input) {
            foreach ($input as $rule => $validate) {
                if($validate === false) {
                    $inputName = $input;
                    $error = $key . ' is not a ' . $rule;
                    break;
                }
            }
            if($error){
                break;
            }
        }
        return $error ? ['error' => $error, 'name' => $inputName] : null;
    }

    public static function clearInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
}