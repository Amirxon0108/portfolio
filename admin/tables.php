<?php
session_start();
require '../config/db.php';
require '../auth.php';  
include 'layouts/header.php';

$result = $conn->query("SELECT * FROM portfolio");
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Contact xabarlari</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <?php if(isset($_SESSION["delete"])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION["delete"]; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION["delete"]); ?>
<?php endif; ?>

                                <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>theme</th>
                                            <th>Messege</th>
                                             <th></th> <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>theme</th>
                                            <th>Messege</th>
                                           <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                <?php if($result && $result->num_rows>0):?>
                                <?php while($row = $result->fetch_assoc()):?>
                                <?php if(!empty($row['name'])):?>
                                    <tbody>

                                        <tr>
                                            <td><?= $row['name']?></td>
                                            <td> <?= $row['email']?></td>
                                            <td><?= $row['theme']?></td>
                                            <td><?= $row['message']?></td>
                                              <td class="action-buttons">
  <form action="edit.php" method="POST" style="display:inline-block;">
    <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
    <button class="btn-edit" title="Tahrirlash">
      <i class="fas fa-edit"></i> ko'rish
    </button>
  </form>

  <form action="delete.php" method="POST" style="display:inline-block;">
    <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">

    <button class="btn-delete" title="O‘chirish">   
      <i class="fas fa-trash"></i> O'chirish
    </button>
  </form>
</td>
                                        </tr>
                                       
                                    </tbody>
                                    <?php endif; ?>
                                       <?php endwhile; ?>
                                        <?php endif; ?> 
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>