
@include('includes/header')
<!-- End of Topbar -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="heading">
                            <h6 class="m-0 font-weight-bold text-primary">Add addons</h6>
                            <h2 class="h3 mb-2 text-gray-800">Selection Package Addon</h2>
                            <p class="mb-4"><a target="_blank" href="https://datatables.net">Select a addon for
                                    this package.
                                </a>.</p>
                        </div>

                        <div class="addaddon-input">

                            <form action="/#">
                                <div class="ppp">
                                    <label> Addon Selection</label>

                                    <select id="cars" name="cars">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>

                                </div>


                                <div class="ppp">
                                    <label> Order</label>
                                    <select id="cars" name="cars">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>

                                    </select>
                                </div>



                                <div class="ppp">
                                    <label> Category</label>
                                    <select id="cars" name="cars">
                                        <option value="services">services</option>
                                        <option value="Packages">Packages</option>

                                    </select>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
@include('includes/footer')