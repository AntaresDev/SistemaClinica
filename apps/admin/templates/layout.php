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
              <h1>ADMINISTRADOR PRINCIPAL</h1>
              
          </div>
          <div id="menu">
              <ul>
                  <li><?php echo link_to("Manejo de Clientes","clientes/index") ?></li>
                  <li>|</li>
                  <li><?php echo link_to("Administrador de Citas","citas/index") ?></li>
                  <li>|</li>
                  <li><?php echo link_to("Tipos de Citas","tipo_citas/index") ?></li>
              </ul>
              
          </div>
          <div id="contenido">
            <?php echo $sf_content ?>
          </div>
      </div>  
  </body>
</html>
