<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $system_abbr       =	$this->db->get_where('settings' , array('setting_id'=>'1'))->row()->system_abbr;
    $id		 =	$this->session->userdata('id');
    $role       =	$this->db->get_where('login' , array('login_id'=>$id))->row()->role;
    $name       =	$this->db->get_where('login' , array('login_id'=>$id))->row()->name;
    ?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <title><?php echo ucwords($page_title).' :: '.$system_abbr;?></title>
        <?php include "includes_top.php"?>
        <script>    
            $(document).ready(function() {
            $('#example').DataTable();
            } );
        </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Galaxy Cyber</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="<?php if($page_name=="settings"){ ?>active-link<?php }?>" href="<?php echo base_url() ?>admin/settings">
                        <i class="fa fa-cog"></i>
                        Settings
                        </a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url()?>logout">
                        <i class="fa fa-sign-out"></i>
                        Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="<?php if($page_name=="dashboard"){ ?>active-link<?php }?>" href="<?php echo base_url()?>admin/dashboard">
                            <i class="fa fa-th-large"></i>
                            Dashboard
                            </a>
                            <a class="<?php if($page_name=="profile"){ ?>active-link<?php }?>" href="<?php echo base_url() ?>admin/profile">
                            <i class="fa fa-user"></i>
                            Profile
                            </a>                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?php if ($page_name=='dashboard'){?>
                    <div class="container-fluid">
                        <h1 class="mt-4">Galaxy Cyber Dashboard</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Orders</li>
                            </ol> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Customer Orders
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Service</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($orders as $row):
                                                 $orderId=$row['orderId'];
                                                 $name=$row['name'];
                                                 $phoneNumber=$row['phoneNumber'];
                                                 $service=$row['service'];
                                                 $description=$row['description'];
                                                 $created_at=$row['created_at'];
                                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $orderId ?>.
                                                </td>
                                                <td>
                                                    <?php echo $name ?>.
                                                </td>
                                                <td>
                                                    <?php echo $phoneNumber ?>.
                                                </td>
                                                <td>
                                                    <?php echo $service ?>.
                                                </td>
                                                <td>
                                                    <?php echo $description ?>.
                                                </td>
                                                <td>
                                                    <?php echo $created_at ?>.
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Service</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php if ($page_name=='profile'){?>
                    <?php include "backend/admin/profile.php"; ?>
                    <?php }?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; New Millenium Tech 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
            <div class="container-fluid">
            </div>
            <!-- .container -->
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>components/assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>