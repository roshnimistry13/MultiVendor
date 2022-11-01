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
                                       Fetch Query Result
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'fetch-result' ?>" id="sql-fetch"
                                            name="sql-fetch" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-10 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput" class="color-dark fs-14 fw-500 align-center">
                                                            Enter Query  (single Select Query At a Time)
                                                        </label>
                                                        <textarea class="form-control  ip-gray radius-xs b-light px-15" name="text_sql" placeholder="Enter Select Query" required="" rows="2"></textarea>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('fetch-query')?>">
                                                        Cancel
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->

                        </div>
                    </div>
                    
                    <!-- Result  -->
                    <div class="row d-none" id="divQueryResult">
                        <div class="col-lg-12">
                            <div class="card card-horizontal card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>
                                       Query Result
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div id="divResult"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>