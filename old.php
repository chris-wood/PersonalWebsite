
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="cryptography, computer security">
<title>Andrés Monroy-Hernández</title>
<link rel="icon" href="imgs/favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico">
<link href="css/main.css" rel="stylesheet" media="projection, screen">
<link href="css/print.css" rel="stylesheet" media="print">
<script src="js/jquery-1.7.min.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr-min.js"></script>
<![endif]--> 
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->

<script>
	$(document).ready(function () {
		$("#portrait a").hover(function () {
			var thumbOver = $(this).find("img").attr("src");
			$(this).css({
				'background': 'url(' + thumbOver + ') no-repeat center bottom'
			});
			$(this).find("span").stop().fadeTo('normal', 0, function () {
				$(this).hide()
			});
		}, function () {
			$(this).find("span").stop().fadeTo('normal', 1).show();
		});
	
		function filterPath(string) {
			return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '');
		}
		var locationPath = filterPath(location.pathname);
		var scrollElem = scrollableElement('html', 'body');
		$('a[href*=#]').each(function () {
			var thisPath = filterPath(this.pathname) || locationPath;
			if (locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, '')) {
				var $target = $(this.hash),
					target = this.hash;
				if (target) {
					var targetOffset = $target.offset().top;
					$(this).click(function (event) {
						event.preventDefault();
						$(scrollElem).animate({
							scrollTop: targetOffset
						}, 400, function () {
							location.hash = target;
						});
					});
				}
			}
		});
	
		function scrollableElement(els) {
			for (var i = 0, argLength = arguments.length; i < argLength; i++) {
				var el = arguments[i],
					$scrollElement = $(el);
				if ($scrollElement.scrollTop() > 0) {
					return el;
				} else {
					$scrollElement.scrollTop(1);
					var isScrollable = $scrollElement.scrollTop() > 0;
					$scrollElement.scrollTop(0);
					if (isScrollable) {
						return el;
					}
				}
			}
			return [];
		}
	});
</script>
</head>

<body>
	<div id="outerWrapper">
    <div id="nav">
      <figure id="portrait">
     		<a href="#"><span><img src="imgs/portrait.jpg" width="150" height="140" 
        alt="portrait of Christopher"></span></a>
      </figure><!-- end #portrait -->
      
      <nav>
      	<h2 class="hide">navigation</h2>
        
        <ol>
        	<li><a href="#about">About</a></li>
        	<li><a href="#edu">Education</a></li>
          <li><a href="#interests">Interests</a></li>
          <li><a href="#positions">Current Positions</a></li>
          <li><a href="#experience">Work Experience</a></li>
          <li><a href="#training">Additional Training</a></li>
          <li><a href="#projects">Highlighted Projects</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#publications">Publications</a></li>
          <!--<li><a href="#articles">Opinion Articles</a></li>-->
          <li><a href="#presentations">Presentations</a></li>
          <!--<li><a href="#press">Press</a></li>-->
          <li><a href="#honors">Honors</a></li>
          <li><a href="#mentoring">Mentoring</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#teaching">Teaching</a></li>
          <li><a href="cv.pdf" title="Curriculum Vitae">Curriculum Vitae</a></li>
          <li><a href="research-statement.pdf" title="Research Statement">Research Statement</a></li>
          <li><a href="teaching-statement.pdf" title="Teaching Statement">Teaching Statement</a></li>
        </ol>
      </nav>
    </div><!-- end #nav -->
    
    <div id="contentWrapper">
    	<section id="contactInfo">
      	<h2 class="hide">contact info</h2>
        
        <img src="imgs/portrait-print.jpg" width="150" height="70" alt="portrait of Andrés">
        
        <address>
          <ul itemscope itemtype="http://schema.org/Person">
            <li><span itemprop="email">email@andresmh.com</span></li>
          </ul>
        </address>
      </section><!-- end #contactInfo -->
      
      <h1 itemscope itemtype="http://schema.org/Person"><span itemprop="name">Andrés 
      Monroy-Hernández</span></h1>
      
      <section id="about" itemscope itemtype="http://schema.org/Person">

<p>
I am a <a href="http://research.microsoft.com/people/andmon/">postdoctoral researcher</a> at <a href="http://research.microsoft.com">Microsoft Research</a> and a <a href="http://cyber.law.harvard.edu/people/amonroyhernandez">Fellow</a> at the <a href="http://cyber.law.harvard.edu/">Berkman Center for Internet &amp; Society</a> at <a href="http://www.harvard.edu/">Harvard University</a>. Previously, I was a doctoral student at the <a href="http://www.media.mit.edu">MIT Media Lab</a>. 
</p>

<p>
My research examines the social, technical, and cultural dimensions of <span itemprop="knows"><b>social computing</b></span> systems.
In particular, I focus on the <b>design and study of <span itemprop="knows">online communities</span></b>.
I use quantitative and qualitative methodologies to understand the social dynamics and cultural artifacts that emerge from peer-production systems. 
I then apply those insights to the design of the underlying sociotechnical infrastructure and the policies that it embodies.  My work on <span itemprop="knows"><b>human-computer interaction</b></span> is positioned at the frontier of computer science, social science, and digital humanities. 
</p>

<p>As part of my research, I created the <a href="http://scratch.mit.edu">Scratch Online Community</a>. a large, international <b><span itemprop="knows">social media</span></b> website where young people share, and remix their own video games, animations, and interactive art projects. The community has grown to almost 1,000,000 members, more than 2,000,000 contributed projects, and has been recognized at the 
<a href="http://new.aec.at/prix/en/gewinner/2008/">Ars Electronica Prix</a>, 
and the <a href="http://www.dmlcompetition.net/">MacArthur Digital Media and Learning Competition</a>.
</p>

<p>More recently, I have studied deviant online behavior and organized crime on social media.</p>

<p>Beyond social technologies, I have a secondary research interest in creating technologies for use in the developing world. I co-founded <a href="http://sanamobile.org">Sana Mobile</a>, a mobile healthcare system for patients in remote locations.</p>

<p>
My research has been covered by 
<a href="http://www.technologyreview.com/printer_friendly_article.aspx?id=19137">Technology Review</a>, 
<a href="http://www.readwriteweb.com/archives/to_understand_the_future_of_tech_listen_to_kids.php">ReadWriteWeb</a>, 
<a href="http://mindshift.kqed.org/2011/08/scratch-teaching-kids-about-programming-teaching-kids-about-remixing/">NPR Mindshift</a>,
<a href="http://www.marketplace.org/topics/tech/does-googles-real-names-only-policy-make-sense">NPR Marketplace Tech</a>,
<a href="http://www.wired.com/gadgetlab/2010/04/apple-scratch-app/">Wired</a>, 
<a href="http://www.nytimes.com/2011/09/25/world/americas/mexico-turns-to-twitter-and-facebook-for-information-and-survival.html">The New York Times</a>,
<a href="http://www.thestar.com/news/world/article/1055436--mexico-s-drug-cartels-have-new-target-social-media">The Toronto Star</a>,
<a href="http://www.msemanal.com/node/4917">Milenio Semanal</a>, and
and <a href="http://elcomercio.pe/edicionimpresa/html/2007-06-28/ImEcVidayFuturo0746148.html">El Comercio</a>.
<p>
I have also written opinion articles about social media for
<a href="http://www.cnn.com/2011/09/16/opinion/mexico-social-media-killings/">CNN</a> and
<a href="http://www.nytimes.com/external/readwriteweb/2011/09/05/05readwriteweb-shouting-fire-in-a-crowded-hashtag-narco-ce-45910.html">The New York Times</a> 
</p>

				
				
<p>
You can follow me on 
<span itemprop="url"><a href="http://identi.ca/andresmh">Identi.ca</a></span>, 
<span itemprop="url"><a href="http://twitter.com/andresmh">Twitter</a></span>, 
or <span itemprop="url"><a href="https://plus.google.com/110362380602139255131/posts">Google+</a></span>
</p>

</section>
<!-- end #about -->
      
      <section id="edu">
      	<h2>Education</h2>
        
        <ul>
        	<li>
          	<h3><b>Massachusetts Institute of Technology</b> <span class="floatRight">2012</span></h3>
            <p><b>PhD</b> in Media Arts and Sciences</p>
            <p>Dissertation: Designing for Remixing — Supporting an Online Community of Amateur 
            Creators</p>
            <p>Committee: Mitchel Resnick, Yochai Benkler, Rob Miller</p>
            <p>Examiners: Mitchel Resnick, Yochai Benkler, Tim Berners-Lee</p>
          </li>
          
          <li>
          	<h3><b>Massachusetts Institute of Technology</b> <span class="floatRight">2007</span></h3>
            <p><b>MS</b> in Media Arts and Sciences</p>
            <p>Committee: Mitchel Resnick, Alex (Sandy) Pentland, Henry Jenkins</p>
          </li>
          
          <li>
          	<h3><b>Tecnológico de Monterrey</b> <span class="floatRight">2001</span></h3>
            <p><b>BS</b> in Computer Engineering</p>
          </li>
        </ul>
      </section><!-- end #edu -->
      
      <section id="interests">
      	<h2>Interests</h2>
        
        <p>Social Computing, SocialMedia, Human-Computer Interaction, Youth &amp; Media, Social Learning, 
        Online Communities, Online Collaboration, Peer Production, Social System Design</p>
      </section><!-- end #interests -->
      
      <section id="positions">
      	<h2>Current Positions</h2>
        
        <ul>
        	<li>
          	<h3>Postdoctoral Researcher <span class="floatRight"><b>Microsoft Research</b></span></h3>
            <p>Cambridge, MA <span class="floatRight">2011-Present</span></p>
            <p>Conducting research on social media at FUSE Labs and the Social Media Collective at 
            the New England Research and Development Center.</p>
            <p>Mentors: Shelly Farnham, danah boyd</p>
          </li>
          
          <li>
          	<h3>Berkman Fellow <span class="floatRight"><b>Harvard University</b></span></h3>
            <p>Cambridge, MA <span class="floatRight">2011-Present</span></p>
            <p>Participating in multidisciplinary research on online cooperation research at the 
            Berkman Center for Internet &amp; Society.</p>
          </li>
        </ul>
      </section><!-- end #positions -->
      
      <section id="experience">
      	<h2>Work Experience</h2>
        
        <ul>
        	<li>
          	<h3>Research Assistant <span class="floatRight"><b>MIT Media Lab</b></span></h3>
            <p>Cambridge, MA <span class="floatRight">2005-2011</span></p>
            <p>Led a software development team, mentored students, and worked with corporate 
            sponsors.</p>
            <p>Supervisor: Mitchel Resnick, Professor</p>
          </li>
          
          <li>
          	<h3>Intern <span class="floatRight"><b>Microsoft Research</b></span></h3>
            <p>Cambridge, MA <span class="floatRight">Summer 2010</span></p>
            <p>Examined young people's attitudes toward the reuse of digital media.</p>
            <p>Supervisor: danah boyd, Sr. Researcher</p>
          </li>
          
          <li>
          	<h3>Software Developer <span class="floatRight"><b>Ex Libris Group</b></span></h3>
            <p>Newton, MA <span class="floatRight">2001-2005</span></p>
            <p>Developed several versions of SFX – a web service that links scholarly databases.</p>
            <p>Supervisor: Oren Beit-Arie, Chief Strategy Officer</p>
          </li>
          
          <li>
          	<h3>Intern <span class="floatRight"><b>Los Alamos National Laboratory</b></span></h3>
            <p>Los Alamos, NM <span class="floatRight">Fall 2000</span></p>
            <p>Developed MyLibrary – a personalized web portal for library resources.</p>
            <p>Supervisor: Richard Luce, Research Library Director</p>
          </li>
          
          <li>
          	<h3>Research Assistant <span class="floatRight"><b>Tecnológico de Monterrey</b></span></h3>
            <p>Monterrey, México <span class="floatRight">1999-2000</span></p>
            <p>Implemented Z39.50 interoperability for a web-based digital repository.</p>
            <p>Supervisor: David Garza-Salazar, Professor</p>
          </li>
        </ul>
      </section><!-- end #experience -->
      
      <section id="training">
      	<h2>Additional Training</h2>
        
        <ul>
        	<li>
          	<h3><b>Oxford Internet Institute</b> <span class="floatRight">2009</span></h3>
            <p>Summer Doctoral Program, Brisbane, Australia</p>
          </li>
        </ul>
      </section><!-- end #training -->
      
      <section id="projects">
      	<h2>Highlighted Projects</h2>
        
        <ul>
        	<li>
          	<h3><b>Scratch Online Community</b> <span class="floatRight">2007 - 2011</span></h3>
            <p>Created and maintained the Scratch Online Community: a large web site where children 
            create and share their own animations and video games. The web site receives 10 million 
            page views per month, has close to 1 million registered members and 2 million 
            user-submitted projects. <a href="http://scratch.mit.edu" title="Scratch" 
            target="_blank">http://scratch.mit.edu</a></p>
            
            <ul>
            	<li><p>MacArthur Digital Media &amp; Learning Competition, Best in Class Award – 
              2010</p></li>
              <li><p>Ars Electronica Prix, Honorable Mention, Digital Communities category – 
              2008</p></li>
            </ul>
          </li>
          
          <li>
          	<h3><b>Sana Mobile</b> <span class="floatRight">2008</span></h3>
            <p>Co-founded Sana, a mobile application that connects healthcare professionals with 
            people in remote locations in the developing world. Created as part of the NextLab 
            initiative at MIT and piloted in Zambia. <a href="http://sanamobile.org" title="Sana" 
            target="_blank">http://sanamobile.org</a></p>
          </li>
        </ul>
      </section><!-- end #projects -->
      
      <section id="skills">
      	<h2>Skills</h2>
        
        <ul>
        	<li><p><i>Research</i> – Experience with qualitative and quantitative research.</p></li>
          <li><p><i>Technical</i> – Large-scale data-driven web architecture, LAMP stack (Linux, 
          Apache, MySQL, PHP, Perl, Python), HTML/JavaScript, data manipulation &amp; analysis 
          (scripting, SQL, R).</p></li>
          <li><p><i>Project Management</i> – Hiring and managing technical teams.</p></li>
          <li><p><i>Languages</i> – Bilingual (English and Spanish).</p></li>
        </ul>
      </section><!-- end #skills -->
      
      <section id="publications">
      	<h2>Publications</h2>
        
        <ul>
        	<li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">Monroy-Hernández, 
          A.</span>,</b> <span itemprop="author">Hill, B.M</span>, <span itemprop="author">González-Rivero, 
          J.</span>, <span itemprop="author">boyd, d.</span> (<span itemprop="copyrightYear">2011</span>). 
          <span itemprop="name">Computers can't give credit: How automatic attribution falls short in an 
          online remixing community</span>. In <i>Proceedings of the ACM Conference on Human Factors in 
          Computing Systems (CHI '11).</i> <b><span itemprop="awards">Honorable mention</span>.</b></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Bernstein, 
          M.S.</span>, <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> <span itemprop="author"
          >Harry, D.</span>, <span itemprop="author">André, P.</span>, <span itemprop="author">Panovich, 
          K.</span>, <span itemprop="author">Vargas, G.</span> (<span itemprop="copyrightYear">2011</span>). 
          <span itemprop="name">4chan and /b/: An Analysis of Anonymity and Ephemerality in a Large 
          Online Community.</span> In <i>Proceedings of the AAAI International Conference on Weblogs and 
          Social Media (ICWSM '11).</i> <b><span itemprop="awards">Best paper award</span>.</b></p></li>

          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Brennan, K.</span>, 
          <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> <span itemprop="author">Resnick, 
          M.</span> (<span itemprop="copyrightYear">2011</span>) <span itemprop="name">Making Projects, 
          Making Friends: Online Community as Catalyst for Interactive Media Creation</span>. <i>Journal of 
          New Directions of Youth Development.</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Nickerson, 
          J.V.</span>, <b><span itemprop="author">Monroy-Hernández, A.</span></b> (<span 
          itemprop="copyrightYear">2011</span>). <span itemprop="name">Appropriation and Creativity: 
          User-initiated Contests in Scratch</span>. In <i>Proceedings of the Hawaii International 
          Conference on System Sciences (HICSS '11)</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Kafai, Y.</span>, 
          <span itemprop="author">Roque, R.</span>, <span itemprop="author">Fields, D.</span>, <b><span 
          itemprop="author">Monroy-Hernández, A.</span></b> (<span itemprop="copyrightYear">2011</span>) 
          <span itemprop="name">Collaboration by Choice: Youth Online Creative Collabs in Scratch</span>. 
          In <i>Proceedings of International Conference on Computers in Education (ICCE '11)</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Burke, W.</span>, 
          <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> <span itemprop="author">Kafai, 
          Y.</span> (<span itemprop="copyrightYear">2011</span>). <span itemprop="name">Tagging in a 
          Community of Media Creators: Practices that make programs popular in Scratch Online</span>. In 
          <i>Proceedings of the American Educational Research Association Annual Meeting (AERA 
          '11)</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author"
          >Monroy-Hernández, A.</span>,</b> <span itemprop="author">Dezuanni, M.</span> and <span 
          itemprop="author">Kuikkaniei, K.</span> (<span itemprop="copyrightYear">2010</span>). <span 
          itemprop="name">Book Chapter: Media Literacy in the Facebook Age: Designing Online and Face to 
          Face Learning Environments</span>. In Araya, Breindl, Houghton (Eds.), <i>Nexus: Intersections 
          of Internet Research.</i> New York: Peter Lang.</p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author"
          >Monroy-Hernández, A.</span></b> and <span itemprop="author">Hill, B. M.</span> (<span 
          itemprop="copyrightYear">2010</span>). <span itemprop="name">Cooperation and attribution in 
          an online community of young creators (poster paper)</span>. In <i>Proceedings of the ACM 
          Conference on Computer Supported Collaborative Work (CSCW '10).</i></p></li>

          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Hill, B.M.</span>, 
          <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> <span itemprop="author">Olson, 
          K.R.</span> (<span itemprop="copyrightYear">2010</span>). <span itemprop="name">Responses to 
          remixing on a social media sharing website</span>. In <i>Proceedings of the AAAI International 
          Conference on Weblogs and Social Media (ICWSM '10).</i></p></li>

          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Seneviratne, 
          O.</span>, <b><span itemprop="author">Monroy-Hernández, A.</span></b> (<span 
          itemprop="copyrightYear">2010</span>) <span itemprop="name">Remix Culture on the Web: A 
          Survey of Content Reuse on Different User-Generated Content Websites (poster paper)</span>. In 
          <i>Proceedings of Web Science Conference (Web Sci '10).</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author"
          >Monroy-Hernández, A.</span></b> (<span itemprop="copyrightYear">2009</span>). <span 
          itemprop="name">Designing a website for creative learning (poster paper)</span>. In 
          <i>Proceedings of Web Science Conference (Web Sci '09).</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Aragon, 
          C.</span>, <span itemprop="author">Poon, S.</span>, <b><span itemprop="author">Monroy-Hernández, 
          A.</span>,</b> and <span itemprop="author">Aragon, D.</span> (<span itemprop="copyrightYear"
          >2009</span>). <span itemprop="name">A tale of two online communities: Fostering collaboration 
          and creativity in scientists and children</span>. In <i>Proceedings of the ACM Conference on 
          Creativity and Cognition (C&amp;C '09).</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Resnick, 
          M.</span>, <span itemprop="author">Maloney, J.</span>, <b><span itemprop="author"
          >Monroy-Hernández, A.</span>,</b> et al (<span itemprop="copyrightYear">2009</span>). <span 
          itemprop="name">Scratch: Programming for All</span>. <i>Communications of the ACM,</i> 52, 11, 
          60-67</p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Brennan, 
          K.</span>, <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> and <span 
          itemprop="author">Resnick, M.</span> (<span itemprop="copyrightYear">2009</span>). <span 
          itemprop="name">Scratch: Creating and sharing interactive media (workshop)</span>. In 
          <i>Proceedings of the International Conference on Computer Supported Collaborative Learning 
          (CSCL '09).</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Zuckerman, 
          O.</span>, <span itemprop="author">Blau, I.</span>, and <b><span itemprop="author"
          >Monroy-Hernández, A.</span></b> (<span itemprop="copyrightYear">2009</span>). <span 
          itemprop="name">Children's participation patterns in online communities: An analysis of 
          Israeli learners in the scratch online community</span>. <i>Interdisciplinary Journal of 
          E-Learning and Learning Objects,</i> 5, 263-274.</p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author"
          >Monroy-Hernández, A.</span></b> and <span itemprop="author">Resnick, M.</span> (<span 
          itemprop="copyrightYear">2008</span>). <span itemprop="name">Empowering kids to create and 
          share programmable media</span>. <i>ACM interactions.</i> vol. 15, no. 2, pp. 50-53.</p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author"
          >Monroy-Hernández, A.</span></b> (<span itemprop="copyrightYear">2007</span>). <span 
          itemprop="name">ScratchR: sharing user-generated programmable media</span>. In <i>Proceedings 
          of ACM Interaction Design and Children (IDC '07).</i></p></li>
          
          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">Di Giacomo, 
          M.</span>, <span itemprop="author">Mahoney, D.</span>, <span itemprop="author">Bollen, 
          J.</span>, <b><span itemprop="author">Monroy-Hernández, A.</span>,</b> and <span 
          itemprop="author">Ruiz, C. M.</span> (<span itemprop="copyrightYear">2001</span>) <span 
          itemprop="name">A personalization service for digital library environments</span>. In 
          <i>Proceedings of the DELOS-NSF Workshop on Personalisation and Recommender Systems in Digital 
          Libraries.</i></p></li>
        </ul>
      </section><!-- end #publications -->
      
      <section id="articles">
      	<h2>Opinion Articles</h2>
        
        <ul>
        	<li><p><b>Monroy-Hernández, A.,</b> (2011). Mexico murders show how Internet empowers, 
          threatens. <i>CNN Op-Ed</i></p></li>
          
          <li><p><b>Monroy-Hernández, A.,</b> (2011). Shouting Fire in a Crowded Hashtag: Narco 
          Censorship &amp; "Twitteroristas" in Mexico's Drug Wars. <i>The New York Times</i></p></li>
        </ul>
      </section><!-- end #articles -->
      
      <section id="presentations">
      	<h2>Presentations</h2>
        
        <ul>
        	<li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Designing for 
          Remixing:</b> Computer-supported Social Creativity</span>. <span itemprop="performers">Invited 
          speaker</span>. <span itemprop="location">Microsoft Research. Redmond, WA. 2011</span>.</p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Copyright and 
          Freedom of Expression:</b> The Social Impact of Communication Scholarship</span>. Panelist at 
          plenary session (with <span itemprop="performers">Steve Anderson</span>, <span 
          itemprop="performers">Francesca Coppa</span>, <span itemprop="performers">Andrew Kenyon</span>, 
          and <span itemprop="performers">Jonathan Zittrain</span>, and <span itemprop="performers"
          >Patricia Aufderheide</span>). <span itemprop="location">Conference of the International 
          Communication Association. Boston, MA 2011</span>.</p></li>

          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Kidgenuity:</b> 
          What We Can Learn from Kids Inventing Future Technology</span>. Panelist (with <span 
          itemprop="performers">Vanessa Van Petten</span>, <span itemprop="performers">Steve 
          Mushkin</span>, and <span itemprop="performers">Audrey Watters</span>). <span 
          itemprop="location">The ReadWriteWeb 2WAY Summit. New York, NY. 2011</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>The Politics of 
          User-generated Content.</b></span> Panelist (with <span itemprop="performers">Finn Brunton</span>, 
          <span itemprop="performers">JonathanMcIntsoh</span>, and <span itemprop="performers">Mizuko 
          Ito</span>). <span itemprop="location">Digital Media and Learning Conference. Long Beach, CA, 
          2011</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Introduction to 
          Social Computing.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Computer Science Department at The College of New Jersey. Ewing, NJ, 
          2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Why You Sould 
          Care about Social Computing.</b></span> <span itemprop="performers">Invited speaker</span>. 
          <span itemprop="location">Accelerate 2010: Discovering Web Innovation in Asia. Singapore, 
          2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Copyrights and 
          Copycats:</b> Understanding Young People's Remixing Practices</span>. <span 
          itemprop="performers">Invited speaker</span>. <span itemprop="location">Microsoft Research 
          New England. Cambridge, MA, 2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Remixing and 
          Online Communities.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Harvard-MIT-Yale Cyberscholars. Cambridge, MA, 2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Reimagining Scratch, 
          Reimagining Learning.</b></span> Panelist (with <span itemprop="performers">Mitchel Resnick</span>, 
          <span itemprop="performers">Karen Brennan</span> and <span itemprop="performers">Amon 
          Millner</span>), <span itemprop="location">Scratch@MIT Conference. Cambridge, MA, 
          2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Designing 
          participatory spaces for young people.</b></span> Panelist (with <span itemprop="performers"
          >Michael Dezuanni</span>, <span itemprop="performers">Kai Kuikamenei</span>). <span 
          itemprop="location">Digital Media and Learning Conference. San Diego, 2010</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Symposium on Cloud 
          Intelligence.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Ars Electronica. Austria, 2009</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Designing for 
          Participation and Collaboration.</b></span> <span itemprop="performers">Invited speaker</span>. 
          <span itemprop="location">Computational Science and Engineering Seminars. Lawrence Berkeley 
          Laboratory. Berkeley, CA, 2009</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Youth Online: 
          Designing for Participation and Collaboration.</b></span> <span itemprop="performers">Invited 
          speaker</span>. <span itemprop="location">Harvard-MIT-Yale Cyberscholars. Cambridge, MA, 
          2009</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Creativity and 
          Media Literacy.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Digital Natives Forum. Berkman Center, Harvard. Cambridge, MA, 
          2008</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Amateur 
          Creativity.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Think Forward Event, Hallmark Cards, Inc. Kansas City, MO, 2008</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Sharing Issues: 
          Intellectual Property and Scratch.</b></span> Panelist (with <span itemprop="performers"
          >Judith Donath</span>, <span itemprop="performers">Dan Pote</span>, and <span 
          itemprop="performers">Wendy Seltzer</span>). <span itemprop="location">Scratch@MIT Conference. 
          Cambridge, MA, 2008</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>New Opportunities 
          in Amateur Interactive Content.</b></span> <span itemprop="performers">Invited speaker</span>. 
          <span itemprop="location">Amateur Hour Conference. New York Law School. New York, NY, 
          2007</span></p></li>

					<li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>User-created 
          Content: What are the Impacts?</b></span> <span itemprop="performers">Invited speakerspan>. 
          <span itemprop="location">Technology Foresight Forum on the Participative Web, Organization 
          for Economic Co-operation and Development (OECD), Strategies and Policies for the Future. 
          Canada, 2007</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Technology and 
          Education.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Northeastern University, ACMChapter. Boston, MA 2007</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Creativity, 
          Learning and Technology.</b></span> <span itemprop="performers">Invited speaker</span>. <span 
          itemprop="location">Pontificia Universidad Católica. Perú, 2007</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Informal 
          Introduction to Computing.</b></span> Panelist (with <span itemprop="performers">Amon 
          Millner</span>, and <span itemprop="performers">Tamara 
          Stern</span>). <span itemprop="location">Informatics, Mathematics, and ICT: a "golden 
          triangle". Boston, MA, 2007</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Sharing 
          User-generated Programmable Media.</b></span> <span itemprop="performers">Invited 
          speaker</span>. <span itemprop="location">Omar Dengo Foundation, Costa Rica, 
          2007.</span></p></li>
          
          <li itemscope itemtype="http://schema.org/Event"><p><span itemprop="name"><b>Cell Phones as 
          Tool for Children as Social Scientists.</b></span> Presenter (with <span itemprop="performers"
          >Lis Sylvan</span>). <span itemprop="location">Boston Learning Technology Conference, Boston, 
          MA, 2005</span></p></li>
        </ul>
      </section><!-- end #presentations -->
      
      <section id="press">
      	<h2>Press</h2>
        
        <ul>
        	<li><p>Mexico Turns to Social Media for Information and Survival. <i>The New York Times.</i> September,
2011.</p></li>
          
          <li><p>Latest battlefield in Mexico's drug war: Social media. <i>CNN.</i> September, 2011.</p></li>
          
          <li><p>In Mexico, Social Media Become a Battleground in the Drug War. <i>The New York Times.</i>
September, 2011.</p></li>
          
          <li><p>Does Google+'s "real names only" policy make sense? Marketplace. <i>National Public Radio.</i>
August, 2011</p></li>
          
          <li><p>Scratch: Teaching the Difference Between Creating and Remixing. MindShift - How we will
learn. <i>National Public Radio.</i> August, 2011.</p></li>
          
          <li><p>Heres What 5 Million Posts on 4chan Look Like. <i>Gawker.</i> July, 2011.</p></li>
          
          <li><p>From the Mouths of Babes: The Future of Tech is Robots and Real World Integration. <i>ReadWriteWeb.</i> June, 2011.</p></li>
          
          <li><p>Apple Rejects Kid-Friendly Programming App. <i>Wired.</i> April, 2010.</p></li>
          
          <li><p>The iPad Falls Short as a Creation Tool Without Coding Apps. <i>Wired.</i> March, 2010.</p></li>
          
          <li><p>Playing Their Own Way. Technology Review. <i>Technology Review.</i> August, 2007.</p></li>
          
          <li><p>We Live in the Age of Creativity. (Spanish) <i>El Comercio de Peru.</i> June, 2007.</p></li>
        </ul>
      </section><!-- end #press -->
      
      <section id="honors">
      	<h2>Honors</h2>
        
        <ul>
        	<li><p>Harvard University, Berkman Fellowship, 2011-2012</p></li>
          <li><p>Oxford Internet Institute, Scholarship, Summer Doctoral Program, 2009</p></li>
          <li><p>Amazon.com Research Grant, 2009</p></li>
          <li><p>Bradesco Fellowship, 2008</p></li>
          <li><p>Samsung Fellowship, 2007</p></li>
          <li><p>Telmex Fellowship, 2005, 2006</p></li>
          <li><p>Excellence scholarship, Tecnológico de Monterrey, 1996</p></li>
          <li><p>Finalist in the National Mathematical Olympiad, México, 1995</p></li>
        </ul>
      </section><!-- end #honors -->
      
      <section id="mentoring">
      	<h2>Mentoring</h2>
        
        <ul>
        	<li><p>Rita Chen, Master of Engineering student, Computer Science, MIT (now at Google)– 
          2010</p></li>
          <li><p>Jared Domínguez, undergraduate student, Computer Science, MIT– 2010</p></li>
          <li><p>Jazmin González-Rivero, High School intern at Microsoft Research (now at Olin 
          College)– 2010</p></li>
          <li><p>Han Xu, Master of Engineering student, Computer Science, MIT – 2008</p></li>
          <li><p>Chetan Supur, high school intern at MIT (now at UC Berkeley) – 2008</p></li>
          <li><p>Ubong Ukoh's, undergraduate student, Computer Science, MIT – 2007</p></li>
        </ul>
      </section><!-- end #mentoring -->
      
      <section id="service">
      	<h2>Service</h2>
        
        <p>Reviewer for the following conferences: <a href="http://www.sigchi.org/conferences/">ACM Conference on Human Factors in Computer Systems (CHI)</a> in 2012, 2011, 2010, and 2008; ACM Conference on Computer Supported Collaborative Work (CSCW) in 2012, 2011; AAAI International Conference on Weblogs and Social Media (ICWSM) in 2011; and  IEEE's Pervasive Computing Conference in 2008</p>
      </section><!-- end #service -->
      
      <section id="teaching">
      	<h2>Teaching</h2>
        
        <ul>
        	<li><p><b>Teaching Assistant.</b> NextLab I: Designing Mobile Technologies for the Next 
          Billion Users (MAS.965/6.976/SP.716), MIT, 2008. With Jhonatan Rotberg, Lecturer.</p></li>
          
          <li>
          	<h3><b>Workshop Facilitator.</b></h3>
            
            <ul>
            	<li><p>Designing for designers: Exploring ways in which online community settings support 
              young people's participation as digital media creators. Digital Media and Learning 
              Conference. Long Beach, CA, 2011.</p></li>
              
              <li><p>Programming for middle-schoolers. DigiGirlz Event, Microsoft New England. Cambridge, 
              MA, 2009</p></li>
              
              <li><p>Scratch and robotics for educators. Bradesco Institute of Technology, Brazil, 
              2008</p></li>
              
              <li><p>Scratch programming for facilitators of Telmex after-school centers. México, 
              2008.</p></li>
              
              <li><p>Programming for the web with Scratch. Citizen School 11-week program for 
              middle-schoolers. Cambridge, MA, 2007.</p></li>
              
              <li><p>Interactive media programming and electronic creations, for coordinators of 
              the Intel Computer Clubhouses. Costa Rica, 2007.</p></li>
              
              <li><p>Systems Thinking with Flowblocks workshop for middle-schoolers. México, 2006</p></li>
              
              <li><p>Integrating Art and Technology workshop for conference attendees. Highlands 
              and Islands Enterprise. UK, 2006</p></li>
              
              <li><p>PicoCrickets for educators. Centro de Cultura Digital. México, 2006</p></li>
            </ul>
          </li>
        </ul>
      </section><!-- end #teaching -->
    </div><!-- end #contentWrapper -->
  </div><!-- end #outerWrapper -->
</script>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=4428942; 
var sc_invisible=1; 
var sc_partition=55; 
var sc_click_stat=1; 
var sc_security="7be3c837"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a title="myspace profile view counter" class="statcounter" href="http://www.statcounter.com/myspace/"><img class="statcounter" src="http://c.statcounter.com/4428942/0/7be3c837/1/" alt="myspace profile view counter" /></a></div></noscript>
<!-- End of StatCounter Code -->
</body></html>
</body>
</html>
