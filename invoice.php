<?php
if (isset($_SERVER['PATH_INFO'])) {
	$invoice = ltrim($_SERVER['PATH_INFO'], '/');
	$i = json_decode(file_get_contents(__DIR__ . '/invoices/' . $invoice . '.json'));
} else {
	$i = new stdClass;
}
$subtotal = array_reduce($i->lineItems, function(&$sum, &$v) { return $sum += $v->quantity * $v->unitPrice; }, 0);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>KeyboardFu - Invoice</title>
<link href="//fonts.googleapis.com/css?family=Droid+Sans+Mono|PT+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Julee&amp;text=FU" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC&amp;text=Keyboard" rel="stylesheet">
<style type="text/css">
@media screen {
	body {
		background:#CCC;
	}
	#Paper {
		background:#FFF;
		height:10in;
		margin:0 auto;
		padding:0.5in;
		width:7.5in;
	}
}
a {
	color:#666;
	text-decoration:none;
}
body {
	color:#222;
	font:0.75em/1.5em "PT Sans";
}
dl {
	margin:0;
	padding:0.75em 0;
}
dl.address {
	padding:0;
	margin:0;
}
dl.address dt {
	font-weight:bold;
}
dl.address dd {
	color:#666;
	margin:0;
}
span.keyboard {
	color:#222;
	font:2em/0em "IM Fell DW Pica SC";
}
span.fu {
	color:#C10;
	font:2em/0em Julee;
}
header > img {
	float:left;
	width:1.25in;
}
header h1 {
	margin-left:-0.125em;
}
table {
	border-collapse:collapse;
	margin-top:2em;
	width:100%;
}
table th, table td {
	margin:0;
	padding:0.5em;
}
table thead th,
table tbody th {
	text-align:left;
}
table tfoot th,
table thead th.floatHeading {
	text-align:right;
}
table thead th {
	background:#EEE;
}
table .total td,
table .total th {
	font-size:1.25em;
}
#Identity {
	float:right;
}
#Invoice {
	clear:left;
	color:#666;
	font-size:3em;
	line-height:2.5em;
	text-align:left;
}
#Info {
	border-bottom:0.25em solid #CCC;
	border-top:0.25em solid #CCC;
	clear:both;
	overflow:hidden;
	padding:1em 0 2em;
}
#Info section {
	float:left;
}
#Info .billing,
#Info .shipping {
	width:25%;
}
#Info .project {
	width:50%;
}
#Info h1,
#Info .project dt {
	font-size:1em;
	font-weight:bold;
}
#Info .project dt {
	clear:left;
	float:left;
	width:7em;
}
#Info .project dd {
	color:#666;
	float:left;
	margin:0;
}
.float {
	font-family:"Droid Sans Mono";
	text-align:right;
}
</style>
</head>
<body>
<div id="Paper">
<header>
	<img src="<?php echo $i->logo; ?>" alt="Logo">
	<div id="Identity">
		<h1><?php echo $i->title; ?></h1>
		<dl class="address">
			<dt><?php echo $i->company->name; ?></dt>
			<dd><?php echo $i->company->address1; ?></dd>
			<dd><?php echo $i->company->address2; ?></dd>
			<dd><?php echo $i->company->city . ', ' . $i->company->state . ' ' . $i->company->zip; ?></dd>
		</dl>
		<div class="email">Email: <a href="mailto:<?php echo $i->email; ?>"><?php echo $i->email; ?></a></div>
		<div class="website">Website: <a href="<?php echo $i->website; ?>"><?php echo $i->website; ?></a></div>
	</div>
	<div id="Invoice">invoice</div>
</header>
<div id="Info">
	<section class="billing">
		<h1>Bill To</h1>
		<dl class="address">
			<dt><?php echo $i->billTo->name; ?></dt>
			<dd><?php echo $i->billTo->address1; ?></dd>
			<dd><?php echo $i->billTo->address2; ?></dd>
			<dd><?php echo $i->billTo->city . ', ' . $i->billTo->state . ' ' . $i->billTo->zip; ?></dd>
		</dl>
	</section>
	<section class="shipping">
		<h1>Ship To</h1>
	</section>
	<section class="project">
		<dl>
			<dt>Project</dt>
			<dd><?php echo $i->project; ?></dd>
			<dt>Date</dt>
			<dd><?php echo $i->invoiceDate; ?></dd>
			<dt>Invoice No.</dt>
			<dd><?php echo $i->invoiceNumber; ?></dd>
			<dt>Order No.</dt>
			<dd><?php echo $i->orderNumber; ?></dd>
			<dt>Sales Rep.</dt>
			<dd><?php echo $i->salesRep; ?></dd>
		</dl>
	</section>
</div>
<section id="LineItems">
	<table>
		<thead>
			<tr>
				<th width="15%">Product ID</th>
				<th width="52%">Description</th>
				<th width="10%" class="floatHeading">Unit Price</th>
				<th width="10%" class="floatHeading">Qty/Hours</th>
				<th width="13%" class="floatHeading">Line Total</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="2"></td>
				<th colspan="2">Subtotal</th>
				<td class="float"><?php printf('$%0.2f', $subtotal); ?></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<th colspan="2">Tax</th>
				<td class="float"><?php printf('$%0.2f', $i->tax); ?></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<th colspan="2">Miscellaneous</th>
				<td class="float"><?php printf('$%0.2f', $i->misc); ?></td>
			</tr>
			<tr class="total">
				<td colspan="2"></td>
				<th colspan="2">Total</th>
				<td class="float"><?php printf('$%0.2f', $subtotal + $i->tax + $i->misc); ?></td>
			</tr>
		</tfoot>
		<tbody>
<?php foreach ($i->lineItems as $item) { ?>
			<tr>
				<th><?php echo $item->id; ?></th>
				<td><?php echo $item->description; ?></td>
				<td class="float"><?php printf('$%0.2f', $item->unitPrice); ?></td>
				<td class="float"><?php printf('%0.2f', $item->quantity); ?></td>
				<td class="float"><?php printf('$%0.2f', $item->quantity * $item->unitPrice); ?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</section>
<footer>
</footer>
</div>
</body>
</html>
