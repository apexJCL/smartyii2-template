<?php

namespace frontend\helpers;
use Yii;

class AppHelper
{

    public static function HeaderMessages()
    {
        return [ // smarty variables
            'header_home'      =>  Yii::t('app', 'header_home'),
            'header_about'     =>  Yii::t('app', 'header_about'),
            'header_sign_up'   =>  Yii::t('app', 'header_sign_up'),
            'header_login'     =>  Yii::t('app', 'header_login')
        ];
    }

    public static function FooterMessages()
    {
        return [ // smarty variables
            'footer_title'          =>  Yii::t('app', 'footer_title'),
            'footer_links'          =>  Yii::t('app', 'footer_links'),
            'footer_description'    =>  Yii::t('app', 'footer_description'),
            'footer_more_links'     =>  Yii::t('app', 'footer_more_links'),
            'footer_contact'        =>  Yii::t('app', 'footer_contact')
        ];
    }
    
}