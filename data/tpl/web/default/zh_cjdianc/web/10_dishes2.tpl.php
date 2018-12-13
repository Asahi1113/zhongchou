<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcsslist.css">
<style type="text/css">
	.main{position: relative;}
	.navback{width: 0}
	.yg_back{margin-left: 136px;}
    .ygrow{margin-top: 20px;font-size: 12px;}
    .ygmartop{margin-top: 30px;font-size: 12px;}
    .ygmartop2{margin-bottom: 10px;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
   	.list_tabel>tbody>tr>td{vertical-align: middle;text-align: center;height: 50px}
   	.list_tabel tr{border-bottom: 1px solid #cdcdcd;}
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .yg5_btn2{background-color: white;color: #333;border: 1px solid white;border-radius: 6px;width: 100px;height: 34px;}
    .yg13_img{width: 50px;height: 50px;border-radius: 4px;}
    .yg_name{width: 30%;height: 34px;line-height: 34px;color: #333;float: left;background-color: white;border: 1px solid #E4E4E4;text-align: center;}
    .yg_left{float: left;}
    .form-control{width: 70%;}
    .ygseledi{width: 60%;}
    .dishes{display: flex;align-items: center;}
    .dishes_font{font-size: 20px;}
    .dishes_inp{width: 195px;height: 23px;border: none;}
    .dishes_inp2{margin-right: 20px;}
    .input_box{border: 2px solid #5bc0de;border-radius: 4px;padding: 5px;margin-right: 10px;background-color: #5bc0de;color: white;}
    .store_inp{margin-left: 5px;}
    .dish_left{margin-right: 20px;}
/*    .dish_btn>button,.dish_btn>a{margin-bottom: 10px;}
*/    .ygboxl{margin-bottom: 15px;}
    .top_tip{display: flex;background: #fff;padding-left: 20px}
/*    .nav_box{border-right: 1px solid #cdcdcd;padding: 0;text-align: center;height: 820px;background: #fff}
*/    
	.nav_box{
		left: 0;
    	top: 0;
        bottom: 0;
        color: #333;
        border-right: 1px solid #efefef;
        text-align: center;
        position: absolute;
        background: #fff;
        z-index:;   
        width: 130px;
	}
	.nav_name{overflow: hidden;}
    .nav_name li{padding:10px 0;}
    .nav_name li.active{background:#F5F7F9;color:#44abf7;background: #edf6ff}
    .nav_name li:hover{background:#F5F7F9;background: #edf6ff}
    .tab{border-bottom: 1px solid #cdcdcd;overflow: hidden;padding-left: 20px;}
    .tab li{float: left;padding:10px;}
    .tab li.on{border-bottom: 2px solid #44ABF7;color:#44ABF7}
	.th th{font-size: 14px;font-weight: normal;padding: 10px 30px;background: #FAFAFA}
	.img{width: 50px;height: 50px;background: #ccc; display: block;margin: 10px auto;}
	.all_style{padding: 3px 10px}
	.orange{background: #FF7F50;color: #fff;}
	.orange:hover{color: #fff;}
    /*.ygboxl>.input-group{border:1px solid green;}*/
</style>
<ul class="tab">
<!-- 	<span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>  --> 
	<li class="on"><a href="<?php  echo $this->createWebUrl('dishes2')?>">商品列表</a></li>
	<li><a href="<?php  echo $this->createWebUrl('dishestype')?>">商品分类</a></li>
</ul>
<!-- <ul class="nav nav-tabs" style="clear: both;">  
    <li class="active"><a href="<?php  echo $this->createWebUrl('dishes2')?>">商品管理</a></li>
    <li><a href="<?php  echo $this->createWebUrl('adddishes')?>">添加商品</a></li>
</ul>  -->
	<div class="top_tip">
		<div class="dishes">
			<a class="btn storewarning  dish_left" href="<?php  echo $this->createWebUrl('adddishes')?>">添加商品</a>
			<button class="btn ygyouhui2  dish_left" id="allshang">批量上架</button>
			<button class="btn storegrey2  dish_left" id="alldown">批量下架</button>
		  	<button class="btn ygshouqian2 dish_left" id="allselect">批量删除</button>
		  	<form method="post" action="" enctype="multipart/form-data" class="dishes">
        <!-- <div class="dishses_font">导入Excel表：</div> -->
        
        <div class="input_box"><input  type="file" name="file_stu" class="dishes_inp"/></div>
        <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        <input type="submit" name="submit2"  value="导入" class="dishes_inp2 btn btn-info btn-sm" />
    </form>
        <a class="btn btn-sm btn-info ms_mb" href="<?php  echo $_W['siteroot'];?>addons/zh_cjdianc/excel/dishes.xls">下载导入模板</a>
		</div>
		&nbsp;
	   	<div class="row ygmartop" style="margin-top: 12px">
	        <form action="" method="get" class="col-md-12" style="padding: 0px;">
	            <div class="col-md-12 ygboxl">
	               <input type="hidden" name="c" value="site" />
	               <input type="hidden" name="a" value="entry" />
	               <input type="hidden" name="m" value="zh_cjdianc" />
	               <input type="hidden" name="do" value="dishes2" />
	                <div class="col-md-5" style="padding: 0px;">
	                    <div class="yg_name">商品名称</div>
	                    <input type="text" name="keywords" class="yg_left form-control" placeholder="请输入商品名称"> 
	                </div>
	<!--                 <div class="col-md-3">
	                    <div class="yg_name">
	                        商品类型
	                    </div>
	                    <select class="ygseledi" style="color: #333;" name="type">
	                        <option value="">不限</option>
	                        <option value="1">外卖</option>
	                        <option value="2">店内</option>
	                        <option value="3">店内+外卖</option>
	                    </select>                
	                </div> -->
	                <div class="col-md-6">
	                    <div class="yg_name">
	                        商品状态
	                    </div>
	                    <select class="ygseledi" style="color: #333;" name="is_show2">
	                      <option value="">不限</option>
	                      <option value="1">已上架</option>
	                      <option value="2">已下架</option>
	                    </select>                
	                </div>
	<!--                 <div class="col-md-3">
	                    <div class="yg_name">
	                        商品分类
	                    </div>
	                    <select class="ygseledi" style="color: #333;" name="type_id">
	                    <option value="">不限</option>
	                    <?php  if(is_array($type)) { foreach($type as $item2) { ?>
	                      <option value="<?php  echo $item2['id'];?>"><?php  echo $item2['type_name'];?></option>
	                      <?php  } } ?>
	                    </select>                
	                </div> -->
	                <div class="col-md-1">
	                    <input type="submit" value="搜索" name="submit" class="btn btn-primary btn-sm"/>
	                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
	                </div>
	            </div>
	        </form>
	  	</div>
	</div>
<div class="main" style="margin-top: 0">
	<div class="col-md-1 nav_box">
		<ul class="nav_name">
			<li <?php  if(!$_GPC['type_id']) { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('dishes2')?>">全部</a></li>
			<?php  if(is_array($type)) { foreach($type as $item2) { ?>
			<li <?php  if($_GPC['type_id']==$item2['id']) { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('dishes2',array('type_id'=>$item2['id']))?>"><?php  echo $item2['type_name'];?></a></li>
			<?php  } } ?>
		
		</ul>
	</div>
    <div class="col-md-11" style="margin-left: 130px">
 <!--        <div class="panel-heading">
            商品列表
        </div> -->
        <div class="">
            <div class="row">
                <table class="col-md-12 list_tabel">
                	<tr class="th"><th  colspan="12">商品列表</th></tr>
                    <tr class="">
                    	<td class="col-md-1">
                            <input type="checkbox" class="allcheck" />
                            <span class="store_inp">全选</span>
                        </td>
                        <td class="">id</td>
                        <td class="">类型</td>
                        <td class="col-md-1">菜品图片</td>
                       
                        <td class="col-md-1">外卖价格</td>
                         <td class="col-md-1">店内价格</td>
                        <td class="col-md-1">餐盒费</td>
                        <td class="col-md-1">库存</td>
                        <td class="col-md-1">总销量</td>
                        <td class="col-md-1">状态</td>
                        <td class="col-md-2">操作</td>
                    </tr>
                     <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                    <tr class="">
                	<td>
                        <input type="checkbox" name="test" value="<?php  echo $item['id'];?>">
                    </td>
                    <td class="store_td1 col-md-1 cainame<?php  echo $item['id'];?>""> <?php  echo $item['id'];?></td>
                    <td>
						<span class="caispan<?php  echo $item['id'];?>" style="display: block;margin-bottom: 5px"><?php  echo $item['name'];?></span>
 						<input style="display: none;width: 100%;" name="inp<?php  echo $item['id'];?>" type="text" value="<?php  echo $item['name'];?>" class="caininp<?php  echo $item['id'];?>"/>
                        <?php  if($item['type']==2) { ?>
                     	<div><button class="btn btn-info all_style">店内</button></div>
                      <?php  } else if($item['type']==1) { ?>
                   		<div><button class="btn btn-success all_style">外卖</button></div>
                      <?php  } else if($item['type']==3) { ?>
                      	<div><button class="btn btn-info all_style">店内</button><button class="btn btn-success all_style" style="margin-left: 10px">外卖</button></div>
                      <?php  } ?>
<!--                         <td class="col-md-1 cainame<?php  echo $item['id'];?>">
 -->                            
                            <script type="text/javascript">
							    $(function(){
							    	$(".caispan<?php  echo $item['id'];?>").each(function(index){
							             $(this).dblclick(function(){
							                $(".caininp<?php  echo $item['id'];?>").eq(index).show().focus();
							                $(".caispan<?php  echo $item['id'];?>").eq(index).hide();							                
							            });
							        });
							        $(".caininp<?php  echo $item['id'];?>").each(function(index){
							            $(this).blur(function(){            
							                $(".caininp<?php  echo $item['id'];?>").eq(index).hide();
							                $(".caispan<?php  echo $item['id'];?>").eq(index).show();
							                var text = $(".caispan<?php  echo $item['id'];?>").html();
							                var inp = $(" input[ name='inp<?php  echo $item['id'];?>' ] ").val();
							                $(".caispan<?php  echo $item['id'];?>").html(inp);
							                // console.log(inp);
							                id = <?php  echo $item['id'];?>;
									        name = inp;
									    	$.ajax({
									    		type:"post",
									    		url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
									    		dataType:"text",
										        data:{id:id,name:name},
										        success:function(data){
										        	console.log(data);
											    }
									    	})
							        
							            });
							        });
							    })
							</script>
                        </td>
                        
                         <td class="col-md-1"><img src="<?php  echo tomedia($item['logo']);?>" alt="" class="img"></td>
                        <td class="col-md-1 money<?php  echo $item['id'];?>">
                        	<span class="moneyspan<?php  echo $item['id'];?>"><?php  echo $item['money'];?></span>
                        	<input style="display: none;width: 100%;" type="text" name="money<?php  echo $item['id'];?>" class="moneyinp<?php  echo $item['id'];?>" value="<?php  echo $item['money'];?>" />
                        	<script type="text/javascript">
							    $(function(){
							    	$(".money<?php  echo $item['id'];?>").each(function(index){
							             $(this).dblclick(function(){
							                $(".moneyinp<?php  echo $item['id'];?>").eq(index).show().focus();
							                $(".moneyspan<?php  echo $item['id'];?>").eq(index).hide();							                
							            });
							        });
							        $(".moneyinp<?php  echo $item['id'];?>").each(function(index){
							            $(this).blur(function(){            
							                $(".moneyinp<?php  echo $item['id'];?>").eq(index).hide();
							                $(".moneyspan<?php  echo $item['id'];?>").eq(index).show();
							                var text = $(".moneyspan<?php  echo $item['id'];?>").html();
							                var inp = $(" input[ name='money<?php  echo $item['id'];?>' ] ").val();
							                $(".moneyspan<?php  echo $item['id'];?>").html(inp);
							                // console.log(inp);
							                id = <?php  echo $item['id'];?>;
									        money = inp;
									    	$.ajax({
									    		type:"post",
									    		url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
									    		dataType:"text",
										        data:{id:id,money:money},
										        success:function(data){
										        	console.log(data);
											    }
									    	})
							        
							            });
							        });
							    })
							</script>
                        </td>
                        <td class="col-md-1 dn_money<?php  echo $item['id'];?>">
                        	<span class="wmspan<?php  echo $item['id'];?>"><?php  echo $item['dn_money'];?></span>
                        	<input style="display: none;width: 100%;" type="text" name="wmoney<?php  echo $item['id'];?>" class="wmoney<?php  echo $item['id'];?>" value="<?php  echo $item['dn_money'];?>">
                        
                    		<script type="text/javascript">
							    $(function(){
							    	$(".dn_money<?php  echo $item['id'];?>").each(function(index){
							             $(this).dblclick(function(){
							                $(".wmoney<?php  echo $item['id'];?>").eq(index).show().focus();
							                $(".wmspan<?php  echo $item['id'];?>").eq(index).hide();							                
							            });
							        });
							        $(".wmoney<?php  echo $item['id'];?>").each(function(index){
							            $(this).blur(function(){            
							                $(".wmoney<?php  echo $item['id'];?>").eq(index).hide();
							                $(".wmspan<?php  echo $item['id'];?>").eq(index).show();
							                var text = $(".wmspan<?php  echo $item['id'];?>").html();
							                var inp = $(" input[ name='wmoney<?php  echo $item['id'];?>' ] ").val();
							                $(".wmspan<?php  echo $item['id'];?>").html(inp);
							                // console.log(inp);
							                id = <?php  echo $item['id'];?>;
									        dn_money = inp;
									    	$.ajax({
									    		type:"post",
									    		url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
									    		dataType:"text",
										        data:{id:id,dn_money:dn_money},
										        success:function(data){
										        	console.log(data);
											    }
									    	})
							        
							            });
							        });
							    })
							</script>
                        </td>
                        <td class="col-md-1 box_money<?php  echo $item['id'];?>">
                        	<span class="boxspan<?php  echo $item['id'];?>"><?php  echo $item['box_money'];?></span>
                        	<input style="display: none;width: 100%;" type="text" name="boxinp<?php  echo $item['id'];?>" class="boxinp<?php  echo $item['id'];?>" value="<?php  echo $item['box_money'];?>">
                        
                    		<script type="text/javascript">
							    $(function(){
							    	$(".box_money<?php  echo $item['id'];?>").each(function(index){
							             $(this).dblclick(function(){
							                $(".boxinp<?php  echo $item['id'];?>").eq(index).show().focus();
							                $(".boxspan<?php  echo $item['id'];?>").eq(index).hide();							                
							            });
							        });
							        $(".boxinp<?php  echo $item['id'];?>").each(function(index){
							            $(this).blur(function(){            
							                $(".boxinp<?php  echo $item['id'];?>").eq(index).hide();
							                $(".boxspan<?php  echo $item['id'];?>").eq(index).show();
							                var text = $(".boxspan<?php  echo $item['id'];?>").html();
							                var inp = $(" input[ name='boxinp<?php  echo $item['id'];?>' ] ").val();
							                $(".boxspan<?php  echo $item['id'];?>").html(inp);
							                // console.log(inp);
							                id = <?php  echo $item['id'];?>;
									        box_money = inp;
									    	$.ajax({
									    		type:"post",
									    		url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
									    		dataType:"text",
										        data:{id:id,box_money:box_money},
										        success:function(data){
										        	console.log(data);
											    }
									    	})
							        
							            });
							        });
							    })
							</script>
                        </td>
                        <td class="col-md-1 num<?php  echo $item['id'];?>"> 
                        	<span class="numspan<?php  echo $item['id'];?>"><?php  echo $item['inventory'];?></span>
                        	<input style="display: none;width: 100%;" type="text" name="numinp<?php  echo $item['id'];?>" class="numinp<?php  echo $item['id'];?>" value="<?php  echo $item['inventory'];?>">
                        
                    		<script type="text/javascript">
							    $(function(){
							    	$(".num<?php  echo $item['id'];?>").each(function(index){
							             $(this).dblclick(function(){
							                $(".numinp<?php  echo $item['id'];?>").eq(index).show().focus();
							                $(".numspan<?php  echo $item['id'];?>").eq(index).hide();							                
							            });
							        });
							        $(".numinp<?php  echo $item['id'];?>").each(function(index){
							            $(this).blur(function(){            
							                $(".numinp<?php  echo $item['id'];?>").eq(index).hide();
							                $(".numspan<?php  echo $item['id'];?>").eq(index).show();
							                var text = $(".numspan<?php  echo $item['id'];?>").html();
							                var inp = $(" input[ name='numinp<?php  echo $item['id'];?>' ] ").val();
							                $(".numspan<?php  echo $item['id'];?>").html(inp);
							                // console.log(inp);
							                id = <?php  echo $item['id'];?>;
									        num = inp;
									    	$.ajax({
									    		type:"post",
									    		url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
									    		dataType:"text",
										        data:{id:id,num:num},
										        success:function(data){
										        	console.log(data);
											    }
									    	})
							        
							            });
							        });
							    })
							</script>
                        </td>
                        <td class="col-md-1 sales<?php  echo $item['id'];?>"> 
                            <span class="xspan<?php  echo $item['id'];?>"><?php  echo $item['sales'];?></span>
                            <input style="display: none;width: 100%;" type="text" name="xinp<?php  echo $item['id'];?>" class="xinp<?php  echo $item['id'];?>" value="<?php  echo $item['sales'];?>">
                        
                            <script type="text/javascript">
                                $(function(){
                                    $(".sales<?php  echo $item['id'];?>").each(function(index){
                                         $(this).dblclick(function(){
                                            $(".xinp<?php  echo $item['id'];?>").eq(index).show().focus();
                                            $(".xspan<?php  echo $item['id'];?>").eq(index).hide();                                            
                                        });
                                    });
                                    $(".xinp<?php  echo $item['id'];?>").each(function(index){
                                        $(this).blur(function(){            
                                            $(".xinp<?php  echo $item['id'];?>").eq(index).hide();
                                            $(".xspan<?php  echo $item['id'];?>").eq(index).show();
                                            var text = $(".xspan<?php  echo $item['id'];?>").html();
                                            var inp = $(" input[ name='xinp<?php  echo $item['id'];?>' ] ").val();
                                            $(".xspan<?php  echo $item['id'];?>").html(inp);
                                            // console.log(inp);
                                            id = <?php  echo $item['id'];?>;
                                            sales = inp;
                                            $.ajax({
                                                type:"post",
                                                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=update&m=zh_cjdianc",
                                                dataType:"text",
                                                data:{id:id,sales:sales},
                                                success:function(data){
                                                    console.log(data);
                                                }
                                            })
                                    
                                        });
                                    });
                                })
                            </script>
                        </td>
                         <td class="col-md-1 dish_btn">
                         <?php  if($item['is_show']==1) { ?>
                         	<button class="btn orange">售卖中</button>
                         	<?php  } else { ?>
                         	<button class="btn">下架</button>
                         	<?php  } ?>
       
 <!--                      <?php  if($item['is_show']==1) { ?>
                              <button  type="button"  data-toggle="modal" data-target="#myModalc<?php  echo $item['id'];?>" class="btn btn-xs storeblue">下架</button>
                            <?php  } else if($item['is_show']==2) { ?>
                            <button type="button"  data-toggle="modal" data-target="#myModalb<?php  echo $item['id'];?>" class="btn btn-xs storegrey">上架</button>
                            <?php  } ?>
                            <input type="hidden" value="<?php  echo $item['is_show'];?>" name="updtype"/> -->
                            </td>
                                
                            <td class="col-md-2 dish_btn">
	                            <?php  if($item['is_show']==1) { ?>
	                              <button  type="button"  data-toggle="modal" data-target="#myModalc<?php  echo $item['id'];?>" class="btn btn-xs storeblue">下架</button>
	                            <?php  } else if($item['is_show']==2) { ?>
	                            <button type="button"  data-toggle="modal" data-target="#myModalb<?php  echo $item['id'];?>" class="btn btn-xs storegrey">上架</button>
	                            <?php  } ?>
                            	<input type="hidden" value="<?php  echo $item['is_show'];?>" name="updtype"/>                            
                                <a href="<?php  echo $this->createWebUrl('adddishes', array('id' => $item['id']))?>" class="storespan btn btn-xs">
                                    <span class="fa fa-pencil"></span>
                                    <span class="bianji">编辑
                                        <span class="arrowdown"></span>
                                    </span>                                
                                </a>
                               
                                <a href="javascript:void(0);" class="storespan btn btn-xs" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">
                                    <span class="fa fa-trash-o"></span>
                                    <span class="bianji">删除
                                        <span class="arrowdown"></span>
                                    </span>
                                </a>
                                <!-- <a class="btn btn-success btn-sm" href="<?php  echo $this->createWebUrl('adddishes', array('id' => $item['id']))?>" title="编辑">编辑</a>
                                &nbsp;&nbsp;<a class="btn btn-success btn-sm" href="<?php  echo $this->createWebUrl('spec',array('dishes_id' => $item['id']));?>" title="添加规格">添加规格</a>
                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php  echo $item['id'];?>">删</button> -->
                            </td>
                        </tr>                          
                     
                    <div class="modal fade" id="myModal<?php  echo $item['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                        </div>
                        <div class="modal-body" style="font-size: 20px">
                            确定删除么？
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a href="<?php  echo $this->createWebUrl('dishes2', array('op' => 'delete', 'delid' => $item['id']))?>" type="button" class="btn btn-info" >确定</a>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="modal fade" id="myModalb<?php  echo $item['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                        </div>
                        <div class="modal-body" style="font-size: 20px">
                            确定上架么？
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a href="<?php  echo $this->createWebUrl('dishes2',array('id'=>$item['id'],'is_show'=>1,'page'=>$_GPC['page'],'keywords'=>$_GPC['keywords'],'type'=>$_GPC['type'],'type_id'=>$_GPC['type_id'],'is_show2'=>$_GPC['is_show2']));?>" type="button" class="btn btn-info" >确定</a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="modal fade" id="myModalc<?php  echo $item['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                        </div>
                        <div class="modal-body" style="font-size: 20px">
                            确定下架么？
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <a href="<?php  echo $this->createWebUrl('dishes2',array('id'=>$item['id'],'is_show'=>2,'page'=>$_GPC['page'],'keywords'=>$_GPC['keywords'],'type'=>$_GPC['type'],'type_id'=>$_GPC['type_id'],'is_show2'=>$_GPC['is_show2']));?>" type="button" class="btn btn-info" >确定</a>
                        </div>
                    </div>
                </div>
            </div>

                <?php  } } ?>
                <?php  if(empty($list)) { ?>
                <tr class="yg5_tr2">
                    <td colspan="12">
                      暂无商品信息
                    </td>
                </tr>
                <?php  } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="text-right we7-margin-top"><?php  echo $pager;?></div>

<script type="text/javascript">
    $(function(){
    	// $("#frame-2").addClass("in");
        $("#frame-2").show();
        $("#yframe-2").addClass("wyactive");
    	// —————批量上架—————
    	$("#allshang").on('click',function(){
            var check = $("input[type=checkbox][class!=allcheck]:checked");
            if(check.length < 1){
                alert('请选择要上架的商品!');
                return false;
            }else if(confirm("确认要上架此商品?")){
                var id = new Array();
                check.each(function(i){
                    id[i] = $(this).val();
                });
               console.log(id)
                $.ajax({
                    type:"post",
                    url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=sj&m=zh_cjdianc",
                    dataType:"text",
                    data:{id:id},
                    success:function(data){
                        console.log(data);      
                        location.reload();
                    }
                })
               
            }
        });

    	// 批量下架
        $("#alldown").on('click',function(){
            var check = $("input[type=checkbox][class!=allcheck]:checked");
            if(check.length < 1){
                alert('请选择要下架的商品!');
                return false;
            }else if(confirm("确认要下架此商品?")){
                var id = new Array();
                check.each(function(i){
                    id[i] = $(this).val();
                });
               console.log(id)
                $.ajax({
                    type:"post",
                    url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=xj&m=zh_cjdianc",
                    dataType:"text",
                    data:{id:id},
                    success:function(data){
                        console.log(data);      
                        location.reload();
                    }
                })
               
            }
        });

        $(".allcheck").on('click',function(){
            var checked = $(this).get(0).checked;
            $("input[type=checkbox]").prop("checked",checked);
        });

        $("#allselect").on('click',function(){
            var check = $("input[type=checkbox][class!=allcheck]:checked");
            if(check.length < 1){
                alert('请选择要删除的商品!');
                return false;
            }else if(confirm("确认要删除此商品?")){
                var id = new Array();
                check.each(function(i){
                    id[i] = $(this).val();
                });
               // console.log(id)
                $.ajax({
                    type:"post",
                    url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=UpdCai&m=zh_cjdianc",
                    dataType:"text",
                    data:{id:id},
                    success:function(data){
                        console.log(data);      
                        location.reload();
                    }
                })
               
            }
        });
        $(".allcheck").on('click',function(){
            var checked = $(this).get(0).checked;
            $("input[type=checkbox]").prop("checked",checked);
        });
        
    })
</script>

