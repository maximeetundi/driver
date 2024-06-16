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

    'accepted' => 'Le champ :attribute doit être accepté.',
    'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale au :date.',
    'alpha' => 'Le champ :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne peut contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le champ :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale au :date.',
    'between' => [
        'numeric' => 'La valeur de :attribute doit être entre :min et :max.',
        'file' => 'Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.',
        'string' => 'Le texte :attribute doit contenir entre :min et :max caractères.',
        'array' => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'date' => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit avoir entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par une des valeurs suivantes : :values.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'La valeur de :attribute doit être supérieure à :value.',
        'file' => 'Le fichier :attribute doit être supérieur à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir plus de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
        'file' => 'Le fichier :attribute doit être supérieur ou égal à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au moins :value caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :value éléments.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'La valeur de :attribute doit être inférieure à :value.',
        'file' => 'Le fichier :attribute doit être inférieur à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir moins de :value caractères.',
        'array' => 'Le tableau :attribute doit contenir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
        'file' => 'Le fichier :attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au maximum :value caractères.',
        'array' => 'Le tableau :attribute ne doit pas contenir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => 'La valeur de :attribute ne peut pas être supérieure à :max.',
        'file' => 'Le fichier :attribute ne peut pas être supérieur à :max kilo-octets.',
        'string' => 'Le texte :attribute ne peut pas contenir plus de :max caractères.',
        'array' => 'Le tableau :attribute ne peut pas contenir plus de :max éléments.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La valeur de :attribute doit être au moins de :min.',
        'file' => 'Le fichier :attribute doit être au moins de :min kilo-octets.',
        'string' => 'Le texte :attribute doit contenir au moins :min caractères.',
        'array' => 'Le tableau :attribute doit contenir au moins :min éléments.',
    ],
    'not_in' => 'Le champ :attribute sélectionné est invalide.',
    'not_regex' => 'Le format de :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun de :values n\'est présent.',
    'same' => 'Les champs :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file' => 'Le fichier :attribute doit être de :size kilo-octets.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
        'array' => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par une des valeurs suivantes : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le champ :attribute a déjà été pris.',
    'uploaded' => 'Le champ :attribute a échoué à téléverser.',
    'url' => 'Le format de :attribute est invalide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

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

    'attributes' => [],

];
