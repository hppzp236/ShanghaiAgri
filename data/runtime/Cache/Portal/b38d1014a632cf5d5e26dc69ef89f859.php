<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <link rel="stylesheet" href="/ThinkCMFX/themes/simplebootx/Public/Resource/css/responsiveslides.css">
    <link rel="stylesheet" href="/ThinkCMFX/themes/simplebootx/Public/Resource/css/ui.css">
</head>
<body>
<div class="page">

<?php echo hook('body_start');?>
    <div class="header">
        <div class="topbar">
            <div class="container cf">
                <div class="fl topbar-time">
                    2017年5月13日 星期五
                </div>
                <div class="fr topbar-opr">
                    <ul class="cf">
                        <li><a href="#" onclick="SetHome(window.location)" href="javascript:void(0)" class="setHome">设为主页</a></li>
                        <li>|</li>
                        <li><a href="#" onclick="AddFavorite(window.location,document.title)" class="addFavor">加入收藏</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo-box">
            <div class="container">
                <a href="#" class="header-logo cf">
                    <img class="fl" src="/ThinkCMFX/themes/simplebootx/Public/Resource/img/zbs-logo.png" alt="">
                    <span>农产品质量标准与检测技术研究所</span>
                </a>
            </div>
        </div>
        <div class="nav">
            <div class="container">
        <?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="li-class" ; $style="nav-list cf"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
        <div class="form-group cf">
        <form method="post" action="<?php echo U('portal/search/index');?>">
            <input type="search" name="keyword" placeholder="KeyWords"value="<?php echo I('get.keyword');?>" />
            <button type="submit">搜索</button>
        </form >
        </div>
            </div>
        </div>
    </div>

<div class="body">
<?php $home_slides=sp_getslide("top_slide"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
        <div class="section-slide mv20">
            <div class="container cf">
                <div class="slide-box fl">
                    <ul class="rslides" id="news-slide">
                    <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
                            <a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
                            <p><?php echo ($vo["slide_name"]); ?></p>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
    <?php $three=sp_sql_posts("cid:3;field:post_title,istop,object_id,term_id;order:listorder asc;limit:9;"); ?>
                <div class="notice-box fr">
                    <div class="hd cf">
                        <h3 class="f17 fl">
                            通知公告
                        </h3>
                        <a href="<?php echo leuu('Portal/List/index',array('id'=>3));?>" class="fr f14 _white tdu">更多></a>
                    </div>

                    <div class="bd">
                        <ul>
      <?php if(is_array($three)): foreach($three as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">

                              <?php echo ($vo["post_title"]); ?>
                                </a>

                                <?php if(($vo["istop"] == 1)): ?><img class="icon-new" src="/ThinkCMFX/themes/simplebootx/Public/Resource/img/new.gif" alt=""><?php endif; ?>
                            </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="section-swf">
        <div class="container tac" style="margin-top:-2px;margin-bottom:12px;">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="950" height="120">
                    <param name="movie" value="img/banner.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="opaque">
                    <embed src="/ThinkCMFX/themes/simplebootx/Public/Resource/img/banner.swf" quality="high" wmode="opaque" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="950" height="120">
                </object>
            </div>
        </div>
        <div class="section-newslist cf">
            <div class="container">
                <div class="news-grid-box fl cf">
                    <div class="news-grid-item-wrap">
                        <div class="news-grid-item-ul">
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        风险预警
                                    </h3>
                        <a href="<?php echo leuu('Portal/List/index',array('id'=>4));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $four=sp_sql_posts("cid:4;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($four)): foreach($four as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        科研项目
                                    </h3>
                                    <a href="<?php echo leuu('Portal/List/index',array('id'=>5));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $five=sp_sql_posts("cid:5;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($five)): foreach($five as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        技术服务
                                    </h3>
                                    <a href="<?php echo leuu('Portal/List/index',array('id'=>6));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $six=sp_sql_posts("cid:6;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($six)): foreach($six as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        人才团队
                                    </h3>
                                   <a href="<?php echo leuu('Portal/List/index',array('id'=>7));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $seven=sp_sql_posts("cid:7;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($seven)): foreach($seven as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        学术交流
                                    </h3>
                                    <a href="<?php echo leuu('Portal/List/index',array('id'=>8));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $eight=sp_sql_posts("cid:8;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($eight)): foreach($eight as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                            <div class="news-grid-item">
                                <div class="hd">
                                    <h3 class="fl">
                                        党建精神文明
                                    </h3>
                                    <a href="<?php echo leuu('Portal/List/index',array('id'=>9));?>" class="fr f14 _green tdu">更多></a>
                                </div>
                                <div class="bd">
                        <ul class="news-title-list">
    <?php $nine=sp_sql_posts("cid:9;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($nine)): foreach($nine as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>

                        </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="aside-box fr">
                    <div class="scientific-platform">
                        <div class="hd">
                            <h3 class="aside-title">
                                <span>科研平台</span>
                            </h3>
                        </div>
                        <div class="bd">
                            <ul class="aside-con">
    <?php $ten=sp_sql_posts("cid:10;field:post_title,object_id,term_id;order:listorder asc;limit:4;"); ?>
      <?php if(is_array($ten)): foreach($ten as $key=>$vo): ?><li>
                                <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                              <?php echo ($vo["post_title"]); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="login-box cf">
                        <h3 class="aside-title">
                            <span>登录</span>
                        </h3>
                        <div class="aside-con">
                            <a href="http://www.saas.sh.cn/oa/HX_LOGIN.ASP" class="login-btn platform-login-btn fl">院办公平台登录</a>
                            <a href="https://webmail.saas.sh.cn/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.saas.sh.cn%2fowa%2f" class="login-btn email-login-btn fr">院邮箱登录</a>
                        </div>

                    </div>



                </div>
            </div>

        </div>
        <div class="section-friendlink">
            <div class="container">
                <ul class="flinkfrm cf">
                    <li class="fl">政府网站
                        <ul>
                            <li style="z-index: 10;"><a href="http://www.shac.gov.cn/" title="上海农业网" target="_blank">上海农业网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shnyly.net" title="上海农业旅游网" target="_blank">上海农业旅游网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shaqc.org/" title="上海市农产品质量安全中心" target="_blank">上海市农产品质量安全中心</a></li>
                            <li style="z-index: 10;"><a href="http://www.shagri.org.cn/" title="上海农业产业化网" target="_blank">上海农业产业化网</a></li>
                            <li style="z-index: 10;"><a href="http://www.dwws.sh.cn/" title="上海市动物卫生监督所" target="_blank">上海市动物卫生监督所</a></li>
                            <li style="z-index: 10;"><a href="http://www.sahvet.com" title="上海市畜牧兽医网" target="_blank">上海市畜牧兽医网</a></li>
                            <li style="z-index: 10;"><a href="http://www.saas.sh.cn/" title="上海市农业科学院" target="_blank">上海市农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.agri.sh.cn/" title="上海农业技术网" target="_blank">上海农业技术网</a></li>
                            <li style="z-index: 10;"><a href="http://www.sham.shac.gov.cn/" title="上海农机化信息网" target="_blank">上海农机化信息网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shafc.edu.cn/" title="上海农林职业技术学院" target="_blank">上海农林职业技术学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.sagc.org.cn/" title="上海市农业生物基因中心" target="_blank">上海市农业生物基因中心</a></li>
                            <li style="z-index: 10;"><a href="http://www.chinese-sturgeon.com.cn/" title="上海市长江口中华鲟自然保护区管理处" target="_blank">上海市长江口中华鲟自然保护区管理处</a></li>
                            <li style="z-index: 10;"><a href="http://www.shyz.org.cn/" title="上海市渔政监督管理处" target="_blank">上海市渔政监督管理处</a></li>
                            <li style="z-index: 10;"><a href="http://www.shyj.gov.cn/" title="上海渔港监督局" target="_blank">上海渔港监督局</a></li>
                            <li style="z-index: 10;"><a href="http://www.shseed.com/" title="上海种业网" target="_blank">上海种业网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shflowerport.com/" title="上海鲜花港" target="_blank">上海鲜花港</a></li>
                            <li style="z-index: 10;"><a href="http://www.dfcxb.com/" title="东方城乡报" target="_blank">东方城乡报</a></li>
                            <li style="z-index: 10;"><a href="http://shamri.com/" title="上海市农业机械研究所" target="_blank">上海市农业机械研究所</a></li>
                            <li style="z-index: 10;"><a href="http://maitc.shac.cn/" title="上海市动物无害化处理中心" target="_blank">上海市动物无害化处理中心</a></li>
                        </ul>
                    </li>
                    <li class="science-link">科研相关网站
                        <ul>
                            <li style="z-index: 10;"><a href="http://www.saas.sh.cn/" title="上海市农业科学院" target="_blank">上海市农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.shfishery.net/" title="上海市水产研究所" target="_blank">上海市水产研究所</a></li>
                            <li style="z-index: 10;"><a href="http://www.agri.sjtu.edu.cn/" title="上海市交大农学院" target="_blank">上海市交大农学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.linye.sh.cn/" title="上海林业技术网" target="_blank">上海林业技术网</a></li>
                            <li style="z-index: 10;"><a href="http://www.snhx.org.cn/fqw/" title="上海农业废弃物利用行业协会" target="_blank">上海农业废弃物利用行业协会</a></li>
                            <li style="z-index: 10;"><a href="http://www.caas.net.cn" target="_blank">中国农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.cas.cn" target="_blank">中国科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.catas.cn" target="_blank">中国热带农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.iwhr.com" target="_blank">水科院</a></li>
                            <li style="z-index: 10;"><a href="http://www.baafs.net.cn" target="_blank">北京市农林科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.cn-ny.org" target="_blank">吉林省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.hnagri.org.cn" target="_blank">河南省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.yaas.org.cn" target="_blank">云南省农科院</a></li>
                            <li style="z-index: 10;"><a href="http://www.sxagri.ac.cn" target="_blank">山西农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.gzaas.com.cn" target="_blank">贵州省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.chinawestagr.com" target="_blank">四川省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.hebnky.com" target="_blank">河北省农林科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.saas.ac.cn" target="_blank">山东省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.hbaas.com" target="_blank">湖北省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.taaas.org" target="_blank">西藏自治区农牧科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.faas.cn" target="_blank">福建省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.laas.net.cn" target="_blank">辽宁省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.ahas.org.cn" target="_blank">安徽省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.gxaas.net" target="_blank">广西农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.tjagri.ac.cn" target="_blank">天津市农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.jaas.ac.cn" target="_blank">江苏省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.hunaas.cn/" target="_blank">湖南省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.hnaas.org.cn" target="_blank">海南省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.jxaas.com" target="_blank">江西省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.nxaas.com.cn" target="_blank">宁夏农林科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.xaas.ac.cn" target="_blank">新疆农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.cqaas.cn" target="_blank">重庆市农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.zaas.ac.cn" target="_blank">浙江省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.gdaas.cn" target="_blank">广东省农业科学院 </a></li>
                            <li style="z-index: 10;"><a href="http://www.gsagr.ac.cn" target="_blank">甘肃省农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.nmnky.com" target="_blank">内蒙古农牧业科学院</a></li>
                        </ul>
                    </li>
                    <li class="fr">质量安全网站
                        <ul>
                            <li style="z-index: 10;"><a href="http://www.shac.gov.cn/" title="上海农业网" target="_blank">上海农业网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shnyly.net" title="上海农业旅游网" target="_blank">上海农业旅游网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shaqc.org/" title="上海市农产品质量安全中心" target="_blank">上海市农产品质量安全中心</a></li>
                            <li style="z-index: 10;"><a href="http://www.shagri.org.cn/" title="上海农业产业化网" target="_blank">上海农业产业化网</a></li>
                            <li style="z-index: 10;"><a href="http://www.dwws.sh.cn/" title="上海市动物卫生监督所" target="_blank">上海市动物卫生监督所</a></li>
                            <li style="z-index: 10;"><a href="http://www.sahvet.com" title="上海市畜牧兽医网" target="_blank">上海市畜牧兽医网</a></li>
                            <li style="z-index: 10;"><a href="http://www.saas.sh.cn/" title="上海市农业科学院" target="_blank">上海市农业科学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.agri.sh.cn/" title="上海农业技术网" target="_blank">上海农业技术网</a></li>
                            <li style="z-index: 10;"><a href="http://www.sham.shac.gov.cn/" title="上海农机化信息网" target="_blank">上海农机化信息网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shafc.edu.cn/" title="上海农林职业技术学院" target="_blank">上海农林职业技术学院</a></li>
                            <li style="z-index: 10;"><a href="http://www.sagc.org.cn/" title="上海市农业生物基因中心" target="_blank">上海市农业生物基因中心</a></li>
                            <li style="z-index: 10;"><a href="http://www.chinese-sturgeon.com.cn/" title="上海市长江口中华鲟自然保护区管理处" target="_blank">上海市长江口中华鲟自然保护区管理处</a></li>
                            <li style="z-index: 10;"><a href="http://www.shyz.org.cn/" title="上海市渔政监督管理处" target="_blank">上海市渔政监督管理处</a></li>
                            <li style="z-index: 10;"><a href="http://www.shyj.gov.cn/" title="上海渔港监督局" target="_blank">上海渔港监督局</a></li>
                            <li style="z-index: 10;"><a href="http://www.shseed.com/" title="上海种业网" target="_blank">上海种业网</a></li>
                            <li style="z-index: 10;"><a href="http://www.shflowerport.com/" title="上海鲜花港" target="_blank">上海鲜花港</a></li>
                            <li style="z-index: 10;"><a href="http://www.dfcxb.com/" title="东方城乡报" target="_blank">东方城乡报</a></li>
                            <li style="z-index: 10;"><a href="http://shamri.com/" title="上海市农业机械研究所" target="_blank">上海市农业机械研究所</a></li>
                            <li style="z-index: 10;"><a href="http://maitc.shac.cn/" title="上海市动物无害化处理中心" target="_blank">上海市动物无害化处理中心</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="flinkcont">

                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Copyright © 上海市农业科学院农产品质量标准与检测技术研究所, All rights reserved.</p>
            <p>技术支持：上海市农科院质标所   电话：021-52630137 传真：021-62203612</p>
        </div>
    </div>
</div>

<script src="/ThinkCMFX/themes/simplebootx/Public/Resource/js/jquery-1.7.1.js"></script>
<script src="/ThinkCMFX/themes/simplebootx/Public/Resource/js/responsiveslides.min.js"></script>
<script src="/ThinkCMFX/themes/simplebootx/Public/Resource/js/ui.js"></script>
<script type="text/javascript">
         //加入收藏
 
        function AddFavorite(sURL, sTitle) {
 
            sURL = encodeURI(sURL); 
        try{   
 
            window.external.addFavorite(sURL, sTitle);   
 
        }catch(e) {   
 
            try{   
 
                window.sidebar.addPanel(sTitle, sURL, "");   
 
            }catch (e) {   
 
                alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
 
            }   
 
        }
 
    }
 
    //设为首页
 
    function SetHome(url){
 
        if (document.all) {
 
            document.body.style.behavior='url(#default#homepage)';
 
               document.body.setHomePage(url);
 
        }else{
 
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
 
        }
 
    }
</script>
</body>
</html>