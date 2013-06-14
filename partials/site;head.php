<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?=$this->js_include(array(
        'jquery',
        'core_jquery',
        'frontend_core',
        '@/assets/javascript/app.js',
    )) ?>
<?=$this->css_include(array(
        '@/assets/css/ui.css',
        '@/assets/css/app.css',
        '@/assets/css/templates.css',
        '@/assets/css/pages.css',
    )) ?>
<?=$this->display_head()?>