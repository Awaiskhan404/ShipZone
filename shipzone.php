<?php
/**
 * Plugin Name: Shipzone for Northern Ireland By Awais khan
 * Description: Adds custom locations to woocommerce shipping zone by Awais khan
 * Plugin URI: https://awaiskhan.com.pk
 * Author: Awais khan
 * Version: 1.0
 * Author URI: https://awaiskhan.com.pk

/**
 * Add a new country to countries list
 */
add_filter( 'woocommerce_countries',  'handsome_bearded_guy_add_my_country' );
function handsome_bearded_guy_add_my_country( $countries ) {
  $new_countries = array(
	                    'NIRE'  => __( 'Northern Ireland', 'woocommerce' ),
	                    );

	return array_merge( $countries, $new_countries );
}

add_filter( 'woocommerce_continents', 'handsome_bearded_guy_add_my_country_to_continents' );
function handsome_bearded_guy_add_my_country_to_continents( $continents ) {
	$continents['EU']['countries'][] = 'NIRE';
	return $continents;
}




add_filter( 'woocommerce_states', 'techiepress_custom_shipping_zones' );

function techiepress_custom_shipping_zones( $states ) {
    
    $states['NIRE'] = array(
        'Antrim' => 'County Antrim',    
        'Armagh' => 'County Armagh',    
        'Down' => 'County Down',
        'Londonderry' => 'County Londonderry',
        'Fermanagh' => 'County Fermanagh',
        'Tyrone' => 'County Tyrone'
    );
    
    return $states ;
}

