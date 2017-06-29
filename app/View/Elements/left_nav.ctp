	<aside>

				<div id="sidebar" class="nav-collapse">

					<div class="leftside-navigation">

						<ul class="sidebar-menu" id="nav-accordion">

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-dashboard"></i>

								<span>Dashboard</span>

								</a>

							</li>

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-bookmark"></i>

								<span>News</span>

								</a>

							</li>

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-user"></i>

								<span>Profile</span>

								</a>

							</li>

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-shopping-cart"></i>

								<span>Order History</span>

								</a>

							</li>

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-usd"></i>

								<span>Deposit Funds</span>

								</a>

							</li>

							<li>

								<a href="javascript:void(0)">

								<i class="fa fa-comment"></i>

								<span>Support Centre</span>

								</a>

							</li>
							<li class="sub-menu">
                                                        <a href="javascript:;"><i class=" fa fa-file-o"></i><span>CMS Management</span></a>
                                                        <ul class="sub">
                                                        <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add Content',array('controller'=>'cms','action'=>'add','admin'=>true),array('escape'=>false)); ?></li>
                                                            <li><?php echo $this->Html->link('<i class="fa fa-circle-o"></i> List Content',array('controller'=>'cms','action'=>'index','admin'=>true),array('escape'=>false)); ?></li>    
                                                        </ul>
							 </li>

							<?php

								//$UserLevel = $user->GetData('UserLevel');

								//if($UserLevel == 'admin') {

									$html = '<li class="sub-menu">';

									$html .= '<a href="javascript:void(0)">';

									$html .= '<i class=" fa fa-legal"></i>';

									$html .= '<span>Administration</span>';

									$html .= '</a>';

									$html .= '<ul class="sub">';

									$html .= '<li><a href="administration.php">Administration [1 Page]</a></li>';

									$html .= '<li><a href="administration-1.php">Administration [2 Page]</a></li>';

									$html .= '</ul>';

									$html .= '</li>';

									

									echo $html;

								//}

							?>

						</ul>

					</div>

				</div>

			</aside>