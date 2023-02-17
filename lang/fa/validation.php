<?php

return [
    'integer' => ':attribute باید بصورت عددی باشد.',
    'exists' => ':attribute در سیستم ثبت نشده است!',
    'string' => ':attribute باید بصورت صحیح وارد شود.',
    'required' => ':atrtibute الزامیست.',
    'email' => ':attribute نامعتبر می باشد.',
    'unique' => ':attribute تکراریست.',
    'confirmed' => ':attribute مطابقت ندارد',
    'max' => [
        'string' => ':attribute حداکثر باید :max کاراکتر باشد.',
        'integer' => ':attribute حداکثر باید :max عدد باشد.',
    ],
    'min' => [
        'string' => ':attribute حداقل باید :min کاراکتر باشد.',
    ],
    'digits' => ':attribute باید حداقل :min کاراکتر باشد.',
    'numeric' => ':attribute باید بصورت عددی باشد.',
    'attributes' => [
        'email' => 'ایمیل',
        'name' => 'نام کاربری',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تایید رمز عبور'
    ],
];
