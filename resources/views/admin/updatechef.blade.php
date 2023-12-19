<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
    <!-- Required meta tags -->
</head>

<body>
<div class="container-scroller">

   @include('admin.navbar')
            <!-- main-panel ends -->

            <!-- {{$data->name}} -->
            <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>


                    <label>Chef Name</label>
                    <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
                </div>
                <div>
                    <label>Speciality</label>
                    <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
                </div>
                <div>
                    <label>Old Image</label>
                    <img height="300" width="300" src="/chefimage/{{$data->image}}">
                </div>
                <div>
                    <label>New Image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <input style="color:blue;" type="submit" value="Update Chef" required="">
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
