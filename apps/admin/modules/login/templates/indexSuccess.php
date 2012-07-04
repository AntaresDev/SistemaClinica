<div class="titulo">Login Admin</div>
<br/>
<div class="texto">
    <form action="<?php echo url_for('login/index') ?>" method="POST">
        <table align="center">
            <?php echo $formulario ?>
            <tr>
                <td colspan="2"><input type="submit"/></td>
            </tr>
            
        </table>
    </form>
</div>