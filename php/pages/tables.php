<?php
include_once('../inc/header.php');
include_once('../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="d-flex mt-4">
                <h1>Tables</h1>
            </div>
            <ol class="breadcrumb mb-4 d-flex">
                <li class="breadcrumb-item py-2"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active py-2">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Example

                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><a href="#"><u>Kevin</u></a></td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
                                        &nbsp;
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="./assets/demo/datatables-demo.js"></script>

    <?php include_once('../inc/footer.php'); ?>