<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--兼容低版本浏览器-->
		<!--[if lt IE 9]>
		<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--引入bootstrap样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/dist/css/bootstrap.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css"/>
		<!--引入jquery-->
		<script src="lib/jQuery/jquery-1.11.0.js"></script>
	
	</head>
	<body>
		<!--引入头部-->
		<?php
		include_once ("header.php");
		?>

		<div class="container">
			<h4>投资列表</h4>
			<div class="State">
				<span>标的状态</span>&emsp;&emsp;
				<div class="btn-group" role="group" aria-label="Default button group">
					<button type="button" name="bidRequestState" class="btn btn-default">
					&emsp;全部&emsp;
					</button>
					<button type="button" name="bidRequestState" class="btn btn-default">
					&emsp;招标中&emsp;
					</button>
					<button type="button" name="bidRequestState" class="btn btn-default">
					&emsp;还款中&emsp;
					</button>
				</div>
			</div>
			<!--投资状态表格-->
			<div class="bs-example" data-example-id="hoverable-table">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>借款人</th>
							<th>借款标题</th>
							<th>年利率</th>
							<th>金额</th>
							<th>还款方式</th>
							<th>进度</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody id="investdata">
						
					</tbody>
				</table>
			</div>

		</div>

		<!--引入尾部-->
		<?php
		include_once ("footer.php");
		?>
		<script src="lib/jqueryTemplate/jquery.tmpl.js" type="text/javascript"></script>
		<!--引入bootstrapjs-->
		<script src="lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<!--自定义特效-->
		<script src="src/javascript/index.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/html" id="scrtem">
			<tr>
				<th scope="row">${userid}</th>
				<td>${borrowTitle}</td>
				<td class="text-info">${currentRate}%</td>
				<td class="text-info">${borrowAmount}</td>
				<td>${repayment}</td>
				<td>${(alreadyAmount/borrowAmount*100).toFixed(2)}%</td>
				<td><button type="button" class="btn btn-danger btn-sm" href="borrow_info.php?id=${borrowid}">查看</button></td>
			</tr>
			
		</script>
		<script type="text/javascript">
			$.get('api/getInvestList.php',function(dataadd){
//				console.log(dataadd)
//				console.log(dataadd[0].borrowid)
				var htmlstr=$('#scrtem').tmpl(dataadd)
				$('#investdata').html(htmlstr)
				
			},'json')
		</script>
	
	
	</body>
</html>
