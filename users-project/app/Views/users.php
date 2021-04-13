
<?php echo $this->extend('layout/layout'); ?>
<?php echo $this->section('content'); ?>

    <div class="container mt-5">

        <?= anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
        
        <table id="tableUser" class="table table-bordered table-dark table-hover">
        <div class="table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php if($users): ?>
            <?php foreach($users as $user): ?>  
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['user_name'] ?></td>
                    <td><?= $user['user_phone'] ?></td>
                    <td><?= $user['user_mail'] ?></td>
                    <td>
                        <?= anchor('user/edit/'.$user['id'], 'Editar', ['class' => 'btn btn-primary'])?>
                        <?= anchor('user/delete/'.$user['id'], 'Excluir', ['class' => 'btn btn-danger', 'onclick' => 'return confExcl()'])?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </div>
        </table>
        

    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.20/datatables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#tableUser').DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
        });
    </script>
<?php echo $this->endSection(); ?>