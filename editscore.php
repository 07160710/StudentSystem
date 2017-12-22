<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

require_once 'conn.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from score where id=$id";
$result = mysql_query ($query);
$row = mysql_fetch_array ($result);
?>
<div class="span9">
	<div class="content">
        <div class="module">
			<div class="module-head">
				<h2>修改学生成绩信息</h2>
			</div>
			<div class="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong> 提醒 ：</strong>请修改学生成绩信息
			</div>
			<form class="form-horizontal row-fluid" method="post" action="editscoredo.php">
				<div class="control-group">
					<div class="control-group">
				 	<div class="controls">
				        <input type='hidden' name='id' value='<?=$row ['id']?>' />
				    </div>
				    </div>
					<label class="control-label" for="studentid">学号</label>
					<div class="controls">
					<input type="text" name="studentid" id="studentid" placeholder="填写学生学号" class="span8" value="<?=$row ['studentId']?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="birthday">考试时间</label>
					<div class="controls">
					<input type="text" class="form-control" placeholder="点击选取考试时间" id='birthday' name='term' value="<?=$row ['term']?>" />
				    </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="basicinput">选择科目</label>
						<div class="controls">
							<select tabindex="1" data-placeholder="考试科目" class="span8" name="subject">
								<option value='PHP'<?=$row['subject']=='男'?'selected':''?> >PHP</option>
								<option value='Java'<?=$row['subject']=='Java'?'selected':''?> >Java</option>
								<option value='JavaScript'<?=$row['subject']=='JavaScript'?'selected':''?> >JavaScript</option>
								<option value='IOS课程'<?=$row['subject']=='IOS课程'?'selected':''?> >IOS课程</option>
								<option value='Android'<?=$row['subject']=='Android'?'selected':''?> >Android</option>
							</select>
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="mark">成绩</label>
					<div class="controls">
					<input type="text" name="mark" id="mark" placeholder="填写学生成绩" class="span8" value="<?=$row ['mark']?>" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<input type='submit' class="btn btn-success" value='确认添加该学生成绩' />
				    </div>
				</div>
			</form>
		    <div class="module-body">
		    </div>
        </div>
    </div>
</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
</body>