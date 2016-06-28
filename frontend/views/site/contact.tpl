{use class='frontend\helpers\SiteHelper'}
{use class='yii\helpers\Html'}
{use class='yii\captcha\Captcha'}
{assign var="messages" value=SiteHelper::ContactMessages()}

<h1>{$messages.title}</h1>
<p class="flow-text">
    {$messages.contact_description}
</p>