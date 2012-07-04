<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
      <div id="lienzo">
          <div id="cabecera">
              <h1>SISTEMA CITAS CLINICAS</h1>
              
          </div>
          <div id="menu">
              <ul>
                  <li><?php echo link_to("Bienvenidos","inicio/index") ?></li>
                  <li>|</li>
                  <li><?php echo link_to("Nosotros","inicio/acerca") ?></li>
                  <li>|</li>
                  <li><?php echo link_to("Citas","inicio/consulta") ?></li>
              </ul>
              
          </div>
          <div id="contenido">
            <?php echo $sf_content ?>
          </div>
      </div>    
  </body>
</html>
