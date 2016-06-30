{use class='yii\helpers\Html'}
{use class='backend\helpers\SiteHelper'}
{assign var="m" value=SiteHelper::LoginMessages()}
{set title=$m.title}
<div class="container">
    <h1 class="roboto-thin">{$m.title}</h1>
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

                <div class="col-lg-offset-1 col-lg-11">
                    <input type="submit" value="Login" class="btn btn-primary" />
                </div>
            {/ActiveForm}
        </div>
    </div>
</div>