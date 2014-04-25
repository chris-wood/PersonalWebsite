Array.prototype.each = function(fn) {
  for (var i = 0, len = this.length; i < len; i++)
    fn(this[i], i);
};

var dimension = 300,
    radius = dimension / 2,
    twopi  = Math.PI * 2,
    halfpi = Math.PI / 2,
    n = 5; // default

// canvas
var svg = d3.select('svg')
  .attr({
    width: dimension,
    height: dimension
  });

// container element
var container = svg
  .append('svg:g')
  .attr('id', 'container')
  .attr('transform', 'rotate(-90 ' + radius + ' ' + radius + ')'); // origin is set at 3'oclock

// create an array of data points
function createPoints(n) {
  // generate an array of 13 point coordinates along a circle
  for (var i = 0; i < n; i++) {
    // convert negative coordintes to positive by adding the radius
    var x = radius + (radius * Math.cos((i * twopi) / n)),
        y = radius + (radius * Math.sin((i * twopi) / n));

    data.push([x, y]);
  }
}

// connect a point to all other points
function drawLine(index) {
  data.each(function(datum, i) {
    if (index === i) return;
    var line = container
      .append('svg:line')
      .attr('class', 'line');

    line.attr({
      x1: data[index][0],
      y1: data[index][1],
      x2: datum[0],
      y2: datum[1]
    });
  });
};

// draws all lines in the dataset. O(n^2)
function drawLines() {
  // connect all points to other points
  data.each(function(datum, index) {
    drawLine(index);
  });
}

// draws the star
function drawStar(starN) {
  // clear any existing star
  container.selectAll('*').remove();

  // reset the data
  data = [];
  createPoints(starN);

  // draw that shit
  drawLines();
}


function rotateString(angle) {
  return 'rotate(' + angle + ' ' + radius + ' ' + radius + ')';
};

// continuously animate the container *unused because its weird looking*
function rotateStar() {
  container
    .transition()
    .duration(1000)
    .attrTween('transform', function() {
      return d3.interpolateString(rotateString(0), rotateString(360));
    });
}

// animate between 5-34 points *unused*
var interval = undefined;
function animatePoints() {
  interval = setInterval(function() {
    if (n == 34) n = 5;
    drawStar(n++);
  }, 300);
}

// mousemove in the adjust area redraws the star
var adjuster = document.getElementById('main-adjuster');
var y = d3.scale.linear()
  .domain([0, 300]) // the x coordinate of the adjuster
  .rangeRound([4, 34]) // the desired output
  .clamp(true);

// redraw the star with the x offset
adjuster.addEventListener('mousemove', function(e) {
  var yCoord = e.pageY - adjuster.offsetLeft;
  drawStar(y(yCoord));
});

// mobile-ness
adjuster.addEventListener('touchmove', function(e) {
  var yCoord = e.targetTouches[0].pageY - adjuster.offsetLeft;
  drawStar(y(yCoord));
});

// kick it
drawStar(25);