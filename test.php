<?php
include("Util.php");
$topic="Egg-seeinfront";
$url="http://publictest-rest.ons.aliyun.com";
$user_accesskey="CTN3U8rF85rPVyAL";
$user_secretkey="G5bOvy1UrIKgndhLa4whI9d2jXuXaG";
$producer_group="PID_eggseeinfront";
$consumer_group="CID_eggseeinfront";



$date = (int)($util->microtime_float()*1000);

            //post����url
            $postUrl = $url."/message/?topic=".$topic."&time=".$date."&tag=http&key=http";

        $curlPost = $param;
        $ch = curl_init();//��ʼ��curl
        curl_setopt($ch, CURLOPT_URL,$postUrl);//ץȡָ����ҳ
        curl_setopt($ch, CURLOPT_HEADER, 0);//����header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Ҫ����Ϊ�ַ������������Ļ��
        curl_setopt($ch, CURLOPT_POST, 1);//post�ύ��ʽ
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//����curl
        curl_close($ch);
        
        return $data;

?>