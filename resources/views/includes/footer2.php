<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

    <!-- modal cdn-->

<script type="text/javascript"
    src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

      <!-- Custom scripts for all pages-->
      <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
      <script>
    $('.dropify').dropify();
</script>
       

    <!-- tiny -->
    <script src="http://localhost/html/novus_creare/public/backend/plugins/tinymce/tinymce.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // TinyMCE کو initialize کریں
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>



</body>

</html>