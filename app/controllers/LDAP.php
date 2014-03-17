<?php
/**
 * Created by PhpStorm.
 * User: eteng
 * Date: 3/16/14
 * Time: 6:51 PM
 */

class LDAP {

    public static function authenticate($username, $password)
    {
        if(empty($username) or empty($password))
        {
            Log::error('Error binding to LDAP: username or password empty');
            return false;
        }

        $ldapRdn = static::getLdapRdn($username);

        $ldapconn = ldap_connect( Config::get('auth.ldap_server') ) or die("Could not connect to LDAP server.");

        $result = false;

        if ($ldapconn)
        {
            $ldapbind = @ldap_bind($ldapconn, $ldapRdn, $password);

            if ($ldapbind)
            {
                $result = true;
            } else {
                Log::error('Error binding to LDAP server.');
            }

            ldap_unbind($ldapconn);

        } else {
            Log::error('Error connecting to LDAP.');
        }

        return $result;

    }

    public static function getLdapRdn($username)
    {
        return str_replace('[username]', $username, 'CN=[username],' . Config::get('auth.ldap_tree'));
    }

} 