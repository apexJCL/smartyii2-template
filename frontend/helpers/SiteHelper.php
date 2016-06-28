<?php

namespace frontend\helpers;
use Yii;

class SiteHelper {
    
    public static function Breadcrumbs($view, $value)
    {
        $view->params['breadcrumbs'][] = $value;
    }
    
    public static function LoginMessages(){
        return [
            'title'             =>  Yii::t('app', 'index_login_title'),
            'reset'             =>  Yii::t('app', 'reset_password_link'),
            'reset_password'    =>  Yii::t('app', 'reset_message')
        ];
    }

    public static function IndexMessages(){
        return [
            'welcome'   =>  Yii::t('messages', 'welcome', $language='es'),
            'title'     =>  Yii::t('app', 'index_title')
        ];
    }

    public static function ContactMessages()
    {
        return [
            'title'                 =>  Yii::t('app', 'index_contact_title'),
            'contact_description'   =>  Yii::t('messages', 'contact_description')
        ];
    }
    
}