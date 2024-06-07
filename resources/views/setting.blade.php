@include('includes/header')
<!-- Main Content -->


<div id="content">
    <!-- Begin Page Content -->
     
    <form action="setting_data_show.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2 class="h3 mb-2 text-gray-800">Setting</h2>
                            </div>

                        </div>
                    </div>
                    
                    <?php
                    include('config.php');
                    // $id = $_GET['id'];
                    $sql =  "SELECT * FROM `setting-data`";

                    $res = mysqli_query($conn, $sql);


                    while ($row = mysqli_fetch_assoc($res)) {
                         
                    ?>

                        <section class="setting-page pt-5">
                            <div>
                                <h4>Location box</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Heading</label>
                                    <div class="label"></div>
                                    <input type="text" class="input-field" value="<?php echo $row['location_box_heading']; ?>" name="location-box-heading">
                                </div>


                                <div class="col-lg-6">
                                    <label>Content</label>
                                    <div class="label"></div>
                                    <input type="text" class="input-field" value="<?php echo $row['location_box_content']; ?>" name="location-box-content">
                                </div>


                                <div class="col-lg-12 pt-4">
                                    <h4>Map Box</h4>
                                    <label>Heading</label>
                                    <input type="text" class="input-field" value="<?php echo $row['map_box_heading']; ?>" name="map-box-heading">
                                </div>


                            </div>
                        </section>

                        <section class="setting-page pt-4">
                            <div>
                                <h4>Select Services or Packages</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Heading</label>
                                    <div class="label"></div>
                                    <input type="text" class="input-field" value="<?php echo $row['select_services_heading']; ?>" name="select-services-heading">
                                </div>

                            </div>
                        </section>


                        <section class="setting-page">
                            <div class="row">
                                <!-- <div class="note"> -->
                                <div class="col-lg-6 pt-5">
                                    <div class="s&pcard">
                                        <h4> Services</h4>
                                        <div class="s$pdropify" style="width:100%;">
                                            <input name="services-img" type="file" class="dropify" data-height="100"  data-default-file="./services-images/<?php echo $row['services_img']; ?>" />
                                        </div>
                                        <label>Heading</label>
                                        <div class="label"></div>
                                        <input type="text" class="input-field" name="services-heading" value="<?php echo $row['services_heading']; ?>">
                                        <div class="class">
                                            <label>Content</label>
                                            <div class="label"></div>
                                            <input type="text" class="input-field" value="<?php echo $row['services_content']; ?>" name="services-content">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 pt-5">
                                    <div class="s&pcard">
                                        <h4>Packages</h4>
                                        <img src="./packages-images/<?php echo $row['packages_img']; ?>" />
                                        <input type="file" name="packages-img" /> 
                                        <label>Heading</label>
                                        <div class="label"></div>
                                        <input type="text" class="input-field" value="<?php echo $row['packages_heading']; ?>" name="packages-heading">
                                        <div class="class">
                                            <label>Content</label>
                                            <div class="label"></div>
                                            <input type="text" class="input-field" value="<?php echo $row['packages_content']; ?>" name="packages-content">
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </section>

                    <?php } ?>

                    
                    <!-- //   end  // -->
                    <section class="setting-page">
                        <div class="row">
                            <div class="col-lg-12 pt-5 pb-3">
                                <div class="sub-heading-services">
                                    <h4>Select Services or Packages</h4>
                                </div>
                            </div>
    
                            <div class="col-lg-12">
                                <label>Heading</label>
                                <div class="label"></div>
                                <input type="text" class="input-field" value="">
                            </div>
    
    
                            <div class="col-lg-6 pt-3">
                                <div class="s&pcard">
                                    <div class="s$pdropify" style="width:100%;">
                                        <input name="file1" type="file" class="dropify" data-height="100" />
                                    </div>
    
                                </div>
                            </div>
    
                            <div class="col-lg-6 pt-3">
                                <div class="s&pcard">
                                    <div class="s$pdropify" style="width:100%;">
                                        <input name="file1" type="file" class="dropify" data-height="100" />
                                    </div>
    
                                </div>
    
                            </div>
    
                            <div class="col-lg-12 pt-4">
                                <div class="sub-heading-services">
                                    <h4>Simply Dummy Printing</h4>
                                </div>
                                <div class="label">Heading</div>
                                <input type="text" class="input-field" value="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <div class="label">Content</div>
                                <input type="text" class="input-field" value="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <div class="sub-heading-services">
                                    <h4>Schedule</h4>
                                </div>
                                <div class="label">Heading</div>
                                <input type="text" class="input-field" value="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <div class="sub-heading-services">
                                </div>
                                <div class="label">Content</div>
                                <input type="text" class="input-field" value="Please select an available date and time">
                            </div>
    
                            <div class="col-lg-12 pt-4">
                                <div class="sub-heading-services">
                                    <h4>Thank You</h4>
                                </div>
                                <div class="label">Heading</div>
                                <input type="text" class="input-field" value="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <div class="label">Content</div>
                                <input type="text" class="input-field" value="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <div class="sub-heading-services">
                                    <h4>Contact Information</h4>
                                </div>
                                <div class="label">Heading</div>
                                <input type="text" class="input-field" value="">
    
                            </div>
    
                            <div class="col-lg-12 pt-4 ">
                                <div class="update button d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger" name="submit">Update
                                        Setting</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- End of Main Content -->
@include('includes/footer')