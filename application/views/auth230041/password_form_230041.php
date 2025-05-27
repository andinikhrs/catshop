<?php defined('BASEPATH') OR exit('No direct script acces allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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

        hr {
            width: 100%;
            max-width: 400px;
            margin: 20px 0;
            border: none;
            border-top: 1px solid #d4b8a5;
        }

        form {
            background: #fff9f5;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
            width: 100%;
            max-width: 400px;
            border: 1px solid #e6d5c5;
        }

        table {
            width: 100%;
        }

        tr {
            margin-bottom: 15px;
            display: block;
        }

        td {
            padding: 8px 0;
            display: block;
        }

        td:first-child {
            font-weight: 600;
            color: #6b4423;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #d4b8a5;
            border-radius: 8px;
            font-size: 15px;
            background-color: #ffffff;
            transition: all 0.3s ease;
        }

        input[type="password"]:focus {
            border-color: #8b7355;
            outline: none;
            box-shadow: 0 0 5px rgba(139, 115, 85, 0.2);
        }

        input[type="submit"] {
            background-color: #8b7355;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #6b4423;
            transform: translateY(-2px);
        }

        .error {
            color: #c94f4f;
            margin-bottom: 15px;
            background: rgba(201, 79, 79, 0.1);
            padding: 10px;
            border-radius: 6px;
            border-left: 4px solid #c94f4f;
            max-width: 400px;
            width: 100%;
        }

        a {
            margin-top: 20px;
            text-decoration: none;
            color: #6b4423;
            transition: all 0.3s ease;
        }

        a h4 {
            padding: 10px 20px;
            background: rgba(139, 115, 85, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        a:hover h4 {
            background: #8b7355;
            color: #fff;
            transform: translateY(-2px);
        }

        @media screen and (max-width: 480px) {
            form {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            h3 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <h1>CATHSOP 230041</h1>
    <h3>CHANGE PASSWORD</h3>
    <hr>
    <div class="error">
        <?=$this->session->flashdata('msg')?>
        <?=validation_errors()?>
    </div>
    <form action="" method="post">
        <table>
            <tr>
                <td>OLD PASSWORD</td>
                <td><input type="password" name="oldpassword" required></td>
            </tr>
            <tr>
                <td>NEW PASSWORD</td>
                <td><input type="password" name="newpassword" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="change" value="CHANGE PASSWORD"></td>
            </tr>
        </table>
    </form>
    <a href="<?=base_url()?>"><h4>Back to Home</h4></a>
</body>
</html>