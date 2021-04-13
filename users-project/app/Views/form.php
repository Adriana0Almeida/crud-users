<?php echo $this->extend('layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5">    
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
            <input type="date" value="<?= isset($user['user_dt']) ? $user['user_dt'] : ''; ?>" name="user_dt" id="user_dt" class="form-control" placeholder="Somente números">
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
            <select name="user_state" id="user_state" class="form-select"> 
                <option disabled>Selecione estado</option>
            </select>            
        </div>

        <div class="form-group">
            <label for="user_city">Cidade</label>
            <select name="user_city" id="user_city" class="form-select">
                <option disabled>Selecione cidade</option>
            </select>            
        </div>

        <div class="form-group">
            <label for="user_address">Endereço</label>
            <input type="text" value="<?= isset($user['user_address']) ? $user['user_address'] : ''; ?>" name="user_address" id="user_address" class="form-control" placeholder="Rua, Travessa, Avenida e etc...">
        </div>

        <hr>

        <div class="form-group">
            <input type="hidden" value="<?= isset($user['id']) ? $user['id'] : ''; ?>" name="id" id="id">
            <input type="submit" value="Salvar" class="btn btn-primary">
            <?= anchor(base_url(), 'Retornar', ['class' => 'btn btn-secondary float-end'])?>
        </div>
    <?= form_close() ?> 
    <br>   
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">	
		
    $(document).ready(function () {
        
        var user_state = '<?php echo isset($user['user_state']) ? $user['user_state'] : ''; ?>';        
        var user_city = '<?php echo isset($user['user_city']) ? $user['user_city'] : ''; ?>';        
        var states = '<?php base_url() ?>/assets/js/EstateAndCity.json';
        
        $.getJSON(states, function (data) {

            //var items = [];
            var options = '<option value="">escolha um estado</option>';	
            
            $.each(data, function (key, val) {
                if(user_state == val.nome){
                    options += '<option selected value="' + val.nome + '">' + val.nome + '</option>';
                }else{
                    options += '<option value="' + val.nome + '">' + val.nome + '</option>';
                }			
            });		
            
            $("#user_state").html(options);				
            
            $("#user_state").change(function () {
                var options_city = '';
                var str = "";					
                
                $("#user_state option:selected").each(function () {
                    str += $(this).text();
                });
                
                $.each(data, function (key, val) {
                    if(val.nome == str) {							
                        $.each(val.cidades, function (key_city, val_city) {
                            if(val_city == user_city){
                                options_city += '<option selected value="' + val_city + '">' + val_city + '</option>';
                            }else{
                                options_city += '<option value="' + val_city + '">' + val_city + '</option>';
                            }
                        });							
                    }
                });
                $("#user_city").html(options_city);
            }).change();
        });    
    });
    
</script>		
<?php echo $this->endSection(); ?>
