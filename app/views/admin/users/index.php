<!--begin::Navbar-->
<div class="card">
    <div class="card-header"><h1 class="card-title">CONTROL DE USUARIOS</h1></div>
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">

            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <?= form_open('', array('id' => 'FRM_DATOS', 'class' => 'form-horizontal', 'onsubmit' => 'window.location.reload()')); ?>

                    <div class="col-md-12 col-lg-12 mx-auto">
                        <div class="mb-3">
                            <div class="input-group mb-1">

                                <?= form_dropdown('role_select', $roles, $role_Value, 'class="form-control" id="role_select"'); ?>
                                &nbsp;
                                <?= form_dropdown('status_select', $condiciones, $status_Value, 'class="form-control" id="status_select"'); ?>
                                &nbsp;
                                <button class="btn btn-info pull-right font-weight-medium mb-0" type="submit">
                                    <!--<i class="ti-search"></i>-->
                                    <i class="fa fa-search"></i>&nbsp;Filtrar
                                    <!--<i class="fa fa-filter"></i>-->
                                </button>

                                &nbsp;
                                <a class="btn btn-danger" href="<?= base_url('/admin/users') ?>">Limpiar filtro</a>

                                &nbsp;
                                <a class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro" href="<?= base_url('/admin/users/newuser') ?>">Nuevo usuario&nbsp;&nbsp;<i class="fa fa-plus"></i></a>

                            </div>
                        </div>
                    </div>

                    <?= form_close() ?>
                    <!--begin::Actions-->
                    <!-- <div class="d-flex mb-4">
                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>

                    </div> -->
                    <!--end::Actions-->
                </div>
                <!--end::Head-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
        <div class="separator"></div>
        <?= form_close() ?>


        <div class="p-0 table-responsive">
            <table id="datatable" class="table table-hover table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <!--<thead class="bg-primary text-white">-->
                <thead>
                    <tr>
                        <!--<th colspan="8" class="heading"><span style="float: right"></span></th>-->
                        <th colspan="8" class="heading"></th>
                    </tr>
                    <tr class="fw-bolder text-dark bg-warning">
                        <!--<th class="font-weight-bold">Id</th>-->
                        <th class="ps-4 font-weight-bold">#</th>
                        <th class="font-weight-bold">Usuario</th>
                        <th class="font-weight-bold">Rol</th>
                        <th class="font-weight-bold">Celular</th>
                        <th class="font-weight-bold">Condición</th>
                        <th class="font-weight-bold">Email</th>
                        <th class="font-weight-bold">Última modif.</th>
                        <th class="font-weight-bold">Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($records as $item) : ?>
                        <tr class="align-middle">
                            <!--<td>< ?= str_pad($item->id, 5, '0', STR_PAD_LEFT); ?></td>-->
                            <td class="ps-4"><?= $item->row ?></td>
                            <td><?= $item->username ?></td>
                            <td><?= $item->rolename ?></td>
                            <td class="text-center"><?= $item->mobile ?></td>
                            <td><?= $item->userflag ?></td>
                            <td class="text-center"><?= $item->email ?></td>
                            <td><?= (($item->updated_at) ? $item->updated_at->diffForHumans() : (($item->updated_at_role) ? $item->updated_at_role->diffForHumans() : NULL)) ?></td>
                            <td>
                                <?php
                                if ($item->status) {
                                    echo '<span class="text-white border badge bg-info">' . $item->userflag . '</span>';
                                } else {
                                    echo '<span class="text-white border badge bg-danger">' . $item->userflag . '</span>';
                                }
                                ?>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <?php
                                    if ($item->lock == 1) {
                                    } else {
                                        if ($item->status) {
                                            echo form_open('admin/users/enviaPassword');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" id="showtoast" name="submit" class="btn btn-outline-info btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Enviar contraseña"><i class="fa fa-envelope" style="color:red"></i></button>';
                                            echo form_close();
                                            echo "&nbsp;";

                                            echo form_open('admin/users/inactiveUser');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" id="showtoast" name="submit" class="btn btn-outline-dark btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Desactivar"><i class="fa fa-eye-slash"></i></button>';
                                            echo form_close();

                                            echo '&nbsp;&nbsp;';
                                            echo '<a class="btn btn-outline-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="' . base_url('/admin/users/show/' . $item->id) . '"><i class="fa fa-edit"></i></a>';
                                        } else {
                                            //echo '<a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Activar" href="<?= $item->id>"><i class="fa fa-eye"></i></a>';
                                            echo form_open('admin/users/activeUser');
                                            echo '<input type="hidden" id="id" name="id" value="' . $item->id . '">';
                                            echo '<button type="submit" id="showtoast" name="submit" class="btn btn-outline-success btn-sm display-inline" data-toggle="tooltip" data-placement="bottom" title="Activar"><i class="fa fa-eye"></i></button>';
                                            echo form_close();
                                        }
                                    }
                                    ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--end::Nav wrapper-->
</div>