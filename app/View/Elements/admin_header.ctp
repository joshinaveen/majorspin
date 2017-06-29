<header class="header fixed-top clearfix">

				<div class="brand">

					<a href="index.php" class="logo">

						<img src="<?php echo $this->webroot; ?>img/admin/logo.png" style="margin-top: -23px;" width="170px" height="80px" alt="">

					</a>

					<div class="sidebar-toggle-box">

						<div class="fa fa-bars"></div>

					</div>

				</div>

				<div class="nav notify-row" id="top_menu">

					<ul class="nav top-menu">

						<li id="header_notification_bar" class="dropdown">

							<a data-toggle="dropdown" class="dropdown-toggle" href="#">

							<i class="fa fa-bell-o"></i>

							<span class="badge bg-warning">

								<?php

								//	$stmt = $pdo->prepare('SELECT * FROM categories');

								//	$stmt->execute();

									

								//	echo $stmt->rowCount();

								?>

							</span>

							</a>

							<ul class="dropdown-menu extended notification">

								<li>

									<p>Categories</p>

								</li>

								

								<?php

								/*	if($stmt->rowCount() > 0) {

										foreach($stmt->fetchAll() as $row) {

											$html = '<li>';

											$html .= '<div class="alert alert-info clearfix">';

											$html .= '<span class="alert-icon"><i class="fa fa-flag"></i></span>';

											$html .= '<div class="noti-info">';

											$html .= 'Category #'.$row['CategoryID'].' '.$row['CategoryName'].'';

											$html .= '</div>';

											$html .= '</div>';

											$html .= '</li>';

											

											echo $html;

										}

									} else {

										$html = '<li>';

										$html .= '<div class="alert alert-danger clearfix">';

										$html .= '<span class="alert-icon"><i class="fa fa-flag"></i></span>';

										$html .= '<div class="noti-info">';

										$html .= '<a href="#"> There are no available categories.</a>';

										$html .= '</div>';

										$html .= '</div>';

										$html .= '</li>';

										

										echo $html;

									} */

								?>

							</ul>

						</li>

					</ul>

				</div>

				<div class="top-nav clearfix">

					<ul class="nav pull-right top-menu">

						<li class="dropdown">

							<a data-toggle="dropdown" class="dropdown-toggle" href="#">

							<?php

								//$user->GetImage(false, 33, 33);

							?>

							<span class="username"><?php $UserFunds = $loggedUser['funds']; echo(ucfirst($loggedUser['username'])); ?></span>

							<b class="caret"></b>

							</a>

							<ul class="dropdown-menu extended logout">

								<li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>

								<li><a href="<?php echo $this->webroot; ?>admin/login/logout"><i class="fa fa-key"></i> Log Out</a></li>

							</ul>

						</li>

						<li class="btn btn-default" style="background-color: #F6F6F6; border: none; color: #555; border-radius: 100px; height: 33px !important;">

							Funds: $ 0
                                                        

						</li>

					</ul>

				</div>

			</header>