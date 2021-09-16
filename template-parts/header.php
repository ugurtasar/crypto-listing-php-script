<?php
/***************************************************************************
*
*   Kriptolist Script v1
*   -------------------------------------
*   Bu script platformumuzda ücretsiz olarak sunulmuştur.
*   -------------------------------------
*   Copyright 2021 - www.scriptler.org
*
***************************************************************************/
if(isset($_GET['tvwidgetsymbol'])){
	$coinName = str_replace('USDT', '', explode(':', $_GET['tvwidgetsymbol'])[1]);
	$ticker_redirect = $config['site_url'].$coinName;
	header("Location: $ticker_redirect");
}
?>
<!doctype html>
<html lang="tr" class="h-100">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if(isset($title)) { ?>
	<title><?php echo $title; ?> - <?php echo $config['site_title']; ?></title>
	<?php }else{ ?>
	<title><?php echo $config['site_title']; ?> - <?php echo $config['site_description']; ?></title>
	<?php } ?>
	<?php if(isset($description)) { ?>
	<meta name="description" content="<?php echo $description; ?>">
	<?php }else{ ?>
	<meta name="description" content="<?php echo $config['site_description']; ?> - <?php echo $config['site_title']; ?>">
	<?php } ?>
	<meta name="keywords" content="<?php echo $config['site_keywords']; ?>">
	<meta charset="utf-8">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/zephyr/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
	<style>
		input, select, textarea, ::placeholder{
			color: var(--bs-primary) !important;
		}
	</style>
</head>

<body class="d-flex flex-column h-100">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo $config['site_url']; ?>">
					<i class="bi bi-graph-up me-1"></i> 
					<?php echo $config['site_title']; ?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headMenu" aria-controls="headMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="headMenu">
					<ul class="navbar-nav me-auto">
						<?php foreach($config['header_links'] as $headerLinksKey => $headerLinksValue){ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $headerLinksValue; ?>"><?php echo $headerLinksKey; ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div class="container-fluid">
			<div class="row">
					<div class="tradingview-widget-container p-0">
					  <div class="tradingview-widget-container__widget"></div>
					  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
					  {
					  "symbols": [
							<?php 
							$headArr = array_slice($coinsArr, 0, 12);
							$headArrEnd = end($headArr);
							foreach($headArr as $headArrKey => $headArrVal){
							?>
							{
							  "proName": "<?php echo $config['market']; ?>:<?php echo $headArrKey.$config['exchange']; ?>",
							  "title": "<?php echo $headArrKey; ?>/<?php echo $config['exchange']; ?>"
							}<?php if($headArrEnd != $headArrVal){echo ',';} ?>
							<?php
							}
							?>
						  ],
					  "showSymbolLogo": true,
					  "isTransparent": true,
					  "displayMode": "compact",
					  "largeChartUrl": "<?php echo $config['site_url']; ?>",
					  "colorTheme": "light",
					  "locale": "tr"
					}
					  </script>
					</div>
			</div>
		</div>
	</section>