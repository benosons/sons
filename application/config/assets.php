<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * assets
 *
 * Arquivo para definir as src dos CSS e JS através de módulos.
 * 
 * @author Bernardo Pinheiro Camargo
 * @since 2019
 */

// ORDER DE CARREGAMENTO DOS MODULOS
$config['default'] = ['bootstrap', 'plugin'];


/**
 * =====================
 * DEFINIÇÃO DOS MÓDULOS
 * =====================
 */

// Bootstrap
$config['bootstrap'] = [
    'css' => [ 
        site_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css')
    ],
    'js'  => [
        site_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')
    ]
];
$config['plugin'] = [
    'css'   =>  [
        site_url('assets/plugins/animate.css/animate.min.css'),
        site_url('assets/plugins/slick-carousel/slick/slick.css'),
        site_url('assets/plugins/font-awesome/css/font-awesome.min.css'),
        site_url('assets/css/themify-icons.css'),
        site_url('assets/css/themes/theme-blue.min.css'),
    ],
    'js'    =>  [
        site_url('assets/plugins/imagesloaded/imagesloaded.pkgd.min.js'),
        site_url('assets/plugins/masonry-layout/dist/masonry.pkgd.min.js'),
        site_url('assets/plugins/slick-carousel/slick/slick.min.js'),
        site_url('assets/plugins/waypoints/lib/jquery.waypoints.min.js'),
        site_url('assets/plugins/typed.js/dist/typed.min.js'),
        site_url('assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js'),
        site_url('assets/plugins/snapsvg/dist/snap.svg-min.js'),
        site_url('assets/plugins/isotope-layout/dist/isotope.pkgd.min.js'),
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBRMEkSrFLFkLKHyLVwT0DLLTqcUhUUZdM',
        site_url('assets/js/core.js'),
    ]
];






/**
 * ====================================
 * ADICIONAR OS PLUGINS NO ARRAY ABAIXO
 * ====================================
 */




// Plugins localizados na pasta assets/vendors
$config['vendors'] = [
    'css' => [

    ],

    'js' => [

    ]
];



// Ultimo módule a ser carregado
$config['custom'] = [
    'css' => [  
        site_url('assets/css/style.css'),
    ],
    'js' => [ 
        site_url('assets/js/functions.js'),         
    ]
];