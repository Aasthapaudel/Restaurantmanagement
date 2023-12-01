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

        <div>

            <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Title</label>
                    <input style="color:black" type="text" name="title" placeholder="write the title" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color:black" type="num" name="price" placeholder="price" required>
                </div>
                <div>
                    <label>Image</label>
                    <input  type="file" name="image" required>
                </div>
                <div>
                    <label>Description</label>
                    <input style="color:black" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>

            <div>
                <br><br>

            <table bgcolor="black">
                <tr>
                    <th style="padding:30px">Food Name</th>
                    <th style="padding:30px">Price</th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                    <th style="padding:30px">Action2</th>
                </tr>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                        <img  height="200px" width="150px" src="/foodimage/{{$data->image}}">
                    </td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updatemenu',$data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('admin.adminscript')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- End custom js for this page -->

</body>

</html>
