# SF4APISMS
SF4-APISMSORANGE-Xample-INAPP
==============================
A PHP library to access Orange SMS API.

Just an small example related with SF4 implementation and api symfony  [SF4APISMS](https://github.com/abodje/sf4withapismsorange)
 Im using * [osms-android](https://github.com/ismaeltoe/osms-android)

## Installation

### With Composer (recommended)

Install [Composer](https://getcomposer.org/).Then do :
"git clone -https://github.com/abodje/sf4withapismsorange"

 


### Without Composer

Simply [download the latest release](https://github.com/abodje/sf4withapismsorange.zip).

## Install symfony/maker-bundle

composer require symfony/maker-bundle

## Create database and migrate schema

## SSL certificate problem

If you get an SSL error, set the peer's certificate checking option to false:

```php
 

$osms->setVerifyPeerSSL(false);
```

## How to get credentials and other access?
1-Open your browser put :"https://developer.orange.com/apis"
2-Create your account
3-Sign in 
4-Put "https://developer.orange.com/myapps" in your browser
5-Go to section: Create new application 
6-Subscribed APIs(SMS API)
7-Configure SMS Cote d'Ivoire and please purchase a bundle for dev
 Côte d'Ivoire - 30 units /15
8- open your sf4 app and insert credentials

if you have any questions  :[contact me]<a href="mailto:kouamepaularnaud@icloud.com?subject=I HAVE QUESTIONS">.

But it should work on your hosting server, so enable the certificate checking when you are ready to deploy your application for security reasons.

## Documentation

 * Native API [https://developer.orange.com/apis/sms-ci/getting-started](https://developer.orange.com/apis/sms-ci/getting-started)

## Other Libraries

 * [osms-android](https://github.com/ismaeltoe/osms-android)

## License

Released under the MIT License - see `LICENSE.txt` for details.