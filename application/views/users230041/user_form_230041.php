<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form - CATSHOP 230041</title>
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
            max-width: 600px;
            margin: 20px 0;
            border: none;
            border-top: 1px solid #d4b8a5;
        }

        .form-container {
            background: #fff9f5;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(139, 115, 85, 0.1);
            width: 100%;
            max-width: 600px;
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

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #d4b8a5;
            border-radius: 8px;
            font-size: 15px;
            background-color: #ffffff;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #8b7355;
            outline: none;
            box-shadow: 0 0 5px rgba(139, 115, 85, 0.2);
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        input[type="radio"] {
            margin-right: 8px;
            cursor: pointer;
        }

        input[type="radio"] + label {
            color: #6b4423;
            cursor: pointer;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: #8b7355;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        input[type="button"] {
            background-color: #b4a089;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #6b4423;
            transform: translateY(-2px);
        }

        @media screen and (max-width: 480px) {
            .form-container {
                padding: 20px;
            }

            .btn-group {
                flex-direction: column;
            }

            input[type="submit"],
            input[type="button"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>CATSHOP 230041</h1>
    <h3>USER FORM</h3>
    <hr>
    
    <div class="form-container">
        <?php
        $name = '';                                                                                                                                                                                                       
        $type = '';
        $fullname = '';

        if(isset($user)) {
            $name = $user->username_230041;
            $type = $user->usertype_230041;
            $fullname = $user->fullname_230041;
        }  
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username_230041" value="<?=$name?>" required></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>
                        <div class="radio-group">
                            <div>
                                <input type="radio" name="usertype_230041" value="Manager" id="manager" <?=$type=='Manager'?'checked':''?> required>
                                <label for="manager">Manager</label>
                            </div>
                            <div>
                                <input type="radio" name="usertype_230041" value="Cashier" id="cashier" <?=$type=='Cashier'?'checked':''?> required>
                                <label for="cashier">Cashier</label>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fullname</td>
                    <td><input type="text" name="fullname_230041" value="<?=$fullname?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="btn-group">
                            <input type="submit" value="Save" name="submit">
                            <a href="<?=site_url('users230041')?>"><input type="button" value="Cancel"></a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>