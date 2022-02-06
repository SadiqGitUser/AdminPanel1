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
            <h2>Update Users</h2>




            <form action="<?php echo  base_url('updateUserAct/'.$getSingleUser['id']); ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="name" class="form-control" placeholder="Ad daxil edin"
                       value="<?php echo $getSingleUser['name'];?>"><br>
                <input type="text" name="surname" class="form-control" placeholder="Soyad daxil edin"
                       value="<?php echo $getSingleUser['surname'];?>"><br>
                <input type="text" name="username" class="form-control" placeholder="Istifadeci daxil edin"
                       value="<?php echo $getSingleUser['username'];?>"><br>
                <input type="email" name="email" class="form-control" placeholder="Email daxil edin"
                       value="<?php echo $getSingleUser['email'];?>"><br>
<!--                <input type="password" name="password" class="form-control" placeholder="Sifre daxil edin"-->
<!--                       value="--><?php //echo $getSingleUser['name'];?><!--"><br>-->
                <select name="gender" class="form-control" id="">
                    <option <?php if ($getSingleUser['gender']== ""){echo "SELECTED";} ?> value="">     Secin</option>
                    <option <?php if ($getSingleUser['gender']== "Kisi"){echo "SELECTED";} ?> value="Kisi"> Kisi</option>
                    <option <?php if ($getSingleUser['gender']== "Qadin"){echo "SELECTED";} ?> value="Qadin">Qadin</option>
                </select>
                <br>
                <button type="submit" class="btn btn-info pull-right">Yenilə</button>
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
