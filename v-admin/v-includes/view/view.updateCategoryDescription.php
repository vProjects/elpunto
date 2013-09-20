<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	include '../class/class.manageusers.php';
	$manage_UI = new manageusers();
	
	$menus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',0);
	$submenus = $manage_UI->getMenu_sorted('vertical_navbar','*','level',1);
	
	if(count($GLOBALS['_GET'])>=1){
		$catID = $GLOBALS['_GET']['cat'];
		$categoryDesc = $manage_UI->getValue_where('vertical_navbar','description','id',$GLOBALS['_GET']['cat']) ;
	}
?>
             

<div id="dashboard">
	<div id="mailbox" style="height:575px">
		<!--create new sub menu form--->
        <blockquote>
          <p>Update Category Description of your site</p>
          <small>It will help <cite title="Source Title">you in category changes</cite></small>
        </blockquote>
		<div class="container_navbar_manage">
        <form class="meta_tag" action="v-includes/functions/function.update_categoryDescription.php" method="get">
        	<label class="label1 label2" style="margin-right:0px;">Select Menu</label>
            <select class="input1 label2" name="menu_id" style="width:587px;" onchange="showCategoryDesc(this.value)">
                <?php
					//get the select element value of menu dynamically
					foreach($menus as $menu)
					{
						echo '<option value="'.$menu['id'].'"';
						if($menu['id'] == $catID){echo 'selected="selected"';};
						echo '>'.html_entity_decode($menu['menu_name'],ENT_QUOTES, "utf-8").'</option>';
					}
					foreach($submenus as $submenu)
					{
						echo '<option value="'.$submenu['id'].'"';
						if($submenu['id'] == $catID){echo 'selected="selected"';};
						echo '>'.html_entity_decode($submenu['menu_name'],ENT_QUOTES, "utf-8").'</option>';
					}
				?>
            </select>
        	<label class="label1 label2" style="margin-right:0px;">Category Description:</label>
        	<br /><br /><br /><br /><br /><br /><br />
            <div id="catdesc">
            <textarea id="editor6" class="ckeditor" name="editor6" placeholder="type the brief here"><?php if(isset($categoryDesc)) echo $categoryDesc[0]['description'] ?></textarea>
            </div>
            <?php if(isset($result)) echo $result ?>
            <button type="submit" class="btn btn-primary" onClick="" style="float:right;margin-right: 42px;">Update</button> 
        </form>
		</div><!--sub menu create form ends here-->     
    </div>   
</div>