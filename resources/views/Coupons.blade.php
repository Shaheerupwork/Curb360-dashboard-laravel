@include('includes/header')
<!-- Main Content -->
<div id="content">


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <!-- Page Heading -->
                <div class="heading">
                    <h2 class="h3 mb-2 text-gray-800">Coupons</h2>
                    <p class="mb-4">Add and Edit Coupons Here<a target="_blank" href="https://datatables.net"></a>.</p>
                </div>
            </div>
            <!-- <div class="col-lg-6 d-flex align-items-center justify-content-end  ">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>ADD COUPON</a>
                                
                                   
                        </div> -->
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Coupons</h6>
            </div>

            <div class="theme-group-btn d-flex justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Status Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                    data-target="#myModal">
                    <i class="fas fa-download fa-sm text-white-50"></i>Add coupons</a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Coupon Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Coupon Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>

                            </tr>
                        </tfoot>
                        <tbody>



                            <tr>
                                <td>Richard Elias package a samples</td>
                                <td>001</td>
                                <td>$ 350.00</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                    <a href="#" data-toggle="modal"
                    data-target="#myModalEditCoupon"><i class='bx bxs-edit'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>referral</td>
                                <td>REF10</td>
                                <td>% 10.00</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                <a href="#" data-toggle="modal"
                    data-target="#myModalEditCoupon"><i class='bx bxs-edit'></i></a>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

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

<!-- The Modal -->
<div class="modal" id="myModalEditCoupon">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h4 class="modal-title">Edit Coupon</h4>
                    <span>Edit an Existing Coupon Here</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Description (internal only)</label>
                        <input type="text" name="" id="" placeholder="Richard Elias package a samples">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Coupon Code</label>
                        <input type="text" name="" id="" placeholder="001">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Amount</label>
                        <input type="text" name="" id="" placeholder="350.00" >
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Type</label>
                        <form action="/#">
                            <select id="cars" name="cars" placeholder="Dollar">
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">Update</button>
            </div>

        </div>
    </div>
</div>
<!-- End of Main Content -->

@include('includes/footer')




