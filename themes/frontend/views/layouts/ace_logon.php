    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    $cs = Yii::app()->getClientScript();
    $cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');

    $ace_path = realpath(Yii::getPathOfAlias('vendor.responsiweb') . '/ace-v1.2--bs-v2.3.x/assets');

    $asset_link = Yii::app()->assetManager->publish(
            $ace_path, false, // hash by name
            -1, // level
            false); // forceCopy

    $cs->registerCssFile($asset_link . '/css/bootstrap.min.css');
    $cs->registerCssFile($asset_link . '/css/bootstrap-responsive.min.css');
    $cs->registerCssFile($asset_link . '/css/font-awesome.min.css');
?>
		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?=$asset_link?>/css/font-awesome-ie7.min.css" />
		<![endif]-->    
        <?
    $cs->registerCssFile($asset_link . '/css/ace-fonts.css');
    $cs->registerCssFile($asset_link . '/css/ace.min.css');
    $cs->registerCssFile($asset_link . '/css/ace-responsive.min.css');
    $cs->registerCssFile($asset_link . '/css/ace-skins.min.css');
    $cs->registerCssFile($app_asset_path . '/parkoil-ace-customer.css');    
    $cs->registerScriptFile($asset_link . '/js/ace-extra.min.js');
    $cs->registerCssFile($app_asset_path . '/parkoil.css');    

    
    $user = User::model()->findByPk(Yii::app()->user->id);
    ?>
</head>
 
    <body>    
		<div class="navbar  navbar-fixed-top" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-inner">
				<div class="container-fluid">
                                    <div class="logo">
                                     <?php  //echo CHtml::image($app_asset_path.'/img/ParkOilLogoTransparent.png'); ?>
                                        
                                    </div>
                                    
                                        
                                    
                                   <div style="float:right;">

					<ul class="nav ace-nav pull-right">
	
                        <?php
                        if(!Yii::app()->user->isGuest){
                        ?>                           
						<li class="dark-beige">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <i class="icon-briefcase"></i>
                                <?echo Yii::app()->userCompany->getActiveCompanyName();?>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-briefcase"></i>
									<?php echo Yii::t('app', 'Your companies') ?>
								</li>
                                <?php 
                                    foreach (Yii::app()->userCompany->getClientCompanies() as $mCcmp) {
                                        echo ' 
                                            <li>
                                                <a href="'. Yii::app()->createUrl('',array_merge( $_GET, array('company' => $mCcmp->ccucCcmp->ccmp_id))).'">
                                                    '.$mCcmp->ccucCcmp->ccmp_name.'
                                                </a>
                                            </li>
                                            
                                        ';
                                    }                                
                                ?>
                                <li></li>
							</ul>
						</li>
                        <?php
                         }
                         ?>
						<li class="dark-beige">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <i class="icon-globe"></i>
                                <?echo Yii::app()->language;?>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-globe"></i>
									<?php echo Yii::t('app', 'Languages') ?>
								</li>
                                
								<li>
									<a href="<?php echo Yii::app()->createUrl('',array_merge( $_GET, array('lang' => 'en')));?>">
										English
									</a>
								</li>
								<li>
									<a href="<?php echo Yii::app()->createUrl('',array_merge( $_GET, array('lang' => 'lv')));?>">
										Latviešu
									</a>
								</li>
                                <li></li>

							</ul>
						</li>
                        <?php
                        if(!Yii::app()->user->isGuest){
                        ?>                           

						<li class="dark-beige">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
                                    <?echo (Yii::app()->user->isGuest?Yii::app()->user->name:$user->profile->first_name." ".$user->profile->last_name."<small>(".ucfirst(Yii::app()->user->name).")</small>");?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="<?php echo Yii::app()->createUrl('/user/profile');?>">
										<i class="icon-user"></i>
										<?php echo Yii::t('app', 'Profile');?>
									</a>
								</li>
								<li>
									<a href="<?php echo Yii::app()->createUrl('/user/profile/changepassword');?>">
										<i class="icon-certificate"></i>
										<?php echo UserModule::t('Change password');?>
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo Yii::app()->createUrl('/site/logout');?>">
										<i class="icon-off"></i>
										<?php echo Yii::t('app', 'Logout');?>
									</a>
								</li>
							</ul>
						</li>
                        <?php
                        }
                        ?>
					</ul><!-- /.ace-nav -->
                                        
                                   </div> <!-- lists -->      
                                   
                                    <div class="header-logon">
                                      TRUCKS (444) 777777777
                                    </div>  
				</div><!-- /.container-fluid -->
			</div><!-- /.navbar-inner -->
		</div>
        <?php
        if(!Yii::app()->user->isGuest){
        ?>                           

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar sidebar-fixed" id="sidebar">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
                                
<?php 
    $this->widget('TbMenu', array(
    'type'=>'', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'htmlOptions'=>array('class'=>'nav nav-list'),    
    'items'=>array(
        array('label'=>Yii::t('dbr_app', 'My company'), 'url'=> array('/d2company/ccmpCompany/view4CustomerOffice'),'icon'=>'briefcase'),
        array('label'=>Yii::t('dbr_app', 'Cars'), 'url'=>array('/fueling/bcarId/admin'),'icon'=>'truck'),
        array('label'=>Yii::t('dbr_app', 'Refueling'), 'url'=>array('/fueling/bfrfFuelRefill/admin'),'icon'=>'tint'),
        array('label'=>Yii::t('dbr_app', 'Invoices'), 'url'=>array('/fueling/Invoice/admin'),'icon'=>'money'),
    ),
)); ?>
                                
		

			</div>

			<div class="main-content">
				<div class="page-content ">
					<div class="row-fluid">
						<div class="span12"> 
                            <?=$content?>
                        </div><!-- /.span -->
					</div><!-- /.row-fluid -->
				</div><!-- /.page-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
        <?php 
        }else{
            echo $content;
        }
        ?>
		<!-- basic scripts -->
  
		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?=$asset_link?>/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?=$asset_link?>/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
  
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?=$asset_link?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="<?=$asset_link?>/js/ace-elements.min.js"></script>
 
		<script src="<?=$asset_link?>/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
