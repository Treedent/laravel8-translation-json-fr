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
    'after' => 'Le champ :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute doit ne contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute doit ne contenir que des lettres, nombres, tirets et tiret du bas.',
    'alpha_num' => 'Le champ :attribute doit ne contenir que des lettres et des nombres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'file' => 'Le champ :attribute doit être compris entre :min et :max kilobytes.',
        'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
        'array' => 'Le champ :attribute doit comporter entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ :attribute ne correspond pas..',
    'date' => 'Le champ :attribute ne contient pas une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'different' => 'Les champ :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit être à :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions d\'image no valides.',
    'distinct' => 'Le champ :attribute comporte une valeur dupliquée.',
    'email' => 'Le champ :attribute doit être une adresse email valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit contenir une valeur.',
    'gt' => [
        'numeric' => 'Le champ :attribute doit être plus grand que :value.',
        'file' => 'Le champ :attribute doit être plus grand que :value kiloOctet(s).',
        'string' => 'Le champ :attribute doit être plus grand que :value caractère(s).',
        'array' => 'Le champ :attribute doit comporter plus que :value élément(s).',
    ],
    'gte' => [
        'numeric' => 'Le champ :attribute doit être plus grand ou égal à :value.',
        'file' => 'Le champ :attribute doit être plus grand ou égal à :value kiloOctet(s).',
        'string' => 'Le champ :attribute doit être plus grand ou égal à :value caractère(s).',
        'array' => 'Le champ :attribute doit comporter :value élément(s) ou plus.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute sélectionné est invalid.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un nombre entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaine JSON valide.',
    'lt' => [
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'file' => 'Le champ :attribute doit être inférieur à :value kiloOctet(s).',
        'string' => 'Le champ :attribute doit être inférieur à :value caractère(s).',
        'array' => 'Le champ :attribute doit comporter moins de :value élément(s).',
    ],
    'lte' => [
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kiloOctet(s).',
        'string' => 'Le champ :attribute doit être inférieur ou égal à :value caractères.',
        'array' => 'Le champ :attribute doit comporter plus de :value élément(s).',
    ],
    'max' => [
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'file' => 'Le champ :attribute ne doit pas être supérieur à :max kiloOctet(s).',
        'string' => 'Le champ :attribute ne doit pas être supérieur à :max caractères.',
        'array' => 'Le champ :attribute ne doit pas être supérieur à :max élément(s).',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type: :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le champ :attribute doit être au moins de :min.',
        'file' => 'Le champ :attribute doit être au moins de :min kiloOctet(s).',
        'string' => 'Le champ :attribute doit être au moins de :min caractères.',
        'array' => 'Le champ :attribute doit être au moins de :min élément(s).',
    ],
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'Le choix :attribute sélectionné n\'est pas valide.',
    'not_regex' => 'Le format du champ :attribute n\'est pas valide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => 'Le mot de passe n\'est pas correct.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du champ :attribute n\'est pas valide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis quand :other est :value.',
    'required_unless' => 'Le champ :attribute est requis tant que :other est compris dans :values.',
    'required_with' => 'Le champ :attribute est requis quand :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis quand :values sont présents.',
    'required_without' => 'Le champ :attribute est requis quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis quand aucun de :values sont présents.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdite lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdite lorsque tant que :other est dans :values.',
    'same' => 'Le champ :attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => 'Le champ :attribute doit être de :size.',
        'file' => 'Le champ :attribute doit être de :size kiloOctet(s).',
        'string' => 'Le champ :attribute doit être de :size caractères.',
        'array' => 'Le champ :attribute doit contenir :size éléments.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être une zone valide.',
    'unique' => 'Le champ :attribute a déjà été pris.',
    'uploaded' => 'Le champ :attribute a échoué au téléchargement.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',
    'alpha_spaces_hyphens' => 'Le champ :attribute doit ne contenir que des lettres, des espaces ou des tirets.',

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
