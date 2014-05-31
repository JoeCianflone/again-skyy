<?php
namespace Cianflone\Again\Validators;

use Illuminate\Validation\Factory as Validator;

abstract class BaseValidator
{
    protected $errors = [];
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validate($data, $ruleset = 'create')
    {
        // We allow collections, so transform to array.
        if ($data instanceof Collection) {
            $data = $data->toArray();
        }

        // Execute sanitizers over the data before validation.
        // $this->runSanitizers($data);

        // Load the correct ruleset.
        $rules = $this->rules[$ruleset];

        // Load the correct messageset.
        $messages = $this->messages[$ruleset];

        // Create the validator instance and validate.
        $v = $this->validator->make($data, $rules, $messages);

        if (!$result = $v->passes()) {
            $this->errors = $v->messages();
        }

        //dd  ($result);
        // Return the validation result.
        return $result;
    }

    public function getMessage()
    {
        return $this->errors;
    }

}
