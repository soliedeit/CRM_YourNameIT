<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Gebruiker',
      'action' => 'Actie',
      'createdAt' => 'Datum',
      'userType' => 'Type gebruiker',
      'target' => 'Doel',
      'targetType' => 'Doel type',
      'authToken' => 'Auth sleutel',
      'ipAddress' => 'IP adres',
      'authLogRecord' => 'Auth log record'
    ],
    'links' => [
      'authToken' => 'Auth sleutel',
      'authLogRecord' => 'Auth log record',
      'user' => 'Gebruiker',
      'target' => 'Doel'
    ],
    'presetFilters' => [
      'onlyMy' => 'Alleen mijn'
    ],
    'options' => [
      'action' => [
        'read' => 'Lees',
        'update' => 'Update',
        'delete' => 'Verwijder',
        'create' => 'Creëer'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Creëer land adres',
      'Populate' => 'Invullen'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Heeft voorkeur'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 land code.',
      'isPreferred' => 'Voorkeurslanden verschijnen als eerste in lijst.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'Alle bestaande landen worden verwijderd, de standaard land lijst wordt aangemaakt. Het is niet mogelijk om de actie terug te draaien.

Weet je het zeker?'
    ],
    'strings' => [
      'populateDefaults' => 'Invullen met standaard landenlijst'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Ingeschakeld',
      'Disabled' => 'Uitgeschakeld',
      'System' => 'Systeem',
      'Users' => 'Gebruikers',
      'Email' => 'E-mail',
      'Messaging' => 'Berichten',
      'Data' => 'Data',
      'Misc' => 'Overig',
      'Setup' => 'Setup',
      'Customization' => 'Aanpassing',
      'Available Fields' => 'Beschikbare velden',
      'Layout' => 'Lay-out',
      'Entity Manager' => 'Entiteit beheerder',
      'Add Panel' => 'Kader toevoegen',
      'Add Field' => 'Veld toevoegen',
      'Settings' => 'Instellingen',
      'Scheduled Jobs' => 'Geplande opdrachten',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache opschonen',
      'Rebuild' => 'Reconstrueren',
      'Teams' => 'Groepen',
      'Roles' => 'Functies',
      'Portal' => 'Portaal',
      'Portals' => 'Portalen',
      'Portal Roles' => 'Portaal functies',
      'Portal Users' => 'Portaalgebruikers',
      'API Users' => 'API gebruikers',
      'Outbound Emails' => 'Uitgaande e-mails',
      'Group Email Accounts' => 'Groep e-mailaccounts',
      'Personal Email Accounts' => 'Persoonlijk e-mailaccounts',
      'Inbound Emails' => 'Inkomende e-mails',
      'Email Templates' => 'E-mail sjablonen',
      'Import' => 'Importeren',
      'Layout Manager' => 'Lay-out manager',
      'User Interface' => 'Gebruikers interface',
      'Auth Tokens' => 'Auth sleutels',
      'Auth Log' => 'Auth log',
      'App Log' => 'App Log',
      'App Secrets' => 'App geheimen',
      'Authentication' => 'Authenticatie',
      'Currency' => 'Valuta',
      'Integrations' => 'Integraties',
      'Extensions' => 'Extensies',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard sjablonen',
      'Upload' => 'Upload',
      'Installing...' => 'Installeren...',
      'Upgrading...' => 'Bezig met upgraden...',
      'Upgraded successfully' => 'Upgrade succesvol',
      'Installed successfully' => 'Installatie succesvol',
      'Ready for upgrade' => 'Gereed voor upgrade',
      'Run Upgrade' => 'Upgrade uitvoeren',
      'Install' => 'Installeren',
      'Ready for installation' => 'Gereed voor installatie',
      'Uninstalling...' => 'Bezig met deinstalleren...',
      'Uninstalled' => 'Gedeïnstalleerd',
      'Create Entity' => 'Creëer entiteit',
      'Edit Entity' => 'Bewerk entiteit',
      'Create Link' => 'Creëer Link',
      'Edit Link' => 'Bewerk link',
      'Notifications' => 'Meldingen',
      'Jobs' => 'Jobs',
      'Job Settings' => 'Taakinstellingen',
      'Reset to Default' => 'Standaardinstellingen terugzetten',
      'Email Filters' => 'E-mail filters',
      'Action History' => 'Actiegeschiedenis',
      'Label Manager' => 'Label manager',
      'Template Manager' => 'Template beheerder',
      'Lead Capture' => 'Leads verwerven',
      'Attachments' => 'Bijlagen',
      'System Requirements' => 'Systeem eisen',
      'PDF Templates' => 'PDF sjablonen',
      'PHP Settings' => 'PHP-instellingen',
      'Database Settings' => 'Database instellingen',
      'Permissions' => 'Rechten',
      'Email Addresses' => 'E-mailadressen',
      'Phone Numbers' => 'Telefoonnummers',
      'Layout Sets' => 'Lay-out sets',
      'Working Time Calendars' => 'Werktijd kalenders',
      'Group Email Folders' => 'Groep e-mailmappen',
      'Authentication Providers' => 'Authenticatieproviders',
      'Address Countries' => 'Landen',
      'OAuth Providers' => 'OAuth Providers',
      'Success' => 'Succesvol',
      'Fail' => 'Mislukt',
      'Configuration Instructions' => 'Configuratie-instructies',
      'Formula Sandbox' => 'Formule Sandbox',
      'is recommended' => 'is aanbevolen',
      'extension is missing' => 'extensie ontbreekt'
    ],
    'layouts' => [
      'list' => 'Lijst',
      'detail' => 'Detail',
      'listSmall' => 'Lijst (klein)',
      'detailSmall' => 'Detail (klein)',
      'detailPortal' => 'Detail (portaal)',
      'detailSmallPortal' => 'Detail (klein, portaal)',
      'listSmallPortal' => 'Lijst (klein, portaal)',
      'listPortal' => 'Lijst (portaal)',
      'relationshipsPortal' => 'Relatie panelen (portaal)',
      'filters' => 'Zoek Filters',
      'massUpdate' => 'Massale update',
      'relationships' => 'Relatie panelen',
      'defaultSidePanel' => 'Zijpaneel Velden',
      'bottomPanelsDetail' => 'Onderste panelen',
      'bottomPanelsEdit' => 'Onderste panelen (Bewerk)',
      'bottomPanelsDetailSmall' => 'Onderste panelen (Details klein)',
      'bottomPanelsEditSmall' => 'Onderste panelen (Bewerk klein)',
      'sidePanelsDetail' => 'Zijpanelen (detail)',
      'sidePanelsEdit' => 'Zijpanelen (bewerken)',
      'sidePanelsDetailSmall' => 'Zijpanelen (detail klein)',
      'sidePanelsEditSmall' => 'Zijpanelen (bewerk klein)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Omzetten lead',
      'listForAccount' => 'Lijst (Account)',
      'listForContact' => 'Lijst (voor contact)'
    ],
    'fieldTypes' => [
      'base' => 'Base',
      'address' => 'Adres',
      'array' => 'Reeks',
      'foreign' => 'Extern',
      'duration' => 'Duur',
      'password' => 'Wachtwoord',
      'personName' => 'Naam persoon',
      'autoincrement' => 'Automatisch ophogen',
      'bool' => 'Booleaans',
      'currency' => 'Valuta',
      'currencyConverted' => 'Valuta (geconverteerd)',
      'date' => 'Datum',
      'datetime' => 'Datum tijd',
      'datetimeOptional' => 'Datum / tijd',
      'email' => 'E-mail',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum variabel',
      'float' => 'Variabel',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link meerdere',
      'linkParent' => 'Link bovenliggend',
      'linkOne' => 'Link één',
      'phone' => 'Telefoon',
      'text' => 'Tekst',
      'url' => 'URL',
      'urlMultiple' => 'Meerdere Url',
      'varchar' => 'Varchar',
      'file' => 'Bestand',
      'image' => 'Afbeelding',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Meerdere bijlagen',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Bereik integer',
      'rangeCurrency' => 'Bereik valuta',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Kaart',
      'number' => 'Nummer (automatisch ophogen)',
      'colorpicker' => 'Kleur kiezer',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json reeks',
      'jsonObject' => 'Json object'
    ],
    'fields' => [
      'type' => 'Type',
      'name' => 'Naam',
      'label' => 'Label',
      'tooltipText' => 'Tekst van de tooltip',
      'required' => 'Verplicht',
      'default' => 'Standaard',
      'maxLength' => 'Max Lengte',
      'options' => 'Opties',
      'optionsReference' => 'Opties Referentie',
      'after' => 'Achter (veld)',
      'before' => 'Voor (veld)',
      'link' => 'Link',
      'field' => 'Veld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Vertaling',
      'previewSize' => 'Preview Afmeting',
      'listPreviewSize' => 'Voorbeeldgrootte in lijstweergave',
      'noEmptyString' => 'Lege string waarde niet toegestaan',
      'defaultType' => 'Default Type',
      'seeMoreDisabled' => 'Tekst afkorten uitschakelen',
      'cutHeight' => 'Snijhoogte (px)',
      'entityList' => 'Entiteit lijst',
      'isSorted' => 'Is gesorteerd (alfabetisch)',
      'audited' => 'Gecontroleerd',
      'trim' => 'Trim',
      'height' => 'Hoogte (px)',
      'minHeight' => 'Minimale hoogte (px)',
      'provider' => 'Leverancier',
      'typeList' => 'Type lijst',
      'rows' => 'Max aantal rijen',
      'lengthOfCut' => 'Afbreeklengte',
      'sourceList' => 'Lijst bronnen',
      'prefix' => 'Voorvoegsel',
      'nextNumber' => 'Volgend nummer',
      'padLength' => 'Padlengte',
      'disableFormatting' => 'Schakel opmaak uit',
      'dynamicLogicVisible' => 'Voorwaarden die het veld zichtbaar maken',
      'dynamicLogicReadOnly' => 'Voorwaarden die velden alleen lezen maken',
      'dynamicLogicRequired' => 'Het veld voor het maken van voorwaarden is vereist',
      'dynamicLogicOptions' => 'Voorwaardelijke opties',
      'dynamicLogicInvalid' => 'Condities die veld ongeldig maken',
      'dynamicLogicReadOnlySaved' => 'Saved state conditions making field read-only',
      'probabilityMap' => 'Fasekansen (%)',
      'notActualOptions' => 'Niet actuele opties',
      'activeOptions' => 'Actieve opties',
      'readOnly' => 'Alleen lezen',
      'readOnlyAfterCreate' => 'Alleen lezen na aanmaken',
      'preview' => 'Voorbeeld',
      'attachmentField' => 'Bijlage veld',
      'maxFileSize' => 'Max. Bestandsgrootte (Mb)',
      'isPersonalData' => 'Zijn persoonlijke gegevens',
      'useIframe' => 'Gebruik iframe',
      'useNumericFormat' => 'Gebruik Numeriek Formaat',
      'strip' => 'Strip',
      'minuteStep' => 'Aantal minuten',
      'inlineEditDisabled' => 'Inline-bewerking uitschakelen',
      'allowCustomOptions' => 'Aangepaste opties toestaan',
      'displayAsLabel' => 'Weergave als label',
      'displayAsList' => 'Weergeven als lijst',
      'labelType' => 'Type label',
      'maxCount' => 'Maximumpuntentelling',
      'accept' => 'Accepteer',
      'viewMap' => 'Bekijk de kaartknop',
      'codeType' => 'Type code',
      'lastChar' => 'Laatste teken',
      'onlyDefaultCurrency' => 'Alleen standaardvaluta',
      'decimal' => 'Decimaal',
      'displayRawText' => 'Onbewerkte tekst weergeven (geen markering)',
      'conversionDisabled' => 'Conversie uitschakelen',
      'decimalPlaces' => 'Decimale posities',
      'pattern' => 'Patroon',
      'globalRestrictions' => 'Globale beperkingen',
      'copyToClipboard' => 'Kopieer naar klembord knop',
      'createButton' => 'Knop aanmaken',
      'autocompleteOnEmpty' => 'Autoaanvullen bij lege invoer',
      'relateOnImport' => 'Relateer op import',
      'aclScope' => 'ACL Toepassing',
      'onlyAdmin' => 'Alleen voor Admin',
      'notStorable' => 'Not Storable'
    ],
    'strings' => [
      'rebuildRequired' => 'Reconstrueren vereist'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Als cache is uitgeschakeld, zal de applicatie traag werken. Schakel cache in bij [instellingen](#Admin/instellingen).',
      'formulaFunctions' => 'Meer functies zijn te vinden in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'Je moet de heropbouw via CLI uitvoeren.',
      'upgradeVersion' => 'EspoCRM wordt opgewaardeerd naar versie **{version}**. Wees geduldig, want dit kan even duren.',
      'upgradeDone' => 'EspoCRM is geüpgrade naar versie **{version}**.',
      'upgradeBackup' => 'We adviseren om eerst een backup te maken van uw EspoCRM bestanden en data, alvorens te upgraden.',
      'thousandSeparatorEqualsDecimalMark' => 'Het duizendtal scheidingsteken mag niet hetzelfde zijn als het decimaalteken.',
      'userHasNoEmailAddress' => 'Gebruiker heeft geen e-mailadres.',
      'selectEntityType' => 'Selecteer de eenheid soort in het linker menu.',
      'selectUpgradePackage' => 'Selecteer het upgradebestand',
      'downloadUpgradePackage' => 'Download upgrade pakket(en) [hier]({url}).',
      'selectLayout' => 'Selecteer de lay-out in het linker menu en pas deze aan.',
      'selectExtensionPackage' => 'Selecteer extensie bestand',
      'extensionInstalled' => 'Extensie {name} {version} is geïnstalleerd.',
      'installExtension' => 'Extensie {name} {version} is gereed voor installatie.',
      'cronIsDisabled' => 'Als cron is uitgeschakeld, werkt de toepassing niet volledig. Schakel cron in bij [instellingen](#Admin/instellingen).',
      'cronIsNotConfigured' => 'Geplande taken zijn niet actief. Vandaar dat inkomende e-mails, meldingen en herinneringen niet werken. Volg de [instructies](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) om cron-taak in te stellen.',
      'newVersionIsAvailable' => 'Nieuwe EspoCRM-versie {latestVersion} is beschikbaar. Volg de [instructions](https://www.espocrm.com/documentation/administration/upgrading/) om uw installatie te upgraden.',
      'newExtensionVersionIsAvailable' => 'Nieuwe versie {latestVersion} van {extensionName} is beschikbaar.',
      'uninstallConfirmation' => 'Weet je zeker dat je de extensie wilt verwijderen?',
      'upgradeInfo' => 'Controleer de [documentatie]({url}) over hoe u uw EspoCRM-instantie kunt upgraden.',
      'upgradeRecommendation' => 'Deze manier van upgraden wordt niet aanbevolen. Het is beter om te upgraden vanuit CLI.'
    ],
    'descriptions' => [
      'settings' => 'Systeeminstellingen van de applicatie.',
      'scheduledJob' => 'Opdrachten die uitgevoerd worden door cron.',
      'jobs' => 'Jobs voert taken uit op de achtergrond.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Verwijder backend cache.',
      'rebuild' => 'Reconstrueer backend en schoon het geheugen.',
      'users' => 'Gebruikers beheer.',
      'teams' => 'Groepen beheer.',
      'roles' => 'Functie beheer.',
      'portals' => 'Portaalbeheer.',
      'portalRoles' => 'Functies voor portaal.',
      'portalUsers' => 'Gebruikers van portaal.',
      'outboundEmails' => 'SMTP instellingen voor uitgaande e-mails.',
      'groupEmailAccounts' => 'Groep van IMAP e-mail accounts. E-mail import en e-mail-naar-tickets.',
      'personalEmailAccounts' => 'Gebruikers e-mailaccounts.',
      'emailTemplates' => 'Templates voor uitgaande e-mails.',
      'import' => 'Importeer data vanuit CSV bestand.',
      'layoutManager' => 'Lay-outs aanpassen (lijst, detail, bewerken, zoeken, massale update).',
      'entityManager' => 'Creëer en bewerk aangepaste entiteiten. Beheer velden en relaties.',
      'userInterface' => 'Configureer interface.',
      'authTokens' => 'Actieve bevestigde sessie. IP adres en laatste inlogdatum.',
      'authentication' => 'Verificatie-instellingen.',
      'currency' => 'Valuta instellingen en tarieven.',
      'extensions' => 'Extensies (de)installeren.',
      'integrations' => 'Integratie met diensten van derden.',
      'notifications' => 'In-app en e-mail notificatie instellingen.',
      'inboundEmails' => 'Instellingen voor inkomende e-mails.',
      'emailFilters' => 'E-mails die met een gespecificeerd filter overeenkomen, worden niet geïmporteerd.',
      'groupEmailFolders' => 'E-mailmappen gedeeld voor teams.',
      'actionHistory' => 'Log van gebruikersacties.',
      'labelManager' => 'Applicatie labels aanpassen.',
      'templateManager' => 'Aanpassen van berichtsjablonen.',
      'authLog' => 'Login geschiedenis.',
      'appLog' => 'Logboek toepassing.',
      'appSecrets' => 'Sla gevoelige informatie op zoals API-sleutels, wachtwoorden en andere geheimen.',
      'leadCapture' => 'Webformulieren voor het vastleggen van leads.',
      'attachments' => 'Alle bestandsbijlagen opgeslagen in het systeem.',
      'systemRequirements' => 'Systeem eisen voor EspoCRM.',
      'apiUsers' => 'Splits gebruikers voor integratiedoeleinden.',
      'webhooks' => 'Beheer webhooks.',
      'authenticationProviders' => 'Extra authenticatieproviders voor portalen.',
      'emailAddresses' => 'Alle e-mailadressen die in het systeem zijn opgeslagen.',
      'phoneNumbers' => 'Alle telefoonnummers die in het systeem zijn opgeslagen.',
      'dashboardTemplates' => 'Implementeer dashboards voor gebruikers.',
      'layoutSets' => 'Verzamelingen van lay-outs die kunnen worden toegewezen aan groepen & portalen.',
      'workingTimeCalendars' => 'Werkschema.',
      'jobsSettings' => 'Instellingen voor taakverwerking. Taken worden op de achtergrond uitgevoerd.',
      'sms' => 'SMS instellingen.',
      'pdfTemplates' => 'Sjablonen om af te drukken naar PDF.',
      'formulaSandbox' => 'Formulescripts schrijven en testen.',
      'addressCountries' => 'Landen beschikbaar voor adresvelden.',
      'oAuthProviders' => 'OAuth providers for integrations.'
    ],
    'keywords' => [
      'settings' => 'systeem',
      'userInterface' => 'ui, thema, tabbladen, logo, dashboard',
      'authentication' => 'wachtwoord, beveiliging, ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'meldingen',
      'jobs' => 'cron',
      'labelManager' => 'taal, vertaling',
      'appSecrets' => 'sleutel,sleutels,wachtwoord',
      'leadCapture' => 'webformulieren'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => 'Extra klein',
        'small' => 'Klein',
        'medium' => 'Middel',
        'large' => 'Groot'
      ],
      'labelType' => [
        'state' => 'Provincie',
        'regular' => 'Regulier'
      ]
    ],
    'logicalOperators' => [
      'and' => 'EN',
      'or' => 'OF',
      'not' => 'NIET'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'PHP versie',
      'requiredMysqlVersion' => 'MySQL Versie',
      'requiredMariadbVersion' => 'MariaDB versie',
      'requiredPostgresqlVersion' => 'PostgreSQL versie',
      'host' => 'Hostnaam',
      'dbname' => 'Database naam',
      'user' => 'Gebruikersnaam',
      'writable' => 'Schrijfbaar',
      'readable' => 'Leesbaar'
    ],
    'templates' => [
      'twoFactorCode' => '2FA-code',
      'accessInfo' => 'Toegangs info',
      'accessInfoPortal' => 'Toegangs info voor Portaal',
      'assignment' => 'Toegewezen',
      'mention' => 'Vermeld',
      'noteEmailReceived' => 'Opmerking ontvangen e-mail',
      'notePost' => 'Opmerking over bericht',
      'notePostNoParent' => 'Opmerking over bericht (niet bovenliggend)',
      'noteStatus' => 'Opmerking over status-update',
      'passwordChangeLink' => 'Wachtwoord wijzigingslink',
      'invitation' => 'Uitnodiging',
      'cancellation' => 'Annulering',
      'reminder' => 'Herinnering'
    ],
    'tooltips' => [
      'tabUrl' => 'Can start with `#` to navigate to an application page.',
      'tabUrlAclScope' => 'The tab will be available for users who have access to the specified scope.'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Creëer API gebruiker'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Bericht',
      'code' => 'Code',
      'level' => 'Niveau',
      'exceptionClass' => 'Uitzonderings klasse',
      'file' => 'Bestand',
      'line' => 'Regel',
      'requestMethod' => 'Aanvraag Methode',
      'requestResourcePath' => 'Bron Pad aanvragen'
    ],
    'presetFilters' => [
      'errors' => 'Fouten'
    ]
  ],
  'AppSecret' => [
    'labels' => [
      'Create AppSecret' => 'Maak geheim'
    ],
    'fields' => [
      'value' => 'Waarde'
    ],
    'tooltips' => [
      'name' => 'Toegestane tekens:
* `[a-z]`
* `[A-Z]`
* `[0-9]`
* `_`'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Rol',
      'related' => 'Verwant',
      'file' => 'Bestand',
      'type' => 'Type',
      'field' => 'Veld',
      'sourceId' => 'Bron ID',
      'storage' => 'Opslagruimte',
      'size' => 'Grootte (bytes)',
      'isBeingUploaded' => 'Wordt geüpload'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Bijlage',
        'Inline Attachment' => 'Inline bijlage',
        'Import File' => 'Importeer bestand',
        'Export File' => 'Export bestand',
        'Mail Merge' => 'Mailmerge',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Voeg document in'
    ],
    'presetFilters' => [
      'orphan' => 'Wees'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Gebruikersnaam',
      'ipAddress' => 'IP adres',
      'requestTime' => 'Verzoektijd',
      'createdAt' => 'Gevraagd om',
      'isDenied' => 'Is geweigerd',
      'denialReason' => 'Reden weigering',
      'portal' => 'Portaal',
      'user' => 'Gebruiker',
      'authToken' => 'Auth sleutel aangemaakt',
      'requestUrl' => 'Verzoek om URL',
      'requestMethod' => 'Verzoek methode',
      'authTokenIsActive' => 'Auth sleutel is actief',
      'authenticationMethod' => 'Authenticatie methode'
    ],
    'links' => [
      'authToken' => 'Auth sleutel aangemaakt',
      'user' => 'Gebruiker',
      'portal' => 'Portaal',
      'actionHistoryRecords' => 'Actiegeschiedenis'
    ],
    'presetFilters' => [
      'denied' => 'Geweigerd',
      'accepted' => 'Geaccepteerd'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Ongeldige inloggegevens',
        'WRONG_CODE' => 'Verkeerde code',
        'INACTIVE_USER' => 'Inactieve gebruiker',
        'IS_PORTAL_USER' => 'Portaalgebruiker',
        'IS_NOT_PORTAL_USER' => 'Geen portaalgebruiker',
        'USER_IS_NOT_IN_PORTAL' => 'Gebruiker is niet gerelateerd aan de portaal',
        'IS_SYSTEM_USER' => 'Is systeemgebruiker',
        'FORBIDDEN' => 'Verboden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Gebruiker',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Laatste inlogdatum',
      'createdAt' => 'Login datum',
      'isActive' => 'Is actief',
      'portal' => 'Portaal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Actiegeschiedenis'
    ],
    'presetFilters' => [
      'active' => 'Actief',
      'inactive' => 'Inactief'
    ],
    'labels' => [
      'Set Inactive' => 'Inactief instellen'
    ],
    'massActions' => [
      'setInactive' => 'Inactief instellen'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Methode'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Creëer aanbieder'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'Verenigde Arabische Emiraten Dirham',
      'AFN' => 'Afghaans Afghani',
      'ALL' => 'Albanese Lek',
      'AMD' => 'Armeense Dram',
      'ANG' => 'Nederlands Antilliaanse Gulden',
      'AOA' => 'Angolese Kwanza',
      'ARS' => 'Argentijnse Peso',
      'AUD' => 'Australische Dollar',
      'AWG' => 'Arubaanse Florijn',
      'AZN' => 'Azerbeidzjaanse Manat',
      'BAM' => 'Bosnië-Herzegovina converteerbare mark',
      'BBD' => 'Barbadiaanse dollar',
      'BDT' => 'Bengaalse Taka',
      'BGN' => 'Bulgaarse Lev',
      'BHD' => 'Bahreinse Dinar',
      'BIF' => 'Burundese frank',
      'BMD' => 'Bermudaanse dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Boliviaanse Boliviano',
      'BOV' => 'Boliviaanse Mvdol',
      'BRL' => 'Braziliaanse real',
      'BSD' => 'Bahamaanse dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswana Pula',
      'BYN' => 'Wit-Russische roebel',
      'BZD' => 'Belizaanse dollar',
      'CAD' => 'Canadese dollar',
      'CDF' => 'Congolese frank',
      'CHE' => 'Wir Euro',
      'CHF' => 'Zwitserse frank',
      'CHW' => 'WIR Frank',
      'CLF' => 'Chileense rekeneenheid (UF)',
      'CLP' => 'Chileense Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombiaanse Peso',
      'COU' => 'Colombiaanse echte waarde eenheid',
      'CRC' => 'Costa Ricaanse Colon',
      'CUC' => 'Cubaanse Convertible Peso',
      'CUP' => 'Cubaanse Peso',
      'CVE' => 'Kaapverdische Escudo',
      'CZK' => 'Tsjechische Koruna',
      'DJF' => 'Djiboutiaanse frank',
      'DKK' => 'Deense Kroon',
      'DOP' => 'Dominicaanse Peso',
      'DZD' => 'Algerijnse dinar',
      'EGP' => 'Egyptische pond',
      'ERN' => 'Eritrese Nakfa',
      'ETB' => 'Ethiopische Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijische dollar',
      'FKP' => 'Falklandeilands pond',
      'GBP' => 'Britse pond',
      'GEL' => 'Georgische Lari',
      'GHS' => 'Ghanese Cedi',
      'GIP' => 'Gibraltar pond',
      'GMD' => 'Gambiaanse Dalasi',
      'GNF' => 'Guinese Frank',
      'GTQ' => 'Guatemalteekse Quetzal',
      'GYD' => 'Guyanese dollar',
      'HKD' => 'Hong Kong dollar',
      'HNL' => 'Hondurese Lempira',
      'HRK' => 'Kroatische kuna',
      'HTG' => 'Haïtiaanse Gourde',
      'HUF' => 'Hongaarse Forint',
      'IDR' => 'Indonesische roepia',
      'ILS' => 'Israëlische Nieuwe Shekel',
      'INR' => 'Indiase roepie',
      'IQD' => 'Indiase roepie',
      'IRR' => 'Iraanse Rial',
      'ISK' => 'IJslandse Króna',
      'JMD' => 'Jamaicaanse dollar',
      'JOD' => 'Jordaanse dinar',
      'JPY' => 'Japanse Yen',
      'KES' => 'Keniaanse Shilling',
      'KGS' => 'Kirgizische Som',
      'KHR' => 'Cambodjaanse Riel',
      'KMF' => 'Comorese frank',
      'KPW' => 'Noord-Koreaanse Won',
      'KRW' => 'Noord-Koreaanse Won',
      'KWD' => 'Koeweitse dinar',
      'KYD' => 'Kaaimaneilanden dollar',
      'KZT' => 'Kazachstaanse Tenge',
      'LAK' => 'Laotiaanse Kip',
      'LBP' => 'Libanees pond',
      'LKR' => 'Sri Lankaanse roepie',
      'LRD' => 'Liberiaanse dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libische dinar',
      'MAD' => 'Marokkaanse dirham',
      'MDL' => 'Moldavische Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonische denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongoolse Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritaanse ouguiya',
      'MUR' => 'Mauritiaanse roepie',
      'MWK' => 'Malawische Kwacha',
      'MXN' => 'Mexicaanse peso',
      'MXV' => 'Mexicaanse investeringseenheid',
      'MYR' => 'Maleisische ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibische dollar',
      'NGN' => 'Nigeriaanse Naira',
      'NIO' => 'Nicaraguaans Cordoba',
      'NOK' => 'Noorse kroon',
      'NPR' => 'Nepalese roepie',
      'NZD' => 'Nieuw-Zeelandse dollar',
      'OMR' => 'Omaanse Rial',
      'PAB' => 'Panamese Balboa',
      'PEN' => 'Peruaanse sol',
      'PGK' => 'Papoea-Nieuw-Guineaanse Kina',
      'PHP' => 'Filippijnse Piso',
      'PKR' => 'Pakistaanse roepie',
      'PLN' => 'Poolse Zloty',
      'PYG' => 'Paraguayaanse Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Roemeense leu',
      'RSD' => 'Servische dinar',
      'RUB' => 'Russische roebel',
      'RWF' => 'Rwandese frank',
      'SAR' => 'Saoedi-Riyal',
      'SBD' => 'Solomons eilanden Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Soedanees pond',
      'SEK' => 'Zweedse kroon',
      'SGD' => 'Singapore dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somalische shilling',
      'SRD' => 'Surinaamse dollar',
      'SSP' => 'Zuid-Soedanese pond',
      'STN' => 'São Tomé & Principe Dobra (2018)',
      'SYP' => 'Syrische pond',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoraanse Colon',
      'THB' => 'Thaise Baht',
      'TJS' => 'Tajikistni Somoni',
      'TND' => 'Tunesische Dinar',
      'TOP' => 'Tongaanse Pa\'anga',
      'TRY' => 'Turkse lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'Nieuwe Taiwanese dollar',
      'TZS' => 'Tanzaniaanse shilling',
      'UAH' => 'Oekraïense Hryvnia',
      'UGX' => 'Oegandese Shilling',
      'USD' => 'Amerikaanse dollar',
      'USN' => 'US Dollar (volgende dag)',
      'UYI' => 'Uruguayaanse peso (geïndexeerde eenheden)',
      'UYU' => 'Uruguayaanse peso',
      'UZS' => 'Oezbekistani Som',
      'VEF' => 'Venezolaanse Bolivar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoaanse Tala',
      'XAF' => 'Centraal-Afrikaanse CFA Franc',
      'XCD' => 'Oost-Caribische dollar',
      'XOF' => 'West-Afrikaanse CFA Franc',
      'XPF' => 'CFA Franc',
      'YER' => 'Jemenitische Rial',
      'ZAR' => 'Zuid-Afrikaanse Rand',
      'ZMW' => 'Zambiaanse Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Lay-out',
      'append' => 'Toevoegen (verwijder de tabbladen van de gebruiker niet)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Creëer Sjabloon',
      'Deploy to Users' => 'Implementeer bij gebruikers',
      'Deploy to Team' => 'Implementeer bij groep'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Titel',
      'dateFrom' => 'Datum vanaf',
      'dateTo' => 'Datum tot',
      'autorefreshInterval' => 'Automatisch bijwerken interval',
      'displayRecords' => 'Velden weergeven',
      'isDoubleHeight' => 'Hoogte 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'Wat te tonen',
      'users' => 'Gebruikers',
      'entityType' => 'Type entiteit',
      'primaryFilter' => 'Primair filter',
      'boolFilterList' => 'Extra filters',
      'sortBy' => 'Sortering (veld)',
      'sortDirection' => 'Sortering (richting)',
      'expandedLayout' => 'Lay-out',
      'skipOwn' => 'Geen eigen records tonen',
      'url' => 'URL',
      'dateFilter' => 'Datumfilter',
      'text' => 'Tekst',
      'folder' => 'Map',
      'includeShared' => 'Include Shared',
      'team' => 'Groep',
      'futureDays' => 'Volgende X dagen',
      'useLastStage' => 'Groeperen op laatst bereikte fase'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Maand',
        'basicDay' => 'Dag',
        'agendaDay' => 'Dag (agenda)',
        'timeline' => 'Tijdlijn'
      ],
      'sortDirection' => [
        'asc' => 'Oplopend',
        'desc' => 'Aflopend'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Selecteer entiteit Type in dashlet opties.'
    ],
    'tooltips' => [
      'skipOwn' => 'Acties van uw gebruikersaccount worden niet weergegeven.'
    ],
    'otherFields' => [
      'soft' => 'Soft Color',
      'small' => 'Small Font'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Veld'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Gelijk aan',
        'notEquals' => 'Niet gelijk aan',
        'greaterThan' => 'Groter dan',
        'lessThan' => 'Minder dan',
        'greaterThanOrEquals' => 'Groter dan of gelijk aan',
        'lessThanOrEquals' => 'Minder dan of gelijk aan',
        'in' => 'In',
        'notIn' => 'Niet in',
        'inPast' => 'In het verleden',
        'inFuture' => 'Toekomst',
        'isToday' => 'Is vandaag',
        'isTrue' => 'Is waar',
        'isFalse' => 'Is fout',
        'isEmpty' => 'Is leeg',
        'isNotEmpty' => 'Is niet leeg',
        'contains' => 'Bevat',
        'notContains' => 'Bevat niet',
        'has' => 'Bevat',
        'notHas' => 'Bevat niet',
        'startsWith' => 'Begint met',
        'endsWith' => 'Eindigt met',
        'matches' => 'Overeenkomsten (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Onderwerp',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateSent' => 'Datum verzonden',
      'from' => 'Van',
      'to' => 'Naar',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Antwoord aan',
      'replyToString' => 'Antwoord aan (String)',
      'personStringData' => 'Persoonlijke Stringgegevens',
      'isHtml' => 'HTML',
      'body' => 'Inhoud',
      'bodyPlain' => 'Inhoud (zonder opmaak)',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'selectTemplate' => 'Selecteer Template',
      'fromEmailAddress' => 'Van adres (link)',
      'emailAddress' => 'E-mailadres',
      'deliveryDate' => 'Afleverdatum',
      'account' => 'Account',
      'users' => 'Gebruikers',
      'replied' => 'Beantwoord',
      'replies' => 'Antwoorden',
      'isRead' => 'Is gelezen',
      'isNotRead' => 'Is ongelezen',
      'isImportant' => 'Is Important',
      'isReplied' => 'Is beantwoord',
      'isNotReplied' => 'Is niet beantwoord',
      'isUsers' => 'Is van gebruiker',
      'isUsersSent' => 'Is door gebruiker verzonden',
      'inTrash' => 'In prullenbak',
      'inArchive' => 'In Archief',
      'folder' => 'Map',
      'inboundEmails' => 'Groepsaccounts',
      'emailAccounts' => 'Persoonlijke accounts',
      'hasAttachment' => 'Heeft bijlage',
      'assignedUsers' => 'Toegewezen gebruikers',
      'sentBy' => 'Verzonden door',
      'toEmailAddresses' => 'Naar e-mailadressen',
      'ccEmailAddresses' => 'CC e-mailadressen',
      'bccEmailAddresses' => 'BCC e-mail adressen',
      'replyToEmailAddresses' => 'Antwoord Aan e-mail adressen',
      'messageId' => 'Bericht-ID',
      'messageIdInternal' => 'Bericht-ID (intern)',
      'folderId' => 'Map-ID',
      'folderString' => 'Map',
      'fromName' => 'Van naam',
      'fromString' => 'Van String',
      'fromAddress' => 'Van Adres',
      'replyToName' => 'Antwoord Aan naam',
      'replyToAddress' => 'Antwoord Aan adres',
      'isSystem' => 'Is systeem',
      'icsContents' => 'ICS-inhoud',
      'icsEventData' => 'ICS-gebeurtenisgegevens',
      'icsEventUid' => 'ICS-gebeurtenis UID',
      'createdEvent' => 'Gecreëerd evenement',
      'event' => 'Evenement',
      'icsEventDateStart' => 'ICS-gebeurtenis Startdatum',
      'groupFolder' => 'Groepsmap',
      'groupStatusFolder' => 'Groeps Status map',
      'sendAt' => 'Verzenden naar',
      'tasks' => 'Taken'
    ],
    'links' => [
      'replied' => 'Beantwoord',
      'replies' => 'Antwoorden',
      'inboundEmails' => 'Groepsaccounts',
      'emailAccounts' => 'Persoonlijke accounts',
      'assignedUsers' => 'Toegewezen gebruikers',
      'sentBy' => 'Verzonden door',
      'attachments' => 'Bijlagen',
      'fromEmailAddress' => 'Van e-mailadres',
      'toEmailAddresses' => 'Aan e-mailadressen',
      'ccEmailAddresses' => 'CC e-mailadressen',
      'bccEmailAddresses' => 'BCC e-mailadressen',
      'replyToEmailAddresses' => 'Antwoord aan e-mailadressen',
      'createdEvent' => 'Gecreëerd evenement',
      'groupFolder' => 'Groepsmap'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Concept',
        'Sending' => 'Verzenden',
        'Sent' => 'Verzonden',
        'Archived' => 'Geïmporteerd',
        'Received' => 'Ontvangen',
        'Failed' => 'Mislukt'
      ],
      'groupStatusFolder' => [
        'Archive' => 'Archief',
        'Trash' => 'Prullenbak'
      ]
    ],
    'labels' => [
      'Create Email' => 'Archiveer e-mail',
      'Archive Email' => 'Archiveer e-mail',
      'Import EML' => 'Import EML',
      'Compose' => 'Maak',
      'Reply' => 'Antwoord',
      'Reply to All' => 'Antwoord allen',
      'Forward' => 'Doorsturen',
      'Insert Field' => 'Veld invoegen',
      'Original message' => 'Origineel bericht',
      'Forwarded message' => 'Doorgestuurd bericht',
      'Email Accounts' => 'Persoonlijk e-mailaccount',
      'Inbound Emails' => 'Groep e-mailaccounts',
      'Email Templates' => 'E-mail sjablonen',
      'Send Test Email' => 'Stuur een test e-mail',
      'Send' => 'Versturen',
      'Email Address' => 'E-mailadres',
      'Mark Read' => 'Markeer lezen',
      'Sending...' => 'Verzenden...',
      'Save Draft' => 'Concept opslaan',
      'Mark all as read' => 'Markeer alle als gelezen',
      'Show Plain Text' => 'Toon platte tekst',
      'Mark as Important' => 'Markeer als belangrijk',
      'Unmark Importance' => 'Verwijder markering',
      'Move to Trash' => 'Verplaats naar prullenbak',
      'Retrieve from Trash' => 'Herstel uit prullenbak',
      'Move to Folder' => 'Verplaats naar map',
      'Moved to Archive' => 'Verplaatst naar Archief',
      'No Records Moved' => 'Geen records verplaatst',
      'Filters' => 'Filters',
      'Folders' => 'Mappen',
      'Group Folders' => 'Groepsmappen',
      'No Subject' => 'Geen onderwerp',
      'View Users' => 'Gebruikers bekijken',
      'Event' => 'Evenement',
      'View Attachments' => 'Bijlagen bekijken',
      'Moved to Trash' => 'Verplaatst naar Prullenbak',
      'Retrieved from Trash' => 'Opgehaald uit Prullenbak',
      'Schedule Send' => 'Plan verzenden',
      'Create Lead' => 'Creëer Lead',
      'Create Contact' => 'Creëer Contact',
      'Add to Contact' => 'Toevoegen aan contact',
      'Add to Lead' => 'Toevoegen aan lead',
      'Create Task' => 'Creëer Taak',
      'Create Case' => 'Creëer Ticket'
    ],
    'strings' => [
      'sendingFailed' => 'E-mail verzenden mislukt',
      'group' => 'Groep'
    ],
    'messages' => [
      'confirmSend' => 'De e-mail verzenden?',
      'couldNotSentScheduledEmail' => 'Kan geplande [e-mail]({link}) niet verzenden',
      'notEditAccess' => 'Geen bewerkingstoegang tot e-mail.',
      'groupFolderNoAccess' => 'Geen toegang tot groepsmap.',
      'groupMoveOutNoEditAccess' => 'Kan niet uit groepsmap verplaatsen. Geen bewerkingstoegang tot e-mail.',
      'groupMoveToNoEditAccess' => 'Kan niet naar groepsmap verplaatsen. Geen bewerkingstoegang tot e-mail.',
      'groupMoveToTrashNoEditAccess' => 'Kan e-mail niet verplaatsen van groepsmap naar prullenbak. Geen bewerkingstoegang tot e-mail',
      'groupMoveToArchiveNoEditAccess' => 'Kan niet verplaatsen van groepsmap naar Archief. Geen bewerkingstoegang tot e-mail.',
      'alreadyImported' => 'De [email]({link}) bestaat al in het systeem.',
      'invalidCredentials' => 'Ongeldige gegevens.',
      'unknownError' => 'Onbekende fout.',
      'recipientAddressRejected' => 'Adres ontvanger geweigerd.',
      'noSmtpSetup' => 'SMTP is niet geconfigureerd: {link}',
      'testEmailSent' => 'Test e-mail is verzonden',
      'emailSent' => 'E-mail is verzonden',
      'savedAsDraft' => 'Opslaan als concept',
      'sendConfirm' => 'De e-mail verzenden?',
      'removeSelectedRecordsConfirmation' => 'Weet u zeker dat u geselecteerde e-mails wilt verwijderen?

Ze zullen ook voor andere gebruikers worden verwijderd.',
      'removeRecordConfirmation' => 'Weet u zeker dat u de e-mail wilt verwijderen?

Hij zal ook voor andere gebruikers worden verwijderd.',
      'confirmInsertTemplate' => 'Het e-mail opmaak gaat verloren. Weet je zeker dat je de sjabloon wilt invoegen?'
    ],
    'presetFilters' => [
      'sent' => 'Verzend',
      'archived' => 'Geïmporteerd',
      'inbox' => 'Inbox',
      'drafts' => 'Concepten',
      'trash' => 'Prullenbak',
      'archive' => 'Archief',
      'important' => 'Belangrijk'
    ],
    'actions' => [
      'moveToArchive' => 'Archief'
    ],
    'massActions' => [
      'markAsRead' => 'Markeer als gelezen',
      'markAsNotRead' => 'Markeer als niet gelezen',
      'markAsImportant' => 'Markeer als belangrijk',
      'markAsNotImportant' => 'Verwijder markering',
      'moveToTrash' => 'Verplaats naar de prullenbak',
      'moveToFolder' => 'Verplaats naar map',
      'moveToArchive' => 'Archief',
      'retrieveFromTrash' => 'Herstel uit prullenbak'
    ],
    'otherFields' => [
      'file' => 'Bestand'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Poort',
      'monitoredFolders' => 'Gecontroleerde mappen',
      'security' => 'Beveiliging',
      'fetchSince' => 'Opgehaald sinds',
      'emailAddress' => 'E-mailadres',
      'sentFolder' => 'Verzonden map',
      'storeSentEmails' => 'Opslaan verzonden E-mails',
      'keepFetchedEmailsUnread' => 'Laat opgehaalde E-mails als ongelezen staan',
      'emailFolder' => 'Zet in map',
      'connectedAt' => 'Verbonden op',
      'useImap' => 'Ophalen van e-mails',
      'useSmtp' => 'Gebruik SMTP',
      'smtpHost' => 'SMTP host',
      'smtpPort' => 'SMTP poort',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP beveiliging',
      'smtpAuthMechanism' => 'SMTP Auth Mechanisme',
      'smtpUsername' => 'SMTP gebruikersnaam',
      'smtpPassword' => 'SMTP wachtwoord'
    ],
    'links' => [
      'filters' => 'Filters',
      'emails' => 'E-mails'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actief',
        'Inactive' => 'Inactief'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'Plat',
        'login' => 'Login',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Creëer E-mail Account',
      'IMAP' => 'IMAP',
      'Main' => 'Hoofd',
      'Test Connection' => 'Test verbinding',
      'Send Test Email' => 'Verzend test e-mail',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Actief'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
      'connectionIsOk' => 'Verbinding is Ok',
      'imapNotConnected' => 'Kan geen verbinding maken met [IMAP-account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'De mogelijkheid om e-mails te verzenden.',
      'emailAddress' => 'Het gebruikersrecord (toegewezen gebruiker) moet hetzelfde e-mailadres hebben om dit e-mailaccount te kunnen gebruiken voor verzending.',
      'monitoredFolders' => 'Meerdere mappen moeten gescheiden worden door een komma.

U kunt een \'Verzonden\' map toevoegen om e-mails te synchroniseren die zijn verzonden vanuit een externe e-mail cliënt.',
      'storeSentEmails' => 'Verzonden E-mails worden opgeslagen op de IMAP server. E-mailadres veld moet overeenkomen met het E-mailadres waarvan verzonden wordt.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primair',
      'Opted Out' => 'Afgemeld',
      'Invalid' => 'Ongeldig'
    ],
    'fields' => [
      'optOut' => 'Afgemeld',
      'invalid' => 'Ongeldig',
      'lower' => 'Lower-case Name'
    ],
    'presetFilters' => [
      'orphan' => 'Wees'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'Van',
      'to' => 'Naar',
      'subject' => 'Onderwerp',
      'bodyContains' => 'Bericht bevat',
      'bodyContainsAll' => 'Inhoud bevat alles',
      'action' => 'Actie',
      'isGlobal' => 'Is globaal',
      'emailFolder' => 'Map',
      'groupEmailFolder' => 'Groep e-mail map',
      'markAsRead' => 'Markeer als gelezen',
      'skipNotification' => 'Melding overslaan'
    ],
    'links' => [
      'emailFolder' => 'Map',
      'groupEmailFolder' => 'Groep e-mail map'
    ],
    'labels' => [
      'Create EmailFilter' => 'Creëer E-mail Filter',
      'Emails' => 'E-mails'
    ],
    'options' => [
      'action' => [
        'None' => 'Geen',
        'Skip' => 'Negeren',
        'Move to Folder' => 'Zet in map',
        'Move to Group Folder' => 'Zet in de groepsmap'
      ]
    ],
    'tooltips' => [
      'name' => 'Geef het filter een beschrijvende naam.',
      'subject' => 'Gebruik een wildcard *: 

 * `tekst*` - begint met tekst,
 * `*tekst*` - bevat tekst,
 * `*tekst` - eindigt met tekst.',
      'bodyContains' => 'De inhoud van de e-mail bevat een van de opgegeven woorden of zinnen.',
      'bodyContainsAll' => 'De inhoud van een e-mail bevat alle opgegeven woorden of zinsdelen.',
      'from' => 'E-mails worden van het opgegeven adres gestuurd. Leeg laten indien niet nodig. Je kan een wildcard * gebruiken.',
      'to' => 'E-mails worden naar het opgegeven adres gestuurd. Leeg laten indien niet nodig. Je kan een wildcard * gebruiken.',
      'isGlobal' => 'Past dit filter toe op alle e-mails die binnenkomen op het systeem.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Meldingen overslaan'
    ],
    'labels' => [
      'Create EmailFolder' => 'Creëer Map',
      'Manage Folders' => 'Beheer mappen',
      'Emails' => 'E-mails'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'isHtml' => 'HTML',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'oneOff' => 'Eenmalig',
      'category' => 'Categorie',
      'insertField' => 'Positiehouders'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Creëer E-mail Template',
      'Info' => 'Info',
      'Available placeholders' => 'Beschikbare aanduidingen'
    ],
    'messages' => [
      'infoText' => 'Beschikbare plaatshouders:

{optOutUrl} &#8211; URL voor een afmeldlink;

{optOutLink} &#8211; een afmeldlink.'
    ],
    'tooltips' => [
      'oneOff' => 'Controleer of u deze sjabloon maar één keer gaat gebruiken. Bijv. voor verzamel e-mail.'
    ],
    'presetFilters' => [
      'actual' => 'Actueel'
    ],
    'placeholderTexts' => [
      'today' => 'Datum van vandaag',
      'now' => 'Huidige datum en tijd',
      'currentYear' => 'Huidig jaar',
      'optOutUrl' => 'URL voor een afmeldlink',
      'optOutLink' => 'een afmeldlink'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Creëer Categorie',
      'Manage Categories' => 'Beheer categorieën',
      'EmailTemplates' => 'E-mail sjablonen'
    ],
    'fields' => [
      'order' => 'Sortering',
      'childList' => 'Sublijst'
    ],
    'links' => [
      'emailTemplates' => 'E-mail sjablonen'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Velden',
      'Relationships' => 'Relaties',
      'Layouts' => 'Lay-outs',
      'Schedule' => 'Planning',
      'Log' => 'Log',
      'Formula' => 'Formule',
      'Parameters' => 'Parameters'
    ],
    'fields' => [
      'name' => 'Naam',
      'type' => 'Type',
      'labelSingular' => 'Label enkelvoud',
      'labelPlural' => 'Label meervoud',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Link Type',
      'entity' => 'Entiteit',
      'entityForeign' => 'Externe entiteit',
      'linkForeign' => 'Externe link',
      'link' => 'Link',
      'labelForeign' => 'Extern label',
      'sortBy' => 'Standaard sortering (veld)',
      'sortDirection' => 'Standaard sortering (richting)',
      'relationName' => 'Middelste tabelnaam',
      'linkMultipleField' => 'Link meerdere velden',
      'linkMultipleFieldForeign' => 'Externe link meervoudig veld',
      'disabled' => 'Uitgeschakeld',
      'textFilterFields' => 'Tekst filter velden',
      'audited' => 'Gecontroleerd',
      'auditedForeign' => 'Extern gecontroleerd',
      'statusField' => 'Statusveld',
      'beforeSaveCustomScript' => 'Voordat u aangepast script opslaat',
      'beforeSaveApiScript' => 'API voor opslaan script',
      'color' => 'Kleur',
      'kanbanViewMode' => 'Kanban-weergave',
      'kanbanStatusIgnoreList' => 'Genegeerde groepen in Kanban-weergave',
      'iconClass' => 'Icoon',
      'countDisabled' => 'De recordtelling uitschakelen',
      'fullTextSearch' => 'Zoek volledige tekst',
      'parentEntityTypeList' => 'Bovenliggende entiteit type',
      'foreignLinkEntityTypeList' => 'Externe links',
      'optimisticConcurrencyControl' => 'Optimistische gelijktijdigheidscontrole',
      'preserveAuditLog' => 'Auditlogboek bewaren',
      'updateDuplicateCheck' => 'Duplicaatcontrole bij update',
      'duplicateCheckFieldList' => 'Duplicaat controlevelden',
      'stars' => 'Sterren',
      'layout' => 'Lay-out',
      'selectFilter' => 'Select filter',
      'author' => 'Auteur',
      'module' => 'Module',
      'version' => 'Versie',
      'primaryFilters' => 'Primaire filters',
      'assignedUsers' => 'Meerdere toegewezen gebruikers',
      'collaborators' => 'Medewerkers',
      'aclContactLink' => 'ACL contact link',
      'aclAccountLink' => 'ACL Account Link',
      'activityStatusList' => 'Activiteit statussen',
      'historyStatusList' => 'Geschiedenis statussens',
      'completedStatusList' => 'Voltooide statussen',
      'canceledStatusList' => 'Geannuleerde statussen'
    ],
    'options' => [
      'type' => [
        '' => 'Geen',
        'Base' => 'Basis',
        'Person' => 'Persoon',
        'CategoryTree' => 'Categorie structuur',
        'Event' => 'Actie',
        'BasePlus' => 'Basis plus',
        'Company' => 'Bedrijf'
      ],
      'linkType' => [
        'manyToMany' => 'Meer-tot-Meer',
        'oneToMany' => 'Eén-op-Meer',
        'manyToOne' => 'Meer-op-één',
        'oneToOneRight' => 'Eén op één rechts',
        'oneToOneLeft' => 'Eén op één links',
        'parentToChildren' => 'Bovenliggend-tot-Onderliggend',
        'childrenToParent' => 'Onderliggend-tot-Bovenliggend'
      ],
      'sortDirection' => [
        'asc' => 'Oplopend',
        'desc' => 'Aflopend'
      ],
      'module' => [
        'Custom' => 'Aangepast'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'Een URL-fragment voor de *{name}* filter wordt gekopieerd naar het klembord. Je kunt het toevoegen aan de navigatiebalk.',
      'confirmRemoveLink' => 'Weet je zeker dat je de *{link}* relatie wilt verwijderen?',
      'nameIsAlreadyUsed' => 'Naam \'{name}\' wordt al gebruikt.',
      'nameIsNotAllowed' => 'Naam \'{name}\' is niet toegestaan.',
      'nameIsTooLong' => 'Naam is te lang.',
      'confirmRemove' => 'Weet u zeker dat u het entiteittype uit het systeem wilt verwijderen?',
      'entityCreated' => 'Entiteit is gecreëerd',
      'linkAlreadyExists' => 'Link naam conflict.',
      'linkConflict' => 'Naam conflict : link of veld met dezelfde naam bestaat al.',
      'beforeSaveCustomScript' => 'Een script dat elke keer wordt aangeroepen voordat een entiteit wordt opgeslagen. Te gebruiken voor het instellen van berekende velden.',
      'beforeSaveApiScript' => 'Een script dat wordt aangeroepen bij aanmaken en update API requests voordat een entiteit wordt opgeslagen. Te gebruiken voor aangepaste validatie en duplicaat controle.'
    ],
    'tooltips' => [
      'aclContactLink' => 'De link met Contact om te gebruiken bij het toepassen van toegangscontrole voor portaalgebruikers.',
      'aclAccountLink' => 'De link met Account om te gebruiken bij het toepassen van toegangscontrole voor portaalgebruikers.',
      'collaborators' => 'De mogelijkheid om records te delen met specifieke gebruikers.',
      'assignedUsers' => 'De mogelijkheid om meerdere gebruikers aan een record toe te wijzen.

Merk op dat na het inschakelen van de parameter, bestaande toegewezen gebruikers niet worden overgezet naar het nieuwe veld *Toegewezen gebruikers*.',
      'duplicateCheckFieldList' => 'Welke velden te controleren bij het controleren op duplicaten.',
      'updateDuplicateCheck' => 'Controleren op duplicaten bij het bijwerken van een record.',
      'optimisticConcurrencyControl' => 'Voorkomt schrijfconflicten.',
      'preserveAuditLog' => 'Schakelt het opschonen van het auditlogboek uit. Deze parameter is alleen van toepassing als Stream is uitgeschakeld. Als Stream is ingeschakeld, worden audit log records niet verwijderd.',
      'stars' => 'De optie om records te voorzien van sterren. Gebruikers kunnen sterren gebruiken om een bladwijzer voor records te maken.',
      'statusField' => 'Updates van dit veld zijn gelogd in stream.',
      'textFilterFields' => 'Velden die worden gebruikt door tekst zoeken.',
      'stream' => 'Of de entiteit de Stream heeft.',
      'disabled' => 'Controleer of u deze entiteit niet nodig hebt in uw systeem.',
      'linkAudited' => 'Het maken van gerelateerde records en het linken met bestaande records worden vastgelegd in Stream.',
      'linkMultipleField' => 'Link Multiple field biedt een handige manier om relaties te bewerken. Gebruik het niet als u een groot aantal gerelateerde records kunt hebben.',
      'linkSelectFilter' => 'Een primair filter dat standaard wordt toegepast bij het selecteren van een record.',
      'entityType' => 'Basis plus - heeft panelen Activiteiten, Geschiedenis en Taken.

Evenement - beschikbaar in het paneel Agenda en Activiteiten.',
      'countDisabled' => 'Het totale aantal wordt niet weergegeven in de lijstweergave. Kan de laadtijd verkorten wanneer de DB-tabel groot is.',
      'fullTextSearch' => 'Reconstrueren is vereist.',
      'linkParamReadOnly' => 'Een alleen-lezen link kan niet worden bewerkt via de *link* en *unlink* API-verzoeken. Het zal niet mogelijk zijn om records te relateren en te unrelateren via het relatiepaneel. Het is nog steeds mogelijk om alleen-lezen links te bewerken via link en link-multiple velden.',
      'activityStatusList' => 'Statuswaarden die bepalen dat een activiteitrecord moet worden weergegeven in het Activiteitenpaneel en als actueel moet worden beschouwd.',
      'historyStatusList' => 'Statuswaarden die bepalen of een activiteit moet worden weergegeven in het Geschiedenis-paneel.',
      'completedStatusList' => 'Statuswaarden die aangeven dat een activiteit is voltooid.',
      'canceledStatusList' => 'Statuswaarden die aangeven dat een activiteit is geannuleerd en niet in aanmerking wordt genomen in vrij/bezet-bereiken.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exporteer alle velden',
      'fieldList' => 'Lijst met velden',
      'format' => 'Formaat',
      'status' => 'Status',
      'xlsxLite' => 'Lite',
      'xlsxRecordLinks' => 'Record links',
      'xlsxTitle' => 'Titel'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'In behandeling',
        'Running' => 'Actief',
        'Success' => 'Succesvol',
        'Failed' => 'Mislukt'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Verbruikt veel minder geheugen. Aanbevolen indien een groot aantal records wordt geëxporteerd.',
      'xlsxTitle' => 'Print een titel en de huidige datum in de kopregel.'
    ],
    'messages' => [
      'exportProcessed' => 'Export is verwerkt. Download het [file]({url}).',
      'infoText' => 'De export wordt in idle door cron verwerkt. Het kan enige tijd duren voordat het klaar is. Het sluiten van dit modale dialoogvenster heeft geen invloed op het uitvoeringsproces.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Naam',
      'version' => 'Versie',
      'description' => 'Beschrijving',
      'isInstalled' => 'Geïnstalleerd',
      'checkVersionUrl' => 'Een URL voor het controleren van nieuwe versies'
    ],
    'labels' => [
      'Uninstall' => 'Deinstalleren',
      'Install' => 'Installeren'
    ],
    'messages' => [
      'uninstalled' => 'Extensie {name} is gedeïnstalleerd',
      'fileExceedsMaxUploadSize' => 'Het bestands overschrijdt de maximale upload {maxSize}. Overweeg om `post_max_size` te verhogen of installeer de via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Verbinden',
      'Disconnect' => 'Ontkoppel',
      'Disconnected' => 'Ontkoppeld',
      'Connected' => 'Verbonden'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'Extern account voor integratie \'{integration}\' is uitgeschakeld omdat er geen verbinding kan worden gemaakt.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Dynamische logica',
      'Name' => 'Naam',
      'Label' => 'Label',
      'Type' => 'Type',
      'View Details' => 'View Details'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Geen',
        'javascript: return this.dateTime.getNow(1);' => 'Nu',
        'javascript: return this.dateTime.getNow(5);' => 'Nu (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Nu (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Nu (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 uur',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 dag',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 dagen',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 dagen',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 dagen',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 dagen',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 dagen',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 week'
      ],
      'dateDefault' => [
        '' => 'Geen',
        'javascript: return this.dateTime.getToday();' => 'Vandaag',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 dag',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 dagen',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weken',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weken',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 maand',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 maanden',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+ 1 jaar'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Verboden',
        'internal' => 'Intern',
        'onlyAdmin' => 'Alleen beheerders',
        'readOnly' => 'Alleen lezen',
        'nonAdminReadOnly' => 'Niet-beheerders, alleen-lezen'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Hergebruik opties van een ander veld.',
      'currencyDecimal' => 'Gebruik het Decimale DB type. In de app worden waarden weergegeven als strings. Vink deze parameter aan als precisie vereist is.',
      'cutHeight' => 'Een tekst die hoger is dan een bepaalde waarde wordt afgekapt met een "toon meer" knop.',
      'urlStrip' => 'Maximum aantal items dat mag worden geselecteerd.',
      'audited' => 'Updates zullen worden gelogd in stream.',
      'required' => 'Veld is verplicht. Mag niet leeg worden gelaten.',
      'default' => 'De waarde wordt standaard ingesteld bij het maken.',
      'min' => 'Minimale acceptabele waarde.',
      'max' => 'Maximale acceptabele waarde.',
      'seeMoreDisabled' => 'Als dit niet wordt gecontroleerd, worden lange teksten ingekort.',
      'lengthOfCut' => 'Hoe lang de tekst kan zijn voordat deze wordt afgekapt.',
      'maxLength' => 'Maximaal toegestane lengte van de tekst.',
      'before' => 'De datumwaarde moet vóór de datumwaarde van het opgegeven veld liggen.',
      'after' => 'De datumwaarde moet na de datumwaarde van het opgegeven veld liggen.',
      'readOnly' => 'Veldwaarde kan niet door de gebruiker worden opgegeven. Maar kan worden berekend door formule.',
      'readOnlyAfterCreate' => 'De veldwaarde kan worden opgegeven bij het maken van een nieuw record. Daarna wordt het veld alleen-lezen. Het kan nog steeds worden berekend met een formule.',
      'preview' => 'Toon de voorbeeldknop. Van toepassing als Markdown is ingeschakeld.',
      'fileAccept' => 'Welke bestandstypen te accepteren. Het is mogelijk om aangepaste items toe te voegen.',
      'barcodeLastChar' => 'Voor EAN-13 type.',
      'maxFileSize' => 'Indien leeg of 0 dan geen limiet.',
      'conversionDisabled' => 'De valutaconversie actie zal niet worden toegepast op dit veld.',
      'pattern' => 'Een reguliere expressie om een veldwaarde aan te toetsen. Definieer een uitdrukking of selecteer een vooraf gedefinieerde.',
      'options' => 'Een lijst van mogelijke waarden en hun labels.',
      'optionsArray' => 'Een lijst met mogelijke waarden en hun labels. Als het veld leeg is, kunnen er aangepaste waarden worden ingevoerd.',
      'maxCount' => 'Maximum aantal items dat mag worden geselecteerd.',
      'displayAsList' => 'Elk item op een nieuwe regel.',
      'optionsVarchar' => 'Een lijst van autocomplete waarden.',
      'linkReadOnly' => 'De veldwaarde kan niet worden opgegeven door de gebruiker. Maar kan wel worden berekend met een formule.

Het schakelt ook de mogelijkheid uit om een gerelateerd record te maken vanuit relatiepanelen.',
      'relateOnImport' => 'Als je importeert met dit veld, wordt automatisch een record gekoppeld aan een overeenkomend buitenlands record. Gebruik deze functionaliteit alleen als het vreemde veld als uniek wordt beschouwd.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Straat',
        'city' => 'Plaats',
        'state' => 'Staat',
        'country' => 'Land',
        'postalCode' => 'Postcode',
        'map' => 'Kaart'
      ],
      'personName' => [
        'salutation' => 'Begroeting',
        'first' => 'Eerste',
        'middle' => 'Tussenvoegsel',
        'last' => 'Laatste'
      ],
      'currency' => [
        'converted' => '(Geconverteerd)',
        'currency' => '(Valuta)'
      ],
      'datetimeOptional' => [
        'date' => 'Datum'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'Een tekst van één regel.',
      'enum' => 'Selectbox, kan slechts één waarde worden geselecteerd.',
      'text' => 'Een meerregelige tekst met markdown-ondersteuning.',
      'date' => 'Datum zonder tijd.',
      'datetime' => 'Datum en tijd',
      'currency' => 'Een valutawaarde. Een variabel getal met een valuta code.',
      'int' => 'Een heel getal.',
      'float' => 'Een getal met een decimaal deel.',
      'bool' => 'Een selectievakje. Twee mogelijke waarden: waar en onwaar.',
      'multiEnum' => 'Een lijst van waarden, meerdere waarden kunnen worden geselecteerd. De lijst is geordend.',
      'checklist' => 'Een lijst met checkboxen.',
      'array' => 'Een lijst van waarden, vergelijkbaar met Multi-Enum veld.',
      'address' => 'Een adres met straat, stad, staat, postcode en land.',
      'url' => 'Voor het opslaan van links.',
      'urlMultiple' => 'Meerdere links.',
      'wysiwyg' => 'Een tekst met HTML-ondersteuning.',
      'file' => 'Voor het uploaden van bestanden.',
      'image' => 'Voor het uploaden van beelden.',
      'attachmentMultiple' => 'Maakt het mogelijk om meerdere bestanden te uploaden.',
      'number' => 'Een automatisch ophogend getal van het type string met een mogelijk voorvoegsel en een specifieke lengte.',
      'autoincrement' => 'Een gegenereerd, alleen-lezen, automatisch ophogend geheel getal.',
      'barcode' => 'Een streepjescode. Kan worden afgedrukt naar PDF.',
      'email' => 'Een reeks e-mailadressen met hun parameters: Niet-aangemeld, Ongeldig, Primair.',
      'phone' => 'Een reeks telefoonnummers met hun parameters: Type, Niet-aangemeld, Ongeldig, Primair.',
      'foreign' => 'Een veld van een verwante record. Alleen-lezen.',
      'link' => 'Een record gerelateerd via Behoort-tot (meer-tot-één of één-op-één) relatie.',
      'linkParent' => 'Een record gerelateerd door Behoort-Toe-Ouder relatie. Kan van verschillende soorten entiteiten zijn.',
      'linkMultiple' => 'Een reeks records die via een Has-Many (veel-op-veel of één-op-veel) relatie met elkaar zijn verbonden. Niet alle relaties hebben hun link-multiple velden. Alleen die waar de parameter(s) Link-Multiple is ingeschakeld.'
    ],
    'messages' => [
      'fieldCreatedAddToLayouts' => 'Het veld is gemaakt. Nu kun je het toevoegen aan [lay-outs]({link})',
      'confirmRemove' => 'Weet je zeker dat je het veld *{field}* wilt verwijderen?

Het verwijderen van velden verwijdert geen gegevens uit de database. Gegevens uit de database worden verwijderd als je een harde rebuild uitvoert.',
      'fieldNameIsNotAllowed' => 'Veldnaam \'{field}\' is niet toegestaan.',
      'fieldAlreadyExists' => 'Veld \'{field}\' bestaat al in \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Link met de naam \'{field}\' bestaat al in \'{entityType}\'.',
      'namingFieldLinkConflict' => 'Naam \'{field}\' conflicteert met link.'
    ],
    'otherFields' => [
      'attributes' => 'Attributes'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Syntaxis controleren',
      'Run' => 'Start'
    ],
    'fields' => [
      'target' => 'Doel',
      'targetType' => 'Doel type',
      'script' => 'Script',
      'output' => 'Uitgang',
      'error' => 'Fout'
    ],
    'messages' => [
      'runSuccess' => 'Succesvol uitgevoerd.',
      'runError' => 'Fout.',
      'checkSyntaxSuccess' => 'Syntaxis is correct.',
      'checkSyntaxError' => 'Syntaxisfout.',
      'emptyScript' => 'Script is leeg.'
    ],
    'tooltips' => [
      'output' => 'Druk de waarden af met de functie `output#printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Opmerking',
      'Email' => 'E-mail',
      'User' => 'Gebruiker',
      'Team' => 'Groep',
      'Role' => 'Functie',
      'EmailTemplate' => 'E-mail Template',
      'EmailTemplateCategory' => 'E-mailsjablooncategorieën',
      'EmailAccount' => 'Persoonlijk e-mailaccount',
      'EmailAccountScope' => 'Persoonlijk e-mailaccount',
      'OutboundEmail' => 'Uitgaande E-mail',
      'ScheduledJob' => 'Geplande Opdracht',
      'ExternalAccount' => 'Extern Account',
      'Extension' => 'Extensie',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Groep e-mailaccount',
      'Stream' => 'Stream',
      'Import' => 'Importeren',
      'ImportError' => 'Importfout',
      'Template' => 'Template',
      'Job' => 'Job',
      'EmailFilter' => 'E-mail filter',
      'Portal' => 'Portaal',
      'PortalRole' => 'Portaal rol',
      'Attachment' => 'Bijlage',
      'EmailFolder' => 'E-mail map',
      'GroupEmailFolder' => 'Groep e-mail map',
      'PortalUser' => 'Portaalgebruiker',
      'ApiUser' => 'API gebruiker',
      'ScheduledJobLogRecord' => 'Geplande taak logboek record',
      'PasswordChangeRequest' => 'Wachtwoord wijzigingsverzoek',
      'ActionHistoryRecord' => 'Actie geschiedenis record',
      'AuthToken' => 'Auth sleutel',
      'UniqueId' => 'Unieke ID',
      'LastViewed' => 'Laatst bekeken',
      'Settings' => 'Instellingen',
      'FieldManager' => 'Field Manager',
      'Integration' => 'Integratie',
      'LayoutManager' => 'Lay-out Manager',
      'EntityManager' => 'Entiteit beheerder',
      'Export' => 'Exporteer',
      'DynamicLogic' => 'Dynamische logica',
      'DashletOptions' => 'Dashlet opties',
      'Admin' => 'Beheerder',
      'Global' => 'Globaal',
      'Preferences' => 'Voorkeuren',
      'EmailAddress' => 'E-mailadres',
      'PhoneNumber' => 'Telefoonnummer',
      'AppLogRecord' => 'App Log regel',
      'AuthLogRecord' => 'Auth log record',
      'AuthFailLogRecord' => 'Mislukte Auth log record',
      'LeadCapture' => 'Leads verwerven startpunt',
      'LeadCaptureLogRecord' => 'Leads verwerven log record',
      'ArrayValue' => 'Reeks waarde',
      'DashboardTemplate' => 'Dashboard sjabloon',
      'Currency' => 'Valuta',
      'LayoutSet' => 'Lay-out set',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Webhook wachtrij item',
      'WebhookEventQueueItem' => 'Webhook Event Queue Item',
      'Mass Action' => 'Massa-actie',
      'WorkingTimeCalendar' => 'Werktijd Kalender',
      'WorkingTimeRange' => 'Werktijd uitzondering',
      'AuthenticationProvider' => 'Authenticatie aanbieder',
      'GlobalStream' => 'Globale stroming',
      'AddressCountry' => 'Adres Land',
      'AppSecret' => 'App Geheim',
      'OAuthProvider' => 'OAuth Provider',
      'OAuthAccount' => 'OAuth Account',
      'Account' => 'Relatie',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Doel',
      'Opportunity' => 'Kans',
      'Meeting' => 'Vergadering',
      'Calendar' => 'Kalender',
      'Call' => 'Gesprek',
      'Task' => 'Taak',
      'Case' => 'Ticket',
      'Document' => 'Document',
      'DocumentFolder' => 'Document map',
      'Campaign' => 'Campagne',
      'TargetList' => 'Target List',
      'MassEmail' => 'Verzamel e-mail',
      'EmailQueueItem' => 'E-mail wachtrij item',
      'CampaignTrackingUrl' => 'Tracking URL',
      'Activities' => 'Activiteiten',
      'KnowledgeBaseArticle' => 'Kennisbank artikel',
      'KnowledgeBaseCategory' => 'Kennisbank categorie',
      'CampaignLogRecord' => 'Campagne log record',
      'TargetListCategory' => 'Target List Category'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Opmerkingen',
      'Email' => 'E-mails',
      'User' => 'Gebruikers',
      'Team' => 'Groepen',
      'Role' => 'Functies',
      'EmailTemplate' => 'E-mail sjablonen',
      'EmailTemplateCategory' => 'E-mailsjablooncategorieën',
      'EmailAccount' => 'Persoonlijk e-mailaccount',
      'EmailAccountScope' => 'Persoonlijk e-mailaccount',
      'OutboundEmail' => 'Uitgaande E-mails',
      'ScheduledJob' => 'Geplande Opdrachten',
      'ExternalAccount' => 'Externe Accounts',
      'Extension' => 'Extensies',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Groep e-mailaccounts',
      'EmailAddress' => 'E-mailadressen',
      'PhoneNumber' => 'Telefoonnummers',
      'Stream' => 'Stream',
      'Import' => 'Importeren',
      'ImportError' => 'Importfouten',
      'Template' => 'Templates',
      'Job' => 'Jobs',
      'EmailFilter' => 'E-mail filter',
      'Portal' => 'Portalen',
      'PortalRole' => 'Portaal functies',
      'Attachment' => 'Bijlagen',
      'EmailFolder' => 'E-mailmappen',
      'GroupEmailFolder' => 'Groep e-mailmappen',
      'PortalUser' => 'Portaalgebruikers',
      'ApiUser' => 'API gebruikers',
      'ScheduledJobLogRecord' => 'Geplande taak logboek records',
      'PasswordChangeRequest' => 'Verzoeken om wachtwoordwijzigingen',
      'ActionHistoryRecord' => 'Actiegeschiedenis',
      'AuthToken' => 'Auth sleutels',
      'UniqueId' => 'Unieke ID\'s',
      'LastViewed' => 'Laatst bekeken',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Auth log',
      'AuthFailLogRecord' => 'Mislukte Auth log',
      'LeadCapture' => 'Leads verwerven',
      'LeadCaptureLogRecord' => 'Leads verwerven log',
      'ArrayValue' => 'Reeks waarden',
      'DashboardTemplate' => 'Dashboard Sjablonen',
      'Currency' => 'Valuta',
      'LayoutSet' => 'Lay-out sets',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Webhook wachtrij items',
      'WebhookEventQueueItem' => 'Webhook Event Queue Items',
      'WorkingTimeCalendar' => 'Werktijd kalenders',
      'WorkingTimeRange' => 'Werktijd uitzonderingen',
      'AuthenticationProvider' => 'Authenticatie aanbieders',
      'GlobalStream' => 'Globale stroming',
      'AddressCountry' => 'Adres Landen',
      'AppSecret' => 'App Geheimen',
      'OAuthProvider' => 'OAuth Providers',
      'OAuthAccount' => 'OAuth Accounts',
      'Account' => 'Relaties',
      'Contact' => 'Contacten',
      'Lead' => 'Leads',
      'Target' => 'Doelen',
      'Opportunity' => 'Kansen',
      'Meeting' => 'Vergaderingen',
      'Calendar' => 'Kalender',
      'Call' => 'Gesprekken',
      'Task' => 'Taken',
      'Case' => 'Tickets',
      'Document' => 'Documenten',
      'DocumentFolder' => 'Document mappen',
      'Campaign' => 'Campagnes',
      'TargetList' => 'Doellijsten',
      'MassEmail' => 'Verzamel e-mails',
      'EmailQueueItem' => 'E-mail wachtrij items',
      'CampaignTrackingUrl' => 'Tracking URLs',
      'Activities' => 'Activiteiten',
      'KnowledgeBaseArticle' => 'Kennisbank',
      'KnowledgeBaseCategory' => 'Kennisbank categorieën',
      'CampaignLogRecord' => 'Campagne log record',
      'TargetListCategory' => 'Target List Categories'
    ],
    'labels' => [
      'Previous Page' => 'Vorige pagina',
      'Next Page' => 'Volgende pagina',
      'First Page' => 'Eerste pagina',
      'Last Page' => 'Laatste pagina',
      'Page' => 'Pagina',
      'Sort' => 'Sorteer',
      'Column Resize' => 'Kolom wijzigen',
      'Misc' => 'Overig',
      'General' => 'Algemeen',
      'Merge' => 'Samenvoegen',
      'None' => 'Geen',
      'Home' => 'Home',
      'by' => 'door',
      'Proceed' => 'Ga verder',
      'Saved' => 'Opgeslagen',
      'Error' => 'Fout',
      'Select' => 'Selecteer',
      'Not valid' => 'Ongeldig',
      'Please wait...' => 'Even geduld...',
      'Please wait' => 'Even geduld',
      'Attached' => 'Bijgevoegd',
      'Loading...' => 'Laden...',
      'Uploading...' => 'Uploaden...',
      'Sending...' => 'Verzenden...',
      'Send' => 'Stuur',
      'Merged' => 'Samengevoegd',
      'Removed' => 'Verwijderd',
      'Posted' => 'Geplaatst',
      'Linked' => 'Gekoppeld',
      'Unlinked' => 'Niet gelinkt',
      'Done' => 'Gedaan',
      'Access denied' => 'Toegang geweigerd',
      'Not found' => 'Niet gevonden',
      'Access' => 'Toegang',
      'Timeout' => 'Time-out',
      'No internet' => 'Geen internet',
      'Network error' => 'Network error',
      'Are you sure?' => 'Zeker?',
      'Record has been removed' => 'Record is verwijderd',
      'Wrong username/password' => 'Onjuiste gebruikersnaam/wachtwoord',
      'Post cannot be empty' => 'Veld mag niet leeg zijn',
      'Username can not be empty!' => 'Gebruikersnaam mag niet leeg zijn!',
      'Cache is not enabled' => 'Cache is niet ingeschakeld',
      'Cache has been cleared' => 'Cache is leeg gemaakt',
      'Rebuild has been done' => 'Het reconstrueren is klaar',
      'Return to Application' => 'Terug naar applicatie',
      'Modified' => 'Aangepast',
      'Created' => 'Gemaakt',
      'Create' => 'Creëer',
      'create' => 'creëer',
      'Scheduled' => 'Gepland',
      'Overview' => 'Overzicht',
      'Details' => 'Details',
      'Add Field' => 'Veld toevoegen',
      'Add Dashlet' => 'Dashlet toevoegen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Bewerk Dashboard',
      'Add' => 'Toevoegen',
      'Add Item' => 'Item toevoegen',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Meer',
      'Search' => 'Zoeken',
      'Only My' => 'Alleen mijn',
      'Open' => 'Open',
      'Admin' => 'Beheerder',
      'About' => 'Over',
      'Refresh' => 'Vernieuwen',
      'Remove' => 'Verwijderen',
      'Restore' => 'Herstel',
      'Options' => 'Opties',
      'Username' => 'Gebruikersnaam',
      'Password' => 'Wachtwoord',
      'Login' => 'Login',
      'Log Out' => 'Uitloggen',
      'Log in' => 'Inloggen',
      'Log in as' => 'Log in als',
      'Sign in' => 'Aanmelden',
      'Preferences' => 'Voorkeuren',
      'State' => 'Provincie',
      'Street' => 'Straat',
      'Country' => 'Land',
      'City' => 'Plaats',
      'PostalCode' => 'Postcode',
      'Star' => 'Ster',
      'Unstar' => 'Ontster',
      'Starred' => 'Sterren',
      'Followed' => 'Gevolgd',
      'Follow' => 'Volgen',
      'Followers' => 'Volgers',
      'Clear Local Cache' => 'Lokale Cache Schonen',
      'Actions' => 'Acties',
      'Delete' => 'Verwijder',
      'Update' => 'Update',
      'Save' => 'Opslaan',
      'Edit' => 'Bewerken',
      'View' => 'View',
      'Cancel' => 'Annuleren',
      'Apply' => 'Toepassen',
      'Unlink' => 'Ontkoppel',
      'Mass Update' => 'Massale update',
      'Export' => 'Exporteer',
      'No Data' => 'Geen Data',
      'No Access' => 'Geen toegang',
      'All' => 'Alle',
      'Active' => 'Actief',
      'Inactive' => 'Inactief',
      'Write your comment here' => 'Schrijf hier uw opmerkingen',
      'Post' => 'Post',
      'Stream' => 'Stream',
      'Show more' => 'Toon meer',
      'Dashlet Options' => 'Dashlet opties',
      'Full Form' => 'Volledig Formulier',
      'Insert' => 'Voeg in',
      'Person' => 'Persoon',
      'First Name' => 'Voornaam',
      'Last Name' => 'Achternaam',
      'Middle Name' => 'Tussenvoegsel',
      'Original' => 'Origineel',
      'You' => 'U',
      'you' => 'u',
      'change' => 'wijzigen',
      'Change' => 'Wijzigen',
      'Primary' => 'Primair',
      'Save Filter' => 'Filter opslaan',
      'Remove Filter' => 'Verwijder filter',
      'Ready' => 'Ready',
      'Administration' => 'Administratie',
      'Run Import' => 'Start Importeren',
      'Duplicate' => 'Dupliceer',
      'Notifications' => 'Meldingen',
      'Mark all read' => 'Markeer als gelezen',
      'See more' => 'Bekijk meer',
      'Today' => 'Vandaag',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gisteren',
      'Now' => 'Nu',
      'Submit' => 'Bevestig',
      'Close' => 'Afsluiten',
      'Yes' => 'Ja',
      'No' => 'Nee',
      'Select All Results' => 'Selecteer alle resultaten',
      'Value' => 'Value',
      'Current version' => 'Huidige versie',
      'List View' => 'List View',
      'Tree View' => 'Structuur overzicht',
      'Unlink All' => 'Ontkoppel alle',
      'Total' => 'Total',
      'Print' => 'Print',
      'Print to PDF' => 'Print als PDF',
      'Default' => 'Standaard',
      'Number' => 'Nummer',
      'From' => 'Van',
      'To' => 'Naar',
      'Create Post' => 'Creëer Bericht',
      'Previous Entry' => 'Vorige bijdrage',
      'Next Entry' => 'Volgende bijdrage',
      'View List' => 'Toon lijst',
      'Attach File' => 'Voeg bestand toe',
      'Skip' => 'Overslaan',
      'Attribute' => 'Attribuut',
      'Function' => 'Functie',
      'Self-Assign' => 'Zelf toewijzen',
      'Self-Assigned' => 'Zelf toegewezen',
      'Expand' => 'Uitbreiden',
      'Collapse' => 'Samenvouwen',
      'Expanded' => 'Uitgebreid',
      'Collapsed' => 'Ingestort',
      'Top Level' => 'Topniveau',
      'New notifications' => 'Nieuwe meldingen',
      'Manage Categories' => 'Beheer categorieën',
      'Manage Folders' => 'Beheer mappen',
      'Convert to' => 'Omzetten naar',
      'View Personal Data' => 'Bekijk persoonlijke gegevens',
      'Personal Data' => 'Persoonlijke gegevens',
      'Erase' => 'Wissen',
      'View Followers' => 'Bekijk volgers',
      'Convert Currency' => 'Valuta omrekenen',
      'View on Map' => 'Bekijk op de kaart',
      'Preview' => 'Voorbeeld',
      'Move Over' => 'Verplaats naar',
      'Up' => 'Omhoog',
      'Save & Continue Editing' => 'Opslaan en verder bewerken',
      'Save & New' => 'Opslaan & Nieuw',
      'Field' => 'Veld',
      'Fields' => 'Velden',
      'Resolution' => 'Resolutie',
      'Resolve Conflict' => 'Conflict oplossen',
      'Download' => 'Download',
      'Global Search' => 'Uitgebreid zoeken',
      'Navigation Panel' => 'Toon navigatiepaneel',
      'Copy to Clipboard' => 'Kopiëren naar klembord',
      'Copied to clipboard' => 'Gekopieerd naar klembord',
      'Audit Log' => 'Controlelog',
      'View Audit Log' => 'Bekijk controlelog',
      'View User Access' => 'Toegang gebruiker weergeven',
      'Reacted' => 'Gereageerd',
      'Reaction Removed' => 'Reactie verwijderd',
      'Reactions' => 'Reacties',
      'Schedule' => 'Schema',
      'Log' => 'Log',
      'Scheduler' => 'Planner',
      'Create InboundEmail' => 'Creëer Inkomende E-mail',
      'Activities' => 'Activiteiten',
      'History' => 'Historie',
      'Attendees' => 'Genodigden',
      'Schedule Meeting' => 'Vergadering plannen',
      'Schedule Call' => 'Geplande Oproep',
      'Compose Email' => 'E-mail aanmaken',
      'Log Meeting' => 'Log vergadering',
      'Log Call' => 'Gesprek Vastleggen',
      'Archive Email' => 'Archiveer e-mail',
      'Create Task' => 'Creëer Taak',
      'Tasks' => 'Taken'
    ],
    'messages' => [
      'pleaseWait' => 'Even geduld...',
      'loading' => 'Bezig met laden...',
      'saving' => 'Opslaan...',
      'confirmLeaveOutMessage' => 'Weet u zeker dat u het formulier wilt verlaten?',
      'notModified' => 'U heeft niets gewijzigd',
      'duplicate' => 'Het veld dat u maakt lijkt een duplicaat',
      'dropToAttach' => 'Laat vallen om toe te voegen',
      'pageNumberIsOutOfBound' => 'Paginanummer buiten limiet',
      'fieldUrlExceedsMaxLength' => 'Gecodeerde URL overschrijdt maximale lengte van {maxLength}',
      'fieldNotMatchingPattern' => '{field} komt niet overeen met het patroon `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} bevat niet toegestane tekens',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} mag geen speciale ASCII-tekens bevatten',
      'fieldNotMatchingPattern$latinLetters' => '{field} kan alleen latijnse letters bevatten',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} kan alleen latijnse letters en cijfers bevatten',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} kan alleen Latijnse letters, cijfers en spaties bevatten',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} kan alleen latijnse letters en spaties bevatten',
      'fieldNotMatchingPattern$digits' => '{field} kan alleen cijfers bevatten',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} moet een geldige URL zijn',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} bevat tekens die niet zijn toegestaan in telefoonnummer',
      'fieldInvalid' => '{field} is ongeldig',
      'fieldIsRequired' => '{field} is verplicht',
      'fieldPhoneInvalid' => '{field} is ongeldig',
      'fieldPhoneInvalidCode' => 'Ongeldige landcode',
      'fieldPhoneTooShort' => '{field} is te kort',
      'fieldPhoneTooLong' => '{field} is te lang',
      'fieldPhoneInvalidCharacters' => 'Alleen cijfers, Latijnse letters en tekens `-+_@:#().` zijn toegestaan',
      'fieldPhoneExtensionTooLong' => 'Extensie mag niet langer zijn dan {maxLength}',
      'fieldShouldBeEmail' => '{field} moet een geldig E-mailadres zijn',
      'fieldShouldBeFloat' => '{field} moet een geldige variabel zijn',
      'fieldShouldBeInt' => '{field} moet een geldige integer zijn',
      'fieldShouldBeNumber' => '{field} moet een geldig nummer zijn',
      'fieldShouldBeDate' => '{field} moet een geldige datum zijn',
      'fieldShouldBeDatetime' => '{field} moet een geldige datum/tijd zijn',
      'fieldShouldAfter' => '{field} moet na {otherField} komen',
      'fieldShouldBefore' => '{field} moet voor {otherField} komen',
      'fieldShouldBeBetween' => '{field} moet een waarde hebben tussen {min} en {max}',
      'fieldShouldBeLess' => '{field} mag niet groter zijn dan {value}',
      'fieldShouldBeGreater' => '{field} mag niet kleiner zijn dan {value}',
      'fieldBadPasswordConfirm' => '{field} onjuist bevestigd',
      'fieldMaxFileSizeError' => 'Bestand mag niet groter zijn dan {max} Mb',
      'fieldValueDuplicate' => 'Dubbele waarde',
      'fieldIsUploading' => 'Bezig met uploaden',
      'fieldExceedsMaxCount' => 'Aantal overschrijdt max. toegestaan {maxCount}',
      'barcodeInvalid' => '{field} is ongeldig {type}',
      'arrayItemMaxLength' => 'Item mag niet langer zijn dan {max} tekens',
      'arrayInputNotEmpty' => 'Item is entered but not added',
      'resetPreferencesDone' => 'Voorkeuren zijn naar standaardwaarden teruggezet',
      'confirmation' => 'Zeker?',
      'unlinkAllConfirmation' => 'Weet u zeker dat u alle gerelateerde records wilt ontkoppelen?',
      'resetPreferencesConfirmation' => 'Weet u zeker dat u de voorkeuren naar standaard terug wil zetten?',
      'removeRecordConfirmation' => 'Record verwijderen?',
      'unlinkRecordConfirmation' => 'Relatie ontkoppelen?',
      'removeSelectedRecordsConfirmation' => 'Geselecteerde records verwijderen?',
      'unlinkSelectedRecordsConfirmation' => 'Weet u zeker dat u geselecteerde records wilt ontkoppelen?',
      'massUpdateResult' => '{count} records zijn bijgewerkt',
      'massUpdateResultSingle' => '{count} record is bijgewerkt',
      'recalculateFormulaConfirmation' => 'Weet u zeker dat u de formule voor geselecteerde records wilt herberekenen?',
      'noRecordsUpdated' => 'Er zijn geen records bijgewerkt',
      'massRemoveResult' => '{count} bestanden waren verwijderd',
      'massRemoveResultSingle' => '{count} bestanden zijn verwijderd',
      'noRecordsRemoved' => 'Er werden geen bestanden verwijderd',
      'clickToRefresh' => 'Klik om te vernieuwen',
      'writeYourCommentHere' => 'Schrijf hier uw opmerkingen',
      'writeMessageToUser' => 'Schrijf een bericht naar {user}',
      'writeMessageToSelf' => 'Schrijf een bericht op uw stream',
      'typeAndPressEnter' => 'Schrijf en druk op "Enter"',
      'checkForNewNotifications' => 'Controleer op nieuwe berichten',
      'checkForNewNotes' => 'Controleer stream voor updates',
      'internalPost' => 'Bericht wordt alleen door interne gebruikers gezien',
      'internalPostTitle' => 'Bericht wordt alleen door interne gebruikers gezien',
      'done' => 'Gedaan',
      'notUpdated' => 'Niet bijgewerkt',
      'confirmMassUpdate' => 'Weet je zeker dat je geselecteerde records massaal wilt bijwerken?',
      'confirmMassFollow' => 'Weet u zeker dat u geselecteerde records wilt volgen?',
      'confirmMassUnfollow' => 'Weet u zeker dat u geselecteerde records niet meer wilt volgen?',
      'massFollowResult' => '{count} records worden gevolgd',
      'massUnfollowResult' => '{count} records worden niet gevolgd',
      'massFollowResultSingle' => '{count} record wordt nu gevolgd',
      'massUnfollowResultSingle' => '{count} record wordt nu niet gevolgd',
      'massFollowZeroResult' => 'Er wordt niets gevolgd',
      'massUnfollowZeroResult' => 'Niets ontvolgt',
      'erasePersonalDataConfirmation' => 'De aangevinkte velden worden permanent verwijderd. Weet je het zeker?',
      'maintenanceModeError' => 'De applicatie staat momenteel in onderhoudsmodus.',
      'maintenanceMode' => 'De applicatie staat momenteel in onderhoudsmodus. Alleen beheerders hebben toegang.

De onderhoudsmodus kan worden uitgeschakeld via Beheer → Instellingen.',
      'resolveSaveConflict' => 'Het record is gewijzigd. U moet het conflict oplossen voordat u het record kunt opslaan.',
      'massPrintPdfMaxCountError' => 'Kan niet meer dan {maxCount} records afdrukken.',
      'massActionProcessed' => 'De massa-actie is verwerkt.',
      'validationFailure' => 'Backend validatie fout.

Veld: `{field}`
Validatie: `{type}`',
      'extensionLicenseInvalid' => 'Ongeldige \'{name}\' uitbreidingslicentie.',
      'extensionLicenseExpired' => 'Het \'{name}\' uitbreidingslicentieabonnement is verlopen.',
      'extensionLicenseSoftExpired' => 'Het \'{name}\' uitbreidingslicentieabonnement is verlopen.',
      'confirmAppRefresh' => 'De applicatie is bijgewerkt. Het wordt aanbevolen de pagina te verversen om een goede werking te garanderen.',
      'loggedOutLeaveOut' => 'Uitgelogd. De sessie is inactief. Niet-opgeslagen formuliergegevens kunnen verloren gaan na het vernieuwen van de pagina. Mogelijk moet u een kopie maken.',
      'noAccessToRecord' => 'Operatie vereist `{action}` toegang tot record.',
      'noAccessToForeignRecord' => 'Operatie vereist `{action}` toegang tot vreemd record.',
      'noLinkAccess' => 'Kan geen relatie leggen met {foreignEntityType} record via de link \'{link}\'. Geen toegang.',
      'cannotUnrelateRequiredLink' => 'Kan vereiste link niet ontkoppelen.',
      'cannotRelateNonExisting' => 'Kan geen relatie leggen met niet bestaande {foreignEntityType} record.',
      'cannotRelateForbidden' => 'Kan geen relatie leggen met verboden {foreignEntityType} record. `{action}` toegang vereist.',
      'cannotRelateForbiddenLink' => 'Geen toegang tot link "{link}".',
      'cannotLinkAlreadyLinked' => 'Kan een gekoppeld record niet koppelen.',
      'error404' => 'De door u opgevraagde url kan niet worden verwerkt.',
      'error403' => 'Je hebt geen toegang tot dit gedeelte.',
      'emptyMassUpdate' => 'Geen velden beschikbaar voor massale update.',
      'attemptIntervalFailure' => 'De bewerking is niet toegestaan tijdens een bepaald tijdsinterval. Wacht enige tijd voor de volgende poging.',
      'confirmRestoreFromAudit' => 'De vorige waarden worden ingesteld in een formulier. Daarna kun je het record opslaan om de vorige waarden te herstellen.',
      'starsLimitExceeded' => 'Het aantal sterren is hoger dan de limiet.',
      'select2OrMoreRecords' => 'Selecteer 2 of meer records',
      'selectNotMoreThanNumberRecords' => 'Selecteer niet meer dan {number} records',
      'selectAtLeastOneRecord' => 'Selecteer ten minste één record',
      'duplicateConflict' => 'Er bestaat al een record.',
      'cannotRemoveCategoryWithChildCategory' => 'Kan geen categorie verwijderen die een subcategorie heeft.',
      'cannotRemoveNotEmptyCategory' => 'Kan een niet-lege categorie niet verwijderen.',
      'sameRecordIsAlreadyBeingEdited' => 'The record is already being edited.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Alleen mijn',
      'onlyMyTeam' => 'Mijn groep',
      'followed' => 'Gevolgd',
      'shared' => 'Gedeeld'
    ],
    'presetFilters' => [
      'followed' => 'Gevolgd',
      'all' => 'Alle',
      'starred' => 'Sterren'
    ],
    'massActions' => [
      'delete' => 'Verwijder',
      'remove' => 'Verwijderen',
      'merge' => 'Samenvoegen',
      'update' => 'Update',
      'massUpdate' => 'Massale update',
      'unlink' => 'Ontkoppel',
      'export' => 'Exporteer',
      'follow' => 'Volgen',
      'unfollow' => 'Stop volgen',
      'convertCurrency' => 'Valuta omrekenen',
      'recalculateFormula' => 'Formule herberekenen',
      'printPdf' => 'Print als PDF'
    ],
    'fields' => [
      'name' => 'Naam',
      'firstName' => 'Voornaam',
      'lastName' => 'Achternaam',
      'middleName' => 'Tussenvoegsel',
      'salutationName' => 'Aanhef',
      'assignedUser' => 'Toegewezen gebruiker',
      'assignedUsers' => 'Toegewezen gebruikers',
      'collaborators' => 'Medewerkers',
      'emailAddress' => 'E-mail',
      'emailAddressData' => 'E-mailadresgegevens',
      'emailAddressIsOptedOut' => 'E-mailadres is niet-aangemeld',
      'emailAddressIsInvalid' => 'E-mailadres is ongeldig',
      'assignedUserName' => 'Toegewezen gebruikersnaam',
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'createdAt' => 'Aangemaakt op',
      'modifiedAt' => 'Aangepast op',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
      'streamUpdatedAt' => 'Stream bijgewerkt op',
      'description' => 'Beschrijving',
      'address' => 'Adres',
      'phoneNumber' => 'Telefoon',
      'phoneNumberMobile' => 'Telefoon (Mobile)',
      'phoneNumberHome' => 'Telefoon (Home)',
      'phoneNumberFax' => 'Telefoon (Fax)',
      'phoneNumberOffice' => 'Telefoon (Office)',
      'phoneNumberOther' => 'Telefoon (Overig)',
      'phoneNumberData' => 'Telefoonnummergegevens',
      'phoneNumberIsOptedOut' => 'Telefoonnummer is niet-aangemeld',
      'phoneNumberIsInvalid' => 'Telefoonnummer is ongeldig',
      'order' => 'Sortering',
      'parent' => 'Behorende bij',
      'children' => 'Onderliggend',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Namen',
      'types' => 'Typen',
      'targetListIsOptedOut' => 'Is afgemeld (doellijst)',
      'childList' => 'Sublijst',
      'billingAddressCity' => 'Plaats',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postcode',
      'billingAddressState' => 'Provincie',
      'billingAddressStreet' => 'Straat',
      'billingAddressMap' => 'Kaart',
      'addressCity' => 'Plaats',
      'addressStreet' => 'Straat',
      'addressCountry' => 'Land',
      'addressState' => 'Provincie',
      'addressPostalCode' => 'Postcode',
      'addressMap' => 'Kaart',
      'shippingAddressCity' => 'Plaats (Vestigingsadres)',
      'shippingAddressStreet' => 'Straat (Vestigingsadres)',
      'shippingAddressCountry' => 'Land (Vestigingsadres)',
      'shippingAddressState' => 'Provincie (Vestigingsadres)',
      'shippingAddressPostalCode' => 'Postcode (Vestigingsadres)',
      'shippingAddressMap' => 'Kaart (Vestigingsadres)'
    ],
    'links' => [
      'assignedUser' => 'Toegewezen gebruiker',
      'assignedUsers' => 'Toegewezen gebruikers',
      'collaborators' => 'Medewerkers',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
      'team' => 'Groep',
      'roles' => 'Functies',
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'parent' => 'Behorende bij',
      'children' => 'Onderliggend',
      'contacts' => 'Contacten',
      'opportunities' => 'Kansen',
      'leads' => 'Leads',
      'meetings' => 'Vergaderingen',
      'calls' => 'Gesprekken',
      'tasks' => 'Taken',
      'emails' => 'E-mails',
      'accounts' => 'Relaties',
      'cases' => 'Tickets',
      'documents' => 'Documenten',
      'account' => 'Relatie',
      'opportunity' => 'Kans',
      'contact' => 'Contact'
    ],
    'dashlets' => [
      'Stream' => 'Stream',
      'Emails' => 'Mijn inbox',
      'Iframe' => 'Iframe',
      'Records' => 'Recordlijst',
      'Memo' => 'Memo',
      'Leads' => 'Mijn Leads',
      'Opportunities' => 'Mijn Kansen',
      'Tasks' => 'Mijn taken',
      'Cases' => 'Mijn Tickets',
      'Calendar' => 'Kalender',
      'Calls' => 'Mijn gesprekken',
      'Meetings' => 'Mijn vergaderingen',
      'OpportunitiesByStage' => 'Kansen per fase',
      'OpportunitiesByLeadSource' => 'Kansen per lead bron',
      'SalesByMonth' => 'Verkopen per maand',
      'SalesPipeline' => 'Verkoop mogelijkheden',
      'Activities' => 'Mijn activiteiten'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} is aan jou toegewezen',
      'emailReceived' => 'E-mail ontvangen van {from}',
      'entityRemoved' => '{user} verwijderde {entityType} {entity}',
      'emailInbox' => '{user} voegde e-mail {entiteit} toe aan je inbox',
      'userPostReaction' => '{user} reageerde op je {post}',
      'userPostInParentReaction' => '{user} reageerde op je {post} in {entityType} {entity}',
      'eventAttendee' => '{user} heeft je toegevoegd aan {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} geplaatst op {entityType} {entity}',
      'attach' => '{user} toegevoegd aan {entityType} {entity}',
      'status' => '{user} heeft {field} van {entityType} {entity} bijgewerkt',
      'update' => '{user} heeft {entityType} {entity} bijgewerkt',
      'postTargetTeam' => '{user} gepost in groep {target}',
      'postTargetTeams' => '{user} gepost in groepen {target}',
      'postTargetPortal' => '{user} gepost naar portal {target}',
      'postTargetPortals' => '{user} gepost in portals {target}',
      'postTarget' => '{user} geplaatst op {target}',
      'postTargetYou' => '{user} heeft u een bericht verstuurd',
      'postTargetYouAndOthers' => '{user} geplaatst op {target} en u',
      'postTargetAll' => '{user} geplaatst op allemaal',
      'postTargetSelf' => '{user} zelf gepost',
      'postTargetSelfAndOthers' => '{user} gepost op {target} en zichzelf',
      'mentionInPost' => '{user} vermeldde {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} heeft je vermeld in {entityType} {entity}',
      'mentionInPostTarget' => '{user} meldde {mentioned} in de post',
      'mentionYouInPostTarget' => '{user} heeft u in de post vermeld naar {target}',
      'mentionYouInPostTargetAll' => '{user} heeft je in bericht voor iedereen vermeld',
      'mentionYouInPostTargetNoTarget' => '{user} heeft je in de post vermeld',
      'create' => '{user} creëerde {entityType} {entity}',
      'createThis' => '{user} creëerde deze {entityType}',
      'createAssignedThis' => '{user} creëerde deze {entityType} toegewezen aan {assignee}',
      'createAssigned' => '{user} creëerde {entityType} {entity} en wees toe aan {assignee}',
      'createAssignedYou' => '{user} heeft {entityType} {entity} aan u toegewezen',
      'createAssignedThisSelf' => '{user} heeft dit {entityType} zelf toegewezen',
      'createAssignedSelf' => '{user} heeft {entityType} {entity} zelf toegewezen',
      'assign' => '{user} wees {entityType} {entity} toe aan {assignee}',
      'assignThis' => '{user} wees deze {entityType} toe aan {assignee}',
      'assignYou' => '{user} heeft {entityType} {entity} aan u toegewezen',
      'assignThisVoid' => '{user} heeft dit {entityType} niet toegewezen',
      'assignVoid' => '{user} niet-toegewezen {entityType} {entity}',
      'assignThisSelf' => '{user} heeft dit {entityType} zelf toegewezen',
      'assignSelf' => '{user} zichzelf toegewezen {entityType} {entity}',
      'assignMultiAdd' => '{user} heeft {entity} toegewezen aan {assignee}',
      'assignMultiRemove' => '{user} unassigned {entity} from {removedAssignee}',
      'assignMultiAddRemove' => '{user} heeft {entity} toegewezen aan {assignee} en niet toegewezen aan {removedAssignee}',
      'assignMultiAddThis' => '{user} wees deze {entityType} toe aan {assignee}',
      'assignMultiRemoveThis' => '{user} heeft deze {entityType} toegewezen aan {removedAssignee}',
      'assignMultiAddRemoveThis' => '{user} heeft deze {entityType} toegewezen aan {assignee} en niet toegewezen aan {removedAssignee}',
      'postThis' => '{user} gepost',
      'attachThis' => '{user} toegevoegd',
      'statusThis' => '{user} heeft {field} bijgewerkt',
      'updateThis' => '{user} heeft deze {entityType} bijgewerkt',
      'createRelatedThis' => '{user} creëerde {relatedEntityType} {relatedEntity} en koppelde dit aan {entityType}',
      'createRelated' => '{user} creëerde {relatedEntityType} {relatedEntity} gekoppeld aan {entityType} {entity}',
      'relate' => '{user} gekoppeld {relatedEntityType} {relatedEntity} met {entityType} {entity}',
      'relateThis' => '{user} linkt {relatedEntityType} {relatedEntity} aan dit {entityType}',
      'unrelate' => '{user} unlinked {relatedEntityType} {relatedEntity} from {entityType} {entity}',
      'unrelateThis' => '{user} unlinked {relatedEntityType} {relatedEntity} van deze {entityType}',
      'emailReceivedFromThis' => 'E-mail ontvangen van {from}',
      'emailReceivedInitialFromThis' => 'E-mail ontvangen van {from}, {entityType} gecreëerd',
      'emailReceivedThis' => 'E-mail is ontvangen',
      'emailReceivedInitialThis' => 'E-mail ontvangen, creëerde deze {entityType}',
      'emailReceivedFrom' => 'E-mail ontvangen van {from}, behorende bij {entityType} {entity}',
      'emailReceivedFromInitial' => 'E-mail ontvangen van {from}, {entityType} {entity} gecreëerd',
      'emailReceived' => 'E-mail is ontvangen voor {entityType} {entity}',
      'emailReceivedInitial' => 'E-mail ontvangen: creëerde deze {entityType} {entity}',
      'emailReceivedInitialFrom' => 'E-mail ontvangen van {from}, {entityType} {entity} gecreëerd',
      'emailSent' => '{by} verzond e-mail gerelateerd aan {entityType} {entity}',
      'emailSentThis' => '{by} verzond e-mail',
      'eventConfirmationAccepted' => '{invitee} accepteerde deelname aan {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} weigerde deelname aan {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is onzeker over deelname aan {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepteerde deelname',
      'eventConfirmationDeclinedThis' => '{invitee} weigerde deelname',
      'eventConfirmationTentativeThis' => '{invitee} twijfelt over deelname'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} geplaatst op {target} en zichzelf'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} gepost op {target} en zichzelf'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Januari',
        1 => 'Februari',
        2 => 'Maart',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Augustus',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'December'
      ],
      'monthNamesShort' => [
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Maa',
        3 => 'Apr',
        4 => 'Mei',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec'
      ],
      'dayNames' => [
        0 => 'Zondag',
        1 => 'Maandag',
        2 => 'Dinsdag',
        3 => 'Woensdag',
        4 => 'Donderdag',
        5 => 'Vrijdag',
        6 => 'Zaterdag'
      ],
      'dayNamesShort' => [
        0 => 'Zon',
        1 => 'Maa',
        2 => 'Din',
        3 => 'Woe',
        4 => 'Don',
        5 => 'Vrij',
        6 => 'Zat'
      ],
      'dayNamesMin' => [
        0 => 'Zo',
        1 => 'Ma',
        2 => 'Di',
        3 => 'Wo',
        4 => 'Do',
        5 => 'Vr',
        6 => 'Za'
      ]
    ],
    'durationUnits' => [
      'd' => 'd',
      'h' => 'u',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Dhr.',
        'Mrs.' => 'Mevr.',
        'Ms.' => 'Mej.',
        'Dr.' => 'Dr.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Op',
        'notOn' => 'Niet op',
        'after' => 'Na',
        'before' => 'Voor',
        'between' => 'Tussen',
        'today' => 'Vandaag',
        'past' => 'Verleden',
        'future' => 'Toekomst',
        'currentMonth' => 'Huidige maand',
        'lastMonth' => 'Vorige Maand',
        'nextMonth' => 'Volgende maand',
        'currentQuarter' => 'Huidige kwartaal',
        'lastQuarter' => 'Vorige Kwartaal',
        'currentYear' => 'Huidige jaar',
        'lastYear' => 'Vorig Jaar',
        'lastSevenDays' => 'Laatste 7 dagen',
        'lastXDays' => 'Last X Days',
        'nextXDays' => 'Volgende X Days',
        'ever' => 'Altijd',
        'isEmpty' => 'Is leeg',
        'olderThanXDays' => 'Ouder dan X dagen',
        'afterXDays' => 'Na X dagen',
        'currentFiscalYear' => 'Huidig financieel jaar',
        'lastFiscalYear' => 'Laatste financieel jaar',
        'currentFiscalQuarter' => 'Huidig financieel kwartaal',
        'lastFiscalQuarter' => 'Laatste financieel kwartaal'
      ],
      'searchRanges' => [
        'is' => 'Is',
        'isEmpty' => 'Is leeg',
        'isNotEmpty' => 'Is niet leeg',
        'isOneOf' => 'Alle van',
        'isFromTeams' => 'Is lid van groep',
        'isNot' => 'Is niet',
        'isNotOneOf' => 'Geen van',
        'anyOf' => 'Alle van',
        'allOf' => 'Alle van',
        'noneOf' => 'Geen van',
        'any' => 'Alle'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Gelijk aan',
        'like' => 'Is als (%)',
        'notLike' => 'Niet zoals (%)',
        'startsWith' => 'Begint met',
        'endsWith' => 'Eindigt met',
        'contains' => 'Bevat',
        'notContains' => 'Bevat niet',
        'isEmpty' => 'Is leeg',
        'isNotEmpty' => 'Is niet leeg',
        'notEquals' => 'Niet gelijk aan',
        'anyOf' => 'Any Of',
        'noneOf' => 'None Of'
      ],
      'intSearchRanges' => [
        'equals' => 'Gelijk aan',
        'notEquals' => 'Niet gelijk aan',
        'greaterThan' => 'Groter dan',
        'lessThan' => 'Minder dan',
        'greaterThanOrEquals' => 'Groter dan of gelijk aan',
        'lessThanOrEquals' => 'Minder dan of gelijk aan',
        'between' => 'Tussen',
        'isEmpty' => 'Is leeg',
        'isNotEmpty' => 'Is niet leeg'
      ],
      'autorefreshInterval' => [
        0 => 'Geen',
        '0.5' => '30 seconden',
        1 => '1 minuut',
        2 => '2 minuten',
        5 => '5 minuten',
        10 => '10 minuten'
      ],
      'phoneNumber' => [
        'Mobile' => 'Mobiel',
        'Office' => 'Kantoor',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Overig'
      ],
      'saveConflictResolution' => [
        'current' => 'Huidige',
        'actual' => 'Werkelijk',
        'original' => 'Origineel'
      ],
      'reminderTypes' => [
        'Popup' => 'Pop-up',
        'Email' => 'E-mail'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'U kunt hier de vertaling vinden: https://github.com/summernote/summernote/tree/develop/lang',
        'font' => [
          'bold' => 'Vet',
          'italic' => 'Italic',
          'underline' => 'Onderstreept',
          'strike' => 'Doorhalen',
          'clear' => 'Verwijder opmaak lettertype',
          'height' => 'Lijn hoogte',
          'name' => 'Familie lettertype',
          'size' => 'Lettergrootte'
        ],
        'image' => [
          'image' => 'Foto',
          'insert' => 'Afbeelding invoegen',
          'resizeFull' => 'Schaal 100%',
          'resizeHalf' => 'Schaal 50%',
          'resizeQuarter' => 'Schaal 25%',
          'floatLeft' => 'Variabel links',
          'floatRight' => 'Variabel rechts',
          'floatNone' => 'Geen variabele',
          'dragImageHere' => 'Sleep afbeelding naar hier',
          'selectFromFiles' => 'Selecteer uit bestanden',
          'url' => 'Afbeelding URL',
          'remove' => 'Afbeelding verwijderen'
        ],
        'link' => [
          'link' => 'Link',
          'insert' => 'Link invoegen',
          'unlink' => 'Ontkoppel',
          'edit' => 'Bewerken',
          'textToDisplay' => 'Weer te geven tekst',
          'url' => 'Naar welke URL dient deze link te verwijzen?',
          'openInNewWindow' => 'In nieuw scherm openen'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Video link',
          'insert' => 'Video invoegen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram of DailyMotion)'
        ],
        'table' => [
          'table' => 'Tabel'
        ],
        'hr' => [
          'insert' => 'Horizontale Regel toevoegen'
        ],
        'style' => [
          'style' => 'Stijl',
          'normal' => 'Normaal',
          'blockquote' => 'Citaat',
          'pre' => 'Code',
          'h1' => 'Koptekst 1',
          'h2' => 'Koptekst 2',
          'h3' => 'Koptekst 3',
          'h4' => 'Koptekst 4',
          'h5' => 'Koptekst 5',
          'h6' => 'Koptekst 6'
        ],
        'lists' => [
          'unordered' => 'Ongesorteerde lijst',
          'ordered' => 'Gesorteerde lijst'
        ],
        'options' => [
          'help' => 'Hulp',
          'fullscreen' => 'Volledig scherm',
          'codeview' => 'Code weergave'
        ],
        'paragraph' => [
          'paragraph' => 'Paragraaf',
          'outdent' => 'Neg. inspringen',
          'indent' => 'Inspringen',
          'left' => 'Links uitlijnen',
          'center' => 'Centreren',
          'right' => 'Rechts uitlijnen',
          'justify' => 'Rechtsvaardig volledig'
        ],
        'color' => [
          'recent' => 'Recente kleur',
          'more' => 'Meer kleur',
          'background' => 'Achtergrondkleur',
          'foreground' => 'Letterkleur',
          'transparent' => 'Transparant',
          'setTransparent' => 'Transparant instellen',
          'reset' => 'Reset',
          'resetToDefault' => 'Standaardinstellingen terugzetten'
        ],
        'shortcut' => [
          'shortcuts' => 'Keyboard snelkoppelingen',
          'close' => 'Afsluiten',
          'textFormatting' => 'Tekstopmaak',
          'action' => 'Actie',
          'paragraphFormatting' => 'Paragraafopmaak',
          'documentStyle' => 'Documentopmaak'
        ],
        'history' => [
          'undo' => 'Herstel',
          'redo' => 'Opnieuw'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Lijst',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Donker',
      'Light' => 'Licht',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Navigatiebalk zijkant',
      'top' => 'Navigatiebalk boven'
    ],
    'fieldValidations' => [
      'required' => 'Vereist',
      'maxCount' => 'Max. aantal',
      'maxLength' => 'Max. lengte',
      'pattern' => 'Patroonvergelijking',
      'emailAddress' => 'Geldig e-mailadres',
      'phoneNumber' => 'Geldig telefoonnummer',
      'array' => 'Reeks',
      'arrayOfString' => 'Reeks tekens',
      'valid' => 'Geldigheid',
      'noEmptyString' => 'Geen lege string',
      'max' => 'Max. waarde',
      'min' => 'Min. waarde'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Ongeldige waarde.',
      'maxLength' => 'Lengte waarde overschrijdt maximum.',
      'phone_valid' => 'Telefoonnummer is ongeldig. Kan worden veroorzaakt door een verkeerde of lege landcode.',
      'url_valid' => 'Ongeldige URL-waarde.',
      'currency_valid' => 'Ongeldige bedrag waarde.',
      'currency_validCurrency' => 'De waarde van de valutacode is ongeldig of niet toegestaan.',
      'varchar_pattern' => 'Waarschijnlijk bevat de waarde niet toegestane tekens.',
      'email_emailAddress' => 'Ongeldige e-mail adres.',
      'phone_phoneNumber' => 'Ongeldige telefoonnummer.',
      'datetimeOptional_valid' => 'Ongeldige datum-tijd.',
      'datetime_valid' => 'Ongeldige datum-tijd.',
      'date_valid' => 'Ongeldige datum.',
      'enum_valid' => 'Ongeldige enum waarde. De waarde moet één van de gedefinieerde enum opties zijn. Een lege waarde is alleen toegestaan als het veld een lege optie heeft.',
      'int_valid' => 'Ongeldige integer getalswaarde.',
      'float_valid' => 'Ongeldige getalswaarde.',
      'multiEnum_valid' => 'Ongeldige multi-enum waarde. De waarde moet een van de gedefinieerde veldopties zijn.'
    ],
    'navbarTabs' => [
      'Business' => 'Zakelijk',
      'Marketing' => 'Marketing',
      'Support' => 'Support',
      'CRM' => 'CRM',
      'Activities' => 'Activiteiten'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cel',
      'align' => 'Uitlijnen',
      'width' => 'Breedte',
      'height' => 'Hoogte',
      'borderWidth' => 'Breedte border',
      'borderColor' => 'Kleur rand',
      'cellPadding' => 'Cel opvulling',
      'backgroundColor' => 'Achtergrondkleur',
      'verticalAlign' => 'Verticaal uitlijnen'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Links',
        'center' => 'Centrum',
        'right' => 'Rechts'
      ],
      'verticalAlign' => [
        'top' => 'Boven',
        'middle' => 'Midden',
        'bottom' => 'Onder'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ],
    'strings' => [
      'yesterdayShort' => 'Yest'
    ],
    'reactions' => [
      'Smile' => 'Smile',
      'Surprise' => 'Surprise',
      'Laugh' => 'Laugh',
      'Meh' => 'Meh',
      'Sad' => 'Sad',
      'Love' => 'Love',
      'Like' => 'Like',
      'Dislike' => 'Dislike'
    ],
    'recordActions' => [
      'create' => 'Maak',
      'read' => 'Lees',
      'edit' => 'Bewerk',
      'delete' => 'Verwijder',
      'stream' => 'Stroom'
    ],
    'tabs' => [
      'Stream' => 'Stroom'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'E-mails'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Map aanmaken'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'Nieuwe import met dezelfde parameters',
      'Revert Import' => 'Import terugdraaien',
      'Return to Import' => 'Voor Import geef Enter',
      'Run Import' => 'Start Importeren',
      'Back' => 'Terug',
      'Field Mapping' => 'Velden Overzicht',
      'Default Values' => 'Voorkeur waarden',
      'Add Field' => 'Veld toevoegen',
      'Created' => 'Gemaakt',
      'Updated' => 'Bijgewerkt',
      'Result' => 'Resultaat',
      'Show records' => 'Toon Velden',
      'Remove Duplicates' => 'Verwijder dubbelen',
      'importedCount' => 'Geïmporteerd (aantal)',
      'duplicateCount' => 'Dubbelen (aantal)',
      'updatedCount' => 'Bijgewerkt (count)',
      'Create Only' => 'Creëer alleen',
      'Create and Update' => 'Creëren & bijwerken',
      'Update Only' => 'Update alleen',
      'Update by' => 'Update door',
      'Set as Not Duplicate' => 'Instellen als niet dubbel',
      'File (CSV)' => 'Bestand (CSV)',
      'First Row Value' => 'Eerste rijwaarde',
      'Skip' => 'Overslaan',
      'Header Row Value' => 'Koptekst rij-waarde',
      'Field' => 'Veld',
      'What to Import?' => 'Wat te importeren?',
      'Entity Type' => 'Type entiteit',
      'What to do?' => 'Wat uit te voeren?',
      'Properties' => 'Eigenschappen',
      'Header Row' => 'Koptekst rij',
      'Person Name Format' => 'Format persoonsnaam',
      'John Smith' => 'Johan Visser',
      'Smith John' => 'Visser Johan',
      'Smith, John' => 'Visser, Johan',
      'Field Delimiter' => 'Veld scheidingsteken',
      'Date Format' => 'Datumnotatie',
      'Decimal Mark' => 'Decimaal scheidingsteken',
      'Text Qualifier' => 'Tekstkwalificatie',
      'Time Format' => 'Tijdnotatie',
      'Currency' => 'Valuta',
      'Preview' => 'Voorbeeld',
      'Next' => 'Volgende',
      'Step 1' => 'Stap 1',
      'Step 2' => 'Stap 2',
      'Double Quote' => 'Dubbele aanhalingstekens',
      'Single Quote' => 'Enkel aanhalingsteken',
      'Imported' => 'Geïmporteerd',
      'Duplicates' => 'Dubbelen',
      'Skip searching for duplicates' => 'Sla zoeken naar dubbelen over',
      'Timezone' => 'Tijdzone',
      'Remove Import Log' => 'Importlog verwijderen',
      'New Import' => 'Nieuwe import',
      'Import Results' => 'Resultaten importeren',
      'Run Manually' => 'Handmatig uitvoeren',
      'Silent Mode' => 'Stille modus',
      'Export' => 'Export'
    ],
    'messages' => [
      'importRunning' => 'Import loopt...',
      'noErrors' => 'Geen fouten',
      'utf8' => 'Moet UTF-8 gecodeerd zijn',
      'duplicatesRemoved' => 'Dubbelen verwijderd',
      'inIdle' => 'Uitvoeren in idle (voor big data; via cron)',
      'revert' => 'Hierdoor worden alle geïmporteerde records definitief verwijderd.',
      'removeDuplicates' => 'Hierdoor worden alle geïmporteerde records die als dubbelen werden herkend, permanent verwijderd.',
      'confirmRevert' => 'Hierdoor worden alle geïmporteerde records definitief verwijderd. Weet u het zeker?',
      'confirmRemoveDuplicates' => 'Hierdoor worden alle geïmporteerde records die als dubbelen werden herkend, permanent verwijderd. Weet u het zeker?',
      'confirmRemoveImportLog' => 'Dit zal het import logboek verwijderen. Alle geïmporteerde records blijven bewaard. U zult niet in staat zijn om de importresultaten terug te draaien. Ben je zeker?',
      'removeImportLog' => 'Dit zal het importlogboek verwijderen. Alle geïmporteerde gegevens worden bewaard. Gebruik het als u zeker weet dat het importeren in orde is.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telefoon landcode'
    ],
    'fields' => [
      'file' => 'Bestand',
      'entityType' => 'Type entiteit',
      'imported' => 'Geïmporteerd records',
      'duplicates' => 'Dubbele Records',
      'updated' => 'Bijgewerkte records',
      'status' => 'Status'
    ],
    'links' => [
      'errors' => 'Fouten'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Mislukt',
        'Standby' => 'Stand-by',
        'Pending' => 'In behandeling',
        'In Process' => 'In behandeling',
        'Complete' => 'Voltooi'
      ],
      'personNameFormat' => [
        'f l' => 'Voornaam Achternaam',
        'l f' => 'Achternaam Voornaam',
        'f m l' => 'Voornaam tussenvoegsel Achternaam',
        'l f m' => 'Achternaam Voornaam Tussenvoegsel',
        'l, f' => 'Achternaam, Voornaam'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Uit te voeren commando (vanuit CLI)',
      'saveAsDefault' => 'Opslaan als standaard'
    ],
    'tooltips' => [
      'manualMode' => 'Indien aangevinkt, moet u de import handmatig uitvoeren vanuit CLI. Commando zal worden getoond na het opzetten van de import.',
      'silentMode' => 'De meeste scripts na het opslaan worden overgeslagen, stroomnotities worden niet aangemaakt. Import zal sneller verlopen.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validatiefouten',
      'import' => 'Import',
      'rowIndex' => 'Rij index',
      'exportRowIndex' => 'Rij index exporteren',
      'lineNumber' => 'Lijnnummer',
      'exportLineNumber' => 'Exportregelnummer',
      'row' => 'Rij',
      'entityType' => 'Type entiteit'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validatie',
        'Access' => 'Toegang',
        'Not-Found' => 'Niet gevonden'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'Een regelnummer in de originele CSV.',
      'exportLineNumber' => 'Een regelnummer in de export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Naam',
      'emailAddress' => 'E-mailadres',
      'team' => 'Doelgroep',
      'status' => 'Status',
      'assignToUser' => 'Toewijzen aan gebruiker',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Poort',
      'monitoredFolders' => 'Gecontroleerde mappen',
      'trashFolder' => 'Prullenbak map',
      'security' => 'Beveiliging',
      'createCase' => 'Creëer Ticket',
      'reply' => 'Automatisch beantwoorden',
      'caseDistribution' => 'Ticket verdeling',
      'replyEmailTemplate' => 'Antwoord e-mail sjabloon',
      'replyFromAddress' => 'Antwoord Van adres',
      'replyToAddress' => 'Antwoord Aan adres',
      'replyFromName' => 'Antwoord Van naam',
      'targetUserPosition' => 'Functie van gebruiker',
      'fetchSince' => 'Opgehaald sinds',
      'addAllTeamUsers' => 'Voor alle groep gebruikers',
      'teams' => 'Groepen',
      'sentFolder' => 'Verzonden map',
      'storeSentEmails' => 'Verzonden e-mails opslaan',
      'keepFetchedEmailsUnread' => 'Laat opgehaalde E-mails als ongelezen staan',
      'connectedAt' => 'Verbonden op',
      'excludeFromReply' => 'Uitsluiten van beantwoorden',
      'useImap' => 'Ophalen van e-mails',
      'useSmtp' => 'Gebruik SMTP',
      'smtpHost' => 'SMTP-host',
      'smtpPort' => 'SMTP-poort',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP-beveiliging',
      'smtpAuthMechanism' => 'SMTP Auth Mechanisme',
      'smtpUsername' => 'SMTP-gebruikersnaam',
      'smtpPassword' => 'SMTP-wachtwoord',
      'fromName' => 'Van naam',
      'smtpIsShared' => 'SMTP is gedeeld',
      'smtpIsForMassEmail' => 'SMTP voor verzamel e-mail',
      'groupEmailFolder' => 'Groep e-mail map',
      'isSystem' => 'Is Systeem'
    ],
    'tooltips' => [
      'isSystem' => 'Is het e-mailaccount van systeem.',
      'useSmtp' => 'De mogelijkheid om e-mails te verzenden.',
      'reply' => 'E-mail afzenders melden dat hun e-mails zijn ontvangen.

Er wordt gedurende een bepaalde periode slechts één e-mail naar een bepaalde ontvanger gestuurd om looping te voorkomen.',
      'createCase' => 'Maak automatisch een ticket van inkomende e-mails aan.',
      'replyToAddress' => 'Geef het e-mailadres van deze mailbox op om reacties hierheen te laten komen.',
      'caseDistribution' => 'Hoe tickets zullen worden toegewezen. Direct toegewezen aan de gebruiker of in de groep.',
      'assignToUser' => 'Gebruikers e-mails/tickets zullen worden toegewezen aan.',
      'team' => 'Groep e-mails/tickets zullen worden gerelateerd aan.',
      'teams' => 'E-mails van groepen worden toegewezen aan.',
      'targetUserPosition' => 'Definieer de positie van de gebruikers waarover de tickets zullen worden verdeeld.',
      'addAllTeamUsers' => 'E-mails worden weergegeven in de Inbox van alle gebruikers van opgegeven groepen.',
      'monitoredFolders' => 'Meerdere mappen moeten gescheiden worden door een komma.',
      'smtpIsShared' => 'Indien ingeschakeld, kunnen gebruikers E-mails verzenden met behulp van deze SMTP. De beschikbaarheid wordt bepaald door functies via de toestemming van de groep e-mailaccounts.',
      'smtpIsForMassEmail' => 'Indien ingeschakeld, is SMTP beschikbaar voor verzamel e-mail.',
      'storeSentEmails' => 'Verzonden e-mails worden opgeslagen op de IMAP-server.',
      'groupEmailFolder' => 'Zet inkomende e-mails in een groepsmap.',
      'excludeFromReply' => 'Bij het beantwoorden van e-mails die naar het e-mailadres van dit account zijn verzonden, wordt het e-mailadres niet toegevoegd aan CC.

Merk op dat door deze parameter in te schakelen, het e-mailadres van deze account zichtbaar wordt voor gebruikers die toegang hebben tot het verzenden van e-mails.'
    ],
    'links' => [
      'filters' => 'Filters',
      'emails' => 'E-mails',
      'assignToUser' => 'Toewijzen aan gebruiker',
      'groupEmailFolder' => 'Groep e-mail map'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actief',
        'Inactive' => 'Inactief'
      ],
      'caseDistribution' => [
        '' => 'Geen',
        'Direct-Assignment' => 'Direct toewijzen',
        'Round-Robin' => 'Willekeurig',
        'Least-Busy' => 'Minst bezet'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'Plat',
        'login' => 'Login',
        'crammd5' => 'CRAM-MD5'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ],
      'security' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Creëer E-mail Account',
      'IMAP' => 'IMAP',
      'Actions' => 'Acties',
      'Main' => 'Hoofd'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
      'imapNotConnected' => 'Kan geen verbinding maken met groeps [IMAP-account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Ingeschakeld',
      'clientId' => 'Cliënt ID',
      'clientSecret' => 'Geheime Code',
      'redirectUri' => 'Omleiding URL',
      'apiKey' => 'API sleutel',
      'siteKey' => 'Site sleutel',
      'secretKey' => 'Geheime sleutel',
      'scoreThreshold' => 'Drempel Score',
      'mapId' => 'Map ID'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps',
      'GoogleReCaptcha' => 'Google reCAPTCHA'
    ],
    'messages' => [
      'selectIntegration' => 'Selecteer een integratie in het menu.',
      'noIntegrations' => 'Geen integraties beschikbaar.'
    ],
    'help' => [
      'GoogleReCaptcha' => 'Verkrijg de sitesleutel en geheime sleutel van [Google] (https://www.google.com/recaptcha/).',
      'Google' => '**Bevat OAuth 2.0 referenties van de Google Developers Console.**

Bezoek [Google Developers Console](https://console.developers.google.com/project) om OAuth 2.0 referenties te verkrijgen zoals een Cliënt ID en Geheime Code die bekend zijn bij zowel Google als EspoCRM applicatie.',
      'GoogleMaps' => 'Verkrijg de API-sleutel [hier](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Status',
      'executeTime' => 'Uitgevoerd op',
      'executedAt' => 'Uitgevoerd bij',
      'startedAt' => 'Begonnen bij',
      'attempts' => 'Pogingen over',
      'failedAttempts' => 'Mislukte pogingen',
      'serviceName' => 'Service',
      'method' => 'Method (verouderd)',
      'methodName' => 'Method',
      'scheduledJob' => 'Geplande Opdracht',
      'scheduledJobJob' => 'Naam geplande taak',
      'data' => 'Data',
      'targetType' => 'Doeltype',
      'targetId' => 'Doel-ID',
      'number' => 'Nummer',
      'queue' => 'Wachtrij',
      'group' => 'Groep',
      'className' => 'Class Naam',
      'targetGroup' => 'Doelgroep',
      'job' => 'Baan'
    ],
    'options' => [
      'status' => [
        'Pending' => 'In behandeling',
        'Success' => 'Succesvol',
        'Running' => 'Actief',
        'Failed' => 'Mislukt'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Breedte',
      'link' => 'Link',
      'notSortable' => 'Niet sorteerbaar',
      'align' => 'Uitlijnen',
      'panelName' => 'Paneel naam',
      'style' => 'Stijl',
      'sticked' => 'Vastgezet',
      'isMuted' => 'Gedempte kleur',
      'isLarge' => 'Groot lettertype',
      'hidden' => 'Verborgen',
      'noLabel' => 'Geen label',
      'dynamicLogicVisible' => 'Condities waardoor paneel zichtbaar is',
      'dynamicLogicStyled' => 'Voorwaarden voor toegepaste stijl',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Noot tekst',
      'noteStyle' => 'Noot stijl'
    ],
    'options' => [
      'align' => [
        'left' => 'Links',
        'right' => 'Rechts'
      ],
      'style' => [
        'default' => 'Standaard',
        'success' => 'Succesvol',
        'danger' => 'Gevaar',
        'info' => 'Info',
        'warning' => 'Waarschuwing',
        'primary' => 'Primair'
      ]
    ],
    'labels' => [
      'New panel' => 'Nieuw paneel',
      'Layout' => 'Lay-out'
    ],
    'messages' => [
      'alreadyExists' => 'Layout `{name}` bestaat al.',
      'createInfo' => 'Aangepaste lijstindelingen kunnen worden gebruikt door relatiepanelen.',
      'cantBeEmpty' => 'Lay-out kan niet leeg zijn.',
      'fieldsIncompatible' => 'Velden kunnen niet samen op de lay-out staan: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'Een tekst die moet worden weergegeven in het paneel. Markdown wordt ondersteund.',
      'tabBreak' => 'Een apart tabblad voor het paneel en alle volgende panelen tot de volgende tab-break.',
      'noLabel' => 'Toon geen kolomlabel in de kop.',
      'notSortable' => 'Schakelt de mogelijkheid uit om te sorteren op de kolom.',
      'width' => 'Een kolombreedte. Het is aanbevolen om één kolom te hebben zonder gespecificeerde breedte, meestal moet dit het veld *Name* zijn.',
      'sticked' => 'Het paneel wordt vastgeplakt aan het paneel erboven. Geen ruimte tussen de panelen.',
      'hiddenPanel' => 'Je moet op \'toon meer\' klikken om het paneel te zien.',
      'panelStyle' => 'Een kleur van het paneel.',
      'dynamicLogicVisible' => 'Indien ingesteld, wordt het paneel verborgen tenzij aan de voorwaarde is voldaan.',
      'dynamicLogicStyled' => 'Een kleur zal worden toegepast indien aan een specifieke voorwaarde is voldaan . De kleur wordt bepaald door de *Stijl* parameter.',
      'link' => 'Als deze optie is aangevinkt, wordt een veldwaarde weergegeven als een link naar het detailaanzicht van het gegevensrecord. Meestal wordt het gebruikt voor *Naam* velden.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Lay-outs'
    ],
    'labels' => [
      'Create LayoutSet' => 'Creëer Lay-out set',
      'Edit Layouts' => 'Bewerk lay-out'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Naam',
      'campaign' => 'Campagne',
      'isActive' => 'Is actief',
      'subscribeToTargetList' => 'Abonneer je op de doellijst',
      'subscribeContactToTargetList' => 'Abonneren Contactpersoon als die bestaat',
      'targetList' => 'Doellijst',
      'fieldList' => 'Payload velden',
      'optInConfirmation' => 'Dubbele inschrijving',
      'optInConfirmationEmailTemplate' => 'Inschrijving bevestiging e-mailsjabloon',
      'optInConfirmationLifetime' => 'Inschrijving bevestiging levensduur (uren)',
      'optInConfirmationSuccessMessage' => 'Tekst die moet worden weergegeven na bevestiging van de inschrijving',
      'leadSource' => 'Lead bron',
      'apiKey' => 'API sleutel',
      'targetTeam' => 'Doel groep',
      'exampleRequestMethod' => 'Methode',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'exampleRequestHeaders' => 'Koppen',
      'createLeadBeforeOptInConfirmation' => 'Creëer Lead voor bevestiging',
      'skipOptInConfirmationIfSubscribed' => 'Bevestiging overslaan als het lood al in de doellijst is opgenomen',
      'smtpAccount' => 'SMTP-account',
      'inboundEmail' => 'Groep e-mailaccount',
      'duplicateCheck' => 'Dubbele controle',
      'phoneNumberCountry' => 'Telefoon landcode ',
      'fieldParams' => 'Veldparameters',
      'formId' => 'Formulier ID',
      'formEnabled' => 'Webformulier',
      'formUrl' => 'Formulier URL',
      'formTitle' => 'Form Title',
      'formTheme' => 'Form Theme',
      'formSuccessText' => 'Tekst die moet worden weergegeven na verzenden van formulier',
      'formText' => 'Weer te geven tekst op formulier',
      'formSuccessRedirectUrl' => 'URL om naar door te verwijzen na verzenden van formulier',
      'formLanguage' => 'Gebruikte taal op formulier',
      'formFrameAncestors' => 'Toegestane hosts voor formulierinsluiting',
      'formCaptcha' => 'Captcha gebruiken'
    ],
    'links' => [
      'targetList' => 'Doellijst',
      'campaign' => 'Campagne',
      'optInConfirmationEmailTemplate' => 'Inschrijving bevestiging e-mailsjabloon',
      'targetTeam' => 'Doel groep',
      'inboundEmail' => 'Groep e-mailaccount',
      'logRecords' => 'Log'
    ],
    'labels' => [
      'Create LeadCapture' => 'Creëer Startpunt',
      'Generate New API Key' => 'Genereer nieuwe API-sleutel',
      'Request' => 'Verzoek',
      'Confirm Opt-In' => 'Inschrijving bevestigen',
      'Generate New Form ID' => 'Nieuw formulier-ID genereren',
      'Web Form' => 'Webformulier'
    ],
    'messages' => [
      'generateApiKey' => 'Creëer nieuwe API-sleutel',
      'optInConfirmationExpired' => 'Inschrijving bevestigingslink is verlopen.',
      'optInIsConfirmed' => 'Inschrijving is bevestigd.'
    ],
    'tooltips' => [
      'formCaptcha' => 'Om Captcha te kunnen gebruiken, moet je dit configureren onder **Beheer** > **Integraties**.',
      'optInConfirmationSuccessMessage' => 'Markdown wordt ondersteund.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Nummer',
      'data' => 'Gegevens',
      'target' => 'Doel',
      'leadCapture' => 'Leads verwerven',
      'createdAt' => 'Ingevoerd op',
      'isCreated' => 'Lead gecreëerd'
    ],
    'links' => [
      'leadCapture' => 'Leads verwerven',
      'target' => 'Doel'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Verwerkt Aantal'
    ],
    'options' => [
      'status' => [
        'Pending' => 'In behandeling',
        'Running' => 'Actief',
        'Success' => 'Succesvol',
        'Failed' => 'Mislukt'
      ]
    ],
    'messages' => [
      'infoText' => 'De massa-actie wordt in idle verwerkt door cron. Het kan enige tijd duren voordat het klaar is. Het sluiten van dit modale dialoogvenster heeft geen invloed op het uitvoeringsproces.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Post',
      'attachments' => 'Bijlagen',
      'targetType' => 'Doel',
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'portals' => 'Portals',
      'type' => 'Type',
      'isGlobal' => 'Is globaal',
      'isInternal' => 'Is intern (voor interne gebruikers)',
      'isPinned' => 'Is vastgemaakt',
      'related' => 'Verwant',
      'createdByGender' => 'Gemaakt door geslacht',
      'data' => 'Data',
      'number' => 'Nummer'
    ],
    'filters' => [
      'all' => 'Alle',
      'posts' => 'Berichten',
      'updates' => 'Updates',
      'activity' => 'Activiteit'
    ],
    'options' => [
      'targetType' => [
        'self' => 'aan mezelf',
        'users' => 'voor bepaalde gebruiker (s)',
        'teams' => 'naar een specifiek(e) groep(en)',
        'all' => 'voor alle interne gebruikers',
        'portals' => 'voor portaalgebruikers'
      ],
      'type' => [
        'Post' => 'Post',
        'Create' => 'Creër',
        'CreateRelated' => 'Gerelateerde creëren',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Toewijzen',
        'Relate' => 'Koppel',
        'Unrelate' => 'Ontkoppel',
        'EmailReceived' => 'Email ontvangen',
        'EmailSent' => 'Email verstuurd'
      ]
    ],
    'labels' => [
      'View Posts' => 'Posts bekijken',
      'View Attachments' => 'View Attachments',
      'View Activity' => 'Activiteit bekijken',
      'Pin' => 'Pin',
      'Unpin' => 'Ontpin',
      'Pinned' => 'Vastgezet',
      'Quote Reply' => 'Quote Beantwoorden'
    ],
    'messages' => [
      'writeMessage' => 'Schrijf je bericht hier',
      'pinnedMaxCountExceeded' => 'Kan geen notities meer vastpinnen. Het maximaal toegestane aantal is {count}.'
    ],
    'links' => [
      'portals' => 'Portalen',
      'attachments' => 'Bijlagen',
      'superParent' => 'Behorende bij',
      'related' => 'Verwant'
    ],
    'otherFields' => [
      'to' => 'To'
    ]
  ],
  'OAuthAccount' => [
    'labels' => [
      'Create OAuthAccount' => 'Create OAuth Account',
      'Connection' => 'Connection'
    ],
    'fields' => [
      'provider' => 'Provider',
      'hasAccessToken' => 'Has Access Token',
      'user' => 'User',
      'providerIsActive' => 'Provider is Active',
      'data' => 'Data'
    ],
    'links' => [
      'provider' => 'Provider'
    ]
  ],
  'OAuthProvider' => [
    'labels' => [
      'Create OAuthProvider' => 'Create OAuth Provider'
    ],
    'fields' => [
      'isActive' => 'Is Active',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'authorizationEndpoint' => 'Authorization Endpoint',
      'tokenEndpoint' => 'Token Endpoint',
      'authorizationRedirectUri' => 'Authorization Redirect URI',
      'scopes' => 'Scopes',
      'scopeSeparator' => 'Scope Separator',
      'hasAccessToken' => 'Has Access Token',
      'authorizationPrompt' => 'Authorization Prompt',
      'authorizationParams' => 'Authorization Params'
    ],
    'links' => [
      'accounts' => 'Accounts'
    ],
    'tooltips' => [
      'authorizationParams' => 'Additional query parameters to be sent to the authorization endpoint. Specified in JSON format.'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Soort',
      'optOut' => 'Afgemeld',
      'invalid' => 'Ongeldig',
      'numeric' => 'Numerieke waarde'
    ],
    'presetFilters' => [
      'orphan' => 'Wees'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Naam',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Functies',
      'isActive' => 'Is actief',
      'isDefault' => 'Is standaard',
      'tabList' => 'Tabbladen lijst',
      'applicationName' => 'Naam toepassing',
      'quickCreateList' => 'Lijst "Snelle invoer"',
      'companyLogo' => 'Logo',
      'theme' => 'Thema',
      'language' => 'Taal',
      'dashboardLayout' => 'Dashboard lay-out',
      'dateFormat' => 'Datum formaat',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de week',
      'defaultCurrency' => 'Standaard valuta',
      'layoutSet' => 'Lay-out set',
      'authenticationProvider' => 'Authenticatie aanbieder',
      'customUrl' => 'Eigen URL',
      'customId' => 'Aangepaste ID',
      'authTokenLifetime' => 'Auth Token duur (uren)',
      'authTokenMaxIdleTime' => 'Auth Token Max idle tijd (uren)'
    ],
    'links' => [
      'users' => 'Gebruikers',
      'portalRoles' => 'Functies',
      'layoutSet' => 'Lay-out set',
      'authenticationProvider' => 'Authenticatie aanbieder',
      'notes' => 'Notities',
      'articles' => 'Kennisbank artikelen'
    ],
    'tooltips' => [
      'layoutSet' => 'Biedt de mogelijkheid om lay-outs te hebben die afwijken van de standaard lay-outs.',
      'portalRoles' => 'Gespecificeerde portaal functies worden toegepast op alle gebruikers van dit portaal.'
    ],
    'labels' => [
      'Create Portal' => 'Creëer Portaal',
      'User Interface' => 'Gebruikersinterface',
      'General' => 'Algemeen',
      'Settings' => 'Instellingen'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Exporteer rechten',
      'massUpdatePermission' => 'Rechten voor massale update',
      'data' => 'Gegevens',
      'fieldData' => 'Veldgegevens'
    ],
    'links' => [
      'users' => 'Gebruikers'
    ],
    'labels' => [
      'Access' => 'Toegang',
      'Create PortalRole' => 'Creëer Portaalrol',
      'Scope Level' => 'Toepassingsniveau',
      'Field Level' => 'Veldniveau'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Creëer Portaalgebruiker'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'exportDelimiter' => 'Scheidingsteken export',
      'receiveAssignmentEmailNotifications' => 'Ontvang bevestiging toewijzingen per e-mail',
      'receiveMentionEmailNotifications' => 'E-mailmeldingen over vermeldingen in berichten',
      'receiveStreamEmailNotifications' => 'E-mailberichten over berichten en statusupdates over berichten en statusupdates',
      'assignmentNotificationsIgnoreEntityTypeList' => 'Kennisgevingen van toewijzing in de applicatie',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Kennisgevingen van e-mailtoewijzingen',
      'reactionNotifications' => 'In-app meldingen over reacties',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'E-mail handtekening',
      'dashboardTabList' => 'Tabbladen lijst',
      'defaultReminders' => 'Standaard herinneringen',
      'defaultRemindersTask' => 'Standaard herinneringen voor taken',
      'theme' => 'Thema',
      'pageContentWidth' => 'Content Width',
      'useCustomTabList' => 'Eigen tabbladen lijst',
      'addCustomTabs' => 'Aangepaste Tabs toevoegen',
      'tabList' => 'Tabbladen lijst',
      'emailReplyToAllByDefault' => 'Standaard e-mail beantwoorden',
      'dashboardLayout' => 'Dashboard lay-out',
      'dashboardLocked' => 'Dashboard vergrendelen',
      'emailReplyForceHtml' => 'E-mailantwoord in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Vul de toegewezen gebruiker niet vooraf in bij het maken van een record',
      'followEntityOnStreamPost' => 'Record automatisch volgen na plaatsing in Stream',
      'followCreatedEntities' => 'Aangemaakte records automatisch volgen',
      'followCreatedEntityTypeList' => 'Aangemaakte records van specifieke entiteitstypen automatisch volgen',
      'emailUseExternalClient' => 'Gebruik een externe e-mail cliënt',
      'textSearchStoringDisabled' => 'Tekstfilter opslaan uitschakelen',
      'calendarSlotDuration' => 'Kalender duur',
      'calendarScrollHour' => 'Kalender blader naar uur'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Zondag',
        1 => 'Maandag'
      ],
      'pageContentWidth' => [
        '' => 'Normal',
        'Wide' => 'Wide'
      ]
    ],
    'labels' => [
      'Notifications' => 'Meldingen',
      'User Interface' => 'Gebruikers Interface',
      'Misc' => 'Overig',
      'Locale' => 'Lokaal',
      'Reset Dashboard to Default' => 'Dashboard instellen op standaard'
    ],
    'tooltips' => [
      'addCustomTabs' => 'Als deze optie is aangevinkt, worden aangepaste tabbladen toegevoegd aan de standaardtabbladen. Anders worden aangepaste tabbladen gebruikt in plaats van de standaardtabbladen.',
      'autoFollowEntityTypeList' => 'De gebruiker zal automatisch alle nieuwe records van de geselecteerde entiteittypes volgen, zal informatie in de stream zien en zal meldingen ontvangen.',
      'doNotFillAssignedUserIfNotRequired' => 'Bij het aanmaken van een record toegewezen gebruiker zal de gebruiker niet worden ingevuld met een eigen gebruikersnaam, tenzij het veld verplicht is.',
      'followCreatedEntities' => 'Bij het aanmaken van nieuwe records worden deze automatisch gevolgd, zelfs als ze aan een andere gebruiker worden toegewezen.',
      'followCreatedEntityTypeList' => 'Wanneer nieuwe records van geselecteerde entiteittypes worden aanmaakt, worden deze automatisch gevolgd zelfs als ze aan een andere gebruiker worden toegewezen.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icoon',
      'color' => 'Kleur'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Naam',
      'roles' => 'Functies',
      'assignmentPermission' => 'Toewijzing rechten',
      'userPermission' => 'Gebruikers rechten',
      'messagePermission' => 'Toestemming voor berichten',
      'portalPermission' => 'Portaal rechten',
      'groupEmailAccountPermission' => 'Groep e-mailaccount rechten',
      'exportPermission' => 'Exporteer rechten',
      'massUpdatePermission' => 'Rechten voor massale update',
      'followerManagementPermission' => 'Volgersbeheer Toestemming',
      'dataPrivacyPermission' => 'Data privacy rechten',
      'auditPermission' => 'Controle Toestemming',
      'mentionPermission' => 'Vermeld toestemming',
      'userCalendarPermission' => 'Gebruiker Kalendermachtiging',
      'data' => 'Gegevens',
      'fieldData' => 'Veldgegevens'
    ],
    'links' => [
      'users' => 'Gebruikers',
      'teams' => 'Groepen'
    ],
    'tooltips' => [
      'messagePermission' => 'Berichten naar andere gebruikers sturen.

* all - naar iedereen sturen
* team - alleen naar teamleden sturen
* nee - niet sturen',
      'assignmentPermission' => 'Records aan andere gebruikers toewijzen.

* alle - geen beperking
* team - alleen aan teamgenoten toewijzen
* no - alleen aan zichzelf toewijzen',
      'userPermission' => 'Bekijken van streams van andere gebruikers. Stelt gebruikers in staat rechten te bekijken van  gebruikers  voor specifieke records.',
      'userCalendarPermission' => 'Sta toe om agenda\'s van andere gebruikers te bekijken.',
      'portalPermission' => 'Toegang tot portaalinformatie, de mogelijkheid om berichten te posten voor portaalgebruikers.',
      'groupEmailAccountPermission' => 'Toegang tot e-mailaccounts van groepen, de mogelijkheid om e-mails te versturen via SMTP van groepen.',
      'exportPermission' => 'Het kunnen exporteren van records.',
      'massUpdatePermission' => 'Het uitvoeren van massale updates van records.',
      'followerManagementPermission' => 'Maakt het mogelijk om volgers van specifieke records te beheren.',
      'dataPrivacyPermission' => 'Toestaan ​​om persoonlijke gegevens te bekijken en te wissen.',
      'auditPermission' => 'Hiermee kan het auditlogboek worden bekeken.',
      'mentionPermission' => 'Hiermee kunnen andere gebruikers in de stream worden genoemd.

* all - kan iedereen vermelden
* team - kan alleen teamgenoten noemen
* nee - kan niet vermelden'
    ],
    'labels' => [
      'Access' => 'Toegang',
      'Create Role' => 'Creëer Functie',
      'Scope Level' => 'Toepassingsniveau',
      'Field Level' => 'Veldniveau'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'niet-actief',
        'enabled' => 'ingeschakeld',
        'disabled' => 'uitgeschakeld'
      ],
      'levelList' => [
        'all' => 'alle',
        'team' => 'groep',
        'account' => 'relatie',
        'contact' => 'contact',
        'own' => 'eigen',
        'no' => 'nee',
        'yes' => 'ja',
        'not-set' => 'niet-actief'
      ]
    ],
    'actions' => [
      'read' => 'Lees',
      'edit' => 'Bewerken',
      'delete' => 'Verwijder',
      'stream' => 'Stream',
      'create' => 'Creëer'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Alle wijzigingen in een toegangscontrolesysteem worden toegepast nadat de cache is geschoond.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planning (crontab notatie)'
    ],
    'links' => [
      'log' => 'Log'
    ],
    'labels' => [
      'As often as possible' => 'Zo vaak als mogelijk',
      'Create ScheduledJob' => 'Creëer geplande opdracht'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Opschonen',
        'CheckInboundEmails' => 'Controleer groep e-mailaccounts',
        'CheckEmailAccounts' => 'Controleer persoonlijke e-mail accounts',
        'SendEmailReminders' => 'Stuur herinnering e-mails',
        'AuthTokenControl' => 'Auth sleutel control',
        'SendEmailNotifications' => 'Verzend e-mailmeldingen',
        'CheckNewVersion' => 'Controleer op nieuwe versie',
        'ProcessWebhookQueue' => 'Wachtrij proces Webhook',
        'SendScheduledEmails' => 'Geplande e-mails verzenden',
        'ProcessMassEmail' => 'Verzend verzamel e-mail',
        'ControlKnowledgeBaseArticleStatus' => 'Controle kennisbank artikel status'
      ],
      'cronSetup' => [
        'linux' => 'Opgelet: Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'mac' => 'Opgelet: Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'windows' => 'Opgelet: Maak een batch bestand met de volgende commando\'s om de geplande opdrachten voor Espo onder Windows te gebruiken:',
        'default' => 'Opgelet: Voeg deze regel toe aan de Cron Job (geplande opdracht):'
      ],
      'status' => [
        'Active' => 'Actief',
        'Inactive' => 'Inactief'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notatie. Bepaalt de frequentie van de job runs.

`*/5 * * *` - elke 5 minuten

`0 */2 * * *` - elke 2 uur

`30 1 * * *` - eenmaal per dag om 01:30

`0 0 1 * * ` - op de eerste dag van de maand'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Status',
      'executionTime' => 'Start tijd',
      'target' => 'Doel'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Gebruik Cache',
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'baseCurrency' => 'Basisvaluta',
      'currencyRates' => 'Tariefwaarden',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'companyLogo' => 'Bedrijfslogo',
      'smsProvider' => 'SMS-aanbieder',
      'outboundSmsFromNumber' => 'SMS van nummer',
      'emailAddress' => 'E-mail',
      'outboundEmailFromName' => 'Van naam',
      'outboundEmailFromAddress' => 'Van Adres',
      'outboundEmailIsShared' => 'Gedeeld',
      'emailAddressLookupEntityTypeList' => 'Scopes voor het opzoeken van e-mailadressen',
      'emailAddressSelectEntityTypeList' => 'Bereik voor selecteren e-mailadres',
      'recordsPerPage' => 'Records per pagina',
      'recordsPerPageSmall' => 'Records per pagina (klein)',
      'recordsPerPageSelect' => 'Records per pagina (Selecteer)',
      'recordsPerPageKanban' => 'Records per pagina (Kanban)',
      'tabList' => 'Tabbladen lijst',
      'quickCreateList' => 'Lijst "Snelle invoer"',
      'exportDelimiter' => 'Scheidingsteken export',
      'globalSearchEntityList' => 'Globaal zoeken in entiteit lijst',
      'authenticationMethod' => 'Authenticatie methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Poort',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Gebruikersnaam',
      'ldapPassword' => 'Wachtwoord',
      'ldapBindRequiresDn' => 'Bind vereist DN',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Account canonieke vorm',
      'ldapAccountDomainName' => 'Domeinnaam account',
      'ldapTryUsernameSplit' => 'Probeer gesplitste gebruikersnaam',
      'ldapPortalUserLdapAuth' => 'Gebruik LDAP-authenticatie voor gebruikers van het portaal',
      'ldapCreateEspoUser' => 'Creëer Gebruiker in EspoCRM',
      'ldapSecurity' => 'Beveiliging',
      'ldapUserLoginFilter' => 'Gebruiker login filter',
      'ldapAccountDomainNameShort' => 'Korte gebruikers domein naam',
      'ldapOptReferrals' => 'Opt Referentie',
      'ldapUserNameAttribute' => 'Gebruikersnaam kenmerk',
      'ldapUserObjectClass' => 'Gebruiker objectclass',
      'ldapUserTitleAttribute' => 'Gebruikerstitel kenmerk',
      'ldapUserFirstNameAttribute' => 'Voornaam gebruiker kenmerk',
      'ldapUserLastNameAttribute' => 'Achternaam gebruiker kenmerk',
      'ldapUserEmailAddressAttribute' => 'E-mailadres van gebruiker',
      'ldapUserTeams' => 'Gebruikers groep',
      'ldapUserDefaultTeam' => 'Gebruiker standaard groep',
      'ldapUserPhoneNumberAttribute' => 'Gebruikerstelefoon kenmerk',
      'ldapPortalUserPortals' => 'Standaardportalen voor een portaalgebruiker',
      'ldapPortalUserRoles' => 'Standaard functies voor een portaalgebruiker',
      'exportDisabled' => 'Exporteren uitschakelen (Uitsluitend toegestaan voor beheerder)',
      'assignmentNotificationsEntityList' => 'Entiteiten die geïnformeerd worden van toewijzing',
      'assignmentEmailNotifications' => 'Verzend e-mail na toewijzing',
      'assignmentEmailNotificationsEntityList' => 'E-mail notificaties toegewezen opdrachten',
      'streamEmailNotifications' => 'Meldingen over updates in Stream voor interne gebruikers',
      'portalStreamEmailNotifications' => 'Meldingen over updates in Stream voor gebruikers van het portaal',
      'streamEmailNotificationsEntityList' => 'Stream e-mailmeldingen scopes',
      'streamEmailNotificationsTypeList' => 'Wat te melden over',
      'streamEmailWithContentEntityTypeList' => 'Entiteiten met e-mail body in stream notes',
      'emailNotificationsDelay' => 'Vertraging van e-mailberichten (in seconden)',
      'b2cMode' => 'B2C Mode',
      'avatarsDisabled' => 'Avatar uitschakelen',
      'followCreatedEntities' => 'Volg gecreëerde entities',
      'displayListViewRecordCount' => 'Totaal aantal tonen (in lijstweergave)',
      'theme' => 'Thema',
      'userThemesDisabled' => 'Gebruiker themas uitschakelen',
      'attachmentUploadMaxSize' => 'Upload Max. grootte (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Grootte (Mb)',
      'emailMessageMaxSize' => 'E-mail Max Size (Mb)',
      'massEmailMaxPerHourCount' => 'Max. aantal verzonden e-mails per uur',
      'massEmailMaxPerBatchCount' => 'Max aantal verzonden e-mails per batch',
      'personalEmailMaxPortionSize' => 'Maximale e-mail grootte voor het ophalen van persoonlijk account',
      'inboundEmailMaxPortionSize' => 'Maximale e-mail grootte voor het ophalen van groepsaccounts',
      'maxEmailAccountCount' => 'Maximum aantal persoonlijke e-mailaccounts per gebruiker',
      'emailScheduledBatchCount' => 'Max. aantal geplande e-mails per batch',
      'authTokenLifetime' => 'Geldigheid Auth sleutel (uren)',
      'authTokenMaxIdleTime' => 'Auth sleutel max. inactief (uren)',
      'dashboardLayout' => 'Dashboard lay-out (standaard)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Adres voorbeeld',
      'addressFormat' => 'Adresformaat',
      'personNameFormat' => 'Naam formaat',
      'notificationSoundsDisabled' => 'Stop notificatiegeluiden',
      'newNotificationCountInTitle' => 'Nieuw meldingsnummer weergeven in de titel van de pagina',
      'applicationName' => 'Applicatie naam',
      'calendarEntityList' => 'Kalender entiteits lijst',
      'busyRangesEntityList' => 'Lijst van vrije/bezette entiteiten',
      'mentionEmailNotifications' => 'Stuur e-mailmeldingen over vermeldingen in berichten',
      'massEmailDisableMandatoryOptOutLink' => 'Schakel de verplichte afmeldlink uit',
      'massEmailOpenTracking' => 'Volg openen e-mail',
      'massEmailVerp' => 'Gebruik VERP',
      'activitiesEntityList' => 'Activiteiten entiteitenlijst',
      'historyEntityList' => 'Geschiedenis-entiteitenlijst',
      'currencyFormat' => 'Valuta-indeling',
      'currencyDecimalPlaces' => 'Valuta-decimale plaatsen',
      'aclAllowDeleteCreated' => 'Toestaan ​​om gecreëerde records te verwijderen',
      'adminNotifications' => 'Systeemmeldingen in administratiepaneel',
      'adminNotificationsNewVersion' => 'Melding weergeven wanneer nieuwe EspoCRM-versie beschikbaar is',
      'adminNotificationsNewExtensionVersion' => 'Toon een melding wanneer er nieuwe versies van extensies beschikbaar zijn',
      'textFilterUseContainsForVarchar' => 'Gebruik \'bevat\' operator bij het filteren van varchar-velden',
      'phoneNumberNumericSearch' => 'Numeriek telefoonnummer zoeken',
      'phoneNumberInternational' => 'Internationale telefoonnummers',
      'phoneNumberExtensions' => 'Nummer extensie',
      'phoneNumberPreferredCountryList' => 'Voorkeur telefoon landcodes',
      'authTokenPreventConcurrent' => 'Slechts één auth-token per gebruiker',
      'scopeColorsDisabled' => 'Scoopkleuren uitschakelen',
      'tabColorsDisabled' => 'Tabbladkleuren uitschakelen',
      'tabIconsDisabled' => 'Schakel tab pictogrammen uit',
      'emailAddressIsOptedOutByDefault' => 'Markeer nieuwe e-mailadressen als niet aangemeld',
      'outboundEmailBccAddress' => 'BCC-adres voor externe klanten',
      'cleanupDeletedRecords' => 'Verwijderde records opschonen',
      'addressCityList' => 'Automatisch aanvullen plaats lijst',
      'addressStateList' => 'Automatisch aanvullen provincie lijst',
      'fiscalYearShift' => 'Start financieel jaar',
      'jobRunInParallel' => 'Parallel gelijktijdige opdrachten',
      'jobMaxPortion' => 'Opdrachten Max. portie',
      'jobPoolConcurrencyNumber' => 'Gelijktijdige aantal actieve taken',
      'jobForceUtc' => 'UTC-tijdzone afdwingen',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon max aantal processen',
      'daemonProcessTimeout' => 'Daemon proces timeout',
      'cronDisabled' => 'Cron Uitschakelen',
      'maintenanceMode' => 'Onderhoudsmodus',
      'useWebSocket' => 'WebSocket gebruiken',
      'passwordRecoveryDisabled' => 'Wachtwoordherstel uitschakelen',
      'passwordRecoveryForAdminDisabled' => 'Wachtwoordherstel voor beheerders uitschakelen',
      'passwordRecoveryForInternalUsersDisabled' => 'Wachtwoordherstel voor interne gebruikers uitschakelen',
      'passwordRecoveryNoExposure' => 'Voorkom blootstelling van e-mail adres op wachtwoord herstel formulier',
      'passwordGenerateLength' => 'Lengte van de gegenereerde wachtwoorden',
      'passwordStrengthLength' => 'Minimale lengte van het wachtwoord',
      'passwordStrengthLetterCount' => 'Aantal benodigde letters in wachtwoord',
      'passwordStrengthNumberCount' => 'Aantal cijfers dat nodig is voor het wachtwoord',
      'passwordStrengthBothCases' => 'Wachtwoord moet zowel hoofdletters als kleine letters bevatten',
      'passwordStrengthSpecialCharacterCount' => 'Aantal speciale tekens vereist in wachtwoord',
      'auth2FA' => '2-Factor authenticatie inschakelen',
      'auth2FAForced' => 'Voorkom blootstelling van e-mail adres op wachtwoord herstel formulier',
      'auth2FAMethodList' => 'Beschikbare 2FA-methoden',
      'auth2FAInPortal' => 'Sta 2FA toe in portalen',
      'workingTimeCalendar' => 'Werktijd Kalender',
      'oidcClientId' => 'OIDC Klant ID',
      'oidcClientSecret' => 'OIDC cliënt geheim',
      'oidcAuthorizationRedirectUri' => 'OIDC autorisatie omleiding URI',
      'oidcAuthorizationEndpoint' => 'OIDC autorisatie eindpunt',
      'oidcTokenEndpoint' => 'OIDC token eindpunt',
      'oidcUserInfoEndpoint' => 'OIDC UserInfo Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Eindpunt websleutel instellen',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT toegestane handtekening algoritmen',
      'oidcScopes' => 'OIDC scopes',
      'oidcGroupClaim' => 'Claim van OIDC-groep',
      'oidcCreateUser' => 'OIDC Creëer gebruiker',
      'oidcUsernameClaim' => 'OIDC gebruikersnaam Claim',
      'oidcTeams' => 'OIDC teams',
      'oidcSync' => 'OIDC synchronisatie',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC fallback login toestaan voor gewone gebruikers',
      'oidcAllowAdminUser' => 'OIDC Inlog OIDC toestaan voor admin-gebruikers',
      'oidcLogoutUrl' => 'OIDC Uitlog URL',
      'oidcAuthorizationPrompt' => 'OIDC autorisatieprompt',
      'pdfEngine' => 'PDF Engine',
      'quickSearchFullTextAppendWildcard' => 'Wildcard toevoegen aan snel zoeken',
      'authIpAddressCheck' => 'Toegang beperken op IP-adres',
      'authIpAddressWhitelist' => 'Whitelist IP-adres',
      'authIpAddressCheckExcludedUsers' => 'Users uitgezonderd van controle',
      'availableReactions' => 'Beschikbare reacties',
      'smtpPort' => 'Poort',
      'smtpSecurity' => 'Beveiliging',
      'smtpUsername' => 'Gebruikersnaam',
      'smtpPassword' => 'Wachtwoord'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 EUR',
        2 => '€ 10',
        3 => '10 €'
      ],
      'personNameFormat' => [
        'firstLast' => 'Voornaam Achternaam',
        'lastFirst' => 'Achternaam Voornaam',
        'firstMiddleLast' => 'Voornaam tussenvoegsel Achternaam',
        'lastFirstMiddle' => 'Achternaam Voornaam Tussenvoegsel'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Berichten',
        'Status' => 'Status-updates',
        'EmailReceived' => 'Ontvangen e-mails'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'E-mail',
        'Sms' => 'SMS'
      ],
      'smtpSecurity' => [
        'SSL' => 'SSL/TLS',
        'TLS' => 'STARTTLS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Gebruikers die kunnen inloggen ongeacht of hun IP-adres in de whitelist staat.',
      'authIpAddressWhitelist' => 'Een lijst van IP-adressen of reeksen in CIDR-notatie.

Portalen worden niet beïnvloed door de beperking.',
      'workingTimeCalendar' => 'Een werktijd kalender die standaard op alle gebruikers wordt toegepast.',
      'displayListViewRecordCount' => 'Een totaal aantal records wordt getoond in de lijstweergave.',
      'currencyList' => 'Welke munteenheden zullen in het systeem beschikbaar zijn.',
      'activitiesEntityList' => 'Welke records beschikbaar zullen zijn in het Activiteiten paneel.',
      'historyEntityList' => 'Welke records beschikbaar zullen zijn in het Geschiedenis paneel.',
      'calendarEntityList' => 'Welke records zullen beschikbaar zijn in de Kalender.',
      'addressStateList' => 'Provincie suggesties voor adresvelden.',
      'addressCityList' => 'Plaats suggesties voor adresvelden.',
      'addressCountryList' => 'Land suggesties voor adresvelden.',
      'exportDisabled' => 'Gebruikers zullen niet in staat zijn om records te exporteren. Alleen beheerders kunnen dat.',
      'globalSearchEntityList' => 'Welke records kunnen worden doorzocht met Globaal zoeken.',
      'siteUrl' => 'Een URL van deze EspoCRM instantie. U moet deze wijzigen als u naar een ander domein verhuist.',
      'useCache' => 'Niet aanbevolen om uit te schakelen, tenzij voor ontwikkelingsdoeleinden.',
      'useWebSocket' => 'WebSocket maakt interactieve communicatie in twee richtingen mogelijk tussen een server en een browser. Vereist het opzetten van de WebSocket daemon op je server. Zie de documentatie voor meer info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Alleen portaalgebruikers kunnen het wachtwoord herstellen.',
      'passwordRecoveryNoExposure' => 'Het zal niet mogelijk zijn te bepalen of een bepaald e-mailadres in het systeem is geregistreerd.',
      'emailAddressLookupEntityTypeList' => 'Voor e-mail adres automatisch aanvullen.',
      'emailAddressSelectEntityTypeList' => 'Beschikbare entiteittypes bij het zoeken naar een e-mailadres vanuit een formulier.',
      'emailNotificationsDelay' => 'Een bericht kan binnen de opgegeven termijn worden bewerkt voordat de kennisgeving wordt verzonden.',
      'outboundEmailFromAddress' => 'Het e-mailadres van het systeem.',
      'busyRangesEntityList' => 'Waarmee rekening wordt gehouden bij het tonen van bezette tijden in planner en tijdlijn.',
      'massEmailVerp' => 'Variabele retourpad van de enveloppe. Voor een betere afhandeling van gekaatste berichten. Zorg ervoor dat uw SMTP-provider dit ondersteunt.',
      'recordsPerPage' => 'Aantal zichtbare records in lijsten.',
      'recordsPerPageSmall' => 'Aantal records in relatie panelen.',
      'recordsPerPageSelect' => 'Aantal records dat aanvankelijk wordt weergegeven bij het selecteren van records.',
      'recordsPerPageKanban' => 'Aantal records dat aanvankelijk in kanban-kolommen wordt weergegeven.',
      'outboundEmailIsShared' => 'Sta gebruikers toe om e-mails van dit adres te verzenden.',
      'followCreatedEntities' => 'Gebruikers zullen automatisch records volgen die zij hebben gecreëerd.',
      'emailMessageMaxSize' => 'Alle inkomende e-mails boven een bepaalde grootte worden overgeslagen.',
      'authTokenLifetime' => 'Bepaalt hoe lang tokens kunnen bestaan.
0 - betekent geen verlopen.',
      'authTokenMaxIdleTime' => 'Bepaalt hoe lang de laatste toegangstokens kunnen bestaan.
0 - betekent geen verlopen.',
      'userThemesDisabled' => 'Gebruikers kunnen geen ander thema kiezen.',
      'ldapUsername' => 'De volledige systeemgebruikers DN waarmee andere gebruikers kunnen worden doorzocht. Bijv. "CN = LDAP Systeemgebruiker, OU = gebruikers, OU = espocrm, DC = test, DC = lan".',
      'ldapPassword' => 'Het wachtwoord voor toegang tot de LDAP-server.',
      'ldapAuth' => 'Inloggegevens voor de LDAP-server.',
      'ldapUserNameAttribute' => 'Het kenmerk om de gebruiker te identificeren.
Bijv. "userPrincipalName" of "sAMAccountName" voor Active Directory, "uid" voor OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass-kenmerk voor gebruikers zoeken. Bijv. "persoon" voor AD, "inetOrgPerson" voor OpenLDAP.',
      'ldapAccountCanonicalForm' => 'Het type van uw account canoniek vorm. Er zijn 4 opties:

- Dn\' - het formulier in het formaat \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- Gebruikersnaam\' - het formulier \'tester\'.

- Backslash\' - het formulier \'COMPANY\\tester\'.

- Principal\' - het formulier \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'De optie om de gebruikersnaam op te maken in het DN-formulier.',
      'ldapBaseDn' => 'De standaardbasis-DN die wordt gebruikt voor het doorzoeken van gebruikers. Bijv. "OU = gebruikers, OU = espocrm, DC = test, DC = lan".',
      'ldapTryUsernameSplit' => 'De mogelijkheid om een gebruikersnaam te delen met het domein.',
      'ldapOptReferrals' => 'als verwijzingen moeten worden gevolgd naar de LDAP-cliënt.',
      'ldapPortalUserLdapAuth' => 'Sta gebruikers van het portaal toe om LDAP-authenticatie te gebruiken in plaats van Espo-authenticatie.',
      'ldapCreateEspoUser' => 'Met deze optie kan EspoCRM een gebruiker aanmaken uit het LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP-kenmerk dat wordt gebruikt om de voornaam van de gebruiker te bepalen. Bijv. "gegeven naam".',
      'ldapUserLastNameAttribute' => 'LDAP-kenmerk dat wordt gebruikt om de achternaam van de gebruiker te bepalen. Bijv. "Sn".',
      'ldapUserTitleAttribute' => 'LDAP-kenmerk dat wordt gebruikt om de gebruikerstitel te bepalen. Bijv. "titel".',
      'ldapUserEmailAddressAttribute' => 'LDAP-kenmerk dat wordt gebruikt om het e-mailadres van de gebruiker te bepalen. Bijv. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP-kenmerk dat wordt gebruikt om het gebruikerstelefoonnummer te bepalen. Bijv. "telefoon nummer".',
      'ldapUserLoginFilter' => 'Het filter waarmee gebruikers die EspoCRM kunnen gebruiken, kunnen worden beperkt. Bijv. "memberOf = CN = espoGroup, OU = groups, OU = espocrm, DC = test, DC = lan".',
      'ldapAccountDomainName' => 'Het domein dat wordt gebruikt voor autorisatie voor de LDAP-server.',
      'ldapAccountDomainNameShort' => 'Het korte domein dat wordt gebruikt voor de autorisatie van de LDAP-server.',
      'ldapUserTeams' => 'Groepen voor gecreëerde gebruiker. Zie gebruikersprofiel voor meer informatie.',
      'ldapUserDefaultTeam' => 'Standaard groep voor aangemaakte gebruiker. Zie gebruikersprofiel voor meer informatie.',
      'ldapPortalUserPortals' => 'Standaardportalen voor gemaakte portalen voor de gebruiker',
      'ldapPortalUserRoles' => 'Standaard functies voor gemaakte portaalgebruiker',
      'b2cMode' => 'Standaard is EspoCRM aangepast voor B2B. U kunt het omschakelen naar B2C.',
      'currencyDecimalPlaces' => 'Aantal decimalen. Als deze leeg is, worden alle niet-lege decimalen weergegeven.',
      'aclStrictMode' => 'Ingeschakeld: toegang tot scopes is verboden als dit niet is opgegeven in functie.

Uitgeschakeld: toegang tot scopes is toegestaan ​​als dit niet is opgegeven in functie.',
      'aclAllowDeleteCreated' => 'Gebruikers zullen in staat zijn om de records die ze hebben gecreëerd te verwijderen, zelfs als ze geen verwijderbare toegang hebben.',
      'textFilterUseContainsForVarchar' => 'Indien niet aangevinkt, dan wordt de \'begint met\'-operator gebruikt. U kunt het wildcard \'%\' gebruiken.',
      'streamEmailNotificationsEntityList' => 'E-mailnotificaties over stream-updates van gevolgde records. Gebruikers ontvangen alleen e-mailberichten voor specifieke typen entiteiten.',
      'authTokenPreventConcurrent' => 'Gebruikers kunnen niet op meerdere apparaten tegelijk worden ingelogd.',
      'emailAddressIsOptedOutByDefault' => 'Bij het aanmaken van een nieuw record wordt het e-mailadres als afgemeld gemarkeerd.',
      'cleanupDeletedRecords' => 'Verwijderde records worden na een tijdje uit de database verwijderd.',
      'jobRunInParallel' => 'Opdrachten zullen in parallelle processen worden uitgevoerd.',
      'jobPoolConcurrencyNumber' => 'Maximaal aantal processen lopen gelijktijdig.',
      'jobMaxPortion' => 'Maximaal aantal verwerkte opdrachten per opdracht.',
      'jobForceUtc' => 'Gebruik de UTC-tijdzone voor geplande taken. Anders wordt de tijdzone gebruikt die is ingesteld in de instellingen.',
      'daemonInterval' => 'Interval tussen proces cron loopt in seconden.',
      'daemonMaxProcessNumber' => 'Maximaal aantal cron processen lopen gelijktijdig.',
      'daemonProcessTimeout' => 'Maximale uitvoeringstijd (in seconden) toegewezen voor een enkel cronproces.',
      'cronDisabled' => 'Cron wordt niet uitgevoerd.',
      'maintenanceMode' => 'Alleen beheerders hebben toegang tot het systeem.',
      'oidcGroupClaim' => 'Een bewering om te gebruiken voor het in kaart brengen van teams.',
      'oidcFallback' => 'Aanmelding met gebruikersnaam/wachtwoord toestaan.',
      'oidcCreateUser' => 'Maak een nieuwe gebruiker aan in Espo als er geen overeenkomende gebruiker is gevonden.',
      'oidcSync' => 'Gebruikersgegevens synchroniseren (bij elke aanmelding).',
      'oidcSyncTeams' => 'Gebruikers teams synchroniseren (bij elke aanmelding).',
      'oidcUsernameClaim' => 'Een claim om te gebruiken voor een gebruikersnaam (voor het matchen en aanmaken van gebruikers).',
      'oidcTeams' => 'Espo-teams gemapt tegen groepen/teams/rollen van de identity provider. Teams met een lege mapping waarde worden altijd toegewezen aan een gebruiker (bij het aanmaken of synchroniseren).',
      'oidcLogoutUrl' => 'Een URL waarnaar de browser zal doorverwijzen na het afmelden bij Espo. Bedoeld voor het wissen van de sessiegegevens in de browser en het afmelden aan de providerzijde. Meestal bevat de URL een redirect-URL parameter, om terug te keren naar Espo.

Beschikbare plaatshouders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Voeg een wildcard toe aan een autocomplete zoekopdracht wanneer zoeken op volledige tekst is ingeschakeld. Vermindert de zoekprestaties.',
      'smtpServer' => 'Indien leeg, dan wordt de e-mailaccount van de groep met het corresponderende e-mailadres gebruikt.'
    ],
    'labels' => [
      'Group Tab' => 'Tabblad Groep',
      'Divider' => 'Scheider',
      'System' => 'Systeem',
      'Locale' => 'Lokaal',
      'Search' => 'Zoeken',
      'Misc' => 'Overig',
      'SMTP' => 'SMTP',
      'General' => 'Algemeen',
      'Phone Numbers' => 'Telefoonnummers',
      'Navbar' => 'Navigatiebalk',
      'Dashboard' => 'Dashboard',
      'Configuration' => 'Configuratie',
      'In-app Notifications' => 'In-app notificaties',
      'Email Notifications' => 'E-mail notificaties',
      'Currency Settings' => 'Valuta instellingen',
      'Currency Rates' => 'Valuta wisselkoers',
      'Mass Email' => 'Verzamel e-mail',
      'Scheduled Send' => 'Geplande verzending',
      'Test Connection' => 'Test verbinding',
      'Connecting' => 'Verbinding maken ...',
      'Activities' => 'Activiteiten',
      'Admin Notifications' => 'Beheerdersmeldingen',
      'Passwords' => 'Wachtwoorden',
      '2-Factor Authentication' => '2-Factor authenticatie',
      'Attachments' => 'Bijlagen',
      'IdP Group' => 'IdP Groep',
      'Access' => 'Toegang',
      'Strength' => 'Sterkte',
      'Recovery' => 'Herstel'
    ],
    'messages' => [
      'ldapTestConnection' => 'De verbinding is succesvol tot stand gebracht.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Typ **@gebruikersnaam** om de gebruiker in de post te vermelden.',
      'infoSyntax' => 'Beschikbare markering syntaxis',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Kon de gebruiker \'{userName}\' niet toevoegen aan de volgers. De gebruiker heeft geen \'stream\' toegang tot het record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'meerregelige code',
      'strongText' => 'vette tekst',
      'emphasizedText' => 'benadrukte tekst',
      'deletedText' => 'verwijderde tekst',
      'blockquote' => 'blokquote',
      'link' => 'linktekst'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Naam',
      'roles' => 'Functies',
      'layoutSet' => 'Lay-out set',
      'workingTimeCalendar' => 'Werktijd Kalender',
      'positionList' => 'Overzichtslijst',
      'userRole' => 'Rol gebruiker'
    ],
    'links' => [
      'users' => 'Gebruikers',
      'notes' => 'Notities',
      'roles' => 'Functies',
      'layoutSet' => 'Lay-out set',
      'workingTimeCalendar' => 'Werktijd Kalender',
      'inboundEmails' => 'Groep e-mailaccounts',
      'groupEmailFolders' => 'Groep e-mailmappen'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'Een kalender wordt toegepast op gebruikers die dit team als standaardteam hebben ingesteld.',
      'layoutSet' => 'Biedt de mogelijkheid om lay-outs te hebben die verschillen van de standaard lay-outs. Lay-out set zal worden toegepast op gebruikers die deze groep als standaard groep hebben ingesteld.',
      'roles' => 'Alle gebruikers van deze groep krijgen de rechten uit de geselecteerde rollen.',
      'positionList' => 'Beschikbare functies in deze groep. Zoals Verkoop, Manager ed.'
    ],
    'labels' => [
      'Create Team' => 'Creëer Groep'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Naam',
      'body' => 'Inhoud',
      'entityType' => 'Type entiteit',
      'header' => 'Koptekst',
      'footer' => 'Voettekst',
      'leftMargin' => 'Linker marge',
      'topMargin' => 'Boven marge',
      'rightMargin' => 'Rechter marge',
      'bottomMargin' => 'Onderste marge',
      'printFooter' => 'Print voettekst',
      'printHeader' => 'Kop afdrukken',
      'footerPosition' => 'Voettekst positie',
      'headerPosition' => 'Koptekst Positie',
      'variables' => 'Beschikbare aanduidingen',
      'pageOrientation' => 'Paginaoriëntatie',
      'pageFormat' => 'Papierformaat',
      'pageWidth' => 'Paginabreedte (mm)',
      'pageHeight' => 'Pagina Hoogte (mm)',
      'fontFace' => 'Lettertype',
      'title' => 'Titel',
      'style' => 'Stijl'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Creëer Sjabloon'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Portret',
        'Landscape' => 'Landschap'
      ],
      'pageFormat' => [
        'Custom' => 'Aangepast'
      ],
      'placeholders' => [
        'pagebreak' => 'Pagina-einde',
        'today' => 'Vandaag (date)',
        'now' => 'Nu (datum-tijd)'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'footer' => 'Gebruik {pageNumber} om het paginanummer af te drukken.',
      'variables' => 'Kopieer en plak de benodigde aanduiding naar koptekst, hoofdtekst of voettekst.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Naam',
      'userName' => 'Gebruikersnaam',
      'title' => 'Titel',
      'type' => 'Type',
      'isAdmin' => 'Is beheerder',
      'defaultTeam' => 'Standaardgroep',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Telefoon',
      'roles' => 'Functies',
      'portals' => 'Portalen',
      'portalRoles' => 'Portaal functies',
      'teamRole' => 'Positie',
      'password' => 'Wachtwoord',
      'currentPassword' => 'Huidig wachtwoord',
      'passwordConfirm' => 'Bevestig wachtwoord',
      'newPassword' => 'Nieuw wachtwoord',
      'newPasswordConfirm' => 'Bevestig nieuw wachtwoord',
      'yourPassword' => 'Je huidige wachtwoord',
      'avatar' => 'Avatar',
      'avatarColor' => 'Avatar Kleur',
      'isActive' => 'Is actief',
      'isPortalUser' => 'Is portaalgebruiker',
      'contact' => 'Contact',
      'accounts' => 'Relaties',
      'account' => 'Relatie (Primair)',
      'sendAccessInfo' => 'Verzend e-mail met inlog informatie naar gebruiker',
      'portal' => 'Portaal',
      'gender' => 'Geslacht',
      'position' => 'Positie in groep',
      'ipAddress' => 'IP adres',
      'passwordPreview' => 'Wachtwoord voorbeeld',
      'isSuperAdmin' => 'Is Superbeheerder',
      'lastAccess' => 'Laatste toegang',
      'apiKey' => 'API sleutel',
      'secretKey' => 'Geheime sleutel',
      'dashboardTemplate' => 'Dashboard sjabloon',
      'workingTimeCalendar' => 'Werktijd Kalender',
      'auth2FA' => '2FA',
      'authMethod' => 'Authenticatie methode',
      'auth2FAEnable' => '2-Factor authenticatie inschakelen',
      'auth2FAMethod' => '2FA-methode',
      'auth2FATotpSecret' => '2FA TOTP-geheim',
      'layoutSet' => 'Lay-out Set',
      'acceptanceStatus' => 'Acceptatiestatus',
      'acceptanceStatusMeetings' => 'Acceptatiestatus (vergaderingen)',
      'acceptanceStatusCalls' => 'Acceptatiestatus (oproepen)'
    ],
    'links' => [
      'defaultTeam' => 'Standaard groep',
      'teams' => 'Groepen',
      'roles' => 'Functies',
      'notes' => 'Notities',
      'portals' => 'Portalen',
      'portalRoles' => 'Portaal functies',
      'contact' => 'Contact',
      'accounts' => 'Relaties',
      'account' => 'Relatie (Primair)',
      'tasks' => 'Taken',
      'userData' => 'Gebruikers gegevens',
      'dashboardTemplate' => 'Dashboard sjabloon',
      'workingTimeCalendar' => 'Werktijd Kalender',
      'workingTimeRanges' => 'Werktijd uitzonderingen',
      'layoutSet' => 'Lay-out Set',
      'targetLists' => 'Doellijsten'
    ],
    'labels' => [
      'Create User' => 'Creëer Gebruiker',
      'Generate' => 'Genereer',
      'Access' => 'Toegang',
      'Preferences' => 'Voorkeuren',
      'Change Password' => 'Wachtwoord wijzigen',
      'Teams and Access Control' => 'Groep en toegangsbeheer',
      'Forgot Password?' => 'Wachtwoord vergeten?',
      'Password Change Request' => 'Verzoek voor wijzigen wachtwoord',
      'Email Address' => 'E-mailadres',
      'External Accounts' => 'Externe Accounts',
      'Email Accounts' => 'E-mail Accounts',
      'Portal' => 'Portaal',
      'Create Portal User' => 'Creëer Portaalgebruiker',
      'Proceed w/o Contact' => 'Ga verder zonder contact',
      'Generate New API Key' => 'Genereer nieuwe API sleutel',
      'Generate New Password' => 'Genereer een nieuw wachtwoord',
      'Send Password Change Link' => 'Stuur wachtwoordwijzigingslink',
      'Back to login form' => 'Terug naar het inlogformulier',
      'Requirements' => 'Eisen',
      'Security' => 'Beveiliging',
      'Reset 2FA' => 'Reset 2FA',
      'Code' => 'Code',
      'Secret' => 'Geheim',
      'Send Code' => 'Code verzenden',
      'Login Link' => 'Inloglink'
    ],
    'tooltips' => [
      'defaultTeam' => 'Alle door gebruiker gecreëerde records worden standaard aan de groep gekoppeld.',
      'userName' => 'Letters a-z, cijfers 0-9 en underscores zijn toegestaan.',
      'isAdmin' => 'Beheerder heeft overal toegang.',
      'isActive' => 'Indien niet aangevinkt, zal de gebruiker niet kunnen inloggen.',
      'teams' => 'Tot welke groep deze gebruiker behoord. Toegang beheer is afhankelijk van groep regels.',
      'roles' => 'Aanvullende toegangs regels. Gebruik dit als een gebruiker tot geen enkele groep behoord of als er meer rechten gegeven moeten worden.',
      'portalRoles' => 'Extra portaal functies. Gebruik het om het toegangscontrole niveau exclusief voor deze gebruiker uit te breiden.',
      'portals' => 'Portalen waartoe deze gebruiker toegang heeft.',
      'layoutSet' => 'Lay-outs uit een opgegeven set worden toegepast voor de gebruiker in plaats van de standaard lay-outs.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'De 2FA-methode is niet volledig geconfigureerd in het systeem.',
      'loginAs' => 'Open de inloglink in een incognitovenster om uw huidige sessie te behouden. Gebruik uw beheerdersgegevens om in te loggen.',
      'sendPasswordChangeLinkConfirmation' => 'Er wordt een e-mail met een unieke link naar de gebruiker gestuurd waarmee hij zijn wachtwoord kan wijzigen. De link vervalt na een bepaalde tijd.',
      'passwordRecoverySentIfMatched' => 'Aangenomen dat de ingevoerde gegevens overeenkomen met een gebruikersaccount.',
      'passwordStrengthLength' => 'Moet minstens {length} tekens lang zijn.',
      'passwordStrengthLetterCount' => 'Moet ten minste {count} letter(s) bevatten.',
      'passwordStrengthNumberCount' => 'Moet ten minste {count} cijfers bevatten.',
      'passwordStrengthSpecialCharacterCount' => 'Moet minstens {count} speciale teken(s) bevatten.',
      'passwordStrengthBothCases' => 'Moet zowel hoofdletters als kleine letters bevatten.',
      'passwordWillBeSent' => 'Wachtwoord wordt naar het e-mailadres van de gebruiker verzonden.',
      'passwordChanged' => 'Het wachtwoord is gewijzigd',
      'userCantBeEmpty' => 'Gebruikersnaam kan niet leeg zijn',
      'wrongUsernamePassword' => 'Onjuiste gebruikersnaam/wachtwoord',
      'failedToLogIn' => 'Aanmelden mislukt',
      'emailAddressCantBeEmpty' => 'E-mailadres mag niet leeg zijn',
      'userNameEmailAddressNotFound' => 'Gebruikersnaam/E-mail adres niet gevonden',
      'forbidden' => 'Toegang niet juist, probeer later',
      'uniqueLinkHasBeenSent' => 'Een unieke URL is naar het gespecificeerde e-mail adres verzonden.',
      'passwordChangedByRequest' => 'Het wachtwoord is gewijzigd.',
      'setupSmtpBefore' => 'Je moet [SMTP-instellingen]({url}) instellen om het systeem in staat te stellen een wachtwoord in e-mail te verzenden.',
      'userNameExists' => 'Gebruikersnaam bestaat al',
      'loginError' => 'Fout opgetreden',
      'wrongCode' => 'Verkeerde code',
      'codeIsRequired' => 'Code is vereist',
      'yourAuthenticationCode' => 'Uw authenticatie code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Selecteer een telefoonnummer dat zal worden gebruikt voor 2FA.',
      'choose2FaEmailAddress' => 'Selecteer een e-mailadres dat gebruikt zal worden voor 2FA. Het is sterk aanbevolen om een niet-primair e-mailadres te gebruiken.',
      'enterCodeSentInEmail' => 'Voer de code in die naar uw e-mailadres is gestuurd.',
      'enterCodeSentBySms' => 'Voer de code in die per SMS naar uw telefoonnummer is gestuurd.',
      'enterTotpCode' => 'Voer een code van uw authenticatie-app in.',
      'verifyTotpCode' => 'Scan de QR-code met uw mobiele authenticator app. Als je problemen hebt met scannen, kun je het geheim handmatig invoeren. Daarna ziet u een 6-cijferige code in uw applicatie. Voer deze code in het onderstaande veld in.',
      'generateAndSendNewPassword' => 'Een nieuw wachtwoord zal worden gegenereerd en naar het e-mailadres van de gebruiker worden verzonden.',
      'security2FaResetConfirmation' => 'Weet u zeker dat u de huidige 2FA-instellingen wilt resetten?',
      'auth2FARequiredHeader' => '2 factor authenticatie vereist',
      'auth2FARequired' => 'Je moet 2 factor authenticatie instellen. Gebruik een authenticatie applicatie op uw mobiele telefoon (bijv. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'De gebruiker is niet gevonden in EspoCRM. Neem contact op met uw beheerder om de gebruiker aan te maken.',
      'passwordChangeRequestNotFound' => 'Het verzoek om het wachtwoord te wijzigen is niet gevonden. Het kan verlopen zijn. Probeer een nieuw wachtwoord op te vragen vanaf de [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Standaard Team moet een van de Teams van de gebruiker zijn'
    ],
    'options' => [
      'gender' => [
        '' => 'Niet ingesteld',
        'Male' => 'Man',
        'Female' => 'Vrouw',
        'Neutral' => 'Neutraal'
      ],
      'type' => [
        'regular' => 'Regelmatig',
        'admin' => 'Beheerder',
        'portal' => 'Portaal',
        'system' => 'Systeem',
        'super-admin' => 'Superbeheerder',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'API sleutel',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Alleen mijn groep',
      'onlyMe' => 'Alleen ik'
    ],
    'presetFilters' => [
      'active' => 'Actief',
      'activePortal' => 'Portaal actief',
      'activeApi' => 'API actief'
    ],
    'actions' => [
      'changePosition' => 'Positie wijzigen'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Creëer Webhook'
    ],
    'fields' => [
      'event' => 'Actie',
      'url' => 'URL',
      'isActive' => 'Is actief',
      'user' => 'API gebruiker',
      'entityType' => 'Type entiteit',
      'field' => 'Veld',
      'secretKey' => 'Geheime sleutel'
    ],
    'links' => [
      'user' => 'Gebruiker',
      'queueItems' => 'Queue Items'
    ]
  ],
  'WebhookEventQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'target' => 'Target',
      'data' => 'Data',
      'isProcessed' => 'Is Processed'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Evenement',
      'webhook' => 'Webhook',
      'target' => 'Doel',
      'data' => 'Gegevens',
      'status' => 'Status',
      'processedAt' => 'Verwerkt op',
      'attempts' => 'Pogingen',
      'processAt' => 'Verwerking bij'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'In behandeling',
        'Success' => 'Succes',
        'Failed' => 'Mislukt'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Kalender maken'
    ],
    'fields' => [
      'timeZone' => 'Tijdzone',
      'timeRanges' => 'Werkdag schema',
      'weekday0' => 'Zon',
      'weekday1' => 'Ma',
      'weekday2' => 'Di',
      'weekday3' => 'Woe',
      'weekday4' => 'Do',
      'weekday5' => 'Vr',
      'weekday6' => 'Zat',
      'weekday0TimeRanges' => 'Zon Schema',
      'weekday1TimeRanges' => 'Ma Schema',
      'weekday2TimeRanges' => 'Di Schema',
      'weekday3TimeRanges' => 'Woe Schema',
      'weekday4TimeRanges' => 'Do Schema',
      'weekday5TimeRanges' => 'Vr Schema',
      'weekday6TimeRanges' => 'Zat Schema'
    ],
    'links' => [
      'ranges' => 'Uitzonderingen'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Uitzondering maken',
      'Calendars' => 'Kalenders'
    ],
    'fields' => [
      'timeRanges' => 'Schema',
      'dateStart' => 'Datum begin',
      'dateEnd' => 'Datum einde',
      'type' => 'Type',
      'calendars' => 'Kalenders',
      'users' => 'Gebruikers'
    ],
    'links' => [
      'calendars' => 'Kalenders',
      'users' => 'Gebruikers'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Geen werktijd',
        'Working' => 'Werktijd'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actueel'
    ],
    'tooltips' => [
      'calendars' => 'Kalenders om de uitzondering op toe te passen. De uitzondering wordt toegepast op alle gebruikers van de geselecteerde kalenders.

Laat het veld leeg als je de uitzondering alleen wilt toepassen op specifieke gebruikers.',
      'users' => 'Specifieke gebruikers om de uitzondering op toe te passen.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Naam',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'billingAddress' => 'Factuuradres',
      'shippingAddress' => 'Vestigingsadres',
      'description' => 'Beschrijving',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Titel',
      'contactIsInactive' => 'Inactief',
      'campaign' => 'Campagne',
      'targetLists' => 'Doellijsten',
      'targetList' => 'Doellijst',
      'originalLead' => 'Oorspronkelijke lead'
    ],
    'links' => [
      'contacts' => 'Contacten',
      'contactsPrimary' => 'Contacten (primair)',
      'opportunities' => 'Kansen',
      'cases' => 'Tickets',
      'documents' => 'Documenten',
      'meetingsPrimary' => 'Vergaderingen (uitgebreid)',
      'callsPrimary' => 'Gesprekken (expanded)',
      'tasksPrimary' => 'Taken (uitgebreid)',
      'emailsPrimary' => 'E-mails (uitgebreid)',
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campagne log',
      'campaign' => 'Campagne',
      'portalUsers' => 'Portaalgebruikers',
      'originalLead' => 'Oorspronkelijke lead'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Rechtstreekse klant',
        'Investor' => 'Investeerder',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
        '' => ''
      ],
      'industry' => [
        'Aerospace' => 'Ruimtevaart',
        'Agriculture' => 'Landbouw',
        'Advertising' => 'Reclame',
        'Apparel & Accessories' => 'Kleding & Accessoires',
        'Architecture' => 'Architectuur',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankwezen',
        'Biotechnology' => 'Biotechnologie',
        'Building Materials & Equipment' => 'Bouwmaterialen en -apparatuur',
        'Chemical' => 'Chemisch',
        'Construction' => 'Bouw',
        'Computer' => 'Computer',
        'Defense' => 'Defensie',
        'Creative' => 'Creatief',
        'Culture' => 'Cultuur',
        'Consulting' => 'Consultancy',
        'Education' => 'Onderwijs',
        'Electronics' => 'Elektronica',
        'Electric Power' => 'Elektrische energie',
        'Energy' => 'Energie',
        'Entertainment & Leisure' => 'Amusement & Vrije tijd',
        'Finance' => 'Financiën',
        'Food & Beverage' => 'Eten & Drinken',
        'Grocery' => 'Kruidenier',
        'Hospitality' => 'Gastvrijheid',
        'Healthcare' => 'Gezondheidszorg',
        'Insurance' => 'Verzekeringen',
        'Legal' => 'Juridisch',
        'Manufacturing' => 'Productie',
        'Mass Media' => 'Media',
        'Mining' => 'Mijnbouw',
        'Music' => 'Muziek',
        'Marketing' => 'Marketing',
        'Publishing' => 'Uitgeverij',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Vastgoed',
        'Retail' => 'Retailhandel',
        'Shipping' => 'Scheepvaart',
        'Service' => 'Service',
        'Support' => 'Ondersteuning',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telecommunicatie',
        'Television' => 'Televisie',
        'Testing, Inspection & Certification' => 'Testen, inspectie en certificering',
        'Transportation' => 'Transport',
        'Travel' => 'Reizen',
        'Venture Capital' => 'Durfkapitaal',
        'Wholesale' => 'Groothandel',
        'Water' => 'Water',
        '' => ''
      ]
    ],
    'labels' => [
      'Create Account' => 'Creëer Relatie',
      'Copy Billing' => 'Kopie factuur',
      'Set Primary' => 'Primair instellen'
    ],
    'presetFilters' => [
      'customers' => 'Klanten',
      'partners' => 'Partners',
      'recentlyCreated' => 'Recent gecreëerd'
    ],
    'tabs' => [
      'Account' => 'Account',
      'Support' => 'Support'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Maand',
      'week' => 'Week',
      'day' => 'Dag',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Dag',
      'timeline' => 'Tijdlijn'
    ],
    'labels' => [
      'Today' => 'Vandaag',
      'Create' => 'Creëer',
      'Shared' => 'Gedeeld',
      'Add User' => 'Voeg gebruiker toe',
      'current' => 'huidige',
      'time' => 'tijd',
      'User List' => 'Gebruikers lijst',
      'View Calendar' => 'Bekijk de kalender',
      'Create Shared View' => 'Creëer gedeelde weergave',
      'Edit Shared View' => 'Edit Shared View',
      'Shared Mode Options' => 'Shared Mode Options',
      'Manage Users' => 'Gebruikers beheren'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'direction' => 'Richting',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herinneringen',
      'account' => 'Relatie',
      'acceptanceStatus' => 'Acceptatiestatus',
      'uid' => 'UID'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Gepland',
        'Held' => 'Gedaan',
        'Not Held' => 'Niet gedaan'
      ],
      'direction' => [
        'Outbound' => 'Uitgaand',
        'Inbound' => 'Inkomend'
      ],
      'acceptanceStatus' => [
        'None' => 'Geen',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
        'Tentative' => 'Voorlopig'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Gedaan',
      'setNotHeld' => 'Niet gedaan'
    ],
    'labels' => [
      'Create Call' => 'Creëer Gesprek',
      'Set Held' => 'Gedaan',
      'Set Not Held' => 'Niet gedaan',
      'Send Invitations' => 'Uitnodiging versturen'
    ],
    'presetFilters' => [
      'planned' => 'Gepland',
      'held' => 'Gedaan',
      'todays' => 'Vandaag'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Naam',
      'description' => 'Beschrijving',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start datum',
      'endDate' => 'Eind datum',
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Doellijsten uitgesloten',
      'sentCount' => 'Verzonden',
      'openedCount' => 'Geopend',
      'clickedCount' => 'Geklikt',
      'optedOutCount' => 'Afgemeld',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Aangemeld',
      'hardBouncedCount' => 'Harde bounce',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Lead gecreëerd',
      'revenue' => 'Omzet',
      'revenueConverted' => 'Omzet (geconverteerd)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (geconverteerd)',
      'budgetCurrency' => 'Budgetvaluta',
      'contactsTemplate' => 'Contacten-sjabloon',
      'leadsTemplate' => 'Leads sjabloon',
      'accountsTemplate' => 'Relaties-sjabloon',
      'usersTemplate' => 'Gebruikers Sjabloon',
      'mailMergeOnlyWithAddress' => 'Records overslaan zonder ingevuld adres'
    ],
    'links' => [
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Doellijsten uitgesloten',
      'accounts' => 'Relaties',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'opportunities' => 'Kansen',
      'campaignLogRecords' => 'Log',
      'massEmails' => 'Verzamel e-mails',
      'trackingUrls' => 'Tracking URLs',
      'contactsTemplate' => 'Contacten-sjabloon',
      'leadsTemplate' => 'Leads sjabloon',
      'accountsTemplate' => 'Relaties-sjabloon',
      'usersTemplate' => 'Gebruikers Sjabloon'
    ],
    'options' => [
      'type' => [
        'Email' => 'E-mail',
        'Informational Email' => 'Informational Email',
        'Web' => 'Web',
        'Television' => 'Televisie',
        'Radio' => 'Radio',
        'Newsletter' => 'Nieuwsbrief',
        'Mail' => 'Post'
      ],
      'status' => [
        'Planning' => 'Planning',
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
        'Complete' => 'Voltooi'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Creëer Campagne',
      'Target Lists' => 'Doellijsten',
      'Statistics' => 'Statistieken',
      'hard' => 'hard',
      'soft' => 'soft',
      'Unsubscribe' => 'Uitschrijven',
      'Mass Emails' => 'Verzamel e-mails',
      'Email Templates' => 'E-mail sjablonen',
      'Unsubscribe again' => 'Weer uitschrijven',
      'Subscribe again' => 'Abonneer opnieuw',
      'Create Target List' => 'Creëer Doellijst',
      'Mail Merge' => 'Mailmerge',
      'Generate Mail Merge PDF' => 'Genereer Mail Merge PDF'
    ],
    'presetFilters' => [
      'active' => 'Actief'
    ],
    'messages' => [
      'cannotChangeType' => 'Cannot change type.',
      'unsubscribed' => 'U bent uitgeschreven van onze mailinglijst.',
      'subscribedAgain' => 'U bent opnieuw ingeschreven.'
    ],
    'tooltips' => [
      'targetLists' => 'Doelen die berichten zouden moeten ontvangen.',
      'excludingTargetLists' => 'Doelen die geen berichten mogen ontvangen.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Actie',
      'actionDate' => 'Datum',
      'data' => 'Data',
      'campaign' => 'Campagne',
      'parent' => 'Doel',
      'object' => 'Object',
      'application' => 'Applicatie',
      'queueItem' => 'Wachtrij item',
      'stringData' => 'Stringgegevens',
      'stringAdditionalData' => 'Extra stringgegevens',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'queueItem' => 'Wachtrij item',
      'parent' => 'Behorende bij',
      'object' => 'Object',
      'campaign' => 'Campagne'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Verzonden',
        'Opened' => 'Geopend',
        'Opted Out' => 'Afgemeld',
        'Bounced' => 'Bounced',
        'Clicked' => 'Geklikt',
        'Lead Created' => 'Lead gecreëerd',
        'Opted In' => 'Aangemeld'
      ]
    ],
    'labels' => [
      'All' => 'Alle'
    ],
    'presetFilters' => [
      'sent' => 'Verzonden',
      'opened' => 'Geopend',
      'optedOut' => 'Afgemeld',
      'optedIn' => 'Aangemeld',
      'bounced' => 'Bounced',
      'clicked' => 'Geklikt',
      'leadCreated' => 'Lead gecreëerd'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Actie',
      'urlToUse' => 'Code om in te voegen in plaats van URL',
      'message' => 'Bericht',
      'campaign' => 'Campagne'
    ],
    'links' => [
      'campaign' => 'Campagne'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Creëer Tracking URL'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Omleiding',
        'Show Message' => 'Bericht tonen'
      ]
    ],
    'tooltips' => [
      'url' => 'De ontvanger wordt na het volgen van de link doorgestuurd naar deze locatie.',
      'message' => 'Het bericht wordt aan de ontvanger getoond nadat deze de link heeft gevolgd. Markdown wordt ondersteund.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Naam',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Relatie',
      'contact' => 'Contact',
      'contacts' => 'Contacten',
      'priority' => 'Prioriteit',
      'type' => 'Type',
      'description' => 'Beschrijving',
      'inboundEmail' => 'Groep e-mailaccount',
      'lead' => 'Lead',
      'attachments' => 'Bijlagen',
      'originalEmail' => 'Originele e-mail',
      'isInternal' => 'Verborgen voor portaal'
    ],
    'links' => [
      'inboundEmail' => 'Groep e-mailaccount',
      'account' => 'Relatie',
      'contact' => 'Contact (Primair)',
      'Contacts' => 'Contacten',
      'meetings' => 'Vergaderingen',
      'calls' => 'Gesprekken',
      'tasks' => 'Taken',
      'emails' => 'E-mails',
      'articles' => 'Kennisbank artikelen',
      'lead' => 'Lead',
      'attachments' => 'Bijlagen'
    ],
    'options' => [
      'status' => [
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'Pending' => 'In behandeling',
        'Closed' => 'Gesloten',
        'Rejected' => 'Afgewezen',
        'Duplicate' => 'Dupliceer'
      ],
      'priority' => [
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent'
      ],
      'type' => [
        'Question' => 'Vraag',
        'Incident' => 'Incident',
        'Problem' => 'Probleem'
      ]
    ],
    'labels' => [
      'Create Case' => 'Creëer Ticket',
      'Close' => 'Afsluiten',
      'Reject' => 'Afwijzen',
      'Closed' => 'Gesloten',
      'Rejected' => 'Afgewezen'
    ],
    'presetFilters' => [
      'open' => 'Open',
      'closed' => 'Gesloten'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Naam',
      'emailAddress' => 'E-mail',
      'title' => 'Relatie titel',
      'account' => 'Relatie',
      'accounts' => 'Relaties',
      'phoneNumber' => 'Telefoon',
      'accountType' => 'Relatie Type',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'opportunityRole' => 'Kans functie',
      'accountRole' => 'Titel',
      'description' => 'Beschrijving',
      'campaign' => 'Campagne',
      'targetLists' => 'Doellijsten',
      'targetList' => 'Doellijst',
      'portalUser' => 'Portaalgebruiker',
      'hasPortalUser' => 'Heeft portaal toegang',
      'originalLead' => 'Oorspronkelijke lead',
      'acceptanceStatus' => 'Acceptatiestatus',
      'accountIsInactive' => 'Relatie inactief',
      'acceptanceStatusMeetings' => 'Acceptatiestatus (vergaderingen)',
      'acceptanceStatusCalls' => 'Acceptatiestatus (oproepen)',
      'originalEmail' => 'Originele e-mail'
    ],
    'links' => [
      'opportunities' => 'Kansen',
      'cases' => 'Tickets',
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campagne log',
      'campaign' => 'Campagne',
      'account' => 'Relatie (Primair)',
      'accounts' => 'Relaties',
      'casesPrimary' => 'Tickets (Primair)',
      'tasksPrimary' => 'Taken (uitgebreid)',
      'opportunitiesPrimary' => 'Kansen (Primair)',
      'portalUser' => 'Portaalgebruiker',
      'originalLead' => 'Oorspronkelijke lead',
      'documents' => 'Documenten'
    ],
    'labels' => [
      'Create Contact' => 'Creëer Contact'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Beslisser',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Beïnvloeder'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Portaalgebruikers',
      'notPortalUsers' => 'Geen portaalgebruikers',
      'accountActive' => 'Actief'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Creëer Document',
      'Details' => 'Details'
    ],
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'file' => 'Bestand',
      'type' => 'Type',
      'publishDate' => 'Publicatiedatum',
      'expirationDate' => 'Vervaldatum',
      'description' => 'Beschrijving',
      'accounts' => 'Relaties',
      'folder' => 'Map'
    ],
    'links' => [
      'accounts' => 'Relaties',
      'opportunities' => 'Kansen',
      'folder' => 'Map',
      'leads' => 'Leads',
      'contacts' => 'Contacten'
    ],
    'options' => [
      'status' => [
        'Active' => 'Actief',
        'Draft' => 'Concept',
        'Expired' => 'Vervallen',
        'Canceled' => 'Geannuleerd'
      ],
      'type' => [
        '' => 'Geen',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Licentie Overeenkomst'
      ]
    ],
    'presetFilters' => [
      'active' => 'Actief',
      'draft' => 'Concept'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Creëer Document map',
      'Manage Categories' => 'Beheer mappen',
      'Documents' => 'Documenten'
    ],
    'links' => [
      'documents' => 'Documenten'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'target' => 'Doel',
      'sentAt' => 'Datum verzonden',
      'attemptCount' => 'Pogingen',
      'emailAddress' => 'E-mailadres',
      'massEmail' => 'Verzamel e-mail',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'target' => 'Doel',
      'massEmail' => 'Verzamel e-mail'
    ],
    'options' => [
      'status' => [
        'Pending' => 'In behandeling',
        'Sent' => 'Verzonden',
        'Failed' => 'Mislukt',
        'Sending' => 'Verzenden'
      ]
    ],
    'presetFilters' => [
      'pending' => 'In behandeling',
      'sent' => 'Verzonden',
      'failed' => 'Mislukt'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Creëer Artikel',
      'Any' => 'Alle',
      'Send in Email' => 'Stuur een e-mail',
      'Move Up' => 'Naar boven',
      'Move Down' => 'Naar beneden',
      'Move to Top' => 'Verplaats naar boven',
      'Move to Bottom' => 'Verplaats naar beneden'
    ],
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'type' => 'Type',
      'attachments' => 'Bijlagen',
      'publishDate' => 'Publicatiedatum',
      'expirationDate' => 'Vervaldatum',
      'description' => 'Beschrijving',
      'body' => 'Inhoud',
      'categories' => 'Categorieën',
      'language' => 'Taal',
      'portals' => 'Portalen',
      'bodyPlain' => 'Body Plain'
    ],
    'links' => [
      'cases' => 'Tickets',
      'opportunities' => 'Kansen',
      'categories' => 'Categorieën',
      'portals' => 'Portalen'
    ],
    'options' => [
      'status' => [
        'In Review' => 'In beoordeling',
        'Draft' => 'Concept',
        'Archived' => 'Gearchiveerd',
        'Published' => 'Gepubliceerd'
      ],
      'type' => [
        'Article' => 'Artikel'
      ]
    ],
    'tooltips' => [
      'portals' => 'Artikel is alleen beschikbaar in bepaalde portalen.'
    ],
    'presetFilters' => [
      'published' => 'Gepubliceerd'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Creëer Categorie',
      'Manage Categories' => 'Beheer categorieën',
      'Articles' => 'Artikelen'
    ],
    'links' => [
      'articles' => 'Artikelen'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Geconverteerd naar',
      'Create Lead' => 'Creëer Lead',
      'Convert' => 'Converteren',
      'convert' => 'converteren'
    ],
    'fields' => [
      'name' => 'Naam',
      'emailAddress' => 'E-mail',
      'title' => 'Titel',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'accountName' => 'Relatie naam',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Bron',
      'opportunityAmount' => 'Kans bedrag',
      'opportunityAmountConverted' => 'Kans bedrag (geconverteerd)',
      'description' => 'Beschrijving',
      'createdAccount' => 'Relatie',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
      'convertedAt' => 'Geconverteerd op',
      'campaign' => 'Campagne',
      'targetLists' => 'Doellijsten',
      'targetList' => 'Doellijst',
      'industry' => 'Industrie',
      'acceptanceStatus' => 'Acceptatiestatus',
      'opportunityAmountCurrency' => 'Kans bedrag valuta',
      'acceptanceStatusMeetings' => 'Acceptatiestatus (vergaderingen)',
      'acceptanceStatusCalls' => 'Acceptatiestatus (oproepen)',
      'originalEmail' => 'Originele e-mail'
    ],
    'links' => [
      'targetLists' => 'Doellijsten',
      'campaignLogRecords' => 'Campagne log',
      'campaign' => 'Campagne',
      'createdAccount' => 'Relatie',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
      'cases' => 'Tickets',
      'documents' => 'Documenten'
    ],
    'options' => [
      'status' => [
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'In Process' => 'In behandeling',
        'Converted' => 'Geconverteerd',
        'Recycled' => 'Opnieuw verwerkt',
        'Dead' => 'Vervallen'
      ],
      'source' => [
        'Call' => 'Gesprek',
        'Email' => 'E-mail',
        'Existing Customer' => 'Bestaande klant',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Website',
        'Campaign' => 'Campagne',
        'Other' => 'Overig'
      ]
    ],
    'presetFilters' => [
      'active' => 'Actief',
      'actual' => 'Open',
      'converted' => 'Geconverteerd'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Naam',
      'status' => 'Status',
      'storeSentEmails' => 'Opslaan verzonden E-mails',
      'startAt' => 'Start Datum',
      'fromAddress' => 'Van Adres',
      'fromName' => 'Van naam',
      'replyToAddress' => 'Antwoord Aan adres',
      'replyToName' => 'Antwoord Aan naam',
      'campaign' => 'Campagne',
      'emailTemplate' => 'E-mail Template',
      'inboundEmail' => 'E-mail Account',
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Doellijsten uitgesloten',
      'optOutEntirely' => 'Volledig afgemeld',
      'smtpAccount' => 'SMTP-account'
    ],
    'links' => [
      'targetLists' => 'Doellijsten',
      'excludingTargetLists' => 'Doellijsten uitgesloten',
      'queueItems' => 'Wachtrij items',
      'campaign' => 'Campagne',
      'emailTemplate' => 'E-mail Template',
      'inboundEmail' => 'E-mail Account'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Concept',
        'Pending' => 'In behandeling',
        'In Process' => 'In behandeling',
        'Complete' => 'Voltooi',
        'Canceled' => 'Geannuleerd',
        'Failed' => 'Mislukt'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Creëer verzamel e-mail',
      'Send Test' => 'Verzend test e-mail',
      'System SMTP' => 'Systeem SMTP',
      'system' => 'systeem',
      'group' => 'groep'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Kies ten minste één doel.',
      'testSent' => 'Test e-mail(s)zouden verzonden moeten worden'
    ],
    'tooltips' => [
      'optOutEntirely' => 'E-mailadressen van ontvangers die zich hebben uitgeschreven, zullen worden gemarkeerd als "afgemeld" en zij zullen geen verzamel e-mail meer ontvangen.',
      'targetLists' => 'Doelen die berichten zouden moeten ontvangen.',
      'excludingTargetLists' => 'Doelen die geen berichten mogen ontvangen.',
      'storeSentEmails' => 'E-mails worden opgeslagen in CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actueel',
      'complete' => 'Voltooi'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start datum',
      'dateEnd' => 'Eind datum',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herinneringen',
      'account' => 'Relatie',
      'acceptanceStatus' => 'Acceptatiestatus',
      'dateStartDate' => 'Startdatum (de hele dag)',
      'dateEndDate' => 'Datum einde (hele dag)',
      'isAllDay' => 'Is de hele dag',
      'sourceEmail' => 'Bron E-mail',
      'uid' => 'UID',
      'joinUrl' => 'Join URL'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Gepland',
        'Held' => 'Gedaan',
        'Not Held' => 'Niet gedaan'
      ],
      'acceptanceStatus' => [
        'None' => 'Geen',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
        'Tentative' => 'Voorlopig'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Gedaan',
      'setNotHeld' => 'Niet gedaan'
    ],
    'labels' => [
      'Create Meeting' => 'Creëer Vergadering',
      'Set Held' => 'Gedaan',
      'Set Not Held' => 'Niet gedaan',
      'Send Invitations' => 'Uitnodiging versturen',
      'Send Cancellation' => 'Annulering verzenden',
      'on time' => 'op tijd',
      'before' => 'voor',
      'All-Day' => 'Hele dag',
      'Acceptance' => 'Acceptatie'
    ],
    'presetFilters' => [
      'planned' => 'Gepland',
      'held' => 'Gedaan',
      'todays' => 'Vandaag'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'De geselecteerde deelnemers krijgen een uitnodiging per e-mail.',
      'sendCancellationsToSelectedAttendees' => 'Annuleringsmails zullen naar de geselecteerde deelnemers worden gestuurd.',
      'selectAcceptanceStatus' => 'Stel uw acceptatiestatus in.',
      'nothingHasBeenSent' => 'Er is niets verzonden'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Naam',
      'account' => 'Relatie',
      'stage' => 'Fase',
      'amount' => 'Bedrag',
      'probability' => 'Scoringskans, %',
      'leadSource' => 'Lead bron',
      'doNotCall' => 'Niet Bellen',
      'closeDate' => 'Datum gesloten',
      'contacts' => 'Contacten',
      'contact' => 'Contact (Primair)',
      'description' => 'Beschrijving',
      'amountConverted' => 'Bedrag (geconverteerd)',
      'amountWeightedConverted' => 'Gewogen bedrag',
      'campaign' => 'Campagne',
      'originalLead' => 'Oorspronkelijke lead',
      'amountCurrency' => 'Bedrag valuta',
      'contactRole' => 'Contact functie',
      'lastStage' => 'Laatste fase'
    ],
    'links' => [
      'contacts' => 'Contacten',
      'contact' => 'Contact (Primair)',
      'documents' => 'Documenten',
      'campaign' => 'Campagne',
      'originalLead' => 'Oorspronkelijke lead'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospectie',
        'Qualification' => 'Kwalificatie',
        'Proposal' => 'Voorstel',
        'Negotiation' => 'Onderhandeling',
        'Needs Analysis' => 'Analyse behoefte',
        'Value Proposition' => 'Waarde voorstel',
        'Id. Decision Makers' => 'Id. Beslissers',
        'Perception Analysis' => 'Perceptie analyse',
        'Proposal/Price Quote' => 'Voorstel/Offerte',
        'Negotiation/Review' => 'Onderhandeling/Beoordeling',
        'Closed Won' => 'Gesloten gewonnen',
        'Closed Lost' => 'Gesloten verloren'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Creëer Kans'
    ],
    'presetFilters' => [
      'open' => 'Open',
      'won' => 'Gewonnen',
      'lost' => 'Verloren'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Naam',
      'description' => 'Beschrijving',
      'entryCount' => 'Invoer aantal',
      'optedOutCount' => 'Afgemeld aantal',
      'campaigns' => 'Campagnes',
      'endDate' => 'Eind datum',
      'targetLists' => 'Doellijsten',
      'includingActionList' => 'Inclusief',
      'excludingActionList' => 'Exclusief',
      'targetStatus' => 'Doel status',
      'isOptedOut' => 'Is afgemeld',
      'sourceCampaign' => 'Bron Campagne',
      'category' => 'Category'
    ],
    'links' => [
      'accounts' => 'Relaties',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'campaigns' => 'Campagnes',
      'massEmails' => 'Verzamel e-mails',
      'category' => 'Category'
    ],
    'options' => [
      'type' => [
        'Email' => 'E-mail',
        'Web' => 'Web',
        'Television' => 'Televisie',
        'Radio' => 'Radio',
        'Newsletter' => 'Nieuwsbrief'
      ],
      'targetStatus' => [
        'Opted Out' => 'Afgemeld',
        'Listed' => 'Vermeld'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Creëer Doellijst',
      'Opted Out' => 'Afgemeld',
      'Cancel Opt-Out' => 'Annuleer afmelding',
      'Opt-Out' => 'Afmelden'
    ]
  ],
  'TargetListCategory' => [
    'labels' => [
      'Create TargetListCategory' => 'Create Category'
    ],
    'links' => [
      'targetLists' => 'Target Lists'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Voltooi datum',
      'dateStartDate' => 'Startdatum (de hele dag)',
      'dateEndDate' => 'Datum einde (hele dag)',
      'priority' => 'Prioriteit',
      'description' => 'Beschrijving',
      'isOverdue' => 'Verstreken',
      'account' => 'Relatie',
      'dateCompleted' => 'Datum voltooid',
      'attachments' => 'Bijlagen',
      'reminders' => 'Herinneringen',
      'contact' => 'Contact',
      'originalEmail' => 'Originele e-mail'
    ],
    'links' => [
      'attachments' => 'Bijlagen',
      'account' => 'Relatie',
      'contact' => 'Contact',
      'email' => 'E-mail'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Niet Gestart',
        'Started' => 'Gestart',
        'Completed' => 'Voltooid',
        'Canceled' => 'Geannuleerd',
        'Deferred' => 'Uitgesteld'
      ],
      'priority' => [
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent'
      ]
    ],
    'labels' => [
      'Create Task' => 'Creëer Taak',
      'Complete' => 'Voltooi',
      'overdue' => 'verstreken'
    ],
    'presetFilters' => [
      'actual' => 'Open',
      'completed' => 'Voltooid',
      'deferred' => 'Uitgestelde',
      'todays' => 'Vandaag',
      'overdue' => 'Verstreken'
    ],
    'nameOptions' => [
      'replyToEmail' => 'E-mail beantwoorden'
    ]
  ]
];
