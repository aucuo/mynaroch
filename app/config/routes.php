<?

return [

    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'journal' => [
        'controller' => 'main',
        'action' => 'journal',
    ],

    'journal/article/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'article',
    ],

    'problems' => [
        'controller' => 'main',
        'action' => 'problems',
    ],

    'gallery' => [
        'controller' => 'main',
        'action' => 'gallery',
    ],


    // AdminController
    'admin' => [
        'controller' => 'admin',
        'action' => 'index',
    ],

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],

    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],

    // Gallery
    'admin/gallery' => [
        'controller' => 'admin',
        'action' => 'gallery',
    ],

    'admin/gallery/add' => [
        'controller' => 'admin',
        'action' => 'galleryAdd',
    ],

    'admin/gallery/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'galleryEdit',
    ],

    // Journal
    'admin/journal' => [
        'controller' => 'admin',
        'action' => 'journal',
    ],

    'admin/journal/add' => [
        'controller' => 'admin',
        'action' => 'journalAdd',
    ],

    'admin/journal/temp' => [
        'controller' => 'admin',
        'action' => 'journalTemp',
    ],

    'admin/journal/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'journalEdit',
    ],

    
];