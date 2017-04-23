var app = angular.module('website', []);

app.controller('defaultCtrl', function($scope) {
    $scope.conferencePapers = [];
    $scope.conferencePapers.push({
        id: 0,
        authors: ["G. Tusik", "E. Uzun", "C. A. Wood"],
        title: "AC3N: An API and Service for Anonymous Communication in Content-Centric Networking",
        venue: "Proceedings of CCNC 2016, Las Vegas, NV, USA",
        date: "January 2016",
        abstract: "Cool stuff...",
        paperLink: "#",
        slidesLink: "#",
        bibtexLink: "#"
    });
});
