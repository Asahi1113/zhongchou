<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_cjdianc/template/public/ygcss.css">
<style type="text/css">
    .storeset{border-bottom: 1px solid #eee;padding-bottom: 10px;}
    .storesetfont{font-size: 14px;font-weight: bold;}
    .ygstoreimg>.input-group:nth-child(1){float: left;width: 50%;margin-right: 30px;}
    .ygstoreimg>.input-group:nth-child(2){float: left;width: 50px;}
    .btn{padding: 7px 12px;}
    .ygstoreimg>.input-group:nth-child(2)>img{width: 45px;height: 35px;margin-top: -7px;}
    .wyheader{height: 40px;}
</style>
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
    input[type="radio"] + label::before {
        content: "\a0"; /*不换行空格*/
        display: inline-block;
        vertical-align: middle;
        font-size: 16px;
        width: 1em;
        height: 1em;
        margin-right: .4em;
        border-radius: 50%;
        border: 2px solid #ddd;
        text-indent: .15em;
        line-height: 1; 
    }
    input[type="radio"]:checked + label::before {
        background-color: #44ABF7;
        background-clip: content-box;
        padding: .1em;
        border: 2px solid #44ABF7;
    }
    input[type="radio"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">权限设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                <span class="ygxian"></span>
                <div class="ygdangq storesetfont">权限设置</div>
            </div>
            <div class="panel-body">
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台模式</label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="mored" type="radio" name="msgn" value="1" <?php  if($item['msgn']==1 || empty($item['msgn'])) { ?>checked<?php  } ?> />
                            <label for="mored">多店</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="moredan" type="radio" name="msgn" value="2" <?php  if($item['msgn']==2) { ?>checked<?php  } ?> /> 
                            <label for="moredan">单店</label>
                        </span>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分功能</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="jfgn" value="1" <?php  if($item['jfgn']==1 || empty($item['jfgn'])) { ?> checked <?php  } ?> />
                            <label for="emailwy1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="jfgn" value="2" <?php  if($item['jfgn']==2) { ?> checked <?php  } ?> />
                            <label for="emailwy2">关闭</label>
                        </label>    
                    </div>
                </div>
                      <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销功能</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="fxgn1" name="fxgn" value="1" <?php  if($item['fxgn']==1 || empty($item['fxgn'])) { ?>checked<?php  } ?> />
                            <label for="fxgn1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="fxgn2" name="fxgn" value="2" <?php  if($item['fxgn']==2) { ?>checked<?php  } ?> />
                            <label for="fxgn2">关闭</label>
                        </label>
                        
                    </div>
                    
                </div>
                       <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">会员功能</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="hygn1" name="hygn" value="1" <?php  if($item['hygn']==1 || empty($item['hygn'])) { ?>checked<?php  } ?> />
                            <label for="hygn1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="hygn2" name="hygn" value="2" <?php  if($item['hygn']==2) { ?>checked<?php  } ?> />
                            <label for="hygn2">关闭</label>
                        </label>
                        
                    </div>
                    
                </div>

            </div>
         
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-15").show();
        $("#yframe-15").addClass("wyactive");
    })
</script>