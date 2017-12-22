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
$id=$_REQUEST['id'];
$sql="select * from subject where id=$id";
$r1=mysql_query($sql);
$row1=mysql_fetch_array($r1);
?>
<div class="span9">
	<div class="content">
        <div class="module">
			<div class="module-head">
				<h2>修改科目信息</h2>
			</div>
			<div class="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong> 提醒 ：</strong>请修改该科目信息
			</div>
			<form class="form-horizontal row-fluid" method="post" action="editsubjectdo.php">
				 <div class="control-group">
				 	<div class="controls">
				        <input type='hidden' name='id' value='<?=$row1['id']?>' />
				   </div>
				 </div>
				<div class="control-group">
					<label class="control-label" for="basicinput">选择科目</label>
						<div class="controls">
							<select tabindex="1" data-placeholder="PHP" class="span8" name="subject">
								<option value='PHP'<?=$row1['subjectname']=='男'?'selected':''?> >PHP</option>
								<option value='Java'<?=$row1['subjectname']=='Java'?'selected':''?> >Java</option>
								<option value='JavaScript'<?=$row1['subjectname']=='JavaScript'?'selected':''?> >JavaScript</option>
								<option value='IOS课程'<?=$row1['subjectname']=='IOS课程'?'selected':''?> >IOS课程</option>
								<option value='Android'<?=$row1['subjectname']=='Android'?'selected':''?> >Android</option>
							</select>
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="teacher">授课老师</label>
					<div class="controls">
					<input type="text" name="teacher" id="teacher" placeholder="填写老师姓名" class="span8" value='<?=$row1['teacher']?>' />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="content">科目简介</label>
					<div class="controls">
					<input type="text" name="content" id="content" placeholder="填写课程简介" class="span8" value='<?=$row1['content']?>' />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<input type='submit' class="btn btn-info" value='确认修改该科目信息' />
				    </div>
				</div>
			</form>
		    <div class="module-body">
		    </div>
        </div>
    </div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
</body>