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

    // Setup form fields
    'setup' => [
        'email'            => 'Email',
        'username'         => 'Όνομα Χρήστη',
        'password'         => 'Κωδικός Πρόσβασης',
        'site_name'        => 'Όνομα ιστοσελίδας',
        'site_domain'      => 'Domain Name',
        'site_timezone'    => 'Επιλέξτε τη ζώνη ώρας σας',
        'site_locale'      => 'Επιλέξτε γλώσσα',
        'enable_google2fa' => 'Ενεργοποίηση Google Two Factor Authentication',
        'cache_driver'     => 'Cache Driver',
        'session_driver'   => 'Session Driver',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Όνομα Χρήστη ή Email',
        'email'         => 'Email',
        'password'      => 'Κωδικός Πρόσβασης',
        '2fauth'        => 'Κωδικός Ταυτοποίησης',
        'invalid'       => 'Μη έγκυρο Όνομα Χρήστη ή Κωδικός Πρόσβασης',
        'invalid-token' => 'Μη έγκυρος κωδικός ταυτοποίησης',
        'cookies'       => 'Πρέπει να ενεργοποιήσετε τα cookies για να συνδεθείτε.',
        'rate-limit'    => 'Το Rate limit έχει ξεπεραστεί.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Όνομα',
        'status'             => 'Κατάσταση',
        'component'          => 'Στοιχείο',
        'message'            => 'Μήνυμα',
        'message-help'       => 'Μπορείτε να χρησιμοποιήσετε Markdown.',
        'scheduled_at'       => 'Πότε επιθυμείτε να προγραμματιστεί η συντήρηση;',
        'incident_time'      => 'Πότε έλαβε χώρα το περιστατικό;',
        'notify_subscribers' => 'Ειδοποίηση συνδρομητών;',
        'visibility'         => 'Ποιοι βλέπουν το περιστατικό',
        'public'             => 'Δημόσιο',
        'logged_in_only'     => 'Ορατό μόνο σε συνδεδεμένους χρήστες',
        'templates'          => [
            'name'     => 'Όνομα',
            'template' => 'Πρότυπο Περιστατικού',
            'twig'     => 'Στα Πρότυπα Περιστατικών μπορεί να χρησιμοποιηθεί η γλώσσα <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a>.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Όνομα',
        'status'      => 'Κατάσταση',
        'group'       => 'Ομάδα',
        'description' => 'Περιγραφή',
        'link'        => 'Σύνδεσμος',
        'tags'        => 'Tags',
        'tags-help'   => 'Χωρίστε με κόμμα.',
        'enabled'     => 'Ενεργοποίηση Στοιχείου;',

        'groups' => [
            'name'               => 'Όνομα',
            'collapsing'         => 'Επιλέξτε πώς θα εμφανίζεται η Ομάδα Στοιχείων',
            'visible'            => 'Πάντα ανοιχτή',
            'collapsed'          => 'Κλειστή',
            'collapsed_incident' => 'Κλειστή, αλλά να ανοίγει σε περίπτωση που αντιμετωπίζει πρόβλημα κάποιο Στοιχείο',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Όνομα',
        'suffix'           => 'Κατάληξη',
        'description'      => 'Περιγραφή',
        'description-help' => 'Μπορείτε να χρησιμοποιήσετε Markdown.',
        'display-chart'    => 'Εμφάνιση διαγράμματος στη Σελίδα Κατάστασης;',
        'default-value'    => 'Προεπιλεγμένη αξία',
        'calc_type'        => 'Υπολογισμός Μέτρησης',
        'type_sum'         => 'Σύνολο',
        'type_avg'         => 'Μέσος όρος',
        'places'           => 'Δεκαδικά ψηφία',
        'default_view'     => 'Προεπιλεγμένη εμφάνιση',
        'threshold'        => 'Πόσα λεπτά μεταξύ των Μετρήσεων;',

        'points' => [
            'value' => 'Αξία',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Όνομα ιστοσελίδας',
            'site-url'               => 'Διεύθυνση URL ιστοσελίδας',
            'display-graphs'         => 'Εμφάνιση διαγράμματος στη Σελίδα Κατάστασης;',
            'about-this-page'        => 'Σχετικά με τη σελίδα',
            'days-of-incidents'      => 'Πόσες μέρες Περιστατικών να εμφανίζονται;',
            'banner'                 => 'Εικόνα Banner',
            'banner-help'            => "Συνιστάται να μην ανεβάζετε αρχεία μεγαλύτερα από 930px σε πλάτος.",
            'subscribers'            => 'Να επιτρέπεται η εγγραφή στις ειδοποιήσεις μέσω email;',
            'automatic_localization' => 'Αυτόματη προσαρμογή γλώσσας στη Σελίδα Κατάστασης με βάση την τοποθεσία του επισκέπτη;',
        ],
        'analytics' => [
            'analytics_google'       => 'Κωδικός Google Analytics',
            'analytics_gosquared'    => 'Κωδικός GoSquared Analytics',
            'analytics_piwik_url'    => 'URL του Piwik instance (χωρίς http(s)://)',
            'analytics_piwik_siteid' => 'Site ID του Piwik',
        ],
        'localization' => [
            'site-timezone'        => 'Ζώνη ώρας ιστοσελίδας',
            'site-locale'          => 'Γλώσσα ιστοσελίδας',
            'date-format'          => 'Μορφή ημερομηνίας',
            'incident-date-format' => 'Μορφή timestamp Περιστατικού',
        ],
        'security' => [
            'allowed-domains'      => 'Επιτρεπόμενα domains',
            'allowed-domains-help' => 'Διαχωρείστε με κόμμα. Το domain που έχει προστεθεί παραπάνω, είναι επιτρεπόμενο από προεπιλογή.',
        ],
        'stylesheet' => [
            'custom-css' => 'Προσαρμοσμένο Stylesheet',
        ],
        'theme' => [
            'background-color'        => 'Χρώμα Background',
            'background-fills'        => 'Γέμισμα Background (Στοιχεία, Περιστατικά, footer)',
            'banner-background-color' => 'Χρώμα Banner background',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Πλήρες πλάτος στο banner;',
            'text-color'              => 'Χρώμα Κειμένου',
            'dashboard-login'         => 'Εμφάνιση του Πίνακα Ελέγχου στο footer?',
            'reds'                    => 'Κόκκινο (χρησιμοποιείται για σφάλματα)',
            'blues'                   => 'Μπλε (χρησιμοποιείται για πληροφορίες)',
            'greens'                  => 'Πράσινο (χρησιμοποιείται για επιτυχία)',
            'yellows'                 => 'Κίτρινο (χρησιμοποιείται για ειδοποιήσεις)',
            'oranges'                 => 'Πορτοκαλί (χρησιμοποιείται για σημειώσεις)',
            'metrics'                 => 'Γέμισμα Μετρήσεων',
            'links'                   => 'Σύνδεσμοι',
        ],
    ],

    'user' => [
        'username'       => 'Όνομα Χρήστη',
        'email'          => 'Email',
        'password'       => 'Κωδικός Πρόσβασης',
        'api-token'      => 'API',
        'api-token-help' => 'Σε περίπτωση που αναπαράξετε ξανά το API, θα αποκλείσετε τις υπάρχουσες εφαρμοφές από την πρόσβαση στο Cachet.',
        'gravatar'       => 'Αλλάξτε την εικόνα προφίλ σας στο Gravatar.',
        'user_level'     => 'Επίπεδο Χρήστη',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Χρήστης',
        ],
        '2fa' => [
            'help' => 'Η ενεργοποίηση του two factor authentication ενισχύει την ασφάλεια του λογαριασμού σας. Θα χρειαστεί να κατεβάσετε το <a href="https://support.google.com/accounts/answer/1066447?hl=en">Google Authenticator</a> ή κάποια παρόμοια εφαρμογή στην κινητή σας συσκευή. Όταν συνδεθείτε, θα σας ζητηθεί να εισάγεται έναν κωδικό που αναπαράγεται από την εφαρμογή.',
        ],
        'team' => [
            'description' => 'Προσκαλέστε τα μέλη της Ομάδας σας εισάγοντας τα emails τους εδώ.',
            'email'       => 'Email #:id',
        ],
    ],

    // Buttons
    'add'    => 'Προσθήκη',
    'save'   => 'Αποθήκευση',
    'update' => 'Ενημέρωση',
    'create' => 'Δημιουργία',
    'edit'   => 'Επεξεργασία',
    'delete' => 'Διαγραφή',
    'submit' => 'Κατάθεση',
    'cancel' => 'Ακύρωση',
    'remove' => 'Αφαίρεση',
    'invite' => 'Πρόσκληση',
    'signup' => 'Εγγραφή',

    // Other
    'optional' => '* Προαιρετικό',
];
