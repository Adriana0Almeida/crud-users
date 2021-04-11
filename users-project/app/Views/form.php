<div class="conainter mt-5">
    <div class="alert alert-info">
        <?= form_open('user/store') ?>

            <div class="form-group">
                <label for="user_name">Nome Completo</label>
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Nome completo">
            </div>

            <div class="form-group">
                <label for="user_cpf">CPF</label>
                <input type="text" name="user_cpf" id="user_cpf" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_dt">Data Nascimento</label>
                <input type="text" name="user_dt" id="user_dt" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_mail">Email</label>
                <input type="text" name="user_mail" id="user_mail" class="form-control" placeholder="seuemail@servidor.com">
            </div>

            <div class="form-group">
                <label for="user_phone">Telefone</label>
                <input type="text" name="user_phone" id="user_phone" class="form-control" placeholder="Somente números">
            </div>

            <div class="form-group">
                <label for="user_state">Estado</label>
                <input type="text" name="user_state" id="user_state" class="form-control" placeholder="Selecione o estado">
            </div>



        <?= form_close() ?>
    </div>
</div>