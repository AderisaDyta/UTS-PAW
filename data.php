<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <a href="formtambah.php">Tambah Data </a> 
        <!--Membuat table-->
        <table width="90%" border="1" cellspacing="1">
            <tr>
                <td>ID </td>
                <td>Nama </td>
                <td>Email </td>
                <td>Action</td>
            <!--Melakukan koneksi-->
                <?php
                include "koneksi.php";
            //Melakukan query
                $sql="SELECT * from tbl_013";
            //dieksekusi
                $hasil= mysqli_query ($koneksi, $sql);

                while($row = mysqli_fetch_array($hasil))
                {
                ?>
            <!--Mencetak datanya-->    
                <tr>
                    <td><?=$row["id_013"];?></td>
                    <td><?=$row["nama_013"];?></td>
                    <td><?=$row["email_013"];?></td>
                    <td> <a href="formedit.php?id=<?=$row['id_013']?>">Edit | <a href="delete.php?id=<?=$row['id_013']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>
