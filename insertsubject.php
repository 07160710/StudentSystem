<?php require_once 'base.php';?>
<div class="span9">
	<div class="content">
        <div class="module">
			<div class="module-head">
				<h2>添加新的科目信息</h2>
			</div>
			<div class="alert">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong> 提醒 ：</strong>请填写新的科目信息
			</div>
			<form class="form-horizontal row-fluid" method="post" action="insertsubjectdo.php">
				<div class="control-group">
					<label class="control-label" for="basicinput">选择科目</label>
						<div class="controls">
							<select tabindex="1" data-placeholder="PHP" class="span8" name="subject">
								<option value="PHP">PHP</option>
								<option value="Java">Java</option>
								<option value="JavaScript">JavaScript</option>
								<option value="IOS课程">IOS课程</option>
								<option value="Android">Android</option>
							</select>
						</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="teacher">授课老师</label>
					<div class="controls">
					<input type="text" name="teacher" id="teacher" placeholder="填写老师姓名" class="span8">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="content">科目简介</label>
					<div class="controls">
					<input type="text" name="content" id="content" placeholder="填写课程简介" class="span8">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
					<input type='submit' class="btn btn-info" value='确认添加该科目信息' />
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