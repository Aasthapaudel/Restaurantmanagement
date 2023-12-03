<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    <!-- Required meta tags -->
</head>

<body>

<div class="container-scroller">

   @include('admin.navbar')

   <!-- main-panel ends -->

   <form action="{{url('uploadchef')}}" method="POST" enctype="multipart/form-data">
   @csrf

   <div>
    <label>Name</label>
    <input style="color:blue;" type="text" name="name" required="" placeholder="enter the name">
   </div>
   <div>
    <label>speciality</label>
    <input style="color:blue;" type="text" name="speciality" required="" placeholder="enter the speciality">
   </div>
   <div>
   <input type="file" name="image" required="">
</div>
   <div>
   <input type="submit" value="save">
</div>

   </form>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->
</body>

</html>
