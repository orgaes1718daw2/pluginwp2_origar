<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI: https://github.com/orgaes1718daw2/pluginwp2_origar
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Oriol Garcia Escudero
Author URI: https://github.com/orgaes1718daw2/
License: GNU GPLv3
*/

function admin_menu_peu_pagina(){
$titolPagina="Peu de pàgina per defecte";
$titolEntrada="Peu de pàgina per defecte";
$role="administrator";
$id="peu_pagina_per_defecte";
add_menu_page($titolPagina,$titolEntrada,$role,$id); ;
}
add_action('admin_menu','admin_menu_peu_pagina');
?>
