<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id_clientes">
  <?php if ('id_clientes' == $sort[0]): ?>
    <?php echo link_to(__('Id clientes', array(), 'messages'), '@clientes', array('query_string' => 'sort=id_clientes&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id clientes', array(), 'messages'), '@clientes', array('query_string' => 'sort=id_clientes&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nombres">
  <?php if ('nombres' == $sort[0]): ?>
    <?php echo link_to(__('Nombres', array(), 'messages'), '@clientes', array('query_string' => 'sort=nombres&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombres', array(), 'messages'), '@clientes', array('query_string' => 'sort=nombres&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_direccion">
  <?php if ('direccion' == $sort[0]): ?>
    <?php echo link_to(__('Direccion', array(), 'messages'), '@clientes', array('query_string' => 'sort=direccion&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Direccion', array(), 'messages'), '@clientes', array('query_string' => 'sort=direccion&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>