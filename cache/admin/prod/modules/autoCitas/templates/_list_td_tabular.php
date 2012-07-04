<td class="sf_admin_text sf_admin_list_td_id_citas">
  <?php echo link_to($citas->getIdCitas(), 'citas_edit', $citas) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha">
  <?php echo false !== strtotime($citas->getFecha()) ? format_date($citas->getFecha(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_clientes">
  <?php echo $citas->getIdClientes() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_tipo">
  <?php echo $citas->getIdTipo() ?>
</td>
