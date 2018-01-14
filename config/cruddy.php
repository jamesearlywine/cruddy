<?php return array(

    // The title of the application. It can be a translation key.
    'brand' => 'IndyKaraoke - Admin CMS',

    // The link to the main page
    'brand_url' => '/cms',

    // The name of the view that is used to render the dashboard.
    // You can specify an entity id prefixing it with `@` like so: `@users`.
    'dashboard' => 'cruddy::dashboard',

    // The URI that is prefixed to all routes of Cruddy.
    'uri' => 'cms',
    
    // for when your backend is hosted in a subfolder - for generating client-side CRUD-routes dynamically as the user clicks items
    'uri_prefix' => env('CRUDDY_URI_PREFIX', ''),
    
    'loginUrl' => env('CRUDDY_LOGIN_URL', ''),
    
    'useDateTimePicker' => false,
    'dateTimePickerOptions' => [
        'inline'        => true,
        'sideBySide'    => true,
        'format'        => 'YYYY-MM-DD HH:mm:ss',
        'keepOpen'      => true    
    ],
    
    // close the record editor after a save?
    'closeAfterSave' => true,
    
    // The class name of permissions driver.
    'permissions' => 'Kalnoy\Cruddy\Service\PermitsEverything',
    //'permissions'   => 'App\Models\CruddyPermissionsDriver',

    // The middleware that wraps every request to Cruddy. Can be used for authentication.
    'middleware' => ['web', 'auth'],

    // Main menu items.
    //
    // How to define menu items: https://github.com/lazychaser/cruddy/wiki/Menu
    'menu' => [
        // [ 'entity' => 'users',          'label' => 'Users' ],
        ['entity' => 'venues',          'label' => 'Venues'],
        ['entity' => 'weeklyKaraokeEvents',          'label' => 'WeeklyKaraokeEvents'],
        
    ],

    // The menu that is displayed to the right of the main menu.
    'service_menu' => [
        ['label' => 'Logout', 'route' => 'cmslogout' ],
        
    ],

    // The list of key value pairs where key is the entity id and value is
    // an entity class name. For example:
    //
    // 'users' => 'App\Entities\User'
    //
    // Class is resolved out of IoC container.
    'entities' => [
    //    'users'         => App\Entities\User::class,
        'weeklyKaraokeEvents' => App\Entities\WeeklyKaraokeEvent::class,
        'venues'        => App\Entities\Venue::class,
    ],
);