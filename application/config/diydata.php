<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 16/8/3
 * Time: 下午1:44
 */
//这里存放微信模板信息所使用的模板ID
$config['WX_SJTJ'] = 'GCLMW8LVj59vIBGfAnoTjo-98pcxBcZak_4eFornX0g'; //数据提交提醒模板
$config['WX_TK'] = 'jQaPXlMV4Vn2CBM1UaFFcrf9Kp7i-ZInQBk9xvnyq2M'; //退款模板
$config['WX_YY'] = 'EFDja7hX1SvZWD7mW9vbN-ikff4cy6B6LIGdQ0jmXsk'; //预约模板
$config['WX_XC'] = 'vo65oOidcn-zk1Oyh2sSPhM70n4BpwK-e8p683ULPJo'; //行程模板

//限制最低额度
$config['Arrears_CK'] = -10000;

//扣款明细
$config['agenda_pt_sum'] = 2;
$config['agenda_jj_sum'] = 3;
$config['agenda_jj_a1_sum'] = 3;
$config['agenda_jj_a2_sum'] = 4;
$config['agenda_jj_a3_sum'] = 5;
$config['appointment_sum'] = 100;
$config['appointment_sum_name'] = '预约会议_扣款';
$config['appointment_tksum'] = 100;
$config['appointment_tksum_name'] = '预约会议_退款';
$config['agenda_sum'] = 2;
$config['agenda_sum_name'] = '权证服务扣款';


