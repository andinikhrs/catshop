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
            border-collapse: separate;
            border-spacing: 0;
            background: #fff9f5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
            margin: 20px 0;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border: 1px solid #e6d5c5;
        }

        th {
            background-color: #8b7355;
            color: white;
            font-weight: 600;
            white-space: nowrap;
        }

        tr:hover {
            background-color: #faf0e6;
        }

        tr:nth-child(even) {
            background-color: #fdf6f0;
        }

        /* Kolom spesifik */
        td:first-child, 
        th:first-child {
            width: 8%;
            text-align: center;
        }

        td:nth-child(2), 
        th:nth-child(2) {
            width: 25%;
        }

        td:nth-child(3), 
        th:nth-child(3) {
            width: 47%;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            min-width: 90px;
            margin: 2px;
        }

        .btn-edit {
            background-color: #e6e6c1;
            color: #6b4423;
            border: 1px solid #d4b8a5;
        }

        .btn-edit:hover {
            background-color: #8b7355;
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete {
            background-color: #ffd7d7;
            color: #943535;
            border: 1px solid #ffb8b8;
        }

        .btn-delete:hover {
            background-color: #943535;
            color: white;
            transform: translateY(-2px);
        }

        .home-link {
            text-decoration: none;
            color: #6b4423;
            margin-bottom: 20px;
            display: inline-block;
            padding: 8px 20px;
            background: rgba(139, 115, 85, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .home-link:hover {
            background: #8b7355;
            color: white;
            transform: translateY(-2px);
        }

        .add-new {
            display: inline-block;
            background-color: #8b7355;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 10px 0;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .add-new:hover {
            background-color: #6b4423;
            color: white;
            transform: translateY(-2px);
        }

        .action-cell {
            white-space: nowrap;
            text-align: center;
            padding: 10px 5px;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            .btn {
                padding: 6px 12px;
                font-size: 13px;
                min-width: 70px;
            }
        }
    </style>
</head>
<body>
    <h1>CATHSOP 230041</h1>
    <h3>CATEGORY LIST</h3>
    <a href="<?=base_url()?>" class="home-link">HOME</a>
    <?php if($this->session->flashdata('msg')): ?>
        <div class="flash-message">
            <?=$this->session->flashdata('msg')?>
        </div>
    <?php endif; ?>
    <a href="<?=site_url('category230041/add')?>" class="add-new">Add new category</a>
    <hr>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>

        <?php $i=1; foreach($category as $cate) {?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$cate->name_category230041?></td>
            <td><?=$cate->description_230041?></td>
            <td class="action-cell">
                <a href="<?=site_url('category230041/edit/'.$cate->id_category230041)?>" class="btn btn-edit">Edit</a>
            </td>
            <td class="action-cell">
                <a href="<?=site_url('category230041/delete/'.$cate->id_category230041)?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>