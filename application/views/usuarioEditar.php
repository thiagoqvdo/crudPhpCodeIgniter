<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'usuario'; ?>">Voltar</a>
        <h1>Editar Usuário</h1>
        <?php echo form_open('usuario/atualizar'); ?>
            <input class="form-control" type="hidden" required name="idusuario" value="<?php echo $user[0]->idusuario; ?>" />
            <input class="form-control" type="text" required name="nomeUsuario" value="<?php echo $user[0]->nomeUsuario; ?>" />
            <br>
            <input class="form-control" type="text" required name="user" value="<?php echo $user[0]->user; ?>" />
            <br>
            <input class="form-check-inline" type="radio" required 
                <?php if($user[0]->perfilAcesso=='admin'){echo 'checked';} ?> name="perfilAcesso" value="admin"/>Administrador 
            <input class="form-check-inline" type="radio" required 
                   <?php if($user[0]->perfilAcesso=='user'){echo 'checked';} ?> name="perfilAcesso" value="user" />Usuário
            <br>
            <input class="btn btn-outline-success" type="submit" value="Salvar"/>
        <?php echo form_close(); ?>
    </body>
</html>
