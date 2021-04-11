<div class="conainter mt-5">
    <div class="alert alert-info">
        <?= form_open('user/store') ?>

            <div class="form-group">
                <label for="user_name">Nome Completo</label>
                <input type="text" value="<?= isset($user['user_name']) ? $user['user_name'] : ''; ?>" name="user_name" id="user_name" class="form-control" placeholder="Nome completo">
            </div>

            <div class="form-group">
                <label for="user_cpf">CPF</label>
                <input type="text" value="<?= isset($user['user_cpf']) ? $user['user_cpf'] : ''; ?>" name="user_cpf" id="user_cpf" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_dt">Data Nascimento</label>
                <input type="text" value="<?= isset($user['user_dt']) ? $user['user_dt'] : ''; ?>" name="user_dt" id="user_dt" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_mail">Email</label>
                <input type="text" value="<?= isset($user['user_mail']) ? $user['user_mail'] : ''; ?>" name="user_mail" id="user_mail" class="form-control" placeholder="seuemail@servidor.com">
            </div>

            <div class="form-group">
                <label for="user_phone">Telefone</label>
                <input type="text" value="<?= isset($user['user_phone']) ? $user['user_phone'] : ''; ?>" name="user_phone" id="user_phone" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_state">Estado</label>
                <input type="text" value="<?= isset($user['user_state']) ? $user['user_state'] : ''; ?>" name="user_state" id="user_state" class="form-control" placeholder="Selecione o estado">
            </div>

            <div class="form-group">
                <label for="user_city">Estado</label>
                <input type="text" value="<?= isset($user['user_city']) ? $user['user_city'] : ''; ?>" name="user_city" id="user_city" class="form-control" placeholder="cidade...">
            </div>

            <div class="form-group">
                <label for="user_address">Endereço</label>
                <input type="text" value="<?= isset($user['user_address']) ? $user['user_address'] : ''; ?>" name="user_address" id="user_address" class="form-control" placeholder="Rua, Travessa, Avenida e etc...">
            </div>

            <div class="form-group">
                <input type="hidden" value="<?= isset($user['id']) ? $user['id'] : ''; ?>" name="id" id="id">
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>

        <?= form_close() ?>
    </div>
</div>