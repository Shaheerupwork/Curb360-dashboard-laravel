@include('includes/header')

<!-- Main Content -->
<div id="content">
    
    <!-- Begin Page Content -->
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-lg-6 heading">
                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Services</h2>
                <p class="mb-4">Add and Edit Services Here<a target="_blank" href="https://datatables.net">
                    </a>.</p>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Services</h6>
            </div>
            <div class="theme-group-btn d-flex w-100  justify-content-end">
                <div class="col-lg-7 d-flex justify-content-end">
                    <div class="btn-group">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>SERVICES REPORT</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                            data-target="#myModaldownload"><i class="fas fa-download fa-sm text-white-50"></i> SERVICES
                            BULK EDITOR</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                            data-target="#myModalthree">
                            <i class="fas fa-download fa-sm text-white-50"></i>
                            ADD SERVICE</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal"
                            data-target="#uploadcsv">
                            <i class="fas fa-download fa-sm text-white-50"></i>
                            upload CSV</a>
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
                                    <a href="#" data-toggle="modal" data-target="#myModalthree">
                                        <i class='bx bxs-edit'></i></a>
                                    <a href="timesetting.php">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a><i class='bx bxs-camera'></i></a> -->
                                    <a href="#" data-toggle="modal" data-target="#myModaledit">
                                        <i class='bx bx-images'></i></a>
                                    <a href="#" data-toggle="modal" data-target="#myModaldelet">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>Aerial Photos (7 to 10 images)</td>
                                <td>Aerial Photos</td>
                                <td>1</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#myModalthree">
                                        <i class='bx bxs-edit'></i></a>
                                    <a href="timesetting.php">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a><i class='bx bxs-camera'></i></a> -->
                                    <a href="#" data-toggle="modal" data-target="#myModaledit">
                                        <i class='bx bx-images'></i></a>
                                    <a href="#" data-toggle="modal" data-target="#myModaldelet">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td>Twilight Photography (7-10 images)</td>
                                <td>Twilight Photoshoot</td>
                                <td>2</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <div class="iconnsssss">
                                        <a href="#" data-toggle="modal" data-target="#myModalthree">
                                            <i class='bx bxs-edit'></i></a>
                                        <a href="timesetting.php">
                                            <i class='bx bx-cog'></i></a>
                                        <!-- <a><i class='bx bxs-camera'></i></a> -->
                                        <a href="#" data-toggle="modal" data-target="#myModaledit">
                                            <i class='bx bx-images'></i></a>
                                        <a href="#" data-toggle="modal" data-target="#myModaldelet">
                                            <i class='bx bx-trash'></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Luxury Photoshoot</td>
                                <td>Luxury Photoshoot</td>
                                <td>3</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Schedulable">Schedulable</span></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#myModalthree">
                                        <i class='bx bxs-edit'></i></a>
                                    <a href="timesetting.php">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a><i class='bx bxs-camera'></i></a> -->
                                    <a href="#" data-toggle="modal" data-target="#myModaledit">
                                        <i class='bx bx-images'></i></a>
                                    <a href="#" data-toggle="modal" data-target="#myModaldelet">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>Coming Soon Photos</td>
                                <td>Coming Soon Photos</td>
                                <td>4</td>
                                <td><span class="activetext">Active</span></td>
                                <td><span class="Non-Schedulabletext">Non-Schedulable</span></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#myModalthree">
                                        <i class='bx bxs-edit'></i></a>
                                    <a href="timesetting.php">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a><i class='bx bxs-camera'></i></a> -->
                                    <a href="#" data-toggle="modal" data-target="#myModaledit">
                                        <i class='bx bx-images'></i></a>
                                    <a href="#" data-toggle="modal" data-target="#myModaldelet">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="uploadcsv">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Upload CSV</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body modal-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="file">Choose CSV file:</label>
                    <input type="file" name="file" id="file"  accept=".csv" class="dropify" data-height="100" />
                    <input type="submit" name="uploadcsv" value="Upload">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div class="modal" id="myModalthree">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Create Service</h2>
                    <span>Create a New Services Here</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body modal-form">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3">
                        <label for="">Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3">
                        <label for="">Display Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">Description</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">Order</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">ClickUp Category (optional) - For Automations</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">ClickUp Service Type</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3 d-flex input-2">
                        <div class="input-2">
                            <span>Premium Service</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Display</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Active</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Schedulable</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                <label class="custom-control-label" for="customSwitch4"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 pt-3 d-flex input-2 ">
                        <div class="heading">
                            <h4>Add-ons</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 pt-2 d-flex">
                        <div class="addons-grid navbar">
                            <div class="input-2">
                                <span>Virtual Twilight</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                    <label class="custom-control-label" for="customSwitch5"></label>
                                </div>
                            </div>
                            <div class="input-2">
                                <span>Aerial Photos (7 to 10 images)</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                    <label class="custom-control-label" for="customSwitch6"></label>
                                </div>
                            </div>
                            <div class="input-2">
                                <span>Aerial Video</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div>
                            </div>
                            <div class="input-2">
                                <span>Zillow 3D</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                    <label class="custom-control-label" for="customSwitch7"></label>
                                </div>
                            </div>
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
<!-- The Modal download popup -->
<div class="modal" id="myModaldownload">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Bulk Service Cost and Timing Editor</h2>
                    <span>Here you can modify service's cost and timings in bulk</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-12 cls1">
                        <button type="button" class="btn btn-danger222" data-dismiss="modal">DOWNLOAD TEMPLATE</button>
                    </div>
                    <div class="col-12 col-lg-12 pt-3 cls1">
                        <html>

                        <head>
                            <title>Read From Local CSV</title>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                            <script type="text/javascript"
                                src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
                            <link rel="stylesheet" type="text/css"
                                href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

                        </head>

                        <body>
                            <div class="upload-form">


                                <input name="file1" type="file" class="dropify" data-height="100" />
                            </div>


                        </body>

                        </html>


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- The Modal edit servies  -->
<div class="modal" id="myModalserviceimg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Add a Service image</h2>
                    <span>Create or Edit a service's image</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body modal-form">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3">
                        <label for="">Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3">
                        <label for="">Display Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">Description</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">Order</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">ClickUp Category (optional) - For Automations</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3">
                        <label for="">ClickUp Service Type</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-12 pt-3 d-flex input-2">
                        <div class="input-2">
                            <span>Premium Service</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Display</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Active</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Schedulable</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                <label class="custom-control-label" for="customSwitch4"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>ClickUp Video Editing</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                <label class="custom-control-label" for="customSwitch5"></label>
                            </div>
                        </div>
                        <div class="input-2">
                            <span>Twilight Service</span>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                <label class="custom-control-label" for="customSwitch6"></label>
                            </div>
                        </div>
                        <!-- <span>Active</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1`"></label>
                        </div> -->

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
<!-- The Modal Add a Service image popup -->
<div class="modal" id="myModaledit">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Add a Service image</h2>
                    <span>Create or Edit a service's image</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <span>Current Image</span>
                    </div>
                    <div class="col-12 col-lg-12 d-flex justify-content-center">
                        <img src="img/logo_main_new.png" alt="" class="imgejdjdhd">
                    </div>
                    <div class="col-12 col-lg-12 pt-3">

                        <div class="upload-form">
                            <input name="file1" type="file" class="dropify" data-height="100" />
                        </div>

                    </div>

                    <div class="col-12 col-lg-12 pt-3">
                        <h4>Notice:</h4>
                        <p href="#">- Images are not automatically croped or resized. You must upload the images in the
                            correct aspect ratio (4:3) and size.</p>
                        <span>- Image will be replaced if an image already exists.</span>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- The Modal Add a Service image popup -->
<div class="modal" id="myModaldelet">
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
                        <span>Are you sure you wish to delete this service? Services cannot be deleted if they exist on
                            a job or if it has providers that are assigned to this service.</span>
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
@include('includes/footer')