<!DOCTYPE html>
<html>

<head>
    <style>
        table td {
            padding: 10px;

        }

        p:before {
            content: "•";
            color: black;
            text-shadow: black 0 0 5px;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="3" style="width: 50%">
                Invoice
            </td>
            <th style="width: 50%">
                <?php $image_path = '/logo.jpg'; ?>
                <img src="{{ public_path() . $image_path }}" width="200" style="margin-right: 230px">
            </th>
        </tr>


    </table>
    <table border="1" style="border-collapse: collapse; width:100%; margin-top:50px">
        <tr>
            <th colspan="2" style="padding: 10px">From </th>
            <th colspan="2" style="padding: 10px">To </th>
        </tr>
        <tr>
            <td width="25%"><b>Name</b></td>
            <td width="25%">{{ $fromAddress->name }}</td>
            <td width="25%"><b>Name</b></td>
            <td>{{ $toAddress->name }}</td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td>{{ $fromAddress->email }}</td>
            <td><b>Email</b></td>
            <td>{{ $toAddress->email }}</td>
        </tr>

        <tr>
            <td><b>Address</b></td>
            <td>{{ $fromAddress->address }}</td>
            <td><b>Address</b></td>
            <td>{{ $toAddress->address }}</td>
        </tr>

        <tr>
            <td><b>Phone</b></td>
            <td>{{ $fromAddress->phone }}</td>
            <td><b>Phone</b></td>
            <td>{{ $toAddress->phone }}</td>
        </tr>

        <tr>
            <td><b>GST</b></td>
            <td>{{ $fromAddress->gst }}</td>
            <td><b>Mobile</b></td>
            <td>{{ $toAddress->mobile }}</td>
        </tr>
        <tr>
            <td><b></b></td>
            <td></td>
            <td><b>Fax</b></td>
            <td>{{ $toAddress->fax }}</td>
        </tr>
    </table>
    <br> <br>
    <table border="1" style="border-collapse: collapse; width:100%; margin-top:50px">
        <tr>
            <th colspan="5">Item</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>QTY</th>
            <th>TAX</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{ $product->tax }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    </table>
    <br>
</body>

</html>
