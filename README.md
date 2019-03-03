## Install
```
composer require izica/php-html-classnames
```

## Usage

```php
<?
    $sClassname = PhpHtmlClassnames::get([
        $arParams['CLASS'], //classname from variable
        'form-input', //classname from string
        'form-input--submit' => $arParams['SUBMIT'] //classname with condition 'name' => true or false
    ]);
?>
<input class="<?=$sClassname;?>" />
```

or Aliases
```php
    classnames();
    cn();
```
