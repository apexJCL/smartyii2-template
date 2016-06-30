{use class='backend\helpers\AppHelper'}
{assign var="m" value=AppHelper::HeaderMessages()}
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">My Company</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">{$m.login}</a></li>
            </ul>
        </div>
    </nav>
</div>