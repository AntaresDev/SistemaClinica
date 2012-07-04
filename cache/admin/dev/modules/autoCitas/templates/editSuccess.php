<?php use_helper('I18N', 'Date') ?>
<?php include_partial('citas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Citas', array(), 'messages') ?></h1>

  <?php include_partial('citas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('citas/form_header', array('citas' => $citas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('citas/form', array('citas' => $citas, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('citas/form_footer', array('citas' => $citas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
