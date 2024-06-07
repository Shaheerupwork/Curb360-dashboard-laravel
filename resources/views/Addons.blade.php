@include('includes/header')
<!-- Main Content -->
<div id="content">


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row pb-3">
            <div class="col-lg-6">
                <!-- Page Heading -->
                <div class="heading">
                    <h2 class="h3 mb-2 text-gray-800">Addons</h2>
                </div>
                <!-- <p class="mb-4">Add and Edit Coupons Here<a target="_blank"
                                    href="https://datatables.net">This interface allows you to edit and add new coupons
                                    to the system </a>.</p> -->
            </div>
            <!-- <div class="col-lg-6 d-flex align-items-center justify-content-end  ">
                            <a href="add_addons.html" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Add Addons
                            </a>


                        </div> -->
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Addons
                </h6>
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

                <a href="add_addons.php" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i>Add Addons
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Addon Name</th>
                                <th>category</th>
                                <th>Order</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Addon Name</th>
                                <th>category</th>
                                <th>Order</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>3D Matterport (Theta V Camera)</td>
                                <td>service</td>
                                <td>
                                    <div class="class">
                                        <form action="/#">
                                            <select id="cars" name="cars">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>

                                            </select>
                                        </form>
                                    </div>
                                </td>

                                <td>
                                    <div class="addon-form-iconn">
                                        <a href="add_addons.php" data-toggle="" data-target="" >
                                            <i class='bx bx-cog'></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#myModaldeletaddon">
                                            <i class='bx bx-trash'></i></a>
                                    </div>
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


<!-- The Modal addon  delet -->
<div class="modal" id="myModaldeletaddon">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Confirmation</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <span>Please confirm you wish to delete this addon.</span>
                    </div>
                    <div class="col-12 col-lg-12 d-flex justify-content-center">





                    </div>
                </div>
                <div class="modal-footer delet">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CONFIRM</button>

                </div>

            </div>
        </div>
    </div>
</div>




<!-- End of Main Content -->
@include('includes/footer')