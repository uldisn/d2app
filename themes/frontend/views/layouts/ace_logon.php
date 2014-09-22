    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    $cs = Yii::app()->getClientScript();
    $cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');

    $ace_path = Yii::app()->params['ace_assets'];
    $ace_path_add = realpath(Yii::getPathOfAlias('vendor.uldisn.ace') . '/assets');

    $asset_link = Yii::app()->assetManager->publish(
            $ace_path, false, // hash by name
            -1, // level
            false); // forceCopy
    $asset_link_ace_add = Yii::app()->assetManager->publish(
            $ace_path_add, false, // hash by name
            -1, // level
            false); // forceCopy

    $cs->registerCssFile($asset_link . '/css/bootstrap.min.css');
    $cs->registerCssFile($asset_link . '/css/bootstrap-responsive.min.css');
    $cs->registerCssFile($asset_link . '/css/font-awesome.min.css');

    // CSS files
    $cs->registerCssFile($asset_link . '/css/ace-fonts.css');
    $cs->registerCssFile($asset_link . '/css/jquery-ui-1.10.3.full.min.css');
    $cs->registerCssFile($asset_link . '/css/ace.min.css');
    $cs->registerCssFile($asset_link . '/css/ace-responsive.min.css');
    $cs->registerCssFile($asset_link . '/css/ace-skins.min.css');
    $cs->registerCssFile($asset_link_ace_add . '/css/d2-ace.css');
    //$cs->registerCssFile($app_asset_path . '/parkoil-ace.css');    
    //$cs->registerCssFile($app_asset_path . '/parkoil.css');    
    
    // remove default jquery ui
    Yii::app()->clientScript->scriptMap['jquery-ui.min.js'] = false;
    // add ace version
    $cs->registerScriptFile($asset_link_ace_add . '/js/jquery-ui-1.10.4.custom.min.js');
    
    $cs->registerScriptFile($asset_link . '/js/ace-extra.min.js');
    $cs->registerScriptFile($asset_link . '/js/ace-elements.min.js',CClientScript::POS_END);
    $cs->registerScriptFile($asset_link . '/js/ace.min.js',CClientScript::POS_END);
    
    $user = User::model()->findByPk(Yii::app()->user->id);
    ?>
</head>
 
    <body>    
		<div class="navbar  navbar-fixed-top" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

                        <?php
$this->widget(
    'TbNavbar', array(
    'collapse' => true,
           // 'brand' => '<img alt="" src="/assets/7d883f12/img/ParkOilLogoTransparent.png">',
            //'brandOptions' => array('class' => 'parkoil_logo'),
    'fixed' => false,
            //'htmlOptions' => array('class' => 'pull-left'),
            'htmlOptions' => array('class' => 'navbar'),
    'fluid' => true,    
    'items' => array(
        array(
            //'class' => 'TbMenu',
            'class' => 'vendor.uldisn.ace.widgets.TbAceHrMenu',
            'htmlOptions' => array('class' => 'ace-nav pull-right'),
            'items' => array(
                array(
                    'label' => Yii::app()->language,
                    'icon' => 'globe white',
                    'url' => '#',
                    //'itemCssClass' => 'light-blue',
    'items'=>array(
                        array(
                            'label' => Yii::t('app', 'Languages')
                            ),
                        array(
                            'label' => 'English',
                            'url' => array_merge(array(''), $_GET, array('lang' => 'en'))
                        ),
                        array(
                            'label' => 'Latvieðu',
                            'url' => array_merge(array(''), $_GET, array('lang' => 'lv'))
                        ),
                    ),
    ),
            ),
        ),
    )
        )
);        
        ?>        
						</div>
        <div class="main-content no-margin">


        <?php 
            echo $content;
        ?>
        </div>
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
