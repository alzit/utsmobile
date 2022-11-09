<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px">
    <head>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
            <a href="<?php echo base_url('Registrasi/tambah_data');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
            </div>
                <div class="card-body" >
                    <!-- <?php echo $this->session->flashdata('pesan');?> -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id User</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Password</th>
                               
                                    <th style="width: 125px;">Aksi</th>                              
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=0; 
                                    foreach($user as $r){
                                        $i++;
                                        ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $r->id_user; ?></td>
                                                <td><?php echo $r->username; ?></td>
                                                <td><?php echo $r->email; ?></td>
                                                <td><?php echo $r->password; ?></td>
                                        
                                                <td>
                                                <a href="<?php echo base_url() ?>Registrasi/edit_data/<?php echo $r->id_user;?>" class="badge badge-warning">Edit</a>
                                                <a href="<?php echo base_url() ?>Registrasi/hapus_data/<?php echo $r->id_user;?>" class="badge badge-danger">Hapus</a>
                                            </td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </head>
</div>
