<?php

namespace Core;

class Validator
{
    protected $data;
    protected $rules;
    protected $errors = [];

    public function __construct(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;

        $this->validate();
    }

    protected function validate()
    {
        foreach ($this->rules as $field => $rules) {
            $rules = is_array($rules) ? $rules : explode('|', $rules);

            foreach ($rules as $rule) {
                $params = null;

                if (strpos($rule, ':') !== false) {
                    [$ruleName, $params] = explode(':', $rule, 2);
                    $params = explode(',', $params);
                } else {
                    $ruleName = $rule;
                }

                $method = 'validate' . ucfirst($ruleName);

                if (method_exists($this, $method)) {
                    $this->$method($field, $params);
                }
            }
        }
    }

    protected function validateRequired($field, $params)
    {
        if (!isset($this->data[$field]) || trim($this->data[$field]) === '') {
            $this->addError($field, 'O campo é obrigatório.');
        }
    }

    protected function validateEmail($field, $params)
    {
        if (isset($this->data[$field]) && !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, 'O campo deve conter um e-mail válido.');
        }
    }

    protected function validateMin($field, $params)
    {
        $min = (int) $params[0];
        if (isset($this->data[$field]) && strlen($this->data[$field]) < $min) {
            $this->addError($field, "O campo deve ter no mínimo {$min} caracteres.");
        }
    }

    protected function validateMax($field, $params)
    {
        $max = (int) $params[0];
        if (isset($this->data[$field]) && strlen($this->data[$field]) > $max) {
            $this->addError($field, "O campo deve ter no máximo {$max} caracteres.");
        }
    }

    protected function validateNumeric($field, $params)
    {
        if (isset($this->data[$field]) && !is_numeric($this->data[$field])) {
            $this->addError($field, "O campo deve ser numérico.");
        }
    }

    protected function validateString($field, $params)
    {
        if (isset($this->data[$field]) && !is_string($this->data[$field])) {
            $this->addError($field, "O campo deve ser uma string.");
        }
    }

    protected function validateDateFormat($field, $params)
    {
        $format = $params[0] ?? 'Y-m-d';
        $date = \DateTime::createFromFormat($format, $this->data[$field] ?? '');
        if (!$date || $date->format($format) !== ($this->data[$field] ?? '')) {
            $this->addError($field, "O campo deve estar no formato {$format}.");
        }
    }

    protected function validateRegex($field, $params)
    {
        $pattern = $params[0] ?? '';
        if (isset($this->data[$field]) && !preg_match($pattern, $this->data[$field])) {
            $this->addError($field, "O campo não corresponde ao padrão esperado.");
        }
    }

    protected function validateCpf($field, $params)
    {
        // Implementação simplificada de validação de CPF
        if (isset($this->data[$field]) && !preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $this->data[$field])) {
            $this->addError($field, "O campo deve conter um CPF válido.");
        }
    }

    protected function validatePhone($field, $params)
    {
        // Implementação simplificada de validação de telefone
        if (isset($this->data[$field]) && !preg_match('/^\(\d{2}\) \d{4,5}-\d{4}$/', $this->data[$field])) {
            $this->addError($field, "O campo deve conter um telefone válido.");
        }
    }

    protected function validateAccepted($field, $params)
    {
        if (!isset($this->data[$field]) || $this->data[$field] !== 'on') {
            $this->addError($field, "O campo deve ser aceito.");
        }
    }

    protected function addError($field, $message)
    {
        $this->errors[$field][] = $message;
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}
