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

## Preview


![Screenshot of LinkedIn Login API Page 1 ](https://cloud.githubusercontent.com/assets/15896579/24588640/a738540a-17e9-11e7-8598-c8584ebf0721.png?raw=true "Screenshot of LinkedIn Login API Page 1")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 2](https://cloud.githubusercontent.com/assets/15896579/24588641/aa385376-17e9-11e7-9cf1-320aa39360f6.png?raw=true "Screenshot of LinkedIn Login API Page 2")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 3](https://cloud.githubusercontent.com/assets/15896579/24588642/aea3e736-17e9-11e7-96fa-5c13f5e54358.png?raw=true "Screenshot of LinkedIn Login API Page 3")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 4](https://cloud.githubusercontent.com/assets/15896579/24588643/b25e04b0-17e9-11e7-9c65-7d3749819624.png?raw=true "Screenshot of LinkedIn Login API Page 4")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588644/b7978ea6-17e9-11e7-80ef-595f25b69b0d.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588646/bca3ecfa-17e9-11e7-9489-c92a8a00ae1c.png?raw=true "Screenshot of LinkedIn APP Dashboard")

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588647/c0acdf00-17e9-11e7-98bf-7f4ee287a500.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588648/c44372fa-17e9-11e7-96c9-87a907f7139a.png?raw=true "Screenshot of LinkedIn APP Dashboard")


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

