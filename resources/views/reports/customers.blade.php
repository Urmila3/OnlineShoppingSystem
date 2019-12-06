@extends('layouts.layout')
@section('content')
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md{
                margin-bottom: 30px;
				font-size: 50px;
			}
			h1{
				font-size:80px;
				color:blue;
			}
        </style>
        	<h3>Report of order</h3>
        	<br/>
<select>
	<option>2013</option>
	<option>2014</option>
	<option>2015</option>
    <option>2016</option>
    <option>2017</option>
    <option>2018</option>
</select>
<br/>
<table border="1px">
<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Phone No.</th>
	<th>Created at</th>
    <th>Updated at</th>
</tr>

<?php
foreach ($customers as $cust) { ?>

<tr>
    <td><?php echo $cust->name ?></td>
	<td><?php echo $cust->address ?></td>
	<td><?php echo $cust->mobile ?></td>
	<td><?php echo $cust->created_at ?></td>
    <td><?php echo $cust->updated_at ?></td>
</tr>
<?php 
}
?>
</table>
@endsection