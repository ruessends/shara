<? PHP
������������  Zadarma_API \ Api ;
require_once  __DIR__ . DIRECTORY_SEPARATOR . ' include.php ' ;
define ( ' USE_SANDBOX ' , true );
$ api  =   �����  Api ( KEY a2bbebe1ffc8d6da5cf7, SECRET 9848bdf616fca2b675ae , USE_SANDBOX );
// TODO: ������� ���� ��������
$ sourceNumber  =  ' ' ; // � ������������� �������
$ destinationNumber  =  ' ' ;
$ sip  =  '180469-100' ; // ����� ������
$ pbx  =  'pbx.zadarma.com' ; // ���������� �����
$ callId  =  ' ' ;
$ destinationEmail  =  ' ' ;
// �������������� ������
$ result  =  $ api -> getBalance ();
$ result  =  $ api -> getPrice ( $ destinationEmail , $ sourceNumber );
$ result  =  $ api -> getTimezone ();
$ result  =  $ api -> getTariff ();
// ������ pbx
$ result  =  $ api -> getPbxInternal ();
$ result  =  $ api -> getPbxStatus ( $ pbx );
$ result  =  $ api -> getPbxRecord ( $ callId , null );
$ result  =  $ api -> getPbxRedirection ( $ pbx );
$ result  =  $ api -> setPbxPhoneRedirection ( $ pbx , $ destinationNumber , false , true );
$ result  =  $ api -> setPbxVoicemailRedirection ( $ pbx , $ destinationEmail , true , Api :: PBX_REDIRECTION_OWN_GREETING );
$ result  =  $ api -> setPbxRedirectionOff ( $ pbx );
// sip ������
$ result  =  $ api -> getSip ();
$ result  =  $ api -> getSipStatus ( $ sip );
$ result  =  $ api -> getSipRedirection ( $ sip );
$ result  =  $ api -> setSipCallerId ( $ sip , $ sourceNumber );
$ result  =  $ api -> setSipRedirectionNumber ( $ sip , $ destinationNumber );
$ result  =  $ api -> setSipRedirectionStatus ( $ sip , false );
// �������������� ������
$ result  =  $ api -> getStatistics ();
$ result  =  $ api -> getPbxStatistics ();
$ result  =  $ api -> getDirectNumbers ();
// ������ ������
$ result  =  $ api -> requestCallback ( $ pbx , $ destinationNumber );
$ result  =  $ api -> numberLookup ( $ destinationNumber );
$ result  =  $ api -> numberLookupMultiple ([ $ sourceNumber , $ destinationNumber ]);
$ result  =  $ api -> sendSms ( $ destinationNumber , ' text ' , $ sourceNumber );