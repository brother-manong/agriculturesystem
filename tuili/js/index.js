$(function() {
	$('#submit-btn').on('click',function() {
		$('#result').html('');
		//获取当前已知的动物特征
		var cur_true = [];
		for (var i = 0;i < 24;i++) {
			var checkbox = $('.checkbox'+i);
			if (checkbox.is(':checked')) {
				cur_true.push(checkbox.val());
			}
		}
		
		//规则库
		var rule_list = [];
		rule_list[0] = ['叶子','变黄'];
		rule_list[1] = ['吸引昆虫','凹陷'];
		rule_list[2] = ['腐烂','斑点'];
		rule_list[3] = ['叶子','棕色','干枯卷缩'];
		rule_list[4] = ['果实小','叶子'];
		rule_list[5] = ['果实小','棕色','干枯卷缩','呈卷状'];
		rule_list[6] = ['哺乳动物','有蹄','吸引昆虫'];
		rule_list[7] = ['哺乳动物','嚼反刍动物','吸引昆虫'];
		rule_list[8] = ['凹陷','腐烂','斑点','脐腐病'];
		rule_list[9] = ['根部','开裂','吸引昆虫','裂果'];
		rule_list[10] = ['叶子','呈黄绿色','起泡','吸引昆虫','烟草花叶病'];
		rule_list[11] = ['根部','变黄','枯萎病'];
		rule_list[12] = ['呈卷状','果实小','呈黄绿色','叶子','病毒病'];
		rule_list[13] = ['退绿斑','不规则形霉层','干枯卷缩','叶子','叶霉病'];
		rule_list[14] = ['叶子','棕色','叶斑病'];

		//待测试规则表
		var wait_list = [];
		var if_first_period = true;//第一轮推理不需比较存储器内容是否不变或者测试规则表是否为空
		reasoningPeriod(cur_true,rule_list,[]);
		/**
		 * 推理周期函数
		 * @param  {[type]} cur_true  当前事实/工作存储器
		 * @param  {[type]} rule_list 规则
		 * @param  {[type]} wait_list 待测试规则表
		 * @return {[type]}           [description]
		 */
		function reasoningPeriod(cur_true,rule_list,wait_list) {
			var par_cur_true = cur_true,
				par_cur_true_length = par_cur_true.length;
			var rule_list_length = rule_list.length;
			for (var i = 0;i < rule_list_length;i++) {
				var cur_rule = rule_list[i],//当前规则
					length = cur_rule.length;//当前规则前件后件总数

				var fix_count = 0;//当前规则的前件与事实匹配的数量
				var if_confilct = false;//判断当前规则的前件是否与事实矛盾
				for (var j = 0;j < length - 1;j++) {
					for (var k = 0;k < par_cur_true_length;k++) {
						if (cur_rule[j] == cur_true[k]) {
							fix_count++;
						}
					}
				}
				if (fix_count === length-1) {
					cur_true.push(cur_rule[length - 1]);
				} else {
					wait_list.push(cur_rule);
				}
			}

			var child_cur_true_lenght = cur_true.length;
				
			if((child_cur_true_lenght == par_cur_true_length) || !wait_list.length) {
				if (cur_true[child_cur_true_lenght-1] == '脐腐病' 
					|| cur_true[child_cur_true_lenght-1] == '裂果' 
					|| cur_true[child_cur_true_lenght-1] == '烟草花叶病' 
					|| cur_true[child_cur_true_lenght-1] == '枯萎病' 
					|| cur_true[child_cur_true_lenght-1] == '病毒病' 
					|| cur_true[child_cur_true_lenght-1] == '叶霉病' 
					|| cur_true[child_cur_true_lenght-1] == '叶斑病') {

					if(cur_true[child_cur_true_lenght-1]=='脐腐病') {
					$('#result').html(cur_true[child_cur_true_lenght-1]);					
					$('#fangzhi').html('可以在土壤中拌入一定的石灰，以改善土壤的PH值以及补充一定的钙元素；另外不要过度施氮肥，高氮的肥料会使土壤板结而导致钙也无法被番茄吸收。');
					}
					else if(cur_true[child_cur_true_lenght-1] == '裂果' ){
					$('#result').html(cur_true[child_cur_true_lenght-1]);					
					$('#fangzhi').html('挑选一些优质的不易开裂的番茄品种，另外在番茄结果时控制好浇水频率，多雨季节要注意防涝。');
					}
					else if(cur_true[child_cur_true_lenght-1] == '烟草花叶病' ){
					$('#result').html(cur_true[child_cur_true_lenght-1]);					
					$('#fangzhi').html('如果你吸烟的话，在接触番茄时必须彻底把手清洗干净，目前烟草花叶病没有彻底的根治方法，如果一旦番茄感染，就必须铲除植株会销毁，并且避免在同一区域再种植番茄。');
					}
					else if(cur_true[child_cur_true_lenght-1] == '枯萎病' ){
					$('#result').html(cur_true[child_cur_true_lenght-1]);					
					$('#fangzhi').html('镰刀菌和轮枝菌从土壤中消失需要4-6年的时间，因此需要把番茄移到其它的地方。');
					}
					else if(cur_true[child_cur_true_lenght-1] == '叶斑病' ){
					$('#result').html(cur_true[child_cur_true_lenght-1]);					
					$('#fangzhi').html('保持番茄植株之间的通风，在种植番茄的时候保留足够的间距，另外浇水的时候要避免浇到叶片，可以采用根灌或者是用塑料花天薄膜覆盖地表，也能够提高番茄抗病性。');
					}

				} else {
					$('#result').html('请输入再详细点的信息');
					$('#fangzhi').html('无');
				}
				return false;
			} else {
				reasoningPeriod(cur_true,wait_list,[]);
			}
		}
	})
})