<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
//Website links
$routes->get('/', 'WebsiteController::index');

$routes->group('2dcf222ffff3bbd2823d0226ef789985cf237c96', function ($routes) {
    $routes->get('593007a44c17141aef5bc2585c4a7497ecee5243', 'WebsiteController::quote_page');
    $routes->get('593007a44c17141aef5bc2335c4a7497ecee5243', 'WebsiteController::register_page');
    $routes->get('593007a44c17141aef5bc2665c4a7497ecee5243', 'WebsiteController::about_page');
    $routes->post('b4f4e15482b71648b505ba1e55ee43cbbe6473b0', 'WebsiteController::submit_registration');
});

//Administration
$routes->get('/login', 'AuthController::login');

//AuthenticationRoute
$routes->group('b6fcfce4e41ea7c76711a3e80acbf51adc09705a', function ($routes) {
    $routes->post('99dea78007133396a7b8ed70578ac6ae', 'AuthController::admin_login');
});
$routes->group('1622de66d3ea3e8fd5727ee63525a8f33f839055',['filter' => 'authGuard'], function ($routes) {
    $routes->get('2938c7f7e560ed972f8a4f68e80ff834', 'AuthController::dashboard');
    $routes->get('2576a1ab40267ffb5ffb6a5348dd6bc0', 'AuthController::loadprofilepage');
    $routes->get('8df25be65e2e6d9d13ad84cd96b7f528', 'AuthController::password_change');
    $routes->get('8765c4c4fa2abbf1a11c01f99f8aff0c/(:any)', 'AuthController::verify_current_password/$1');
    $routes->post('f0f25f866f5ebef42fdd897cc22b0045', 'AuthController::update_user_password');
    $routes->get('4236a440a662cc8253d7536e5aa17942', 'AuthController::logout');
});


//Administration
$routes->group('529288ce6f5efcd3a2f57dea8f48fb4131f90c3e',['filter' => 'authGuard'], function ($routes) {
    $routes->get('49295c3e3b4155411b8f0c3f0044a22f', 'AdminController::load_contact_logo');
    $routes->post('7116d78358b04f1a6b81f66d608b9016', 'AdminController::update_contact_logo_details');
    $routes->get('f5a2f5ad159726f17d1d81f3fd594aed', 'AdminController::load_organizationdetials');
    $routes->post('a33ba8ad931de1ba754b4ac2494220a1', 'AdminController::update_organization_details');

    $routes->get('7462880e9eae014c37971f3760434652', 'AdminController::load_manage_menu');
    $routes->post('65fbc67824848cbc8f176518d6521b65', 'AdminController::create_menu');
    $routes->post('653243d62dffbc325812106c46ca7b7f', 'AdminController::delete_menu');
    $routes->get('1cf47161551a4036fd5ac4e7f64b15fd/(:any)', 'AdminController::getmenudetailsbyid/$1');

    $routes->get('089e4751c022eb462686ac9f4f296305/(:num)', 'AdminController::load_submenu/$1');
    $routes->post('fe6909f911b95320b83ec4039d5c080d', 'AdminController::create_submenu');

    $routes->get('e9883d615ca4a5bc0d3d3c91afe2d881', 'AdminController::manage_slider');
    $routes->post('41d41a70ee159c753825d644a0705712', 'AdminController::update_slider_type');
    $routes->post('ecf5a92227ff1f85daa1beaa9f8a3373', 'AdminController::update_slider');
    $routes->get('b1ac6ca4b1dba1e73eb8f0bf4e458f4c/(:num)', 'AdminController::get_slider_by_id/$1');
    $routes->post('2bcacebf827b3134e0507192378273bc', 'AdminController::delete_slider');
    $routes->post('102561b2d487f9dbaa62a55c8bbc9130', 'AdminController::update_video_for_slider');

    $routes->get('2ade8118c7e58315ea0ad1ee121e7297', 'AdminController::load_services_page');
    $routes->post('f82f14bcb55ca6da880d182cee0c951f', 'AdminController::save_services_detials');
    $routes->get('998dcb8c3a48509268b92532f247b244/(:num)', 'AdminController::get_services_by_id/$1');
    $routes->post('2346265cc0cdd0977eeacc481987ed1c', 'AdminController::delete_services_detials');

    $routes->get('2ade8118c7e58315ea0ad1ee121e7256', 'AdminController::load_cleaning_services_page');
    $routes->post('f82f14bcb55ca6da880d182cee0c9123', 'AdminController::save_cleaning_services_details');
    $routes->get('998dcb8c3a48509268b92532f247b123/(:num)', 'AdminController::get_cleaning_services_by_id/$1');
    $routes->post('2346265cc0cdd0977eeacc481987e123', 'AdminController::delete_cleaning_services_details');

    $routes->get('866f61182ded2296d8d73bcbe8e24380', 'AdminController::load_excellancy_page');
    $routes->post('9b4782210240dabe1ec496b29958f0b4', 'AdminController::save_excellancy_details');
    $routes->get('2d46ce35ca107546bcfaa0c995da6099/(:num)', 'AdminController::get_excellancy_by_id/$1');
    $routes->post('29e9b464daf4fc9119b77667bbe8179a', 'AdminController::delete_excellancy_details');

    $routes->get('9ed6280103d930c543274dcb46af1fa9', 'AdminController::load_cleaning_process_page');
    $routes->post('9b4783310240dabe1ec496b29958f0b4', 'AdminController::save_cleaning_process_details');
    $routes->get('2d46ce35ca103346bcfaa0c995da6099/(:num)', 'AdminController::get_cleaning_process_by_id/$1');
    $routes->post('29e9b464daf4fc9339b77667bbe8179a', 'AdminController::delete_cleaning_process_details');
});

