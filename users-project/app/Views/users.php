
<?php echo $this->extend('layout/layout'); ?>
<?php echo $this->section('content'); ?>

    <div class="container mt-5">

        <?= anchor(base_url('user/create'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
        
        <table class="table table-bordered table-dark table-hover">
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
        <?= $pager->links() ?>

    </div>
    <style>
.pagination li a
{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

.pagination li.active a {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>
<?php echo $this->endSection(); ?>