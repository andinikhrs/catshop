<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop Menu</title>
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

        h4 {
            background: #fff9f5;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(139, 115, 85, 0.1);
            border: 1px solid #e6d5c5;
            margin: 20px 0;
        }

        hr {
            width: 100%;
            max-width: 600px;
            margin: 20px 0;
            border: none;
            border-top: 1px solid #d4b8a5;
        }

        ul {
            list-style: none;
            width: 100%;
            max-width: 600px;
            background: #fff9f5;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
            border: 1px solid #e6d5c5;
        }

        li {
            margin: 10px 0;
        }

        a {
            display: block;
            color: #6b4423;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: rgba(139, 115, 85, 0.1);
            border: 2px solid transparent;
            font-weight: 500;
        }

        a:hover {
            background: #8b7355;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(139, 115, 85, 0.2);
        }

        /* Khusus untuk menu logout dan change password */
        ul:last-child {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
            background: transparent;
            box-shadow: none;
            border: none;
        }

        ul:last-child li {
            margin: 0;
        }

        ul:last-child a {
            font-size: 14px;
            padding: 10px 15px;
            background: #8b7355;
            color: #fff;
        }

        ul:last-child a:hover {
            background: #6b4423;
        }

        @media screen and (max-width: 480px) {
            body {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            h3, h4 {
                font-size: 18px;
            }

            ul {
                padding: 15px;
            }

            a {
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <h1>CATSHOP 230041</h1>
    <h3>MENU</h3>
    <hr>
    <ul>
    <li><a href="<?=site_url('cats230041')?>">Manage Cats</a></li>
    <li><a href="<?=site_url('category230041')?>">Manage Category</a></li>
    <?php if ($this->session->userdata('usertype') =='Manager') { ?>
    <li><a href="<?=site_url('users230041')?>">Manage Users</a></li>
    <li><a href="<?=site_url('cats230041/sales')?>">Sales Report</a></li><?php } ?>
    </ul>
    <hr>
    <h4>Welcome <?=$this->session->userdata('fullname')?>, you are login as <?=$this->session->userdata('usertype')?></h4>
    <ul>
    <li><img src="<?=base_url('uploads/users/'.($this->session->userdata('photo') ? $this->session->userdata('photo') : 'default.png'))?>" width="128" height="128" style="object-fit: cover; border-radius: 50%; border: 3px solid #8b7355;" /></li>
    <li><a href="<?= site_url('auth230041/changephoto') ?>">Change Photo</a></li>
    <li><a href="<?= site_url('auth230041/changepass') ?>">Changepass</a></li>
    <li><a href="<?=site_url('auth230041/logout')?>">Logout</a>
    </li>        
</ul>
</body>
</html>