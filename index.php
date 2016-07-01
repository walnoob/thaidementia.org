<?php
include("guru/config.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  
      xmlns:fb="http://www.facebook.com/2008/fbml">  
<?php
global $dbname;
  $lang=$_GET['lang'];
  $ge=$_GET['ge'];
  if($lang=="en"){
    $web_setting= "web_setting_en";
  }else{
    $web_setting= "web_setting";
  }
$default_page=mysql_query("SELECT title,keyword,desc_web,noscript,email,phone,addr,addr_cn,footer_b,site_color,site_bg,site_show_view,site_product_view,register_price,normal_price,anayatics,lat_value,lon_value,fb_id,fb_secret,fb_connect,fanpage_id,top_menu,left_menu FROM $web_setting ");
list($title,$keyword,$desc_web,$noscript,$email,$phone,$addr,$addr_cn,$footer_b,$site_color,$site_bg,$site_show_view,$site_product_view,$register_price,$normal_price,$anayatics,$lat_value,$lon_value,$fb_id,$fb_secret,$fb_connect,$fanpage_id,$top_menu,$left_menu)=mysql_fetch_array($default_page)
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$title"; ?></title>
<meta name="keywords" content="<?php echo "$keyword"; //keyword ?>">
<meta name='description' content='<?php echo "$desc_web"; //desc_web ?>">'  />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="fonts/specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/lightbox.css">
<script src="js/lightbox.js"></script>
<style type="text/css">
body {
  font-family: 'thaisans_neueregular';
  font-size: 22px;
  color: #000;
  background:url(../images/watercolor-iphone-6-wallpaper-free-download-apple.png) repeat;
  
} 
 </style>
 <?php
function substr_utf8( $str, $start_p , $len_p){  
             return preg_replace( '#^(?:[x00-x7F]|[xC0-xFF][x80-xBF] ){0,'.$start_p.'}'.  
              '((?:[x00-x7F]|[xC0-xFF][x80-xBF] ){0,'.$len_p.'}).*#s',  
              '$1' , $str );  
            };  
        if($lang=="1"){
           $thai_day_arr=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");  
           $thai_month_arr=array(  
            "0"=>"",  
            "1"=>"January",  
            "2"=>"February",  
            "3"=>"March",  
            "4"=>"April",  
            "5"=>"May",  
            "6"=>"June",   
            "7"=>"July",  
            "8"=>"August",  
            "9"=>"September",  
            "10"=>"October",  
            "11"=>"November",  
            "12"=>"December"                    
        ); 
        }else{
           $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
           $thai_month_arr=array(  
            "0"=>"",  
            "1"=>"มกราคม",  
            "2"=>"กุมภาพันธ์",  
            "3"=>"มีนาคม",  
            "4"=>"เมษายน",  
            "5"=>"พฤษภาคม",  
            "6"=>"มิถุนายน",   
            "7"=>"กรกฎาคม",  
            "8"=>"สิงหาคม",  
            "9"=>"กันยายน",  
            "10"=>"ตุลาคม",  
            "11"=>"พฤศจิกายน",  
            "12"=>"ธันวาคม"                    
        ); 
        }
        

        if($lang=="1"){
          function thai_date($time){  
            global $thai_day_arr,$thai_month_arr;  
            $thai_date_return=" ".$thai_day_arr[date("w",$time)];  
            $thai_date_return.= " ".date("j",$time);  
            $thai_date_return.=" ".$thai_month_arr[date("n",$time)];  
            $thai_date_return.= " ".(date("Y ",$time));  
            return $thai_date_return;  
        }  
        }else{
          function thai_date($time){  
            global $thai_day_arr,$thai_month_arr;  
            $thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
            $thai_date_return.= "ที่ ".date("j",$time);  
            $thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];  
            $thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);  
            return $thai_date_return;  
        }  
        }

        
  
        ?>    
</head>
<body>
<div class="container" style="background-color:#FFFFFF;" >
  <div class="row" style="margin-top:0px; background-color:#434242; height: 50px;" >
      <div class="col-xs-12 col-md-12" >
      <nav class="navbar navbar-default" style="background-color:#434242; border:0; margin-top: 0;">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left" id="nav_top">
              <img src="images/lang.png" alt="" border="0" usemap="#Map" style="padding-top: 10px;" />
              <map name="Map" id="Map">
                <area shape="rect" coords="4,2,37,23" href="index.php" />
                <area shape="rect" coords="38,4,70,22" href="index.php?lang=en" />
              </map>
              </ul>
      <ul class="nav navbar-nav navbar-right" id="nav_top">
                   <?php echo "$left_menu"; ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
  </div>
       <div class="row" style="margin-top:0px; background-color:#FFFFFF;" >
       <div class="col-xs-6 col-md-6" >
        <?php 

            $result16=mysql_query("SELECT web_id,web_sub_id,web_topic,web_pic,web_intro,web_data,lang_id,gen_lang,type,datetimex FROM web_data WHERE type='16' and lang_id='' ");
             while(list($web_id,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_data,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result16)){
              echo "<a href='index.php'><img src='core/pic/$web_pic' class='img-responsive'  id='logo'/></a>";
          }//reLOGOsult
          ?>
      </div>
      <div class="col-xs-6 col-md-6" style="text-align:right;" >
         <form class="navbar-form navbar-right" role="search" action="index.php?ge=search" method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="<?php if($lang=="en"){ echo 'search';  }else{ echo 'ค้นหา';  } ?>" name="topic" >
          </div>
          <button type="submit" class="btn btn-default"><?php if($lang=="en"){ echo 'search';  }else{ echo 'ค้นหา';  } ?></button>
         </form>
      </div>
    </div><!--row-->
<?php $lang=$_GET['lang']; ?>
<div class="col-xs-12 col-md-12" >
<nav class="navbar navbar-default" role="navigation" style="background-color:#FFFFFF; border:0;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left" id="nav">
    <li><a href="index.php?lang=<?php echo "$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li> 
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($lang=="en"){ echo 'About us';  }else{ echo 'เกี่ยวกับสมาคม';  } ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $lang=$_GET['lang'];
          $result_ntid=mysql_query("SELECT nid,nav_topic,nav_price,nav_pic,ntid,nav_album_url,nav_intro,nav_desc,lang_id,gen_lang,num_no  FROM web_nav WHERE ntid='21' and lang_id='$lang' order by num_no ASC");
                     while(list($nid,$nav_topic,$nav_price,$nav_pic,$ntid,$nav_album_url,$nav_intro,$nav_desc,$lang_id,$gen_lang,$num_no)=mysql_fetch_array($result_ntid)){
                      echo "<li><a href='index.php?ge=nav_view&gen_lang=$gen_lang&lang=$lang'>$nav_topic</a></li>"; 
                    }
                    if($lang=='en'){ $title_menu='Members of the Board of Directors';  }else{ $title_menu='รายนามคณะกรรมการบริหาร';  }
                    echo "<li><a href='index.php?ge=personal&lang=$lang'>$title_menu</a></li>"; 
                    
          ?>
        </ul>
      </li>
       <li><a href="index.php?ge=all_topic&lang=<?php echo "$lang"; ?>"><?php if($lang=="en"){ echo 'Newsletter';  }else{ echo 'จดหมายข่าว';  } ?></a></li>
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($lang=="en"){ echo 'Content dementia';  }else{ echo 'เนื้อหาโรคสมองเสื่อม';  } ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $lang=$_GET['lang'];
          $cat=mysql_query("SELECT ptid,pro_type,pro_type_en FROM  web_product_type  ");
                    while(list($ptid,$pro_type,$pro_type_en)=mysql_fetch_array($cat)){
                      if($lang=="en"){ 
                        echo "<li><a href='index.php?ge=webtopic&ptid=$ptid&web_title=$pro_type&lang=$lang'>$pro_type_en</a></li>";   
                      }else{ 
                        echo "<li><a href='index.php?ge=webtopic&ptid=$ptid&web_title=$pro_type&lang=$lang'>$pro_type</a></li>";  
                         }
                    }
          ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research Center <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $cat=mysql_query("SELECT type_id,type_name FROM  web_type  where lang_id='$lang' ");
                    while(list($type_id,$type_name)=mysql_fetch_array($cat)){
                      echo "<li><a href='index.php?ge=research&type_id=$type_id&web_title=$type_name&lang=$lang'>$type_name</a></li>"; 
                    }
          ?>
        </ul>
      </li>
    <li><a href="index.php?ge=calendar&lang=<?php echo "$lang"; ?>"><?php if($lang=="en"){ echo 'Event';  }else{ echo 'งานประชุมฝึกอบรม';  } ?></a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $cat=mysql_query("SELECT wnid,wnid_name FROM  web_news_type  ");
                    while(list($wnid,$wnid_name)=mysql_fetch_array($cat)){
                      echo "<li><a href='index.php?ge=news&wnid=$wnid&web_title=$wnid_name&lang=$lang'>$wnid_name</a></li>"; 
                    }
          ?>
        </ul>
      </li>
    </ul>

  </div><!-- /.navbar-collapse -->
</nav>
     
</div>


<?php
              $ge=$_GET['ge'];
              $lang=$_GET['lang'];
                switch($ge){
                   case "register_exit":
                echo "<div id='product_showcase'>";
                echo "<h1>การประชุมวิชาการ ประจำปี 2559 ครั้งที่ 5 Challenges in Holistic Management of Dementia</h1><hr />";
                ?>
                <div class="col-xs-12">

                <div class="col-xs-7">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">สมัครการประชุมวิชาการ ประจำปี 2559 ครั้งที่ 5 Challenges in Holistic Management of Dementia</h3>
                      </div>
                      <div class="panel-body" >
                      <!--line-->
                    <!--  <div style="text-align:center; color:red;">
                        "ขออภัย ทางโครงการขอปิดการรับสมัครผู้เข้าร่วมอบรมเพิ่มเติม เนื่องจากที่นั่งเต็มจำนวนแล้ว  และไม่รับผู้มาลงทะเบียนหน้างาน"
"ทางโครงการขอขอบคุณผู้ที่สนใจทุกท่าน"
                      </div>-->

                      <form action="index.php?ge=register_save" method="post" onsubmit="return checker()" id="formID" >

วันที่ 18-19 สิงหาคม 2559
ณ ห้อง Crystal Ballroom โรงแรมตะวันนา ถนนสุรวงศ์ กรุงเทพ
<br><hr>
                         ชื่อ-นามสกุล
                          <div class="form-inline">
                              <div class="form-group">
                                <select name="ajent_prefix" class="form-control" style="font-size:20px;">
                                  <?php
                                    $ajent_prefixx=mysql_query("SELECT prefix_id,prefix_name  FROM prefix ");
                                       while(list($prefix_id,$prefix_name)=mysql_fetch_array($ajent_prefixx)){
                                  ?>
                                      <option style="font-size:22px;" value="<?php echo "$prefix_id"; ?>"><?php echo "$prefix_name"; ?></option>
                                   <?php
                                       } //ajent_countryx
                                   ?>
                                 </select>
                              </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">sname</label>
                              <input type="text" class="validate[required] text-input form-control"  id="sname" name="sname" placeholder="ชื่อ" style="font-size:22px;">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">lname</label>
                              <input type="text" class="validate[required] text-input form-control" id="lname" name="lname" placeholder="นามสกุล" style="font-size:22px;">
                            </div>
                          </div>
            
                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">idno</label>
                              <input type="text" class="validate[required] text-input form-control" id="idno" name="idno" placeholder="เลขที่บัตรประชาชน" style="font-size:22px;">
                            </div> 
                          </div>
                         <!-- <div style="margin-top:10px;">ที่อยู่ / บริษัท</div> 
                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">com_name</label>
                              <input type="text" class="form-control" id="com_name" name="com_name" placeholder="ชื่อบริษัท / ห้างหุ้นส่วน" style="font-size:22px;">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">com_major</label>
                              <input type="text" class="form-control" id="com_major" name="com_major" placeholder="สำนักงานใหญ่ สาขา" style="font-size:22px;">
                            </div>
                             <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">com_tax</label>
                              <input type="text" class="form-control" id="com_tax" name="com_tax" placeholder="เลขผู้เสียภาษีอากร" style="font-size:22px;">
                            </div>
                          </div>-->

                          <div style="margin-top:10px;">ที่อยู่</div>                  
                          <textarea class="validate[required] text-input form-control" rows="3" id="addrr" name="addrr" style="margin-top:0px;"></textarea>

                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">post_id</label>
                              <input type="text" class="validate[required] text-input form-control" id="post_id" name="post_id" placeholder="รหัสไปรษณีย์" style="font-size:22px;">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">sphone</label>
                              <input type="text" class="validate[required] text-input form-control" id="sphone" name="sphone" placeholder="โทรศัพท์" style="font-size:22px;">
                            </div>
                             <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">sfax</label>
                              <input type="text" class="form-control" id="sfax" name="sfax" placeholder="โทรสาร" style="font-size:22px;">
                            </div>
                          </div>

                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">semail</label>
                              <input type="text" class="validate[required] text-input form-control" id="semail" name="semail" placeholder="อีเมล์" style="font-size:22px; width:580px;">
                            </div>
                          </div>




  <hr />
                              <!--<div class="col-xs-6">
                                 <div class="checkbox" style="margin-top:20px;">
                                    <label>
                                      <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="เลขทะเบียนผู้สอบบัญชี" checked>
                                      เลขทะเบียนผู้สอบบัญชี  
                                      <input type="text" class="form-control" id="no_label" name="no_label" placeholder="เลขทะเบียนผู้สอบบัญชี" style="font-size:22px; width:250px;">
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="optionsRadios1" id="optionsRadios1" value="รหัสผู้ทำบัญชี">
                                      รหัสผู้ทำบัญชี
                                      <input type="text" class="form-control" id="no_label1" name="no_label1" placeholder="เลขทะเบียน" style="font-size:22px;width:250px;">
                                    </label>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="optionsRadios2" id="optionsRadios2" value="บุคคลทั่วไป">
                                      บุคคลทั่วไป
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="optionsRadios3" id="optionsRadios3" value="เป็นสมาชิกสภาวิชาชีพบัญชี">
                                       เป็นสมาชิกสภาวิชาชีพบัญชี
                                       <input type="text" class="form-control" id="no_label3" name="no_label3" placeholder="เลขที่" style="font-size:22px;width:250px;">
                                     
                                    </label>
                                </div>
                              </div>-->
                             
                        
                        <div class="col-xs-12"> <hr />

                             <label><?php //$lang=$_GET['lang']; if($lang==""){echo "รหัสยืนยัน";}else{ echo "Spam"; }?></label>
                                 <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-addon"><?php $lang=$_GET['lang']; if($lang==""){echo "สาม + สาม เท่ากับ = ??";}else{ echo "3 + 3 =??"; }?></i></div>
                                            <input type="text" name="spam_cus" class="form-control" id="exampleInputAmount" placeholder="<?php $lang=$_GET['lang']; if($lang=="1"){echo "Answer";}else{ echo "คำตอบ"; }?>">
                                            <div class="input-group-addon"><?php $lang=$_GET['lang']; if($lang==""){echo "ห้า , หก";}else{ echo "six , one"; }?></div>
                                          </div>
                                  </div>
                                  <img src="images/cover.jpg" alt="">
                          </div>

                         <div class="col-xs-12"> <hr />
                          <button type="submit" class="btn btn-primary btn-lg" style="margin-top:10px;">ส่งใบสมัคร</button>
                         </div>
                          
                        </form>
                      

                        
                      <!--line-->
                      </div>
                    </div>
                </div>

                <div class="col-xs-5">
                  <a href="images/S__20848717.jpg" target="_blank">
                  <img src="images/S__20848708.jpg" alt="" style="width:100%;" class="img-thumbnail" />
                  </a>
                </div>

                </div>

                                <?php
                echo "</div><br><br>";
                break;
                case "resig_firm_mail":
                ?>
                <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                </div>
                              </div>
                              </div>
                    </div>
                </div>
                <?php
                break;
                case "register_save":
                  $ajent_email=$_POST['ajent_email'];
                  $text="0A1B2C34VASDFGHJJKLPOIUTREQZXCBNM56789";
                  $PassWord=substr(str_shuffle($text),0,6); 
                  $ajent_prefix=$_POST['ajent_prefix'];
                  $sname=$_POST['sname'];
                  $lname=$_POST['lname'];
                  $idno=$_POST['idno'];
                  $com_name=$_POST['com_name'];
                  $com_major=$_POST['com_major'];
                  $com_tax=$_POST['com_tax'];
                  $addrr=$_POST['addrr'];
                  $post_id=$_POST['post_id'];
                  $sphone=$_POST['sphone'];
                  $sfax=$_POST['sfax'];
                  $semail=$_POST['semail'];
                  $optionsRadios=$_POST['optionsRadios'];
                  $no_label=$_POST['no_label'];
                   $optionsRadios1=$_POST['optionsRadios1'];
                  $no_label1=$_POST['no_label1'];
                   $optionsRadios2=$_POST['optionsRadios2'];
                  $no_label2=$_POST['no_label2'];
                   $optionsRadios3=$_POST['optionsRadios3'];
                  $no_label3=$_POST['no_label3'];
                  $datetimex=date('Y-m-d');
                  date_default_timezone_set('Asia/Bangkok'); 
                  $gen_lang=date("dmyhis"); 
            
                   $spam_cus=$_POST['spam_cus'];
                  if($spam_cus=="หก"){
                    mysql_query("INSERT INTO web_ajent2(ajent_prefix,sname,lname,idno,com_name,com_major,com_tax,addrr,post_id,sphone,sfax,semail,optionsRadios,no_label,optionsRadios1,no_label1,optionsRadios2,no_label2,optionsRadios3,no_label3,datetimex,statusx,gen_lang)VALUES('$ajent_prefix','$sname','$lname','$idno','$com_name','$com_major','$com_tax','$addrr','$post_id','$sphone','$sfax','$semail','$optionsRadios','$no_label','$optionsRadios1','$no_label1','$optionsRadios2','$no_label2','$optionsRadios3','$no_label3','$datetimex','1','$gen_lang')");
                    echo "<br><br><center><font color=red>การประชุมวิชาการ ประจำปี 2559 ครั้งที่ 5  Challenges in Holistic Management of Dementia <br> ได้ลงทะเบียนเรียบร้อย</font></center>";
                    echo "<meta http-equiv='refresh' content='3; url=index.php?ge=register_confirm&gen_lang=$gen_lang'>"; 
                  }else{
                    echo "<h1>ท่านกรอกคำถาม จากเราไม่ถูกต้อง !!</h1>";
                    echo "<meta http-equiv='refresh' content='0; url=index.php?ge=register'>"; 
                    ?><input name="btnButton" type="button" value="Back" onClick="JavaScript:history.back();">
                    <?php
                  }

                  
                break;  
                case "register_update":
                  $ajent_prefix=$_POST['ajent_prefix'];
                  $sname=$_POST['sname'];
                  $lname=$_POST['lname'];
                  $idno=$_POST['idno'];
                  $com_name=$_POST['com_name'];
                  $com_major=$_POST['com_major'];
                  $com_tax=$_POST['com_tax'];
                  $addrr=$_POST['addrr'];
                  $post_id=$_POST['post_id'];
                  $sphone=$_POST['sphone'];
                  $sfax=$_POST['sfax'];
                  $semail=$_POST['semail'];
                  $optionsRadios=$_POST['optionsRadios'];
                  $no_label=$_POST['no_label'];
                   $optionsRadios1=$_POST['optionsRadios1'];
                  $no_label1=$_POST['no_label1'];
                   $optionsRadios2=$_POST['optionsRadios2'];
                  $no_label2=$_POST['no_label2'];
                   $optionsRadios3=$_POST['optionsRadios3'];
                  $no_label3=$_POST['no_label3'];
                  $gen_lang=$_POST['gen_lang'];
                   mysql_query("UPDATE web_ajent2 SET  ajent_prefix='$ajent_prefix',sname='$sname',lname='$lname',idno='$idno',com_name='$com_name',com_major='$com_major',com_tax='$com_tax',addrr='$addrr',post_id='$post_id',sphone='$sphone',sfax='$sfax',semail='$semail',optionsRadios='$optionsRadios',no_label='$no_label',optionsRadios1='$optionsRadios1',no_label1='$no_label1',optionsRadios2='$optionsRadios2',no_label2='$no_label2',optionsRadios3='$optionsRadios3',no_label3='$no_label3' WHERE gen_lang='$gen_lang' ");
                  echo "<meta http-equiv='refresh' content='0; url=index.php?ge=register_confirm&gen_lang=$gen_lang'>"; 

                  
                break;  
                case "register_confirm":
                $gen_lang=$_GET['gen_lang'];
                 $ajent_prefixx=mysql_query("SELECT ajent_prefix,sname,lname,idno,com_name,com_major,com_tax,addrr,post_id,sphone,sfax,semail,optionsRadios,no_label,optionsRadios1,no_label1,optionsRadios2,no_label2,optionsRadios3,no_label3 FROM web_ajent2 where gen_lang='$gen_lang' ");
                  while(list($ajent_prefix,$sname,$lname,$idno,$com_name,$com_major,$com_tax,$addrr,$post_id,$sphone,$sfax,$semail,$optionsRadios,$no_label,$optionsRadios1,$no_label1,$optionsRadios2,$no_label2,$optionsRadios3,$no_label3)=mysql_fetch_array($ajent_prefixx)){

                echo "<div id='product_showcase'>";
                echo "<h1>ตรวจสอบข้อมูล การประชุมวิชาการ ประจำปี 2559 ครั้งที่ 5 Challenges in Holistic Management of Dementia</h1><hr />";
                ?>
                <div class="col-xs-12">

                <div class="col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">ใบสมัครโครงการอบรมสัมนา</h3>
                      </div>
                      <div class="panel-body" >
                      <!--line-->
                        <div class="col-md-6">
                          <form action="index.php?ge=register_update" method="post" onsubmit="return checker()">
                        <input name="gen_lang" type="hidden" value="<?php echo "$gen_lang"; ?>" />
                       การประชุมวิชาการ ประจำปี 2559 ครั้งที่ 5 Challenges in Holistic Management of Dementia
                        <br><hr />
                         ชื่อ-นามสกุล
                          <div class="form-inline">
                              <div class="form-group">

                              <select name="ajent_prefix" class="form-control" style="font-size:20px;">
                                      <?php
                                      $ajent_prefix_tmp=$ajent_prefix;
                                      $pd=$ajent_prefix_tmp;
                                      global $dbname;
                                      $ajent_prefdixx=mysql_query("SELECT prefix_id,prefix_name  FROM prefix ");
                                       while(list($prefix_id,$prefix_name)=mysql_fetch_array($ajent_prefdixx)){
                                          if($pd==$prefix_id){
                                              echo "<option  style='font-size:22px;' value=\"$prefix_id\" selected=\"$prefix_name\"> $prefix_name</option>";
                                          }else if($pd!=$prefix_id){
                                              echo "<option  style='font-size:22px;' value=\"$prefix_id\" > $prefix_name</option>";
                                          }
                                       }
                                      ?>
                              </select>

        
                              </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">sname</label>
                              <input type="text" class="form-control" id="sname" value="<?php echo $sname ?>" name="sname" placeholder="ชื่อ" style="font-size:22px;">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">lname</label>
                              <input type="text" class="form-control" id="lname" value="<?php echo $lname ?>" name="lname" placeholder="นามสกุล" style="font-size:22px;">
                            </div>
                          </div>
            
                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">idno</label>
                              <input type="text" class="form-control" id="idno" value="<?php echo $idno ?>" name="idno" placeholder="เลขที่บัตรประชาชน" style="font-size:22px;">
                            </div> 
                          </div>
                         

                          <div style="margin-top:10px;">ที่อยู่</div>                  
                          <textarea class="form-control" rows="3" id="addrr" name="addrr" style="margin-top:0px;"><?php echo $addrr ?></textarea>

                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">post_id</label>
                              <input type="text" class="form-control" id="post_id" name="post_id" value="<?php echo $post_id ?>" placeholder="รหัสไปรษณีย์" style="font-size:22px;">
                            </div>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">sphone</label>
                              <input type="text" class="form-control" id="sphone" name="sphone" value="<?php echo $sphone ?>" placeholder="โทรศัพท์" style="font-size:22px;">
                            </div>
                             <div class="form-group">
                              <label class="sr-only" for="exampleInputPassword3">sfax</label>
                              <input type="text" class="form-control" id="sfax" name="sfax" value="<?php echo $sfax ?>" placeholder="โทรสาร" style="font-size:22px;">
                            </div>
                          </div>

                          <div class="form-inline" style="margin-top:10px;">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputEmail3">semail</label>
                              <input type="text" class="form-control" id="semail" name="semail" value="<?php echo $semail ?>" placeholder="อีเมล์" style="font-size:22px; width:580px;">
                            </div>
                          </div>

                         <div class="col-xs-12"> <hr />
                          <button type="submit" class="btn btn-primary btn-lg" style="margin-top:10px;">แก้ไข / ยืนยัน</button>
                          <a href="index.php" type="button" class="btn btn-success btn-lg" style="margin-top:10px;">เสร็จสิ้น / ส่งเอกสารใบสมัคร</a>
                         </div>
                          
                        </form>
                        </div> 


                         <div class="col-md-6">
                            <a href="images/S__20848717.jpg" target="_blank">
                            <img src="images/S__20848708.jpg" alt="" style="width:100%;" class="img-thumbnail" />
                            </a>
                          </div>


                      <!--line-->
                      </div>
                    </div>
                </div>

               



                </div>

                                <?php
                echo "</div><br><br>";
              }
                break;
                  case "personal":  
                  $web_id=$_GET['web_id'];
                  $gen_lang=$_GET['gen_lang'];
                  $lang=$_GET['lang'];
                   
                    ?><br><br>
                             <div class="panel panel-default" >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                     <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                     <li class="active"><?php if($lang=="en"){ echo 'Members of the Board of Directors';  }else{ echo 'รายนามคณะกรรมการบริหาร';  } ?></li>
                                </ol>
                                 <?php  

                               
                                      ?><div class="row"><?php
                                      $ressult=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE type='1750' order by web_id asc ");
                                        while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($ressult)){
                                          ?>
                                          <div class="col-md-6" style="text-align:center; margin-bottom: 40px;">

                                            <div class="col-md-3">
                                              <img src="core/pic/<?php echo "$web_pic"; ?>" style="width:105px;height:140px;margin:0 0 5px 0;" class="img-thumbnail">
                                            </div>
                                            <div class="col-md-9" style="text-align: left; padding-top: 0;">
                                              <br><b><?php echo "$web_topic"; ?></b><br>
                                              <p><?php echo $web_intro ?></p>
                                              <?php 
                                               $result_cat=mysql_query("SELECT pernid,per_name FROM web_person_type where pernid='$web_sub_id' ");
                                                 while(list($pernid,$per_name)=mysql_fetch_array($result_cat)){
                                                    echo "$per_name";
                                                 }
                                              ?><br>
                                            </div>
                                            

                                          </div>
                                          <?php
                                        }//ressult
                                        ?></div><?php
                                ?>
                                     <hr/>
                                </div>
                              </div>
                    <?php
                    break;
                  case "vdo_view":
                  $web_id=$_GET['web_id'];
                  $result_pd_rv=mysql_query("SELECT web_id,web_topic,web_intro,web_data,web_pic,type  FROM web_data WHERE web_id='$web_id' ");
                                     while(list($web_id,$web_topic,$web_intro,$web_data,$web_pic,$type,$datetimex)=mysql_fetch_array($result_pd_rv)){ 
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'VDO';  }else{ echo 'วีดิโอ';  } ?></li>
                               </ol>
                               <h3><?php echo "$web_topic"; ?></h3> <hr>
                               <center>
                               <object width="800" height="420">
<param name="movie" value="http://www.youtube.com/v/<?php echo "$web_data";?>?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param>
<param name="allowscriptaccess" value="always"></param>
<embed src="http://www.youtube.com/v/<?php echo "$web_data";?>?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="800" height="420"></embed></object>
                                 </center>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                }
                  break;
                  case "vdo":
                  $web_id=$_GET['web_id'];
                  $web_topic=$_GET['web_topic'];
                  ?>               
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                      <div class="panel panel-default" >
                       <div class="panel-body">
                       <ol class="breadcrumb">
                            <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                            <li><a href="index.php?ge=vdo&lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'VDO - Review';  }else{ echo 'วีดิโอ รีวิว';  } ?></a></li>
                            <li class="active"><?php echo "$web_topic";?></li>
                        </ol>
                       <table>
                                             <?php
            if($start2==0){$start2=0;}
            $result_vdo=mysql_query("SELECT web_id,web_sub_id,web_topic,web_intro,web_data,web_pic,type  FROM web_data WHERE type='10' Order by web_id  desc  ");
                        while(list($web_id,$web_sub_id,$web_topic,$web_intro,$web_data,$web_pic,$type,$datetimex)=mysql_fetch_array($result_vdo)){
                        ++$s1xx2; 
                        if ($s1xx2 ==1) {
                          $promotion_data1s1xx2 .= "
                          <tr ><td width='25%' valign='top' align='left' >
                          <div class='col-sm-6 col-md-12'>
                          <div class='thumbnail' style='height:290px;'>
                            <img src='http://img.youtube.com/vi/$web_data/default.jpg' class='img-responsive img-thumbnail' style='margin:5px 8px 5px 0; width:100%;' />
                            <div class='caption'>
                            <p>$web_topic</p>
                            <a href='index.php?ge=vdo_view&web_id=$web_id&web_topic=$web_topic'>
                            <h4><span class='label label-success'>คลิกดู</span></h4>
                            </a>
                            </div>
                          </div>
                          </div>
                          </td>
                          ";
                        }else if ($s1xx2 ==2) {
                          $promotion_data1s1xx2 .= "
                          <td width='25%' valign='top' align='left' >
                          <div class='col-sm-6 col-md-12'>
                          <div class='thumbnail' style='height:290px;'>
                            <img src='http://img.youtube.com/vi/$web_data/default.jpg' class='img-responsive img-thumbnail' style='margin:5px 8px 5px 0; width:100%;' />
                            <div class='caption'>
                            <p>$web_topic</p>
                            <a href='index.php?ge=vdo_view&web_id=$web_id&web_topic=$web_topic'>
                            <h4><span class='label label-success'>คลิกดู</span></h4>
                            </a>
                            </div>
                          </div>
                          </div>
                          </td>
                          ";
                        }else if ($s1xx2 ==3) {
                          $promotion_data1s1xx2 .= "
                          <td width='25%' valign='top' align='left' >
                          <div class='col-sm-6 col-md-12'>
                          <div class='thumbnail' style='height:290px;'>
                            <img src='http://img.youtube.com/vi/$web_data/default.jpg' class='img-responsive img-thumbnail' style='margin:5px 8px 5px 0; width:100%;' />
                            <div class='caption'>
                            <p>$web_topic</p>
                            <a href='index.php?ge=vdo_view&web_id=$web_id&web_topic=$web_topic'>
                            <h4><span class='label label-success'>คลิกดู</span></h4>
                            </a>
                            </div>
                          </div>
                          </div>
                          </td>
                          ";
                        }else if ($s1xx2 ==4) {
                          $promotion_data1s1xx2 .= "
                          <td width='25%' valign='top' align='left' >
                          <div class='col-sm-6 col-md-12'>
                          <div class='thumbnail' style='height:290px;'>
                            <img src='http://img.youtube.com/vi/$web_data/default.jpg' class='img-responsive img-thumbnail' style='margin:5px 8px 5px 0; width:100%;' />
                            <div class='caption'>
                            <p>$web_topic</p>
                            <a href='index.php?ge=vdo_view&web_id=$web_id&web_topic=$web_topic'>
                            <h4><span class='label label-success'>คลิกดู</span></h4>
                            </a>
                            </div>
                          </div>
                          </div>
                          </td></tr>
                          ";
                        }if ($s1xx2==4) {
                          unset($s1xx2);
                        }//promotion
                      } 
                    echo "$promotion_data1s1xx2";
            ?>
                                    </table>              
                        </div>
                        </div>
                      </div>     
                 <?php
                  break;
                  case "vdo_all":
                  $web_id=$_GET['web_id'];
                  $result_pd_rv=mysql_query("SELECT web_id,web_topic,web_intro,web_data,web_pic,type  FROM web_data WHERE type='10' Order by web_id  desc");
                                     while(list($web_id,$web_topic,$web_intro,$web_data,$web_pic,$type,$datetimex)=mysql_fetch_array($result_pd_rv)){ 
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'VDO';  }else{ echo 'วีดิโอ';  } ?></li>
                               </ol>
                               <h3><?php echo "$web_topic"; ?></h3> <hr>
                               <center>
                               <object width="800" height="420">
<param name="movie" value="http://www.youtube.com/v/<?php echo "$web_data";?>?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param>
<param name="allowscriptaccess" value="always"></param>
<embed src="http://www.youtube.com/v/<?php echo "$web_data";?>?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="800" height="420"></embed></object>
                                 </center>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                }
                  break;
                  case "youtube":
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'VDO';  }else{ echo 'วีดิโอ';  } ?></li>
                               </ol>
                               <h3>วีดิโอ</h3> <hr>
                                <?php
                                  $result_product=mysql_query("SELECT web_id,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE type='10  ' Order by web_id  desc ");
            while(list($web_id,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result_product)){
                                ?>
                               <div class="col-xs-12 col-sm-6 col-md-3">
                                  <?php
                                    echo "<hr style='border:3px solid #f0eee7;'>
                            <a href='index.php?ge=vdo_view&web_id=$web_id'>
                             <img src='http://img.youtube.com/vi/$web_data/default.jpg'  style='padding:3px 3px 3px 3px; border: 1px solid #918f90 ;width:240px; height:100px;margin:5px 0 5px 0;' />
                             </a><p>$web_topic</p>";
                                  ?>
                               </div>
                                <?php
                                  } //result17z1
                                ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                  case "calendar":  
                    echo "<br>";
                    include("calendar/calendar2.php"); 
                      $ge=$_GET['ge'];
                      $op=$_GET['op'];
                      $gen_lang=$_GET['gen_lang'];
                      $etime=$_GET['etime'];
                    switch($op){

                      case "view_Reservation":
                      ?>
                                            
                                            <table width="94%" border="0" align="center" cellpadding="2" cellspacing="2" style=" border:1px solid #333333;">
                                              
                                              <tr>
                                                <td height="30" bgcolor="#FFFFFF"><h3><?php if($lang=="en"){ echo 'Calendar';  }else{ echo 'ปฏิทินวิชาการ';  } ?></h3></td>
                                              </tr>
                                              <tr>
                                                <td height="30" bgcolor="#FFFFFF">&nbsp;&nbsp;<b><?php if($lang=="en"){ echo 'Date';  }else{ echo 'วันที่';  } ?> :</b><font color="#FF0000"> <?php echo "$etime"; ?></font></td>
                                              </tr>
                                              <?php
                      $view_Reservationx=mysql_db_query($dbname,"select ev_id,event,etime,adddate,place,comment from web_event where etime ='$etime'"); 
                      while(list($ev_id,$event,$etime,$adddate,$place,$comment)=mysql_fetch_row($view_Reservationx)) {
                        ?>
                                              <tr>
                                                <td bgcolor="#FFFFFF">&nbsp;&nbsp;<b><?php if($lang=="en"){ echo 'Event';  }else{ echo 'กิจกรรม';  } ?> :</b> <?php echo "$event"; ?></td>
                                              </tr>
                                              <tr>
                                                <td bgcolor="#FFFFFF"><b>&nbsp;&nbsp;<?php if($lang=="en"){ echo 'Detail';  }else{ echo 'รายละเอียด';  } ?> :</b> <?php echo "$comment"; ?></td>
                                              </tr>
                                              <?php
                          } 
                        ?>
                                      </table>
                    <p align="center"><a href="index.php?ge=Reservation"><?php if($lang=="en"){ echo 'Back';  }else{ echo 'ย้อนกลับ';  } ?></a></p>
                                            
                        <?php
                                            break;
                      default:
                      
                      break;
                    }//op
          break;
                  case "search":
                  $topic=$_POST['topic'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></a></li>
                                              <li class="active"><?php echo "$web_title"; ?></li>
                               </ol>
                               <h3>คำค้น : <?php echo "$web_title"; ?></h3> <hr>
                                <?php
                                  $result17z1=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE web_topic LIKE '%$topic%'  order by web_id DESC ");
                                  while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result17z1)){
                                    $web_introx=iconv_substr("$web_topic",0,170, "UTF-8");
                                ?>
                               <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                        <a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>">
                                                        <img src="core/pic/<?php echo "$web_pic"; ?>" style="height:90px; width:250px;"></a>
                                                          <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
                                                            <h4 style="margin:0 0 0 0;"><?php echo "$web_topic"; ?></h4>
                                                          </div>
                                                          <p style="font-size:13pt;"><?php echo "$web_introx"; ?></p>
                                                        </div>
                                                      </div>
                                <?php
                                  } //result17z1
                                ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                     case "news":
                  $wnid=$_GET['wnid'];
                  $web_title=$_GET['web_title'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                             <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></a></li>
                                              <li class="active"><?php echo "$web_title"; ?></li>
                               </ol>
                               <h3>ข่าวประชาสัมพันธ์ : <?php echo "$web_title"; ?></h3> <hr>
                                <?php
                                  $result17z1=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE type='17' and web_sub_id='$wnid'  order by web_id DESC ");
                                  while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result17z1)){
                                    $web_introx=iconv_substr("$web_topic",0,170, "UTF-8");
                                ?>
                               <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                        <a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>">
                                                        <img src="core/pic/<?php echo "$web_pic"; ?>" style="height:160px; width:250px;"></a>
                                                          <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
                                                            <h4 style="margin:0 0 0 0;"><?php echo "$web_topic"; ?></h4>
                                                          </div>
                                                          <p style="font-size:13pt;"><?php echo "$web_introx"; ?></p>
                                                        </div>
                                                      </div>
                                <?php
                                  } //result17z1
                                ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                    case "research":
                  $type_id=$_GET['type_id'];
                  $web_title=$_GET['web_title'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>">Research Center</a></li>
                                              <li class="active"><?php echo "$web_title"; ?></li>
                               </ol>
                               <h3>Research Center : <?php echo "$web_title"; ?></h3> <hr>
                                <?php
                                  $result17z1=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE type='17x3' and web_sub_id='$type_id'  order by web_id DESC ");
                                  while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result17z1)){
                                    $web_introx=iconv_substr("$web_topic",0,170, "UTF-8");
                                ?>
                               <div class="col-xs-12 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                        <a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>">
                                                        <img src="core/pic/<?php echo "$web_pic"; ?>" style="height:250px; width:250px;"></a>
                                                          <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
                                                            <h4 style="margin:0 0 0 0;"><?php echo "$web_topic"; ?></h4>
                                                          </div>
                                                          <p style="font-size:13pt;"><?php echo "$web_introx"; ?></p>
                                                        </div>
                                                      </div>
                                <?php
                                  } //result17z1
                                ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                   case "view_product":
                  $gen_lang=$_GET['gen_lang'];
                   $topic=$_GET['topic'];
                  $result=mysql_query("SELECT pid,product_topic,product_price,product_pic,ptid,product_album_url,product_intro,product_desc,lang_id,gen_lang,product_by,web_file,status FROM `web_product` WHERE gen_lang='$gen_lang' and lang_id='$lang_id' ");
                     while(list($pid,$product_topic,$product_price,$product_pic,$ptid,$product_album_url,$product_intro,$product_desc,$lang_id,$gen_lang,$product_by,$web_file,$status)=mysql_fetch_array($result)){
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li> <a href="index.php"><?php $lang=$_GET['lang']; if($lang=="en"){ echo "Home"; }else if($lang=="ru"){ echo "Главная";}else if($lang=="cn"){echo "主頁";}else{ echo "หน้าหลัก"; }?></a></li>
                                   <li class="active"><?php echo "$topic"; ?></li>
                                   <li class="active"><?php if($lang=="en"){ echo 'Topic';  }else{ echo 'บทความจาก';  } ?> : <?php echo "$product_by"; ?></li>
                                 </ol>
                                 <p><b><?php if($lang=="en"){ echo 'File';  }else{ echo 'ไฟล์เอกสารแนบ';  } ?> : </b><?php
                                  if($web_file==''){
                                    echo "<center><b>No File</b></center>";
                                  }else{
                                  ?>
                                    <a href="../core/productFile/<?php echo "$web_file";?>"> <?php if($lang=="en"){ echo 'File';  }else{ echo 'ไฟล์เอกสารแนบ';  } ?></a>
                                  <?php
                                  }//else
                                ?>  

                                <?php
                                  if($status==''){
                                    echo "<center><b>No File</b></center>";
                                  }else{
                                  ?>
                                    <a href="../core/productFile2/<?php echo "$status";?>"> <?php if($lang=="en"){ echo 'File';  }else{ echo 'ไฟล์เอกสารแนบ';  } ?></a>
                                  <?php
                                  }//else
                                ?></p>
                                 <?php echo "$product_desc"; ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                }
                  break;
                  case "webtopic":
                  $ptid=$_GET['ptid'];
                  $web_title=$_GET['web_title'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li><a href="index.php"><?php if($lang=="en"){ echo '
Content dementia';  }else{ echo 'เนื้อหาโรคสมองเสื่อม';  } ?></a></li>
                                              <li class="active"><?php echo "$web_title"; ?></li>
                               </ol>
                               <h3><?php if($lang=="en"){ echo '
Content dementia';  }else{ echo 'เนื้อหาโรคสมองเสื่อม';  } ?> : <?php echo "$web_title"; ?></h3> <hr>
                                <?php
                    $result17z1=mysql_query("SELECT pid,product_topic,product_price,product_pic,ptid,product_album_url,product_intro,product_desc,lang_id,gen_lang FROM `web_product`  WHERE ptid='$ptid'  order by product_price ASC ");
                    while(list($pid,$product_topic,$product_price,$product_pic,$ptid,$product_album_url,$product_intro,$product_desc,$lang_id,$gen_lang)=mysql_fetch_array($result17z1)){
                      $web_introx=iconv_substr("$product_intro",0,170, "UTF-8");
                  ?>
                 <div class="col-xs-12 col-sm-6 col-md-3">
                                          <div class="thumbnail">
                                          <a href="index.php?ge=view_product&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$product_topic"; ?>">
                                          <img src="core/product/<?php echo "$product_pic"; ?>" ></a>
                                            <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
                                              <h4 style="margin:0 0 0 0;"><?php echo "$product_topic"; ?></h4>
                                            </div>
                                            <p style="font-size:13pt;"><?php echo "$web_introx"; ?></p>
                                          </div>
                                        </div>
                    <?php
                      } //result17z1
                    ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                   case "all_topic":
                  $type=$_GET['type'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active">จดหมายข่าวจากสมาคมโรคสมองเสื่อมแห่งประเทศไทย</li>
                               </ol>
                               <h3>จดหมายข่าวจากสมาคมโรคสมองเสื่อมแห่งประเทศไทย</h3>
                               
                                <?php
                    $result17z1=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex FROM web_data  WHERE web_sub_id='17'  order by web_id DESC ");
                    while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result17z1)){
                      $eng_date=strtotime("$datetimex");
                      $web_introx=iconv_substr("$web_intro",0,170, "UTF-8");
                  ?>
                  <div class="row" >
                  
                    <div class="col-xs-12 col-md-12" style="text-align:left; margin-top:10px;">
                    <span class="size16">
                    <b style="font-size:13pt;"><?php echo "$web_topic"; ?></b> <?php echo thai_date($eng_date);  ?>
                    <p><i style="color:#019501;"></i></p>
                    <?php
                        if($web_file==""){
                         
                        }else{
                          ?>
                           <div class="row">
                            <div class="col-md-12"><i class="glyphicon glyphicon-floppy-disk
glyphicon glyphicon-"></i> <?php if($lang=="en"){ echo 'Download';  }else{ echo 'ดาวน์โหลด';  } ?> : <a href="core/File/<?php echo "$web_file";?>" target="_blank"><?php echo "$web_topic";?></a></div>
                          </div>
                          <?php
                        }
                        ?>

                         <?php
                        if($status==""){
                         
                        }else{
                          ?>
                           <div class="row">
                            <div class="col-md-12"><i class="glyphicon glyphicon-floppy-disk
glyphicon glyphicon-"></i>  <?php if($lang=="en"){ echo 'Download';  }else{ echo 'ดาวน์โหลด';  } ?>  : <a href="core/File2/<?php echo "$status";?>" target="_blank"><?php echo "$web_topic";?></a></div>
                          </div>
                          <?php
                        }
                        ?>
                    </span>
                    </div>
                    </div><hr>
                    <?php
                      } //result17z1
                    ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                  case "paper_list":
                  $wpid=$_GET['wpid'];
                  $wpid_name=$_GET['wpid_name'];
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"> <?php if($lang=="en"){ echo 'Download';  }else{ echo 'ดาวน์โหลด';  } ?>  <?php echo "$wpid_name"; ?></li>
                               </ol>
                               <h3> <?php if($lang=="en"){ echo 'Download';  }else{ echo 'ดาวน์โหลด';  } ?>  <?php echo "$wpid_name"; ?></h3>
                               
                                <?php
                    $result17z1=mysql_query("SELECT web_id,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,web_data,lang_id,gen_lang,type,datetimex FROM web_data  WHERE type='xs17x3' and web_sub_id='$wpid'  order by web_id DESC ");
                    while(list($web_id,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$web_data,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result17z1)){
                      $eng_date=strtotime("$datetimex");
                      $web_introx=iconv_substr("$web_intro",0,170, "UTF-8");
                  ?>
                  <div class="row" >
                  
                    <div class="col-xs-12 col-md-12" style="text-align:left; margin-top:10px;">
                    <span class="size16">
                    <b style="font-size:13pt;"><?php echo "<a href='index.php?ge=view&gen_lang=$gen_lang'>$web_topic</a>"; ?></b> <?php echo thai_date($eng_date);  ?>
                    <p><i style="color:#019501;"></i></p>
                    <?php
                        if($web_file==""){
                         
                        }else{
                          ?>
                           <div class="row">
                            <div class="col-md-12"><i class="glyphicon glyphicon-floppy-disk
glyphicon glyphicon-"></i> ดาวน์โหลด : <a href="core/File/<?php echo "$web_file";?>" target="_blank"><?php echo "$web_topic";?></a></div>
                          </div>
                          <?php
                        }
                        ?>
                    </span>
                    </div>
                    </div><hr>
                    <?php
                      } //result17z1
                    ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                  case "site_map":
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"> <?php if($lang=="en"){ echo 'Site Map';  }else{ echo 'แผนผังเว็บไซต์';  } ?> </li>
                               </ol>
                               <h3><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></h3>
                                <ul>
                                  <?php 
                                  $result17=mysql_query(" SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type FROM web_data WHERE type='17' order by  web_id DESC  ");
                                          while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type)=mysql_fetch_array($result17)){
                                   ?>
                                  <li><a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>"><?php echo "$web_topic"; ?></a></li>
                                  <?php } ?>
                                </ul>
                                <hr />

                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
           
                  <?php
                  break;
                   case "reply":
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'Forum';  }else{ echo 'เว็บบอร์ดสอบถาม';  } ?></li>
                               </ol>
                                <?php include("webForum/reply.php"); ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                   case "newtopic":
                  ?>
                   <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'Forum';  }else{ echo 'เว็บบอร์ดสอบถาม';  } ?></li>
                               </ol>
                               <?php include("webForum/newtopic.php"); ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                 
                  <?php
                  break;
                  case "webForum":
                  ?>
                    <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                               <ol class="breadcrumb">
                                              <li><a href="index.php?lang=<?php echo"$lang"; ?>"><?php if($lang=="en"){ echo 'Home';  }else{ echo 'หน้าหลัก';  } ?></a></li>
                                              <li class="active"><?php if($lang=="en"){ echo 'Forum';  }else{ echo 'เว็บบอร์ดสอบถาม';  } ?></li>
                               </ol>
                                <?php include("webForum/index.php"); ?> 
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>

                 
                  <?php
                  break;
                  case "view":
                  $gen_lang=$_GET['gen_lang'];
                  $result=mysql_query("SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_data,lang_id,gen_lang,type,datetimex FROM web_data WHERE gen_lang='$gen_lang' and lang_id='$lang_id' ");
                     while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_data,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($result)){
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li> <a href="index.php"><?php $lang=$_GET['lang']; if($lang=="en"){ echo "Home"; }else if($lang=="ru"){ echo "Главная";}else if($lang=="cn"){echo "主頁";}else{ echo "หน้าหลัก"; }?></a></li>
                                   <li class="active"><?php echo "$web_topic"; ?></li>
                                 </ol>
                                 <?php echo "$web_data"; ?>

                                  <?php 
                                      $web_sub_menu=$web_sub_menu;
                                       if ($web_sub_menu=="") {
                                       }else{
                                        echo "<b>ภาพเพิ่มเติม</b><hr>";
                                        $web_album_title_c=mysql_query("SELECT tid,title,ref_gen_lang FROM web_album_title WHERE ref_gen_lang='$web_sub_menu' ");
                                         while(list($tid,$title,$ref_gen_lang)=mysql_fetch_array($web_album_title_c)){

                                 $web_album_pics=mysql_query("SELECT id,filename,comment,ref_tltle FROM web_album_pic where ref_tltle='$ref_gen_lang' Order by id DESC");
                                 while(list($id,$filename,$comment,$ref_tltle)=mysql_fetch_array($web_album_pics)){

                                                echo "<a href='guru/uploads/$filename' data-lightbox='example-set'><img src='guru/uploads/$filename' class='img-rounded' style='margin:5px 8px 5px 0; width:200px; height:150px;' /></a>";
                                              }
                                          }
                                       }
                                 ?>


                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                }
                  break;
                  case "nav_view":
                  $gen_lang=$_GET['gen_lang'];
                  $result=mysql_query("SELECT nid,nav_topic,nav_price,nav_pic,ntid,nav_album_url,nav_intro,nav_desc,lang_id,gen_lang,num_no  FROM web_nav WHERE gen_lang='$gen_lang' and lang_id='$lang_id' ");
                     while(list($nid,$nav_topic,$nav_price,$nav_pic,$ntid,$nav_album_url,$nav_intro,$nav_desc,$lang_id,$gen_lang,$num_no)=mysql_fetch_array($result)){
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li> <a href="index.php"><?php $lang=$_GET['lang']; if($lang=="en"){ echo "Home"; }else if($lang=="ru"){ echo "Главная";}else if($lang=="cn"){echo "主頁";}else{ echo "หน้าหลัก"; }?></a></li>
                                   <li class="active"><?php echo "$nav_topic"; ?></li>
                                 </ol>
                                 <?php echo "$nav_desc"; ?>
                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                }
                  break;
                  case "view_all":
                  ?>
                  <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li> <a href="index.php"><?php $lang=$_GET['lang']; if($lang=="en"){ echo "Home"; }else if($lang=="ru"){ echo "Главная";}else if($lang=="cn"){echo "主頁";}else{ echo "หน้าหลัก"; }?></a></li>
                                   <li class="active"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></li>
                                 </ol>
                                 
                                  <div class="col-xs-12 col-md-12" style="padding:10px 30px 30px 30px;">
                                   <div class="col-xs-12 col-md-10"><h2 style="margin:0 0 0 0 ;"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></h2></div>
                                   <div class="col-xs-12 col-md-2" style="text-align:right; padding-top:0px;"></div>
                                   <div class="col-xs-12 col-md-12"><hr /></div>
                                    <?php 
                                        $result17=mysql_query(" SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type FROM web_data WHERE type='17' order by  web_id DESC  ");
                                                while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type)=mysql_fetch_array($result17)){
                                         ?>
                                      <div class="col-xs-12 col-sm-6 col-md-3">
                                          <div class="thumbnail">
                                          <a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>">
                                          <img src="core/pic/<?php echo "$web_pic"; ?>" ></a>
                                            <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
                                              <h4 style="margin:0 0 0 0;"><?php echo "$web_topic"; ?></h4>
                                            </div>
                                            <p style="font-size:13pt;"><?php echo "$web_intro"; ?></p>
                                          </div>
                                        </div>
                                      <?php } ?>
                                  </div>

                                 </div>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                  <?php
                  break;
                  case 'contact':
                  $web_id=$_GET['web_id'];
                  $gen_lang=$_GET['gen_lang'];
                  $lang=$_GET['lang'];
                    ?>
                    <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li> <a href="index.php"><?php $lang=$_GET['lang']; if($lang=="en"){ echo "Home"; }else if($lang=="ru"){ echo "Главная";}else if($lang=="cn"){echo "主頁";}else{ echo "หน้าหลัก"; }?></a></li>
                                   <li class="active"><?php if($lang=="en"){ echo 'Contact us';  }else{ echo 'ติดต่อเรา';  } ?><?php echo ""; ?></li>
                                 </ol>
                                   <?php include("map.php");?>
                                   <div class="row" style="margin:0 0 0 0;">
                                      <div class="col-xs-12 col-md-12 col-lg-12"  >
                                      <?php $lang=$_GET['lang']; if($lang==""){echo "<h1>ติดต่อเรา / แผนที่</h1><hr>";}else{ echo "<h1>Contact / Map</h1><hr>"; }?>
                                                                   <div class="col-md-6" style="margin-top:20px;" >
                                                                   <form action="index.php?ge=contacted" method="post">
                                                                        <div class="form-group">
                                                                        <label><?php $lang=$_GET['lang']; if($lang==""){echo "ชื่อ-นามสกุล";}else{ echo "Name"; }?></label>
                                                                        <input name="name_cus" type="text" class="form-control" placeholder="<?php $lang=$_GET['lang']; if($lang==""){echo "ชื่อ-นามสกุล";}else{ echo "Name"; }?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label><?php $lang=$_GET['lang']; if($lang=="1"){echo "Email";}else{ echo "อีเมล์"; }?></label>
                                                                        <input name="email_cus" type="text" class="form-control" placeholder="<?php $lang=$_GET['lang']; if($lang==""){echo "อีเมล์";}else{ echo "Email"; }?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label><?php $lang=$_GET['lang']; if($lang==""){echo "ข้อความ";}else{ echo "Measage"; }?></label>
                                                                        <textarea name="message_cus" class="form-control" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label><?php $lang=$_GET['lang']; if($lang==""){echo "คำถาม Spam";}else{ echo "Spam"; }?></label>
                                                                        <div class="form-group">
                                                                      <div class="input-group">
                                                                        <div class="input-group-addon"><?php $lang=$_GET['lang']; if($lang==""){echo "สาม + สาม เท่ากับ = ??";}else{ echo "3 + 3 =??"; }?></i></div>
                                                                        <input type="text" name="spam_cus" class="form-control" id="exampleInputAmount" placeholder="<?php $lang=$_GET['lang']; if($lang=="1"){echo "Answer";}else{ echo "คำตอบ"; }?>">
                                                                        <div class="input-group-addon"><?php $lang=$_GET['lang']; if($lang==""){echo "ห้า , หก";}else{ echo "six , one"; }?></div>
                                                                      </div>
                                                                    </div><button type="submit" class="btn btn-success"><?php $lang=$_GET['lang']; if($lang==""){echo "ส่งคำถาม";}else{ echo "Submit"; }?></button>
                                                                        </div>
                                                                   </form>
                                                                   </div>
                                                                   <div class="col-md-6" >
                                                                       <div class="panel panel-default" style="margin-top:20px;" >
                                                                     <div class="panel-heading"><b><?php $lang=$_GET['lang']; if($lang==""){echo "ที่อยู่ติดต่อ";}else{ echo "Address"; }?></b></div>
                                                                      <div class="panel-body">
                                                                       <h3 style="color:#05bab1;"><?php echo "$title"; ?></h3>
   <p style="color:#000;font-size:14pt;"> <?php echo "$fb_secret"; ?><br />
    Tel. <?php echo "$phone"; ?>  Fax. <?php echo "$fb_id"; ?><br />Email : <?php echo "$email"; ?></p>
                                                                      </div>
                                                                    </div>                                                                                                
                                                                   </div>
                                      </div>
                                    </div>
                                </div>
                            </div>                  
                            </div>
                     </div>

                    </div>
                    <?php
                    break;
                    case 'contacted':
                      $name_cus=$_POST['name_cus'];
                        $email_cus=$_POST['email_cus'];
                        $message_cus=$_POST['message_cus'];
                        $spam_cus=$_POST['spam_cus'];
                    ?>
                    <div class="col-xs-12 col-md-12" style="padding:0 0 0 0;" >
                    <div class="row" style="margin:0 0 0 0;">
                             <div class="col-sm-12" style="text-align:left;font-size:18px;">
                             <div class="panel panel-default"  >
                                <div class="panel-body">
                                <ol class="breadcrumb">
                                  <li><a href="index.php"><?php $lang=$_GET['lang']; if($lang==""){echo "หน้าหลัก";}else{ echo "Home"; }?></a></li>
                                  <li class="active"><?php $lang=$_GET['lang']; if($lang==""){echo "ติดต่อเรา";}else{ echo "Contact us"; }?></li>
                                 </ol>
                                <?php $lang=$_GET['lang']; if($lang==""){echo "<h1>ติดต่อเรา / แผนที่</h1><hr>";}else{ echo "<h1>Contact / Map</h1><hr>"; }?>
                                <?php
                              if($spam_cus=="หก"){
                                mysql_query("INSERT INTO web_contact(cname,cmail,comment)VALUES('$name_cus','$email_cus','$message_cus')");
                                ?>
                                 <div class="col-md-12" style=" width:95%; margin:0 0 0 25px;">
                                            <hr/>
                                             <ol class="breadcrumb">
                                              <li><a href="index.php"><?php $lang=$_GET['lang']; if($lang=="1"){echo "Home";}else{ echo "หน้าหลัก"; }?></a></li>
                                              <li class="active"><?php $lang=$_GET['lang']; if($lang=="1"){echo "Contact us";}else{ echo "ติดต่อเรา"; }?></li>
                                            </ol>
                                            <h1 style="color:#FF0000">คำถามของท่านส่งไปยัง ผู้ดูแลระบบเรียบร้อยแล้วค่ะ</h1>
                                            </div><!--col-md-12-->
                                  <?
                                  }else{
                                  ?>
                                   <div class="col-md-12" style=" width:95%; margin:0 0 0 25px;">
                                            <h1 style="color:#FF0000">ตอบคำถาม บวกเลขไม่ถูกต้อง</h1>
                                            <meta http-equiv='refresh' content='3; url=index.php?ge=contact'>
                                            </div><!--col-md-12-->
                               <?php
                                       } // else
                                ?>
                                </div>
                            </div>                  
                            </div>
                     </div>
                    </div>
                    <?php
                    break;
                    case "register":
                echo "<div id='product_showcase'>";
                echo "<h1>ลงทะเบียนขอรับบริการรับข่าวสาร</h1><hr />";
                ?>
                <div class="col-md-6">
                                <form action="index.php?ge=register_save" method="post">
                               <table width="100%" border="0"  cellpadding="2" cellspacing="2" style="color:#000000; font:bold 12px tahoma;">
                                  <tr height="30">
                                    <td width="27%" valign="middle" bgcolor="#ece9e9">&nbsp;ประเภทของการสมัคร</td>
                                    <td width="73%" valign="middle" bgcolor="#ece9e9">
                                      <label class="radio-inline">
                                        <input type="radio" name="ajent_name_x" id="ajent_name_x" value="1"> <b>แพทย์</b>
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="ajent_name_x" id="ajent_name_x" value="2"> <b>บุคลากร</b>
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="ajent_name_x" id="ajent_name_x" value="3"> <b>ผู้ป่วย</b>
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="ajent_name_x" id="ajent_name_x" value="4"> <b>ผู้ดูแล</b>
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="ajent_name_x" id="ajent_name_x" value="5"> <b>อื่นๆ</b>
                                      </label>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="27%" valign="middle" bgcolor="#FFFFFF" align="right">&nbsp;อีเมล์ผู้สมัคร</td>
                                    <td width="73%" valign="top" bgcolor="#FFFFFF">
                                    <input name="ajent_email" type="text"  class="form-control"  style="width:300px; margin:5px 3px 5px 3px ;  " /> </td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" bgcolor="#ece9e9" align="right">&nbsp;คำนำหน้าชื่อ </td>
                                    <td valign="top" bgcolor="#ece9e9">
                                    <select  name="ajent_prefix" class="form-control" style="margin:3px 3px 3px 3px ; width:100px;">
                                    <?php
                                    $ajent_prefixx=mysql_query("SELECT prefix_id,prefix_name  FROM prefix ");
                  while(list($prefix_id,$prefix_name)=mysql_fetch_array($ajent_prefixx)){
                  ?>
                                    <option value="<?php echo "$prefix_id"; ?>"><?php echo "$prefix_name"; ?></option>
                  <?php
                                    } //ajent_countryx
                  ?>
                                    </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right">&nbsp;ชื่อ</td>
                                    <td valign="top"><input name="ajent_fname" class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right" bgcolor="#ece9e9">&nbsp;นามสกุล</td>
                                    <td valign="top" bgcolor="#ece9e9"><input name="ajent_lname"  class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right">&nbsp;ชื่อ EN</td>
                                    <td valign="top"><input name="ajent_fname_en" class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right" bgcolor="#ece9e9">&nbsp;นามสกุล EN</td>
                                    <td valign="top" bgcolor="#ece9e9"><input name="ajent_lname_en"  class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right">&nbsp;ที่อยู่</td>
                                    <td valign="top">
                                    <textarea name="ajent_addr" class="form-control" cols="" rows="" style="width:300px; margin:3px 3px 3px 3px ; height:80px;  "></textarea>
                                    </td>
                                  </tr>
                                  <!--<tr>
                                    <td valign="middle" bgcolor="#ece9e9">&nbsp;แขวง/ตำบล</td>
                                    <td valign="top" bgcolor="#ece9e9"><input name="ajent_tambol" type="text" style="width:200px; margin:3px 3px 3px 3px ; height:20px; border:1px solid #72494a; color:#019501; " /></td>
                                  </tr>-->
                                  <tr>
                                    <td valign="middle" align="right">&nbsp;เขต/อำเภอ</td>
                                    <td valign="top"><input name="ajent_state" class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" bgcolor="#ece9e9" align="right">&nbsp;จังหวัด</td>
                                    <td valign="top" bgcolor="#ece9e9">
                                    <select name="ajent_provice" class="form-control" style="margin:3px 3px 3px 3px ; width:200px;">
                                    <?php
                                    $ajent_provicex=mysql_query("SELECT PROVINCE_ID,PROVINCE_CODE,PROVINCE_NAME,PROVINCE_NAME_ENG,GEO_ID  FROM province ");
                  while(list($PROVINCE_ID,$PROVINCE_CODE,$PROVINCE_NAME,$PROVINCE_NAME_ENG,$GEO_ID)=mysql_fetch_array($ajent_provicex)){
                  ?>
                                    <option value="<?php echo "$PROVINCE_CODE"; ?>"><?php echo "$PROVINCE_NAME"; ?></option>
                  <?php
                                    } //ajent_provicex
                  ?>
                                    </select>
                                    </td>
                                  </tr>
                                 <!-- <tr>
                                    <td valign="middle">&nbsp;ประเทศ</td>
                                    <td valign="top">
                                    <select name="ajent_country" style="margin:3px 3px 3px 3px ; height:20px; border:1px solid #72494a; ">
                                    <?php
                                  //  $ajent_countryx=mysql_query("SELECT id,country_code,country_name  FROM countries ");
                //  while(list($id,$country_code,$country_name)=mysql_fetch_array($ajent_countryx)){
                  ?>
                                    <option value="<?php //echo "$country_code"; ?>"><?php //echo "$country_name"; ?></option>
                  <?php
                                    //} //ajent_countryx
                  ?>
                                    </select>
                                    </td>
                                  </tr>-->
                                  <tr>
                                    <td valign="middle" align="right" bgcolor="#ece9e9">&nbsp;รหัสไปรษณีย์</td>
                                    <td valign="top" bgcolor="#ece9e9"><input name="ajent_zip" class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" align="right">&nbsp;เบอร์โทรศัพท์</td>
                                    <td valign="top"><input name="ajent_phone" class="form-control" type="text" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <!--<tr>
                                    <td valign="middle" bgcolor="#ece9e9">&nbsp;เบอร์มือถือ</td>
                                    <td valign="top" bgcolor="#ece9e9"><input name="ajent_cellphone" type="text" style="width:200px; margin:3px 3px 3px 3px ; height:20px; border:1px solid #72494a; color:#019501; " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;เบอร์แฟกซ์</td>
                                    <td valign="top"><input name="ajent_fax" type="text" style="width:200px; margin:3px 3px 3px 3px ; height:20px; border:1px solid #72494a; color:#019501; " /></td>
                                  </tr>
                              <tr>-->
                                    <td valign="middle">&nbsp;จงตอบคำถามต่อไปนี้</td>
                                    <td valign="top">สาม + สาม เท่ากับ = ?? <input name="spam_cus"  class="form-control" type="text" style="width:100px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                   <tr>
                                    <td valign="middle" bgcolor="#ece9e9"></td>
                                    <td valign="top" bgcolor="#ece9e9" ><input name="" type="submit" value="ลงทะเบียน" style="width:170px; margin:3px 3px 3px 3px ; height:35px; border:1px solid #ffffff; color:#ffffff; background-color:#019501; " /></td>
                                  </tr>
                                </table>
                </form></div>

                <div class="col-md-6" style="font-size: 13pt;">
                  <?php 
                  $resdfsult=mysql_query("SELECT web_id,web_sub_id,web_topic,web_pic,web_intro,web_data,lang_id,gen_lang,type,datetimex FROM web_data WHERE type='18234' and lang_id='$lang_id' ");
      while(list($web_id,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_data,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($resdfsult)){
        echo "$web_data";
      }
       ?>
                </div>
                                <?php
                echo "</div><br><br>";
                break;
                 case "update_ajent":
                      $ajent_id=$_POST['ajent_id'];
                      $ajent_email=$_POST['ajent_email'];
                      $ajent_passwd=$_POST['ajent_passwd'];
                      $ajent_name=$_POST['ajent_name'];
                      $ajent_name_x=$_POST['ajent_name_x'];
                      $ajent_prefix=$_POST['ajent_prefix'];
                      $ajent_fname=$_POST['ajent_fname'];
                      $ajent_lname=$_POST['ajent_lname'];
                      $ajent_fname_en=$_POST['ajent_fname_en'];
                      $ajent_lname_en=$_POST[',ajent_lname_en'];
                      $ajent_addr=$_POST['ajent_addr'];
                      $ajent_tambol=$_POST['ajent_tambol'];
                      $ajent_state=$_POST['ajent_state'];
                      $ajent_provice=$_POST['ajent_provice'];
                      $ajent_country=$_POST['ajent_country'];
                      $ajent_zip=$_POST['ajent_zip'];
                      $ajent_phone=$_POST['ajent_phone'];
                      $ajent_cellphone=$_POST['ajent_cellphone'];
                      $ajent_fax=$_POST['ajent_fax'];
                      $ajentstid=$_POST['ajentstid'];
                      $ajent_id=$_POST['ajent_id'];
                      global $dbname; 
                        mysql_query("UPDATE web_ajent SET  ajent_email='$ajent_email',ajent_passwd='$ajent_passwd',ajent_name='$ajent_name',ajent_name_x='$ajent_name_x',ajent_prefix='$ajent_prefix',ajent_fname='$ajent_fname',ajent_lname='$ajent_lname',ajent_fname_en='$ajent_fname_en',ajent_lname_en='$ajent_lname_en',ajent_addr='$ajent_addr',ajent_tambol='$ajent_tambol',ajent_state='$ajent_state',ajent_provice='$ajent_provice',ajent_country='$ajent_country',ajent_zip='$ajent_zip',ajent_phone='$ajent_phone',ajent_cellphone='$ajent_cellphone',ajent_fax='$ajent_fax',ajentstid='$ajentstid' WHERE ajent_id='$ajent_id' ");
                       echo "<meta http-equiv='refresh' content='0; url=index.php?ge=register_edit&ajent_email=$ajent_email'>";
                 break;
                case "register_save":
                

                  $ajent_email=$_POST['ajent_email'];
                  $text="0A1B2C34VASDFGHJJKLPOIUTREQZXCBNM56789";
                  $PassWord=substr(str_shuffle($text),0,6); 
                  $ajent_name=$_POST['ajent_name'];
                  $ajent_name_x=$_POST['ajent_name_x'];
                  $ajent_prefix=$_POST['ajent_prefix'];
                  $ajent_fname=$_POST['ajent_fname'];
                  $ajent_lname=$_POST['ajent_lname'];
                  $ajent_fname_en=$_POST['ajent_fname_en'];
                  $ajent_lname_en=$_POST[',ajent_lname_en'];
                  $ajent_addr=$_POST['ajent_addr'];
                  $ajent_tambol=$_POST['ajent_tambol'];
                  $ajent_state=$_POST['ajent_state'];
                  $ajent_provice=$_POST['ajent_provice'];
                  $ajent_country=$_POST['ajent_country'];
                  $ajent_zip=$_POST['ajent_zip'];
                  $ajent_phone=$_POST['ajent_phone'];
                  $ajent_cellphone=$_POST['ajent_cellphone'];
                  $ajent_fax=$_POST['ajent_fax'];
                  $datetimex=date('Y-m-d');
                   $spam_cus=$_POST['spam_cus'];
                  if($spam_cus=="หก"){
                    mysql_query("INSERT INTO web_ajent(ajent_email,ajent_passwd,ajent_name,ajent_name_x,ajent_prefix,ajent_fname,ajent_lname,ajent_fname_en,ajent_lname_en,ajent_addr,ajent_tambol,ajent_state,ajent_provice,ajent_country,ajent_zip,ajent_phone,ajent_cellphone,ajent_fax,ajent_date,ajentstid)VALUES('$ajent_email','$PassWord','$ajent_name','$ajent_name_x','$ajent_prefix','$ajent_fname','$ajent_lname','$ajent_fname_en','$ajent_lname_en','$ajent_addr','$ajent_tambol','$ajent_state','$ajent_provice','$ajent_country','$ajent_zip','$ajent_phone','$ajent_cellphone','$ajent_fax','$datetimex','1')");
                    echo "<br><br><center><font color=red>สมาคมโรคสมองเสื่อมแห่งประเทศไทย ยินดีที่ท่านได้เข้าเป็นส่วนหนึ่งในการพัฒนาการดูแลผู้ป่วยโรคสมองเสื่อมไทย ท่านจะได้รับข้อมูลข่าวสาร สามารถเข้าถึงข้อมูลที่มีประโยชน์จากทางเว็บไซต์ ทุกความเห็นของท่านจะเป็นส่วนหนึ่งในการพัฒนางานของเรา การอนุมัติการเเป็นสมาชิกเว็บไซต์จะดำเนินการอัตโนมัติ ท่านจะได้รับจดหมายอิเล็กโทรนิคหลังได้รับการอนุมัติ</font></center>";
                    echo "<meta http-equiv='refresh' content='2; url=index.php?ge=register_edit&ajent_email=$ajent_email'>"; 
                  }else{
                    echo "<h1>ท่านกรอกคำถาม จากเราไม่ถูกต้อง !!</h1>";
                    echo "<meta http-equiv='refresh' content='2; url=index.php'>"; 
                  }

                  
                break;  
                case "register_edit";
                $ajent_email=$_GET['ajent_email'];
                $ajent_email_tmp=$ajent_email;
                $resuldt=mysql_query("SELECT ajent_id,ajent_email,ajent_passwd,ajent_name,ajent_name_x,ajent_prefix,ajent_fname,ajent_lname,ajent_fname_en,ajent_lname_en,ajent_addr,ajent_tambol,ajent_state,ajent_provice,ajent_country,ajent_zip,ajent_phone,ajent_cellphone,ajent_fax,ajent_date,ajentstid FROM web_ajent  WHERE ajent_email='$ajent_email_tmp' ");
      while(list($ajent_id,$ajent_email,$ajent_passwd,$ajent_name,$ajent_name_x,$ajent_prefix,$ajent_fname,$ajent_lname,$ajent_fname_en,$ajent_lname_en,$ajent_addr,$ajent_tambol,$ajent_state,$ajent_provice,$ajent_country,$ajent_zip,$ajent_phone,$ajent_cellphone,$ajent_fax,$ajent_date,$ajentstid)=mysql_fetch_array($resuldt)){
        $ajent_prefix_tmp=$ajent_prefix;
        ?>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">

          <form action="index.php?ge=update_ajent&title=ฐานข้อมูล" method="post">
                               <table width="98%" border="0" align="center"  cellpadding="2" cellspacing="2" style="color:#000000; font:bold 12px tahoma;">
                                  <tr>
                                    <td colspan="2" align="center" valign="middle" ><h2>แก้ไขข้อมูล</h2></td>
                                  </tr>
                                  <tr>
                                    <td width="14%" valign="middle" >&nbsp;อีเมล์ผู้สมัคร</td>
                                    <td width="35%" valign="top" ><input name="ajent_email" value="<?php echo "$ajent_email"; ?>"  type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                   <tr>
                                    <td width="14%" valign="middle" >&nbsp;รหัสผ่าน</td>
                                    <td width="35%" valign="top" >
                                    <input name="ajent_passwd" value="<?php echo "$ajent_passwd"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                   <tr>
                                    <td valign="middle" >&nbsp;ประเภทข่าวสาร </td>
                                    <td valign="top" > 
                                    <select name="ajent_name_x" class="form-control" style="width:100px ; margin:5px 3px 5px 3px ; ">
                                    <?php
                                    $sgsdg=$ajent_name_x;
                                    $ajent_web_ajent_type=mysql_query("SELECT ajent_name_x,ajent_name_x_name  FROM web_ajent_type ");
                  while(list($ajent_name_x,$ajent_name_x_name)=mysql_fetch_array($ajent_web_ajent_type)){
                        if($sgsdg==$ajent_name_x){
                            echo "<option  value=\"$ajent_name_x\" selected=\"$ajent_name_x_name\">$ajent_name_x_name</option>";
                        }else if($sgsdg!=$ajent_name_x){
                            echo "<option  value=\"$ajent_name_x\" >$ajent_name_x_name</option>";
                        }
                  ?>
                  <?php
                                    } //ajent_countryx
                  ?>
                                    </select>    </td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;คำนำหน้าชื่อ </td>
                                    <td valign="top" > <select name="ajent_prefix" class="form-control" style="width:100px ; margin:5px 3px 5px 3px ; ">
                                    <?php
                                    $ajent_prefixx=mysql_query("SELECT prefix_id,prefix_name  FROM prefix ");
                  while(list($prefix_id,$prefix_name)=mysql_fetch_array($ajent_prefixx)){
                        if($ajent_prefix==$prefix_id){
                            echo "<option  value=\"$prefix_id\" selected=\"$prefix_name\">$prefix_name</option>";
                        }else if($ajent_prefix!=$prefix_id){
                            echo "<option  value=\"$prefix_id\" >$prefix_name</option>";
                        }
                  ?>
                  <?php
                                    } //ajent_countryx
                  ?>
                                    </select>    </td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;ชื่อ</td>
                                    <td valign="top"><input name="ajent_fname" value="<?php echo "$ajent_fname"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;นามสกุล</td>
                                    <td valign="top" ><input name="ajent_lname" value="<?php echo "$ajent_lname"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;ชื่อ</td>
                                    <td valign="top"><input name="ajent_fname_en" value="<?php echo "$ajent_fname_en"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;นามสกุล</td>
                                    <td valign="top" ><input name="ajent_lname_en" value="<?php echo "$ajent_lname_en"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;ที่อยู่</td>
                                    <td valign="top"><textarea name="ajent_addr" cols="" rows="" class="form-control"  style="width:300px; margin:5px 3px 5px 3px ; height:80px;  "><?php echo "$ajent_addr"; ?></textarea> </td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;แขวง/ตำบล</td>
                                    <td valign="top" ><input name="ajent_tambol" value="<?php echo "$ajent_tambol"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  "  /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;เขต/อำเภอ</td>
                                    <td valign="top"><input name="ajent_state" value="<?php echo "$ajent_state"; ?>" type="text" class="form-control" style="width:300px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;จังหวัด</td>
                                    <td valign="top" > <select name="ajent_provice" class="form-control" style="width:100px ; margin:5px 3px 5px 3px ; ">
                                    <?php
                                    $ajent_provicex=mysql_query("SELECT PROVINCE_ID,PROVINCE_CODE,PROVINCE_NAME,PROVINCE_NAME_ENG,GEO_ID  FROM province ");
                  while(list($PROVINCE_ID,$PROVINCE_CODE,$PROVINCE_NAME,$PROVINCE_NAME_ENG,$GEO_ID)=mysql_fetch_array($ajent_provicex)){
                  if($ajent_provice==$PROVINCE_CODE){
                            echo "<option  value=\"$PROVINCE_CODE\" selected=\"$PROVINCE_NAME\">$PROVINCE_NAME</option>";
                        }else if($ajent_provice!=$PROVINCE_ID){
                            echo "<option  value=\"$PROVINCE_CODE\" >$PROVINCE_NAME</option>";
                        }
                  ?>
                  <?php
                                    } //ajent_provicex
                  ?>
                                    </select></td>
                                  </tr>
                                 
                                  <tr>
                                    <td valign="middle" >&nbsp;รหัสไปรษณีย์</td>
                                    <td valign="top" ><input name="ajent_zip" value="<?php echo "$ajent_zip"; ?>" type="text" class="form-control" style="width:150px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;เบอร์โทรศัพท์</td>
                                    <td valign="top"><input name="ajent_phone" value="<?php echo "$ajent_phone"; ?>" type="text" class="form-control" style="width:150px; margin:5px 3px 5px 3px ;  "/></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle" >&nbsp;เบอร์มือถือ</td>
                                    <td valign="top" ><input name="ajent_cellphone" value="<?php echo "$ajent_cellphone"; ?>" type="text" class="form-control" style="width:150px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>
                                  <tr>
                                    <td valign="middle">&nbsp;เบอร์แฟกซ์</td>
                                    <td valign="top"><input name="ajent_fax" value="<?php echo "$ajent_fax"; ?>" type="text"class="form-control" style="width:150px; margin:5px 3px 5px 3px ;  " /></td>
                                  </tr>

                                   <tr>
                                     <td valign="middle" >&nbsp;สถานะ</td>
                                     <td valign="top"  >
                                     <select name="ajentstid" class="form-control" style="width:100px ; margin:5px 3px 5px 3px ; ">
                                       <?php
                      $pdc=$ajentstid;
                    $ajent_xcvtryx=mysql_query("SELECT  ajentstid,ajentst_name FROM web_ajent_status ");
                    while(list($ajentstid,$ajentst_name)=mysql_fetch_array($ajent_xcvtryx)){
                    if($pdc==$ajentstid){
                              echo "<option  value=\"$ajentstid\" selected=\"$ajentst_name\">$ajentst_name</option>";
                          }else if($pdc!=$ajentstid){
                              echo "<option  value=\"$ajentstid\" >$ajentst_name</option>";
                          }
                    ?>
                       <?php
                    } //ajent_countryx
                    ?>
                                     </select></td>
                                   </tr>
                                   <tr>
                                    <td valign="middle" bgcolor="#FFFFFF"></td>
                                    <td valign="top" bgcolor="#FFFFFF" ><input name="ajent_id" type="hidden" value="<?php echo "$ajent_id"; ?>" />
                                      <input name="input" type="submit" value="อัพเดตข้อมูล" style="width:170px; margin:3px 3px 3px 3px ; height:35px; border:1px solid #ffffff; color:#ffffff; background-color:#019501; " />

                                      <a href="index.php" class="btn btn-default">เสร็จสิ้น</a></td>
                                  </tr>
        </table>
</form>

          </div>
        </div>

        <?php
      }//resuldt
                break;
                    default:
                    ?>
                    <div class="col-xs-12 col-md-12" style=" border:0; padding:0px 30px 15px 30px;">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                        <?php
                           $result_sxcvli1=mysql_query("SELECT web_id,web_pic,web_topic,web_intro,gen_lang,type  FROM web_data WHERE type='3' order by  web_id DESC limit 1");
                               while(list($web_id,$web_pic,$web_topic,$web_intro,$gen_lang,$type)=mysql_fetch_array($result_sxcvli1)){
                           ?>
                          <div class="item active">
                          <a href="index.php?ge=view&gen_lang=<?php echo $gen_lang ?>&topic=<?php echo $web_topic ?>" title="">
                            <?php echo "<img src='core/pic/$web_pic'  border:0;' class='img-responsive' style='width:1080px; height:380px;' />";  ?>
                          </a>
                            <div class="carousel-caption">
                              <?php echo "$web_intro"; ?>
                            </div>
                          </div>
                        <?php } ?>
                         <?php
                              $resudlt_sli2=mysql_query("SELECT web_id,web_pic,web_topic,web_intro,type  FROM web_data WHERE type='3' order by RAND() ");
                                  while(list($web_id,$web_pic,$web_topic,$web_intro,$type)=mysql_fetch_array($resudlt_sli2)){
                          ?>
                          <div class="item">
                          <a href="index.php?ge=view&gen_lang=<?php echo $gen_lang ?>&topic=<?php echo $web_topic ?>" title="">
                            <?php echo "<img src='core/pic/$web_pic'  border:0;' class='img-responsive' style='width:1080px; height:380px;' />";  ?>
                          </a>
                            <div class="carousel-caption">
                            <?php echo "$web_intro"; ?>
                            </div>
                          </div>
                           <?php } ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div><!--col-xs-12 col-md-12-->

                <div class="col-xs-12 col-md-12" style="padding:20px 30px 0 30px;">
                  <h3 style="text-align:center; margin:10px 0 0 0;"><?php echo "$addr"; ?>
                </div>
                    <?php
                    break;
              }//switch
?>


 <?php 
 if ($ge=="view_all") {
    
  }else if($ge=="news"){

  } else {
    ?>
     <div class="col-xs-12 col-md-12" style="padding:10px 30px 30px 30px;">
   <div class="col-xs-12 col-md-10"><h2 style="margin:0 0 0 0 ;"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?></h2></div>
   <div class="col-xs-12 col-md-2" style="text-align:right; padding-top:0px;"><b><a href="index.php?ge=view_all&lang=<?php echo "$lang"; ?>"><?php if($lang=="en"){ echo 'Read more';  }else{ echo 'ดูทั้งหมด';  } ?></a></b></div>
   <div class="col-xs-12 col-md-12"><hr /></div>
    <?php 
        $resultd17=mysql_query(" SELECT web_id,web_sub_menu,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type FROM web_data WHERE type='17' and lang_id='$lang' order by  web_id DESC limit 4 ");
                while(list($web_id,$web_sub_menu,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type)=mysql_fetch_array($resultd17)){
         ?>
      <div class="col-xs-12 col-sm-6 col-md-3" style="height: 325px;">
          <div class="thumbnail">
          <a href="index.php?ge=view&gen_lang=<?php echo "$gen_lang"; ?>&topic=<?php echo "$web_topic"; ?>&lang=<?php echo "$lang"; ?>"><img src="core/pic/<?php echo "$web_pic"; ?>" ></a>
            <div class="caption" style="background-color:#ededed;padding:10px 0 10px 5px;">
              <h4 style="margin:0 0 0 0;"><?php echo "$web_topic"; ?></h4>
            </div>
            <p style="font-size:13pt;"><?php echo "$web_intro"; ?></p>
          </div>
        </div>
      <?php } ?>
  </div>
    <?php
  }?>



<div class="col-xs-12 col-md-12" style="background-color:#f8f8f8;padding:10px 0 10px 5px;" >
  <div class="col-xs-12 col-md-8" style="font-size:14pt;">
    <h2><?php if($lang=="en"){ echo 'Media';  }else{ echo 'สื่อมัลติมิเดีย';  } ?></h2><hr />
    <div class="col-xs-12 col-md-4">
    <h3 style="color:#01b9af; margin:0 0 5px 0;"><?php if($lang=="en"){ echo 'Technical documents';  }else{ echo 'เอกสารทางวิชาการ';  } ?></h3>
      <div class="list-group">
      <?php 
      $lang=$_GET['lang'];
        $rxesxult=mysql_query("SELECT wpid,wpid_name,wpid_name_en FROM web_paper_type ");
                while(list($wpid,$wpid_name,$wpid_name_en)=mysql_fetch_array($rxesxult)){
                  if($lang=="en"){ 
                    echo "<li><a href='index.php?ge=paper_list&wpid=$wpid&wpid_name=$wpid_name&lang=$lang'>For : $wpid_name_en</a></li><hr style='margin:0 0 0 0;' />";
                  }else{ 
                    echo "<li><a href='index.php?ge=paper_list&wpid=$wpid&wpid_name=$wpid_name&lang=$lang'>สำหรับ : $wpid_name</a></li><hr style='margin:0 0 0 0;' />"; 
                  }
                  
                }
      ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
    <h3 style="color:#01b9af; margin:0 0 5px 0;"><a href="index.php?ge=vdo&lang=<?php echo "$lang"; ?>"><?php if($lang=="en"){ echo 'Media';  }else{ echo 'สื่อ-วีดิโอ';  } ?></a></h3>
      <div class="list-group">
     
      <?php
      $lang=$_GET['lang'];
        $resusdduct=mysql_query("SELECT web_id,web_sub_id,web_topic,web_pic,web_intro,web_file,web_data,status,redireact,color,lang_id,gen_lang,type,datetimex  FROM web_data WHERE type='10' and where lang_id='$lang' Order by web_id  desc ");
            while(list($web_id,$web_sub_id,$web_topic,$web_pic,$web_intro,$web_file,$web_data,$status,$redireact,$color,$lang_id,$gen_lang,$type,$datetimex)=mysql_fetch_array($resusdduct)){
       ?>
      <li><a href="index.php?ge=vdo_view&web_id=<?php echo "$web_id"; ?>&lang=<?php echo "$lang"; ?>"><?php echo "$web_topic";?></a></li><hr style="margin:0 0 0 0;" />
      <?php
        }
      ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
     <h3 style="color:#01b9af; margin:0 0 5px 0;"><?php if($lang=="en"){ echo 'Technical documents';  }else{ echo 'เอกสารทางวิชาการ';  } ?></h3>
      <div class="list-group">
        <li><?php if($lang=="en"){ echo '
Schedule of Annual Meeting';  }else{ echo 'กำหนดการประชุมประจำปี';  } ?></li><hr style="margin:0 0 0 0;" />
        <li><?php if($lang=="en"){ echo '
Conference Papers';  }else{ echo 'ดาวน์โหลดเอกสารการประชุม';  } ?></li><hr style="margin:0 0 0 0;" />
        <li><a href="index.php?ge=paper_list&wpid=4&wpid_name=สำหรับญาติและผู้ดูแล"><?php if($lang=="en"){ echo '
Documents for physicians and caregivers';  }else{ echo 'เอกสารสำหรับ แพทย์และผู้ดูแลผู้ป่วย';  } ?></a></li><hr style="margin:0 0 0 0;" />
        <li><a href="index.php?ge=news&wnid=2&web_title=ภาพกิจกรรมสมาคม"><?php if($lang=="en"){ echo '
Photos Society';  }else{ echo 'รูปกิจกรรมสมาคม';  } ?></a></li><hr style="margin:0 0 0 0;" />
        <li><a href="index.php?ge=research&type_id=24&web_title=เผยแพร่งานวิจัยของท่าน"><?php if($lang=="en"){ echo 'Published Research';  }else{ echo 'เผยแพร่งานวิจัย';  } ?></a></li><hr style="margin:0 0 0 0;" />
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4">

    <div class="wrapper" style="font-size:20px;">
    <form >       
      <h2 class="form-signin-heading"><?php if($lang=="en"){ echo '
Subscribe to News';  }else{ echo 'สมัครบริการรับข่าวสาร';  } ?></h2>

      <input type="text" class="form-control" name="username" placeholder="Email Address"  />
      <input type="password" class="form-control" name="password" placeholder="Password" style="margin-top:5px;"/>   

      <button class="btn btn-lg btn-primary " type="submit" style="margin-top:5px;">Login</button>  
      <a href="index.php?ge=register"><?php if($lang=="en"){ echo '
Register';  }else{ echo 'สมัครสมาชิก';  } ?></a>  |  <a href="index.php?ge=view&gen_lang=323110023422101"><?php if($lang=="en"){ echo '

Member Benefits';  }else{ echo 'สิทธิพิเศษสมาชิก';  } ?></a>  
    </form><br>
    <?php if($lang=="en"){ echo 'Download the application members';  }else{ echo 'ดาวน์โหลดใบสมัครสมาชิกชมรม';  } ?> : <a href="ใบสมัครสมาชิก.pdf" title="ดาวน์โหลดใบสมัครสมาชิกชมรม"><?php if($lang=="en"){ echo 'Download the application members';  }else{ echo 'ดาวน์โหลดใบสมัคร';  } ?></a>
    
  </div>

  </div>
</div>



<div class="col-xs-12 col-md-12" style="background-color:#434242;padding:10px 0 10px 5px;">
 <div class="col-xs-12 col-md-3">
   <div class="list-group" id="nav2">
      <?php echo "$top_menu"; ?>
       <li class="dropdown" style="color:#000;" id="nav3">
        <a href="#" style="color:#fff;" class="dropdown-toggle" data-toggle="dropdown"><?php if($lang=="en"){ echo 'Content dementia';  }else{ echo 'เนื้อหาโรคสมองเสื่อม';  } ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $cat=mysql_query("SELECT ptid,pro_type,pro_type_en FROM  web_product_type ");
                    while(list($ptid,$pro_type,$pro_type_en)=mysql_fetch_array($cat)){
                      echo "<li><a href='index.php?ge=webtopic&ptid=$ptid&web_title=$pro_type'>$pro_type</a></li>"; 
                    }
          ?>
        </ul>
      </li>
       <li class="dropdown" style="color:#000;" id="nav3">
        <a href="#" style="color:#fff;" class="dropdown-toggle" data-toggle="dropdown">Research Center <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $cat=mysql_query("SELECT type_id,type_name FROM  web_type  ");
                    while(list($type_id,$type_name)=mysql_fetch_array($cat)){
                      echo "<li><a href='index.php?ge=research&type_id=$type_id&web_title=$type_name'>$type_name</a></li>"; 
                    }
          ?>
        </ul>
      </li>
     <li class="dropdown" style="color:#000;" id="nav3">
        <a href="#" style="color:#fff;" class="dropdown-toggle" data-toggle="dropdown"><?php if($lang=="en"){ echo 'News';  }else{ echo 'ข่าวประชาสัมพันธ์';  } ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php 
          $cat=mysql_query("SELECT wnid,wnid_name FROM  web_news_type  ");
                    while(list($wnid,$wnid_name)=mysql_fetch_array($cat)){
                      echo "<li><a href='index.php?ge=news&wnid=$wnid&web_title=$wnid_name'>$wnid_name</a></li>"; 
                    }
          ?>
        </ul>
      </li>

     </div>
 </div>
 <div class="col-xs-12 col-md-2">
  <div class="list-group" id="nav2">
      <li><a href="index.php?ge=site_map"><?php if($lang=="en"){ echo 'Sitemap';  }else{ echo 'แผนผังเว็บไซต์';  } ?></a></li>
      <li><a href="index.php?ge=contact"><?php if($lang=="en"){ echo 'Contatc us';  }else{ echo 'ติดต่อเรา';  } ?></a></li>

     </div>
 </div>
 <div class="col-xs-12 col-md-3">
    <div class="list-group" id="nav2">
      <li><b style="color:#fff;"><?php if($lang=="en"){ echo 'Multimedia';  }else{ echo 'สื่อมัลติมิเดีย';  } ?></b></li>
      <?php 
        $rxesxult=mysql_query("SELECT wpid,wpid_name FROM web_paper_type ");
                while(list($wpid,$wpid_name)=mysql_fetch_array($rxesxult)){
                  echo "<li><a href='index.php?ge=paper_list&wpid=$wpid&wpid_name=$wpid_name'>for : $wpid_name</a></li>";
                }
      ?>
      <li><a href="index.php?ge=youtube"><?php if($lang=="en"){ echo 'VDO';  }else{ echo 'วีดิโอ';  } ?></a></li>
     </div>
 </div>
 
 <div class="col-xs-12 col-md-4" style="text-align:right">
   <h3 style="color:#05bab1;"><?php echo "$title"; ?></h3>
   <p style="color:#fff;font-size:14pt;"> <?php echo "$fb_secret"; ?><br />
    Tel. <?php echo "$phone"; ?>  Fax. <?php echo "$fb_id"; ?><br />Email : <?php echo "$email"; ?></p>

 </div>
</div>
  </div><!--container-->

</body>
</html>