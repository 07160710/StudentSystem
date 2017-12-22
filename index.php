<?php require_once 'base.php';?>
<?php
require_once 'conn.php';
// 访问student
$query = "select * from student";
$result = mysql_query($query);
?>
                        <div class="span9">
                            <div class="module">
                                <div class="module-head">
                                    <h2>
                                        学生信息</h2>
                                        <div class="module-body table">
                                    <div class="panel-heading"><a href='insert.php' class="btn btn-large btn-info">增加学生信息</a></div>
                                </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                       <thead>
                                    <tr>
                                        <th>学号</th>
                                        <th>姓名</th>
                                        <th>班级</th>
                                        <th>生日</th>
                                        <th>性别</th>
                                        <th>民族</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                        <tbody>
                                            <?php
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo '<tr class="$linecolor" onMouseMove="showcj(\''.$row['studentId'].'\')">';
                            echo "<td>" . $row['studentId'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['className'] . "</td>";
                            echo "<td>" . $row['birthday'] . "</td>";
                            echo "<td>" . $row['sex'] . "</td>";
                            echo "<td>" . $row['nation'] . "</td>";
                            echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-small btn-info'>编辑</a>&nbsp;&nbsp;<a href='deletestudent.php?id=" . $row['id'] . "' class='btn btn-small btn-danger'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function showcj(xh){  //动态刷新相应学生的成绩数据，xh是当前学生信息所在表格行的id
                                    var xmlhttp = new window.XMLHttpRequest();
                                    xmlhttp.open("GET","showcj.php?xh="+xh,true);
                                    xmlhttp.send();
                                    xmlhttp.onreadystatechange=function(){
                                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                //alert(xh);
                                    document.getElementById("grade").innerHTML = xmlhttp.responseText;
                                          }
                                    }
                               }
                            </script>
                            <div id="grade">
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
