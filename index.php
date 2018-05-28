<?php
/* 取得用戶 IP */
if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
    $ipAddress = $_SERVER["HTTP_CLIENT_IP"];
} else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $ipAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else {
    $ipAddress = $_SERVER["REMOTE_ADDR"];
}

/* 引入 functions */
include_once("functions.php");

/* IP 詳細資料查詢 */
$ipInfo = @unserialize(file_get_contents_curl('http://ip-api.com/php/'.$ipAddress));
?>
<!--
    快速查詢 IP
    https://myip.reh.tw/

    Developed by 張文相 (Zhang Wenxiang)
    https://www.facebook.com/GoneToneDY
-->
<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>快速查詢 IP - myip.reh.tw</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-16x16.png" sizes="16x16">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-32x32.png" sizes="32x32">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-64x64.png" sizes="64x64">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-128x128.png" sizes="128x128">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-192x192.png" sizes="192x192">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-256x256.png" sizes="256x256">
        <link rel="icon" href="https://myip.reh.tw/assets/images/icons/icon-512x512.png" sizes="512x512">
        <link rel="apple-touch-icon-precomposed" href="https://myip.reh.tw/assets/images/og-images/logo-256x256.png">
        <meta name="author" content="張文相 Zhang Wenxiang">
        <meta property="article:author" content="https://www.facebook.com/GoneToneDY/">
        <meta property="fb:app_id" content="344099459299612">
        <meta property="og:site_name" content="快速查詢 IP - myip.reh.tw">
        <meta property="og:locale" content="zh_tw">
        <meta name="twitter:site" content="@TPGoneTone">
        <meta name="twitter:creator" content="@TPGoneTone">
        <meta name="description" content="提供您快速方便查詢自己網路 IP 的服務。">
        <meta property="description" content="提供您快速方便查詢自己網路 IP 的服務。">
        <link rel="image_src" type="image/jpeg" href="https://myip.reh.tw/assets/images/og-images/logo-256x256.png">
        <meta name="msapplication-TileImage" content="https://myip.reh.tw/assets/images/og-images/logo-256x256.png">
        <meta property="og:type" content="website">
        <meta property="og:title" content="快速查詢 IP - myip.reh.tw">
        <meta property="og:description" content="提供您快速方便查詢自己網路 IP 的服務。">
        <meta property="og:url" content="https://myip.reh.tw">
        <meta property="og:image" content="https://myip.reh.tw/assets/images/og-images/logo-256x256.png">
        <meta property="og:image:width" content="256">
        <meta property="og:image:height" content="256">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="快速查詢 IP - myip.reh.tw">
        <meta name="twitter:description" content="提供您快速方便查詢自己網路 IP 的服務。">
        <meta name="twitter:image" content="https://myip.reh.tw/assets/images/og-images/logo-256x256.png">
        <link href="//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet" type="text/css">
        <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/grayscale.min.css" rel="stylesheet" type="text/css">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3794226192931198",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">快速查詢 IP - myip.reh.tw</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">選單 <i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#yourip">我的 IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">關於</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="brand-heading">快速查詢 IP</h1>
                            <p class="intro-text">本站提供您快速方便查詢自己網路 IP 的服務
                                <br><a class="copy" id="copyUrl" href="javascript:;" data-clipboard-text="快速查詢 IP - https://myip.reh.tw/">myip.reh.tw</a></p>
                            <a href="#yourip" class="btn btn-circle js-scroll-trigger">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="yourip" class="content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>您的 IP 為</h2>
                        <div class="input-group w-100">
                            <input class="form-control" type="text" value="<?php echo $ipAddress; ?>" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-lg copy" id="copyBtn" data-clipboard-text="我的 IP 是「<?php echo $ipAddress; ?>」 | 快速查詢 IP - myip.reh.tw">複製 IP</button>
                            </div>
                        </div>
                        <p id="copyMsg"></p>
                        <p></p>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <?php if ($ipInfo && $ipInfo["status"] == "success") : ?>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width="50%">國家</td>
                                    <?php if (isset($ipInfo["country"])) : ?>
                                    <td width="50%"><?php echo $ipInfo["country"]; ?></td>
                                    <?php else : ?>
                                    <td width="50%">無法取得資料</td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td width="50%">城市</td>
                                    <?php if (isset($ipInfo["city"])) : ?>
                                    <td width="50%"><?php echo $ipInfo["city"]; ?></td>
                                    <?php else : ?>
                                    <td width="50%">無法取得資料</td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td width="50%">時區</td>
                                    <?php if (isset($ipInfo["timezone"])) : ?>
                                    <td width="50%"><?php echo $ipInfo["timezone"]; ?></td>
                                    <?php else : ?>
                                    <td width="50%">無法取得資料</td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td width="50%">ISP 業者</td>
                                    <?php if (isset($ipInfo["isp"])) : ?>
                                    <td width="50%"><?php echo $ipInfo["isp"]; ?></td>
                                    <?php else : ?>
                                    <td width="50%">無法取得資料</td>
                                    <?php endif; ?>
                                </tr>
                            </tbody>
                        </table>
                        <?php else : ?>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width="50%">國家</td>
                                    <td width="50%">無法取得資料</td>
                                </tr>
                                <tr>
                                    <td width="50%">城市</td>
                                    <td width="50%">無法取得資料</td>
                                </tr>
                                <tr>
                                    <td width="50%">時區</td>
                                    <td width="50%">無法取得資料</td>
                                </tr>
                                <tr>
                                    <td width="50%">ISP 業者</td>
                                    <td width="50%">無法取得資料</td>
                                </tr>
                            </tbody>
                        </table>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3794226192931198" data-ad-slot="4312571378" data-ad-format="auto"></ins>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="info-section content-section text-center">
            <div class="container">
                <div class="col-lg-8 mx-auto">
                    <h2>關於</h2>
                    <p>本站開發目的是為了讓使用者快速方便查詢自己的網路 IP，像是在自己的主機架設網頁伺服器或遊戲伺服器等等，要公開讓其他人連線進來都需要知道自己的網路 IP，就像你家的住址一樣。</p>
                    <p>本站程式碼也有開源至 <a href="#" target="_blank">GitHub</a>，歡迎一起開發維護專案！</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/GoneToneDY" target="_blank" class="btn btn-default btn-lg">
                                <i class="fa fa-facebook fa-fw"></i>
                                <span class="network-name">Facebook</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/TPGoneTone" target="_blank" class="btn btn-default btn-lg">
                                <i class="fa fa-twitter fa-fw"></i>
                                <span class="network-name">Twitter</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/GoneTone/myip.reh.tw-source" target="_blank" class="btn btn-default btn-lg">
                                <i class="fa fa-github fa-fw"></i>
                                <span class="network-name">Github</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; <?php $set = '2018'; $datetime = date ("Y" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))); if( $datetime == $set) {echo $datetime;}else{echo $set.'-'.$datetime;} ?> <a href="/">快速查詢 IP - myip.reh.tw</a>. All rights reserved.
                    <br>Developed by <a href="https://www.facebook.com/GoneToneDY" target="_blank">張文相 (Zhang Wenxiang)</a>.</p>
            </div>
        </footer>
        <!-- 複製成功訊息 -->
        <div class="modal fade" id="copySuccessMsg" role="dialog" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><font color="#000000"><i class="fa fa-check"></i> 複製成功</font></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >×</span></button>
                    </div>
                    <div class="modal-body">
                        <p><font color="#000000">內容已經複製至您的剪貼簿！</font></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 複製失敗訊息 -->
        <div class="modal fade" id="copyErrorMsg" role="dialog" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><font color="#000000"><i class="fa fa-times"></i> 複製失敗</font></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >×</span></button>
                    </div>
                    <div class="modal-body">
                        <p><font color="#000000">內容複製失敗，請手動複製內容。</font></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendors/jquery/jquery.min.js"></script>
        <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/js/clipboard.min.js"></script>
        <script src="assets/js/grayscale.min.js"></script>
        <script type="text/javascript">
            /* 複製內容功能設定 */
            var copyUrl = new Clipboard('#copyUrl');
            //複製成功執行
            copyUrl.on('success', function(e) {
                e.clearSelection();
                $("#copySuccessMsg").modal(); //複製成功彈出訊息模板
            });
            //複製失敗執行
            copyUrl.on('error', function(e) {
                $("#copyErrorMsg").modal(); //複製失敗彈出訊息模板
            });

            var copyBtn = new Clipboard('#copyBtn');
            //複製成功執行
            copyBtn.on('success', function(e) {
                e.clearSelection();
                $("#copyMsg").html('<font color="#43ac18"><b>複製成功</b></font>'); //複製成功顯示文字
                $("#copyBtn").attr("disabled", true);　//禁用按鈕
            });
            //複製失敗執行
            copyBtn.on('error', function(e) {
                $("#copyMsg").html('<font color="#ff0000"><b>複製失敗</b></font>'); //複製失敗彈出訊息模板
                $("#copyBtn").attr("disabled", true);　//禁用按鈕
            });
        </script>
    </body>
</html>
