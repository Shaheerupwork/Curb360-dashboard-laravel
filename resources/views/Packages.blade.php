@include('includes/header')
<!-- Main Content -->
<div id="content">


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 heading mb-2">
                <!-- Page Heading -->
                <h2 class="h3 mb-2 text-gray-800">Packages</h2>
                <p>Add and Edit Packages Here.</p>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Packages</h6>
            </div>

            <div class="theme-group-btn d-flex justify-content-end">

                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    PACKAGES REPORT
                </a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal" data-target="#myModaldownloadpackages"><i class="fas fa-download fa-sm text-white-50"></i> PACKAGES BULK
                    EDITOR</a>

                <a href="#" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" data-toggle="modal" data-target="#myModaltwo">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    ADD PACKAGE</a>



            </div>



            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Smart Photo | Video Package</td>
                                <td>NEW HD Photo | Video Walkthrough Package!</td>
                                <td>You will receive stunning HD photography, a video walkthrough complete with
                                    agent branding and a branded property website.</td>
                                <td>0</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                    <i class='bx bxs-edit'></i></a>
                                    <a  href="Packagessetting.php" data-toggle="" data-target="#">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a  href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                        <i class='bx bxs-camera'></i></a> -->
                                    <a  href="#" data-toggle="modal" data-target="#myModalpackagesimg">
                                        <i class='bx bx-images'></i></a>
                                    <a  href="#" data-toggle="modal" data-target="#myModaldeletpkg">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>Photography | 3D Matterport - Theta V</td>
                                <td>HD Photo | 3D Matterport Package</td>
                                <td>Fully immersive package with HD Photography and 3D Matterport. Give potential
                                    buyers 2 options to view in completely different settings. 2D Floor plans are
                                    not available with this package</td>
                                <td>1</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                <a href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                    <i class='bx bxs-edit'></i></a>
                                    <a  href="Packagessetting.php" data-toggle="" data-target="#">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a  href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                        <i class='bx bxs-camera'></i></a> -->
                                    <a  href="#" data-toggle="modal" data-target="#myModalpackagesimg">
                                        <i class='bx bx-images'></i></a>
                                    <a  href="#" data-toggle="modal" data-target="#myModaldeletpkg">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td>Smart Photo | Video Package</td>
                                <td>NEW HD Photo | Video Walkthrough Package!</td>
                                <td>You will receive stunning HD photography, a video walkthrough complete with
                                    agent branding and a branded property website.</td>
                                <td>0</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                <a href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                    <i class='bx bxs-edit'></i></a>
                                    <a  href="Packagessetting.php" data-toggle="" data-target="#">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a  href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                        <i class='bx bxs-camera'></i></a> -->
                                    <a  href="#" data-toggle="modal" data-target="#myModalpackagesimg">
                                        <i class='bx bx-images'></i></a>
                                    <a  href="#" data-toggle="modal" data-target="#myModaldeletpkg">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>Smart Photo | Video Package</td>
                                <td>NEW HD Photo | Video Walkthrough Package!</td>
                                <td>You will receive stunning HD photography, a video walkthrough complete with
                                    agent branding and a branded property website.</td>
                                <td>0</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                <a href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                    <i class='bx bxs-edit'></i></a>
                                    <a  href="Packagessetting.php" data-toggle="" data-target="#">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a  href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                        <i class='bx bxs-camera'></i></a> -->
                                    <a  href="#" data-toggle="modal" data-target="#myModalpackagesimg">
                                        <i class='bx bx-images'></i></a>
                                    <a  href="#" data-toggle="modal" data-target="#myModaldeletpkg">
                                        <i class='bx bx-trash'></i></a>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>Smart Photo | Video Package</td>
                                <td>NEW HD Photo | Video Walkthrough Package!</td>
                                <td>You will receive stunning HD photography, a video walkthrough complete with
                                    agent branding and a branded property website.</td>
                                <td>0</td>
                                <td><span class="activetext">Active</span></td>
                                <td>
                                <a href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                    <i class='bx bxs-edit'></i></a>
                                    <a  href="Packagessetting.php" data-toggle="" data-target="#">
                                        <i class='bx bx-cog'></i></a>
                                    <!-- <a  href="#" data-toggle="modal" data-target="#myModalpackageedited">
                                        <i class='bx bxs-camera'></i></a> -->
                                    <a  href="#" data-toggle="modal" data-target="#myModalpackagesimg">
                                        <i class='bx bx-images'></i></a>
                                    <a  href="#" data-toggle="modal" data-target="#myModaldeletpkg">
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
<!-- The Modal -->
<div class="modal" id="myModaltwo">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h4 class="modal-title">Create Package</h4>
                    <span>Create a New Packages Here</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Display Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Description</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Order</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Zones</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Services</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 d-flex abcd">
                        <span>Active</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                        <span>Display</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2"></label>
                        </div>
                        <span>Featured</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
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





<!-- The Modal download packages popup -->
<div class="modal" id="myModaldownloadpackages">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h4 class="modal-title">Bulk Package Cost and Timing Editor</h4>
                    <span>Here you can modify package's cost and timings in bulk</span>
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
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
      
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

         <!-- The Modal package edited -->
<div class="modal" id="myModalpackageedited">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div>
                    <h4 class="modal-title">Edit Package</h4>
                    <span>Edit an Existing Package Here</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Name</label>
                        <input type="text" name="" id="" placeholder="Smart Photo | Video Package">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Display Name</label>
                        <input type="text" name="" id="" placeholder="You will receive stunning HD photography, a video walkthrough complete with agent branding and a branded property website.">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Description</label>
                        <input type="text" name="" id="" placeholder="You will receive stunning HD photography, a video walkthrough complete with agent branding and a branded property website.">
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Order</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Zones</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 cls1">
                        <label for="">Services</label>
                        <form action="/#">
                            <select id="cars" name="cars">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 pt-3 d-flex abcd">
                        <span>Active</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                        <span>Display</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2"></label>
                        </div>
                        <span>Featured</span>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3"></label>
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

<!-- The Modal Add packages image popup -->
<div class="modal" id="myModalpackagesimg">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <div class="heading">
                    <h2 class="modal-title">Add a Package image</h2>
                    <span>Create or Edit a package's image</span>
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
                                <input name="file1" type="file" class="dropify"  data-height="100" />
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
<!-- The Modal packages delet -->
<div class="modal" id="myModaldeletpkg">
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
                        <span>Are you sure you wish to delete this package? Packages cannot be deleted if they exist on a job..</span>
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



<script>
$('.dropify').dropify();
</script>

@include('includes/footer')


