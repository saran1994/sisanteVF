<?php 
// Load the database configuration file 
include_once 'dbconn.php'; 
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('id'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
<table id="dataTable" class="table table-hover progress-table text-center">
                                        <tbody>
                                        <?php 
                                        if(isset($_GET['from_date']) && isset($_GET['to_date'])  )
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];
                                    

                                        $sql = "SELECT * from vlf    ";


                                        $query = $dbh -> prepare($sql);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        if($query->rowCount() > 0){
                                          ?> 
                                         <div>
    <?php include 'countdep.php'?>
</div>
                                         <?php $cnt++; 
                                     }

                                         }else
                                    {
                                        echo "Pas de resultat";
                                    }
                                
                            ?>        
                                        </tbody>
                                    </table>


