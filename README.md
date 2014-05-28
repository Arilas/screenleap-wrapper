Arilas ScreenLeap Wrapper
=====

ScreenLeap is a Service that allows you to share desktop with other users

## Example of usage
 
 Add to composer.json in require section:
 
 `````js
 "arilas/screenleap-wrapper": "dev-master"
 `````
 
 Run ```composer update```
 
 If you use ZF2 add importing module to application.config.php file:
 `````
 'Arilas\ScreenLeap'
 `````
 
 ### Setting Configuration:
 To global.php add the following code block:
 
 `````php
 
     'arilas' => [
         'screenleap' => [
             'accountId' => 'your account id',
             'token' => 'your auth token',
         ],
     ],
 `````
 
 ### Starting Desktop Sharing:
 Receive ScreenLeap service instance from ServiceLocator:
 `````php
 $screenLeapService = $serviceLocator->get('arilas.screenleap');
 `````
 
 Get Sharing:
 
 `````php
 $share = $screenLeapService->shareScreen();
 `````
 
 Result have methods:
 
 * getViewerUrl() - url that viewer may use to see screen
 * getAppletHtml() - code block, that appends to your HTML for start Screen Sharing 