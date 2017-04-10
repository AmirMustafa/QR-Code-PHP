# QR Code

## Description

**QRCode PHP class** allows you to easily generate a simple **QR code** using **vCard** 4.0 and the Google Chart API.

Video for basic understanding: http://www.youtube.com/watch?v=IphTJHiKGos


## Installation

1. Clone this repository.
2. Keep the project in server or local server and execute it
3. You should have any of the QR Code Scanner installed in your phone(here I have done taking two examples follow the images below)
4. You will get various information at present have added Name, Date and Time, Location(kept blank you can fill as per your requirement), Photo URL
5. You will be seeing list of different classes on QRCode.class.php i.e. name, fullName, address, nickName, email, workPhone, homePhone, url, sms, birthday, anniversary, gender, categories, impp, photo, role, organization, note, bookmark, geo, lang, wifi, finish. You can call function as per your requirement. Mine requirement was only four of them
6.In index.php page call function as per your requirement of QR Code in project. Snippet is shown below: 

```php
/**
 * If you have PHP 5.4 or higher, you can instantiate the object like this:
 * (new QRCode)->fullName('...')->... // Create vCard Object
 */
$oQRC = new QRCode; // Create vCard Object
$oQRC->fullName('Pierre-Henry Soria') // Add Full Name
    ->nickName('PH7') // Add Nickname
    ->gender('M') // Add Gender
    ->email('ph7software@gmail.com') // Add Email Address
    ->impp('phs_7@aol.com') // Add Instant Messenger
    ->url('http://ph-7.github.com') // Add URL Website
    ->note('Hello to all! I am a web developer. As hobbies I like climbing and swimming ...') // Add Note
    ->categories('developer,designer,climber,swimmer') // Add Categories
    ->photo('http://files.phpclasses.org/picture/user/1122955.jpg') // Add Avatar
    ->lang('en-US') // Add Language
    ->finish(); // End vCard

// echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
$oQRC->display(); // Display
```



## Server Requirements

PHP 5.2.4 or higher.


