            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="top-right col-md-9 col-sm-12 col-xs-12 pull-right">
                            <ul class="list-inline">
                                <li class="hidden-xs">
                                    <a href="mailto:alumni@sayidan.edu">
                                        <span class="icon mail-icon"></span>
                                        <span class="text">alumni@sayidan.edu</span>
                                    </a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#">
                                        <span class="icon phone-icon"></span>
                                        <span class="text">+1 087 222 9</span>
                                    </a>
                                </li>
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding">
                                        <input type="text" name="q" class="form-control input-search" placeholder="search..." autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                
                                <?php if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) { ?>
                                <li><i><a style="color:white; font-size: 120%;" href="<?php echo base_url('admin')?>"><?php echo $this->session->userdata('first').' '.$this->session->userdata('last');  ?></i></a></li>
                                <li class="login">
                                    <a href="<?php echo base_url('login/logout')?>">Log Out</a>
                                </li>
                                <?php }elseif ($this->ion_auth->in_group('alumni', $this->session->userdata('user_id'))){ ?>
                                <li><i><a style="color:white; font-size: 120%;" href="<?php echo base_url('admin')?>"><?php echo $this->session->userdata('first').' '.$this->session->userdata('last');  ?></i></a></li>
                                <li class="login">
                                    <a href="<?php echo base_url('login/logout')?>">Log Out</a>
                                </li>
                                <?php }else{?>
                                <li class="login">
                                    <a href="<?php echo base_url('login')?>">Log In</a>
                                </li>
                                    <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="logo hidden-sm hidden-xs">
                        <a href="<?php echo base_url(); ?>"> <img src="<?php echo theme_locations();?>images/logo.png" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="about-us.html">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="programs-events.html">PROGRAM &amp; EVENTS</a>
                                </li>

                                <li>
                                   <a href="alumni-story.html">ALUMNI STORY</a>
                                </li>
                                <li>
                                    <a href="career-opportunity.html">CAREER OPPORTUNITY</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="logo-mobile">
                            <a href="#"> <img src="<?php echo theme_locations();?>images/logo-small.png" alt="logo"></a>
                        </div>
                        <div class="mobile-menu ">
                        </div>
                    </div>
                </div>
            </div>