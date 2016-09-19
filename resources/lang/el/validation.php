<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    'accepted'   => 'Το :attribute πρέπει να είναι αποδεκτό.',
    'active_url' => 'Το :attribute δεν είναι έγκυρο URL.',
    'after'      => 'Η :attribute πρέπει να είναι ημερομηνία μεταγενέστερη της :date.',
    'alpha'      => 'Το :attribute πρέπει να περιέχει μόνο γράμματα.',
    'alpha_dash' => 'Το :attribute πρέπει να περιέχει μόνο γράμματα, αριθμούς και παύλες.',
    'alpha_num'  => 'Το :attribute πρέπει να περιέχει μόνο γράμματα και αριθμούς.',
    'array'      => 'Το :attribute πρέπει να είναι πίνακας.',
    'before'     => 'Η :attribute πρέπει να είναι ημερομηνία προγενέστερη της :date.',
    'between'    => [
        'numeric' => 'Η :attribute πρέπει να είναι ημερομηνία προγενέστερη της :date.',
        'file'    => 'Το :attribute πρέπει να είναι μεταξύ :min και :max.',
        'string'  => 'Το :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'array'   => 'Το :attribute πρέπει να είναι μεταξύ :min και :max στοιχείων.',
    ],
    'boolean'        => 'Το :attribute πρέπει να είναι μεταξύ :min και :max στοιχείων.',
    'confirmed'      => 'Το πεδίο :attribute πρέπει να είναι σωστό ή λάθος.',
    'date'           => 'Η επιβεβαίωση :attribute δεν ταιριάζει.',
    'date_format'    => 'Η :attribute δεν είναι έγκυρη ημερομηνία.',
    'different'      => 'Το :attribute δεν ταιριάζει με τη μορφή :format.',
    'digits'         => 'Το :attribute και το :other πρέπει να είναι διαφορετικά.',
    'digits_between' => 'Το :attribute πρέπει να είναι :digits ψηφία.',
    'email'          => 'Το :attribute πρέπει να είναι μεταξύ :min και :max ψηφίων.',
    'exists'         => 'Το :attribute πρέπει να είναι ένα έγκυρο email.',
    'distinct'       => 'Το πεδίο :attribute έχει μια διπλή καταχώρηση.',
    'filled'         => 'Η μορφή του :attribute δεν είναι έγκυρη.',
    'image'          => 'Το :attribute πρέπει να είναι εικόνα.',
    'in'             => 'Το :attribute πρέπει να είναι εικόνα.',
    'in_array'       => 'Το πεδίο :attribute δεν υπάρχει στο :other.',
    'integer'        => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'ip'             => 'Η :attribute πρέπει να είναι ακέραιος αριθμός.',
    'json'           => 'Το :attribute πρέπει να είναι ένα έγκυρο JSON string.',
    'max'            => [
        'numeric' => 'Η :attribute πρέπει να είναι μια έγκυρη διεύθυνση IP.',
        'file'    => 'Το :attribute δεν πρέπει να είναι μεγαλύτερο από :max.',
        'string'  => 'Το :attribute δεν πρέπει να είναι μεγαλύτερο από :max kilobytes.',
        'array'   => 'Το :attribute δεν πρέπει να είναι μεγαλύτερο από :max στοιχεία.',
    ],
    'mimes' => 'Το :attribute δεν πρέπει να έχει περισσότερα από :max στοιχεία.',
    'min'   => [
        'numeric' => 'Το :attribute πρέπει να είναι ένα αρχείο τύπου: :values.',
        'file'    => 'Το :attribute πρέπει να είναι τουλάχιστον :min kilobytes.',
        'string'  => 'Το :attribute πρέπει να είναι τουλάχιστον :min kilobytes.',
        'array'   => 'Το :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
    ],
    'not_in'               => 'Το :attribute πρέπει να έχει τουλάχιστον :min στοιχεία.',
    'numeric'              => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'present'              => 'Το πεδίο :attribute πρέπει να είναι συμπληρωμένο.',
    'regex'                => 'Το πεδίο :attribute πρέπει να είναι αριθμός.',
    'required'             => 'Η μορφή του :attribute δεν είναι έγκυρη.',
    'required_if'          => 'Το πεδίο :attribute απαιτείται.',
    'required_unless'      => 'Το πεδίο :attribute απαιτείται εκτός εάν το :other είναι σε :values.',
    'required_with'        => 'Το πεδίο :attribute απαιτείται όταν το :other είναι :value.',
    'required_with_all'    => 'Το πεδίο :attribute απαιτείται όταν το :values είναι συμπληρωμένο.',
    'required_without'     => 'Το πεδίο :attribute απαιτείται όταν το :values είναι συμπληρωμένο.',
    'required_without_all' => 'Το πεδίο :attribute απαιτείται όταν το :values δεν είναι συμπληρωμένο.',
    'same'                 => 'Το πεδίο :attribute απαιτείται όταν κανένα από τα :values δεν είναι συμπληρωμένο.',
    'size'                 => [
        'numeric' => 'Το :attribute και το :other πρέπει να ταιριάζουν.',
        'file'    => 'Το :attribute πρέπει να είναι :size kilobytes.',
        'string'  => 'Το :attribute πρέπει να είναι :size χαρακτήρες.',
        'array'   => 'Το :attribute πρέπει να είναι :size χαρακτήρες.',
    ],
    'string'   => 'The :attribute πρέπει να περιέχει :size στοιχεία.',
    'timezone' => 'Η :attribute πρέπει να είναι μια έγκυρη ζώνη.',
    'unique'   => 'Το :attribute χρησιμοποιείται ήδη.',
    'url'      => 'Η μορφή του :attribute δεν είναι έγκυρη.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
