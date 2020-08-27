<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    |   following language lines contain   default error messages used by
    |   validator class. Some of  se rules have multiple versions such
    | as   size rules. Feel free to tweak each of  se messages here.
    |
    */

    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không là một đường dẫn hợp lệ.',
    'after' => ':attribute phải trong khoảng thời gian sau ngày :date.',
    'after_or_equal' => ':attribute phải trong khoảng thời gian sau hoặc trùng với ngày :date.',
    'alpha' => ':attribute chỉ chứa ký tự.',
    'alpha_dash' => ':attribute chỉ chứa ký tự, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ chứa ký tự và số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải trong khoảng thời gian trước ngày :date.',
    'before_or_equal' => ':attribute phải trong khoảng thời gian trước hoặc trùng với ngày :date.',
    'between' => [
        'numeric' => ':attribute trong khoảng từ :min đến :max.',
        'file' => '  :attribute trong khoảng từ :min đến :max kilobytes.',
        'string' => '  :attribute trong khoảng từ :min đến :max ký tự.',
        'array' => '  :attribute trong khoảng từ :min đến :max items.',
    ],
    'boolean' => '  :attribute phải là đúng hoặc sai.',
    'confirmed' => '  :attribute xác nhận thất bại.',
    'date' => '  :attribute không phải là ngày chính xác.',
    'date_equals' => '  :attribute phải là ngày trùng với :date.',
    'date_format' => '  :attribute không đúng định dạng :format.',
    'different' => '  :attribute và :o phải khác nhau.',
    'digits' => '  :attribute must be :digits digits.',
    'digits_between' => '  :attribute must be between :min and :max digits.',
    'dimensions' => '  :attribute has invalid image dimensions.',
    'distinct' => '  :attribute field has a duplicate value.',
    'email' => '  :attribute must be a valid email address.',
    'ends_with' => '  :attribute must end with one of   following: :values.',
    'exists' => '  selected :attribute is invalid.',
    'file' => '  :attribute must be a file.',
    'filled' => '  :attribute field must have a value.',
    'gt' => [
        'numeric' => '  :attribute must be greater than :value.',
        'file' => '  :attribute must be greater than :value kilobytes.',
        'string' => '  :attribute must be greater than :value characters.',
        'array' => '  :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => '  :attribute must be greater than or equal :value.',
        'file' => '  :attribute must be greater than or equal :value kilobytes.',
        'string' => '  :attribute must be greater than or equal :value characters.',
        'array' => '  :attribute must have :value items or more.',
    ],
    'image' => '  :attribute must be an image.',
    'in' => '  selected :attribute is invalid.',
    'in_array' => '  :attribute field does not exist in :o r.',
    'integer' => '  :attribute must be an integer.',
    'ip' => '  :attribute must be a valid IP address.',
    'ipv4' => '  :attribute must be a valid IPv4 address.',
    'ipv6' => '  :attribute must be a valid IPv6 address.',
    'json' => '  :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => '  :attribute must be less than :value.',
        'file' => '  :attribute must be less than :value kilobytes.',
        'string' => '  :attribute must be less than :value characters.',
        'array' => '  :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => '  :attribute must be less than or equal :value.',
        'file' => '  :attribute must be less than or equal :value kilobytes.',
        'string' => '  :attribute must be less than or equal :value characters.',
        'array' => '  :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => '  :attribute may not be greater than :max.',
        'file' => '  :attribute may not be greater than :max kilobytes.',
        'string' => '  :attribute may not be greater than :max characters.',
        'array' => '  :attribute may not have more than :max items.',
    ],
    'mimes' => '  :attribute must be a file of type: :values.',
    'mimetypes' => '  :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => '  :attribute must be at least :min.',
        'file' => '  :attribute must be at least :min kilobytes.',
        'string' => '  :attribute must be at least :min characters.',
        'array' => '  :attribute must have at least :min items.',
    ],
    'not_in' => '  selected :attribute is invalid.',
    'not_regex' => '  :attribute format is invalid.',
    'numeric' => '  :attribute must be a number.',
    'password' => '  password is incorrect.',
    'present' => '  :attribute field must be present.',
    'regex' => '  :attribute format is invalid.',
    'required' => '  :attribute field is required.',
    'required_if' => '  :attribute field is required when :o r is :value.',
    'required_unless' => '  :attribute field is required unless :o r is in :values.',
    'required_with' => '  :attribute field is required when :values is present.',
    'required_with_all' => '  :attribute field is required when :values are present.',
    'required_without' => '  :attribute field is required when :values is not present.',
    'required_without_all' => '  :attribute field is required when none of :values are present.',
    'same' => '  :attribute and :o r must match.',
    'size' => [
        'numeric' => '  :attribute must be :size.',
        'file' => '  :attribute must be :size kilobytes.',
        'string' => '  :attribute must be :size characters.',
        'array' => '  :attribute must contain :size items.',
    ],
    'starts_with' => '  :attribute must start with one of   following: :values.',
    'string' => '  :attribute must be a string.',
    'timezone' => '  :attribute must be a valid zone.',
    'unique' => '  :attribute has already been taken.',
    'uploaded' => '  :attribute failed to upload.',
    'url' => '  :attribute format is invalid.',
    'uuid' => '  :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using  
    | convention "attribute.rule" to name   lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    |   following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
