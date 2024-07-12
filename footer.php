    </main>
        </div>
        <footer id="footer" role="contentinfo">
        <div id="copyright">
        <p>© Copyright 2024</p>
        <?php  
        wp_nav_menu ( array (
        'theme_location' => 'footer-menu' ,
        'menu_class' => 'my-footer-menu', 
        ) ); ?> 
        </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
  </body>
</html>














