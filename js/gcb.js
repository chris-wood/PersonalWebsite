// Generated by CoffeeScript 1.4.0
(function() {
  var Badge, COMMIT_DISPLAYED_ID_LENGTH, COMMIT_MSG_MAX_LENGTH, DEFAULT_BRANCH_NAME, HIDE_FILES_TXT, SHOW_FILES_TXT, commit_msg, config, mainpage, parseDate, truncate;

  config = this;

  config.client_id = "";

  config.client_secret = "";

  config.devel = "&client_id=" + client_id + "&client_secret=" + client_secret;

  DEFAULT_BRANCH_NAME = "master";

  COMMIT_MSG_MAX_LENGTH = 120;

  COMMIT_DISPLAYED_ID_LENGTH = 8;

  SHOW_FILES_TXT = 'Click to show more';

  HIDE_FILES_TXT = 'Click to show less';

  truncate = function(string, length, truncation) {
    if (length == null) {
      length = 30;
    }
    if (truncation == null) {
      truncation = "...";
    }
    return string.slice(0, +length + 1 || 9e9);
  };

  commit_msg = function(string) {
    return truncate(string.replace(/\n.*/g, "").replace(/\r.*/g, ""), COMMIT_MSG_MAX_LENGTH);
  };

  parseDate = function(dateTime) {
    return dateTime.replace(/T.*/, "");
  };

  Badge = (function() {
    var api_commit, api_repo, commit_url, name, selector;

    selector = api_commit = api_repo = name = commit_url = "";

    function Badge(username, repo, branch) {
      this.username = username;
      this.repo = repo;
      this.branch = branch != null ? branch : DEFAULT_BRANCH_NAME;
      this.api_commit = "https://api.github.com/repos/" + this.username + "/" + this.repo + "/commits/" + this.branch + "?callback=?" + devel;
      this.api_repo = "https://api.github.com/repos/" + this.username + "/" + this.repo + "?callback=?" + devel;
      this.name = "" + username + "_" + (repo.replace(/\./g, '-'));
      this.selector = "#" + this.name;
      $("#gcb-template").clone().appendTo("#gcb-container").attr("id", this.name);
      $(this.selector).appendTo("#gcb-container").show();
      this.parse_commit();
      this.parse_repo();
    }

    Badge.prototype.parse_commit = function() {
      var _this = this;
      return $.getJSON(this.api_commit, function(data) {
        var added, file, modified, removed, _i, _len, _ref;
        if (data.meta && data.meta.status === 403) {
          console.log("Something went wrong requesting the commits for " + _this.api_commit + ": " + data.data.message);
          $(selector).text("Error: " + data.data.message);
          return;
        }
        $("div.diffline img.gravatar", _this.selector).attr({
          "src": data.data.committer.avatar_url,
          alt: ""
        });
        _this.commit_url = "https://github.com/" + _this.username + "/" + _this.repo + "/commit/" + data.data.sha;
        added = removed = modified = 0;
        _ref = data.data.files;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          file = _ref[_i];
          switch (file.status) {
            case "modified":
              modified++;
              $("ul.difflist", _this.selector).append($("<li/>").text(file.filename).prepend($("<span class='mini-icon mini-icon-modified'/>")).append($("<span class='diffmodified'/>").text(" (" + file.changes + ")")));
              break;
            case "added":
              added++;
              $("ul.difflist", _this.selector).append($("<li/>").text(file.filename).prepend($("<span class='mini-icon mini-icon-added'/>")).append($("<span class='diffadded'/>").text(" (" + file.changes + ")")));
              break;
            default:
              removed++;
              $("ul.difflist", _this.selector).append($("<li/>").text(file.filename).prepend($("<span class='mini-icon mini-icon-removed'/>")).append($("<span class='diffremoved'/>").text(" (" + file.changes + ")")));
          }
        }
        $("span.branch", _this.selector).html(" (branch: <b>" + _this.branch + "</b>)");
        $("div.diffline a.badge", _this.selector).attr({
          "href": _this.commit_url
        }).text(truncate(data.data.sha, COMMIT_DISPLAYED_ID_LENGTH, ""));
        $("span.text-date", _this.selector).text(" " + (parseDate(data.data.commit.committer.date)));
        $("span.committer", _this.selector).text(data.data.commit.committer.name);
        $("span.email", _this.selector).text(" <" + data.data.commit.committer.email + ">");
        $("div.commitmessage", _this.selector).append(commit_msg(data.data.commit.message));
        $("div.commitmessagelong", _this.selector).append(data.data.commit.message).hide();
        $("a.showMoreLink", _this.selector).attr("id", "showMoreLink_" + _this.name);
        $("div.diffstat span.diffadded", _this.selector).before(added);
        $("div.diffstat span.diffremoved", _this.selector).before(removed);
        $("div.diffstat span.diffmodified", _this.selector).before(modified);
        $("div.filelist", _this.selector).attr({
          id: "files_" + _this.name
        });
        $("#showMoreLink_" + _this.name).click(function() {
          $("#files_" + _this.name).toggle(400);
          $("" + _this.selector + " > .commitmessagelong").toggle();
          $("" + _this.selector + " > .commitmessage").toggle();
          if ($("#showMoreLink_" + _this.name).text() === SHOW_FILES_TXT) {
            $("#showMoreLink_" + _this.name).text(HIDE_FILES_TXT);
          } else {
            $("#showMoreLink_" + _this.name).text(SHOW_FILES_TXT);
          }
          return false;
        });
        return $(_this.selector).click(function() {
          return $("#showMoreLink_" + _this.name).click();
        });
      });
    };

    Badge.prototype.parse_repo = function() {
      var _this = this;
      return $.getJSON(this.api_repo, function(data) {
        $("div.username a", _this.selector).text("" + _this.username + "/" + _this.repo).attr("href", data.data.html_url);
        $("span.followers", _this.selector).text(data.data.watchers);
        return $("span.forks", _this.selector).text(data.data.forks);
      });
    };

    return Badge;

  })();

  mainpage = function() {
    return $("#gcb-container").load("html/badge.html", function() {
      var badgeData, _i, _len, _results;
      _results = [];
      for (_i = 0, _len = Badges.length; _i < _len; _i++) {
        badgeData = Badges[_i];
        _results.push(new Badge(badgeData.username, badgeData.repo, badgeData.branch));
      }
      return _results;
    });
  };

  $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', 'css/style.css'));

  $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', 'https://github.com/assets/github.css'));

  $(function() {
    return mainpage();
  });

}).call(this);