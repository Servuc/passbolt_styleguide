<?php include('_includes/bootstrap.php'); ?><!doctype html>
<html class=" js websqldatabase draganddrop cssscrollbar" lang="en">
<head>
	<?php include('includes/meta/LU_meta.php'); ?>
	<script type="application/javascript">
		$(function() {
			$("#ConnectionProtocol").chosen({width: '100%', disable_search: true});
			$("#DefaultGroupAdminUser").chosen();
			$("#DefaultUser").chosen();
		});
	</script>
</head>
<body>
<div id="container" class="page settings login-history">
	<div class="mad_event_event_bus"></div>
	<div id="js_app_controller" class="passbolt_controller_app_controller mad_view_view js_component ready">
		<!-- LU_passwords -->


		<?php
		$role='admin';
		include('includes/headers/LU_header_first.php');
		?>
		<div class="header second">
			<?php include('includes/headers/LU_header_second_logo.php'); ?>
			<?php include('includes/headers/LU_header_search_users.php'); ?>
			<?php include('includes/headers/LU_header_userbadge.php'); ?>
		</div>
		<div class="header third">
			<?php include('includes/headers/LU_header_third_title_profile.php'); ?>
			<?php //include('includes/headers/LU_header_third_actions_profile.php'); ?>
			<!-- no action on login history -->
		</div>
		<div class="panel main mad_controller_component_tab_controller mad_view_component_tab js_component ready" id="js_app_panel_main">
			<div class="js_tabs_content tabs-content">
				<div id="js_passbolt_preferenceWorkspace_controller" class="passbolt_controller_preference_workspace_controller mad_view_view tab-content ready selected">
					<div class="js_preference_workspace">
						<div class="panel left">
							<?php
								$_GET['shortcuts'] = 'ldap_configuration';
								include('includes/nav/AD_nav_administration_ldap.php');
							?>
						</div>
						<div class="panel middle">
							<?php
							$_GET['breadcrumbs'] = array(
								'administration' => '../demo/LU_users.php',
								'ldap' => '../demo/LU_users_profile.php',
								'configuration' => '../demo/LU_users_profile_loginhistory.php'
							);
							include('includes/LU_breadcrumbs.php'); ?>
							<div id="js_wk_preference_main"
									 class="mad_controller_component_tab_controller mad_view_component_tab js_component ready">
								<div class="js_tabs_content tabs-content">
									<div id="js_preference_wk_profile_controller"
											 class="passbolt_controller_component_profile_controller mad_view_view tab-content ready selected">
										<div class="grid grid-responsive-12">
											<div class="row">

												<div class="ldap-configuration-credentials col8">
													<h3>Credentials</h3>
													<div class="radiolist">
														<label>Directory type</label>
														<div class="input radio">
															<input name="data[User][field]" value="1" id="UserField1" type="radio" checked="checked">
															<label for="UserField1">Active Directory</label>
															<input name="data[User][field]" value="2" id="UserField2" type="radio">
															<label for="UserField2">Open Ldap</label>
														</div>
													</div>
													<div class="input text">
														<label>Domain</label>
														<input type="text" class="required fluid" placeholder="domain.ext">
													</div>
													<div class="singleline connection_info protocol_host_port clearfix">
														<label>Server url</label>
														<div class="input text field_protocol_host">
															<div class="input text protocol">
																<select name="data[ldap][connection_type]" class="required fluid" id="ConnectionProtocol" required="required">
																	<option value="1">ldap://</option>
																	<option value="2">ldaps:// (ssl)</option>
																	<option value="3">ldaps:// (tls)</option>
																</select>
															</div>
															<div class="input text host">
																<input type="text" class="required fluid" placeholder="host or ip">
															</div>
														</div>
														<div class="input text port">
															<input type="number" class="required fluid" placeholder="port" value="389">
														</div>
													</div>
													<div class="singleline clearfix">
														<div class="input text first-field">
															<label>Username</label>
															<input type="text" class="required fluid" placeholder="username">
														</div>
														<div class="input text last-field">
															<label>Password</label>
															<input type="password" class="required fluid" placeholder="password">
														</div>
													</div>
													<div class="input text">
														<label>Base DN</label>
														<input type="text" class="required fluid" placeholder="OU=OrgUsers,DC=mydomain,DC=local">
														<div class="message">The base DN (default naming context) for the domain. If this is empty then it will be queried from the RootDSE.</div>
													</div>

													<h3>Directory configuration</h3>
													<div class="input text">
														<label>Group path</label>
														<input type="text" class="required fluid" placeholder="Group Path">
														<div class="message">Group path is used in addition to the base DN while searching groups.</div>
													</div>
													<div class="input text">
														<label>User path</label>
														<input type="text" class="required fluid" placeholder="User Path">
														<div class="message">User path is used in addition to base DN while searching users.</div>
													</div>
													<div class="input text">
														<label>Group object class</label>
														<input type="text" class="required fluid" placeholder="GroupObjectClass">
														<div class="message">For Openldap only. Defines which group object to use. (Default: posixGroup)</div>
													</div>
													<div class="input text">
														<label>User object class</label>
														<input type="text" class="required fluid" placeholder="UserObjectClass">
														<div class="message">For Openldap only. Defines which user object to use. (Default: inetOrgPerson)</div>
													</div>

													<h3>Synchronization options</h3>
													<div class="input text">
														<label>Default admin</label>
														<select name="data[ldap][defaultUser]" class="required fluid" id="DefaultUser" required="required">
															<option value="1">admin@passbolt.com</option>
															<option value="2">ada@passbolt.com</option>
															<option value="3">lynne@passbolt.com</option>
														</select>
														<div class="message">The default admin user is the admin user that will perform the operations for the the directory.</div>
													</div>
													<div class="input text">
														<label>Default group admin</label>
														<select name="data[ldap][defaultGroupAdminUser]" class="required fluid" id="DefaultGroupAdminUser" required="required">
															<option value="1">admin@passbolt.com</option>
															<option value="2">ada@passbolt.com</option>
															<option value="3">lynne@passbolt.com</option>
															<option value="3">frances@passbolt.com</option>
															<option value="3">danna@passbolt.com</option>
														</select>
														<div class="message">This url will be used for places where the passbolt url cannot be guessed, such as links in emails.</div>
													</div>

													<div class="input text">
														<label>Sync operations</label>
														<div class="col6">
															<div class="input checkbox"><input type="checkbox" name="user_create" checked="checked"> create users</div>
															<div class="input checkbox"><input type="checkbox" name="user_delete" checked="checked"> delete users</div>
														</div>
														<div class="col6 last">
															<div class="input checkbox"><input type="checkbox" name="group_create" checked="checked"> create groups</div>
															<div class="input checkbox"><input type="checkbox" name="group_delete" checked="checked"> delete groups</div>
															<div class="input checkbox"><input type="checkbox" name="group_update" checked="checked"> update group memberships</div>
														</div>
													</div>

													<div class="input text">
														<a class="button primary big" href="../demo/AD_admin_ldap_configuration.php">Save settings</a>
													</div>
													<p>&nbsp;</p>
												</div>

												<div class="col4 last">
													<h2>Need help?</h2>
													<p>Check out our ldap configuration guide</p>
													<a class="button" href="https://help.passbolt.com/configure/ldap" target="_blank">
														<i class="fa fa-fw fa-life-ring"></i>
														<span>Read documentation</span>
													</a>
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
		</div>
	</div>
	<?php include('includes/LU_footer.php'); ?>
</body>
</html>