        <footer class="container-fluid">
            <div class="row-fluid">
                <div class="col-sm-4">
                    <h3>Acesso Rápido</h3><br>
                    <ul class="list-unstyled">
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo home_url(); ?>">Inicio</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo get_permalink(6); ?>">Sobre</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo get_permalink(8); ?>">Media</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo get_category_link(1); ?>">Blog</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo get_permalink(10); ?>">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 colContato">
                    <h3>Informações de Contato</h3><br>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <span>(41) 3333 3333</span><br>
                    <span class="glyphicon glyphicon-phone"></span>
                    <span>(41) 9999 9999</span><br><br><br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    <span>contato@petshow.com.br</span><br><br>
                    <span class="glyphicon glyphicon-home" style="padding-bottom: 0"></span>
                    <span style="padding-bottom: 0">Rua São A, 150</span><br>
                    <span style="padding-left: 38px">Bairro Jardim Novo Ouro Branco</span><br>
                    <span style="padding-left: 38px">CEP 87704-475</span>
                </div>
                <div class="col-sm-4">
                    <h3>Redes Sociais</h3><br>
                    <div id="redeSocial">
                        <a href="#" class="social fb pull-left"></a>
                        <a href="#" class="social tw pull-left"></a>
                        <a href="#" class="social gp pull-left"></a>
                    </div><br>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="420" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </footer>
        <div id="footerSub" class="container-fluid">
            <div class="row-fluid">
                <p>&copy; Site Desenvolvido por Flashy Dev</p>
            </div>
        </div>        
    <?php wp_footer(); ?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 3 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  </body>
</html>