## Install
```
composer require izica/php-html-classnames
```

## Usage

```html
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
