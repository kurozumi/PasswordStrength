# パスワード強度検証プラグイン for EC-CUBE4.1

このプラグインは、[PasswordStrengthValidator](https://github.com/rollerworks/PasswordStrengthValidator) を [EC-CUBE4.1](https://github.com/EC-CUBE/ec-cube) に統合します。

## インストール

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

## パスワードの強度検証

パスワードの強度検証については、[Strength validation](https://github.com/rollerworks/PasswordStrengthValidator/blob/main/docs/strength-validation.md) をご確認ください。

パスワードの強度レベルは1から5で設定できます。  
強度レベルを変更したい場合は、`services.yaml` の以下を編集してください。  

```yaml
parameters:
  password_min_strength: 3
```

## バリデーションメッセージの編集

バリデーションメッセージは `validators.ja.yaml` を編集してください。



