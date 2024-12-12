<!--====== CONTACT PART START ======-->
<script>
    $(document).ready(function() {
        $('#page1 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p1]:checked', '#page1').val();
            //alert(selectCheck);
            //https://stackoverflow.com/questions/977137/how-to-reset-radiobuttons-in-jquery-so-that-none-is-checked
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('#mv8_lineal_p2').prop('disabled', false);
                $('#mv8_lineal_p2').prop('required', true);
                $('#mv8_lineal_p2').removeAttr("readonly");
                $('#mv8_lineal_p2').prop('placeholder', "http...");
                $('#mv8_lineal_p3').prop('required', true);
                $('#mv8_lineal_p3').prop('disabled', false);
                $('#mv8_lineal_p3').removeAttr("readonly");
                $('input[name="mv8_lineal_p4"]').prop('disabled', false);
                $('input[name="mv8_lineal_p4"]').prop('required', true);
                $('input[name="mv8_lineal_p5"]').prop('disabled', false);
                $('input[name="mv8_lineal_p5"]').prop('required', true);
                $('input[name="mv8_lineal_p6"]').prop('disabled', false);
                $('input[name="mv8_lineal_p6"]').prop('required', true);
            }
            if (selectCheck == "2") {
                $('#mv8_lineal_p2').prop('disabled', true);
                $('#mv8_lineal_p2').removeAttr("required");
                $('#mv8_lineal_p2').val('');
                $('#mv8_lineal_p2').prop('placeholder', '');
                $('#mv8_lineal_p3').prop('disabled', true);
                $('#mv8_lineal_p3').removeAttr("required");
                $('#mv8_lineal_p3').val('');
                $('input[name="mv8_lineal_p4"]').prop('checked', false);
                $('input[name="mv8_lineal_p4"]').prop('disabled', true);
                $('input[name="mv8_lineal_p4"]').removeAttr("required");
                $('#mv8_lineal_p4_o').val('');
                $('#mv8_lineal_p4_o').prop('disabled', true);
                $('input[name="mv8_lineal_p5"]').prop('checked', false);
                $('input[name="mv8_lineal_p5"]').prop('disabled', true);
                $('input[name="mv8_lineal_p5"]').removeAttr("required");
                $('input[name="mv8_lineal_p6"]').prop('checked', false);
                $('input[name="mv8_lineal_p6"]').prop('disabled', true);
                $('input[name="mv8_lineal_p6"]').removeAttr("required");
            }
        });

        $('#page1 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p4]:checked', '#page1').val();
            //alert(selectCheck);
            console.log(selectCheck);
            if (selectCheck == "4") {
                $('#mv8_lineal_p4_o').prop('disabled', false);
                $('#mv8_lineal_p4_o').prop('required', true);
                $('#mv8_lineal_p4_o').removeAttr("readonly");
            } else {
                $('#mv8_lineal_p4_o').val('');
                $('#mv8_lineal_p4_o').removeAttr("required");
                $('#mv8_lineal_p4_o').prop('disabled', true);
            }
        });

        $('#page1 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p5]:checked', '#page1').val();
            //alert(selectCheck);
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('#mv8_lineal_p5_nom').prop('disabled', false);
                $('#mv8_lineal_p5_nom').prop('required', true);
                $('#mv8_lineal_p5_nom').removeAttr("readonly");
                $('#mv8_lineal_p5_ape').prop('disabled', false);
                $('#mv8_lineal_p5_ape').prop('required', true);
                $('#mv8_lineal_p5_ape').removeAttr("readonly");
                $('#mv8_lineal_p5_email').prop('disabled', false);
                $('#mv8_lineal_p5_email').prop('required', true);
                $('#mv8_lineal_p5_email').removeAttr("readonly");
                $('#mv8_lineal_p5_mobile').prop('disabled', false);
                $('#mv8_lineal_p5_mobile').prop('required', true);
                $('#mv8_lineal_p5_mobile').prop('placeholder', '123 456 789');
                $('#mv8_lineal_p5_mobile').removeAttr("readonly");
            } else {
                $('#mv8_lineal_p5_nom').val('');
                $('#mv8_lineal_p5_nom').prop('disabled', true);
                $('#mv8_lineal_p5_ape').val('');
                $('#mv8_lineal_p5_ape').prop('disabled', true);
                $('#mv8_lineal_p5_email').val('');
                $('#mv8_lineal_p5_email').prop('disabled', true);
                $('#mv8_lineal_p5_mobile').val('');
                $('#mv8_lineal_p5_mobile').removeAttr("placeholder");
                $('#mv8_lineal_p5_mobile').prop('disabled', true);
                $('#mv8_lineal_p5_nom').removeAttr("required");
                $('#mv8_lineal_p5_ape').removeAttr("required");
                $('#mv8_lineal_p5_email').removeAttr("required");
                $('#mv8_lineal_p5_mobile').removeAttr("required");
            }
        });

        $('#page1 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p6]:checked', '#page1').val();
            //alert(selectCheck);
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('input[name="mv8_lineal_p6_tipo"]').prop('disabled', false);
                $('input[name="mv8_lineal_p6_tipo"]').prop('required', true);
                $('#mv8_lineal_p6_nom').prop('required', true);
                $('#mv8_lineal_p6_nom').prop('disabled', false);
                $('#mv8_lineal_p6_nom').removeAttr("readonly");
                $('#mv8_lineal_p6_ape').prop('required', true);
                $('#mv8_lineal_p6_ape').prop('disabled', false);
                $('#mv8_lineal_p6_ape').removeAttr("readonly");
                $('#mv8_lineal_p6_email').prop('required', true);
                $('#mv8_lineal_p6_email').prop('disabled', false);
                $('#mv8_lineal_p6_email').removeAttr("readonly");
                $('#mv8_lineal_p6_mobile').prop('required', true);
                $('#mv8_lineal_p6_mobile').prop('disabled', false);
                $('#mv8_lineal_p6_mobile').prop('placeholder', '123 456 789');
                $('#mv8_lineal_p6_mobile').removeAttr("readonly");
            } else {
                $('input[name="mv8_lineal_p6_tipo"]').prop('checked', false);
                $('input[name="mv8_lineal_p6_tipo"]').prop('disabled', true);
                $('input[name="mv8_lineal_p6_tipo"]').removeAttr("required");
                $('#mv8_lineal_p6_nom').val('');
                $('#mv8_lineal_p6_nom').prop('disabled', true);
                $('#mv8_lineal_p6_ape').val('');
                $('#mv8_lineal_p6_ape').prop('disabled', true);
                $('#mv8_lineal_p6_email').val('');
                $('#mv8_lineal_p6_email').prop('disabled', true);
                $('#mv8_lineal_p6_mobile').val('');
                $('#mv8_lineal_p6_mobile').removeAttr("placeholder");
                $('#mv8_lineal_p6_mobile').prop('disabled', true);
                $('#mv8_lineal_p6_nom').removeAttr("required");
                $('#mv8_lineal_p6_ape').removeAttr("required");
                $('#mv8_lineal_p6_email').removeAttr("required");
                $('#mv8_lineal_p6_mobile').removeAttr("required");
            }
        });

        $('#page2 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p7]:checked', '#page2').val();
            //alert(selectCheck);
            //https://stackoverflow.com/questions/977137/how-to-reset-radiobuttons-in-jquery-so-that-none-is-checked
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('input[name="mv8_lineal_p7"]').prop('disabled', false);
                $('#mv8_lineal_p8').prop('disabled', false);
                $('#mv8_lineal_p8').removeAttr("readonly");
                $('#mv8_lineal_p8').prop('required', true);
                $('#mv8_lineal_p8').prop('placeholder', 'http...');
            }
            if (selectCheck == "2") {
                $('#mv8_lineal_p8').prop('disabled', true);
                $('#mv8_lineal_p8').val('');
                $('#mv8_lineal_p8').removeAttr("required");
                $('#mv8_lineal_p8').prop('placeholder', '');
            }
        });

        $('#page2 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p9]:checked', '#page2').val();
            var p10_chk1 = $('#mv8_lineal_p10_chk1:checked').val();
            var p10_chk2 = $('#mv8_lineal_p10_chk2:checked').val();
            var p10_chk3 = $('#mv8_lineal_p10_chk3:checked').val();
            var p10_chk4 = $('#mv8_lineal_p10_chk4:checked').val();
            //alert(selectCheck);
            //https://stackoverflow.com/questions/977137/how-to-reset-radiobuttons-in-jquery-so-that-none-is-checked
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('#mv8_lineal_p10_chk1').prop('disabled', false);
                $('#mv8_lineal_p10_chk2').prop('disabled', false);
                $('#mv8_lineal_p10_chk3').prop('disabled', false);
                $('#mv8_lineal_p10_chk4').prop('disabled', false);
                console.log(p10_chk1);
            }
            if (selectCheck == "2") {
                $('#mv8_lineal_p10_chk1').prop('disabled', true);
                $('#mv8_lineal_p10_chk2').prop('disabled', true);
                $('#mv8_lineal_p10_chk3').prop('disabled', true);
                $('#mv8_lineal_p10_chk4').prop('disabled', true);
                $('#mv8_lineal_p10_1').val('');
                $('#mv8_lineal_p10_2').val('');
                $('#mv8_lineal_p10_3').val('');
                $('#mv8_lineal_p10_4').val('');
                $('#mv8_lineal_p10_chk1').prop('checked', false);
                $('#mv8_lineal_p10_chk2').prop('checked', false);
                $('#mv8_lineal_p10_chk3').prop('checked', false);
                $('#mv8_lineal_p10_chk4').prop('checked', false);
                $('#mv8_lineal_p10_1').prop('disabled', true);
                $('#mv8_lineal_p10_2').prop('disabled', true);
                $('#mv8_lineal_p10_3').prop('disabled', true);
                $('#mv8_lineal_p10_4').prop('disabled', true);
                console.log(p10_chk1);
            }
        });

        $('#page2 input').on('change', function() {
            var p10_chk1 = $('#mv8_lineal_p10_chk1:checked').val();
            var p10_chk2 = $('#mv8_lineal_p10_chk2:checked').val();
            var p10_chk3 = $('#mv8_lineal_p10_chk3:checked').val();
            var p10_chk4 = $('#mv8_lineal_p10_chk4:checked').val();
            //alert(selectCheck);
            //https://stackoverflow.com/questions/977137/how-to-reset-radiobuttons-in-jquery-so-that-none-is-checked

            if (p10_chk1 == "1") {
                $('#mv8_lineal_p10_1').prop('disabled', false);
                $('#mv8_lineal_p10_1').prop('required', true);
                $('#mv8_lineal_p10_1').prop('placeholder', 'http...');
                $('#mv8_lineal_p10_1').removeAttr('readonly');
            } else {
                $('#mv8_lineal_p10_1').prop('disabled', true);
                $('#mv8_lineal_p10_1').prop('required', false);
                $('#mv8_lineal_p10_1').prop('placeholder', '');
                $('#mv8_lineal_p10_1').val('');
            }

            if (p10_chk2 == "1") {
                $('#mv8_lineal_p10_2').prop('disabled', false);
                $('#mv8_lineal_p10_2').prop('required', true);
                $('#mv8_lineal_p10_2').prop('placeholder', 'http...');
                $('#mv8_lineal_p10_2').removeAttr('readonly');
            } else {
                $('#mv8_lineal_p10_2').prop('disabled', true);
                $('#mv8_lineal_p10_2').prop('required', false);
                $('#mv8_lineal_p10_2').prop('placeholder', '');
                $('#mv8_lineal_p10_2').val('');
            }

            if (p10_chk3 == "1") {
                $('#mv8_lineal_p10_3').prop('disabled', false);
                $('#mv8_lineal_p10_3').prop('required', true);
                $('#mv8_lineal_p10_3').prop('placeholder', 'http...');
                $('#mv8_lineal_p10_3').removeAttr('readonly');
            } else {
                $('#mv8_lineal_p10_3').prop('disabled', true);
                $('#mv8_lineal_p10_3').prop('required', false);
                $('#mv8_lineal_p10_3').prop('placeholder', '');
                $('#mv8_lineal_p10_3').val('');
            }

            if (p10_chk4 == "1") {
                $('#mv8_lineal_p10_4').prop('disabled', false);
                $('#mv8_lineal_p10_4').prop('required', true);
                $('#mv8_lineal_p10_4').prop('placeholder', 'http...');
                $('#mv8_lineal_p10_4').removeAttr('readonly');
            } else {
                $('#mv8_lineal_p10_4').prop('disabled', true);
                $('#mv8_lineal_p10_4').prop('required', false);
                $('#mv8_lineal_p10_4').prop('placeholder', '');
                $('#mv8_lineal_p10_4').val('');
            }

        });

        $('#page2 input').on('change', function() {
            var selectCheck = $('input[name=mv8_lineal_p11]:checked', '#page2').val();
            //alert(selectCheck);
            //https://stackoverflow.com/questions/977137/how-to-reset-radiobuttons-in-jquery-so-that-none-is-checked
            console.log(selectCheck);
            if (selectCheck == "1") {
                $('#mv8_lineal_p12').prop('disabled', false);
                $('#mv8_lineal_p12').removeAttr("readonly");
                $('#mv8_lineal_p12').prop('required', true);
                $('#mv8_lineal_p12').prop('placeholder', 'http...');
                $('input[name="mv8_lineal_p13"]').prop('disabled', false);
                $('input[name="mv8_lineal_p13"]').prop('required', true);
            }
            if (selectCheck == "2") {
                $('#mv8_lineal_p12').prop('disabled', true);
                $('#mv8_lineal_p12').val('');
                $('#mv8_lineal_p12').removeAttr("required");
                $('#mv8_lineal_p12').prop('placeholder', '');
                $('input[name="mv8_lineal_p13"]').prop('disabled', false);
                $('input[name="mv8_lineal_p13"]').prop('checked', false);
                $('input[name="mv8_lineal_p13"]').removeAttr("required");
                $('#mv8_lineal_p13_o').prop('disabled', true);
                $('#mv8_lineal_p13_o').val('');
                $('#mv8_lineal_p13_o').removeAttr("required");
                $('#mv8_lineal_p13_o').prop('placeholder', '');
            }
        });

    });
</script>

<section id="contact" class="contact-area pt-120 pb-120 mb-4">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="section-title pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h1 class="sub-title">Formulario de recojo de información</h1>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-box">
                    <div class="card-header">
                        <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#page1" role="tab">Información básica</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page2" role="tab">Información adicional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page3" role="tab">Ítems a evaluar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page4" role="tab">Otros ítems</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#page_bolsalaboral" role="tab">Bolsa laboral</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#observa1" role="tab">Anotaciones</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="page1" role="tabpanel">
                                <?= form_open('portalcontroller/update', array('id' => 'page1', 'name' => 'page1')) ?>
                                <div class="form-group row">
                                    <input type="hidden" value="<?= $portal->instituto_id ?>" name="instituto_id" id="instituto_id">
                                    <div class="col-6">
                                        <?= form_label('1. Cuenta con portal web institucional?', 'mv8_lineal_p1_1', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv8_lineal_p1_1 = array(
                                        'name' => 'mv8_lineal_p1',
                                        'id' => 'mv8_lineal_p1_1',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p1 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p1_2 = array(
                                        'name' => 'mv8_lineal_p1',
                                        'id' => 'mv8_lineal_p1_2',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p1 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p1_1) . ' Sí', 'mv8_lineal_p1_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p1_2) . ' No', 'mv8_lineal_p1_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('2. Indique URL del portal web?', 'mv8_lineal_p2', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-6">
                                        <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p2', 'id' => 'mv8_lineal_p2', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled', ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true', 'size' => '100', 'value' => $portal->mv8_lineal_p2, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('3. Hasta cuando estará disponible el portal web? Indique una fecha aproximada', 'mv8_lineal_p3', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-4">
                                        <?= form_input(array('type' => 'date', 'name' => 'mv8_lineal_p3', 'id' => 'mv8_lineal_p3', ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled', ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true', 'value' => $portal->mv8_lineal_p3, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('4. El portal web institucional es financiado por:', 'mv8_lineal_p4_1', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv8_lineal_p4_1 = array(
                                        'name' => 'mv8_lineal_p4',
                                        'id' => 'mv8_lineal_p4_1',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p4 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p4_2 = array(
                                        'name' => 'mv8_lineal_p4',
                                        'id' => 'mv8_lineal_p4_2',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p4 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p4_3 = array(
                                        'name' => 'mv8_lineal_p4',
                                        'id' => 'mv8_lineal_p4_3',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 3,
                                        'checked' => ($portal->mv8_lineal_p4 == '3' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p4_4 = array(
                                        'name' => 'mv8_lineal_p4',
                                        'id' => 'mv8_lineal_p4_4',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 4,
                                        'checked' => ($portal->mv8_lineal_p4 == '4' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p4_1) . '1.Recursos propios del instituto', 'mv8_lineal_p4_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p4_2) . '2.Financiado por recursos de la DRE', 'mv8_lineal_p4_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p4_3) . '3.Financiado por Minedu a través de la PP 147', 'mv8_lineal_p4_3', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p4_4) . '4.Otro (especifique)', 'mv8_lineal_p4_4', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p4_o', 'id' => 'mv8_lineal_p4_o', ($portal->mv8_lineal_p4 == '4' ? FALSE : 'disabled') => 'disabled', ($portal->mv8_lineal_p4 == '4' ? 'required' : FALSE) => 'true', 'value' => $portal->mv8_lineal_p4_o, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('5. Existe personal del instituto que sea responsable del portal web?', 'mv8_lineal_p5_si', array('class' => 'control-label')); ?>
                                        <!--<label>5. Existe personal del instituto que sea responsable del portal web?</label>-->
                                    </div>
                                    <?php
                                    $mv8_lineal_p5_si = array(
                                        'name' => 'mv8_lineal_p5',
                                        'id' => 'mv8_lineal_p5_si',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p5 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p5_no = array(
                                        'name' => 'mv8_lineal_p5',
                                        'id' => 'mv8_lineal_p5_no',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p5 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p5_si) . ' Sí', 'mv8_lineal_p5_si', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p5_no) . ' No', 'mv8_lineal_p5_no', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Nombres', 'mv8_lineal_p5_nom', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p5_nom', 'id' => 'mv8_lineal_p5_nom', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p5 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p5_nom, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Apellidos', 'mv8_lineal_p5_ape', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p5_ape', 'id' => 'mv8_lineal_p5_ape', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p5 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p5_ape, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Email', 'mv8_lineal_p5_email', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'email', 'name' => 'mv8_lineal_p5_email', 'id' => 'mv8_lineal_p5_email', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p5 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p5_email, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Telf. celular', 'mv8_lineal_p5_mobile', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'tel', 'pattern' => '[0-9]{3} [0-9]{3} [0-9]{3}', 'name' => 'mv8_lineal_p5_mobile', 'id' => 'mv8_lineal_p5_mobile', 'maxlength' => '30', ($portal->mv8_lineal_p5 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p5_mobile, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('6. Existe personal externo que sea responsable o apoye en la actualización del portal web?', 'mv8_lineal_p6_1', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv8_lineal_p6_si = array(
                                        'name' => 'mv8_lineal_p6',
                                        'id' => 'mv8_lineal_p6_si',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p6 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p6_no = array(
                                        'name' => 'mv8_lineal_p6',
                                        'id' => 'mv8_lineal_p6_no',
                                        ($portal->mv8_lineal_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p1 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p6 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p6_si) . ' Sí', 'mv8_lineal_p6_si', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p6_no) . ' No', 'mv8_lineal_p6_no', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-2">
                                    </div>
                                    <?php
                                    $mv8_lineal_p6_tipo_1 = array(
                                        'name' => 'mv8_lineal_p6_tipo',
                                        'id' => 'mv8_lineal_p6_tipo_1',
                                        ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p6 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p6_tipo == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p6_tipo_2 = array(
                                        'name' => 'mv8_lineal_p6_tipo',
                                        'id' => 'mv8_lineal_p6_tipo_2',
                                        ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled',
                                        ($portal->mv8_lineal_p6 == '1' ? 'required' : FALSE) => 'true',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p6_tipo == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                    <div class="col-5">
                                        <?= form_label(form_radio($mv8_lineal_p6_tipo_1) . 'Es Proveedor independiente', 'mv8_lineal_p6_tipo_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-5">
                                        <?= form_label(form_radio($mv8_lineal_p6_tipo_2) . 'Es Empresa', 'mv8_lineal_p6_tipo_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Nombres', 'mv8_lineal_p6_nom', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p6_nom', 'id' => 'mv8_lineal_p6_nom', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p6_nom, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Apellidos', 'mv8_lineal_p6_ape', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p6_ape', 'id' => 'mv8_lineal_p6_ape', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p6_ape, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Email', 'mv8_lineal_p6_email', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'email', 'name' => 'mv8_lineal_p6_email', 'id' => 'mv8_lineal_p6_email', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p6_email, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label('Telf. celular', 'mv8_lineal_p6_mobile', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'tel', 'pattern' => '[0-9]{3} [0-9]{3} [0-9]{3}', 'name' => 'mv8_lineal_p6_mobile', 'id' => 'mv8_lineal_p6_mobile', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toUpperCase()', ($portal->mv8_lineal_p6 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p6_mobile, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-center mx-auto mt-3">
                                        <?php
                                        //$portal = new stdClass();
                                        //$portal->updated_at = '2024-11-04';
                                        //$portal->updated_at = ''; 
                                        ?>
                                        <button type="button" value="Cancelar" class="btn btn-danger">Cancelar</button>
                                        <button type="submit" class="btn btn-success">
                                            <?= $portal->updated_at ? 'Actualizar' : 'Grabar' ?>&nbsp;y pasar a información adicional
                                        </button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                            <div class="tab-pane" id="page2" role="tabpanel">
                                <?= form_open('portalcontroller/update', array('id' => 'page2', 'name' => 'page2')) ?>
                                <div class="form-group row">
                                    <input type="hidden" value="<?= $portal->instituto_id ?>" name="instituto_id" id="instituto_id">
                                    <div class="col-6">
                                        <?= form_label('7. Cuenta con Entorno Virtual de Aprendizaje (EVA)?', 'mv8_lineal_p7_si', array('class' => 'control-label')); ?>
                                        <!--<label>7. Cuenta con Entorno Virtual de Aprendizaje (EVA)?</label>-->
                                        <?php
                                        $mv8_lineal_p7_si = array(
                                            'name' => 'mv8_lineal_p7',
                                            'id' => 'mv8_lineal_p7_si',
                                            'value' => 1,
                                            'checked' => ($portal->mv8_lineal_p7 == '1' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        $mv8_lineal_p7_no = array(
                                            'name' => 'mv8_lineal_p7',
                                            'id' => 'mv8_lineal_p7_no',
                                            'value' => 2,
                                            'checked' => ($portal->mv8_lineal_p7 == '2' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p7_si) . ' Sí', 'mv8_lineal_p7_si', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p7_no) . ' No', 'mv8_lineal_p7_no', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('8. Indique URL del EVA', 'mv8_lineal_p8', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-6">
                                        <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p8', 'id' => 'mv8_lineal_p8', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p7 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '100', 'value' => $portal->mv8_lineal_p8, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('9. El instituto cuenta con redes sociales activas?', 'mv8_lineal_p9_si', array('class' => 'control-label')); ?>
                                        <?php
                                        //$portal->mv8_lineal_p9 = '1';
                                        $mv8_lineal_p9_si = array(
                                            'name' => 'mv8_lineal_p9',
                                            'id' => 'mv8_lineal_p9_si',
                                            'value' => 1,
                                            'checked' => ($portal->mv8_lineal_p9 == '1' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        $mv8_lineal_p9_no = array(
                                            'name' => 'mv8_lineal_p9',
                                            'id' => 'mv8_lineal_p9_no',
                                            'value' => 2,
                                            'checked' => ($portal->mv8_lineal_p9 == '2' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p9_si) . ' Sí', 'mv8_lineal_p9_si', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p9_no) . ' No', 'mv8_lineal_p9_no', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('10. Indique las URL de las redes sociales que posee el instituto:', 'mv8_lineal_p10_chk1', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    /*$portal->mv8_lineal_p10_chk1 = '1';
                  $portal->mv8_lineal_p10_chk2 = '0';
                  $portal->mv8_lineal_p10_1 = 'https://bolsalaboral.lasalleurubamba.edu.pe/';*/
                                    $mv8_lineal_p10_chk1 = array('name' => 'mv8_lineal_p10_chk1', 'id' => 'mv8_lineal_p10_chk1', 'value' => '1', 'checked' => $portal->mv8_lineal_p10_chk1 == '1' ? TRUE : FALSE, ($portal->mv8_lineal_p9 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv8_lineal_p10_chk2 = array('name' => 'mv8_lineal_p10_chk2', 'id' => 'mv8_lineal_p10_chk2', 'value' => '1', 'checked' => $portal->mv8_lineal_p10_chk2 == '1' ? TRUE : FALSE, ($portal->mv8_lineal_p9 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv8_lineal_p10_chk3 = array('name' => 'mv8_lineal_p10_chk3', 'id' => 'mv8_lineal_p10_chk3', 'value' => '1', 'checked' => $portal->mv8_lineal_p10_chk3 == '1' ? TRUE : FALSE, ($portal->mv8_lineal_p9 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv8_lineal_p10_chk4 = array('name' => 'mv8_lineal_p10_chk4', 'id' => 'mv8_lineal_p10_chk4', 'value' => '1', 'checked' => $portal->mv8_lineal_p10_chk4 == '1' ? TRUE : FALSE, ($portal->mv8_lineal_p9 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <!--< ?= form_label(form_checkbox($mv8_lineal_p10_chk1, 1, set_checkbox('mv8_lineal_p10_chk1', '1', $portal->mv8_lineal_p10_chk1 == '1' ? TRUE : FALSE, array('disabled' => 'disabled'))) . '1.Facebook', 'mv8_lineal_p10_chk1', array('class' => 'radio-inline col-md-3')); ?>-->
                                            <?= form_label(form_checkbox($mv8_lineal_p10_chk1) . '1.Facebook', 'mv8_lineal_p10_chk1', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p10_1', 'id' => 'mv8_lineal_p10_1', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p10_chk1 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $portal->mv8_lineal_p10_1, 'class' => 'form-control col-md-6')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv8_lineal_p10_chk2) . '2.Youtube', 'mv8_lineal_p10_chk2', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p10_2', 'id' => 'mv8_lineal_p10_2', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p10_chk2 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $portal->mv8_lineal_p10_2, 'class' => 'form-control col-md-6')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv8_lineal_p10_chk3) . '3.Instagram', 'mv8_lineal_p10_chk3', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p10_3', 'id' => 'mv8_lineal_p10_3', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p10_chk3 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $portal->mv8_lineal_p10_3, 'class' => 'form-control col-md-6')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv8_lineal_p10_chk4) . '4.Twitter', 'mv8_lineal_p10_chk4', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'url', 'name' => 'mv8_lineal_p10_4', 'id' => 'mv8_lineal_p10_4', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($portal->mv8_lineal_p10_chk4 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $portal->mv8_lineal_p10_4, 'class' => 'form-control col-md-6')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('11. Cuenta con Biblioteca Virtual?', 'mv8_lineal_p11', array('class' => 'control-label')); ?>
                                        <?php
                                        $mv8_lineal_p11_si = array(
                                            'name' => 'mv8_lineal_p11',
                                            'id' => 'mv8_lineal_p11_si',
                                            'value' => 1,
                                            'checked' => ($portal->mv8_lineal_p11 == '1' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        $mv8_lineal_p11_no = array(
                                            'name' => 'mv8_lineal_p11',
                                            'id' => 'mv8_lineal_p11_no',
                                            'value' => 2,
                                            'checked' => ($portal->mv8_lineal_p11 == '2' ? TRUE : FALSE),
                                            'style' => 'margin-right:5px'
                                        );
                                        ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p11_si) . ' Sí', 'mv8_lineal_p11_si', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv8_lineal_p11_no) . ' No', 'mv8_lineal_p11_no', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('12. Indique URL de la Biblioteca Virtual', 'mv8_lineal_p12', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p12', 'id' => 'mv8_lineal_p12', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', 'readonly' => 'true', 'size' => '100', 'value' => $portal->mv8_lineal_p12, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('13. La biblioteca virtual es financiada por:', 'mv8_lineal_p13', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv8_lineal_p13_1 = array(
                                        'name' => 'mv8_lineal_p13',
                                        'id' => 'mv8_lineal_p13_1',
                                        'value' => 1,
                                        'checked' => ($portal->mv8_lineal_p13 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p13_2 = array(
                                        'name' => 'mv8_lineal_p13',
                                        'id' => 'mv8_lineal_p13_2',
                                        'value' => 2,
                                        'checked' => ($portal->mv8_lineal_p13 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p13_3 = array(
                                        'name' => 'mv8_lineal_p13',
                                        'id' => 'mv8_lineal_p13_3',
                                        'value' => 3,
                                        'checked' => ($portal->mv8_lineal_p13 == '3' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv8_lineal_p13_4 = array(
                                        'name' => 'mv8_lineal_p13',
                                        'id' => 'mv8_lineal_p13_4',
                                        'value' => 4,
                                        'checked' => ($portal->mv8_lineal_p13 == '4' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p13_1) . '1.Recursos propios del instituto', 'mv8_lineal_p13_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p13_2) . '2.Financiado por recursos de la DRE', 'mv8_lineal_p13_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p13_3) . '3.Financiado por Minedu a través de la PP 147', 'mv8_lineal_p13_3', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label(form_radio($mv8_lineal_p13_4) . '4.Otro (especifique)', 'mv8_lineal_p13_4', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv8_lineal_p13_o', 'id' => 'mv8_lineal_p13_o', 'placeholder' => 'www...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toUpperCase()', 'readonly' => 'true', 'size' => '100', 'value' => $portal->mv8_lineal_p13_o, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-center mx-auto mt-3">
                                        <?php
                                        //$portal = new stdClass();
                                        //$portal->updated_at = '2024-11-04';
                                        //$portal->updated_at = ''; 
                                        ?>
                                        <button type="button" value="Cancelar" class="btn btn-danger">Cancelar</button>
                                        <button type="submit" class="btn btn-success">
                                            <?= $portal->updated_at ? 'Actualizar' : 'Grabar' ?>&nbsp;y pasar a ítems art. 42
                                        </button>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                            <div class="tab-pane" id="page3" role="tabpanel">
                                <h6>La institución cuenta con un Portal Institucional operativo, de fácil acceso al público en
                                    general, sin perjuicio de la protección de datos personales y/o información sensible de acuerdo
                                    con la ley de la materia, y conforme lo señalado en el artículo 42 de la Ley N° 30512, en donde
                                    se encuentre en forma permanente y actualizada información relativa a:
                                </h6><br>
                                <!--<table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Ítem</th>
                      <th scope="col">Existe?</th>
                      <th scope="col">Condición</th>
                      <th scope="col">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Relación y número de becas y créditos educativos otorgados en el año en curso.</td>
                      <td>Sí</td>
                      <td>Incompleto</td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Relación de derechos, tasas, montos de pensiones u otros pagos que deben realizar los
                        estudiantes por toda índole, según corresponda.</td>
                      <td>mv8_matriz_aplica</td>
                      <td>mv8_matriz_avance</td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Proyectos de investigación y los gastos que genere.</td>
                      <td>No aplica</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Conformación del cuerpo docente, sus respectivas hojas de vida actualizadas y las materias
                        en las que se desempeña.</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>El número de ingresantes, matriculados y egresados por año y programa.</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Relación de programas de estudios, sus horarios y procesos de matrícula.</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Periodo de vigencia de su licenciamiento.</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>El estatuto o reglamento institucional.</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Inversiones, reinversiones, donaciones, obras de infraestructura, recursos de diversa
                        fuente, entre otros (para IES y EEST públicos).</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">10</th>
                      <td>El texto único de procedimientos administrativos (para IES y EEST públicos).</td>
                      <td>No</td>
                      <td></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Editar</button>
                      </td>
                    </tr>
                  </tbody>
                </table>-->
                            </div>
                            <div class="tab-pane" id="page4" role="tabpanel">
                                <h6>La institución cuenta con un Portal Institucional operativo, de fácil acceso al público en
                                    general, sin perjuicio de la protección de datos personales y/o información sensible de acuerdo
                                    con la ley de la materia, y conforme lo señalado en el artículo 42 de la Ley N° 30512, en donde
                                    se encuentre en forma permanente y actualizada información relativa a:
                                </h6><br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="table-success">
                                            <th scope="col">#</th>
                                            <th scope="col">Ítem</th>
                                            <th scope="col">Existe?</th>
                                            <th scope="col">Condición</th>
                                            <th scope="col">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($matriz as $item) : ?>
                                            <tr class="align-middle">
                                                <td>
                                                    <?= $item->art42_id ?>
                                                </td>
                                                <td scope="row">
                                                    <?= $item->text_rvm103 ?>
                                                </td>
                                                <td scope="row">
                                                    <?= ($item->aplica_IES_art42 == 2) ? 'No aplica' : $item->mv8_matriz_p1 ?>
                                                </td>
                                                <td scope="row">
                                                    <?= $item->mv8_matriz_avance ?>
                                                </td>
                                                <td scope="row">
                                                    <?php
                                                    //https://es.stackoverflow.com/questions/363555/como-puedo-enviar-el-id-a-una-modal
                                                    if ($item->aplica_IES_art42 == 1) {
                                                        echo '<button class="btn btn-primary editbtn" data-toggle="modal" id="' . $item->id . '" data-id="' . $item->id . '" data-target="#myModal">Editar</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="page_bolsalaboral" role="tabpanel">
                                <?= form_open('bolsacontroller/update', array('id' => 'bolsalaboral', 'name' => 'bolsalaboral')) ?>
                                <div class="form-group row">
                                    <input type="hidden" value="<?= $bolsa->instituto_id ?>" name="instituto_id" id="instituto_id">
                                    <div class="col-6">
                                        <?= form_label('14. Cuenta con bolsa laboral?', 'mv39_bolsa_p1', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv39_bolsa_p1_1 = array(
                                        'name' => 'mv39_bolsa_p1',
                                        'id' => 'mv39_bolsa_p1_1',
                                        'value' => 1,
                                        'checked' => ($bolsa->mv39_bolsa_p1 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv39_bolsa_p1_2 = array(
                                        'name' => 'mv39_bolsa_p1',
                                        'id' => 'mv39_bolsa_p1_2',
                                        'value' => 2,
                                        'checked' => ($bolsa->mv39_bolsa_p1 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv39_bolsa_p1_1) . ' Sí', 'mv39_bolsa_p1_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-3">
                                        <?= form_label(form_radio($mv39_bolsa_p1_2) . ' No', 'mv39_bolsa_p1_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('15. Indique URL de la bolsa laboral?', 'mv39_bolsa_p2', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-6">
                                        <?= form_input(array('type' => 'url', 'name' => 'mv39_bolsa_p2', 'id' => 'mv39_bolsa_p2', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p1 == '1' ? 'required' : FALSE) => 'true', 'size' => '100', 'value' => $bolsa->mv39_bolsa_p2, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <?= form_label('16. Hasta cuando estará disponible la bolsa laboral? Indique una fecha aproximada', 'mv39_bolsa_p3', array('class' => 'control-label')); ?>
                                    </div>
                                    <div class="col-4">
                                        <?= form_input(array('type' => 'date', 'name' => 'mv39_bolsa_p3', 'id' => 'mv39_bolsa_p3', ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p1 == '1' ? 'required' : FALSE) => 'true', 'value' => $bolsa->mv39_bolsa_p3, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('17. La bolsa laboral está ubicada en:', 'mv39_bolsa_p4', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv39_bolsa_p4_1 = array(
                                        'name' => 'mv39_bolsa_p4',
                                        'id' => 'mv39_bolsa_p4_1',
                                        ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 1,
                                        'checked' => ($bolsa->mv39_bolsa_p4 == '1' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv39_bolsa_p4_2 = array(
                                        'name' => 'mv39_bolsa_p4',
                                        'id' => 'mv39_bolsa_p4_2',
                                        ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 2,
                                        'checked' => ($bolsa->mv39_bolsa_p4 == '2' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv39_bolsa_p4_3 = array(
                                        'name' => 'mv39_bolsa_p4',
                                        'id' => 'mv39_bolsa_p4_3',
                                        ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 3,
                                        'checked' => ($bolsa->mv39_bolsa_p4 == '3' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    $mv39_bolsa_p4_4 = array(
                                        'name' => 'mv39_bolsa_p4',
                                        'id' => 'mv39_bolsa_p4_4',
                                        ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled',
                                        'value' => 4,
                                        'checked' => ($bolsa->mv39_bolsa_p4 == '4' ? TRUE : FALSE),
                                        'style' => 'margin-right:5px'
                                    );
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv39_bolsa_p4_1) . '1.Portal web del instituto', 'mv39_bolsa_p4_1', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv39_bolsa_p4_2) . '2.Otro sitio web propio del instituto', 'mv39_bolsa_p4_2', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <?= form_label(form_radio($mv39_bolsa_p4_3) . '3.Sitio web propiedad de un tercero', 'mv39_bolsa_p4_3', array('class' => 'radio-inline')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3 offset-md-1">
                                        <?= form_label(form_radio($mv39_bolsa_p4_4) . '4.Otro (especifique)', 'mv39_bolsa_p4_4', array('class' => 'radio-inline')); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p4_o', 'id' => 'mv39_bolsa_p4_o', ($bolsa->mv39_bolsa_p4 == '4' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p4 == '4' ? 'required' : FALSE) => 'true', 'value' => $bolsa->mv39_bolsa_p4_o, 'class' => 'form-control')); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('18. La bolsa laboral tiene acceso por roles? En caso sí tenga, puede brindar credenciales de prueba para verificar', '', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv39_bolsa_p5_chk1 = array('name' => 'mv39_bolsa_p5_chk1', 'id' => 'mv39_bolsa_p5_chk1', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p5_chk1 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv39_bolsa_p5_chk2 = array('name' => 'mv39_bolsa_p5_chk2', 'id' => 'mv39_bolsa_p5_chk2', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p5_chk2 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv39_bolsa_p5_chk3 = array('name' => 'mv39_bolsa_p5_chk3', 'id' => 'mv39_bolsa_p5_chk3', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p5_chk3 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv39_bolsa_p5_chk4 = array('name' => 'mv39_bolsa_p5_chk4', 'id' => 'mv39_bolsa_p5_chk4', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p5_chk4 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <!--< ?= form_label(form_checkbox($mv39_bolsa_p10_chk1, 1, set_checkbox('mv39_bolsa_p10_chk1', '1', $bolsa->mv39_bolsa_p10_chk1 == '1' ? TRUE : FALSE, array('disabled' => 'disabled'))) . '1.Facebook', 'mv39_bolsa_p10_chk1', array('class' => 'radio-inline col-md-3')); ?>-->
                                            <?= form_label(form_checkbox($mv39_bolsa_p5_chk1) . '1.Estudiante/Egresado', 'mv39_bolsa_p5_chk1', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_1_user', 'id' => 'mv39_bolsa_p5_1_user', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk1 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk1 == '1' ? 'placeholder' : FALSE) => 'Usuario', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_1_user, 'class' => 'form-control col-md-3')); ?>
                                            &nbsp;&nbsp;
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_1_pwd', 'id' => 'mv39_bolsa_p5_1_pwd', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk1 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk1 == '1' ? 'placeholder' : FALSE) => 'Clave', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_1_pwd, 'class' => 'form-control col-md-3')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv39_bolsa_p5_chk2) . '2.Docente', 'mv39_bolsa_p5_chk2', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_2_user', 'id' => 'mv39_bolsa_p5_2_user', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk2 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk2 == '1' ? 'placeholder' : FALSE) => 'Usuario', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_2_user, 'class' => 'form-control col-md-3')); ?>
                                            &nbsp;&nbsp;
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_2_pwd', 'id' => 'mv39_bolsa_p5_2_pwd', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk2 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk2 == '1' ? 'placeholder' : FALSE) => 'Clave', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_2_pwd, 'class' => 'form-control col-md-3')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv39_bolsa_p5_chk3) . '3.Administrador', 'mv39_bolsa_p5_chk3', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_3_user', 'id' => 'mv39_bolsa_p5_3_user', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk3 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk3 == '1' ? 'placeholder' : FALSE) => 'Usuario', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_3_user, 'class' => 'form-control col-md-3')); ?>
                                            &nbsp;&nbsp;
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_3_pwd', 'id' => 'mv39_bolsa_p5_3_pwd', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk3 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk3 == '1' ? 'placeholder' : FALSE) => 'Clave', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_3_pwd, 'class' => 'form-control col-md-3')); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv39_bolsa_p5_chk4) . '4.Otro rol', 'mv39_bolsa_p5_chk4', array('class' => 'radio-inline col-md-3')); ?>
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_4_user', 'id' => 'mv39_bolsa_p5_4_user', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk4 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk4 == '1' ? 'placeholder' : FALSE) => 'Usuario', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_4_user, 'class' => 'form-control col-md-3')); ?>
                                            &nbsp;&nbsp;
                                            <?= form_input(array('type' => 'text', 'name' => 'mv39_bolsa_p5_4_pwd', 'id' => 'mv39_bolsa_p5_4_pwd', 'maxlength' => '50', ($bolsa->mv39_bolsa_p5_chk4 == '1' ? FALSE : 'disabled') => 'disabled', ($bolsa->mv39_bolsa_p5_chk4 == '1' ? 'placeholder' : FALSE) => 'Clave', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p5_4_pwd, 'class' => 'form-control col-md-3')); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <?= form_label('19. La bolsa laboral permite por lo menos:', '', array('class' => 'control-label')); ?>
                                    </div>
                                    <?php
                                    $mv39_bolsa_p6_chk1 = array('name' => 'mv39_bolsa_p6_chk1', 'id' => 'mv39_bolsa_p6_chk1', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p6_chk1 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv39_bolsa_p6_chk2 = array('name' => 'mv39_bolsa_p6_chk2', 'id' => 'mv39_bolsa_p6_chk2', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p6_chk2 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    $mv39_bolsa_p6_chk3 = array('name' => 'mv39_bolsa_p6_chk3', 'id' => 'mv39_bolsa_p6_chk3', 'value' => '1', 'checked' => $bolsa->mv39_bolsa_p6_chk3 == '1' ? TRUE : FALSE, ($bolsa->mv39_bolsa_p1 == '1' ? FALSE : 'disabled') => 'disabled', 'style' => 'margin-right:5px');
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <!--< ?= form_label(form_checkbox($mv39_bolsa_p10_chk1, 1, set_checkbox('mv39_bolsa_p10_chk1', '1', $bolsa->mv39_bolsa_p10_chk1 == '1' ? TRUE : FALSE, array('disabled' => 'disabled'))) . '1.Facebook', 'mv39_bolsa_p10_chk1', array('class' => 'radio-inline col-md-3')); ?>-->
                                            <?= form_label(form_checkbox($mv39_bolsa_p6_chk1) . 'Registrar y/o actualizar algunos datos de los estudiantes y egresados', 'mv39_bolsa_p6_chk1', array('class' => 'radio-inline col-md-11')); ?>
                                            <!--< ?= form_input(array('type' => 'url', 'name' => 'mv39_bolsa_p6_1', 'id' => 'mv39_bolsa_p6_1', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($bolsa->mv39_bolsa_p5_chk1 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p6_1, 'class' => 'form-control col-md-6')); ?>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv39_bolsa_p6_chk2) . 'Visualizar ofertas de empleo del mercado laboral por sector productivo vinculados a su oferta formativa', 'mv39_bolsa_p6_chk2', array('class' => 'radio-inline col-md-11')); ?>
                                            <!--< ?= form_input(array('type' => 'url', 'name' => 'mv39_bolsa_p6_2', 'id' => 'mv39_bolsa_p6_2', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($bolsa->mv39_bolsa_p6_chk2 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p6_2, 'class' => 'form-control col-md-6')); ?>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="input-group">
                                            <?= form_label(form_checkbox($mv39_bolsa_p6_chk3) . 'Realizar postulaciones en línea', 'mv39_bolsa_p6_chk3', array('class' => 'radio-inline col-md-11')); ?>
                                            <!--< ?= form_input(array('type' => 'url', 'name' => 'mv39_bolsa_p6_3', 'id' => 'mv39_bolsa_p6_3', 'placeholder' => 'http...', 'maxlength' => '200', 'onkeyup' => 'this.value=this.value.toLowerCase()', ($bolsa->mv39_bolsa_p5_chk3 == '1' ? FALSE : 'disabled') => 'disabled', 'size' => '60', 'value' => $bolsa->mv39_bolsa_p6_3, 'class' => 'form-control col-md-6')); ?>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-center mx-auto mt-3">
                                        <?php
                                        //$bolsa = new stdClass();
                                        //$bolsa->updated_at = '2024-11-04';
                                        //$bolsa->updated_at = ''; 
                                        ?>
                                        <button type="button" value="Cancelar" class="btn btn-danger">Cancelar</button>
                                        <button type="submit" class="btn btn-success">
                                            <?= $bolsa->updated_at ? 'Actualizar' : 'Grabar' ?>&nbsp;y pasar a última ficha
                                        </button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                            <div class="tab-pane" id="observa1" role="tabpanel">
                                <p>
                                    En caso requiera precisar o aclarar alguno(s) de los ítems revisados, puede indicarlo aquí:
                                </p>
                                <form>
                                    <div class="col-lg-12">
                                        <textarea id="mv8_lineal_precisiones" name="mv8_lineal_precisiones" class="form-control"></textarea>
                                    </div>
                                    <br>
                                    <label>Datos del responsable del formulario</label>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="mv8_registrador_nom" name="mv8_registrador_nom" placeholder="Nombres y apellidos del registrador" name="email">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" placeholder="Correo a notificar" name="mv8_registrador_email" id="mv8_registrador_email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="form-control btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog mw-100 w-50">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--<form enctype="multipart/form-data">-->
                            <?= form_open('matrizcontroller/update', array('id' => 'matriz_art42', 'name' => 'matriz_art42', 'enctype' => 'multipart/form-data')) ?>
                            <div class="modal-body">
                                <input type="hidden" value="< ?= $matriz_row->id ?>" id="matriz_row_id" name="matriz_row_id">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i1. Existe está sección?</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p1_si">
                                            <input id="mv8_matriz_p1_si" name="mv8_matriz_p1" type="radio" value="1" style="margin-right:5px">Sí
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p1_no">
                                            <input id="mv8_matriz_p1_no" name="mv8_matriz_p1" type="radio" value="2" style="margin-right:5px">No
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i2. Tiene el contenido respectivo?</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p2_si">
                                            <input id="mv8_matriz_p2_si" name="mv8_matriz_p2" type="radio" value="1" style="margin-right:5px">Sí
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p2_no">
                                            <input id="mv8_matriz_p2_no" name="mv8_matriz_p2" type="radio" value="2" style="margin-right:5px">No
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i3. Es contenido vigente?</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p3_si">
                                            <input id="mv8_matriz_p3_si" name="mv8_matriz_p3" type="radio" value="1" style="margin-right:5px">Sí
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p3_no">
                                            <input id="mv8_matriz_p3_no" name="mv8_matriz_p3" type="radio" value="2" style="margin-right:5px">No
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i4. Está completa la información?</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p4_si">
                                            <input id="mv8_matriz_p4_si" name="mv8_matriz_p4" type="radio" value="1" style="margin-right:5px">Sí
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p4_no">
                                            <input id="mv8_matriz_p4_no" name="mv8_matriz_p4" type="radio" value="2" style="margin-right:5px">No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i5. Todo el contenido es visible en cualquier dispositivo?</label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p5_si">
                                            <input id="mv8_matriz_p5_si" name="mv8_matriz_p5" type="radio" value="1" style="margin-right:5px">Sí
                                        </label>
                                    </div>
                                    <div class="col-3">
                                        <label class="radio-inline" for="mv8_matriz_p5_no">
                                            <input id="mv8_matriz_p5_no" name="mv8_matriz_p5" type="radio" value="2" style="margin-right:5px">No
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>i6. Período de la información</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="mv8_matriz_p6" name="mv8_matriz_p6" class="form-control" type="month">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>i7. Captura de pantalla</label>
                                    </div>
                                    <!--<div class="col-6">
                        <input id="CBC5_MV1_TIENE" name="CBC5_MV1_TIENE" class="file form-control" type="file" accept="image/png, image/jpeg"/>-->
                                    <!--<div class="contact-form">
                      <input type="file" class="form-control" id="customFile" data-browse-on-zone-click="true">
                    </div>-->
                                    <!--<input type="file" name="filecv" id="filecv" class="file form-control" data-browse-on-zone-click="true" required="">-->
                                    <!--<div class="custom-file">
                                            <input type="file" class="custom-file-input form-control" id="customFile">-->
                                    <!--<label class="custom-file-label" for="customFile">Choose file</label>-->
                                    <!--</div>-->
                                    <!--<div class="col-6">
                                      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="mv8_matriz_p7" name="mv8_matriz_p7">
                                          <label class="custom-file-label" for="mv8_matriz_p7">Choose file</label>
                                        </div>
                    </div>
                  </div>-->
                                    <div class="col-8">
                                        <!--<input type="file" class="file" style="border:1px;" id="mv8_matriz_p7" data-browse-on-zone-click="true" value="">-->

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="mv8_matriz_p7" aria-describedby="myInput">
                                                <label class="custom-file-label" for="myInput">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" hidden type="button" id="myInput">Button</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Preview-->
                                <div id="preview"></div>


                            </div>
                            <div class="modal-footer">
                                <button type="reset" onclick="resetModal()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="save_matriz" name="save_matriz" class="btn btn-primary">Save
                                    changes</button>
                            </div>
                            <!--</form>-->
                            <?= form_close() ?>
                        </div>
                    </div>
                </div><!-- contact wrapper form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--https://www.youtube.com/watch?v=6yunxp_L9fs-->
<!--https://www.youtube.com/watch?v=mkD6HBuU7Yw&t=312s-->
<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            var row_id = $(this).data('id');
            //console.log(row_id);
            $.ajax({
                url: '<?php echo site_url("portal/selectRow"); ?>' + '/' + row_id,
                data: {
                    matriz_row: $(this).val()
                },
                dataType: 'JSON',
                type: "GET",
                success: function(data) {
                    //var obj = JSON.parse(data);
                    //console.log(data);
                    //console.log(data[0].mv8_matriz_p1);
                    var row = JSON.parse(JSON.stringify(data));
                    console.log(row);
                    console.log(row.mv8_matriz_p1);
                    $("#matriz_row_id").val(row.id);
                    //$('matriz_art42[name="mv8_matriz_p1"]').val(row.mv8_matriz_p1);
                    var $radios1 = $('input:radio[name=mv8_matriz_p1]');
                    if ($radios1.is(':checked') === false) {
                        $radios1.filter('[value=' + row.mv8_matriz_p1 + ']').prop('checked', true);
                    }
                    var $radios2 = $('input:radio[name=mv8_matriz_p2]');
                    if ($radios2.is(':checked') === false) {
                        $radios2.filter('[value=' + row.mv8_matriz_p2 + ']').prop('checked', true);
                    }
                    var $radios3 = $('input:radio[name=mv8_matriz_p3]');
                    if ($radios3.is(':checked') === false) {
                        $radios3.filter('[value=' + row.mv8_matriz_p3 + ']').prop('checked', true);
                    }
                    var $radios4 = $('input:radio[name=mv8_matriz_p4]');
                    if ($radios4.is(':checked') === false) {
                        $radios4.filter('[value=' + row.mv8_matriz_p4 + ']').prop('checked', true);
                    }
                    var $radios5 = $('input:radio[name=mv8_matriz_p5]');
                    if ($radios5.is(':checked') === false) {
                        $radios5.filter('[value=' + row.mv8_matriz_p5 + ']').prop('checked', true);
                    }
                    $('input:text[name=mv8_matriz_p6]').val(row.mv8_matriz_p6);
                    $('input:text[name=mv8_matriz_p7]').val(row.mv8_matriz_p7);
                }
            });
        });
    });
</script>

<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("mv8_matriz_p7").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    })
</script>
<script>
    function resetModal() {
        //$(this).removeData('bs.modal');
        document.getElementById('matriz_art42').reset();
    };
</script>
<!--====== CONTACT PART ENDS ======-->