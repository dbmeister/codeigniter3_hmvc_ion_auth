    <footer>
      <div class="container">
        <p>&copy; Company 2013</p>
      </div>
    </footer>

  <?php 
    echo templates_js(
      $this->config->item('jb_js_application'),
      $this->config->item('jb_js_template'),
      $this->config->item('jb_js_module'),
      $this->config->item('jb_js_other')

    );
  ?>


<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script> only include when necessary 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.4.0/jszip.min.js"></script> only include when necessary 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.min.js"></script> only include when necessary 
    <script src="https://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script> only include when necessary 
    <script src="<?php echo base_url(); ?>_js/application/application.js"></script> always in application  
    <script src="<?php echo base_url(); ?>_js/modules/module_name.js"></script> always in module   -->
    
  </body>
</html>
