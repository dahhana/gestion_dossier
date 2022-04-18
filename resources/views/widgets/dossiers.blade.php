@extends('voyager::master')
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Morris.js charts - simple examples</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.oesmith.co.uk/morris-0.5.1.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
<meta charset=utf-8 />
<title>Morris.js Area Chart</title>
</head>
<body>
  <h3 class="text-primary text-center">
    Morris js charts
  </h3>
  <div class"row">
    <div class="col-sm-6 text-center">
      <label class="label label-success">Area Chart</label>
      <div id="area-chart" ></div>
    </div>
    <div class="col-sm-6 text-center">
       <label class="label label-success">Line Chart</label>
      <div id="line-chart"></div>
    </div>
    <div  class="col-sm-6 text-center">
       <label class="label label-success">Bar Chart</label>
      <div id="bar-chart" ></div>
    </div>
    <div class="col-sm-6 text-center">
       <label class="label label-success">Bar stacked</label>
      <div id="stacked" ></div>
    </div>
    <div class="col-sm-6 col-sm-offset-3 text-center">
       <label class="label label-success">Pie Chart</label>
      <div id="pie-chart" ></div>
    </div>
    
  </div>
</body>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js'></script><script  src="./script.js"></script>

</body>
</html>
@endsection
