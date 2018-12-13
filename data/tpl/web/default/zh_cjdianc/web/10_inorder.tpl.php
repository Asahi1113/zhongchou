<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
    .ygrow{margin-top: 20px;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr2>td{padding: 15px 8px;border: 1px solid #e5e5e5;}
    .yg5_tr1>td{
        border: 1px solid #e5e5e5;
        background-color: #FAFAFA;
        font-weight: bold;
    }
    .ordersucess{background-color: #44ABF7;color: white;}
    .ordersucess:hover{background-color: #44ABF7;color: white;}
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .inorderbtn2>span,.inorderbtn>button,.inorderbtn>a>button{margin-bottom: 10px;}
    .orfont1{font-weight: bold;font-size: 24px;}
    .orfont2{color: #F5B340;font-size: 16px;margin-left: 15px;}
    .orderback{background-color: #FAFAFA;height: 50px;margin-bottom: 15px;padding: 10px;}
    .ordermain{font-size: 14px;width: 100%;}
    .orfont3{font-size: 20px;font-weight: bold;}
    .orfont4{font-size: 12px;color: #999;}
    .orderconfirm{border:1px solid #44ABF7;color: #44ABF7;padding: 5px 15px;border-radius: 6px;cursor: pointer;margin-right: 10px;}
    .orderconfirm:hover{background-color: #44ABF7;color: white;}
    .orderconfirm2{color: #fff;padding: 3px 10px;border-radius: 6px;margin-right: 10px;font-size: 12px;margin-top: 5px;background-color: #44ABF7;}
    .orderback2{border-bottom:1px solid #E9E9E9;margin-bottom: 10px;padding-bottom: 10px;}
    .orderback3{margin-bottom: 10px;padding-bottom: 10px;}
    .orderback2>div>p{margin-bottom: 5px;}
    .orderdish{margin-bottom: 10px;height: 15px;width: 100%;}
    .orderdish>div{float: left;margin-right: 50px;}
    .orderbox1,.orderdish1{width: 250px;}
    .orderdish>div:nth-child(2){width: 80px;}
    .orderdish>div:nth-child(3){width: 80px;}
    .orderbox2,.orderdish>div:nth-child(4){width: 80px;}
    .orderbox2{margin-left: 310px;}
    .orderaccount{width: 100%;height: 25px;}
    .orfont5{color: #44ABF7;font-size: 14px;}
    .orfont6{font-size: 12px;color: #666;}
    .orfont7{font-weight: bold;font-size: 15px;}
    .orfont8{color: #44ABF7;}
    .orfont9{color: #666;}
    .orderpanel1{width: 50%;display: inline-block;}
    .orderpanel2{width: 30%;display: inline-block;margin-left: 30px;}
    .ordertelimg{width: 20px;height: 20px;}
    .ordertelimg1{color: #44ABF7;font-size: 14px;}
    .ordername{height: 30px;width: 100%;margin-bottom: 5px;}
    .ordername1{font-size: 20px;font-weight: bold;}
    .orbeizhu{color: #FF7712;}
    .ordertime{margin-right: 10px;}
    .orfont10{color: #999;}
    .orderbtn{border: #FF7F50 1px solid;color: #FF7F50;background-color: #fff;margin-top: -10px;}
    .orderbtn:hover{background-color: #FF7F50;color: white;}
    .ortypeimg{position: absolute;left: 27%;top:53%;z-index: 10;opacity: 0.2;width: 150px;height: 150px;}
    .ortypeimg>img{width: 100%;height: 100%;}
    .ortypeimg2{position: absolute;left: 27%;top:53%;z-index: 10;opacity: 0.4;width: 150px;height: 150px;}
    .ortypeimg2>img{width: 100%;height: 100%;}
    .orderwu{text-align: center;padding: 20px 0px;}
    .wufont1{font-size: 18px;color: #666;margin-top: 20px;}
    .orderconhui{background-color: grey;color: white;}
    .orfontyue1{text-indent: 4em;}
    .dlorfont7{font-size: 18px;color: #44ABF7;}
    .tip_data{
       border:0;
       margin:0;
       float: left;
    }
    .data_tip,.nav_head{
          display: flex;
          justify-content: space-between;
          align-items: center;
    }
      .box1{
      	display:flex;
	}
	.back{
		position: absolute;;
		width:100%;
      	background:#000;
      	opacity: .2;
		height: 100%;
		z-index: 500;
	}
	.add_html{
		margin:auto;
		padding: 0 10px;
		width:40%;
		height: auto;
		border-radius: 10px;
		padding: 20px;
		/*margin:100px 20%;*/
		z-index: 500000000;
		background: #fff;
		/*background:#44ABF7;*/
		/*border: 2px solid #44ABF7;*/
		/*color: #fff;*/
	}
    /*.nav>.orderbtn2>a{padding: 6px 20px;border-radius: 4px;border:1px solid #FF7F50;color: #FF7F50;}*/
</style>
	<!-- 动态添加骑手信息 -->
	<div id="add" class="box1" style="width: 100%;height:100%;position: fixed;z-index: 50000000000;left: 0;top: 0;">
		<div class="add_html">
			
		</div>
		<div class="back"></div>
	</div>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div> 
    <li <?php  if($type=='now') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>now));?>">待接单</a></li>
    <li <?php  if($type=='delivery') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>delivery));?>">待送达</a></li>

    <li <?php  if($type=='complete') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>complete));?>">已完成</a></li>
    <li <?php  if($type=='zt') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>zt));?>">自提订单</a></li>
        <li <?php  if($type=='wait') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>wait));?>">待支付</a></li>
<!--     <li <?php  if($type=='dd') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>dd));?>">预约到店</a></li> -->
    <li <?php  if($type=='cancel') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>cancel));?>">取消/拒绝/退款</a></li> 
    <li <?php  if($type=='all') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type'=>all));?>">全部订单</a></li>
</ul>
<div class="row ygrow">
    <div class="col-lg-11 nav_head">
        <form action="" method="get" style="padding: 0" class="col-md-4">
            <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="zh_cjdianc" />
            <input type="hidden" name="do" value="inorder" />
            <div class="input-group" style="width: 300px;">
                <input type="text" name="keywords" class="form-control" placeholder="请输入姓名/订单编号/门店名称">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                </span>
            </div>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
        <ul class="nav nav-tabs data_tip col-md-4" style="float: left;margin:0">
         <li<?php  if($type2=='yesterday') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type2'=>yesterday,'type'=>$type));?>">昨天</a></li>
            <li<?php  if($type2=='today') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type2'=>today,'type'=>$type));?>">今天</a></li>
            <li<?php  if($type2=='week') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type2'=>week,'type'=>$type));?>">近七天</a></li>
            <li<?php  if($type2=='month') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('inorder',array('type2'=>month,'type'=>$type));?>">本月</a></li>
        </ul>  
        <form action="" method="get" class="col-md-4">
           <input type="hidden" name="c" value="site" />
           <input type="hidden" name="a" value="entry" />
           <input type="hidden" name="m" value="zh_cjdianc" />
           <input type="hidden" name="do" value="inorder" />
            <div class="input-group" style="width: 100px">
                <?php  echo tpl_form_field_daterange('time',$_GPC['time'],true);?>
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit2" value="查找"/>
                </span>
                  <input type="submit" class="btn btn-sm ordersucess" name="export_submit" value="导出"/>
            </div><!-- /input-group -->

            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
    </div><!-- /.col-lg-6 -->
</div>  
<div class="main ordermain">
<div class="row">
    <div class="col-md-11">
    <?php  if(!$data3) { ?>
        <div class="panel panel-default">
            <div class="orderwu">
                <img src="../addons/zh_cjdianc/template/images/noorder.png">
                <p class="wufont1">暂无指定订单</p>
                <p class="orfont10">暂时没有筛选条件的订单，稍后再来看看吧！</p>
            </div>
        </div>
        <?php  } ?>
<?php  if(is_array($data3)) { foreach($data3 as $key => $item) { ?>
        <div class="panel panel-default">
            <div class="panel-body" style="padding: 0px 15px;">
                <div class="row" style="position: relative;">
                <?php  if($item['order']['state']==1 || $item['order']['state']==6) { ?>
                    <div class="ortypeimg">
                        <img src="../addons/zh_cjdianc/template/images/daizhifu.png">
                    </div>
                     <?php  } else if($item['order']['pay_type']==4) { ?>
                    <div class="ortypeimg2">
                        <img src="../addons/zh_cjdianc/template/images/hdfk.png">
                    </div>
                    <?php  } else { ?>
                    <div class="ortypeimg2">
                        <img src="../addons/zh_cjdianc/template/images/yizhifu.png">
                    </div>
                    <?php  } ?>
                    <div class="col-md-12 orderback">
                        <div class="left">
                            <span class="orfont1 orfont8">#<?php  echo $item['order']['id'];?></span>
                              <span>
                            <?php  if($item['order']['order_type']==2) { ?>
                                <b style="background: #44ABF7;color: #fff;padding: 5px 15px;border-radius: 5px;font-weight: normal;">到店自提</b>
                            <?php  } else if($item['order']['order_type']==3) { ?>
                                <b style="background: #FF7F50;color: #fff;padding: 5px 15px;border-radius: 5px;font-weight: normal;">预约到店</b>
                            <?php  } else if($item['order']['pay_type']==4) { ?>
                                <b style="background: #FF7F50;color: #fff;padding: 5px 15px;border-radius: 5px;font-weight: normal;">货到付款</b>
                            <?php  } else if($item['order']['order_type']==1) { ?>
                                <b style="background: #44ABF7;color: #fff;padding: 5px 15px;border-radius: 5px;font-weight: normal;">外卖配送</b>
                            <?php  } ?>
                            </span>
                            &nbsp;|&nbsp;<?php  echo $item['order']['delivery_time'];?>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'dy','order_id'=>$item['order']['id']));?>"><button class="btn btn-xs orderbtn">打印小票</button></a>
                        </div>
                        <div class="right">
                        <?php  if($item['order']['state']==1) { ?>
                            <div class="left orderconfirm2">待支付</div>
                        <?php  } else if($item['order']['state']==2) { ?>
                            <div class="left orderconfirm2">待接单</div>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'jd','id'=>$item['order']['id']));?>"><div class="left orderconfirm">点击接单</div></a>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'jjjd','id'=>$item['order']['id']));?>"><div class="left orderconfirm">拒接接单</div></a>
                        <?php  } else if($item['order']['state']==3) { ?>
                            <div class="left orderconfirm2">待送达</div>
                             <div class="left orderconfirm2 ps_info" id="order_info" value="<?php  echo $item['order']['id'];?>">
								<text class="dis_info" value="<?php  echo $item['order']['ps_mode'];?>">配送详情</text>
                            </div>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'wc','id'=>$item['order']['id']));?>"><div class="left orderconfirm">点击完成</div></a>
                            
                        <?php  } else if($item['order']['state']==4) { ?>
                            <div class="left label label-xs orderconhui">已完成</div>
                        <?php  } else if($item['order']['state']==5) { ?>
                            <div class="left orderconfirm2">已评价</div>
                        <?php  } else if($item['order']['state']==6) { ?>
                            <div class="left orderconfirm2">已取消</div>
                            <?php  } else if($item['order']['state']==7) { ?>
                            <div class="left orderconfirm2">已拒接</div>
                        <?php  } else if($item['order']['state']==8) { ?>
                            <div class="left orderconfirm2">待退款</div>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'refund','id'=>$item['order']['id']));?>"><div class="left orderconfirm">通过退款</div></a>
                            <a href="<?php  echo $this->createWebUrl('inorder',array('op'=>'reject','id'=>$item['order']['id']));?>"><div class="left orderconfirm">拒绝退款</div></a>
                        <?php  } else if($item['order']['state']==9) { ?>
                            <div class="left orderconfirm2">退款成功</div>
                        <?php  } else if($item['order']['state']==10) { ?>
                            <div class="left orderconfirm2">退款拒绝</div>
                        <?php  } ?>
                        </div>                        
                    </div>
                    <div class="col-md-12 orderback2">
                        <div class="ordername">
                            <div class="left ordername1"><?php  echo $item['order']['name'];?> &nbsp;&nbsp;<span class="orfont4">#<?php  echo $item['order']['md_name'];?><?php  if($item['order']['order_type']==3) { ?>(<?php  if($item['order']['is_dd']==1) { ?>已到店<?php  } else { ?>未到店<?php  } ?>)<?php  } ?></span></div>
                            <a href="<?php  echo $this->createWebUrl('inorderinfo',array('id'=>$item['order']['id']));?>"><div class="right btn btn-sm btn-default" style="border:none;">查看详情</div></a>
                        </div>
                        <div class="">
                            <div class="left orfont9"><?php  echo $item['order']['address'];?></div>
                            <div class="right ordertelimg1">
                                <img src="../addons/zh_cjdianc/template/images/ordertel.png" class="ordertelimg">
                                <span><?php  echo $item['order']['tel'];?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 orderback2">
                        <p><span class="orbeizhu">备注：</span><?php  if($item['order']['note']) { ?><?php  echo $item['order']['note'];?><?php  } else { ?>无<?php  } ?> </p>
                    </div>
                    <div class="col-md-12 orderback2">
                        <p class="orfont3">商品信息</p>
                        <?php  if(is_array($item['goods'])) { foreach($item['goods'] as $item2) { ?>
                        <div class="orderdish">
                            <div class="left orderdish1"><?php  echo $item2['name'];?></div>
                            <div class="left">¥<?php  echo $item2['money'];?></div>
                            <div class="left">×<?php  echo $item2['num'];?></div>
                            <div class="left">¥<?php  echo number_format($item2['num']*$item2['money'],2)?></div>
                        </div>
                        <?php  } } ?>
                    </div>
                    <div class="col-md-12 orderback2">
                        <div class="orderbox1 left">餐盒费</div>
                        <div class="orderbox2 left">¥<?php  echo $item['order']['box_money'];?></div>
                    </div>
                    <div class="col-md-12 orderback2">
                        <div class="orderbox1 left">配送费</div>
                        <div class="orderbox2 left">¥<?php  echo $item['order']['ps_money'];?></div>
                    </div>
                    <div class="col-md-12 orderback2">
                        <p class="orfont3">小计</p>                        
                        <div class="orderaccount">
                            <div class="orderbox1 left">优惠金额</div>
                            <div class="orderbox2 left">¥<?php  echo number_format($item['order']['discount'],2)?></div>
                        </div>
                        <div class="orderaccount">
                            <div class="orderbox1 left">支付方式</div>
                            <div class="orderbox2 left"><?php  if($item['order']['pay_type']==1) { ?>微信支付<?php  } else if($item['order']['pay_type']==2) { ?>余额支付<?php  } else if($item['order']['pay_type']==3) { ?>积分支付<?php  } else { ?>货到付款<?php  } ?></div>
                        </div>                      
                    </div>
                    <div class="col-md-12 orderback2">
                        <div class="orderaccount orfont7">
                            <div class="orderbox1 left">本单预计收入</div>
                  
                            <div class="orderbox2 left">¥<?php  echo number_format($item['order']['money']-($item['order']['md_poundage']/100*$item['order']['money']),2)?></div>
                          
                        </div>
                        <div class="orderaccount orfont6">
                            本单顾客实际支付：¥<?php  echo $item['order']['money'];?>
                        </div>                     
                    </div>
                    <div class="col-md-12 orderback3">
                        <div class="right orfont10">
                        <span class="ordertime">下单时间：<?php  echo $item['order']['time'];?></span>
                        订单编号：<?php  echo $item['order']['order_num'];?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
<?php  } } ?>

    </div>



    
<!--     <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading dlorfont7">今日外卖订单</div>
            <div class="panel-body" style="padding: 15px;font-size: 16px;">                
                <p>已完成订单量：<span class="dlorfont7"><?php  echo $wm2;?></span>单</p>
             
                <p>微信完成<span class="dlorfont7"><?php  echo $wxwm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($wx['total']) { ?><?php  echo $wx['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
                <p>余额完成<span class="dlorfont7"><?php  echo $yuewm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($yue['total']) { ?><?php  echo $yue['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
                <p>积分完成<span class="dlorfont7"><?php  echo $jfwm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($jf['total']) { ?><?php  echo $jf['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading dlorfont7">昨日外卖订单</div>
            <div class="panel-body" style="padding: 15px;font-size: 16px;">                
                <p>已完成订单量：<span class="dlorfont7"><?php  echo $ztwm2;?></span>单</p>
               
                <p>营业额：</p>
                <p>微信完成<span class="dlorfont7"><?php  echo $ztwxwm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($ztwx['total']) { ?><?php  echo $ztwx['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
                <p>余额完成<span class="dlorfont7"><?php  echo $ztyuewm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($ztyue['total']) { ?><?php  echo $ztyue['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
                <p>积分完成<span class="dlorfont7"><?php  echo $ztjfwm2;?></span>单，收入
                    <span class="dlorfont7">¥&nbsp;<?php  if($ztjf['total']) { ?><?php  echo $ztjf['total'];?><?php  } else { ?>0.00<?php  } ?></span>元
                </p>
            </div>
        </div>        
    </div> -->
    
</div>
</div>
<div class="text-right we7-margin-top"><?php  echo $pager;?></div>
<script type="text/javascript">
    $(function(){
        // $("#frame-1").addClass("in");
        $("#frame-1").show();
        $("#yframe-1").addClass("wyactive");
    })
</script>


<div class="tip"></div>
<audio id="myaudio5" src="../addons/zh_cjdianc/template/images/wm.wav" controls="controls"  hidden="true" ></audio>
<audio id="myaudio6" src="../addons/zh_cjdianc/template/images/dn.wav" controls="controls"  hidden="true" ></audio>
<audio id="myaudio7" src="../addons/zh_cjdianc/template/images/yy.wav" controls="controls"  hidden="true" ></audio>

<script type="text/javascript">
$(function(){
    setInterval(function(){
               $.ajax({ 
                type: "post",
                dataType: "json",
                url: "<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=neworder&m=zh_cjdianc&store=<?php  echo $_COOKIE['storeid'];?>",
                success: function (data) {
                    console.log(data);
                   if(data==1){
                     var myAuto5 = document.getElementById('myaudio5');
                     myAuto5.play(); 
                     // $(".tip").append('<audio id="myaudio" src="../addons/zh_cjdianc/template/images/wm.wav" controls="controls"  hidden="true" autoplay></audio>')
                    }else if(data==2){
                        var myAuto6 = document.getElementById('myaudio6');
                     myAuto6.play(); 
                    }else if(data==3){
                        var myAuto7 = document.getElementById('myaudio7');
                     myAuto7.play(); 
                    }
                },
                error:function (data) {
                    console.log(data)
                }

            })
          },10000);
    	 $(".box1").hide();
         $(".box1").click(function(){
         	$(".box1").hide()
         })
         // 判断是否是达达或者快服务
         var dis_info = $(".dis_info")[0].attributes[1].nodeValue;
         // var dis_info = ''
         if(dis_info!='达达配送'&&dis_info!='快服务配送'&&dis_info!='商家配送'){
         	// $(".dis_info").hide()
         	var sjData = '<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=GetPtInfo&m=zh_cjdianc'
         }else if(dis_info=='达达配送'){
			var sjData = '<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=GetDadaInfo&m=zh_cjdianc'
         }else if(dis_info=='快服务配送'){
         	// GetDadaInfo
			var sjData = '<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=GetKfwInfo&m=zh_cjdianc'
         }
         console.log(dis_info)
         // 点击详情展开骑手信息
        $(".ps_info").click(function(e){
         	// 获取当前订单的id
         	var order_id = $(this)[0].attributes[2].nodeValue
         	console.log(dis_info)
            $.ajax({
                type:"post",
                url:sjData,
                data:{order_id:order_id},
                success:function(e){
                	console.log(e)
                	var res = JSON.parse(e)
                	console.log(res)
                	addHtml(res)
                	
                },
               	error:function(e){
               		console.log('执行失败')
               	},
               	complete:function(e){
               		console.log('每一步都执行')
               	}
	        })
		})
		// 添加骑手信息
		function addHtml(res){
			if(dis_info!='达达配送'&&dis_info!='快服务配送'){
				if(res.rst.state=='1'){
	    			alert('当前暂无骑手接单')
	    		}else{
		    		res.rst.time = ormatDate(res.rst.time)
		    		if(res.rst.state==1){
		    			res.rst.state='待接单'
		    		}else if(res.rst.state==2){
		    			res.rst.state='已接单'
		    		}else if(res.rst.state==3){
		    			res.rst.state='已到店'
		    		}else if(res.rst.state==4){
		    			res.rst.state='已送达'
		    		}
		    		var html = ''
			    	html += '<h4 style="border-bottom:1px solid #e5e5e5;padding:10px 0;" class="modal-title">'+'骑手信息'+'<text style="float:right;color:#44ABF7">'+res.rst.state+'</text>'+'</h4>',
			    	html += '<p style="padding:5px 0;">'+'订单编号:'+res.rst.order_id+'</p>'
			    	html += '<p style="padding:5px 0;">'+'骑手名字:'+res.rst.name+'</p>'
			    	html += '<p style="padding:5px 0;">'+'联系方式:'+res.rst.tel+'</p>'
			    	html += '<p style="padding:5px 0;">'+'接单时间:'+res.rst.time+'</p>'
			    	$("#add").show();
			    	$(".add_html").html(html)
	    		}
			}else if(dis_info=='达达配送'){
				if(res.courise_name!=null){
					var html = ''
			    	html += '<h4 style="border-bottom:1px solid #e5e5e5;padding:10px 0;" class="modal-title">'+'骑手信息'+'<text style="float:right;color:#44ABF7">'+res.statusMsg+'</text>'+'</h4>',
			    	html += '<p style="padding:5px 0;">'+'订单编号:'+res.orderId+'</p>'
			    	html += '<p style="padding:5px 0;">'+'骑手名字:'+res.courise_name+'</p>'
			    	html += '<p style="padding:5px 0;">'+'联系方式:'+res.courise_mobile+'</p>'
			    	html += '<p style="padding:5px 0;">'+'接单时间:'+res.acceptTime+'</p>'
			    	$("#add").show();
			    	$(".add_html").html(html)
				}else{
					alert('暂无骑手接单')
				}
					
			}else if(dis_info=='快服务配送'){
				if(res.courise_name!=null){
					var html = ''
					if(res.state==1){
						res.state = '已接单'
					}else if(res.state==2){
						res.state = '已到店'
					}else if(res.state==3){
						res.state = '已送达'
					}
			    	html += '<h4 style="border-bottom:1px solid #e5e5e5;padding:10px 0;" class="modal-title">'+'骑手信息'+'<text style="float:right;color:#44ABF7">'+res.state+'</text>'+'</h4>',
			    	html += '<p style="padding:5px 0;">'+'订单编号:'+res.orderId+'</p>'
			    	html += '<p style="padding:5px 0;">'+'骑手名字:'+res.courise_name+'</p>'
			    	html += '<p style="padding:5px 0;">'+'联系方式:'+res.courise_mobile+'</p>'
			    	html += '<p style="padding:5px 0;">'+'接单时间:'+res.acceptTime+'</p>'
			    	$("#add").show();
			    	$(".add_html").html(html)
				}else{
					alert('暂无骑手接单')
				}
					
			}
			
		}
        // -----------------------------时间戳转换日期时分秒--------------------------------
	  function ormatDate(dateNum) {
	    var date = new Date(dateNum * 1000);
	    return date.getFullYear() + "-" + fixZero(date.getMonth() + 1, 2) + "-" + fixZero(date.getDate(), 2) + " " + fixZero(date.getHours(), 2) + ":" + fixZero(date.getMinutes(), 2) + ":" + fixZero(date.getSeconds(), 2);
	    function fixZero(num, length) {
	      var str = "" + num;
	      var len = str.length;
	      var s = "";
	      for (var i = length; i-- > len;) {
	        s += "0";
	      }
	      return s + str;
	    }
	  }
})
    
</script>

