<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8"><meta name="referrer" content="never">
    <title>JASKan.com Player+</title>
    <meta name="renderer" content="webkit">
    <meta name="theme-color" content="#de698c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="applicable-device" content="mobile">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <link rel="shortcut icon" href="https://fla.cdn.bosyun.com/upload/site/ger/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/yzmplayer.css?20200622">
    <script src="js/yzmplayer.js?20201106"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/setting.js?20201123"></script>
    <?php
    if (strpos($_GET['url'], 'm3u8')) {
        echo '<script src="js/hls.min.js"></script>';
    } elseif (strpos($_GET['url'], 'flv')) {
        echo '<script src="js/flv.min.js"></script>';
    }
    ?>
    <script src="js/layer.js"></script>

    <script>
        var css = '<style type="text/css">';
        var d, s;
        d = new Date();
        s = d.getHours();
        if (s < 17 || s > 23) {
            css += '#loading-box{background: #fff;}'; //白天
        } else {
            css += '#loading-box{background: #000;}'; //晚上
        }
        css += '</style>';
    </script>
</head>

<body>
    <div id="player"></div>
    <div id="ADplayer"></div>
    <div id="ADtip"></div>
    <script>
        var up = {
            "usernum": "<?php include("tj.php"); ?>", //在线人数
            "mylink": "/player/?url=", //播放器路径，用于下一集
            "diyid": [0, '游客', 1] //自定义弹幕id
        }
        var config = {
            "api": '/dmku/', //弹幕接口/dmku/
            "av": '<?php echo ($_GET['av']); ?>', //B站弹幕id 45520296
            "url": "<?php echo ($_GET['url']); ?>", //视频链接
            "id": "<?php echo (substr(md5($_GET['url']), -20)); ?>", //视频id
            "sid": "<?php echo ($_GET['sid']); ?>", //集数id
            "pic": "<?php echo ($_GET['pic']); ?>", //视频封面
            "title": "<?php echo ($_GET['name']); ?>", //视频标题
            "next": "<?php echo ($_GET['next']); ?>", //下一集链接
            "user": '<?php echo ($_GET['user']); ?>', //用户名
            "group": "<?php echo ($_GET['group']); ?>" //用户组
        }
        YZM.start()
    </script>
</body>

</html>