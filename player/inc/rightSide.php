Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php include('player/inc/header.php') ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Players </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Code key</th>
                                                    <th>Code start</th>
                                                    <th>Code ends</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($result)) { 
                                                    foreach($result as $row) {
                                                ?>
                                                  <tr class="pb-0">
                                                    <td><?php echo $row["id"]; ?></td>
                                                    <td><?php echo $row["code_key"]; ?></td>
                                                    <td><?php echo $row["start_time"]; ?></td>
                                                    <td><?php echo $row["end_time"]; ?></td>
                                                    <td>
                                                        <!-- <a class="btn btn-success">Edit <i class="fa fa-edit"></i></a>  -->
                                                        <form action="function.php"  method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                                            <button class="btn btn-danger" type="submit" name="delete">Delete <i class="fa fa-trash-o" ></i></button>
                                                        </form>
                                                        
                                                    </td>
                                                  </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-10 -->
                    </div>
                </div>
                <!-- /.orders -->
               
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <!-- <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel