@extends('template')
@section('report')
 
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

 /* .right-bar {
    position: relative;
    right: 0;
    top: 35vh;
}  */

</style>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" style="width: 1000px" id="kt_content_container">
    
    <div class="row">
    <div class="col-md-12 grid-margin transparent">
        <div class="row">
            <div class="col-md-8 mb-4 stretch-card transparent">
                <div class="card card-tale">
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
            <th>Order Id</th>
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
          <td>{{ $order->o_id }}</td>
            <td>{{ $order->prod_code }}</td>
            <td>{{ $order->prod_name }}</td>
            <td>{{ $order->oItem_qty }}</td>
            <td>{{ $order->oItem_totalprice }}</td>
            <td>{{ $order->o_tax }}</td>
            <td><?php echo $order->oItem_qty*$order->oItem_totalprice*((100+$order->o_tax)/100); ?></td>
        </tr>
        <?php
        $totalQuantity += $order->oItem_qty;
        $totalSubtotal += $order->oItem_totalprice;
        $totalAmount += $order->oItem_qty*$order->oItem_totalprice*((100+$order->o_tax)/100);
        ?>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td></td>
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
            </div>
            <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                    <form action="{{ route('dateBetween') }}" method="GET">
                @csrf
                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">Start Date</label>
                <div class="col-sm-5 col-form-label">
                   <input type="date" name="startDate" id="startDate" >
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="">End Date</label>
                <div class="col-sm-5 col-form-label">
                    <input type="date" name="endDate" id="endDate">
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
    </div>
</div>
</div>
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

    // var endDate = $('#endDate').val();
    // var startDate = $('#startDate').val();
    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>Sales Report</h1>');
    mywindow.document.write(document.getElementById('printDiv').innerHTML);
    //mywindow.document.write('<hr /> start date : '+startDate+'<br /> end date:'+endDate);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    //mywindow.close();

    return true;
}


</script>


@endsection