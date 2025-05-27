<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List - CATSHOP 230041</title>
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

        h3 {
            color: #8b7355;
            margin-bottom: 20px;
            text-align: center;
        }

        h4 {
            color: #8b7355;
            text-decoration: none;
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

        .container {
            background: #fff9f5;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
            width: 100%;
            max-width: 1000px;
            border: 1px solid #e6d5c5;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .add-user {
            background-color: #8b7355;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .add-user:hover {
            background-color: #6b4423;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e6d5c5;
        }

        th {
            background-color: #8b7355;
            color: #fff;
            font-weight: 600;
        }

        tr:hover {
            background-color: #fff9f5;
        }

        .action-links a {
            color: #8b7355;
            text-decoration: none;
            margin-right: 10px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .action-links a:hover {
            color: #6b4423;
        }

        .message {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            background-color: #e6ffe6;
            border: 1px solid #99ff99;
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 15px;
            }

            table {
                display: block;
                overflow-x: auto;
            }

            th, td {
                padding: 8px 10px;
            }

            .header-actions {
                flex-direction: column;
                gap: 10px;
            }

            .add-user {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <h1>CATSHOP 230041</h1>
    <h3>USER LIST</h3>
    <a href="<?=base_url()?>"><h4>HOME</h4></a>
    
    <div class="container">
        <?php if($this->session->flashdata('msg')): ?>
            <div class="message"><?=$this->session->flashdata('msg')?></div>
        <?php endif; ?>

        <div class="header-actions">
            <a href="<?=site_url('users230041/add')?>" class="add-user">Add New User</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Type</th>
                <th>Fullname</th>
                <th colspan="3">Action</th>
            </tr>

            <?php $i=1; foreach($user as $users) {?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$users->username_230041?></td>
                <td><?=$users->usertype_230041?></td>
                <td><?=$users->fullname_230041?></td>
                <td class="action-links">
                    <a href="<?=site_url('users230041/edit/'.$users->userid_230041)?>">Edit</a>
                    <a href="<?=site_url('users230041/delete/'.$users->userid_230041)?>" 
                    onclick="return confirm('Are you sure?')">Delete</a>
                    <a href="<?=site_url('users230041/resetpass/'.$users->userid_230041)?>" 
                    onclick="return confirm('Are You Sure?')">Reset Password</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>