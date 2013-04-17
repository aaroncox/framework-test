<?php
require_once("EpicMongo/Mongo.php");

class FrameworkTest_Schema extends Epic_Mongo_Schema {
	protected $_db = 'frameworktest';
	protected $_typeMap = array(
		'build' => 'FrameworkTest_Build',
	);
}

class FrameworkTest_Build extends Epic_Mongo_Document {
	protected $_collection = 'builds';
}