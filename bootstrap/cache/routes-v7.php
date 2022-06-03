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
            '_route' => 'generated::FbhA8uve6AW6PdGL',
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
            '_route' => 'generated::ByYl4BW0rS3eWnQO',
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
            '_route' => 'generated::kxdgf4fbto2wk8Rn',
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
            '_route' => 'generated::eMS7Nl8hMTGNuuiZ',
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
            '_route' => 'generated::VqSpfeAl9Fiq45s0',
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
            '_route' => 'generated::wLNyzkK9qIYZ81RE',
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
      '/api/management/updateprice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gdv3fZwYqjr7KFY0',
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
            '_route' => 'generated::gwQP3AzQhtIOKdNY',
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
            '_route' => 'generated::rTM5Og6wJ8LVwcke',
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
            '_route' => 'generated::wxrh8MWBj1N66OZ1',
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
            '_route' => 'generated::S9zJkoEbGaKHgMuq',
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
            '_route' => 'generated::FRH8YrcS8R10uHeQ',
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
            '_route' => 'generated::DE0Jna6qCVwogvc7',
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
            '_route' => 'generated::Pu7QvGReHKMqlk5c',
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
            '_route' => 'generated::1egaDDlQmHtnKNkH',
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
            '_route' => 'generated::o7IzmBT8TfQ7gfZ4',
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
            '_route' => 'generated::ipFshdz7SaeZAHdM',
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
            '_route' => 'generated::ozXAwr4GYzMlp213',
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
      '/api/management/media/scheduled_music' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::brLosyxxiPXIBGsG',
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
      '/api/management/media/schedule_music' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C53ilAWMXadIS6pX',
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
      '/api/management/media/get_scheduled_music_by_radio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VS0QV4Z901csRO3l',
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
      '/api/management/revenue/all_reconcilation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rGI1AGbIpgwCkiHg',
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
      '/api/management/revenue/add_radio_reconcilation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQCFczpPFDngQtaQ',
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
      '/api/management/revenue/allSharingFormular' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UE21Rpv0wGd8vEe',
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
      '/api/management/revenue/sharingFormular' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YGyp0QqpbB4GwO0K',
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
      '/api/management/revenue/get_reconcilation_by_radio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7UKvZvMv3cy27B59',
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
      '/api/management/faq/all_faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GinVD4WSCipwhg36',
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
      '/api/management/faq/add_faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9NOXF0Kg4Om3HuTQ',
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
            '_route' => 'generated::V1w5oERMXwiFgEpS',
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
      '/api/management/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZBFLk5LLW6gfXC62',
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
      '/api/management/revenue/show_radio_revenue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BMZIlXle1zdGIXQF',
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
            '_route' => 'generated::a7F5jIEtbHSfU9Y6',
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
            '_route' => 'generated::lBFkoYjmAv8HVJGm',
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
            '_route' => 'generated::ZZEzKc7RdJtWDu9z',
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
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/api/management/(?|re(?|set\\-password/([^/]++)(*:112)|venue/(?|update(?|_reconcilation/([^/]++)(*:161)|Formular/([^/]++)(*:186))|del_reconcilation/([^/]++)(*:221)|approve_reconcilation/([^/]++)(*:259)|show(?|sharing/([^/]++)(*:290)|recon/([^/]++)(*:312))))|update_artist_radio/([^/]++)(*:351)|email/verify/([^/]++)/([^/]++)(*:389)|media/(?|([^/]++)/(?|download/([^/]++)(*:435)|update(*:449))|accept_track/([^/]++)(*:479)|r(?|eject_track/([^/]++)(*:511)|adio_station_media_status/([^/]++)(*:553))|promoted_track/([^/]++)(*:585)|trash/(?|([^/]++)(*:610)|restore(*:625)|delete(*:639))|scheduled_music/(?|([^/]++)(*:675)|delete/([^/]++)(*:698))|get_scheduled_music_by_media_id/([^/]++)(*:747))|faq/(?|show_faq/([^/]++)(*:780)|update_faq/([^/]++)(*:807))))/?$}sDu',
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
      112 => 
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
      161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kJgUG2zB5ucVFnbZ',
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
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LO1ZqfXvFPdtbs1B',
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
      221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MSFG9Oh7AJIm06Gs',
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
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V3Ctzp4yahiRsPFG',
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
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6yE2jjTAJfq9Zsdk',
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
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uHFhmyKWnH2GslTd',
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
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MYq519aWy2JNJhbs',
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
      389 => 
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
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k4JI8kpH05zgSTJF',
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
      449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Li6V3LKgHSdu9YKV',
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
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PPozrPD97TfcBiXj',
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
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::esN2DJr1LyhyHLJi',
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
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::joVuK5IqFHG7qzJX',
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
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EPU7MOfaO8lTYXlw',
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
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0qdrpyfOHFoyDALS',
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
      625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKruHXwyVGdohUsL',
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
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kM0vL19xhWHspXFn',
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
      675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cByUHjJKDr8pC598',
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
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xv11C1U6vEizoZA4',
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
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RKl2uLVDpsktNBqK',
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
      780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NdB6o23IcyFin5T2',
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
      807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uRBjms1jnxGUaSi3',
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
    'generated::FbhA8uve6AW6PdGL' => 
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
        'as' => 'generated::FbhA8uve6AW6PdGL',
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
    'generated::ByYl4BW0rS3eWnQO' => 
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
        'as' => 'generated::ByYl4BW0rS3eWnQO',
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
    'generated::kxdgf4fbto2wk8Rn' => 
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
        'as' => 'generated::kxdgf4fbto2wk8Rn',
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
    'generated::eMS7Nl8hMTGNuuiZ' => 
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
        'as' => 'generated::eMS7Nl8hMTGNuuiZ',
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1267:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1047:"function (\\Illuminate\\Http\\Request $request) {
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
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062d0000000000000000";}";s:4:"hash";s:44:"2p3jLSpUHbKeCG3skJ5ObkrONvvQ4S/8Zxvmxj77vJ0=";}}',
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
    'generated::VqSpfeAl9Fiq45s0' => 
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
        'as' => 'generated::VqSpfeAl9Fiq45s0',
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
    'generated::wLNyzkK9qIYZ81RE' => 
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
        'as' => 'generated::wLNyzkK9qIYZ81RE',
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
    'generated::gdv3fZwYqjr7KFY0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/updateprice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\User\\UserController@updatePrice',
        'controller' => 'App\\Http\\Controllers\\Management\\User\\UserController@updatePrice',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::gdv3fZwYqjr7KFY0',
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
    'generated::MYq519aWy2JNJhbs' => 
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
        'as' => 'generated::MYq519aWy2JNJhbs',
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
    'generated::gwQP3AzQhtIOKdNY' => 
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
        'as' => 'generated::gwQP3AzQhtIOKdNY',
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
    'generated::rTM5Og6wJ8LVwcke' => 
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
        'as' => 'generated::rTM5Og6wJ8LVwcke',
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
    'generated::wxrh8MWBj1N66OZ1' => 
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
        'as' => 'generated::wxrh8MWBj1N66OZ1',
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
    'generated::S9zJkoEbGaKHgMuq' => 
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
        'as' => 'generated::S9zJkoEbGaKHgMuq',
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
                }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006390000000000000000";}";s:4:"hash";s:44:"J4rhsp/oPSRV7iuMK86w6DLrdAwgMt9uf6eftC78ej8=";}}',
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
                }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000063b0000000000000000";}";s:4:"hash";s:44:"Rj/D+Ej1/WG1ZuRYAA/iKBk+c9JetHtiGqTaSiqXLgs=";}}',
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
    'generated::FRH8YrcS8R10uHeQ' => 
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
        'as' => 'generated::FRH8YrcS8R10uHeQ',
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
    'generated::DE0Jna6qCVwogvc7' => 
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
        'as' => 'generated::DE0Jna6qCVwogvc7',
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
    'generated::Pu7QvGReHKMqlk5c' => 
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
        'as' => 'generated::Pu7QvGReHKMqlk5c',
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
    'generated::k4JI8kpH05zgSTJF' => 
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
        'as' => 'generated::k4JI8kpH05zgSTJF',
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
    'generated::Li6V3LKgHSdu9YKV' => 
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
        'as' => 'generated::Li6V3LKgHSdu9YKV',
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
    'generated::1egaDDlQmHtnKNkH' => 
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
        'as' => 'generated::1egaDDlQmHtnKNkH',
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
    'generated::o7IzmBT8TfQ7gfZ4' => 
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
        'as' => 'generated::o7IzmBT8TfQ7gfZ4',
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
    'generated::PPozrPD97TfcBiXj' => 
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
        'as' => 'generated::PPozrPD97TfcBiXj',
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
    'generated::esN2DJr1LyhyHLJi' => 
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
        'as' => 'generated::esN2DJr1LyhyHLJi',
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
    'generated::EPU7MOfaO8lTYXlw' => 
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
        'as' => 'generated::EPU7MOfaO8lTYXlw',
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
    'generated::ipFshdz7SaeZAHdM' => 
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
        'as' => 'generated::ipFshdz7SaeZAHdM',
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
    'generated::ozXAwr4GYzMlp213' => 
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
        'as' => 'generated::ozXAwr4GYzMlp213',
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
    'generated::0qdrpyfOHFoyDALS' => 
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
        'as' => 'generated::0qdrpyfOHFoyDALS',
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
    'generated::IKruHXwyVGdohUsL' => 
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
        'as' => 'generated::IKruHXwyVGdohUsL',
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
    'generated::kM0vL19xhWHspXFn' => 
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
        'as' => 'generated::kM0vL19xhWHspXFn',
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
    'generated::brLosyxxiPXIBGsG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/scheduled_music',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@index',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@index',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::brLosyxxiPXIBGsG',
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
    'generated::C53ilAWMXadIS6pX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/schedule_music',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@store',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@store',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::C53ilAWMXadIS6pX',
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
    'generated::cByUHjJKDr8pC598' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/scheduled_music/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@update',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@update',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::cByUHjJKDr8pC598',
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
    'generated::Xv11C1U6vEizoZA4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/media/scheduled_music/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@destroy',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::Xv11C1U6vEizoZA4',
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
    'generated::VS0QV4Z901csRO3l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/get_scheduled_music_by_radio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@getMusicShedularByRadioId',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@getMusicShedularByRadioId',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::VS0QV4Z901csRO3l',
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
    'generated::RKl2uLVDpsktNBqK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/get_scheduled_music_by_media_id/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@getMusicShedularByMediaId',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MusicShedularController@getMusicShedularByMediaId',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::RKl2uLVDpsktNBqK',
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
    'generated::joVuK5IqFHG7qzJX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/media/radio_station_media_status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@getTrackRadioStation',
        'controller' => 'App\\Http\\Controllers\\Management\\Media\\MediaController@getTrackRadioStation',
        'namespace' => 'App\\Http\\Controllers\\Management\\Media',
        'prefix' => 'api/management/media',
        'where' => 
        array (
        ),
        'as' => 'generated::joVuK5IqFHG7qzJX',
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
    'generated::rGI1AGbIpgwCkiHg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/all_reconcilation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@index',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@index',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::rGI1AGbIpgwCkiHg',
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
    'generated::iQCFczpPFDngQtaQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/revenue/add_radio_reconcilation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@store',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@store',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::iQCFczpPFDngQtaQ',
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
    'generated::kJgUG2zB5ucVFnbZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/revenue/update_reconcilation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@update',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@update',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::kJgUG2zB5ucVFnbZ',
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
    'generated::MSFG9Oh7AJIm06Gs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/del_reconcilation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::MSFG9Oh7AJIm06Gs',
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
    'generated::V3Ctzp4yahiRsPFG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/approve_reconcilation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@approveRecon',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@approveRecon',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::V3Ctzp4yahiRsPFG',
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
    'generated::0UE21Rpv0wGd8vEe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/allSharingFormular',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@allSharingFormular',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@allSharingFormular',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::0UE21Rpv0wGd8vEe',
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
    'generated::YGyp0QqpbB4GwO0K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/revenue/sharingFormular',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@sharingFormular',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@sharingFormular',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::YGyp0QqpbB4GwO0K',
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
    'generated::LO1ZqfXvFPdtbs1B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/revenue/updateFormular/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@updateFormular',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@updateFormular',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::LO1ZqfXvFPdtbs1B',
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
    'generated::7UKvZvMv3cy27B59' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/get_reconcilation_by_radio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@getReconcilationByRadio',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@getReconcilationByRadio',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::7UKvZvMv3cy27B59',
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
    'generated::6yE2jjTAJfq9Zsdk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/showsharing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@showsharing',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@showsharing',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::6yE2jjTAJfq9Zsdk',
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
    'generated::uHFhmyKWnH2GslTd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/showrecon/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@show',
        'controller' => 'App\\Http\\Controllers\\Management\\Revenue\\ReconcilationController@show',
        'namespace' => 'App\\Http\\Controllers\\Management\\Revenue',
        'prefix' => 'api/management/revenue',
        'where' => 
        array (
        ),
        'as' => 'generated::uHFhmyKWnH2GslTd',
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
    'generated::GinVD4WSCipwhg36' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/faq/all_faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@index',
        'controller' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@index',
        'namespace' => 'App\\Http\\Controllers\\Management\\FAQ',
        'prefix' => 'api/management/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::GinVD4WSCipwhg36',
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
    'generated::NdB6o23IcyFin5T2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/faq/show_faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@show',
        'controller' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@show',
        'namespace' => 'App\\Http\\Controllers\\Management\\FAQ',
        'prefix' => 'api/management/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::NdB6o23IcyFin5T2',
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
    'generated::9NOXF0Kg4Om3HuTQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/faq/add_faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@store',
        'controller' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@store',
        'namespace' => 'App\\Http\\Controllers\\Management\\FAQ',
        'prefix' => 'api/management/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::9NOXF0Kg4Om3HuTQ',
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
    'generated::uRBjms1jnxGUaSi3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/management/faq/update_faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@update',
        'controller' => 'App\\Http\\Controllers\\Management\\FAQ\\FAQController@update',
        'namespace' => 'App\\Http\\Controllers\\Management\\FAQ',
        'prefix' => 'api/management/faq',
        'where' => 
        array (
        ),
        'as' => 'generated::uRBjms1jnxGUaSi3',
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
    'generated::V1w5oERMXwiFgEpS' => 
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
        'as' => 'generated::V1w5oERMXwiFgEpS',
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
    'generated::ZBFLk5LLW6gfXC62' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\GeneralController@revenue',
        'controller' => 'App\\Http\\Controllers\\Management\\GeneralController@revenue',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::ZBFLk5LLW6gfXC62',
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
    'generated::BMZIlXle1zdGIXQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/management/revenue/show_radio_revenue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Management\\GeneralController@radio_revenue',
        'controller' => 'App\\Http\\Controllers\\Management\\GeneralController@radio_revenue',
        'namespace' => 'App\\Http\\Controllers\\Management',
        'prefix' => 'api/management',
        'where' => 
        array (
        ),
        'as' => 'generated::BMZIlXle1zdGIXQF',
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
    'generated::a7F5jIEtbHSfU9Y6' => 
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
        'as' => 'generated::a7F5jIEtbHSfU9Y6',
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
    'generated::lBFkoYjmAv8HVJGm' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006650000000000000000";}";s:4:"hash";s:44:"LkhuG+den8Mm0lodhz/JPvsr2eoYj6WJcDfz+TI8NFg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lBFkoYjmAv8HVJGm',
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
    'generated::ZZEzKc7RdJtWDu9z' => 
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

  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006670000000000000000";}";s:4:"hash";s:44:"4/VKe2rIyBLuHOn2J/Qt+3Nixyzu9Ga4+xjApboOkHY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZZEzKc7RdJtWDu9z',
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
