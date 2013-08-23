<?php	
?>
<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="#">WC Group</a>
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="../">Go to Site</a></li>
          <li><a href="#">Terms</a></li>
          <?php if(isset($_SESSION['code'])){ ?>

       	  		<ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Action<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="admin.php">Home</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="v-includes/logout.php">Log Out</a></li>
                      </ul>
                    </li>
            	 </ul>
	       <?php } else {} ?>

        </ul>
      </div>
    </div>