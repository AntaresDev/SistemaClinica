<td colspan="2">
  <?php echo __('%%id_tipo%% - %%nombre%%', array('%%id_tipo%%' => link_to($tipo_citas->getIdTipo(), 'tipo_citas_edit', $tipo_citas), '%%nombre%%' => $tipo_citas->getNombre()), 'messages') ?>
</td>
