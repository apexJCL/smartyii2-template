{use class='frontend\helpers\AppHelper'}
{assign var="messages" value=AppHelper::HeaderMessages()}
<header>
    <div class="navbar-fixed">
        <nav class="black">
            <div class="nav-wrapper">
                <a href="{url route='/'}" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{url route="/"}">{$messages.header_home}</a></li>
                    <li><a href="{url route="about"}">{$messages.header_about}</a></li>
                    <li><a href="{url route='signup'}">{$messages.header_sign_up}</a></li>
                    <li><a href="{url route='login'}">{$messages.header_login}</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>