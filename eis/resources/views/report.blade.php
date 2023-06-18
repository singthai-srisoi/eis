

<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head><base href=""/>
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular & Laravel by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
 
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

th {
  color: black;
  font-weight: bold;
}

tr:hover {background-color: #d6d4d4;}

.right-bar {
    position: absolute;
    right: 0;
    top: 0;
}
</style>

<body>
    <div class="container">


        <!-- Filter -->
        <!-- For sort weekly -->
        <div class="col-9 grid-margin">
        <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-between">
        <p class="card-title mb-0" style="font-size: x-large; font-weight:bold">Product Sales List</p>
            <div class="ml-auto">
                <button class="btn btn-success btn-sm mx-3" id="generateReportButton" onClick="PrintElem()">Generate Report</button>
            </div>
        </div>
        <br />

        <div id="printDiv">
<table >
    <thead>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>            
            <th>Subtotal</th>
            <th>Tax</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalQuantity = 0;
        $totalSubtotal = 0;
        $totalAmount = 0;
        ?>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->prod_code }}</td>
            <td>{{ $order->prod_name }}</td>
            <td>{{ $order->oItem_qty }}</td>
            <td>{{ $order->oItem_totalprice }}</td>
            <td>{{ $order->o_tax }}</td>
            <td>{{ $order->o_totalAmount }}</td>
        </tr>
        <?php
        $totalQuantity += $order->oItem_qty;
        $totalSubtotal += $order->oItem_totalprice;
        $totalAmount += $order->o_totalAmount;
        ?>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td>Total:</td>
            <td>{{ $totalQuantity }}</td>
            <td>{{ $totalSubtotal }}</td>
            <td>--</td>
            <td>{{ $totalAmount }}</td>
        </tr>
    </tfoot>
</table>
</div>
</div>
</div>

<div class="right-bar col-5 grid-margin px-0" style="width: 30vw;">
<div class="card">
<div class="card-body">
<form action="{{ route('dateBetween') }}" method="GET">
                @csrf
                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">Start Date</label>
                <div class="col-sm-5 col-form-label">
                   <input type="date" name="startDate" >
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">End Date</label>
                <div class="col-sm-5 col-form-label">
                    <input type="date" name="endDate">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="">Filter by Products:</label>
                <div class="form-group">
                    @foreach ($distinctProducts as $product)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="products[]" value="{{ $product->prod_code }}"> {{ $product->prod_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                </div>
                <br>
                <input type="submit" value="Filter" class="btn btn-primary btn-sm">
                <a href="{{ route('report') }}" class="btn btn-warning btn-sm">Clear Filter</a>
</form>
</div>
</div>
</div>
</div>




    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/table-sortable.js') }}" type="text/javascript"></script>
<script>
function PrintElem()
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>Sales Report</h1>');
    mywindow.document.write(document.getElementById('printDiv').innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    //mywindow.close();

    return true;
}
</script>


</body>
</html>