<?php use_helper('I18N', 'Date') ?>
<?php include_partial('clientes/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Clientes', array(), 'messages') ?></h1>

  <?php include_partial('clientes/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('clientes/form_header', array('clientes' => $clientes, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('clientes/form', array('clientes' => $clientes, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('clientes/form_footer', array('clientes' => $clientes, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
