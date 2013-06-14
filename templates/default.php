<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title><?=h($this->page->title_name) ?> - <?=c('site_name')?></title>
    <?=$this->display_partial('site:head')?>
</head>
<body>

    <div class="container" id="header">
        <div class="row">
            <div class="twelve columns">
                <?=$this->display_partial('site:header')?>
            </div>
        </div>
    </div>
    <div class="container" id="mainnav">
        <div class="row">
            <div class="twelve columns">
                <?=$this->display_partial('site:main_menu')?>
            </div>
        </div>
    </div>
    <div class="container" id="content">
        <div class="row">
            <div class="twelve columns">
                <?=$this->display_page()?>
            </div>
        </div>
    </div>
    <div class="container" id="footer">
        <div class="row">       
            <div class="twelve columns">
                <?=$this->display_partial('site:footer')?>
            </div>
        </div>
    </div>

</body>
</html>