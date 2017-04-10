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

## Codes Snippet


![Screenshot of index.php page ](https://cloud.githubusercontent.com/assets/15896579/24867235/332161c8-1e2a-11e7-907f-66979897a45d.png?raw=true "Screenshot of index.php page")
<br/><br/><br/>

![Screenshot of QRCode.class.php Page 1 ](https://cloud.githubusercontent.com/assets/15896579/24867244/3b19983c-1e2a-11e7-86ed-dc3f4db5f192.png?raw=true "Screenshot of QRCode.class.php Page 1")
<br/><br/><br/>

![Screenshot of QRCode.class.php Page 2 ](https://cloud.githubusercontent.com/assets/15896579/24867248/412c4ddc-1e2a-11e7-8c49-e9a58a4e0ae0.png?raw=true "Screenshot of QRCode.class.php Page 2")
<br/><br/><br/>


## Preview


![Screenshot of QR Code Page 1 ](https://cloud.githubusercontent.com/assets/15896579/24867152/ed081222-1e29-11e7-919a-0f94f88155bc.png?raw=true "Screenshot of QR Code Page 1")
<br/><br/><br/>

![Screenshot of QR Code Page 2 ](https://cloud.githubusercontent.com/assets/15896579/24867154/ef29472e-1e29-11e7-93d4-af738c0ddc1a.png?raw=true "Screenshot of QR Code Page 2")
<br/><br/><br/>

![Screenshot of QR Code Page 3 ](https://cloud.githubusercontent.com/assets/15896579/24867164/fa239b66-1e29-11e7-8df4-30eef8da73c2.png?raw=true "Screenshot of QR Code Page 3")
<br/><br/><br/>

![Screenshot of QR Code Page 4 ](https://cloud.githubusercontent.com/assets/15896579/24867188/06d01b3c-1e2a-11e7-9299-ad2b9046a01b.png?raw=true "Screenshot of QR Code Page 4")
<br/><br/><br/>

![Screenshot of QR Code Page 5 ](https://cloud.githubusercontent.com/assets/15896579/24867195/0ce3e3fa-1e2a-11e7-9b37-c1b1e0ef121b.png?raw=true "Screenshot of QR Code Page 5")
<br/><br/><br/>

![Screenshot of QR Code Page 6 ](https://cloud.githubusercontent.com/assets/15896579/24867221/257a6c5e-1e2a-11e7-9162-2855b787e09c.png?raw=true "Screenshot of QR Code Page 6")
<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

