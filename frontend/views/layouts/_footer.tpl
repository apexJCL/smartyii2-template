{use class="yii\helpers\Url"}
{use class='frontend\helpers\AppHelper'}
{assign var="messages" value=AppHelper::FooterMessages()}
<footer class="page-footer black">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">{$messages.footer_title}</h5>
                <p class="grey-text text-lighten-4">{$messages.footer_description}</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">{$messages.footer_links}</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="{url route="contact"}">{$messages.footer_contact}</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">LinkedIn</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Google +</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">{$messages.footer_more_links}</a>
        </div>
    </div>
</footer>