<td colspan="3">
  <?php echo __('%%id_clientes%% - %%nombres%% - %%direccion%%', array('%%id_clientes%%' => link_to($clientes->getIdClientes(), 'clientes_edit', $clientes), '%%nombres%%' => $clientes->getNombres(), '%%direccion%%' => $clientes->getDireccion()), 'messages') ?>
</td>
