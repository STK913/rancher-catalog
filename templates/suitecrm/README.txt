### /docker/volumes/suitecrm/config_override.php ###
La configuration a �t� surcharg�e afin de g�rer le SSO. Ce fichier ne doit jamais �tre modifi� :
$sugar_config['authenticationClass'] = 'SAML2Authenticate';
$sugar_config['SAML_loginurl'] = 'https://EXAMPLE.eu.auth0.com/samlp/EXAMPLE';
$sugar_config['SAML_logouturl'] = 'https://EXAMPLE.eu.auth0.com/v2/logout?returnTo='.$sugar_config['site_url'];
$sugar_config['SAML_X509Cert'] = 'EXAMPLE';
/***CONFIGURATOR***/

### Autre solution de logout ###
Ajouter cette ligne dans la m�thode preLogout de /modules/Users/authentication/SAML2Authenticate/SAML2Authenticate.php :
// UbiMap : ajout du param�tre returnTo (au lieu de RelayState) qui permet de rediriger l'utilisateur vers le m�me site apr�s la d�connexion
$paramters['returnTo'] = OneLogin_Saml2_Utils::getSelfRoutedURLNoQuery();

### /docker/volumes/suitecrm/Configurator.php ###
-> Comme config_override.php est en lecture seule et ne peut pas �tre modifi�, alors Configurator.php a �t� modifi� � 2 endroits.