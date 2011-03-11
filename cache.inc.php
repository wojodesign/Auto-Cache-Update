<?php
	function c($path){
		echo "/cache" . date("YmdHis", filemtime($_SERVER['DOCUMENT_ROOT'].$path)) . $path;
	}
?>