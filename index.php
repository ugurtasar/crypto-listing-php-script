<?php
/***************************************************************************
* https://github.com/ugurtasar/
***************************************************************************/
include('inc/config.php');
include('template-parts/header.php');
?>
<main class="flex-shrink-0">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="tradingview-widget-container p-0 overflow-hidden" id="mainList">
                      <div class="tradingview-widget-container__widget"></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                      {
                      "title": "Kripto",
                      "width": <?php echo setSize(1200,'"100%"'); ?>,
                      "height": <?php echo $config['coinlist_limit']*60; ?>,
                      "locale": "tr",
                      "showSymbolLogo": true,
                      "isTransparent": true,
                      "symbolsGroups": [
                        {
                          "name": "Kripto",
                          "symbols": [
                        <?php
                        $coinsArr = array_slice($coinsArr, 0, $config['coinlist_limit']);
                        $end = end($coinsArr);
                        foreach($coinsArr as $coinsArrKey => $coinsArrVal){
                        ?>
                        {
                          "name": "<?php echo $config['market']; ?>:<?php echo $coinsArrKey.$config['exchange']; ?>",
                          "displayName": "<?php echo $coinsArrVal.' ('.$coinsArrKey.')'; ?>"
                        }<?php if($end != $coinsArrVal){echo ',';} ?>
                        <?php
                        }
                        ?>
                          ]
                        }
                      ],
                      "colorTheme": "light",
                      "locale": "tr",
                      "largeChartUrl": "<?php echo $config['site_url']; ?>"
                    }
                      </script>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include('template-parts/footer.php');
?>
