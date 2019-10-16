<html>
 <head>
 <!----> <title>Anomalies Report</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>

<nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="\aaa\">Return to dashboard</a>
</nav>
  <div class="container box">
    <div class="card">
   <br />
   <div class="table-responsive">
    <table id="Anomal_rpt" class="display nowrap" style="width:100%">
     <thead>
      <tr>
                    <th>Phone number</th>
                    <th>Billing date</th>
                    <th>Anomaly</th>
                    <th>Reading</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
</div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#Anomal_rpt').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"ajaxfile.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf', 'copy', 'print'
   ],
   "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ]
  });
  
 });
 
</script>
