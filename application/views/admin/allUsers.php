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

        <?php if($this->session->flashdata('success')) {;?>
              <div class="alert alert-success">
                  <?php echo $this->session->flashdata('success'); ?>
              </div>

       <?php } ?>
<h1>All Users List</h1>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Cinsi</th>
                    <th>Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($istifadeciler as $row){ ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['surname']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td>
                        <a class="btn btn-success"  href="<?php echo base_url('updateUser/'.$row['id'])?>">Yenilə</a>

                        <a class="btn btn-primary" href="<?php echo base_url('delete/'.$row['id'])?>">Sil</a>

                    </td>

                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <!--footer-->
    <?php $this->load->view('admin/includes/footer'); ?>
    <!--footer-->

    <!--    footerJs-->
    <?php $this->load->view('admin/includes/footerJs'); ?>
    <!--    footerJs-->
