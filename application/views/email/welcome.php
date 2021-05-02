<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<style>
			body{font-family: sans-serif; font-size:14px; color:#101010;}
			table{
				width:70%;
				margin:5% 15%;
			}
			table, th, td {
				border: 2px solid #dadada;
				border-collapse: collapse;
			}
			th, td {
				padding: 10px 15px	;
				text-align: left;
			}
			
			.logo{text-align:center; margin:7px 0; width:100%;}
			.logo img{ height:100px;}
			.no_mar_top{margin-top:none;}
			.no_mar_bottom{margin-bottom:none;}
			.text-left{text-align:left; width:50%; float:left}
			.text-right{text-align:right; width:50%; float:left}
			
			@media(max-width:991px){
				body{
					font-size:12px;
				}
				th, td {
					font-size:12px
				}
				body{font-size:12px;} 
				table{
					width:90%;
					margin:5%;
				}
				.parag{font-size:12px;}
				.container{width:100%; margin:0;}
				.logo{text-align:center; margin:7px 0; width:100%;}
				.logo img{height:100px;}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<table>
				<tr>
					<td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
						<h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;">
							Welcome <?=$user_data->u_name?>!
						</h1>
					</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff" style="padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
						<p class="lead">
						Thank you for choosing us. please verify your email <a href=" <?=site_url();?>/User/email_verfication/<?=$user_data->u_id?>">Click Here...</a> <b>XYZ Website</b>
						</p> 
					<hr />
                </td>
            </tr>
			</table>
		 </div>
	</body>
</html>