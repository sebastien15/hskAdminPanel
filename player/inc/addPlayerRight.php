 <-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php include('player/inc/header.php') ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="clearfix"></div>
                <!-- Modal - Calendar - Add Category -->
                <div class="" id="add-category">
                    <div class="">
                        <div class="modal-content col-md-6 md-offset-2">
                            <form action="function.php" method="POST">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Register</strong></h4>
                                </div>
                                <div class="modal-body">
                                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control form-white" placeholder="Enter code key here" type="text" name="code_key"/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control form-white" placeholder="Start time" type="text" name="start_time"  value="<?php echo date("Y-m-d h:i:sa"); ?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-control form-white" data-placeholder="Choose Time flame" name="timeflame">
                                                    <option value="365 days">1 Year</option>
                                                    <option value="1 days">1 Day</option>
                                                    <option value="7 days">1 Week</option>
                                                    <option value="30 days">1 Month</option>
                                                    <!-- <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option> -->
                                                </select>
                                            </div>
                                        </div>                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info waves-effect waves-light save-category form-control" data-dismiss="modal" name="submit"><i  class="fa fa-file-text"></i>  Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
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
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel