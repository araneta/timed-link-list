<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php
	$host = JURI::root();
	$document =& JFactory::getDocument();	
	$document->addStylesheet($host.'modules/mod_timedlinklist/tmpl/css/style.css');
	$document->addScript($host.'modules/mod_timedlinklist/tmpl/js/slide.js');
?>

<div class="srfrContainer">
	<span class="title"><?php echo $module->title; ?>&nbsp;<span id="expandmarker">[+]</span></span>
	<ul style="list-style:none; list-style-type:none;" class="srfrList">
	<?php 
	$i=0;
	$n = sizeof($rows);
	
	foreach ( $rows as $row ) { 		
		if($i==$maxlinktoshow){
			echo "<div class=\"minpanel\">";
		}
		$titlename = $row->title;
		$ntext = strlen($titlename);
		if($ntext>$maxchartoshow){
			$last = $maxchartoshow;
			for($j=$maxchartoshow;$j>0;$j--){
				if($titlename[$j]==' '){
					$last = $j;
					break;
				}
			}
			$titlename = substr($titlename,0,$last);
			$titlename .= " ...";
		}
		echo "<li><a href='$row->url' title='$row->title' alt='$row->title' $targetPage> $titlename </a></li>";
		if($i==($n-1)){
			echo "</div>";
		}
		$i++;
	} //for loop 
	?>
	</ul>	
	<?php
	if($bottomtext!=''){
		echo "<br />$bottomtext";
	}
	?>
</div>
