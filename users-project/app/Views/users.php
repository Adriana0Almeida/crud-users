<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Users - CRUD</title>

    <script>
        function confExcl(){
            if(!confirm('Deseja realmente excluir registro ? ')){
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <!-- As a link -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Dashboard</a>
        </div>
    </nav>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>