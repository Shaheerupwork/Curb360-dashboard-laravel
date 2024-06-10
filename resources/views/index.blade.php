@include('includes/header')


<!-- Main Content -->
<div id="content">


    <!-- Begin Page Content -->
    <div class="row heading justify-content-center pt-5">
        @if (Auth::check())
            <h2 class="text-capitalize">Welcome, {{ Auth::user()->name }}!</h2> 
        @else
            <p>Please <a href="{{ route('login') }}">login</a>.</p>
        @endif
        </div>
        <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('includes/footer')