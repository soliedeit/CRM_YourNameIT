<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'crm_db',
    'user' => 'crm_db',
    'password' => 'rGnHrsStJGw4WqNtt2T5',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1753796840.346763,
  'cryptKey' => '4ea0f3736053ef2f425c3c3c8bd9597e',
  'hashSecretKey' => '210ed28dd44b68327ae3d67b068847b8',
  'defaultPermissions' => [
    'user' => 1016,
    'group' => 1017
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.6.20',
  'instanceId' => 'b0259e74-0eb7-484d-a6f3-28250825845b'
];
