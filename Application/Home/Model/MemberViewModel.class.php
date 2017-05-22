<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class MemberViewModel extends ViewModel {
   public $viewFields = array(
     'member'=>array('id','username','email','password','avatar','create_at','update_at','login_ip','status','type'),
     'member_oauth'=>array('qq','sina','github', 'weixin','_on'=>'member_oauth.user_id=member.id'),
   );
 }

?>