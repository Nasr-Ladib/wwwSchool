<?php
$this->set_css($this->default_theme_path.'/twitter-bootstrap/css/bootstrap.min.css');
$this->set_css($this->default_theme_path.'/twitter-bootstrap/css/bootstrap-responsive.min.css');
$this->set_css($this->default_theme_path.'/twitter-bootstrap/css/style.css');

$this->set_css($this->default_theme_path.'/twitter-bootstrap/css/jquery-ui/flick/jquery-ui-1.9.2.custom.css');

$this->set_js_lib($this->default_javascript_path.'/'.grocery_CRUD::JQUERY);

//	JAVASCRIPTS - JQUERY-UI
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/jquery-ui/jquery-ui-1.9.2.custom.js');
//	JAVASCRIPTS - JQUERY LAZY-LOAD
$this->set_js_lib($this->default_javascript_path.'/common/lazyload-min.js');

if (!$this->is_IE7()) {
    $this->set_js_lib($this->default_javascript_path.'/common/list.js');
}
//	JAVASCRIPTS - TWITTER BOOTSTRAP
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/libs/bootstrap/bootstrap.min.js');
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/libs/bootstrap/application.js');
//	JAVASCRIPTS - MODERNIZR
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/libs/modernizr/modernizr-2.6.1.custom.js');
//	JAVASCRIPTS - TABLESORTER
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/libs/tablesorter/jquery.tablesorter.min.js');
//	JAVASCRIPTS - JQUERY-COOKIE
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/cookies.js');
//	JAVASCRIPTS - JQUERY-FORM
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/jquery.form.js');
//	JAVASCRIPTS - JQUERY-NUMERIC
$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.numeric.min.js');
//	JAVASCRIPTS - JQUERY-PRINT-ELEMENT
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/libs/print-element/jquery.printElement.min.js');
//	JAVASCRIPTS - JQUERY FANCYBOX
$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.fancybox-1.3.4.js');
//	JAVASCRIPTS - JQUERY EASING
$this->set_js($this->default_javascript_path.'/jquery_plugins/jquery.easing-1.3.pack.js');

//	JAVASCRIPTS - twitter-bootstrap - CONFIGURAÇÕES
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/app/twitter-bootstrap.js');
//	JAVASCRIPTS - JQUERY-FUNCTIONS
$this->set_js($this->default_theme_path.'/twitter-bootstrap/js/jquery.functions.js');
?>

<?php
if(!empty($list)){ ?>
<div class="span12" >
	<table class="table table-bordered tablesorter table-striped">
		<thead>
			<tr>
				<?php foreach($columns as $column){?>
				<th>
					<div class="text-left field-sorting <?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?><?php echo $order_by[1]?><?php }?>"
						rel="<?php echo $column->field_name?>">
						<?php echo $column->display_as; ?>
					</div>
				</th>
				<?php }?>
				<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
				<th class="no-sorter">
						<?php echo $this->l('list_actions'); ?>
				</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $num_row => $row){ ?>
			<tr class="<?php echo ($num_row % 2 == 1) ? 'erow' : ''; ?>">
				<?php foreach($columns as $column){?>
					<td class="<?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?>sorted<?php }?>">
						<div class="text-left"><?php echo ($row->{$column->field_name} != '') ? $row->{$column->field_name} : '&nbsp;' ; ?></div>
					</td>
				<?php }?>
				<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
				<td align="left">
					<div class="tools">
						<div class="btn-group">
							<button class="btn"><?php echo $this->l('list_actions'); ?></button>
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php
								if(!$unset_edit){?>
									<li>
										<a href="<?php echo base_url('/post/displayonepost/edit/133')?>" title="<?php echo $this->l('list_edit')?> <?php echo $subject?>">
											<i class="icon-pencil"></i>
											<?php echo $this->l('list_edit') . ' ' . $subject; ?>
										</a>
									</li>
								<?php
								}
								if(!$unset_delete){?>
									<li>
										<a href="javascript:void(0);" data-target-url="<?php echo $row->delete_url?>" title="<?php echo $this->l('list_delete')?> <?php echo $subject?>" class="delete-row" >
											<i class="icon-trash"></i>
											<?php echo $this->l('list_delete') . ' ' . $subject; ?>
										</a>
									</li>
								<?php
								}
								if(!empty($row->action_urls)){
									foreach($row->action_urls as $action_unique_id => $action_url){
										$action = $actions[$action_unique_id];
										?>
										<li>
											<a href="<?php echo $action_url; ?>" class="<?php echo $action->css_class; ?> crud-action" title="<?php echo $action->label?>"><?php
											if(!empty($action->image_url)){ ?>
												<img src="<?php echo $action->image_url; ?>" alt="" />
											<?php
											}
											echo ' '.$action->label;
											?>
											</a>
										</li>
									<?php
									}
								}
								?>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</td>
					<?php }?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php }else{ ?>
	<br/><?php echo $this->l('list_no_items'); ?><br/><br/>
<?php }?>