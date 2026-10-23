<?php
return (object) [
  'scopes' => (object) [
    'Currency' => (object) [
      'read' => 'yes',
      'edit' => 'yes'
    ],
    'Email' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'EmailAccountScope' => true,
    'EmailTemplate' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'EmailTemplateCategory' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'ExternalAccount' => true,
    'GlobalStream' => true,
    'Import' => true,
    'Team' => (object) [
      'read' => 'all'
    ],
    'Template' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'User' => (object) [
      'read' => 'all',
      'edit' => 'own'
    ],
    'Webhook' => true,
    'WorkingTimeCalendar' => true,
    'Account' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Activities' => true,
    'Calendar' => true,
    'Call' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Campaign' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Case' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Contact' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Document' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'DocumentFolder' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'KnowledgeBaseArticle' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'KnowledgeBaseCategory' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Lead' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Meeting' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Opportunity' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'TargetList' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'TargetListCategory' => (object) [
      'read' => 'all',
      'stream' => 'no',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'Task' => (object) [
      'read' => 'all',
      'stream' => 'all',
      'edit' => 'all',
      'delete' => 'all',
      'create' => 'yes'
    ],
    'OpenApi' => false,
    'Target' => false,
    'Note' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'Portal' => (object) [
      'read' => 'all',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Attachment' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailAccount' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFilter' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFolder' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'GroupEmailFolder' => (object) [
      'read' => 'team',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Preferences' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Notification' => (object) [
      'read' => 'own',
      'edit' => 'no',
      'delete' => 'own',
      'create' => 'no'
    ],
    'ActionHistoryRecord' => (object) [
      'read' => 'own'
    ],
    'Role' => false,
    'PortalRole' => false,
    'ImportError' => true,
    'ImportEml' => true,
    'WorkingTimeRange' => true,
    'Stream' => true,
    'CurrencyRecord' => 'boolean:Currency',
    'CurrencyRecordRate' => (object) [
      'read' => 'yes',
      'edit' => 'yes'
    ],
    'MassEmail' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'CampaignLogRecord' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'CampaignTrackingUrl' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'EmailQueueItem' => (object) [
      'read' => 'no',
      'stream' => 'no',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ]
  ],
  'fields' => (object) [
    'Email' => (object) [
      'inboundEmails' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'emailAccounts' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Team' => (object) [],
    'User' => (object) [
      'gender' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'avatarColor' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'dashboardTemplate' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'workingTimeCalendar' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'password' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'passwordConfirm' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'auth2FA' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authMethod' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'apiKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'secretKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'token' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Account' => (object) [],
    'Call' => (object) [
      'uid' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Campaign' => (object) [],
    'Case' => (object) [],
    'Contact' => (object) [],
    'Document' => (object) [],
    'DocumentFolder' => (object) [],
    'KnowledgeBaseArticle' => (object) [],
    'KnowledgeBaseCategory' => (object) [],
    'Lead' => (object) [],
    'Meeting' => (object) [
      'uid' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Opportunity' => (object) [],
    'TargetList' => (object) [],
    'TargetListCategory' => (object) [],
    'Task' => (object) [],
    'ActionHistoryRecord' => (object) [
      'authToken' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authLogRecord' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'EmailAccount' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ],
    'EmailFolder' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ]
  ],
  'permissions' => (object) [
    'assignment' => 'all',
    'message' => 'all',
    'mention' => 'all',
    'userCalendar' => 'all',
    'audit' => 'yes',
    'export' => 'yes',
    'massUpdate' => 'yes',
    'user' => 'all',
    'portal' => 'yes',
    'groupEmailAccount' => 'all',
    'followerManagement' => 'all',
    'dataPrivacy' => 'yes'
  ]
];
