<?php

return array(
    'account_suffix' => "@nubeslab.com",

    'domain_controllers' => array("138.91.41.100"), // An array of domains may be provided for load balancing.

    'base_dn' => 'DC=nubeslab,DC=com',

    'admin_username' => 'eteng',

    'admin_password' => 'Abcd1234',

    'real_primary_group' => true, // Returns the primary group (an educated guess).

    'use_ssl' => false, // If TLS is true this MUST be false.

    'use_tls' => false, // If SSL is true this MUST be false.

    'recursive_groups' => false,
);

