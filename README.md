# PasswordStrength for EC-CUBE4.1

This Plug-in integrates [PasswordStrengthValidator](https://github.com/rollerworks/PasswordStrengthValidator) into [EC-CUBE4](https://github.com/EC-CUBE/ec-cube).

## Installation

Install the plugin:
```bash
$ composer require rollerworks/password-strength-bundle
$ git clone git@github.com:kurozumi/PasswordStrength.git app/Plugin
$ bin/console e:p:i --code PasswordStrength
$ bin/console e:p:e --code PasswordStrength
```
or
```bash
$ bin/console eccube:composer:require rollerworks/password-strength-bundle
$ git clone git@github.com:kurozumi/PasswordStrength.git app/Plugin
$ bin/console e:p:i --code PasswordStrength
$ bin/console e:p:e --code PasswordStrength
```
