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
            max-width: 1200px;
            margin: 20px 0;
            border: none;
            border-top: 1px solid #d4b8a5;
        }

        #searchBox {
            width: 100%;
            max-width: 1200px;
            padding: 12px;
            border: 2px solid #d4b8a5;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 20px;
            background-color: #ffffff;
        }

        #searchBox:focus {
            border-color: #8b7355;
            outline: none;
            box-shadow: 0 0 5px rgba(139, 115, 85, 0.2);
        }

        table {
            width: 100%;
            max-width: 1200px;
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

        /* Mengatur lebar spesifik untuk setiap kolom */
        th:nth-child(1), 
        td:nth-child(1) { /* No */
            width: 5%;
            text-align: center;
        }

        th:nth-child(2), 
        td:nth-child(2) { /* Name */
            width: 20%;
        }

        th:nth-child(3), 
        td:nth-child(3) { /* Type */
            width: 15%;
        }

        th:nth-child(4), 
        td:nth-child(4) { /* Gender */
            width: 10%;
        }

        th:nth-child(5), 
        td:nth-child(5) { /* Age */
            width: 10%;
            text-align: center;
        }

        th:nth-child(6), 
        td:nth-child(6) { /* Price */
            width: 15%;
            text-align: right;
        }

        tr:hover {
            background-color: #faf0e6;
        }

        tr:nth-child(even) {
            background-color: #fdf6f0;
        }

        tr:nth-child(even):hover {
            background-color: #faf0e6;
        }

        /* Style untuk tombol Add New */
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

        /* Styling untuk button aksi */
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

        .btn-sale {
            background-color: #d7e6d7;
            color: #2d5a2d;
            border: 1px solid #c1d8c1;
        }

        .btn-sale:hover {
            background-color: #2d5a2d;
            color: white;
            transform: translateY(-2px);
        }

        .sold-badge {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ffd7d7;
            color: #943535;
            border-radius: 6px;
            font-weight: 600;
            min-width: 90px;
            text-align: center;
        }

        .action-cell {
            white-space: nowrap;
            text-align: center;
            padding: 10px 5px;
        }

        /* Home link style */
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

        /* Flash message style */
        .flash-message {
            width: 100%;
            max-width: 1200px;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            background-color: #d7e6d7;
            color: #2d5a2d;
            text-align: center;
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

            .action-cell {
                padding: 5px 2px;
            }

            .sold-badge {
                padding: 6px 12px;
                min-width: 70px;
            }
        }
    </style>
</head>
<body>
    <h1>CATHSOP 230041</h1>
    <h3>CATS LIST</h3>
    <a href="<?=base_url()?>" class="home-link">HOME</a>
    <?php if($this->session->flashdata('msg')): ?>
        <div class="flash-message">
            <?=$this->session->flashdata('msg')?>
        </div>
    <?php endif; ?>
    <a href="<?=site_url('cats230041/add')?>" class="add-new">Add new cat</a>
    <hr>

    <input type="text" id="searchBox" onkeyup="searchCats()" placeholder="Search cats by name, type, or gender...">
    <br><br>

    <table id="catsTable">
        <thead>    
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Photo1</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Price($)</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        
        <?php $i = $this->uri->segment(3, 0) + 1; foreach ($cats as $cat) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$cat->name_230041?></td>
            <td>
                <?php 
                $photo1 = 'default.png';
                if(!empty($cat->photo1_230041) && file_exists('./uploads/cats/'.$cat->photo1_230041)) {
                    $photo1 = $cat->photo1_230041;
                }
                ?>
                <img src="<?=base_url('uploads/cats/'.$photo1)?>" width="128" height="128" alt="<?=$cat->name_230041?>" style="object-fit: cover; border-radius: 8px; border: 2px solid #d4b8a5;" />
            </td>
            <td><?=$cat->type_230041?></td>
            <td><?=$cat->gender_230041?></td>
            <td><?=$cat->age_230041?></td>
            <td><?=$cat->price_230041?></td>
            <td class="action-cell">
                <a href="<?=site_url('cats230041/edit/'.$cat->id_230041)?>" class="btn btn-edit">Edit</a>
            </td>
            <td class="action-cell">
                <a href="<?=site_url('cats230041/delete/'.$cat->id_230041)?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this cat?')">Delete</a>
            </td>
            <td class="action-cell">
                <?php if($cat->sold_230041==1) { ?>
                    <span class="sold-badge">SOLD</span>
                <?php } else { ?>
                    <a href="<?=site_url('cats230041/sale/'.$cat->id_230041)?>" class="btn btn-sale">SALE</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- PAGINATION -->
    <div style="margin-top: 20px;">
        <?=$pagination?>
    </div>

    <script>
        function searchCats() {
            const input = document.getElementById("searchBox");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("catsTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let tdName = tr[i].getElementsByTagName("td")[1];
                let tdType = tr[i].getElementsByTagName("td")[3];
                let tdGender = tr[i].getElementsByTagName("td")[4];
                if (tdName && tdType && tdGender) {
                    const nameText = tdName.textContent.toLowerCase();
                    const typeText = tdType.textContent.toLowerCase();
                    const genderText = tdGender.textContent.toLowerCase();
                    tr[i].style.display = (nameText.includes(filter) || typeText.includes(filter) || genderText.includes(filter)) ? "" : "none";
                }
            }
        }
    </script>
</body>
</html>
