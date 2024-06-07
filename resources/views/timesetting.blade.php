@include('includes/header')
<!-- Main Content -->
<div id="content">


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 heading">
                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Timing and Costing | HD Photoshoot</h2>
                <p class="mb-4">This interface allows you to edit the time and cost for the service<a target="_blank" href="https://datatables.net"></a>.</p>
            </div>
            <!-- <div class="col-lg-6 d-flex align-items-center justify-content-end  ">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>ADD COUPON</a>
                                
                                   
                        </div> -->
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Timing and Costing</h6>
            </div>

            <div class="theme-group-btn d-flex justify-content-end">
                <!-- <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Status Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                    data-target="">
                    <i class="fas fa-download fa-sm text-white-50"></i>NEW QUANTITY</a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Time (minutes)</th>
                                <th>Price (dollars)</th>
                                <th>Cost (dollars)</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                               <th>Size</th>
                                <th>Time (minutes)</th>
                                <th>Price (dollars)</th>
                                <th>Cost (dollars)</th>

                            </tr>
                        </tfoot>
                        <tbody>



                            <tr>
                                <td>0-1200 sqft</td>
                                <td>60.00</td>
                                <td>179.00</td>
                                <td>50.00</td>
                            </tr>

                            <tr>
                            <td>0-1200 sqft</td>
                                <td>60.00</td>
                                <td>179.00</td>
                                <td>50.00</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

           
            <div class="theme-group-btn d-flex justify-content-end">
                <!-- <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Status Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                    data-target="">
                    <i class="fas fa-download fa-sm text-white-50"></i>SAVE COSTING AND TIMING</a>

            </div>
           
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h4 class="modal-title">Create Coupon </h4>
                    <span>Create a New Coupon Here</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Description (internal only)</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Coupon Code</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Amount</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Type</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>

                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <span>Active</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </div>




                </div>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">save</button>
            </div>

        </div>
    </div>
</div>
@include('includes/footer')

