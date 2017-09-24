<?php
      header('content-type:text/html;charset=utf-8');
      $tb=isset($_GET['callback'])?$_GET['callback']:'taobao';
      $tbvalue=isset($_GET['value'])?$_GET['value']:'';
      $infomation=file_get_contents("https://suggest.taobao.com/sug?code=utf-8&q=aa&_ksTS=1506130700534_1326&callback=jsonp1327&k=1&area=c2c&bucketid=19");
        echo $tb.'('.$infomation.')';
  
//https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd=bbb&json=1&p=3&sid=1450_21121_22074&req=2&csor=0&pwd=bb&cb=jQuery110202807666627749663_1506129020864&_=1506129020871
?>