<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tipo_citas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Tipo citas', array(), 'messages') ?></h1>

  <?php include_partial('tipo_citas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('tipo_citas/form_header', array('tipo_citas' => $tipo_citas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('tipo_citas/form', array('tipo_citas' => $tipo_citas, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('tipo_citas/form_footer', array('tipo_citas' => $tipo_citas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
