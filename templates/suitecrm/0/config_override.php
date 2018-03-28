<?php
/***CONFIGURATOR***/
$sugar_config['disable_persistent_connections'] = false;
$sugar_config['passwordsetting']['SystemGeneratedPasswordON'] = '0';
$sugar_config['passwordsetting']['oneupper'] = '0';
$sugar_config['passwordsetting']['onelower'] = '0';
$sugar_config['passwordsetting']['onenumber'] = '0';
$sugar_config['passwordsetting']['onespecial'] = '0';
$sugar_config['authenticationClass'] = 'SAML2Authenticate';
$sugar_config['SAML_loginurl'] = 'https://ubimap.eu.auth0.com/samlp/000';
$sugar_config['SAML_logouturl'] = 'https://ubimap.eu.auth0.com/v2/logout?returnTo='.$sugar_config['site_url'];
$sugar_config['SAML_X509Cert'] = '';
/***CONFIGURATOR***/