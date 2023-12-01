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
   <div>

<form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Title</label>
        <input style="color:black" type="text" name="title" value="{{$data->title}}" placeholder="write the title" required>
    </div>
    <div>
        <label>Price</label>
        <input style="color:black" type="num" name="price" value="{{$data->price}}" placeholder="price" required>
    </div>
    <div>
        <label>Image</label>
        <input  type="file" name="image" required>
    </div>
    <div>
        <label>Description</label>
        <input style="color:black" type="text" name="description" value="{{$data->description}}" placeholder="Description" required>
    </div>
    <div>
        <label> oldImage</label>
        <input type="submit" src="/foodimage/{{$data->image}}>
    </div>
    <div>
        <label>Image</label>
        <input type="submit" value="Save">
    </div>
</form>

<div>

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->
</body>

</html>
