<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li><!-- ใส่ชื่อหัวข้อเมนู ถ้าต้องการ -->
        <li class="active">
          <a href="<?= ($_SESSION['admin'] == 1)? 'indexadmin.php':'indexuser.php' ?>">
              <i class="fa fa-home text-yellow"></i> <span><font color= orange>หน้าหลัก</font></span>
            <span class="pull-right-container">
              <!--small class="label pull-right bg-blue">628</small-->
            </span>
          </a>
        </li>
          <?php
          if($_SESSION['admin'] == 1){
?>
<!--          <li><a href="../main/borrow.php"><i class="fa  fa-pencil-square-o text-warning"></i> <span><font color= "#008b8b">ขอบ้านพัก</font></span></a></li>-->
<!---->
<!--          <li><a href="../main/return.php"><i class="fa  fa-retweet text-warning"></i> <span><font color= "#008b8b">คืนบ้านพัก</font></span></a></li>-->

              <li><a href="../main/Q_borrow.php"><i class="fa fa-calendar-check-o text-warning"></i> <span><font color= "#008b8b">คิวขอบ้าน</font></span></a></li>
              <li><a href="../main/Q_wait.php"><i class="fa fa-hourglass-half text-warning"></i> <span><font color= "#008b8b">คิวรอบ้าน</font></span></a></li>

              <li><a href="../main/Q_return.php"><i class="fa fa-share-square-o text-warning"></i> <span><font color= "#008b8b">คิวคืนบ้าน</font></span></a></li>
              <li><a href="../main/Q_welcome.php"><i class="fa fa-check text-warning"></i> <span><font color= "#008b8b">คิวรับเข้าบ้าน</font></span></a></li>
              <li><a href="../main/Q_cancelB.php"><i class="fa fa-remove text-warning"></i> <span><font color= "#008b8b">คิวยกเลิกขอบ้าน</font></span></a></li>
              <li><a href="../main/Q_cancelW.php"><i class="fa fa-power-off text-warning"></i> <span><font color= "#008b8b">คิวยกเลิกรอบ้าน</font></span></a></li>
              <!--li><a href="../main/regishome.php"><i class="fa fa-calculator text-warning"></i> <span><font color= "#008b8b">ทะเบียนบ้าน</font></span></a></li-->

              <li><a href="#"><i class="fa fa-twitter text-warning"></i> <span><font color= "#008b8b">ขึ้นทะเบียนสัตว์เลี้ยง</font></span></a></li>
              <li class="treeview">
                  <a href="#">
                      <i class="glyphicon glyphicon-cog text-warning"></i><span><font color="#8b4513">ส่วนจัดการพื้นฐาน</font></span>
                      <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="set_typefamily.php"><i class="fa fa-circle-o text-green" ></i><font color="green"> ส่วนจัดการประเภทครอบครัว</font></a></li>
                      <li><a href="set_home.php"><i class="fa fa-circle-o text-green"></i><font color="green"> ส่วนจัดการเกี่ยวกับบ้าน</font></a></li>
                      <li><a href="set_admin.php"><i class="fa fa-circle-o text-green"></i><font color="green"> ส่วนจัดการผู้ดูแลระบบ</font></a></li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-group text-warning"></i><font color= "#8b4513">ส่วนรายงาน</font>
                      <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o text-green"></i><font color="green"> รายงานทะเบียนบ้าน</font></a></li>
                      <li><a href="#"><i class="fa fa-circle-o text-green"></i><font color="green"> รายงานรายชื่อผู้เกษียณ</font></a></li>
                      <li><a href="#"><i class="fa fa-circle-o text-green"></i><font color="green"> รายงานคืนบ้านพัก</font></a></li>
                  </ul>
              </li>
          <?php
          }else{

              ?>
              <li><a href="../main/borrow.php"><i class="fa  fa-pencil-square-o text-warning"></i> <span><font color= "#008b8b">ขอบ้านพัก</font></span></a></li>

              <li><a href="../main/return.php"><i class="fa  fa-retweet text-warning"></i> <span><font color= "#008b8b">คืนบ้านพัก</font></span></a></li>


              <?php
          }
          ?>

        
      </ul>
