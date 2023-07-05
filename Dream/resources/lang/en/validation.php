<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute принят.',
    'accepted_if' => ':attribute будет принят если :other равен :value.',
    'active_url' => ':attribute - это недопустимый URL-адрес.',
    'after' => ':attribute должен быть после этой даты :date.',
    'after_or_equal' => ' :attribute должен быть равен дате  :date или идти после нее.',
    'alpha' => ':attribute должен состоять только из букв.',
    'alpha_dash' => ':attribute должен содержать только буквы, цифры, тире и символы подчеркивания.',
    'alpha_num' => ' :attribute должен содержать только буквы и цифры.',
    'array' => ' :attribute должен быть массив.',
    'before' => ' :attribute должно быть перед  :date.',
    'before_or_equal' => ' :attribute должно быть перед :date либо равно ей.',
    'between' => [
        'numeric' => ' :attribute должно быть между :min и :max.',
        'file' => ' :attribute должно быть между :min и :max kilobytes.',
        'string' => ':attribute должно быть между :min и :max characters.',
        'array' => ':attribute должно быть между :min и :max items.',
    ],
    'boolean' => ' :attribute поле должно быть true или false.',
    'confirmed' => ' :attribute подтверждение не соответствует.',
    'current_password' => 'Некорректный паспорт.',
    'date' => ' :attribute это недействительная дата.',
    'date_equals' => ' :attribute должна быть дата, равная :date.',
    'date_format' => ' :attribute не соответствует формату :format.',
    'declined' => ' :attribute должно быть отклонено.',
    'declined_if' => ' :attribute будет отклонено, если :other равно :value.',
    'different' => ' :attribute и :other должно быть другими.',
    'digits' => ' :attribute должен быть :digits цифрой.',
    'digits_between' => ' :attribute должен быть между :min и :max цифрами.',
    'dimensions' => ' :attribute изображение имеет недопустимые размеры.',
    'distinct' => ' :attribute поле имеет повторяющееся значение.',
    'email' => ' :attribute должен быть действительный адрес электронной почты.',
    'ends_with' => ' :attribute должен заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранный :attribute недопустим.',
    'exists' => 'Выбранный :attribute недопустим.',
    'file' => ' :attribute должен быть файл.',
    'filled' => ' :attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ' :attribute должен быть больше, чем :value.',
        'file' => ':attribute должен быть больше, чем :value kilobytes.',
        'string' => ' :attribute должен быть больше, чем :value characters.',
        'array' => ' :attribute должен быть больше, чем :value items.',
    ],
    'gte' => [
        'numeric' => ' :attribute должно быть больше или равно :value.',
        'file' => ' :attribute должно быть больше или равно :value kilobytes.',
        'string' => ' :attribute должно быть больше или равно :value characters.',
        'array' => ' :attribute должно быть :value или больше.',
    ],
    'image' => ' :attribute должен быть изображением.',
    'in' => 'Выбранный :attribute недопустим.',
    'in_array' => ' :attribute не существует в  :other.',
    'integer' => ' :attribute должно быть целым числом.',
    'ip' => ' :attribute должно быть действительным IP address.',
    'ipv4' => ' :attribute должно быть действительным IPv4 address.',
    'ipv6' => ' :attribute должно быть действительным IPv6 address.',
    'json' => ' :attribute должно быть действительным JSON string.',
    'lt' => [
        'numeric' => ' :attribute должно быть меньше, чем :value.',
        'file' => ' :attribute должно быть меньше, чем :value kilobytes.',
        'string' => ' :attribute должно быть меньше, чем :value characters.',
        'array' => ' :attribute должно быть меньше, чем :value items.',
    ],
    'lte' => [
        'numeric' => ' :attribute должно быть меньше, чем или равно :value.',
        'file' => ' :attribute должно быть меньше, чем или равно :value kilobytes.',
        'string' => ' :attribute должно быть меньше, чем или равно :value characters.',
        'array' => ' :attribute должно быть меньше, чем или равно :value items.',
    ],
    'mac_address' => ' :attribute должен быть действительным MAC адресом.',
    'max' => [
        'numeric' => ' :attribute не должно быть больше, чем :max.',
        'file' => ' :attribute не должно быть больше, чем :max kilobytes.',
        'string' => ' :attribute не должно быть больше, чем :max characters.',
        'array' => ' :attribute не должно быть больше, чем :max items.',
    ],
    'mimes' => ' :attribute должен быть файл типа: :values.',
    'mimetypes' => ' :attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ' :attribute должно быть, по крайней мере :min.',
        'file' => ' :attribute должно быть, по крайней мере :min kilobytes.',
        'string' => ' :attribute должно быть, по крайней мере :min characters.',
        'array' => ' :attribute должно быть, по крайней мере :min items.',
    ],
    'multiple_of' => ' :attribute должно быть кратно :value.',
    'not_in' => 'Выбраный :attribute недопустим.',
    'not_regex' => ' :attribute формат недопустим.',
    'numeric' => ' :attribute должно быть число.',
    'password' => 'Некорректный паспорт.',
    'present' => ' :attribute поле должно присутствовать.',
    'prohibited' => ' :attribute поле запрещено.',
    'prohibited_if' => ' :attribute поле запрещено если :other равен :value.',
    'prohibited_unless' => 'Поле :attribute запрещено если :other не указан в  :values.',
    'prohibits' => 'Поле :attribute запрещено если :other не присутсвует.',
    'regex' => ' :attribute формат не допустим.',
    'required' => 'Поле :attribute не должно быть пустым.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для for: :values.',
    'required_if' => 'Поле :attribute обязательно если :other равно :value.',
    'required_unless' => 'Поле  :attribute обязательно если только  :other не указано :values.',
    'required_with' => 'Поле  :attribute обязательно если есть :values.',
    'required_with_all' => 'Поле :attribute обязательно если есть :values.',
    'required_without' => 'Поле :attribute обязательно, если нет :values.',
    'required_without_all' => 'Поле :attribute обязательно если нет ни одного значения :values.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => ' :attribute должен быть :size.',
        'file' => ' :attribute должен быть :size kilobytes.',
        'string' => ' :attribute должен быть :size characters.',
        'array' => ' :attribute должен быть :size items.',
    ],
    'starts_with' => ' :attribute должно начинаться с одного из следующих: :values.',
    'string' => ' :attribute должен быть строкой.',
    'timezone' => ' :attribute должен быть допустимым часовым поясом.',
    'unique' => ' :attribute уже принят.',
    'uploaded' => ' :attribute не удалось загрузить.',
    'url' => ' :attribute должен быть валидным URL.',
    'uuid' => 'The :attribute должен быть валидным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "titleDream"=>"Заголовок для сна",
        "descriptionDream"=>'Описание сна'
    ],

];
