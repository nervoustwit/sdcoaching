<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="ccm-gathering-tile-title-date">
	<div class="ccm-gathering-tile-headline"><a href="<?php echo $link?>"><?php echo $title?></a></div>
	<div class="ccm-gathering-tile-date"><?php echo Core::make('helper/date')->formatDateTime($date_time, true)?></div>
</div>