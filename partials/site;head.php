<meta name="description" content="<?= h($this->page->description) ?>" />
<meta name="keywords" content="<?= h($this->page->keywords) ?>" />
<meta name="author" content="PHPRoad" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?=$this->css_include(array(
    // Framework
    '@/assets/stylesheets/css/shared/framework.css',

    // Extras
    '@/assets/extras/font-awesome/css/font-awesome.css',

    // Theme
    '@/assets/stylesheets/css/layouts/application_layout/templates/default_template.css',

    // Shared / Controls
    // '@/assets/stylesheets/css/layouts/application_layout/shared/box.css',
), array(
    'skip_cache' => true,
    'src_mode' => true,
)) ?>
<?=$this->js_include(array(
    // Framework
        // Core
        'jquery',
        'jquery-helper',
        'phpr-core',
        // App
        '@/assets/scripts/js/shared/framework.js',

    // Extras
    //'@/assets/extras/carousel/js/jquery.jcarousel.js',

    // Theme
    '@/assets/scripts/js/layouts/application_layout.js',

), array(
    'skip_cache' => true,
    'src_mode' => true,
)) ?>
<?=$this->display_head()?>
