<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
  if ($this->is('single')) {
    if ($this->options->toc) {
      $this->content = createCatalog($this->content);
    }
    $this->content = preg_replace('/<img(.*?)src=[\'"]([^\'"]+)[\'"](.*?)>/i',"<noscript>\$0</noscript><img\$1data-src=\"\$2\" \$3>",$this->content);
  }
  ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans" class="no-js">
<head>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <!-- 关闭百度转码 -->
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <!-- end #optimize -->
    <meta charset="<?php $this->options->charset(); ?>">
    <!-- IE 8浏览器的页面渲染方式 & 默认使用极速内核：针对国内浏览器产商 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <!–-[if IE]>
	<script src="https://cdn.bootcdn.net/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <!--chrome Android 地址栏颜色-->
    <meta name="theme-color" content="#ffffff"/>
    <!-- 自适应 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="//cdn.bootcdn.net" />
    <link rel="preconnect" href="//gstatic.loli.net" />
    <link rel="preconnect" href="//fonts.loli.net" />
    <link rel="preconnect" href="//cravatar.cn/avatar/" />
    <link rel="preconnect" href="//6262-bb-f5c0f-1252354806.tcb.qcloud.la" />
	<title><?php $this->archiveTitle(array(
			'category'  =>  _t('%s 下的文章'),
			'search'    =>  _t('包含关键字 %s 的文章'),
			'tag'       =>  _t('标签 %s 下的文章'),
			'author'    =>  _t('%s 的文章')
		), '', ' - '); ?><?php
		$this->options->title();
		if ($this->is('index') && $this->options->subtitle != '') echo " - {$this->options->subtitle}";
	?></title>

	<!-- Favicon -->
	<link href="<?php
		if ($this->options->logoUrl == '') {
			$this->options->themeUrl("images/logo.png");
		} else {
			$this->options->logoUrl();
		}
	?>" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.loli.net/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!-- FontAwesome -->
	<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Main CSS -->
	<link type="text/css" href="<?php $this->options->themeUrl("assets/css/main.min.css"); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

	<!-- KaTeX CSS -->
	<?php if ($this->options->katex): ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcdn.net/ajax/libs/KaTeX/0.15.3/katex.min.css">
	<?php endif; ?>

	<!-- PrismJS CSS -->
	<?php if ($this->options->prismjs): ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcdn.net/ajax/libs/prism-themes/1.9.0/prism-darcula.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcdn.net/ajax/libs/prism/1.28.0/plugins/toolbar/prism-toolbar.css" />
		<?php if ($this->options->prismLine): ?>
		<link rel="stylesheet" type="text/css" href="https://cdn.bootcdn.net/ajax/libs/prism/1.28.0/plugins/line-numbers/prism-line-numbers.css" />
		<?php endif; ?>
	<?php endif; ?>

	<!-- Viewer CSS -->
	<?php if ($this->options->viewerEnable): ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcdn.net/ajax/libs/imageviewer/1.1.0/viewer.min.css" />
	<?php endif; ?>

	<!-- Jquery -->
	<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Custom CSS -->
	<?php if ($this->options->customCss): ?>
	<style type="text/css"><?php $this->options->customCss(); ?></style>
	<?php endif; ?>

	<!-- Viewer.js Plugin -->
	<?php if ($this->options->viewerEnable): ?>
	<script src="https://cdn.bootcdn.net/ajax/libs/imageviewer/1.1.0/viewer.min.js"></script>
	<?php endif; ?>

	<!-- MD5 Js -->
	<script src="<?php $this->options->themeUrl("assets/js/md5.min.js"); ?>">" ></script>
	<!-- LazyLoad Js -->
	<script src="<?php $this->options->themeUrl("assets/js/jquery.lazy.min.js"); ?>">" ></script>
	<script src="<?php $this->options->themeUrl("assets/js/jquery.lazy.plugins.min.js"); ?>">" ></script>
	<!-- Typecho header -->
	<?php if($this->options->Pjax=="1"): ?>
		<?php $this->header('commentReply=&antiSpam='); ?>
	<?php else: ?>
		<?php $this->header('commentReply='); ?>
	<?php endif; ?>
</head>
<body>
<!--[if IE]>
<script>
alert("你正在使用 过时 的浏览器，请 升级浏览器 以获得更好的体验！");
window.location.href="https://support.dmeng.net/upgrade-your-browser.html?referrer="+encodeURIComponent(window.location.href);
</script>
<![endif]-->
	<header class="header-global">
		<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
			<div class="container">
				<a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-default">
					<div class="navbar-collapse-header">
						<div class="row">
							<div class="col-6 collapse-brand">
								<a href="<?php $this->options->siteUrl(); ?>"><h5><?php $this->options->title() ?></h5></a>
							</div>
							<div class="col-6 collapse-close">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
									<span></span>
									<span></span>
								</button>
							</div>
						</div>
					</div>
					<ul class="navbar-nav ml-lg-auto align-items-lg-center">
						<li class="nav-item">
							<a class="nav-link" href="<?php $this->options->siteUrl(); ?>">首页</a>
						</li>
						<li class="nav-item">
						
						<li class="nav-item dropdown">
              					<a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false">分类</a>
              					<div class="dropdown-menu">
          					<?php
							$this->widget('Widget_Metas_Category_List')->to($pages);
							while($pages->next()):
						?>
						<a class="dropdown-item" href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>"><?php $pages->name(); ?></a>
                  				<?php endwhile; ?>
						
						<?php
							$this->widget('Widget_Contents_Page_List')->to($pages);
							while($pages->next()):
						?>
							<li class="nav-item">
								<a class="nav-link" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
							</li>
						<?php endwhile; ?>
						<?php
							$links = explode("$@!$", $this->options->headerLinks);
							foreach ($links as $key => $value) {
								$link = explode("$$", $value)
						?>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="<?php echo $link[1]; ?>" title="<?php echo $link[0]; ?>"><?php echo $link[0]; ?></a>
							</li>
						<?php }; ?>
						<li class="navbar_search_container">
							<form method="post" action="" id="search">
								<div class="input-group input-group-alternative">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-search"></i></span>
									</div>
									<input type="text" name="s" class="form-control" placeholder="搜索一下疑惑吧！" type="text" autocomplete="off">
								</div>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<?php if($this->options->Pjax) _e('<div id="pjax-container">'); ?>