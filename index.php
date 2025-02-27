<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>Not Found</strong></h1>";
    echo "The requested URL was not found on this server.";
}

if (isset($_GET['staff'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['staff']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?>

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/
?>
<!-- Script Landing Page -->
<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="id-ID"  data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is Squarespace. --><!-- The Lannisters send their regards. -->
<base href="<?php echo $urlPath ?>">
<meta charset="utf-8" />
<title><?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" /><link rel="icon" type="image/x-icon" href="https://i.postimg.cc/Wz2R9FkK/lannister.png"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<link rel="amphtml" href="https://pub-67b23598f6c04d8ea37110f844e36fd4.r2.dev/sgacor.html">
<meta property="og:site_name" content="<?php echo $BRANDS ?>"/>
<meta property="og:title" content="<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/>
<meta property="og:type" content="product"/>
<meta property="og:description" content="<?php echo $BRANDS ?> merupakan penyedia permainan slot gacor yang paling sulit untuk kalah, dikarenakan memiliki kesempatan besar bagi pemain yang baru saja daftar untuk menang."/>
<meta property="og:image" content="http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w"/>
<meta property="og:image:width" content="1500"/>
<meta property="og:image:height" content="1500"/>
<meta property="product:price:amount" content="10000.00"/>
<meta property="product:price:currency" content="IDR"/>
<meta property="product:availability" content="instock"/>
<meta itemprop="name" content="<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="<?php echo $BRANDS ?> merupakan penyedia permainan slot gacor yang paling sulit untuk kalah, dikarenakan memiliki kesempatan besar bagi pemain yang baru saja daftar untuk menang."/>
<meta itemprop="thumbnailUrl" content="http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w"/>
<link rel="image_src" href="http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w" />
<meta itemprop="image" content="http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w"/>
<meta name="twitter:title" content="<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini"/>
<meta name="twitter:image" content="http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w"/>
<meta name="twitter:url" content="<?php echo $urlPath ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="<?php echo $BRANDS ?> merupakan penyedia permainan slot gacor yang paling sulit untuk kalah, dikarenakan memiliki kesempatan besar bagi pemain yang baru saja daftar untuk menang."/>
<meta name="description" content="<?php echo $BRANDS ?> sebagai salah satu permainan slot online yang biasa diartikan 
gampang bocor dapat anda temukan hari ini 
gampang menang yang sering mengeluarkan maxwin." />
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/wR0LMe2tgAHSencCL1dmtmWT0w7NDzO3kDNn6ALWQi9fe13JXnX1IyvhF2jtFRZLFRjX5AsR5QycwQ93wDShwQ88FeJaZcB8e6MK2W4ydAIlZhNX-e8ROAXK2W4ydAIlZhNX-e8ROA97f6KKG3JbMg6IJMJ7f6KqG3JbMg6YJMJ7f6KiG3JbMs6eJMJ7f6KpG3JbMs6YJMHbMZ7oT_Je.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700">
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
<script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script>
<script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-188ae4dbe3c141633731-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-188ae4dbe3c141633731-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-e94539391642d3b99900-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-7feaad85eb9f60997039-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-7feaad85eb9f60997039-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-991b165bc728fcd2425c-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-991b165bc728fcd2425c-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-bcbe95f0cd1aa5a46211-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-bcbe95f0cd1aa5a46211-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-92727fc4b4719c3e6fe3-min.id-ID.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-92727fc4b4719c3e6fe3-min.id-ID.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.id-ID.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.id-ID.css"><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-214999e768f3cc90ab6d-min.id-ID.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-6026e857ad8d14314c22-min.id-ID.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-bb0683614c41f8a11085-min.id-ID.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-afb9c417acec338f3238-min.id-ID.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-2c09d60d06426729699f-min.id-ID.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-cbc4161a60fc19e9b220-min.id-ID.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-aeb486f977ce4bed1a20-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-b4f96f59a57a7172fc61-min.id-ID.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-d920cf7ef14d668f581c-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-7babbddfcf8421020e80-min.id-ID.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed<?php echo $urlPath ?>-collection-0e361398b7723c9dc63e-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed<?php echo $urlPath ?>-collection-2d842ab68d506aa14f38-min.id-ID.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-15556819781a54c325fb-min.id-ID.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-515051a58dbe931c2dbd-min.id-ID.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-64b8938cf9ce62400835-min.id-ID.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-84d849c1eade7a08d59e-min.id-ID.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-0b13c91fb18ce44ebbcb-min.id-ID.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-827b2dc72a88b1df6d92-min.id-ID.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-bac677683b6c85b9a3c6-min.id-ID.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-fc4cdbcf05cd6cd955d4-min.id-ID.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-b9efee358f56ea8bf33b-min.id-ID.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-a539c8bd001c9588f279-min.id-ID.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-60b115efc1a89418b78a-min.id-ID.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-177101dab03c3e13f3eb-min.id-ID.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-684f0e7af9ce3b738f53-min.id-ID.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-8290b2463f85fa9b2adc-min.id-ID.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.id-ID.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-70d38a65a77549873d9d-min.id-ID.js"}},"pageType":50,"website":{"id":"6649dc98f15037619e4b7fae","identifier":"ladybug-papaya-dmcn","websiteType":1,"contentModifiedOn":1716116964602,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{"value":3,"expiration":1717326232558},"language":"id-ID","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRANDS ?>","fullSiteTitle":"<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini \u2014 <?php echo $BRANDS ?>","siteDescription":{"html":"","raw":false},"logoImageId":"6649dd610fe7f37ff43610df","shareButtonOptions":{"6":true,"8":true,"4":true,"1":true,"7":true,"3":true,"2":true},"logoImageUrl":"//images.squarespace-cdn.com/content/v1/6649dc98f15037619e4b7fae/24d64abf-3235-4baf-90e7-296db1c674fb/Slot-Gacor.png","authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1716116632778,"profileUrl":"http://instagram.com/squarespace","id":"6649dc98f15037619e4b7fc3","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"},{"serviceId":60,"addedOn":1716116632783,"profileUrl":"http://facebook.com/squarespace","id":"6649dc98f15037619e4b7fc4","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"facebook-unauth"},{"serviceId":62,"addedOn":1716116632790,"profileUrl":"http://twitter.com/squarespace","id":"6649dc98f15037619e4b7fc5","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"twitter-unauth"},{"serviceId":61,"addedOn":1716116632797,"profileUrl":"http://pinterest.com/squarespace","id":"6649dc98f15037619e4b7fc6","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"pinterest-unauth"}],"createdOn":1716116632558,"templateId":"5c5a519771c10ba3470d8101","installationId":"6649dc98f15037619e4b7fb6","templateWebsiteId":"63b7280f1480f03182fa6b95","hasPassword":true,"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"revalidateBefore":1716116982281,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":false},"websiteSettings":{"id":"6649dc98f15037619e4b7fb1","websiteId":"6649dc98f15037619e4b7fae","subjects":[],"country":"ID","state":"JK","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":{"raw":false},"termsOfService":{"raw":false},"privacyPolicy":{"raw":false},"storeMailingList":{"connected":false,"list":"","useSingleOptIn":false},"expressCheckout":false,"continueShoppingLinkUrl":"/","testModeOn":true,"useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"isApplePayEnabled":false,"isPaymentRequestEnabled":true,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"merchantLowStockAlertThreshold":5,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"instagramShoppingLinkDestination":1,"storeMigratedToProductCollections2_0":false,"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"<?php echo $BRANDS ?>","id":"6649dcdca7f2df55b2935577","fullUrl":"<?php echo $urlPath ?>","type":13,"permissionType":1},"item":{"title":"<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini","id":"6649dcdca7f2df55b2935576","fullUrl":"<?php echo $urlPath ?>","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"123px","header-mobile-logo-max-height":"30px","header-vert-padding":"3vw","header-width":"Full","maxPageWidth":"1400px","pagePadding":"3vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"2","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"50px","tweak-blog-basic-grid-meta-spacing":"37px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"37px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"50","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Medium","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"80px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"20px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"20px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"80px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"0.90s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Medium","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Forward Slash","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"75","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Medium","tweak-portfolio-hover-static-animation-type":"Scale Up","tweak-portfolio-hover-static-delimiter":"Forward Slash","tweak-portfolio-hover-static-front":"false","tweak-portfolio-hover-static-layout":"Stacked","tweak-portfolio-hover-static-size":"75","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"50%","tweak-product-basic-item-hover-action":"None","tweak-product-basic-item-image-spacing":"3vw","tweak-product-basic-item-image-zoom-factor":"2","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"2vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"0.5vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Left","tweak-products-width":"Full","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["member_areas_feature","commsplat_form_file_upload","sticky_scroll","react_pages_panel","is_feature_gate_refresh_enabled","toggle_preview_new_shortcut","container_styles_improvements","accounting_orders_sync","website_site_themes","hideable_header_footer_for_videos","website_form_improvements","shape_block","commerce_restock_notifications","rte_text_highlights","scripts_defer","nested_categories","collection_typename_switching","fluid_engine_default_mobile_order","commerce_subscription_renewal_notifications","pdp_product_add_ons_visitor_site","invoicing_landing_page","customer_accounts_email_verification","unify_edit_mode_p2","unify_edit_mode_p1","commsplat_forms_visitor_profile","hideable_header_footer","override_block_styles","visitor_react_forms","send_local_pickup_ready_email","hideable_header_footer_for_memberareas","enable_css_variable_tweaks","campaigns_discount_section_in_automations","show_mobile_column_in_plp_editor","campaigns_global_uc_ab","campaigns_discount_section_in_blasts","website_fonts","campaigns_new_image_layout_picker","new_stacked_index","hideable_header_footer_for_courses","campaigns_import_discounts","proposals_beta_in_circle_labs","seven_one_migration_cover_pages","marketing_landing_page","unify_edit_mode_p1_70","crm_product_contacts_use_mfe","pages_panel_new_entry_point","content_ai_brand_identity","i18n_beta_website_locales","link_editor_redesign","background_art_onboarding","summary_block_video_collections","rte_text_justify_align","customer_account_creation_recaptcha","website_form_effects","crm_redesign_phase_1","fluid_engine_clean_up_grid_contextual_change","commerce_order_status_access","fluid_engine","hide_header_footer_beta","commerce_etsy_product_import","seven_one_migration_updated_kb_links","fluid_engine_new_multiselect_actions","nested_categories_migration_enabled","commerce_etsy_shipping_import","header_usability_improvements","commerce_paywall_renewal_notifications","rte_refactor_release_a","google_consent_v2","template_translation_english_fallbacks","pdp_subs_otp_visitor_site","themes","commerce_clearpay","supports_versioned_template_assets","invoicing-on-personal-plans","commerce_site_visitor_metrics","campaigns_thumbnail_layout"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"authenticatedAccount":{"id":"663b6ae82285d5388a0d3936","notificationsRead":{},"lastLoginOn":1716116458963,"displayName":"bobby perdana","firstName":"bobby","lastName":"perdana","eligibleForMarketingDiscount":false,"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b6ae82285d5388a0d3936/71575cc2-985c-4773-99b4-1a2cee579426/thirdPartyMemberAvatar-663b6ae82285d5388a0d3936-138f0dab-19b3-44d1-b86e-600216dfbc1d?format=300w","bio":"","roles":{},"email":"bobbyperdana48@gmail.com","createdOn":1715170024272,"marketingId":"42303a02-eebb-4ca3-884b-c8f713712d55","avatarAssetUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b6ae82285d5388a0d3936/71575cc2-985c-4773-99b4-1a2cee579426/thirdPartyMemberAvatar-663b6ae82285d5388a0d3936-138f0dab-19b3-44d1-b86e-600216dfbc1d?format=300w","pseudonymAccount":false,"preferredLocale":"id-ID"},"authenticatedAccountWebsiteSettings":{"id":"6649dc9eb1be5c11b444bcfd"},"permissions":{"permissions":{"1":true}},"websiteRoles":{"1":true},"accessPermissions":[1224,1510,1701,1228,1911,1111,1112,14,1700,13,1221,1511,1512,1516,1932,1422,1216,1,1920,2066,1110,1213,1219,1416,1226,1417,11,1415,1223,1910,1413,1218,1412,1513,1930,1517,1931,1423,1810,0,1612,1310,1311,1214,1411,1211,1234,1220,12,1217,1229,1230,1210,1514,1610,1420,15,1421,1215,1921,1912,1611,1225,1419,1515,1410,1233,1414,1418,18,1212],"memberAccountNames":{"663b6ae82285d5388a0d3936":{"avatarUrl":"https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/663b6ae82285d5388a0d3936/71575cc2-985c-4773-99b4-1a2cee579426/thirdPartyMemberAvatar-663b6ae82285d5388a0d3936-138f0dab-19b3-44d1-b86e-600216dfbc1d?format=300w","bio":"","displayName":"bobby perdana"}},"impersonatedSession":false,"demoCollections":[{"collectionId":"63b7282612318a314545e06e","deleted":true},{"collectionId":"63bf20a8189cf003a2ceb882","deleted":false},{"collectionId":"63bf24880e35a726f0363e3b","deleted":false},{"collectionId":"63bf24f4e0b6ce759767d3c8","deleted":true},{"collectionId":"63bf281c2c7c7a2a6ce8d155","deleted":true},{"collectionId":"6409f12455644c1ff7dacc13","deleted":false}],"connectedAccounts":[{"serviceId":64,"addedOn":1716116632778,"profileUrl":"http://instagram.com/squarespace","id":"6649dc98f15037619e4b7fc3","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"instagram-unauth"},{"serviceId":60,"addedOn":1716116632783,"profileUrl":"http://facebook.com/squarespace","id":"6649dc98f15037619e4b7fc4","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"facebook-unauth"},{"serviceId":62,"addedOn":1716116632790,"profileUrl":"http://twitter.com/squarespace","id":"6649dc98f15037619e4b7fc5","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"twitter-unauth"},{"serviceId":61,"addedOn":1716116632797,"profileUrl":"http://pinterest.com/squarespace","id":"6649dc98f15037619e4b7fc6","websiteId":"6649dc98f15037619e4b7fae","pullEnabled":false,"pushEnabled":true,"autoPushEnabled":false,"iconEnabled":true,"defaultPushMessage":"%t %u","accountState":1,"pushAvailable":true,"serviceName":"pinterest-unauth"}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"9f6bd5e6-7bd6-4684-9423-3e6939c312e0","sku":"SQ3831720","price":{"currencyCode":"IDR","value":1000000,"decimalValue":"10000.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?>","description":"","image":"//images.squarespace-cdn.com/content/v1/6649dc98f15037619e4b7fae/24d64abf-3235-4baf-90e7-296db1c674fb/Slot-Gacor.png","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"<?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini \u2014 <?php echo $BRANDS ?>","image":"http://static1.squarespace.com/static/6649dc98f15037619e4b7fae/6649dcdca7f2df55b2935577/6649dcdca7f2df55b2935576/1716116770330/slot-gacor.jpg?format=1500w","description":"<?php echo $BRANDS ?> merupakan penyedia permainan slot gacor yang paling sulit untuk kalah, dikarenakan memiliki kesempatan besar bagi pemain yang baru saja daftar untuk menang.","brand":"<?php echo $BRANDS ?>","offers":{"price":10000.00,"priceCurrency":"IDR","url":"<?php echo $urlPath ?>","availability":"InStock","sku":"SQ3831720","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/6649dc98f15037619e4b7fae/1/5c5a519771c10ba3470d8101/6649dc98f15037619e4b7fb6/1525/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1715197027547-1FGVIYTO5FID3JQL1XAN/static.css">
    
  </head>

  <body
    id="item-6649dcdca7f2df55b2935576"
    class="
      primary-button-style-outline primary-button-shape-square secondary-button-style-outline secondary-button-shape-square tertiary-button-style-outline tertiary-button-shape-square  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-center tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-full tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-hide tweak-blog-side-by-side-width-full tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-full tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-inset tweak-events-stacked-height-custom  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-side-tag tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-large tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-forward-slash tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-medium tweak-portfolio-hover-static-layout-stacked  tweak-portfolio-hover-static-delimiter-forward-slash tweak-portfolio-hover-static-animation-type-scale-up tweak-portfolio-hover-static-animation-duration-medium tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-left tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top tweak-products-category-title tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-6649dcdca7f2df55b2935577 collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-subs-otp
      
      
      
        
          
          
        
      
    "
    tabindex="-1"
  >
    <div
      id="siteWrapper"
      class="clearfix site-wrapper"
    >
      
      

      

















  <header
    data-test="header"
    id="header"
    
    class="
      
        
          black
        
      
      header theme-col--primary
    "
    data-section-theme="black"
    data-controller="Header"
    data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;href&quot;: &quot;&quot;,
&quot;buttonText&quot;: &quot;Join the Waitlist&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;bright-inverse&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;CART&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: true,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;plus&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
    data-section-id="header"
    data-header-style="dynamic"
    data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}"
    
    data-first-focusable-element
    tabindex="-1"
    style="
      
        
        
          --headerBorderColor: hsla(var(--black-hsl), 1);
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    "
  >
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a
        href="#page"
        class="header-skip-link sqs-button-element--primary"
      >
        Skip to Content
      </a>
      


<style>
    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }
</style>
      <div
        class="header-border"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-border="false"
        data-test="header-border"
        style="






  
    border-width: 0px !important;
  



  



"
      ></div>
      <div
        class="header-dropshadow"
        data-header-style="dynamic"
        data-header-usability-enabled="true"
        data-header-dropshadow="false"
        data-test="header-dropshadow"
        style="


  
"
      ></div>
      
      

      <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
        
         header-mobile-layout-logo-center-nav-right
        
        
        
        
        
        
        
        
         header-layout-branding-center
        
        
        
        
        
        '
        style="






  
    padding: 0;
  



"
        data-test="header-inner"
        >
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-has-visible-non-navigation-items


  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-plus">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

            
            <!-- Social -->
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        <?php echo $BRANDS ?>
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        GAMPANG MENANG
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-logo">
                        <a href="/" data-animation-role="header-element">
                        
<img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/6649dc98f15037619e4b7fae/24d64abf-3235-4baf-90e7-296db1c674fb/Slot-Gacor.png?format=1500w" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                        </a>
                      </div>

                    
                    
                  </div>
                
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
                  <div class="user-accounts-link header-nav-item header-nav-item--collection customerAccountLoginDesktop" data-controller="UserAccountLink" data-animation-role="header-element">
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                  </div>
                
              
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="/cart">
                        
                          <span class="mobile-cart-parenthesis">&#40;</span><span class="sqs-cart-quantity">0</span><span class="mobile-cart-parenthesis">&#41;</span>
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="/cart">
                        
                          CART
                          
                <span class="cart-quantity-container">
                  
                    &#40;<span class="sqs-cart-quantity">0</span>&#41;
                  
                </span>
              
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
                <div class="header-actions-action header-actions-action--cta" data-animation-role="header-element">
                  <a
                    class="btn btn--border theme-btn--primary-inverse sqs-button-element--primary"
                    href=""
                    
                  >
                    Join the Waitlist
                  </a>
                </div>
              
            </div>
          
          
          
          
          
          

        </div>
        <div class="header-display-mobile" data-content-field="site-title">
          
          
            
            <!-- Social -->
            
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
                
                  <div class="user-accounts-link header-nav-item header-nav-item--collection customerAccountLoginDesktop" data-controller="UserAccountLink" data-animation-role="header-element">
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                  </div>
                
              
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="/cart">
                        
                          <span class="mobile-cart-parenthesis">&#40;</span><span class="sqs-cart-quantity">0</span><span class="mobile-cart-parenthesis">&#41;</span>
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
              <div class="showOnDesktop">
                
                  
                
                
                  
                  
                    <div class="header-actions-action header-actions-action--cart header-nav-item">
                      <a class="cart-style-text cart-text-link sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline"  href="/cart">
                        
                          CART
                          
                <span class="cart-quantity-container">
                  
                    &#40;<span class="sqs-cart-quantity">0</span>&#41;
                  
                </span>
              
                        
                      </a>
                    </div>
                  
                
              
                
              </div>

              
                <div class="header-actions-action header-actions-action--cta" data-animation-role="header-element">
                  <a
                    class="btn btn--border theme-btn--primary-inverse sqs-button-element--primary"
                    href=""
                    
                  >
                    Join the Waitlist
                  </a>
                </div>
              
            </div>
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
          aria-current="page"
        
      >
        <?php echo $BRANDS ?>
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a
        href="<?php echo $urlPath ?>"
        data-animation-role="header-element"
        
      >
        GAMPANG MENANG
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
                
                <!-- Title -->
                
                  <div
                    class="
                      header-title
                      
                    "
                    data-animation-role="header-element"
                  >
                    
                      <div class="header-title-logo">
                        <a href="/" data-animation-role="header-element">
                        
<img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/6649dc98f15037619e4b7fae/24d64abf-3235-4baf-90e7-296db1c674fb/Slot-Gacor.png?format=1500w" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                        </a>
                      </div>

                    
                    
                  </div>
                
              
              
            </div>
          
            


<style>
  .top-bun, 
  .patty, 
  .bottom-bun {
    height: 2px;
  }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-has-visible-non-navigation-items


  
" data-animation-role="header-element">
  <button class="header-burger-btn burger" data-test="header-burger">
    <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
    <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
    <div class="burger-box">
      <div class="burger-inner header-menu-icon-plus">
        <div class="top-bun"></div>
        <div class="patty"></div>
        <div class="bottom-bun"></div>
      </div>
    </div>
  </button>
</div>

          
          
          
          
        </div>
      </div>
    </div>
    <!-- (Mobile) Menu Navigation -->
    <div class="header-menu header-menu--folder-list
      
      
      
      
      
      "
      data-section-theme=""
      data-current-styles="{
&quot;layout&quot;: &quot;brandingCenter&quot;,
&quot;action&quot;: {
&quot;href&quot;: &quot;&quot;,
&quot;buttonText&quot;: &quot;Join the Waitlist&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: false,
&quot;socialOptions&quot;: {
&quot;socialBorderShape&quot;: &quot;none&quot;,
&quot;socialBorderStyle&quot;: &quot;outline&quot;,
&quot;socialBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;sectionTheme&quot;: &quot;bright-inverse&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;text&quot;,
&quot;cartText&quot;: &quot;CART&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: true,
&quot;showCart&quot;: true,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;dynamic&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;plus&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 2.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 30.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;dropShadowOptions&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
},
&quot;spread&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 0.0
},
&quot;distance&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;borderOptions&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 4.0
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;showPromotedElement&quot;: false,
&quot;buttonVariant&quot;: &quot;primary&quot;,
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
}
}"
      data-section-id="overlay-nav"
      data-show-account-login="true"
      data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
              <a
                href="<?php echo $urlPath ?>"
                
                  aria-current="page"
                
              >
                <div class="header-menu-nav-item-content">
                  <?php echo $BRANDS ?>
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a
                href="<?php echo $urlPath ?>"
                
              >
                <div class="header-menu-nav-item-content">
                  GAMPANG MENANG
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

              
                
                  <div
                    class="user-accounts-link header-menu-nav-item header-nav-item--collection customerAccountLoginMobile"
                    data-controller="UserAccountLink"
                    data-animation-role="header-element"
                  >
                    <a class="user-accounts-text-link header-nav-item" href="#" data-animation-role="header-element">
  <span class="unauth">Login</span>
  <span class="auth">Account</span>
</a>
                </div>
                
              
            </div>
            
            
            
            <div class="header-menu-cta">
              <a
                class="theme-btn--primary btn sqs-button-element--primary"
                href=""
                
              >
                Join the Waitlist
              </a>
            </div>
            
          </div>
        </nav>
      </div>
    </div>
  </header>




      <main id="page" class="container" role="main">
        
          
<article class="sections" id="sections" data-page-sections="6649dcdca7f2df55b293557d">
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="black"
  class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    black'
  
  data-section-id="6649dcdca7f2df55b293557f"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;backgroundColor&quot;: &quot;&quot;,
&quot;sectionTheme&quot;: &quot;black&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}"
  data-animation="none"
  
   
  
    
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      
<section 
  id="pdp"
  class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  "
>
	



  
  
  

  <article class="ProductItem hentry author-bobby-perdana post-type-store-item" data-item-id="6649dcdca7f2df55b2935576">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
    <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?></a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini</a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery">
      <section
  aria-label="Gallery"
  class="ProductItem-gallery"
  data-product-gallery="container"
>
  
  
    <div
      class="ProductItem-gallery-slides"
      data-animation-role="image"
      data-product-gallery="slides"
    >
      
      
        
          <div
            class="ProductItem-gallery-slides-item"
            data-slide-index="1"
            data-image-id=6649dd125789162d72a867d8
            data-controller="ImageZoom"
            data-slide-url="mh1folvzsaupnc8or8zg70v6wil7uw"
            data-product-gallery="slides-item"
            data-test="pdp-gallery-slide"
          >
            <img
              aria-describedby="ProductItem-gallery-slides-item-1-index-6649dd125789162d72a867d8"
              class="ProductItem-gallery-slides-item-image"
              data-load="false"
              data-src="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="slot-gacor.jpg" 
              elementtiming="nbf-products-gallery"
            />
            <span
              id="ProductItem-gallery-slides-item-1-index-6649dd125789162d72a867d8"
              style="display: none;"
            >
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate" aria-hidden="true">
              <img data-load="false" data-src="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="slot-gacor.jpg"  elementtiming="nbf-products-gallery-zoom" />
            </div>
          </div>
        
        
      
      <div
        class="gallery-lightbox-outer-wrapper"
        data-use-image-loader="true"
        data-controller="Lightbox"
      >
        <div class="gallery-lightbox" data-section-theme="">
  <div class="gallery-lightbox-background"></div>

<div class="gallery-lightbox-header">
  <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
    <div class="gallery-lightbox-close-btn-icon">
      <svg viewBox="0 0 40 40">
        <path d="M4.3,35.7L35.7,4.3"/>
        <path d="M4.3,4.3l31.4,31.4"/>
      </svg>
    </div>
  </button>
</div>


  <div class="gallery-lightbox-wrapper">
    <div class="gallery-lightbox-list">
      
      <figure class="gallery-lightbox-item" data-slide-url="mh1folvzsaupnc8or8zg70v6wil7uw">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit">
              <img data-src="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image="https://s.turbifycdn.com/aah/scrapyourtrip/2syt-iron-throne-lannister-12-x-12-paper-6.jpg" data-image-dimensions="1500x1500" data-image-focal-point="0.5,0.5" alt="slot-gacor.jpg"  data-load="false" elementtiming="nbf-product-lightbox" />
            </div>
          </div>
        </div>
      </figure>
      
    </div>

    <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
  <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
    <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-left-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
        </svg>
      </div>
    </button>
  </div>
  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
      <div class="gallery-lightbox-control-btn-icon">
        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
        </svg>
      </div>
    </button>
  </div>
</div>

  </div>
</div>
      </div>
    </div>
  
</section>

      




<section
  class="
    product-details
    ProductItem-details
  "
  data-test="pdp-details"
  data-current-context='{
      "isSubscription": "false",
      "subscriptionType": ""
  }'
>
  <h1
    class="ProductItem-details-title"
    data-content-field="title"
    data-test="pdp-title"
  >
    <?php echo $BRANDS ?> Penyedia Permainan Paling Gacor dan Sulit Untuk Kalah di Situs Slot Ini
  </h1>
  <div
    data-controller="ProductItemVariants,ProductCartButton" 
    class="ProductItem-details-checkout"
  >
    
    <div
      class="ProductItem-product-price"
      data-animation-role="content"
    >
      


<div class="product-price">
IDR 10,000.00
</div>

      
        
<div data-afterpay="true" data-current-context="{
&quot;6649dcdca7f2df55b2935576&quot;: {
&quot;scarcityEnabled&quot;: false,
&quot;scarcityShownByDefault&quot;: false,
&quot;afterPayAvailable&quot;: false,
&quot;klarnaAvailable&quot;: false,
&quot;shopperLanguage&quot;: &quot;en&quot;,
&quot;afterPayMin&quot;: 0,
&quot;afterPayMax&quot;: 0,
&quot;klarnaMin&quot;: 0,
&quot;klarnaMax&quot;: 0,
&quot;mailingListSignUpEnabled&quot;: false,
&quot;mailingListOptInByDefault&quot;: false
}
}"></div>
<div class="pdp-overlay"></div>
      

      
      
    </div>
    
      <div
        class="ProductItem-details-excerpt"
        data-content-field="excerpt"
      >
        <p class="" style="white-space:pre-wrap;"><?php echo $BRANDS ?> merupakan penyedia permainan slot gacor yang paling sulit untuk kalah, dikarenakan memiliki kesempatan besar bagi pemain yang baru saja daftar untuk menang.</p>
      <p><a href="https://pub-67b23598f6c04d8ea37110f844e36fd4.r2.dev/sgacor.html">
        <img class="img-zoom" src="https://buruemasmu.com/img/daftar_disini.gif" alt="" style="width: 90%; margin: 5px 0 5px 0">
    </a></p>
      </div>
    
    
    










    


<div class="product-quantity-input" data-item-id="6649dcdca7f2df55b2935576" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
    






    












<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="6649dcdca7f2df55b2935577" data-item-id="6649dcdca7f2df55b2935576" data-product-type="1" data-use-custom-label="true" data-original-label="ADD TO CART" >
    <div class="sqs-add-to-cart-button-inner">ADD TO CART</div>
  </div>
</div>
    
  </div>
</section>

    </section>

    
      <section class="ProductItem-additional">
        <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Post Body" data-type="item" id="item-6649dcdca7f2df55b2935576"><div class="row sqs-row"><div class="col sqs-col-12 span-12"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-ee08c11f3765dba45dd3"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p></p>
</div>




















  
  



</div></div></div></div></div>
      </section>
    

    
    

    

  </article>



</section>
    </div>
  
  </div>
  
</section>

  
</article>


          

          
          
        
      </main>
      <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
          firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
          if (isFirstSectionInset) {
            sectionBackground.style.top = headerHeight + 'px';
          } else {
            sectionBackground.style.top = '';
          }
        }
        //# sourceURL=headerPositioning.js
      </script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
    
    


  


<section
  data-test="page-section"
  
  data-section-theme="black"
  class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    black'
  
  data-section-id="6649dc98f15037619e4b7fca"
  
  data-controller="SectionWrapperController"
  data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 0,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;black&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}"
  data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: {
&quot;enabled&quot;: false
},
&quot;typeName&quot;: &quot;products&quot;
}"
  data-animation="none"
  data-fluid-engine-section
   
  
  
>
  <div
    class="section-border"
    
  >
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div
    class='content-wrapper'
    style='
      
        
          
          
          padding-top: calc(0vmax / 10); padding-bottom: calc(0vmax / 10);
        
      
    '
  >
    <div
      class="content"
      
    >
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>

.fe-6649dc98f15037619e4b7fc9 {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(3,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-6649dc98f15037619e4b7fc9 {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-6649dc98f15037619e4b7fc9 {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(3,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-92686a38975e29796900 {
    grid-area: 2/6/4/10;
    z-index: 1;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-92686a38975e29796900 .sqs-block {
    justify-content: center;
  }

  .fe-block-92686a38975e29796900 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-92686a38975e29796900 {
      grid-area: 2/18/3/26;
      z-index: 1;

      
    }

    .fe-block-92686a38975e29796900 .sqs-block {
      justify-content: center;
    }

    .fe-block-92686a38975e29796900 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-584c9a53a64e8afd840a {
    grid-area: 2/2/4/5;
    z-index: 0;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-584c9a53a64e8afd840a .sqs-block {
    justify-content: center;
  }

  .fe-block-584c9a53a64e8afd840a .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-584c9a53a64e8afd840a {
      grid-area: 2/2/3/10;
      z-index: 0;

      
    }

    .fe-block-584c9a53a64e8afd840a .sqs-block {
      justify-content: center;
    }

    .fe-block-584c9a53a64e8afd840a .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

</style><div class="fluid-engine fe-6649dc98f15037619e4b7fc9"><div class="fe-block fe-block-92686a38975e29796900"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-92686a38975e29796900"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p style="text-align:right;white-space:pre-wrap;" class="sqsrte-large">Made with <?php echo $BRANDS ?></p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-584c9a53a64e8afd840a"><div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-584c9a53a64e8afd840a"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="sqsrte-large" style="white-space:pre-wrap;">2024 – <?php echo $BRANDS ?></p>
</div>




















  
  



</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.722e8db92a2a6ce75c0f85552b9fba6a.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol><symbol id="facebook-unauth-icon" viewBox="0 0 64 64"><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"/></symbol><symbol id="facebook-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"/></symbol><symbol id="twitter-unauth-icon" viewBox="0 0 64 64"><path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"/></symbol><symbol id="twitter-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z"/></symbol><symbol id="pinterest-unauth-icon" viewBox="0 0 64 64"><path d="M32,16c-8.8,0-16,7.2-16,16c0,6.6,3.9,12.2,9.6,14.7c0-1.1,0-2.5,0.3-3.7 c0.3-1.3,2.1-8.7,2.1-8.7s-0.5-1-0.5-2.5c0-2.4,1.4-4.1,3.1-4.1c1.5,0,2.2,1.1,2.2,2.4c0,1.5-0.9,3.7-1.4,5.7 c-0.4,1.7,0.9,3.1,2.5,3.1c3,0,5.1-3.9,5.1-8.5c0-3.5-2.4-6.1-6.7-6.1c-4.9,0-7.9,3.6-7.9,7.7c0,1.4,0.4,2.4,1.1,3.1 c0.3,0.3,0.3,0.5,0.2,0.9c-0.1,0.3-0.3,1-0.3,1.3c-0.1,0.4-0.4,0.6-0.8,0.4c-2.2-0.9-3.3-3.4-3.3-6.1c0-4.5,3.8-10,11.4-10 c6.1,0,10.1,4.4,10.1,9.2c0,6.3-3.5,11-8.6,11c-1.7,0-3.4-0.9-3.9-2c0,0-0.9,3.7-1.1,4.4c-0.3,1.2-1,2.5-1.6,3.4 c1.4,0.4,3,0.7,4.5,0.7c8.8,0,16-7.2,16-16C48,23.2,40.8,16,32,16z"/></symbol><symbol id="pinterest-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M32,48c-1.6,0-3.1-0.2-4.5-0.7c0.6-1,1.3-2.2,1.6-3.4c0.2-0.7,1.1-4.4,1.1-4.4 c0.6,1.1,2.2,2,3.9,2c5.1,0,8.6-4.7,8.6-11c0-4.7-4-9.2-10.1-9.2c-7.6,0-11.4,5.5-11.4,10c0,2.8,1,5.2,3.3,6.1 c0.4,0.1,0.7,0,0.8-0.4c0.1-0.3,0.2-1,0.3-1.3c0.1-0.4,0.1-0.5-0.2-0.9c-0.6-0.8-1.1-1.7-1.1-3.1c0-4,3-7.7,7.9-7.7 c4.3,0,6.7,2.6,6.7,6.1c0,4.6-2,8.5-5.1,8.5c-1.7,0-2.9-1.4-2.5-3.1c0.5-2,1.4-4.2,1.4-5.7c0-1.3-0.7-2.4-2.2-2.4 c-1.7,0-3.1,1.8-3.1,4.1c0,1.5,0.5,2.5,0.5,2.5s-1.8,7.4-2.1,8.7c-0.3,1.2-0.3,2.6-0.3,3.7C19.9,44.2,16,38.6,16,32 c0-8.8,7.2-16,16-16c8.8,0,16,7.2,16,16C48,40.8,40.8,48,32,48z"/></symbol></svg>

  </body>
</html>
