<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_admin_admin_ajout_jeux' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::ajout_jeux'], [], [['text', '/admin/ajout_jeux']], [], []],
    'app_annonce_index' => [[], ['_controller' => 'App\\Controller\\AnnonceController::index'], [], [['text', '/annonce']], [], []],
    'app_annonce_new_annonce' => [[], ['_controller' => 'App\\Controller\\AnnonceController::new_annonce'], [], [['text', '/new_annonce']], [], []],
    'home_page' => [[], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], []],
    'profile' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::showProfile'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/profile']], [], []],
    'profiles' => [[], ['_controller' => 'App\\Controller\\ProfileController::showAllProfiles'], [], [['text', '/profiles']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registration']], [], []],
];
