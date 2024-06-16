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

        <div style="position:relative; top: 70px; right:-150px;">
            <table>
                <tr>
                    <th style="padding:30px;">User ID</th>
                    <th style="padding:30px;">Food ID</th>
                    <th style="padding:30px;">Quantity</th>
                    <th style="padding:30px;">Action</th>
                </tr>
                @foreach($OrderItems as $order)
                <tr align="center">
                    <td style="padding:30px;">{{$order->user_id}}</td>
                    <td style="padding:30px;">{{$order->food_id}}</td>
                    <td style="padding:30px;">{{$order->quantity}}</td>
                    <td style="padding:30px;">
                        <form action="" method="" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Done</button>
                        </form>
                        <form action="" method="" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </td>
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
