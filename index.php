<? PHP
использовать  Zadarma_API \ Api ;
require_once  __DIR__ . DIRECTORY_SEPARATOR . ' include.php ' ;
define ( ' USE_SANDBOX ' , true );
$ api  =   новый  Api ( KEY a2bbebe1ffc8d6da5cf7, SECRET 9848bdf616fca2b675ae , USE_SANDBOX );
// TODO: введите ваши значения
$ sourceNumber  =  ' ' ; // в международном формате
$ destinationNumber  =  ' ' ;
$ sip  =  '180469-100' ; // номер глотка
$ pbx  =  'pbx.zadarma.com' ; // внутренний номер
$ callId  =  ' ' ;
$ destinationEmail  =  ' ' ;
// информационные методы
$ result  =  $ api -> getBalance ();
$ result  =  $ api -> getPrice ( $ destinationEmail , $ sourceNumber );
$ result  =  $ api -> getTimezone ();
$ result  =  $ api -> getTariff ();
// методы pbx
$ result  =  $ api -> getPbxInternal ();
$ result  =  $ api -> getPbxStatus ( $ pbx );
$ result  =  $ api -> getPbxRecord ( $ callId , null );
$ result  =  $ api -> getPbxRedirection ( $ pbx );
$ result  =  $ api -> setPbxPhoneRedirection ( $ pbx , $ destinationNumber , false , true );
$ result  =  $ api -> setPbxVoicemailRedirection ( $ pbx , $ destinationEmail , true , Api :: PBX_REDIRECTION_OWN_GREETING );
$ result  =  $ api -> setPbxRedirectionOff ( $ pbx );
// sip методы
$ result  =  $ api -> getSip ();
$ result  =  $ api -> getSipStatus ( $ sip );
$ result  =  $ api -> getSipRedirection ( $ sip );
$ result  =  $ api -> setSipCallerId ( $ sip , $ sourceNumber );
$ result  =  $ api -> setSipRedirectionNumber ( $ sip , $ destinationNumber );
$ result  =  $ api -> setSipRedirectionStatus ( $ sip , false );
// статистические методы
$ result  =  $ api -> getStatistics ();
$ result  =  $ api -> getPbxStatistics ();
$ result  =  $ api -> getDirectNumbers ();
// другие методы
$ result  =  $ api -> requestCallback ( $ pbx , $ destinationNumber );
$ result  =  $ api -> numberLookup ( $ destinationNumber );
$ result  =  $ api -> numberLookupMultiple ([ $ sourceNumber , $ destinationNumber ]);
$ result  =  $ api -> sendSms ( $ destinationNumber , ' text ' , $ sourceNumber );