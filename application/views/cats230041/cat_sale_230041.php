<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop Sale</title>
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
            min-height: 100px;
            resize: vertical;
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
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
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
        }
    </style>
</head>
<body>
<h1>CATSHOP 230041</h1>
    <h3>CAT SALE FORM</h3>
</hr>
<form action="" method="post">
<table>
    <tr>
        <td>Cat Id</td>
        <td>: <?=$cat->id_230041?></td>
    </tr>
    <tr>
        <td>Cat Name</td>
        <td>: <?=$cat->name_230041?></td>
    </tr>
    <tr>
        <td>Cat Photo</td>
        <td><img src="<?=base_url('uploads/cats/'.$cat->photo1_230041)?>" width="128" height="128" /></td>
    </tr>
    <tr>
        <td>Cat Type</td>
        <td>: <?=$cat->type_230041?></td>
    </tr>
    <tr>
        <td>Cat Price</td>
        <td>: $<?=$cat->price_230041?></td>
    </tr>
    <tr>
        <td>Customer Name</td>
        <td><input type="text" name="customer_name_230041" /></td>
    </tr>
    <tr>
        <td>Customer Address</td>
        <td><textarea name="customer_address_230041"></textarea></td>
    </tr>
    <tr>
        <td>Customer Phone</td>
        <td><input type="text" name="customer_phone_230041" /></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <Input type="submit" name="submit" value="SALE">
        <a href="<?=site_url('cats230041')?>"><input type="button" value="CANCEL"></a>
        </td>
    </tr>
</table>
</form>
</body>
</html>