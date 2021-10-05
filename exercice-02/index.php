<?php
/**
 * @package HONO
 * @version 1.0.0
 */
/*
Plugin Name: HONO WORLD !
Plugin URI: null
Description: Un mini plugin wordpress permettant d'afficher une liste de réseaux sociaux via un shortcode.
Author: Azim BELEDJHEM
Version: 1.7.2
Author URI: https://github.com/Azixp
*/

function afficherListe(){
    $liste = '
    <ul>
        <li><a href="https://facebook.com.">Facebook</a></li>
        <li><a href="https://instagram.com">Instagram</a></li>
        <li><a href="https://www.linkedin.com">Linkedin</a></li>
        <li><a href="https://github.com/honoagency">Github Honoagency</a></li>
    </ul>
    ';
    return $liste;
}

add_shortcode('show_social_network', 'afficherListe');


