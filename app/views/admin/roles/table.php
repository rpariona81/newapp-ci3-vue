<div class="container-fluid py-4 mx-0">
    <h1>Data <strong>Mahasiswa</strong></h1>
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pb-0">
                    <div class="d-sm-flex align-items-center">
                        <div class="col-md-5 col-8 align-self-center">
                            <div class="mb-3">
                                <h5 class="text-dark">CONVOCATORIAS</h5>
                            </div>
                        </div>
                        <div class="ms-auto d-flex">
                            <div class="mb-1">
                                <a class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"
                                    data-toggle="tooltip" data-placement="bottom" title="Crear nuevo registro"
                                    href="/admin/newconvocatoria">Nueva convocatoria &nbsp;<i
                                        class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top py-3 px-3 d-flex align-items-center mx-auto">
                    <!--Tampilkan pagination-->
                    <?php echo $pagination; ?>
                </div>
                <div class="card-body">
                    <div class="row">

                        <?php foreach ($records as $item) : ?>

                        <div class="col-xl-6 col-sm-6 mb-xl-0">
                            <div class="card border shadow-xs mb-4">
                                <div class="card-body text-start p-3 w-100">
                                    <div
                                        class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                            <path fill-rule="evenodd"
                                                d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="w-100">
                                                <h4><?php echo $item->row; ?></h4>
                                                <h4 class="mb-2 font-weight-bold"><?php echo $item->username; ?></h4>
                                                <?php echo $item->status; ?>
                                                <div class="d-flex align-items-center">
                                                    <span class="text-sm text-success font-weight-bolder">
                                                        <i
                                                            class="fa fa-chevron-up text-xs me-1"></i><?php echo $item->rolename; ?>
                                                    </span>
                                                    <span class="text-sm ms-1">from $89,740.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>