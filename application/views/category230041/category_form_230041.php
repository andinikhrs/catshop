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

        form {
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

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #d4b8a5;
            border-radius: 8px;
            font-size: 15px;
            background-color: #ffffff;
            transition: all 0.3s ease;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
            font-family: inherit;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #8b7355;
            outline: none;
            box-shadow: 0 0 5px rgba(139, 115, 85, 0.2);
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
            margin-right: 10px;
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
            form {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            h3 {
                font-size: 18px;
            }

            input[type="submit"],
            input[type="button"] {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <h1>CATHSOP 230041</h1>
    <h3>CATEGORY FORM</h3>
    <hr>
    <?php
    $name='';                                                                                                                                                                                                       
    $description='';

    if(isset($category)) {
        $name=$category->name_category230041;
        $description=$category->description_230041;
    }  
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name_category230041" value="<?=$name?>" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description_230041" required><?=$description?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('category230041')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>