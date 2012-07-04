<td class="sf_admin_text sf_admin_list_td_id_clientes">
  <?php echo link_to($clientes->getIdClientes(), 'clientes_edit', $clientes) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombres">
  <?php echo $clientes->getNombres() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $clientes->getDireccion() ?>
</td>
