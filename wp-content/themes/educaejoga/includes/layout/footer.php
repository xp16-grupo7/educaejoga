
<footer class="footer">
    <section class="container">
        <div class="row">
            <div class="col text-center">
                <ul class="footer-nav">
                    <li><a href="#" class="footer-link">Blog</a></li>
                    <li><a href="#" class="footer-link">Compre</a></li>
                    <li><a href="#" class="footer-link">Fale conosco <span class="footer-email"></span></a></li>
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
