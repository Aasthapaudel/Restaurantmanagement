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
                    <th style="padding:30px;">Status</th>
                    <th style="padding:30px;">Action</th>
                </tr>
                @foreach($OrderItems as $order)
                <tr align="center">
                    <td style="padding:30px;">{{$order->user_id}}</td>
                    <td style="padding:30px;">{{$order->food_id}}</td>
                    <td style="padding:30px;">{{$order->quantity}}</td>
                    <td style="padding:30px;">{{$order->status}}</td>
                    <td style="padding:30px;">
                        @if($order->status !== 'approved')
            <form action="{{ route('orders.approve', $order->id) }}" method="POST" id="approve-form-{{ $order->id }}" style="display: inline;">
                @csrf
                @method('PUT')
                <button type="button" class="btn btn-success" onclick="document.getElementById('approve-form-{{ $order->id }}').submit();">
                    Approve
                </button>
            </form>


            <form action="{{ route('orders.cancel', $order->id) }}" method="POST" id="cancel-form-{{ $order->id }}" style="display: inline;">
                @csrf
                @method('PUT')
                <button type="button" class="btn btn-danger" onclick="document.getElementById('cancel-form-{{ $order->id }}').submit();">
                    Cancel
                </button>
            </form>
        @else
            <button class="btn btn-secondary" disabled>Approved</button>
        @endif
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
