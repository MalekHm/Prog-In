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
        '/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blog/new' => [[['_route' => 'blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/admin/categorie/back' => [[['_route' => 'categorie_back', '_controller' => 'App\\Controller\\CategorieBackController::index'], null, null, null, false, false, null]],
        '/admin/categorie/add' => [[['_route' => 'categorie_add', '_controller' => 'App\\Controller\\CategorieBackController::addCategory'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'category_activity', '_controller' => 'App\\Controller\\CategoryActivityController::index'], null, null, null, true, false, null]],
        '/admin/categories/form' => [[['_route' => 'category_activityadd', '_controller' => 'App\\Controller\\CategoryActivityController::add'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category/place' => [[['_route' => 'category_place', '_controller' => 'App\\Controller\\CategoryPlaceController::index'], null, null, null, false, false, null]],
        '/listcategory/place' => [[['_route' => 'category_placelist', '_controller' => 'App\\Controller\\CategoryPlaceController::list'], null, null, null, false, false, null]],
        '/addcategory/place' => [[['_route' => 'category_placeadd', '_controller' => 'App\\Controller\\CategoryPlaceController::add'], null, null, null, false, false, null]],
        '/comment/article' => [[['_route' => 'comment_article_index', '_controller' => 'App\\Controller\\CommentArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/article/new' => [[['_route' => 'comment_article_new', '_controller' => 'App\\Controller\\CommentArticleController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/places/comments/place' => [[['_route' => 'comments_place', '_controller' => 'App\\Controller\\CommentsPlaceController::index'], null, null, null, false, false, null]],
        '/community' => [[['_route' => 'community_index', '_controller' => 'App\\Controller\\CommunityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/community/new' => [[['_route' => 'community_new', '_controller' => 'App\\Controller\\CommunityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/evennements' => [[['_route' => 'evennement', '_controller' => 'App\\Controller\\EvennementController::index'], null, null, null, true, false, null]],
        '/admin/evennements/form' => [[['_route' => 'create_event', '_controller' => 'App\\Controller\\EvennementController::createEvent'], null, null, null, false, false, null]],
        '/evennements' => [[['_route' => 'evennement_front', '_controller' => 'App\\Controller\\EvennementFrontController::index'], null, null, null, true, false, null]],
        '/frontblog' => [[['_route' => 'frontblog', '_controller' => 'App\\Controller\\FrontblogController::index'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\FrontblogController::favouris'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add_like', '_controller' => 'App\\Controller\\FrontblogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/addfavoris' => [[['_route' => 'add_favoris', '_controller' => 'App\\Controller\\FrontblogController::favours'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/removefavoris' => [[['_route' => 'remove_favoris', '_controller' => 'App\\Controller\\FrontblogController::removefav'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/remove' => [[['_route' => 'remove_like', '_controller' => 'App\\Controller\\FrontblogController::remove'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\HomeController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/forget-password' => [[['_route' => 'forget_password', '_controller' => 'App\\Controller\\LoginController::forgetPassword'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'orderlist', '_controller' => 'App\\Controller\\OrderController::orderListAction'], null, null, null, true, false, null]],
        '/admin/orders/confirme' => [[['_route' => 'confirme', '_controller' => 'App\\Controller\\OrderController::confirmeAction'], null, null, null, false, false, null]],
        '/admin/orders/livree' => [[['_route' => 'livree', '_controller' => 'App\\Controller\\OrderController::livreeAction'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'orderlistFront', '_controller' => 'App\\Controller\\OrderFrontController::orderListAction'], null, null, null, true, false, null]],
        '/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, true, false, null]],
        '/payment/success' => [
            [['_route' => 'success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null],
            [['_route' => 'successPaiment', '_controller' => 'App\\Controller\\ReservationEventFrontController::success'], null, null, null, false, false, null],
        ],
        '/payment/error' => [
            [['_route' => 'error', '_controller' => 'App\\Controller\\PaymentController::error'], null, null, null, false, false, null],
            [['_route' => 'errorPaiment', '_controller' => 'App\\Controller\\ReservationEventFrontController::error'], null, null, null, false, false, null],
        ],
        '/payment/successlivraison' => [[['_route' => 'successlivraison', '_controller' => 'App\\Controller\\PaymentController::successlivraison'], null, null, null, false, false, null]],
        '/admin/places' => [[['_route' => 'place_index', '_controller' => 'App\\Controller\\PlaceController::index'], null, null, null, true, false, null]],
        '/admin/places/listplace' => [[['_route' => 'place', '_controller' => 'App\\Controller\\PlaceController::list'], null, null, null, false, false, null]],
        '/admin/places/placeadd' => [[['_route' => 'place_add', '_controller' => 'App\\Controller\\PlaceController::add'], null, null, null, false, false, null]],
        '/place/front' => [[['_route' => 'place_front', '_controller' => 'App\\Controller\\PlaceFrontController::index'], null, null, null, false, false, null]],
        '/listplacefront' => [[['_route' => 'place_frontlist', '_controller' => 'App\\Controller\\PlaceFrontController::list'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/productlist' => [[['_route' => 'product_front', '_controller' => 'App\\Controller\\ProductFrontController::list'], null, null, null, true, false, null]],
        '/admin/promotions' => [[['_route' => 'back_template_promotions', '_controller' => 'App\\Controller\\PromotionController::promotions'], null, null, null, true, false, null]],
        '/admin/promotions/form' => [[['_route' => 'back_template_promotions_form', '_controller' => 'App\\Controller\\PromotionController::newPromotion'], null, null, null, false, false, null]],
        '/admin/publicitys' => [[['_route' => 'back_template_publicitys', '_controller' => 'App\\Controller\\PublicityController::publicitys'], null, null, null, true, false, null]],
        '/admin/publicitys/form' => [[['_route' => 'back_template_publicitys_form', '_controller' => 'App\\Controller\\PublicityController::newPublicity'], null, null, null, false, false, null]],
        '/reservations' => [[['_route' => 'reservation_event_front', '_controller' => 'App\\Controller\\ReservationEventFrontController::index'], null, null, null, true, false, null]],
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
                                .'|([^/]++)(?'
                                    .'|(*:287)'
                                    .'|/edit(*:300)'
                                    .'|(*:308)'
                                .')'
                            .')'
                            .'|ies/(?'
                                .'|delete/([^/]++)(*:340)'
                                .'|form/([^/]++)(*:361)'
                            .')'
                        .')'
                        .'|ontact/([^/]++)(*:386)'
                    .')'
                    .'|p(?'
                        .'|laces/(?'
                            .'|list/placec(?'
                                .'|omment/([^/]++)(*:437)'
                                .'|ategory/([^/]++)(*:461)'
                            .')'
                            .'|delete(?'
                                .'|comment/([^/]++)(*:495)'
                                .'|/([^/]++)(*:512)'
                            .')'
                            .'|update/([^/]++)(*:536)'
                            .'|supprime/image/([^/]++)(*:567)'
                        .')'
                        .'|ro(?'
                            .'|duct/(?'
                                .'|([^/]++)(?'
                                    .'|(*:600)'
                                    .'|/edit(*:613)'
                                    .'|(*:621)'
                                .')'
                                .'|supprime/image/([^/]++)(*:653)'
                            .')'
                            .'|motions/(?'
                                .'|form/([^/]++)(*:686)'
                                .'|delete/([^/]++)(*:709)'
                            .')'
                        .')'
                        .'|ublicitys/(?'
                            .'|form/([^/]++)(*:745)'
                            .'|delete/([^/]++)(*:768)'
                        .')'
                    .')'
                    .'|evennements/(?'
                        .'|form/([^/]++)(*:806)'
                        .'|delete/([^/]++)(*:829)'
                    .')'
                    .'|reservation(?'
                        .'|s/event/([^/]++)(*:868)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:893)'
                            .'|delete/([^/]++)(*:916)'
                        .')'
                    .')'
                    .'|users/(?'
                        .'|form/([^/]++)(*:948)'
                        .'|delete/([^/]++)(*:971)'
                    .')'
                .')'
                .'|/c(?'
                    .'|o(?'
                        .'|nsult(?'
                            .'|activityfront/([^/]++)(*:1020)'
                            .'|placefront/([^/]++)(*:1048)'
                        .')'
                        .'|mm(?'
                            .'|ent/article/([^/]++)(?'
                                .'|(*:1086)'
                                .'|/edit(*:1100)'
                                .'|(*:1109)'
                            .')'
                            .'|unity/([^/]++)(?'
                                .'|(*:1136)'
                                .'|/edit(*:1150)'
                                .'|(*:1159)'
                            .')'
                        .')'
                    .')'
                    .'|reate\\-checkout\\-session/([^/]++)(*:1204)'
                .')'
                .'|/li(?'
                    .'|keactivity/([^/]++)(*:1239)'
                    .'|st(?'
                        .'|activitycategory/([^/]++)(*:1278)'
                        .'|placecategory/([^/]++)(*:1309)'
                    .')'
                .')'
                .'|/blog/([^/]++)(?'
                    .'|(*:1337)'
                    .'|/edit(*:1351)'
                    .'|(*:1360)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/remove(?'
                            .'|/([^/]++)(*:1402)'
                            .'|r/([^/]++)(*:1421)'
                        .')'
                        .'|yment/formulaire/FacturePdf/([^/]++)(*:1467)'
                    .')'
                    .'|roductlist/productreserver/([^/]++)(*:1512)'
                .')'
                .'|/deletecategory/place/([^/]++)(*:1552)'
                .'|/updatecategory/place/([^/]++)(*:1591)'
                .'|/evennements/([^/]++)(*:1621)'
                .'|/frontblog/([^/]++)(*:1649)'
                .'|/rese(?'
                    .'|t_password/([^/]++)(*:1685)'
                    .'|rvations/(?'
                        .'|delete/([^/]++)(*:1721)'
                        .'|ticket/([^/]++)(*:1745)'
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
        287 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        340 => [[['_route' => 'category_activitydelete', '_controller' => 'App\\Controller\\CategoryActivityController::delete'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'category_activityupdate', '_controller' => 'App\\Controller\\CategoryActivityController::update'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ReservationEventController::email'], ['id'], null, null, false, true, null]],
        437 => [[['_route' => 'place_listcomment', '_controller' => 'App\\Controller\\CommentsPlaceController::listComment'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'place_listcategory', '_controller' => 'App\\Controller\\PlaceController::listCategory'], ['id'], null, null, false, true, null]],
        495 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentsPlaceController::delete'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'place_delete', '_controller' => 'App\\Controller\\PlaceController::delete'], ['id'], null, null, false, true, null]],
        536 => [[['_route' => 'place_update', '_controller' => 'App\\Controller\\PlaceController::edit'], ['id'], null, null, false, true, null]],
        567 => [[['_route' => 'place_delete_image', '_controller' => 'App\\Controller\\PlaceController::deletepicture'], ['id'], ['DELETE' => 0], null, false, true, null]],
        600 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        613 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        653 => [[['_route' => 'product_delete_image', '_controller' => 'App\\Controller\\ProductController::deleteImage'], ['id'], null, null, false, true, null]],
        686 => [[['_route' => 'back_template_promotions_form_edit', '_controller' => 'App\\Controller\\PromotionController::editPromotion'], ['id'], null, null, false, true, null]],
        709 => [[['_route' => 'back_template_promotions_delete', '_controller' => 'App\\Controller\\PromotionController::deletePromotion'], ['id'], null, null, false, true, null]],
        745 => [[['_route' => 'back_template_publicitys_form_edit', '_controller' => 'App\\Controller\\PublicityController::editPublicty'], ['id'], null, null, false, true, null]],
        768 => [[['_route' => 'back_template_publicitys_delete', '_controller' => 'App\\Controller\\PublicityController::deletePublicity'], ['id'], null, null, false, true, null]],
        806 => [[['_route' => 'evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], null, null, false, true, null]],
        829 => [[['_route' => 'evennement_delete', '_controller' => 'App\\Controller\\EvennementController::deleteEvent'], ['id'], null, null, false, true, null]],
        868 => [[['_route' => 'reservation_event', '_controller' => 'App\\Controller\\ReservationEventController::index'], ['id'], null, null, false, true, null]],
        893 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationEventController::edit'], ['id'], null, null, false, true, null]],
        916 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationEventController::deleteReservation'], ['id'], null, null, false, true, null]],
        948 => [[['_route' => 'back_users_form_edit', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'back_users_delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        1020 => [[['_route' => 'activity_frontconsult', '_controller' => 'App\\Controller\\ActivityFrontController::activitedetail'], ['id'], null, null, false, true, null]],
        1048 => [[['_route' => 'place_frontconsult', '_controller' => 'App\\Controller\\PlaceFrontController::placedetails'], ['id'], null, null, false, true, null]],
        1086 => [[['_route' => 'comment_article_show', '_controller' => 'App\\Controller\\CommentArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1100 => [[['_route' => 'comment_article_edit', '_controller' => 'App\\Controller\\CommentArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1109 => [[['_route' => 'comment_article_delete', '_controller' => 'App\\Controller\\CommentArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1136 => [[['_route' => 'community_show', '_controller' => 'App\\Controller\\CommunityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1150 => [[['_route' => 'community_edit', '_controller' => 'App\\Controller\\CommunityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1159 => [[['_route' => 'community_delete', '_controller' => 'App\\Controller\\CommunityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1204 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\ReservationEventFrontController::checkout'], ['ammount'], null, null, false, true, null]],
        1239 => [[['_route' => 'activity_frontlike', '_controller' => 'App\\Controller\\ActivityFrontController::likes'], ['id'], null, null, false, true, null]],
        1278 => [[['_route' => 'activity_frontlistcategory', '_controller' => 'App\\Controller\\ActivityFrontController::listCategory'], ['id'], null, null, false, true, null]],
        1309 => [[['_route' => 'place_frontlistcategory', '_controller' => 'App\\Controller\\PlaceFrontController::listCategory'], ['id'], null, null, false, true, null]],
        1337 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1351 => [[['_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1360 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1402 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        1421 => [[['_route' => 'cart_remover', '_controller' => 'App\\Controller\\CartController::remover'], ['id'], null, null, false, true, null]],
        1467 => [[['_route' => 'profacture', '_controller' => 'App\\Controller\\PaymentController::generePDF'], ['id'], null, null, false, true, null]],
        1512 => [[['_route' => 'product_reserver', '_controller' => 'App\\Controller\\ProductFrontController::reserver'], ['id'], null, null, false, true, null]],
        1552 => [[['_route' => 'category_placedelete', '_controller' => 'App\\Controller\\CategoryPlaceController::delete'], ['id'], null, null, false, true, null]],
        1591 => [[['_route' => 'category_placeupdate', '_controller' => 'App\\Controller\\CategoryPlaceController::update'], ['id'], null, null, false, true, null]],
        1621 => [[['_route' => 'evennement_show', '_controller' => 'App\\Controller\\EvennementFrontController::showEvent'], ['id'], null, null, false, true, null]],
        1649 => [[['_route' => 'blog_showfront', '_controller' => 'App\\Controller\\FrontblogController::showblog'], ['id'], ['GET' => 0], null, false, true, null]],
        1685 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\LoginController::resetPassword'], ['token'], null, null, false, true, null]],
        1721 => [[['_route' => 'client_reservation_delete', '_controller' => 'App\\Controller\\ReservationEventFrontController::deleteReservation'], ['id'], null, null, false, true, null]],
        1745 => [
            [['_route' => 'PDF', '_controller' => 'App\\Controller\\ReservationEventFrontController::generePDF'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
