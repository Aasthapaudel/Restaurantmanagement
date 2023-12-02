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

            <div style="position:relative; top: 70px; right:-150;">
                <table>
                    <tr>
                        <th style="padding:30px;">Name</th>
                        <th style="padding:30px;">Email</th>
                        <th style="padding:30px;">Phone</th>
                        <th style="padding:30px;">date</th>
                        <th style="padding:30px;">time</th>
                        <th style="padding:30px;">message</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td style="padding:30px;">{{$data->name}}</td>
                        <td style="padding:30px;">{{$data->email}}</td>
                        <td style="padding:30px;">{{$data->phone}}</td>
                        <td style="padding:30px;">{{$data->date}}</td>
                        <td style="padding:30px;">{{$data->time}}</td>
                        <td style="padding:30px;">{{$data->message}}</td>
                    </tr>
                    @endforeach
                </table>
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
