<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p>copyright X - all right reserved</p>
                </div>
                <div class="footer-menu">
                    <?php wp_nav_menu( array('theme_location' => 'wp_devs_footer_menu', 'depth' => 1)); ?>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>

</body>
</html>