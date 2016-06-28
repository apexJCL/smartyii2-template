{* init block for helper loading *}
{use class='frontend\helpers\SiteHelper'}
{assign var="messages" value=SiteHelper::IndexMessages()}
{set title=$messages.title}
{SiteHelper::Breadcrumbs($this, $messages.title)}
<h1 class="roboto-thin center">{$messages.welcome}</h1>