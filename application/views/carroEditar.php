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
        <a href="<?php echo base_url() . 'carro'; ?>">Voltar</a>
        <h1>Editar Carro</h1>
        <?php echo form_open('carro/atualizar'); ?>
        <input class="form-control" type="hidden" required name="idCarro" value="<?php echo $carro[0]->idCarro; ?>" />
        <input class="form-control" type="text" required name="marca" value="<?php echo $carro[0]->marca; ?>" />
        <br>
        <input class="form-control" type="text" required name="modelo" value="<?php echo $carro[0]->modelo; ?>" />
        <br>
        <input class="form-control" type="number" required name="portas" value="<?php echo $carro[0]->portas; ?>" />
        <br>
        <input class="form-control" type="text" required name="cor" value="<?php echo $carro[0]->cor; ?>" />
        <br>
        <input class="form-control" type="text" required name="placa" value="<?php echo $carro[0]->placa; ?>" />
        <br>
        <select class="form-control" name="idPessoa">
            <?php foreach($pessoas as $pes):
                if($pes->idPessoa == $carro[0]->idPessoa) {?>
                    <option value="<?php echo $pes->idPessoa; ?>"> <?php echo $pes->nome; ?> </option><?php
                    echo $pes->nome; 
                    break;
                }
                ?>
            <?php endforeach; ?>
            <?php foreach($pessoas as $pes): ?>
                <?php 
                    if($pes->idPessoa != $carro[0]->idPessoa) {?>
                        <option value="<?php echo $pes->idPessoa; ?>"> <?php echo $pes->nome; ?> </option><?php
                        echo $pes->nome; 
                    }
                ?>
            <?php echo $pes->nome; ?>
        <?php endforeach; ?>
        </select>
        <br>
        <input class="btn btn-outline-success" type="submit" value="Salvar"/>
        <?php echo form_close(); ?>
    </body>
</html>
