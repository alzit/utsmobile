<div class="container-fluid">
    <h1>tambah data</h1>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('Registrasi/proses_tambah_data');?>">
        <div class="form-group row">
            <div class="col-sm-5">
                <input type="hidden" name="id_user">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" pattern=".{8,}" title="Password minimal 8 karakter" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>