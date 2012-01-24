<?php
function bottle_name ($data) {
	$last_space_pos = strrpos($data['brand'], ' ');
	$name = substr($data['brand'], 0, $last_space_pos);
	return $name;
}
function bottle_size ($data) {
	$last_space_pos = strrpos($data['brand'], ' ');
	$volume = substr($data['brand'], $last_space_pos);
	if (strpos($volume, 'ml')) {
		$volume = intval($volume);
	} else if (strpos($volume, 'L')) {
		$volume = floatval($volume) * 1000;
	}
	return $volume;
}
function generate_bottle_sql ($data) {
	return sprintf(
		"INSERT INTO bottles (type_id, bottle_id, bottle_name, bottle_size) VALUES ((SELECT type_id FROM types WHERE type_name = '%s'), %d, '%s', %d);",
		SQLite3::escapeString(type_name($data)),
		$data['sku'],
		SQLite3::escapeString(bottle_name($data)),
		bottle_size($data)
	);
}
function generate_price_sql ($data) {
	return sprintf(
		"INSERT INTO prices (bottle_id, price_retail, price_sale, price_date_start, price_date_end) VALUES (%d, %0.2f, %0.2f, %d, %d);",
		$data['sku'],
		$data['retail'],
		$data['sale'],
		$data['start'],
		$data['end']
	);
}
function generate_type_sql ($data) {
	return sprintf(
		"INSERT INTO types (type_name) VALUES ('%s');",
		SQLite3::escapeString(type_name($data))
	);
}
function parse ($file) {
	$start = strtotime(substr(basename($file), 3, 3) . ' 1, ' . substr(basename($file), 6, 2));
	$end = strtotime('+1 month -1 day', $start);

	$labels = array('description', 'sku', 'brand', 'retail', 'discount', 'sale', 'per_liter');
	$queries = new ArrayObject(array('BEGIN TRANSACTION;'));
	$fh = fopen($file, 'r');
	fgetcsv($fh); // Discard first row
	while ($row = fgetcsv($fh)) {
		$data = array_combine($labels, $row);
		$data['start'] = $start;
		$data['end'] = $end;
		$queries->append(generate_type_sql($data));
		$queries->append(generate_bottle_sql($data));
		$queries->append(generate_price_sql($data));
	}
	fclose($fh);
	$queries->append('COMMIT;');
	return $queries;
}
function type_name ($data) {
	$name = $data['description'];
	$name = preg_replace('/\s+/', ' ', $name);
	$name = strtolower($name);
	$name = ucwords($name);
	return $name;
}

for ($i = 1; $i < $argc; $i++) {
	echo implode(PHP_EOL, parse($argv[$i])->getArrayCopy());
}
