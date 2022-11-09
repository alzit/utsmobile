<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->

        <?php if ($this->session->userdata('id_level')=='1'){ ?>

            <table class="table table-bordered">
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>kelas</th>
                    <th>semester</th>
                    <th>aksi</th>
                </tr>
        <?php
        $i=0;
        foreach($mhs as $m){
            $i++;
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $m->nama; ?></td>
            <td><?php echo $m->nim; ?></td>
            <td><?php echo $m->kelas; ?></td>
            <td><?php echo $m->semester; ?></td>
            <td>
                <?php
                if($m->presensi==NULL){?>
                <a href="http://localhost/ci3latihan/Temp/daftar/<?php echo $m->nim; ?>/H">H</a> |
                <a href="http://localhost/ci3latihan/Temp/daftar/<?php echo $m->nim; ?>/I">I</a> |
                <a href="http://localhost/ci3latihan/Temp/daftar/<?php echo $m->nim; ?>/S">S</a> |
                <a href="http://localhost/ci3latihan/Temp/daftar/<?php echo $m->nim; ?>/A">A</a>
                <?php }else{echo $m->presensi;} ?>

            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    
    
    <?php

    }