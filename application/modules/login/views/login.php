<div class="account-page login text-center">
            <div class="container">
                <div class="account-title">
                    <h4 class="heading-light">LOG IN</h4>
                </div>
                <div class="account-content">
                    <form method="post" action="<?php echo base_url('login/log_in'); ?>">
                        <div align="center" class="input-box" style="margin-left: 25%; width: 50%;">
                        <?php echo $this->session->flashdata('message');?>  
                        </div>  
                        <div class="input-box email">
                            <input type="text" name="identity" placeholder="Username">
                        </div>
                        <div class="input-box password">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="buttons-set">
                            <button type="submit" class="bnt bnt-theme text-regular text-uppercase"><a  title="Log In" class="bnt bnt-theme text-regular text-uppercase"> Log In</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>