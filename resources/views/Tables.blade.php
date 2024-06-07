@include('includes/header')
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 heading">
                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Services</h2>
                <p class="mb-4">Add and Edit Services Here<a target="_blank" href="https://datatables.net">This
                        interface allows you to edit and add new services to the system
                    </a>.</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end  ">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i>SERVICES REPORT</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> SERVICES BULK EDITOR</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i>
                    ADD SERVICE</a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Services</h6>
            </div>

            <div class="container mt-5">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Display Name</th>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Schedulable</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Display Name</th>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Schedulable</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>HD Photoshoot</td>
                                <td>Standard Photoshoot</td>
                                <td>0</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bx-cog'></i>
                                    <i class='bx bxs-camera'></i>
                                    <i class='bx bx-images'></i>
                                    <i class='bx bx-trash'></i>
                                </td>
                            </tr>

                            <tr>
                                <td>Aerial Photos (7 to 10 images)</td>
                                <td>Aerial Photos</td>
                                <td>1</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bx-cog'></i>
                                    <i class='bx bxs-camera'></i>
                                    <i class='bx bx-images'></i>
                                    <i class='bx bx-trash'></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Twilight Photography (7-10 images)</td>
                                <td>Twilight Photoshoot</td>
                                <td>2</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bx-cog'></i>
                                    <i class='bx bxs-camera'></i>
                                    <i class='bx bx-images'></i>
                                    <i class='bx bx-trash'></i>
                                </td>
                            </tr>

                            <tr>
                                <td>Luxury Photoshoot</td>
                                <td>Luxury Photoshoot</td>
                                <td>3</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bx-cog'></i>
                                    <i class='bx bxs-camera'></i>
                                    <i class='bx bx-images'></i>
                                    <i class='bx bx-trash'></i>
                                </td>
                            </tr>

                            <tr>
                                <td>Coming Soon Photos</td>
                                <td>Coming Soon Photos</td>
                                <td>4</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Non-Schedulabletext">Non-Schedulable</span></td>
                                <td>
                                    <i class='bx bxs-edit'></i>
                                    <i class='bx bx-cog'></i>
                                    <i class='bx bxs-camera'></i>
                                    <i class='bx bx-images'></i>
                                    <i class='bx bx-trash'></i>
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
@include('includes/footer')