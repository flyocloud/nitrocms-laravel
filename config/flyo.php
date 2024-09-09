<?php

return [
    // The token to authenticate the application with the Flyo API.
    // The production token can be set here, if there is no token set in the .env file, the production token will be used.
    'token' => env('FLYO_TOKEN', 'ADD_PRODUCTION_TOKEN_HERE'),

    // If enabled, the user can interact with the components, also it represents the application to be in development mode.
    // The default setting false represents the application to be in production mode.
    'live_edit' => env('FLYO_LIVE_EDIT', false),

    // The namespace for the views, which means the views will be stored in resources/views/flyo.
    'views_namespace' => 'flyo',

    // TTL (Time-To-Live) for client-side cache headers, in seconds.
    // Default is 900 seconds (15 minutes) its only availble if the liveEdit is disabled. Use 0 to disable client caching.
    'server_cache_ttl' => env('FLYO_SERVER_CACHE_TTL', 900),

    // TTL (Time-To-Live) for server-side cache headers, in seconds.
    // Default is 1200 seconds (20 minutes) its only availble if the liveEdit is disabled. Use 0 to disable server caching.
    'client_cache_ttl' => env('FLYO_CLIENT_CACHE_TTL', 1200),
];
