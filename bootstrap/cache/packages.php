<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'bluevertex/mapbox-api-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'BlueVertex\\MapBoxAPILaravel\\MapBoxAPILaravelServiceProvider',
    ),
    'aliases' => 
    array (
      'Mapbox' => 'BlueVertex\\MapBoxAPILaravel\\Facades\\Mapbox',
    ),
  ),
);