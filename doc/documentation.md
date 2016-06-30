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

# Templates

This project uses [Smarty Template Engine](http://www.smarty.net/) to render the views (WIP).
This represents a more tight constraint in the separation of Views and Controllers.

Thus, to explain further, the template can't explicitly contain PHP code, but only Smarty code, to
solvent View functions, it's advised to create a helper class and use it.

This can be seen in the index.tpl file:
```smarty
{* init block for helper loading *}
{use class='frontend\helpers\SiteHelper'}
{assign var="messages" value=SiteHelper::IndexMessages()}
{set title=$messages.title}
```

The first line indicates that Smarty must import the SiteHelper class, this class contains static methods that
return a text hash, so i18n is simplified in this way:
```php
public static function IndexMessages(){
        return [
            'welcome'   =>  Yii::t('messages', 'welcome', $language='es'),
            'title'     =>  Yii::t('app', 'index_title')
        ];
    }
```

With this method, our view only handles with retrieving the array, assign it to a Smarty variable and then
use it with smarty-friendly hash value access:
```smarty
{assign var="messages" value=SiteHelper::IndexMessages()}
{set title=$messages.title}
```

Last but not least, the last line is a Smarty extension, part of [yii2 Smarty](https://github.com/yiisoft/yii2-smarty)
that assigns the title to show in the tab.