<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/register_admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bx3MgnUL6Ls6mURf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/register_artist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NJRCtHfNzuLQMMup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/register_radio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AxDDERawc3eX0Mon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5qmm9hNDjPths7q8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6v3MuZpIXJbCesy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/profile_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D6ipPwgrFZLKgXAE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/list_of_radio_stations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7RGpxetwtJrE8iYC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/list_of_artists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MPwlj7mOJ1pd4IIs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JC74M1maS7ikbaya',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/add_radio_station' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wEJAs4mYEKBubg6a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/upload_media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZrfG3K707PbDTfPj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/artiste_track_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rS2NGSyykX9DgGZE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/radio_station_playList' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P1k8ApYfWCpT7ymT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rxgRXoLAc9BAG3M0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/get_all_track' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6d0R3nFNS4oY956y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/promoted_tracks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bYEzSf3MD039q5Rt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/media/promote_artists_track' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uUSZx4e4rDSxfBNm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FEpuIXTWRJybrg1M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/management/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tnm77ZWN8GR59EGC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hello' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D5WkdC8kf3bF3kId',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/command' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wWIO3w14ZizJ3ArX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/api/management/(?|reset\\-password/([^/]++)(*:109)|update_artist_radio/([^/]++)(*:145)|email/verify/([^/]++)/([^/]++)(*:183)|media/(?|([^/]++)/(?|download/([^/]++)(*:229)|update(*:243))|accept_track/([^/]++)(*:273)|reject_track/([^/]++)(*:302)|promoted_track/([^/]++)(*:333)|trash/(?|([^/]++)(*:358)|restore(*:373)|delete(*:387)))))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CnOCv3mxxuQ0ojcZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTwB8iZZDZsGMr0O',
          ),
          1 => 
          array (
            0 => 'media',
            1 => 'media_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QJNbMMSiDQTwDdNc',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::afFVywDhiqvwgTLh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skVWin8Sq27sFPEA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ySCrPuPma3Zod7Vf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yz0wjAvHjS0WNUSR',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WPqKUELM5c5pAC0W',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      387 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ReYGOlfy4EKJWOfd',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bx3MgnUL6Ls6mURf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/register_admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerAdmin',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerAdmin',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::bx3MgnUL6Ls6mURf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NJRCtHfNzuLQMMup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/register_artist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerArtist',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerArtist',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::NJRCtHfNzuLQMMup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AxDDERawc3eX0Mon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/register_radio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerRadio',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@registerRadio',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::AxDDERawc3eX0Mon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5qmm9hNDjPths7q8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::5qmm9hNDjPths7q8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:764:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:545:"function (\\Illuminate\\Http\\Request $request) {

            $request->validate([\'email\' => \'required|email\']);

            $status = \\Illuminate\\Support\\Facades\\Password::sendResetLink(
                $request->only(\'email\')
            );

            return $status === \\Illuminate\\Support\\Facades\\Password::RESET_LINK_SENT
                ? \\response()->json([\'status\' => \'success\', \'message\' => "Password reset link sent successfully"])
                : \\response()->json([\'status\' => \'failed\', \'message\' => \\__($status)], 403);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006290000000000000000";}";s:4:"hash";s:44:"P8WTuZ9Zgkd1qgO4MW/oSJVwu1/vytws7he6WMYfhMs=";}}',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:247:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:29:"function ($token) {
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062b0000000000000000";}";s:4:"hash";s:44:"RYI1mj1dUoae7pwYJKR2mEXk8SXJSE6ARz7e7q6gz3Y=";}}',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1287:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1067:"function (\\Illuminate\\Http\\Request $request) {
            $request->validate([
                \'token\' => \'required\',
                \'password\' => \'required|min:8|confirmed\',
            ]);
            
        

            $status = \\Illuminate\\Support\\Facades\\Password::reset(
                $request->only(\'password\', \'password_confirmation\', \'token\'),
                function ($user, $password) use ($request) {
                    $user->forceFill([
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make($password)
                    ])->setRememberToken(\\Illuminate\\Support\\Str::random(60));

                    $user->save();

                    \\event(new \\Illuminate\\Auth\\Events\\PasswordReset($user));
                }
            );

            return $status == \\Illuminate\\Support\\Facades\\Password::PASSWORD_RESET
                ? \\response()->json([\'status\' => \'success\', \'message\' => "Password reset successfully"])
                : \\response()->json([\'status\' => \'failed\', \'message\' => \\__($status)], 403);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062d0000000000000000";}";s:4:"hash";s:44:"3aiGHFbgDIIeljiG+D4wgezduKgSYo3ocfyLaUzfuz8=";}}',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6v3MuZpIXJbCesy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@profile',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@profile',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::F6v3MuZpIXJbCesy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D6ipPwgrFZLKgXAE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/profile_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@update_user',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@update_user',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::D6ipPwgrFZLKgXAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CnOCv3mxxuQ0ojcZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/update_artist_radio/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@update_artist_radio',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@update_artist_radio',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::CnOCv3mxxuQ0ojcZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7RGpxetwtJrE8iYC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/list_of_radio_stations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@list_of_radio_stations',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@list_of_radio_stations',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::7RGpxetwtJrE8iYC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MPwlj7mOJ1pd4IIs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/list_of_artists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@list_of_artists',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@list_of_artists',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::MPwlj7mOJ1pd4IIs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JC74M1maS7ikbaya' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::JC74M1maS7ikbaya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wEJAs4mYEKBubg6a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/add_radio_station',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@add_radio_station',
        'controller' => 'App\\Http\\Controllers\\Management\\Auth\\AuthController@add_radio_station',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::wEJAs4mYEKBubg6a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'signed',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:594:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:375:"function (\\Illuminate\\Foundation\\Auth\\EmailVerificationRequest $request) {
                    $request->fulfill();
                    $user = \\auth()->user();
                    return \\response()->json([
                        \'status\' => \'success\',
                        \'data\' => new \\App\\Http\\Resources\\UserResource($user),
                    ]);
                }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006380000000000000000";}";s:4:"hash";s:44:"nSVYJ3b2tGgybAvhhdPllikDRlh8nOoFWzjcRB7EYrI=";}}',
        'as' => 'verification.verify',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'throttle:6,1',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:430:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:211:"function (\\Illuminate\\Http\\Request $request) {
                    $request->user()->sendEmailVerificationNotification();

                    return \\response()->json([\'status\' => \'success\']);
                }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000063a0000000000000000";}";s:4:"hash";s:44:"L5YXK8+RebBdu97Mz3tSTilmGwFalq61njBRyDqTiAc=";}}',
        'as' => 'verification.send',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZrfG3K707PbDTfPj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/upload_media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@upload_media',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@upload_media',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::ZrfG3K707PbDTfPj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rS2NGSyykX9DgGZE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/artiste_track_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@myPlayList',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@myPlayList',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::rS2NGSyykX9DgGZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P1k8ApYfWCpT7ymT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/radio_station_playList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@radio_station_playList',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@radio_station_playList',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::P1k8ApYfWCpT7ymT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTwB8iZZDZsGMr0O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/{media}/download/{media_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@download_media',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@download_media',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::bTwB8iZZDZsGMr0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QJNbMMSiDQTwDdNc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/{media}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@update_media',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@update_media',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::QJNbMMSiDQTwDdNc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rxgRXoLAc9BAG3M0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@delete_media',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@delete_media',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::rxgRXoLAc9BAG3M0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6d0R3nFNS4oY956y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/get_all_track',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@get_all_media',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@get_all_media',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::6d0R3nFNS4oY956y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::afFVywDhiqvwgTLh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/accept_track/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@accept_track',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@accept_track',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::afFVywDhiqvwgTLh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::skVWin8Sq27sFPEA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/reject_track/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@reject_track',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@reject_track',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::skVWin8Sq27sFPEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ySCrPuPma3Zod7Vf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/promoted_track/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promoted_track',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promoted_track',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::ySCrPuPma3Zod7Vf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bYEzSf3MD039q5Rt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/promoted_tracks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promoted_tracks',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promoted_tracks',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::bYEzSf3MD039q5Rt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uUSZx4e4rDSxfBNm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/promote_artists_track',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promote_artists_track',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@promote_artists_track',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::uUSZx4e4rDSxfBNm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yz0wjAvHjS0WNUSR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/trash/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@get_all_trash',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@get_all_trash',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::Yz0wjAvHjS0WNUSR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WPqKUELM5c5pAC0W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/trash/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@restore_trash',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@restore_trash',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::WPqKUELM5c5pAC0W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ReYGOlfy4EKJWOfd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/trash/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@delete_trash',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@delete_trash',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::ReYGOlfy4EKJWOfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FEpuIXTWRJybrg1M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@Dashboard',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@Dashboard',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::FEpuIXTWRJybrg1M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@redirectToGateway',
        'controller' => 'App\\Http\\Controllers\\PaymentController@redirectToGateway',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tnm77ZWN8GR59EGC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:290:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:72:"function () {
    return \\redirect()->to(\\config(\'app.frontend_url\'));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006240000000000000000";}";s:4:"hash";s:44:"rOON6Bj19tJ43AWXck3HZMr/jni7YOUe1pmswL7HM0E=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tnm77ZWN8GR59EGC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D5WkdC8kf3bF3kId' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hello',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:251:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:33:"function(){
    return \'hello\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000064c0000000000000000";}";s:4:"hash";s:44:"7xD0F3/iK5MQ5tvvCfNCTZdM4iqtsAxfnE+tc4CoCxM=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D5WkdC8kf3bF3kId',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWIO3w14ZizJ3ArX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'command',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:293:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:75:"function(){
    \\Illuminate\\Support\\Facades\\Artisan::call(\'optimize\');

  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000064e0000000000000000";}";s:4:"hash";s:44:"qGAa1UOk0IVZCZKc2/cJmGl103KPMJPuDzBPdP887RU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wWIO3w14ZizJ3ArX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
