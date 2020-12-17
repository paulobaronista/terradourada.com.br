<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/Spicycomm_TerraDourada_Website_01_Home_01.jpg" alt="">
</div>
<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/Spicycomm_TerraDourada_Website_01_Home_02.jpg" alt="">
</div>
<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/Spicycomm_TerraDourada_Website_01_Home_03.jpg" alt="">
</div>
<div class="container-fluid" style="background-color: #585858;padding-bottom:30px;padding-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top: 20px;padding-bottom:20px">
                <img class="img-responsive" src="<?= base_url(); ?>assets/images/portifolio.jpg" alt="">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo base_url(); ?>lagosdejarinu">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/01.png" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo base_url(); ?>cidadejardim">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/02.png" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo base_url(); ?>terrasdesantacruz">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/03.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/Spicycomm_TerraDourada_Website_01_Home_05.jpg" alt="">
</div>
<!-- <div class="col-xs-12 col-sm-12 col-md-12">
    <form method="post" role="form" action="<?php echo base_url("contato") ?>">
        <span class="tt-form text-center">
            <p>Preencha os dados abaixo para<br /> um atendimento personalizado!</p>
        </span>
        <div class="group-form">
            <div class="form-group">
                <label for="nome">Nome*</label>
                <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input id="email" type="email" class="email form-control" name="email" required="required" />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input id="telefone" class="phone form-control" type="tel" name="phone" />
            </div>
            <div class="form-group">
                <label for="form-mensagem">Mensagem</label>
                <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
            </div>
            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
        </div>
    </form>
</div> -->
<!-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>COPYRIGHT © - TODOS OS DIREITOS RESERVADOS </p>
            </div>
        </div>
    </div>
</footer> -->
<?php
if (isset($email_enviado))
    echo $email_enviado;
?>