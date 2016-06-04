<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
namespace Home\Controller;
/**
* 文档模型控制器
* 文档模型列表和详情
*/
class WeddingController extends HomeController {

	public function reply($article_id, $name, $willing, $tel_num, $bless){
		if(IS_POST){
			// do post thing
			$weddingInfo = M("WeddingInfo");
			$isExist = $this->isExist($weddingInfo, $article_id)
			$data = [];
			$data['article_id'] = $article_id;
			$data['name'] = $name;
			$data['willing'] = $willing;
			$data['tel_num'] = $tel_num;
			$data['bless'] = $bless;
			$data['create_time'] = time(); //
			$data['update_time'] = time(); //
			if($weddingInfo->data($data)){
				$result = $weddingInfo->add();
			}
			if($result){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				echo time();
				echo $result;

			}
			
		}
	}
	
}
