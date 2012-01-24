CREATE TABLE IF NOT EXISTS types (
	type_id INTEGER PRIMARY KEY,
	type_name VARCHAR(64) NOT NULL,
	UNIQUE(type_name) ON CONFLICT IGNORE
);
CREATE TABLE IF NOT EXISTS bottles (
	bottle_id INTEGER,
	type_id NUMERIC,
	bottle_name TEXT,
	bottle_size NUMERIC,
	FOREIGN KEY(type_id) REFERENCES types(type_id) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY(bottle_id) ON CONFLICT REPLACE
);
CREATE TABLE IF NOT EXISTS prices (
	price_id INTEGER PRIMARY KEY,
	bottle_id NUMERIC,
	price_retail NUMERIC,
	price_sale NUMERIC,
	price_date_start NUMERIC,
	price_date_end NUMERIC,
	FOREIGN KEY(bottle_id) REFERENCES bottles(bottle_id) ON DELETE CASCADE ON UPDATE CASCADE,
	UNIQUE(bottle_id, price_date_start, price_date_end) ON CONFLICT IGNORE
);
