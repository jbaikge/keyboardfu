<?php
interface DatabaseTableStorage {
	public function getDatabaseTableName();
	public function getDatabaseIDWhere($id);
}

class DatabaseTableStorageDriver extends FObjectDriver implements FObjectPopulateHooks, FObjectUpdateHooks {
	public function prePopulate(&$data) {}
	public function doPopulate(&$data) {
		$sql = sprintf("SELECT %s FROM %s WHERE %s LIMIT 1",
			$this->getAliasedFieldList(),
			$this->subject->getDatabaseTableName(),
			$this->subject->getDatabaseIDWhere($this->subject->initialized_id)
		);
		$result = FDB::query($sql);
		if ($result->count() == 1) {
			return $result->asAssoc()->fetch();
		} else {
			return array();
		}
	}
	public function postPopulate(&$data) {}
	public function failPopulate($exception) {}

	public function preUpdate(&$data) {
		FDB::query("START TRANSACTION");
	}
	public function doUpdate(&$data) {
		$subject_data = $this->subject->getData();
		$updates = array();
		foreach ($this->subject->getModel()->database() as $alias => $options) {
			$field = isset($options['fieldName']) ? $options['fieldName'] : $alias;
			$updates[] = FDB::query("%s = '%s'", $field, $subject_data[$alias]);
		}
		var_dump($this->subject->id);
		if ($this->subject->id != '') {
			$sql = sprintf("UPDATE %s SET %s WHERE %s LIMIT 1",
				$this->getDatabaseTableName(),
				implode(', ', $updates),
				$this->getDatabaseIDWhere($this->subject->id)
			);
		} else {
			$sql = sprintf("INSERT INTO %s SET %s",
				$this->getDatabaseTableName(),
				implode(', ', $updates)
			);
		}
		FDB::query($sql);
	}
	public function postUpdate(&$data) {
		FDB::query("COMMIT");
	}
	public function failUpdate($exception) {
		FDB::query("ROLLBACK");
	}

	private function getAliasedFieldList() {
		$list = array();
		foreach ($this->subject->getModel()->database() as $alias => $options) {
			if (isset($options['fieldName'])) {
				$list[] = $options['fieldName'] . ' AS ' . $alias;
			} else {
				$list[] = $alias;
			}
		}
		return implode(', ', $list);
	}
}
