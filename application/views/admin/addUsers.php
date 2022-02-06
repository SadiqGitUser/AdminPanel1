<!--headerStyle-->
<?php $this->load->view('admin/includes/headerStyle');?>
<!--headerStyle-->
<!--leftMenu-->
<?php $this->load->view("admin/includes/leftMenu");?>
<!--leftMenu-->
<!-- Navbar -->
<?php $this->load->view('admin/includes/navBar');?>
<!-- End Navbar -->

<div class="container-fluid py-4">
    <div class="row">
    <div class="container">

 <?php echo  $this->session->flashdata('err')?>
        <h2>Add Users</h2>




        <form action="<?php echo  base_url('addUserAct') ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" class="form-control" placeholder="Ad daxil edin"><br>
            <input type="text" name="surname" class="form-control" placeholder="Soyad daxil edin"><br>
            <input type="" name="username" class="form-control" placeholder="Istifadeci daxil edin"><br>
            <input type="email" name="email" class="form-control" placeholder="Email daxil edin"><br>
            <input type="password" name="password" class="form-control" placeholder="Sifre daxil edin"><br>
            <select name="gender" class="form-control" id="">
                <option value="gender">Secin</option>
                <option value="Kisi">Kisi</option>
                <option value="Qadin">Qadin</option>
            </select>
            <br>
            <button type="submit" class="btn btn-info pull-right">Elave et</button>
     </form>
    </div>
     

        <div class="container">

        </div>
    </div>

    <!--footer-->
    <?php $this->load->view('admin/includes/footer'); ?>
    <!--footer-->

    <!--    footerJs-->
    <?php $this->load->view('admin/includes/footerJs'); ?>
    <!--    footerJs-->
