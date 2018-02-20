<?php

namespace ElevenLab\Repository\Validators;


use Illuminate\Validation\Factory;
use ElevenLab\Validator\LaravelValidator;

class PresenceVerifierValidator extends LaravelValidator
{


    protected $uniqueColumnName = null;

    public function __construct(Factory $validator)
    {
        parent::__construct(app('validator'));
    }

    public function setUniqueColumnName($column)
    {

        $this->uniqueColumnName = $column;

        return $this;
    }

    protected function parserValidationRules($rules, $id = null)
    {
        if (null === $id) {
            return $rules;
        }

        array_walk($rules, function (&$rules, $field) use ($id) {
            if (!is_array($rules)) {
                $rules = explode("|", $rules);
            }

            foreach ($rules as $ruleIdx => $rule) {
                // get name and parameters
                @list($name, $params) = array_pad(explode(":", $rule), 2, null);

                // only do someting for the unique rule
                if (strtolower($name) != "unique") {
                    continue; // continue in foreach loop, nothing left to do here
                }

                $p = array_map("trim", explode(",", $params));

                // set field name to rules key ($field) (laravel convention)
                if (!isset($p[1])) {
                    $p[1] = $field;
                }

                // set 3rd parameter to id given to getValidationRules()
                $p[2] = $id;

                if($this->uniqueColumnName) {
                    $p[3] = $this->uniqueColumnName;
                }

                $params = implode(",", $p);
                $rules[$ruleIdx] = $name.":".$params;
            }
        });

        return $rules;
    }


}