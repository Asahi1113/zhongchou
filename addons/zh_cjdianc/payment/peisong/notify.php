<?php
/**
 * 本程序由残风社区源码论坛提供
 *
 * www.92php.net
 * 
 * QQQ466421811  承接微擎模块破解、小程序前端、PHP解密
 */


define('IN_MOBILE', true);
require '../../../../framework/bootstrap.inc.php';
global $_W, $_GPC;
$input = file_get_contents('php://input');
$isxml = true;
 $data = json_decode($input, true);
pdo_update('cjdc_order',array('dd_info'=>$input),array('order_num'=>$data['order_id']));
if($data['order_status']==4){
	pdo_update('cjdc_order',array('state'=>4,'complete_time'=>date('Y-m-d H:i:s',time())),array('order_num'=>$data['order_id']));
}
load()->web('common');
load()->model('mc');
load()->func('communication');
$_W['uniacid'] = $_W['weid'] = intval($get['attach']);

$_W['uniaccount'] = $_W['account'] = uni_fetch($_W['uniacid']);
$_W['acid'] = $_W['uniaccount']['acid'];
$paySetting = uni_setting($_W['uniacid'], array('payment'));








