{use class='frontend\helpers\SiteHelper'}
{use class='yii\helpers\Html'}
{assign var="messages" value=SiteHelper::LoginMessages()}
{set title=$messages.title}
{SiteHelper::Breadcrumbs($this, $messages.title)}

<h1 class="roboto-thin">
    {$messages.title}
</h1>
<div class="row">
    <div class="col s12 l6">
        {use class='yii\widgets\ActiveForm' type='block'}
        {ActiveForm assign='form' id='login-form' action='/form-handler'}

            <div class="input-field col s12">
                {$form->field($model, 'username')}
            </div>

            <div class="input-field col s12">
                {$form->field($model, 'password')}
            </div>

            <div class="col s12">
                {$form->field($model, 'rememberMe')->checkbox()}
            </div>

            <div class="col s12">
                {$messages.reset_password} {Html::a($messages.reset, ['site/request-password-reset'])}
            </div>

            <div class="col-lg-offset-1 col-lg-11">
                <input type="submit" value="Login" class="btn btn-primary" />
            </div>
        {/ActiveForm}
    </div>
</div>