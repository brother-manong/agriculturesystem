<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>病虫害识别系统</title>
	<link rel="stylesheet" type="text/css" href="layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
	<div class="layui-container container"> 
		<h1>病虫害识别系统</h1>
		<form class="layui-form">
			<div class="layui-form-item">
				<label class="layui-form"><center>请选择已知的病害症状</center></label>
				<div class="layui-input-block">
					<input type="checkbox" class="checkbox0" name="claw" title="底部" value="底部">
					<input type="checkbox" class="checkbox1" name="hoof" title="根部" value="根部">
					<input type="checkbox" class="checkbox2" name="breast" title="叶子" value="叶子">
					<input type="checkbox" class="checkbox3" name="eatMeat" title="起泡" value="起泡">
					<input type="checkbox" class="checkbox4" name="bird" title="开裂" value="开裂">
					<input type="checkbox" class="checkbox5" name="canFly" title="斑点" value="斑点">
					<input type="checkbox" class="checkbox6" name="goodAtFly" title="呈黄绿色" value="呈黄绿色">
					<input type="checkbox" class="checkbox7" name="cantFly" title="吸引昆虫" value="吸引昆虫">
					<input type="checkbox" class="checkbox8" name="tawny" title="凹陷" value="凹陷">
					<input type="checkbox" class="checkbox9" name="hair" title="腐烂" value="腐烂">
					<input type="checkbox" class="checkbox10" name="plumage" title="感染" value="感染">
					<input type="checkbox" class="checkbox11" name="canLayEgg" title="变黄" value="变黄">
					<input type="checkbox" class="checkbox12" name="canSwim" title="棕色" value="棕色">
					<input type="checkbox" class="checkbox13" name="tooth" title="斑驳" value="斑驳">
					<input type="checkbox" class="checkbox14" name="longLeg" title="呈卷状" value="有长腿">
					<input type="checkbox" class="checkbox15" name="longNeck" title="深褐色" value="深褐色">
					<input type="checkbox" class="checkbox16" name="eye" title="果实小" value="果实小">
					<input type="checkbox" class="checkbox17" name="mammal" title="不规则形瘤状结" value="不规则形瘤状结">
					<input type="checkbox" class="checkbox18" name="carnivorous" title="退绿斑" value="退绿斑">
					<input type="checkbox" class="checkbox19" name="hoofedAnimal" title="不规则形霉层" value="不规则形霉层">
					<input type="checkbox" class="checkbox20" name="jue" title="干枯卷缩" value="干枯卷缩">
					<input type="checkbox" class="checkbox21" name="spot" title="灰黑色病斑" value="灰黑色病斑">
					<input type="checkbox" class="checkbox22" name="stripe" title="水浸状暗绿色病斑" value="水浸状暗绿色病斑">
					<input type="checkbox" class="checkbox23" name="blackAndWhite" title="黑褐色圆形斑点" value="黑褐色圆形斑点">
				</div>
			</div>

			<div class="layui-form-item">
				<div class="layui-input-block">
					<button class="layui-btn" lay-submit lay-filter="formDemo" id="submit-btn">确定</button>
					<button type="reset" class="layui-btn lay-filter">重置</button>
				</div>
			</div>
		</form>

		<div>
			<p>结果：</p>
			<div id="result" class="layui-bg-gray">
			</div>
			<p>防治：</p>
			<div id="fangzhi" class="layui-bg-gray">
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="layui/layui.js"></script>
	<script type="text/javascript">
		layui.use(['form','layer'],function() {
			var form = layui.form;
			form.on('submit(formDemo)',function(data) {
				return false;
			})
		})
	</script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>