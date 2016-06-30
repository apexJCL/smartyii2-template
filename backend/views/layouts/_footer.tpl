{use class='backend\helpers\AppHelper'}
{assign var="m" value=AppHelper::FooterMessages()}
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">{$m.title}</h5>
                <p class="grey-text text-lighten-4">{$m.description}</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">{$m.links_title}</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
        </div>
    </div>
</footer>
