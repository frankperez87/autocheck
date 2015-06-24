# AutoCheck API
This API allows you to connect to the AutoCheck system in order to request the vehicle history report for a given VIN. 
### Installation Instructions
```
composer require frankperez87/autocheck
```

*This is not the official API provided by AutoCheck.*

### Example Usage
```php
<?php

require 'vendor/autoload.php';

// Set AutoCheck Account Credentials
$account = new AutoCheck\Account('Customer ID Here', 'Password Here', 'Secondary Customer Id Here');

// Optional: You can change your language for the report, the default is English.
// $account->setLanguage('ES');

// Instantiate Object
$AutoCheck = new AutoCheck\GetLink($account);

// Return AutoCheck Report
echo $AutoCheck->requestLinkForVin('VIN Goes Here');
```

### Possible Error Messages 
```
Message: 
This is a restricted site

Cause: 
IP getting blocked

Action: 
Contact AutoCheck to provide your development and production web servers IP to grant access
```
```
Message: 
We are sorry, but the vehicle history report cannot bedisplayed at this time. Please ask the dealer for a copy of an AutoCheck report for this vehicle. 

Cause: 
Incorrect paramter OR CID, SID, password have expired

Action: 
Check CID/PWD/SID/VIN to make sure the parameters are passing correctly and that they have not expired. If you still receive this message with the correct parameters, then contact AutoCheck for further troubleshooting.
```
```
Message: 
AutoCheck has located 0 records for this vehicle. 

Cause: 
No history records

Action: 
At times we don't have history on new model year vehicles. No further action needed.
```
