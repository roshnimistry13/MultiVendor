<main class="main-content">
    <aside class="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>
                        Main menu
                    </span>
                </li>
                <li class="open">
                    <a href="<?php echo base_url('dashboard'); ?>" class="<?php echo activate_menu('dashboard'); ?>">
                        <span data-feather="home" class="nav-icon">
                        </span>
                        <span class="menu-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <?php
					$menu 		= adminMenu();					
					if(!empty($menu))
					{ 					
						foreach($menu as $m_row)
						{
							$newMenuLink 	= strtolower(str_replace('-', '', $m_row['menu_link']));
							$menu_link 		= base_url().$m_row['menu_link'];
							$openClass 		= "";						
							if(isset($page)){
								if($m_row['menu_link'] == $page){
									$openClass = "open";
								}
							}
							if($m_row['is_submenu'] == TRUE)
							{ ?>
								<li class="has-child <?php echo $openClass; ?>">
									<a href="javascript:void(0)" class="<?php echo activate_menu($newMenuLink); ?>">
										<span data-feather="<?php echo $m_row['menu_icon']?>" class="nav-icon">
										</span>
										<span class="menu-text">
											<?php echo ucwords($m_row['menu_name']); ?>
										</span>
										<span class="toggle-icon">
										</span>
									</a>
									<ul class="submenu">
										<?php
											if(!empty($m_row['submenu']))
											{
												foreach($m_row['submenu'] as $sm_row)
												{
													$submenu_link = base_url().$sm_row['submenu_link'];
													if($sm_row['submenu_link'] == "#")
													{
														$submenu_link = 'javascript:void(0)';
													}						
										?>
										<li>
											<a class="<?php echo (isset($page) && $page == $sm_row['submenu_link']) ? 'active' : '' ?>" href="<?php echo $submenu_link ?>">
												<span data-feather="chevrons-right" class="nav-icon">
												</span>
												<?php echo ucwords($sm_row['submenu_name']); ?>
											</a>
										</li>
										<?php
												}										
											}										
										?>
									</ul>
								</li>
            		  <?php }
						else { ?>
							<li class="open">
								<a href="<?php echo $menu_link; ?>" class="<?php echo activate_menu($m_row['menu_name']); ?>">
									<span data-feather="<?php echo $m_row['menu_icon']?>" class="nav-icon">
									</span>
									<span class="menu-text">
										<?php echo $m_row['menu_name']; ?>
									</span>
								</a>
							</li>
                		<?php }
					}					
				}
				?>
                <!-- <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="mail" class="nav-icon">
                        </span>
                        <span class="menu-text">
                            Email
                        </span>
                        <span class="toggle-icon">
                        </span>
                    </a>
                    <ul>
                        <li>
                            <a class="" href="inbox.html">
							<span data-feather="chevrons-right" class="nav-icon">
                                </span>
                                Inbox
                            </a>
                        </li>
                        <li>
                            <a class="" href="read-email.html">
							<span data-feather="chevrons-right" class="nav-icon">
                                </span>
                                Read Email
                            </a>
                        </li>
                    </ul>
                </li> -->
				<?php
					if(!empty($this->session->userdata[ADMIN_SESSION])){
						$uid 		= $this->session->userdata[ADMIN_SESSION]['user_id'];
						$rid 		= $this->session->userdata[ADMIN_SESSION]['role_id'];
						$role 		= $this->config->item('user_login')['rid'];
						if($uid == '999' && $rid == $role){
					?>					
						<li class="has-child">
							<a href="#" class="">
								<span data-feather="database" class="nav-icon">
								</span>
								<span class="menu-text">
									DataBase
								</span>
								<span class="toggle-icon">
								</span>
							</a>
							<ul>
								<li>
									<a class="" href="<?php echo base_url('export-database')?>">
									<span data-feather="chevrons-right" class="nav-icon">
										</span>
										Export DataBase
									</a>
								</li>
								<li>
									<a class="" href="<?php echo base_url('export-mail-database')?>">
									<span data-feather="chevrons-right" class="nav-icon">
										</span>
										Mail DataBase
									</a>
								</li>								
								<li>
									<a class="" href="<?php echo base_url('import-sql')?>">
									<span data-feather="chevrons-right" class="nav-icon">
										</span>
										Import SQL
									</a>
								</li>
								<li>
									<a class="" href="<?php echo base_url('sql-operation')?>">
									<span data-feather="chevrons-right" class="nav-icon">
										</span>
										Alter SQL
									</a>
								</li>                        
								<li>
									<a class="" href="<?php echo base_url('fetch-query')?>">
									<span data-feather="chevrons-right" class="nav-icon">
										</span>
										Select SQL
									</a>
								</li>                  
							</ul>
						</li>
				<?php } }?>
            </ul>
        </div>
    </aside>