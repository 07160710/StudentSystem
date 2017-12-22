<?php require_once 'base.php';?>
<div class="span9">
	<div class="content">
        <div class="module">
			<div class="module-head">
				<h2>添加学生个人信息</h2>
			</div>
			<div class="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong> 提醒 ：</strong>请填写学生个人信息
			</div>
			<form class="form-horizontal row-fluid" method="post" action="insertdo.php">
				<div class="control-group">
					<label class="control-label" for="studentnumber">学号</label>
					<div class="controls">
					<input type="text" name="studentnumber" id="studentnumber" placeholder="填写学号" class="span8">
					<span class="help-inline">必填</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="studentname">学生姓名</label>
					<div class="controls">
					<input type="text" name="studentname" id="name" placeholder="填写姓名" class="span8">
					<span class="help-inline">必填</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="class">学生姓名</label>
					<div class="controls">
					<input type="text" name="class" id="class" placeholder="填写学生班级" class="span8">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="birthday">学生出生日期</label>
					<div class="controls">
					<input type="text" name="birthday" id="birthday" placeholder="填写学生班级" class="form-control">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">性别</label>
					<div class="controls">
					<label class="radio inline">
					<input type="radio" placeholder="性别" name="sex" id="sex" value="男">
					男
					</label> 
					<label class="radio inline">
					<input type="radio" placeholder="性别" name="sex" id="sex" value="女">
					女
					</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="nation">民族</label>
					<div class="controls">
					<input type="text" name="nation" id="nation" placeholder="填写学生民族" class="span8">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<input type='submit' class="btn btn-info" value='确认添加该学生' />
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