SELECT
	bottles.bottle_id AS sku,
	type_name,
	bottle_name,
	bottle_size || 'ml' AS size,
	price_retail AS retail,
	price_sale AS sale,
	date(price_date_start, 'unixepoch') AS start,
	date(price_date_end, 'unixepoch') AS end,
	CASE STRFTIME('%s', 'now') BETWEEN price_date_start AND price_date_end
		WHEN 1 THEN 'ACTIVE'
		ELSE ''
	END AS active
FROM prices
	LEFT JOIN bottles ON(bottles.bottle_id = prices.bottle_id)
	LEFT JOIN types ON(types.type_id = bottles.type_id)
ORDER BY type_name, bottle_name, bottle_size, price_date_start;