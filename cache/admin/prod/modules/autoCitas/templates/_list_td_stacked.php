<td colspan="4">
  <?php echo __('%%id_citas%% - %%fecha%% - %%id_clientes%% - %%id_tipo%%', array('%%id_citas%%' => link_to($citas->getIdCitas(), 'citas_edit', $citas), '%%fecha%%' => false !== strtotime($citas->getFecha()) ? format_date($citas->getFecha(), "f") : '&nbsp;', '%%id_clientes%%' => $citas->getIdClientes(), '%%id_tipo%%' => $citas->getIdTipo()), 'messages') ?>
</td>
