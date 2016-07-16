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
			// $isExist = $this->isExist($weddingInfo, $article_id)
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
				$res = successJson("insert WeddingInfo OK");
				echo json_encode($res);
			}
			
		}
	}

	public function blessList($article_id, $page, $count){
		if(IS_GET){
			// do post thing
			$weddingInfo = M("WeddingInfo");
			// $isExist = $this->isExist($weddingInfo, $article_id)
			$map = [
				"article_id"=>$article_id
			];
			trace("id=$article_id","","debug");
			if($page == 0){
				$result = $weddingInfo->where($map)->limit($count)->order("id")->select();
			}else{
				$result = $weddingInfo->where($map)->limit($page*$count)->order("id")->select();
				// trace($result,"","debug");
				if($result != null){
					$maxNum = $result[count($result)-1]['id'];
					$map['id'] = array('gt',$maxNum);
					$result = $weddingInfo->where($map)->order("id")->limit($count)->select();
				}
			}
			if($result != null){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$res = successJson("select WeddingInfo OK");
				$res["blessList"] = $result;
				echo json_encode($res);
			}else{
				$res = failureJson("WeddingInfo has all been showed or select WeddingInfo Failed");
				echo json_encode($res);
			}
		}
	}

	public function blessWall($article_id, $bless_name, $bless_word, $bless_gift, $tel_num="13000000000"){
		if(IS_POST){
			// do post thing
			$weddingBlesswall = M("WeddingBlesswall");
			// $isExist = $this->isExist($weddingBlesswall, $article_id)
			$data = [];
			$data['article_id'] = $article_id;
			$data['bless_name'] = $bless_name;
			$data['bless_word'] = $bless_word;
			$data['bless_gift'] = $tel_num;
			$data['tel_num'] = $tel_num;
			$data['create_time'] = time(); //
			$data['update_time'] = time(); //
			if($weddingBlesswall->data($data)){
				$result = $weddingBlesswall->add();
			}
			if($result){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$res = successJson("insert WeddingBlesswall OK");
				echo json_encode($res);
			}
			
		}else if(IS_GET){
		}
	}

	public function blessWallGetListById($article_id, $page, $count){
		if(IS_GET){
			// do post thing
			$weddingBlesswall = M("WeddingBlesswall");
			// $isExist = $this->isExist($weddingBlesswall, $article_id)
			$map = [
				"article_id"=>$article_id
			];
			trace("id=$article_id","","debug");
			if($page == 0){
				$result = $weddingBlesswall->where($map)->limit($count)->order("id desc")->select();
			}else{
				$result = $weddingBlesswall->where($map)->limit($page*$count)->order("id desc")->select();
				// trace($result,"","debug");
				if($result != null){
					$maxNum = $result[count($result)-1]['id'];
					$map['id'] = array('lt',$maxNum);
					$result = $weddingBlesswall->where($map)->order("id desc")->limit($count)->select();
				}
			}
			if($result != null){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$res = successJson("select WeddingBlesswall OK");
				$res["blessWall"] = $result;
				echo json_encode($res);
			}else{
				$res = failureJson("WeddingBlesswall has all been showed or select WeddingBlesswall Failed");
				echo json_encode($res);
			}
		}
	}

	/*
	 * @param article_id 文章id
	 * @param max_num 在blessWall表中获取id小于等于max_num的行
	 * @param count 获取的最大个数
	 */
	public function blessWallGetListByIdDesc($article_id, $max_num, $count){
		if(IS_GET){
			// do post thing
			$weddingBlesswall = M("WeddingBlesswall");
			// $isExist = $this->isExist($weddingBlesswall, $article_id)
			$map = [
				"article_id"=>$article_id
			];
			trace("id=$article_id","","debug");
			if(1){
				$maxNum = $max_num;
				$map['id'] = array('lt',$maxNum);
				$result = $weddingBlesswall->where($map)->order("id desc")->limit($count)->select();
			}
			if($result != null){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$res = successJson("select WeddingBlesswall OK");
				$res["blessWall"] = $result;
				echo json_encode($res);
			}else{
				$res = failureJson("WeddingBlesswall has all been showed or select WeddingBlesswall Failed");
				echo json_encode($res);
			}
		}
	}

	/*
	 * @param article_id 文章id
	 * @param min_num 在blessWall表中获取id大于min_num的行
	 * @param count 获取的最大个数
	 */
	public function blessWallGetListByIdInc($article_id, $min_num, $count){
		if(IS_GET){
			// do post thing
			$weddingBlesswall = M("WeddingBlesswall");
			// $isExist = $this->isExist($weddingBlesswall, $article_id)
			$map = [
				"article_id"=>$article_id
			];
			trace("id=$article_id","","debug");
			if(1){
				$minNum = $min_num;
				$map['id'] = array('gt',$minNum);
				$result = $weddingBlesswall->where($map)->order("id")->limit($count)->select();
			}
			if($result != null){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$res = successJson("select WeddingBlesswall OK");
				$res["blessWall"] = $result;
				echo json_encode($res);
			}else{
				$res = failureJson("WeddingBlesswall has all been showed or select WeddingBlesswall Failed");
				echo json_encode($res);
			}
		}
	}
	
}
