<?php require_once 'base.php';?>
<?php
require_once 'conn.php';
// 访问student
$query = "select * from subject";
//$count = "";
$result = mysql_query($query);
$sql='select distinct(subject) from score';
$km=mysql_query($sql);
?>
                        <div class="span9">
                            <div class="module">
                                <div class="module-head">
                                    <h2>科目信息</h2>
                                        <div class="module-body table">
                                    <div class="panel-heading"><a href='insertsubject.php' class="btn btn-large btn-info">增加科目信息</a></div>
                                </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                <thead>
                                    <tr>
                                        <th>科目</th>
                                        <th>任课老师</th>
                                        <th>本学期科目简介</th>
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
                            echo "<td>" . $row['subjectname'] . "</td>";
                            echo "<td>" . $row['teacher'] . "</td>";
                            echo "<td>" . $row['content'] . "</td>";
                            echo "<td><a href='editsubject.php?id=" . $row['id'] . "' class='btn btn-small btn-info'>修改</a>&nbsp;&nbsp;<a href='deletesubject.php?id=" . $row['id'] . "' class='btn btn-small btn-danger'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             <form class="form-horizontal row-fluid" action="subject.php" method="post">
                            <div class="control-group">
                               请选择要查询科目成绩的情况：
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
                                <input type='submit' class="btn btn-success" value='查询该科目成绩情况' name="sub" onclick="" /> 
                            </div>
                        </form>
                        <hr/>  
                        <?php
                          if(isset($_POST['sub'])){
                          echo "<img src='subjectextdo.php?sel=".$_POST["sel"]."' />";
                        }
                        ?>   
                        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>