<?php
								    require_once 'dbconfig.php';
                                    require "autoload.php";
                                    require "config-cloud.php";
                                    include "src/Helpers.php";
                                    
                                    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    //Tạo kết nối
									$pdo->query("SET CHARACTER SET utf8");
								
                                    
                                    $sql = "SELECT * FROM `sach` ORDER BY CODE";
                                    
                                    $proccess = $pdo -> query($sql);
                                    $proccess -> setFetchMode(PDO::FETCH_ASSOC);
                                    $i=1;
                                    while ($result = $proccess -> fetch()){
										
                                        $bia = cloudinary_url($result['CODE'].".jpg" , array("resource_type" => "image"));
                                        
										$sql1 = "UPDATE `sach` SET `IBSN`=\"".$bia."\" WHERE `CODE`=\"".$result['CODE']."\"";
										
                                        echo $sql1."; <br>";
                                    }
								?>