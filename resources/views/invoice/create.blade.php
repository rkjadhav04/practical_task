<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <!-- Bootstrap Validation -->
                <div class="col-md-12 col-12 p-0">
                    <div class="card">
                        <div class="d-flex">
                            <div class="card-header">
                                <h4 class="card-title">Create invoice</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <form id="validation" method="POST" enctype="multipart/form-data"
                                action="{{ route('invoice.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label" style="font-weight: bold; font-size: 0.975em">From</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label" style="font-weight: bold; font-size: 0.975em">To</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="from_name"
                                            style="font-weight: bold; font-size: 0.975em">Name</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="from_name" class="form-control" name="from_name"
                                            placeholder="Name" required />
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="to_name"
                                            style="font-weight: bold; font-size: 0.975em">Name</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="to_name" class="form-control" name="to_name"
                                            placeholder="Name" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="from_email"
                                            style="font-weight: bold; font-size: 0.975em">Email</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="from_email" class="form-control" name="from_email"
                                            placeholder="Email" required />
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="to_email"
                                            style="font-weight: bold; font-size: 0.975em">Email</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="to_email" class="form-control" name="to_email"
                                            placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="from_address"
                                            style="font-weight: bold; font-size: 0.975em">Address</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="from_address" class="form-control" name="from_address"
                                            placeholder="Address" required />
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="to_address"
                                            style="font-weight: bold; font-size: 0.975em">Address</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="to_address" class="form-control" name="to_address"
                                            placeholder="Address" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="from_phone"
                                            style="font-weight: bold; font-size: 0.975em">Phone</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="from_phone" class="form-control" name="from_phone"
                                        placeholder="Phone" required />
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="title"
                                            style="font-weight: bold; font-size: 0.975em">Phone</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="to_phone" class="form-control" name="to_phone"
                                        placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="from_gst"
                                            style="font-weight: bold; font-size: 0.975em">GST</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="from_gst" class="form-control" name="from_gst"
                                        placeholder="GST" required />
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="to_mobile"
                                            style="font-weight: bold; font-size: 0.975em">Mobile</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="to_mobile" class="form-control" name="to_mobile"
                                        placeholder="Mobile" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-2">
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <a href="#">show additional details</a>
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <label class="form-label" for="fax"
                                            style="font-weight: bold; font-size: 0.975em">FAX</label>
                                    </div>
                                    <div class="mb-1 col-md-4">
                                        <input type="text" id="fax" class="form-control"
                                            name="to_fax" placeholder="fax" value="0" required />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="5" style="text-align: center">Items</th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>QTY</th>
                                                <th>TAX</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="product-row">
                                                <td>
                                                    <input type="text" name="product_name" placeholder="Name" required>
                                                </td>
                                                <td>
                                                    <input type="text" name="product_description" placeholder="Description" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="product_qty" min="1" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="product_tax" min="0" required>
                                                </td>
                                                <td>
                                                    <input type="text" name="product_price" placeholder="Price" required>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <p>Sub Total: <span id="subtotal"></span></p>
                                            <input type="hidden" name="subtotal">
                                            <p>Tax Amount: <span id="tax_amount" class="tax_amount"></span></p>
                                            <input type="hidden" name="tax_amount" >
                                            <p>Discount: <input type="number" name="discount" min="0" max="100" required></p>
                                            <p>Total: <span id="total"></span></p>
                                            <input type="hidden" name="total">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Download PDF</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Bootstrap Validation -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            function updateCalculations() {
                var subtotal = 0;
                $('tr.product-row').each(function () {
                    var qty = parseFloat($(this).find('input[name="product_qty"]').val()) || 0;
                    var price = parseFloat($(this).find('input[name="product_price"]').val().replace(',', '')) || 0;
                    var tax = parseFloat($(this).find('input[name="product_tax"]').val()) || 0;
                    var rowTotal = qty * price;
                    var rowTax = (rowTotal * tax) / 100;
                    subtotal += rowTotal;
                    $(this).find('span.subtotal').text(rowTotal.toFixed(2));
                    $(this).find('span.tax_amount').text(rowTax.toFixed(2));
                });
                $('#subtotal').text(subtotal.toFixed(2));
                var totalTax = parseFloat($('span.tax_amount').text()) || 0;
                $('#tax_amount').text(totalTax.toFixed(2));

                var discountPercentage = parseFloat($('input[name="discount"]').val()) || 0;
                var discountAmount = (subtotal + totalTax) * (discountPercentage / 100);
                var total = subtotal + totalTax - discountAmount;

                $('#total').text(total.toFixed(2));
                $('input[name="subtotal"]').val(subtotal.toFixed(2));
                $('input[name="tax_amount"]').val(totalTax.toFixed(2));
                $('input[name="total"]').val(total.toFixed(2));
            }
            $('input[name^="product"]').on('input', function () {
                updateCalculations();
            });
            $('input[name="discount"]').on('input', function () {
                updateCalculations();
            });
        });
    </script>
</body>
</html>