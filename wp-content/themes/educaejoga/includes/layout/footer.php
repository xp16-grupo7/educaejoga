
<footer class="footer">
    <section class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <ul class="footer-nav">
                    <li><a href="#" class="footer-link">Sobre o evento</a></li>
                    <li><a href="#" class="footer-link">Palestrantes</a></li>
                    <li><a href="#" class="footer-link">Quem somos <span class="footer-email"></span></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-12">
                <ul class="footer-nav">
                    <li><a href="#" class="footer-link">Blog</a></li>
                    <li><a href="#" class="footer-link">Compra de ingressos</a></li>
                    <li><a href="#" class="footer-link">Fale conosco <span class="footer-email">contato@email.com</span></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-12 text-right">
                <ul class="footer-nav">
                    <li><a href="#" class="footer-link" title="Acesse nosso Facebook">Facebook <i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#" class="footer-link" title="Acesse nosso Instagram">Instagram <i class="fab fa-instagram"></i></a></li>                    
                    <li><a href="#" class="footer-link" title="Acesse nosso Linkedin">Linkedin <i class="fab fa-linkedin"></i></a></li>                    
                </ul>
            </div>
        </div>
    </section>
    <section class="footer-copyright">
        <a href="<?= site_url("/"); ?>" class="copyright-link">Educa e Joga <?php echo date("Y")?></a>
    </section>
</footer>

<script src="<?php bloginfo("template_url"); ?>/dist/app.js"></script>
<?php wp_footer(); ?>
</body>
</html> 
