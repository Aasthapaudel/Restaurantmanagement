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
<br><br>
   <table bgcolor="black">
    <tr>
        <th style ="padding:30px;">Chef Name</th>
        <th style ="padding:30px;">Speciality</th>
        <th style ="padding:30px;">Image</th>
        <th style ="padding:30px;">Action</th>
        <th style ="padding:30px;">Action2</th>
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->specilaity}}</td>
        <td><img height='100px'width='100px' src="/chefimage/{{$data->image}}"</td>
        <td><a href ="{{url('/updatechef',$data->id)}}">Update</a></td>
        <td><a href ="{{url('/deletechef',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
   </table>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->
</body>

</html>
