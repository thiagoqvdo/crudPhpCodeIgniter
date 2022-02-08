
<h1>Cadastro de Carro</h1>
<?php echo form_open('carro/inserir'); ?>
<input class="form-control" type="text" required name="marca" placeholder="Marca aqui..." />
<br>
<input class="form-control" type="text" required name="modelo" placeholder="Modelo aqui..." />
<br>
<input class="form-control" type="text" required name="cor" placeholder="Cor aqui..." />
<br>
<input class="form-control" type="text" required name="placa" placeholder="Placa aqui..." />
<br>
<select class="form-control" name="idPessoa">
    <option value="">
        Propietário
    </option> 
    <?php foreach($pessoas as $pes): ?>
        <option value="<?php echo $pes->idPessoa; ?>">
            <?php echo $pes->nome; ?>
        </option>
        <?php endforeach; ?>
</select>
<br>
<input class="form-control" type="number" min="2" max="6" name="portas" placeholder="Quantidade de portas aqui..." />
<br>
<input class="btn btn-outline-success" type="submit" value="Salvar"/>
<input class="btn btn-outline-danger" type="reset" value="Limpar"/>
<?php echo form_close(); ?>
<h2>Lista Carros</h2>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>Marca</th><th>Modelo</th><th>Cor</th><th>Placa</th><th>Proprietário</th><th>Qntd. Portas</th><th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carros as $car): ?>
            <tr>
                <td><?php echo $car->marca; ?></td>
                <td><?php echo $car->modelo; ?></td>
                <td><?php echo $car->cor; ?></td>
                <td><?php echo $car->placa; ?></td>
                <td>
                    <?php foreach ($pessoas as $pes): ?>
                        <?php 
                            if($pes->idPessoa == $car->idPessoa){ echo $pes->nome; 
                            break;
                            }
                            
                        ?>
                    <?php endforeach?>
                </td>
                <td><?php echo $car->portas; ?></td>
                <td>
                    <a href="<?php
                    echo base_url() .
                    'carro/editar/' .
                    $car->idCarro;
                    ?>">Editar</a> | 
                    <a href="<?php
                    echo base_url() .
                    'carro/excluir/' .
                    $car->idCarro;
                    ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
