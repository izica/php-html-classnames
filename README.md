![browser screen](https://raw.githubusercontent.com/izica/php-browser-log/master/screen.png "browser screen")
## Install
```
composer require izica/php-html-classnames
```

## Usage

```php
    $sClassname = PhpHtmlClassnames::get([
        $arParams['CLASS'], //classname from variable
        'form-input', //classname from string
        'form-input--submit' => $arParams['SUBMIT'] //classname with condition 'name' => true or false
    ]);
```

or Aliases
```php
    classnames();
    cn();
```
