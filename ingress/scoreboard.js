var cats = [
	["Destroyed Resonator",   75, /span> destroyed an L/],
	["Destroyed Field",      750, /span> destroyed a Control Field/],
	["Destroyed Link",       187, /span> destroyed the Link/],
	["Deployed Resonator",   125, /span> deployed an/],
	["Captured",             500, /span> captured/],
	["Linked",               313, /span> linked/],
	["Fielded",             1250, /span> created a Control Field/]
]
var catLen = cats.length
var scores = {}
var classMap = {}
var initArr = function() {
	var a = []
	for (var i = 0; i < catLen; i++) {
		a.push([])
	}
	return a
}
var tally = function() {
	var user = this.innerHTML
	// Skip chatter
	if (/:$/.test(user)) {
		return
	}
	// Init with blanks
	scores[user] = scores[user] || function(c) {
		classMap[user] = c
		return initArr()
	}(this.className)
	var h = this.parentNode.innerHTML
	for (var i = 0; i < cats.length; i++) {
		if (cats[i][2].test(h)) {
			scores[user][i].push(cats[i][1])
		}
	}
}
var makeHeaders = function() {
	var headers = ""
	for (var i = 0; i < catLen; i++) {
		headers += "<th>" + cats[i][0] + "</th>"
		$("#Scores tfoot th:first-child").after("<td/>")
	}
	$("#Scores thead th:first-child").after(headers)
}
var pushScores = function(tbody, tfoot) {
	var totalSums = initArr()
	for (u in scores) {
		var s = scores[u]
		var tr = $("<tr/>")
		var total = [0,0]
		tbody.append(tr)
		tr.append($("<th/>").text(u).addClass(classMap[u]))
		for (var i = 0; i < catLen; i++) {
			var count = s[i].length
			var sum = s[i][0] * count || 0

			if (totalSums[i].length == 0) totalSums[i] = [0,0]
			totalSums[i][0] += count
			totalSums[i][1] += sum

			total[0] += count
			total[1] += sum
			tr.append($("<td/>").text(count).append($("<small>").text(sum)))
		}
		tr.append($("<td/>").text(total[0]).append($("<small>").text(total[1])))
	}
	for (var i = 0; i < totalSums.length; i++) {
		tfoot.find("td:eq("+i+")").text(totalSums[i][0]).append($("<small>").text(totalSums[i][1]))
	}
}
