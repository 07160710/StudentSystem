<?php require_once 'base.php';?>
<?php
require_once 'conn.php';
// 访问student
$query="select * from score";
$result=mysql_query($query);
$sql='select distinct(subject) from score';
$km=mysql_query($sql);
?>
                        <div class="span9">
                            <div class="module">
                                <div class="module-head">
                                    <h2>学生成绩信息</h2>
                                        <div class="module-body table">
                                    <div class="panel-heading"><a href='insertscore.php' class="btn btn-large btn-success">增加学生成绩信息</a></div>
                                </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                <thead>
                                    <tr>
                                        <th>学号</th>
										<th>学期</th>
										<th>科目</th>
										<th>成绩</th>
										<th>操作</th>
                                    </tr>
                                </thead>
                                        <tbody>
                        <?php
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo "<tr class='$linecolor'>";
                            echo "<td>" . $row['studentId'] . "</td>";
                            echo "<td>" . $row['term'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['mark'] . "</td>";
                            echo "<td><a href='editscore.php?id=" . $row['id'] . "' class='btn btn-small btn-success'>修改</a>&nbsp;&nbsp;<a href='deletescore.php?id=" . $row['id'] . "' class='btn btn-small btn-danger'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form class="form-horizontal row-fluid">
                            <div class="control-group">
                               输入学号：<input type="text" id="studentno" name="studentno" />&nbsp;&nbsp;
                               <input type='button' class="btn btn-success" value='查询该学号学生' name="btn" onclick="showTable1()" /> 
                           </form>
                           <hr/>
                           <div id="con1"></div>
                            <hr/>
                        <form class="form-horizontal row-fluid">
                            <div class="control-group">
                               输入学号：<input type="text" id="tx1" name="tx1" /><br />
                               请选择要查询成绩的科目：
	                            <select name="sel" id="sel">
                                 <option value="">没有选择科目</option>
                                    <?php
                                        while($kms=mysql_fetch_array($km)){
                                        	echo '<option value="'.$kms['subject'].'">';
				                            echo $kms['subject'];
				                            echo '</option>';
                                        }
                                    ?>
	                            </select><br/>
	                            <input type='button' class="btn btn-success" value='查询该学生' name="sub" onclick="showTable()" /> 
                            </div>
	                    </form>
                        <hr/>  
                        <div id="con"></div>   
                        </div>
                        <!-- 通过学号和科目查找查找成绩 -->
                    <script>
	                    function showTable(){
		                    var xmlhttp = null ;
		                        try{
			                     xmlhttp = new window.XMLHttpRequest();
		                        }catch(e){
			                     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		                        }
		                        var sel = document.getElementById('sel').value;
		                        var tx1 = document.getElementById('tx1').value;
		                        xmlhttp.open("GET","searchgpdo.php?sel="+sel+"&tx1="+tx1,true); 
		                        xmlhttp.onreadystatechange=function(){  
			                    if(xmlhttp.readyState==4 && xmlhttp.status==200){  
				                document.getElementById('con').innerHTML = xmlhttp.responseText;
				                xmlhttp = null;
			                 }
		                  }
		                        xmlhttp.send();
	                     }
                    </script>
<!-- 通过学号查找成绩 -->
                    <script>
                        function showTable1(){
                            var xmlhttp = null ;
                                try{
                                 xmlhttp = new window.XMLHttpRequest();
                                }catch(e){
                                 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }
                                var studentno = document.getElementById('studentno').value;
                                xmlhttp.open("GET","searchnodo.php?studentno="+studentno,true); 
                                xmlhttp.onreadystatechange=function(){  
                                if(xmlhttp.readyState==4 && xmlhttp.status==200){  
                                document.getElementById('con1').innerHTML = xmlhttp.responseText;
                                xmlhttp = null;
                             }
                          }
                                xmlhttp.send();
                         }
                    </script>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>
