<div class="user-panel">
        <div class="pull-left image">
        <?php $sexper = $_SESSION["sex"]; ?>
        <?php if($sexper == 'F'){ ?>
            <img src="../../dist/img/avatar3.png" class="img-circle" alt="User Image">
        <?php } else if($sexper == 'M'){ ?> 
        	<img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        <?php } else { ?>
        	<img src="../../dist/img/avatar.png" class="img-circle" alt="User Image">
        <?php } ?> 
        </div>
        <?php $nameper = $_SESSION["nameFL"]; ?>
        <div class="pull-left info">
          <p><?php echo $nameper; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
</div>