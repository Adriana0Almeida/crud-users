<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php if($users): ?>
            <?php foreach($users as $user): ?>  
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['user_name'] ?></td>
                    <td><?= $user['user_phone'] ?></td>
                    <td><?= $user['user_mail'] ?></td>
                    <td>
                        edit - delet
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>