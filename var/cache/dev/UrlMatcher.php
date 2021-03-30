<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/activitys' => [[['_route' => 'activity_index', '_controller' => 'App\\Controller\\ActivityController::list'], null, null, null, true, false, null]],
        '/admin/activitys/form' => [[['_route' => 'activity_add', '_controller' => 'App\\Controller\\ActivityController::add'], null, null, null, false, false, null]],
        '/activity/front' => [[['_route' => 'activity_front', '_controller' => 'App\\Controller\\ActivityFrontController::index'], null, null, null, false, false, null]],
        '/listactivityfront' => [[['_route' => 'activity_frontlist', '_controller' => 'App\\Controller\\ActivityFrontController::list'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'back_template', '_controller' => 'App\\Controller\\BackTemplateController::index'], null, null, null, true, false, null]],
        '/admin/categorie/back' => [[['_route' => 'categorie_back', '_controller' => 'App\\Controller\\CategorieBackController::index'], null, null, null, false, false, null]],
        '/admin/categorie/add' => [[['_route' => 'categorie_add', '_controller' => 'App\\Controller\\CategorieBackController::addCategory'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'category_activity', '_controller' => 'App\\Controller\\CategoryActivityController::index'], null, null, null, true, false, null]],
        '/admin/categories/form' => [[['_route' => 'category_activityadd', '_controller' => 'App\\Controller\\CategoryActivityController::add'], null, null, null, false, false, null]],
        '/admin/evennements' => [[['_route' => 'evennement', '_controller' => 'App\\Controller\\EvennementController::index'], null, null, null, true, false, null]],
        '/admin/evennements/form' => [[['_route' => 'create_event', '_controller' => 'App\\Controller\\EvennementController::createEvent'], null, null, null, false, false, null]],
        '/evennements' => [[['_route' => 'evennement_front', '_controller' => 'App\\Controller\\EvennementFrontController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\HomeController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/forget-password' => [[['_route' => 'forget_password', '_controller' => 'App\\Controller\\LoginController::forgetPassword'], null, null, null, false, false, null]],
        '/admin/promotions' => [[['_route' => 'back_template_promotions', '_controller' => 'App\\Controller\\PromotionController::promotions'], null, null, null, true, false, null]],
        '/admin/promotions/form' => [[['_route' => 'back_template_promotions_form', '_controller' => 'App\\Controller\\PromotionController::newPromotion'], null, null, null, false, false, null]],
        '/admin/publicitys' => [[['_route' => 'back_template_publicitys', '_controller' => 'App\\Controller\\PublicityController::publicitys'], null, null, null, true, false, null]],
        '/admin/publicitys/form' => [[['_route' => 'back_template_publicitys_form', '_controller' => 'App\\Controller\\PublicityController::newPublicity'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'reservation_event_front', '_controller' => 'App\\Controller\\ReservationEventFrontController::index'], null, null, null, true, false, null]],
        '/payment/success' => [[['_route' => 'successPaiment', '_controller' => 'App\\Controller\\ReservationEventFrontController::success'], null, null, null, false, false, null]],
        '/payment/error' => [[['_route' => 'errorPaiment', '_controller' => 'App\\Controller\\ReservationEventFrontController::error'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'back_users', '_controller' => 'App\\Controller\\UserController::publicitys'], null, null, null, true, false, null]],
        '/admin/users/form' => [[['_route' => 'back_users_form', '_controller' => 'App\\Controller\\UserController::newUser'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|activitys/(?'
                        .'|form/([^/]++)(*:205)'
                        .'|delete/([^/]++)(*:228)'
                    .')'
                    .'|c(?'
                        .'|ategor(?'
                            .'|y/(?'
                                .'|edit/([^/]++)(*:268)'
                                .'|delete/([^/]++)(*:291)'
                            .')'
                            .'|ies/(?'
                                .'|delete/([^/]++)(*:322)'
                                .'|form/([^/]++)(*:343)'
                            .')'
                        .')'
                        .'|ontact/([^/]++)(*:368)'
                    .')'
                    .'|evennements/(?'
                        .'|form/([^/]++)(*:405)'
                        .'|delete/([^/]++)(*:428)'
                    .')'
                    .'|p(?'
                        .'|romotions/(?'
                            .'|form/([^/]++)(*:467)'
                            .'|delete/([^/]++)(*:490)'
                        .')'
                        .'|ublicitys/(?'
                            .'|form/([^/]++)(*:525)'
                            .'|delete/([^/]++)(*:548)'
                        .')'
                    .')'
                    .'|reservation(?'
                        .'|s/event/([^/]++)(*:588)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:613)'
                            .'|delete/([^/]++)(*:636)'
                        .')'
                    .')'
                    .'|users/(?'
                        .'|form/([^/]++)(*:668)'
                        .'|delete/([^/]++)(*:691)'
                    .')'
                .')'
                .'|/c(?'
                    .'|onsultactivityfront/([^/]++)(*:734)'
                    .'|reate\\-checkout\\-session/([^/]++)(*:775)'
                .')'
                .'|/li(?'
                    .'|keactivity/([^/]++)(*:809)'
                    .'|stactivitycategory/([^/]++)(*:844)'
                .')'
                .'|/evennements/([^/]++)(*:874)'
                .'|/rese(?'
                    .'|t_password/([^/]++)(*:909)'
                    .'|rvations/(?'
                        .'|delete/([^/]++)(*:944)'
                        .'|ticket/([^/]++)(*:967)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'activity_update', '_controller' => 'App\\Controller\\ActivityController::edit'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'activity_delete', '_controller' => 'App\\Controller\\ActivityController::delete'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieBackController::edit'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategorieBackController::deleteEvent'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'category_activitydelete', '_controller' => 'App\\Controller\\CategoryActivityController::delete'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'category_activityupdate', '_controller' => 'App\\Controller\\CategoryActivityController::update'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ReservationEventController::email'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'evennement_delete', '_controller' => 'App\\Controller\\EvennementController::deleteEvent'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'back_template_promotions_form_edit', '_controller' => 'App\\Controller\\PromotionController::editPromotion'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'back_template_promotions_delete', '_controller' => 'App\\Controller\\PromotionController::deletePromotion'], ['id'], null, null, false, true, null]],
        525 => [[['_route' => 'back_template_publicitys_form_edit', '_controller' => 'App\\Controller\\PublicityController::editPublicty'], ['id'], null, null, false, true, null]],
        548 => [[['_route' => 'back_template_publicitys_delete', '_controller' => 'App\\Controller\\PublicityController::deletePublicity'], ['id'], null, null, false, true, null]],
        588 => [[['_route' => 'reservation_event', '_controller' => 'App\\Controller\\ReservationEventController::index'], ['id'], null, null, false, true, null]],
        613 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationEventController::edit'], ['id'], null, null, false, true, null]],
        636 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationEventController::deleteReservation'], ['id'], null, null, false, true, null]],
        668 => [[['_route' => 'back_users_form_edit', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        691 => [[['_route' => 'back_users_delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        734 => [[['_route' => 'activity_frontconsult', '_controller' => 'App\\Controller\\ActivityFrontController::activitedetail'], ['id'], null, null, false, true, null]],
        775 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\ReservationEventFrontController::checkout'], ['ammount'], null, null, false, true, null]],
        809 => [[['_route' => 'activity_frontlike', '_controller' => 'App\\Controller\\ActivityFrontController::likes'], ['id'], null, null, false, true, null]],
        844 => [[['_route' => 'activity_frontlistcategory', '_controller' => 'App\\Controller\\ActivityFrontController::listCategory'], ['id'], null, null, false, true, null]],
        874 => [[['_route' => 'evennement_show', '_controller' => 'App\\Controller\\EvennementFrontController::showEvent'], ['id'], null, null, false, true, null]],
        909 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\LoginController::resetPassword'], ['token'], null, null, false, true, null]],
        944 => [[['_route' => 'client_reservation_delete', '_controller' => 'App\\Controller\\ReservationEventFrontController::deleteReservation'], ['id'], null, null, false, true, null]],
        967 => [
            [['_route' => 'PDF', '_controller' => 'App\\Controller\\ReservationEventFrontController::generePDF'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
