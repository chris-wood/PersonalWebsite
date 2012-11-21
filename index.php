<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.8.3.min.js"></script>
<meta charset=utf-8 />
<link href="css/main.css" rel="stylesheet" media="projection, screen">
<link href="css/print.css" rel="stylesheet" media="print">
<script src="js/jquery-1.8.3.min.js"></script>
<title>Christopher A. Wood</title>
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
        <span><img src="imgs/headshot.png" width="150" height="140" 
        alt="portrait of Christopher"></span>
      </figure><!-- end #portrait -->
      
      <nav>
        <h2 class="hide">navigation</h2>
        
        <ol>
          <li><a href="#about">About</a></li>
          <li><a href="#edu">Education</a></li>
          <li><a href="#interests">Research Interests</a></li>
          <li><a href="#research">Research Projects</a></li>
          <li><a href="#experience">Work Experience</a></li>
          <li><a href="#training">Additional Training</a></li>
          <li><a href="#projects">Highlighted Projects</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#publications">Publications</a></li>
          <!--<li><a href="#articles">Opinion Articles</a></li>-->
          <li><a href="#presentations">Presentations</a></li>
          <!--<li><a href="#press">Press</a></li>-->
          <li><a href="#honors">Honors</a></li>
          <!--<li><a href="#mentoring">Mentoring</a></li>-->
          <li><a href="#activities">Extracurricular Activities</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#teaching">Teaching</a></li>
          <li><a href="./docs/caw_cv.pdf" title="Curriculum Vitae">Curriculum Vitae</a></li>
          <!--<li><a href="research-statement.pdf" title="Research Statement">Research Statement</a></li>
          <li><a href="teaching-statement.pdf" title="Teaching Statement">Teaching Statement</a></li>-->
        </ol>
      </nav>
    </div><!-- end #nav -->
    
    <div id="contentWrapper">
      <section id="contactInfo">
        <h2 class="hide">contact info</h2>
        
        <!--<img src="./imgs/headshot.png" width="150" height="70" alt="portrait of Christopher">-->
        
        <address>
          <ul>
            <li><span itemprop="email">caw4567@rit.edu</span></li>
            <li><span itemprop="phone">315-806-5939</span></li>
          </ul>
        </address>
      </section><!-- end #contactInfo -->
      
      <h1 style="text-align:center;"><span itemprop="name">Christopher A. Wood</span></h1>
      
      <!-- start the content here!-->
      <section id="about">
        TODO: about, thoughts, objectives, erdos, girlfriend and guitar
      </section>

      <section id="edu">
        <h2>Education</h2>
        
        <ul>
          <li>
            <h3><b>Rochester Institute of Technology</b> <span class="floatRight">2013</span></h3>
            <p><b>MS</b> in Computer Science</p>
            <p>Thesis: Optimal Representations of Cryptographic Substitution Boxes for Efficient
Combinational Implementations (in progress)</p>
            <p>Committee: Stanislaw Radziszowski and Marcin Lukowiak</p>
            <p>Elective Courses: Cryptography, Intelligent Security Systems, Data Communications and
Networks, Algorithms, Optimization Methods, Secure Database Systems</p>
          </li>
          
          <li>
            <h3><b>Rochester Institute of Technology</b> <span class="floatRight">2012</span></h3>
            <p><b>BS</b> in Computer Science and Software Engineering</p>
            <p>Main electives: Graph Theory, Number Theory, Operating Systems, Programming Language
Concepts, Computer Organization, Modern Physics, Real-Time and Embedded Systems</p>
          </li>
        </ul>
      </section>

      <section id="interests">
        <h2>Research Interests</h2>
        
        <p>
          Applied Cryptography, Computer Security, Hardware-Software Co-Design, Algorithmic Graph Theory,
          Combinatorial Optimization, Algorithms
        </p>
      </section>

       <section id="research">
        <h2>Research Projects</h2>
        
        <ul>
          <li>
            <h3>Secure Logging Schemes for Cloud-Based SaaS Architectures <span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Cryptography, Computer Security, Secure Software Design</i><span class="floatRight">July 2012 - present</span></p>
            <p>TODO</p>
            <p>Advisors: Dr. Rajendra K. Raj (CS) and Dr. Andy Meneely (SE)</p>
          </li>
          
          <li>
            <h3>Wireless Ad-hoc Network Group Key Management <span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Applied Cryptography, Wireless Networking</i><span class="floatRight">May 2011 - present</span></p>
            <p>TODO</p>
            <p>Colleagues: Dr. Marcin Lukowiak (CE), Dr. Stanislaw Radziszowski (CS), Dr. Peter Bajorski (Statistics), 
              Professor Alan Kaminsky (CS), and Dr. Michael Kurdziel (Harris RF)</p>
          </li>

          <li>
            <h3>Keyboard Biometric-Based Continuous Authentication Service <span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Intelligent Security Systems, Artificial Intelligence, Machine Learning</i><span class="floatRight">May 2011 - present</span></p>
            <p>TODO</p>
            <p>Advisor: Dr. Leonid Reznik (CS)</p>
          </li>

          <li>
            <h3>L(2,1)-Labeling Problem<span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Computational Graph Theory</i><span class="floatRight">September 2011 - November 2012</span></p>
            <p>TODO</p>
            <p>Advisor: Dr. Jobby Jacob (Mathematics)</p>
          </li>

          <li>
            <h3>Secure Operating System Design Principles<span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Computer Security, Operating Systems</i><span class="floatRight">March 2011 - June 2011</span></p>
            <p>TODO</p>
            <p>Advisor: Dr. Rajendra K. Raj (CS)</p>
          </li>

          <li>
            <h3>Rootkit Design, Implementation, and Detection<span class="floatRight"><b>RIT</b></span></h3>
            <p><i>Computer Security, Operating Systems, Malware Design</i><span class="floatRight">May 2009 - August 2009</span></p>
            <p>TODO</p>
            <p>Advisor: Dr. Rajendra K. Raj (CS)</p>
          </li>
        </ul>
      </section>

      <section id="experience">
        <h2>Work Experience</h2>
        
        <ul>
          <li>
            <h3>Intel Corporation, Virtual and Parallel Computing Group<span class="floatRight"><b>Folsom, CA</b></span></h3>
            <p><i>Graphics Software Engineer</i><span class="floatRight">June 2012 - August 2012</span></p>
            <p>TODO</p>
          </li>
          
          <li>
            <h3>L-3 Communications, Linkabit Division<span class="floatRight"><b>Victor, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">March 2011 - August 2011</span></p>
            <p>TODO</p>
          </li>

          <li>
            <h3>Rochester Software Associates<span class="floatRight"><b>Rochester, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">November 2010 - March 2011</span></p>
            <p>TODO</p>
          </li>

          <li>
            <h3>C Speed, LLC<span class="floatRight"><b>Liverpool, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">May 2010 - August 2010</span></p>
            <p>TODO</p>
          </li>
        </ul>

      </section>
  
      <section id="training">
        <h2>Additional Training</h2>
        
        <ul>
          <li>
            <h3><b>PLACE</b> <span class="floatRight">YEAR</span></h3>
            <p>TODO</p>
          </li>
        </ul>
      </section>

      <section id="projects">
        <h2>Highlighted Projects</h2>
        
        <ul>
          <li>
            <h3><b>AES Cache Timing Attack</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
          </li>
          
          <li>
            <h3><b>ABLS - Attribute Based Logging System</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
          </li>

          <li>
            <h3><b>ThoughtPoll</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
          </li>

          <li>
            <h3><b>Kanban Taskboard</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
          </li>

          <li>
            <h3><b>FTP Client</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
          </li>
        </ul>

      </section>

      <section id="skills">
        <h2>Skills</h2>
        
        <ul>
          <!--<li><p><i>Research</i> – Experience with qualitative and quantitative research.</p></li>-->
          <li><p><i>Programming Languages: </i>C/C++, C#, Java, Python, Ruby, Assembly (MIPS), JavaScript, Scheme, Standard ML, Objective-C</p></li>
          <li><p><i>Databases: </i>MySQL, SQLite, MongooseDB</p></li>
          <li><p><i>Modeling Languages and Tools: </i>VHDL, Verilog, UML, SPIN (with PROMELA), Alloy</p></li>
          <li><p><i>Specialized Software: </i>MATLAB, Mathematica, WEKA, Sage</p></li>
          <li><p><i>Markup Languages</i>LaTeX, HTML5, CSS3</p></li>
          <!--<li><p><i>Project Management</i> – Hiring and managing technical teams.</p></li>-->
        </ul>
      </section>

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
        </ul>

      </section>

      <section id="presentations">
        <h2>Presentations</h2>
        
        <ul>
          <li itemscope itemtype="http://schema.org/Event">
            <p><span itemprop="name">"Characterization Results for the L(2,1)-Labeling Problem on Trees," </span><span itemprop="performers"> Invited 
          speaker</span>, <span itemprop="location">AMS Sectional Meeting, Rochester Institute of Technology, Rochester, NY. September 22, 2012.</span>
            </p>
          </li>

          <li itemscope itemtype="http://schema.org/Event">
            <p><span itemprop="name">"Chaos-Based Symmetric Key Cryptosystems,"</span>
              <span itemprop="location">RIT Undergraduate Research Symposium, Rochester Institute of Technology, Rochester, NY. July 22, 2011.</span>
            </p>
          </li>

          <li itemscope itemtype="http://schema.org/Event">
            <p><span itemprop="name">"Layered Driver Rootkit Detection on Microsoft Windows PCs", Poster Presentation,</span>
          <span itemprop="location">RIT Undergraduate Research Symposium, Rochester Institute of Technology, Rochester, NY. August 24, 2009.</span>
            </p>
          </li>
        </ul>
      </section>

      <section id="honors">
        <h2>Honors</h2>
        
        <ul>
          <li><p>RIT Honors Program <span class="floatRight">2009 - present</span></p></li>
          <li><p>RIT Outstanding Undergraduate Student award, nominated<span class="floatRight">Fall 2012</span></p></li>
          <li><p>RIT Computer Science Undergraduate and Graduate student delegate, nominated<span class="floatRight">Fall 2012</span></p></li>
          <li><p>Recipient of Golisano College Honors research assistantship stipend<span class="floatRight">Spring 2011 and Winter 2009/2010</span></p></li>
          <li><p>Recipient of RIT undergraduate research award stipend<span class="floatRight">Summer 2009</span></p></li>
          <li><p>RIT Golisano College Dean's List<span class="floatRight">2008 - present</span></p></li>
        </ul>
      </section>

      <section id="service">
        <h2>Service</h2>
        
        <ul>
          <li>
            <h3>Student mentor for the FIRST LEGO League team hosted by RIT<span class="floatRight">Fall 2009 - Winter 2011</span></h3>
          </li>
        </ul>
      </section>

      <section id="activities">
        <h2>Extracurricular Activities</h2>
        
        <ul>
          <li>Society of Software Engineers,member<span class="floatRight">Fall 2008 - Winter 2009/2010</span></li>
          <li>RIT Electronic Gaming Society, member<span class="floatRight">Fall 2008 - Spring 2010</span></li>
          <li>RIT Intramural Flag Football Team, member<span class="floatRight">Fall 2010</span></li>
        </ul>
      </section>

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
      </section>
    </div> <!-- end #contentWrapper -->
  </div> <!-- end #outerWrapper -->
</body>
</html>