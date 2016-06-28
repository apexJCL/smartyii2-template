# Some basic commands

#### Yii2

i18n update - **Do this everytime you change/add a declaration of type `Yii::t()`
```
$ ./yii message @frontend/config/i18n.php
```

#### Smarty

###### Variables
```
{$variable}
```

###### URL's
```php
// absolute
{url route=[controller/action]}
// relative
{path route=[controller/action]}
```

###### Passing variables to smarty templates
```php
$result = 1 + 1;
$this->render(
    'template.tpl',
    [
        // Here you assign the variables
        'example'   =>  $result  
    ]
);
```