activate :autoprefixer do |prefix|
  prefix.browsers = "last 2 versions"
end

# Per-page layout changes
page '/*.xml', layout: false
page '/*.json', layout: false
page '/*.txt', layout: false

# page "/publications/*", :layout => "publication"
data.publications.conferences.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_conference.html", :locals => { :key => key }, :ignore => true
end
data.publications.journals.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_journal.html", :locals => { :key => key }, :ignore => true
end
data.publications.posters.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_poster.html", :locals => { :key => key }, :ignore => true
end
data.publications.theses.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_thesis.html", :locals => { :key => key }, :ignore => true
end
data.publications.reports.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_report.html", :locals => { :key => key }, :ignore => true
end
data.publications.rfcs.each do |key, p|
    proxy "/publications/#{key}.html", "/pub_rfc.html", :locals => { :key => key }, :ignore => true
end
