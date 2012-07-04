<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id_citas">
  <?php if ('id_citas' == $sort[0]): ?>
    <?php echo link_to(__('Id citas', array(), 'messages'), '@citas', array('query_string' => 'sort=id_citas&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id citas', array(), 'messages'), '@citas', array('query_string' => 'sort=id_citas&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fecha">
  <?php if ('fecha' == $sort[0]): ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@citas', array('query_string' => 'sort=fecha&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha', array(), 'messages'), '@citas', array('query_string' => 'sort=fecha&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_id_clientes">
  <?php if ('id_clientes' == $sort[0]): ?>
    <?php echo link_to(__('Id clientes', array(), 'messages'), '@citas', array('query_string' => 'sort=id_clientes&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id clientes', array(), 'messages'), '@citas', array('query_string' => 'sort=id_clientes&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_id_tipo">
  <?php if ('id_tipo' == $sort[0]): ?>
    <?php echo link_to(__('Id tipo', array(), 'messages'), '@citas', array('query_string' => 'sort=id_tipo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id tipo', array(), 'messages'), '@citas', array('query_string' => 'sort=id_tipo&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>