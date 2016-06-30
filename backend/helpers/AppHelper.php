<?php

namespace backend\helpers;
use Yii;

class AppHelper {

    public static function HeaderMessages()
    {
        return [
            'login'     =>  Yii::t('backend_app', 'header_login')
        ];
    }

    public static function FooterMessages()
    {
        return [
            'title'         =>  Yii::t('backend_app', 'footer_title'),
            'description'   =>  Yii::t('backend_app', 'footer_description'),
            'links_title'   =>  Yii::t('backend_app', 'footer_links_title')
        ];
    }

}