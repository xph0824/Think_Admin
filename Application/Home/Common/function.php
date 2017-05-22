<?php 
function getCarInfoByCarTypeID($id)
{
	return D('CarInfoView')->where('car_type.id='.$id)->find();
}

function getOilInfo($id)
{
	return M('car_oil')->find($id);
}

function totalPrice($data)
{
	return $data['total']+F('service_price')-$data['card_price'];
}

function jsonToHtml($json)
{
	$array = objectToArray(json_decode($json));
	$temp = array();

	if(array_key_exists('car_oil', $array)){
		$oil = getOilInfo($array['car_oil']);
		echo "<tr><td>机油</td><td>{$oil['title']} {$oil['price']}元</td></tr>";
	}
	if(array_key_exists('jilv', $array)){
		echo "<tr><td>机油滤清器</td><td>{$array['jilv']}元</td></tr>";
	}
	if(array_key_exists('qilv', $array)){
		echo "<tr><td>空气滤清器</td><td>{$array['qilv']}元</td></tr>";
	}
	if(array_key_exists('konglv', $array)){
		echo "<tr><td>空调滤清器</td><td>{$array['konglv']}元</td></tr>";
	}
	if(array_key_exists('front_pian', $array)){
		echo "<tr><td>前刹车片</td><td>{$array['front_pian']}元</td></tr>";
	}
	if(array_key_exists('back_pian', $array)){
		echo "<tr><td>后刹车片</td><td>{$array['back_pian']}元</td></tr>";
	}
	if(array_key_exists('front_pan', $array)){
		echo "<tr><td>前刹车盘</td><td>{$array['front_pan']}元</td></tr>";
	}
	if(array_key_exists('back_pan', $array)){
		echo "<tr><td>后刹车盘</td><td>{$array['back_pan']}元</td></tr>";
	}
	if(array_key_exists('huohuasai', $array)){
		echo "<tr><td>火花塞</td><td>{$array['huohuasai']}元</td></tr>";
	}
	if(array_key_exists('shacheyou', $array)){
		echo "<tr><td>刹车油</td><td>{$array['shacheyou']}元</td></tr>";
	}
	if(array_key_exists('neishi', $array)){
		echo "<tr><td>内饰清洗</td><td>{$array['neishi']}元</td></tr>";
	}
	if(array_key_exists('kt', $array)){
		echo "<tr><td>空调清洗</td><td>{$array['kt']}元</td></tr>";
	}
	if(array_key_exists('jicang', $array)){
		echo "<tr><td>发动机舱清洗</td><td>{$array['jicang']}元</td></tr>";
	}
	if(array_key_exists('lungu', $array)){
		echo "<tr><td>轮毂清洗</td><td>{$array['lungu']}元</td></tr>";
	}
}

/**
 * 对象转数组
 * @param  [type] $obj [description]
 * @return [type]      [description]
 */
function objectToArray($obj){
    $arr = is_object($obj) ? get_object_vars($obj) : $obj;
    if(is_array($arr)){
        return array_map(__FUNCTION__, $arr);
    }else{
        return $arr;
    }
}

 ?>