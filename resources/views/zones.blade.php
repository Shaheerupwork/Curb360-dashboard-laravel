@include('includes/header')
<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 heading">
                <h2>Zone Management</h2>
                <P>This interface allows you to to view and manage Zones.
                    Note: you can "right click" on a node to delete it.</P>
            </div>

            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <div class="class">
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm" data-toggle="modal"
                        data-target="#myModal"><i class="fas fa-download fa-sm text-white-50"></i>
                        ADD ZONE</a>
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
                                        <input type="text" name="" id="">
                                    </div>

                                    <div class="col-12 col-lg-6 pt-3 cls1">
                                        <h4>Active</h4>
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

            </div>



            <div class="col-lg-12">
                <div class="googlemap">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52964991.14202355!2d-161.8438805745353!3d35.88021847329188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1717006817086!5m2!1sen!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Color</th>
                                <th>Timezone</th>
                                <th>Stripe Key</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Color</th>
                                <th>Timezone</th>
                                <th>Stripe Key</th>
                                <th>Actions</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="colorbtn green"></div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">America/Los_Angeles</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            CURB360 LLC | CA UAT
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <a>
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="colorbtn yellow"></div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">America/Los_Angeles</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            CURB360 LLC | CA UAT
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <a> <i class='bx bx-trash'></i> </a>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="colorbtn blue"></div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">America/Los_Angeles</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            CURB360 LLC | CA UAT
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>

                                    <a> <i class='bx bx-trash'></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="colorbtn purple"></div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">America/Los_Angeles</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            CURB360 LLC | CA UAT
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>

                                    <a> <i class='bx bx-trash'></i> </a>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="colorbtn red"></div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">America/Los_Angeles</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <div class="dropdown show111 d-flex justify-content-center">
                                        <a class="btn333 dropdown-toggle" href="#" role="button" id="dropdownMenuLinkl"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            CURB360 LLC | CA UAT
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                </td>
                                <td>
                                    <a> <i class='bx bx-trash'></i> </a>
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
<!-- End of Main Content -->

@include('includes/footer')