<div class="titulo">Sacar Cita</div>
<br/>
<div class="texto">
    <?php if($resultado == "") {?>
    <form action="<?php echo url_for('inicio/consulta') ?>" method="POST">
        <table align="center">
            <?php echo $formulario ?>
            <tr>
                <td colspan="2"><input type="submit"/></td>
            </tr>
            
        </table>
    </form>
    <?php } ?>
    <?php echo $resultado; ?>
</div>