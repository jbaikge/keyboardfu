<?php
interface JSONStorage {
	public function getJSONFilename();
}

class JSONStorageDriver extends FObjectDriver implements FObjectPopulateHooks, FObjectUpdateHooks {
	public function prePopulate(&$data) {
		if (!is_array($data)) {
			$data = array();
		}
	}
	public function doPopulate(&$data) {

	}
}
