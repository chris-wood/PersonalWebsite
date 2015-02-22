// define sets and set set intersections
var sets = [
	{label: "Security & Privacy", size: 20}, 
	{label: "Content-Centric Networking", size: 20},
	{label: "Theory & Formal Methods", size: 20}
	];
var overlaps = [
	{sets: [0,1], size: 2},
	{sets: [0,2], size: 2},
	{sets: [1,2], size: 2}
	];

// get positions for each set
sets = venn.venn(sets, overlaps);

// draw the diagram in the 'simple_example' div
var diagram = venn.drawD3Diagram(d3.select("#research-areas"), sets, 500, 500);
diagram.nodes
    .on("mouseover", function(d, i) {
        var node = d3.select(this).transition();
        node.select("text").style("font-size", "18px");
    })
    .on("mouseout", function(d, i) {
        var node = d3.select(this).transition();
        node.select("text").style("font-size", "16px");
    });

var colours = d3.scale.category10();
diagram.circles.style("fill-opacity", .8)
	.style("stroke-opacity", 0)
	.style("fill", function(d,i) { return colours(i); })
	.style("stroke", function(d,i) { return colours(i); });
diagram.text.style("fill", "white");

var app = angular.module("caw-site", []);
app.controller('DailyGrindController', ['$scope', '$http', function($scope, $http) {

	$scope.lastTracks = [];

	var apiKey = "5a328a61c5b345719cd2faf016043a81";
	var username = "chriswood4567";
	var songListUrl = "http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=" + username + "&api_key=" + apiKey + "&format=json";

	// TODO
	var albumUrlPrefix = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" + apiKey + "&format=json&"; //&artist=Cher&album=Believe";

	$http.get(songListUrl).
		success(function(data, status, headers, config) {
			console.log(data);
			for (var i = 0; i < data.recenttracks.track.length && i < 5; i++) {
				var trackData = data.recenttracks.track[i];
				$sc ope.lastTracks.push({
					"name" : trackData.name,
					"artist" : trackData.artist,
					"album" : trackData.album
				})
			}
			console.log($scope.lastTracks);
		}).
		error(function(data, status, headers, config) {
			$scope.lastTracks = [];
		});

}]);