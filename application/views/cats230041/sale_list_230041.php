<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATSHOP 230041</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f3e9e3;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #5c4033;
            margin-bottom: 10px;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        h3, h4 {
            color: #8b7355;
            margin-bottom: 20px;
            text-align: center;
        }

        hr {
            width: 100%;
            max-width: 1000px;
            margin: 20px 0;
            border: none;
            border-top: 1px solid #d4b8a5;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            background: #fff9f5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #e6d5c5;
        }

        th {
            background-color: #8b7355;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #fdf6f0;
        }

        a {
            text-decoration: none;
            color: #6b4423;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #8b7355;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>CATSHOP 230041</h1>
    <h3>SALES LIST</h3>
    <a href="<?=base_url()?>"><h4>HOME</h4></a>
    <hr>
    <table border="1"> 
        <tr>
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale Date</th>
            <th>Cat ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
        </tr>
        <?php $i=1; foreach($sales as $sale) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_230041?></td>
            <td><?=date('l, d M Y, H:i', strtotime($sale->sale_date_230041))?></td>
            <td><?=$sale->cat_id_230041?></td>
            <td><?=$sale->customer_name_230041?></td>
            <td><?=$sale->customer_address_230041?></td>
            <td><?=$sale->customer_phone_230041?></td>
        </tr><?php } ?>
    </table>
</body>
</html>