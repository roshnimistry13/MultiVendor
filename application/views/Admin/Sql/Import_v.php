<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <ul class="atbd-breadcrumb nav">
                        <li class="atbd-breadcrumb__item">
                            <a href="<?php echo base_url().'dashboard' ?>">
                                <span class="la la-home">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-horizontal card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>
                                        Import SQL
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <form method="post" class="form-horizontal"
                                        action="<?php echo base_url().'import-database' ?>" id="import_sql"
                                        name="import_sql" enctype="multipart/form-data">
                                        <div class="atbd-tag-wrap">
                                            <div class="atbd-upload">
                                                <div class="atbd-upload__button">
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-lg btn-outline-lighten btn-upload"
                                                        onclick="$('#database').click()"> <span
                                                            data-feather="upload"></span> Click to Upload</a>
                                                    <input type="file" name="database" class="upload-one" id="database">
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-12 d-flex aling-items-center">
                                                <button type="submit" class="btn btn-success  btn-xs px-30"
                                                    href="javascript:void(0)">
                                                    Import
                                                </button>
                                                <a class="btn btn-light btn-xs px-30 ml-2"
                                                    href="<?php echo base_url('import-sql')?>">
                                                    Cancel
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- ends: .card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>