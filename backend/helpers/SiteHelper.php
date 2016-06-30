<?php

namespace backend\helpers;
use Yii;

class SiteHelper {

    public static function LoginMessages()
    {
        return [
            'title' => Yii::t('backend_messages', 'login_title')
        ];
    }

}