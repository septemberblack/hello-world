<?php
include("Util.php");
$topic="Egg-seeinfront";
$url="http://publictest-rest.ons.aliyun.com";
$user_accesskey="CTN3U8rF85rPVyAL";
$user_secretkey="G5bOvy1UrIKgndhLa4whI9d2jXuXaG";
$producer_group="PID_eggseeinfront";
$consumer_group="CID_eggseeinfront";



$date = (int)($util->microtime_float()*1000);

            //post请求url
            $postUrl = $url."/message/?topic=".$topic."&time=".$date."&tag=http&key=http";

        $curlPost = $param;
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        
        return $data;

?>