<?php
/**
 * 本程序由残风社区源码论坛提供
 *
 * www.92php.net
 * 
 * QQQ466421811  承接微擎模块破解、小程序前端、PHP解密
 */


global $_GPC, $_W;
$storeid=$_COOKIE["storeid"];
$cur_store = $this->getStoreById($storeid);
$GLOBALS['frames'] = $this->getMainMenu2();
$pageindex = max(1, intval($_GPC['page']));
$pagesize=10;
$type=isset($_GPC['type'])?$_GPC['type']:'now';
$where=" where uniacid=:uniacid and store_id=:store_id and state>0";
$data[':uniacid']=$_W['uniacid']; 
$data[':store_id']=$_COOKIE["storeid"];
if(isset($_GPC['keywords'])){
	$where.=" and ( goods_name LIKE  concat('%', :name,'%') || id LIKE  concat('%', :name,'%'))";
	$data[':name']=$_GPC['keywords']; 
	$type='all';  
}
if($_GPC['time']){
	$start=strtotime($_GPC['time']['start']);
	$end=strtotime($_GPC['time']['end']);
	$where.=" and kt_time >='{$start}' and kt_time<='{$end}'";
	$type='all';
}else{
	if($type=='ing'){
		$where.=" and state=1";
	}
	if($type=='success'){
		$where.=" and state=2";
	}
	if($type=='fail'){
		$where.=" and state=3";
	}

}
$sql="SELECT * FROM ".tablename('cjdc_group').$where." ORDER BY id DESC";
$total=pdo_fetchcolumn("SELECT * FROM ".tablename('cjdc_group').$where,$data);
$select_sql =$sql." LIMIT " .($pageindex - 1) * $pagesize.",".$pagesize;

$list=pdo_fetchall($select_sql,$data);

//打印
include $this->template('web/group');