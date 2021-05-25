@extends('layout.master')

@section('content')

<form action="{{asset('user-nemeh')}}" class="uk-form-stacked" id="user_edit_form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<?php
	$msg = Session::get('msg');
	if (isset($msg) != '') { echo $msg; }
	?>
	<div class="uk-grid" data-uk-grid-margin>
		<div class="uk-width-large-10-10">
			<div class="md-card">
				<div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
					<div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail">
							<img src="assets/images/users/unknownprofile.jpg" alt="user avatar"/>
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail"></div>
						<div class="user_avatar_controls">
							<span class="btn-file">
								<span class="fileinput-new"><i class="material-icons">&#xE2C6;</i></span>
								<span class="fileinput-exists"><i class="material-icons">&#xE86A;</i></span>
								<input type="file" name="profile" id="user_edit_avatar_control">
							</span>
							<a href="#" class="btn-file fileinput-exists" data-dismiss="fileinput"><i class="material-icons">&#xE5CD;</i></a>
						</div>
					</div>
					<div class="user_heading_content">
						<!-- <h2 class="heading_b">
							<span class="uk-text-truncate" id="user_edit_uname">First Name</span>
							<span class="sub-heading" id="user_edit_position">Last Name</span>
						</h2> -->
					</div>
					<div class="md-fab-wrapper">
						<button class="md-fab md-fab-small md-fab-accent hidden-print" type="submit"><i class="material-icons">add</i></button>
					</div>
				</div>
				<div class="user_content">
					<div class="uk-margin-top">
						<h3 class="full_width_in_card heading_c">
							Ерөнхий мэдээлэл
						</h3>
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-width-medium-1-2">
								<label for="user_edit_uname_control">Нэр:</label>
								<input class="md-input" type="text" id="user_edit_uname_control" name="fname" />
							</div>
							<div class="uk-width-medium-1-2">
								<label for="user_edit_position_control">Овог</label>
								<input class="md-input" type="text" id="user_edit_position_control" name="lname" />
							</div>
						</div>
						<h3 class="full_width_in_card heading_c">
							Холбоо барих мэдээлэл
						</h3>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
									<div>
										<div class="uk-input-group">
											<span class="uk-input-group-addon">
												<i class="md-list-addon-icon material-icons">&#xE158;</i>
											</span>
											<label>Цахим хаяг:</label>
											<input type="text" class="md-input" name="email" />
										</div>
									</div>
									<div>
										<div class="uk-input-group">
											<span class="uk-input-group-addon">
												<i class="md-list-addon-icon material-icons">&#xE0CD;</i>
											</span>
											<label>Утасны дугаар</label>
											<input type="text" class="md-input" name="phone" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" data-uk-grid-margin>
									<div>
										<div class="uk-input-group">
											<span class="uk-input-group-addon">
												<i class="md-list-addon-icon material-icons">lock</i>
											</span>
											<label>Нууц үг оруулах:</label>
											<input type="password" class="md-input" name="password1" />
										</div>
									</div>
									<div>
										<div class="uk-input-group">
											<span class="uk-input-group-addon">
												<i class="md-list-addon-icon material-icons">lock</i>
											</span>
											<label>Нууц үг давтаж оруулах</label>
											<input type="password" class="md-input" name="password2" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php Session::forget('msg'); ?>

</form>

@endsection
