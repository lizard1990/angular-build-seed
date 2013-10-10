<?php

	$method = $_SERVER['REQUEST_METHOD'];
	
	if($method == 'GET'){
		
		if($uri[4] == 0){
			//指定系统的所有IP列表
			$page = intval($uri[5]); //请求页码
			$preNum = 7;	//每页条数
			$maxNum = 18;	//总条数
				
			$maxPage = ceil($maxNum / $preNum);
				
			$result = new stdClass();
			$result->page = $page;
			$result->maxNum = $maxNum;
			$result->maxPage = $maxPage;
			$result->items = array();
			if($page <= $maxPage){
			
				$result->hasMore = true;
			
				for($i = 0; (($page - 1) * $preNum) < $maxNum && $i < min($preNum, $maxNum - ($page - 1) * $preNum); $i++){
					mt_srand((double)microtime()*1000000);
			
					$item = new stdClass();
					$item->ipId = mt_rand(1, 1000);
					$item->appId = mt_rand(1, 1000);
					$item->ip = '192.168.1.1';
					$item->validity = mt_rand(0, 1);
					$item->info = urlencode(mb_convert_encoding(str_repeat('流弊流弊流弊流弊',mt_rand(1, 10)), 'utf-8', 'gbk'));
					$item->begin = '2013-10-20';
					$item->end = -1;
					
					$result->items[] = $item;
				}
			}else{
				$result->hasMore = false;
			}
			
			echo json_encode($result);
		
		}else{
			//指定系统的指定ip信息
			mt_srand((double)microtime()*1000000);
				
			$item = new stdClass();
			$item->ipId = mt_rand(1, 1000);
			$item->appId = mt_rand(1, 1000);
			$item->ip = '192.168.1.1';
			$item->validity = mt_rand(0, 1);
			$item->info = urlencode(mb_convert_encoding(str_repeat('流弊流弊流弊流弊',mt_rand(1, 10)), 'utf-8', 'gbk'));
			$item->begin = '2013-10-20';
			$item->end = -1;
			
			echo json_encode($item);			
		}
			
	
	}elseif($method == 'POST'){
	
		//接受到post提交的数据，格式为json
		$data = json_decode(file_get_contents("php://input"));
	
		//处理单纯的状态修改， 包括：有效性
		if($uri[3] == 'onlyStatus'){
	
			sleep(1);
			echo '{"status": '.mt_rand(0, 1).'}';	
		
		}elseif($uri[3] == 'update'){
			
			//更新指定应用系统
			sleep(1);
			echo '{"status": '.mt_rand(0, 1).'}';
		}
	
	}elseif($method == 'PUT'){
	
		//$data = json_decode(file_get_contents("php://input"));
			
		sleep(1);
		echo '{"status":'.mt_rand(0, 1).'}';
	
	}elseif($method == 'DELETE'){
	
		//删除
		sleep(2);
		echo '{"status":1}';
	
	}