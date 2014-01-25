<?php
	$result = $this->requestAction( array('controller'=>'dedicates','action'=>'getCounts') );
	$result[2] = $this->requestAction( array('controller'=>'posts','action'=>'getCounts') );
	$result[3] = $this->requestAction( array('controller'=>'slides','action'=>'getCounts') );
?>

<div class="panel-heading">
	<h3 class="panel-title">Some Data</h3>
</div>
<ul class="list-group">
    <li class="list-group-item"><span class="badge"><?php echo $result[0] ?></span>Dedicas hidden</li>
    <li class="list-group-item"><span class="badge"><?php echo $result[1] ?></span>All dedicas</li>
    <li class="list-group-item"><span class="badge"><?php echo $result[2] ?></span>All articles</li>
    <li class="list-group-item"><span class="badge"><?php echo $result[3] ?></span>All slide Image</li>
</ul>