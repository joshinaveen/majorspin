<?php 

$html = '<section id="main-content">';

$html .= '<section class="wrapper">';

$html .= '<div class="row">';

$html .= '<div class="col-sm-12">';

$html .= '<section class="panel">';

$html .= '<header class="panel-heading">';

$html .= 'About Us';

$html .= '<span class="tools pull-right">';

$html .= '<a href="javascript:;" class="fa fa-chevron-down"></a>';

$html .= '<a href="javascript:;" class="fa fa-times"></a>';

$html .= '</span>';

$html .= '</header>';

$html .= '<div class="panel-body">';

echo $html;

?>

<div class="col-md-10">

					<section class="panel">

						<form method="POST" class="form-horizontal" role="form">

							<!--<input type="hidden" value="<?php echo $UserID; ?>" id="edit-user-id">-->

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">Content</label>

								<div class="col-lg-10">

									<input type="text" class="form-control" value="<?php echo $row['UserFirstName']; ?>" id="edit-user-first-name" placeholder="Account First Name" autocomplete="off" required>

								</div>

							</div>

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">Last Name</label>

								<div class="col-lg-10">

									<input type="text" class="form-control" value="<?php echo $row['UserLastName']; ?>" id="edit-user-last-name" placeholder="Account Last Name" autocomplete="off" required>

								</div>

							</div>

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">User Name</label>

								<div class="col-lg-10">

									<input type="text" class="form-control" value="<?php echo $row['UserName']; ?>" id="edit-user-name" placeholder="Account User Name" autocomplete="off" required>

								</div>

							</div>

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">User E-mail</label>

								<div class="col-lg-10">

									<input type="email" class="form-control" value="<?php echo $row['UserEmail']; ?>" id="edit-user-email" placeholder="Account E-mail" autocomplete="off" required>

								</div>

							</div>

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">User Group</label>

								<div class="col-lg-10">

									<select class="form-control" id="edit-user-level">

										<option value="<?php echo($row['UserLevel']); ?>" selected="true" style="display:none;"><?php echo(ucfirst($row['UserLevel'])); ?></option>

										<option value="default">Default User</option>

										<option value="banned">Banned User</option>

										<option value="admin">Admin User</option>

										<option value="reseller">Reseller User</option>

									</select>

								</div>

							</div>

							<div class="form-group">

								<label class="col-lg-2 col-sm-4 control-label">User Funds</label>

								<div class="col-lg-10">

									<input type="number" class="form-control" pattern="([0-9]+\.)?[0-9]+" value="<?php echo round($row['UserFunds'], 2); ?>" id="edit-user-funds" placeholder="Account Funds" required>

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-offset-2 col-lg-10">

									<button type="submit" id="edit-user" class="btn btn-info">Save User Account</button>

									<?php

										$UserLevel = $row['UserLevel'];

										if($UserLevel == 'banned') {

											echo '<button type="submit" id="edit-unban-user" class="btn btn-success">Unterminate User Account</button>';

										} else {

											echo '<button type="submit" id="edit-ban-user" class="btn btn-warning">Terminate User Account</button>';

										}

									?>

									<button type="submit" id="edit-delete-user" class="btn btn-danger">Delete User Account</button>

								</div>

							</div>

							<div id="result"></div>

						</form>

					</section>

				</div>
				
<?php 

$html = '</div>';

$html .= '</section>';

$html .= '</div>';

$html .= '</div>';

$html .= '</section>';

$html .= '</section>';



echo $html;

?>