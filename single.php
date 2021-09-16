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
include('inc/config.php');
$slug = $_GET['slug'];
$title = $coinsArr[$slug].' ('.$slug.') Detaylı Piyasa Bilgisi';
$description = $coinsArr[$slug].' ('.$slug.') piyasa bilgisine anında ulaşın. '.$coinsArr[$slug].' şu anda kaç '.$config['exchange'].' ?';
include('template-parts/header.php');
?>
<main class="flex-shrink-0">
	<section class="py-0 py-md-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="tradingview-widget-container p-0">
					  <div id="tradingview_f5d7d"></div>
					  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
					  <script type="text/javascript">
					  new TradingView.MediumWidget(
					  {
					  "symbols": [
						  [
							"BRC",
							"<?php echo $config['market']; ?>:<?php echo $slug.$config['exchange']; ?>|12M"
						  ]
					  ],
					  "chartOnly": false,
					  "width": "100%",
					  "height": 440,
					  "locale": "tr",
					  "colorTheme": "light",
					  "gridLineColor": "rgba(240, 243, 250, 0)",
					  "trendLineColor": "#2962FF",
					  "fontColor": "#787B86",
					  "underLineColor": "rgba(41, 98, 255, 0.3)",
					  "underLineBottomColor": "rgba(41, 98, 255, 0)",
					  "isTransparent": true,
					  "autosize": true,
					  "showFloatingTooltip": true,
					  "container_id": "tradingview_f5d7d"
					}
					  );
					  </script>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="tradingview-widget-container">
						  <div class="tradingview-widget-container__widget"></div>
						  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
						  {
						  "interval": "1m",
						  "width": "100%",
						  "isTransparent": true,
						  "height": 440,
						  "symbol": "<?php echo $config['market']; ?>:<?php echo $slug.$config['exchange']; ?>",
						  "showIntervalTabs": true,
						  "locale": "tr",
						  "colorTheme": "light",
						  "largeChartUrl": "<?php echo $config['site_url']; ?>"
						}
						  </script>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="my-3">
		<div class="container-fluid">
			<div class="row">
				<h1 class="mb-3 h4"><?php echo $title; ?></h1>
				<div class="tradingview-widget-container">
				  <div id="tradingview_f42a5"></div>
				  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
				  <script type="text/javascript">
				  new TradingView.widget(
				  {
				  "width": "100%",
				  "height": 610,
				  "symbol": "<?php echo $config['market']; ?>:<?php echo $slug.$config['exchange']; ?>",
				  "timezone": "Etc/UTC",
				  "theme": "light",
				  "style": "1",
				  "locale": "tr",
				  "toolbar_bg": "#f1f3f6",
				  "enable_publishing": false,
				  "range": "YTD",
				  "hide_side_toolbar": false,
				  "allow_symbol_change": true,
				  "details": true,
				  "calendar": true,
				  "isTransparent": true,
				  "container_id": "tradingview_f42a5"
				}
				  );
				  </script>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
include('template-parts/footer.php');
?>