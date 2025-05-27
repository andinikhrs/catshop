<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Photo - CATSHOP 230041</title>
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

        .current-photo {
            text-align: center;
            margin-bottom: 20px;
        }

        .current-photo img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #8b7355;
            margin-bottom: 10px;
        }

        .current-photo p {
            color: #6b4423;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #6b4423;
            margin-bottom: 8px;
        }

        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #d4b8a5;
            border-radius: 8px;
            background-color: #ffffff;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
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

        .message {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .error {
            background-color: #ffe6e6;
            border: 1px solid #ff9999;
        }

        .success {
            background-color: #e6ffe6;
            border: 1px solid #99ff99;
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
        <h1>CATSHOP 230035</h1>
        <h3>CHANGE FOTO</h3>

        <?=$this->session->flashdata('msg')?>

        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>CURRENT PHOTO</td>
                    <td>
                        <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>">
                    </td>
                </tr>
                <tr>
                    <td>NEW PHOTO</td>
                    <td>
                        <input type="file" name="photo" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <br>
                        <input type="submit" name="upload" value="UPLOAD PHOTO">
                    </td>
                </tr>
            </table>
        </form>

        <hr>

        <p class="text-center">
            <a href="<?=base_url()?>">Back To Home</a>
        </p>
    </div>

</body>
</html>