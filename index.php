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
            <p>I am replicating the original cache timing attack on the AES (first
              introduced by <a href="http://cr.yp.to/antiforgery/cachetiming-20050414.pdf">Daniel Bernstein</a> and
              later studied by <a href="http://research.microsoft.com/pubs/64024/aes-timing.pdf">Joseph Bonneau and
              Ilya Mironov</a>) on the Xilinx MicroBlaze soft-core processor. Our development platform is a Xilinx ML507
              board with a Virtex5 FPGA that implements the MicroBlaze processor. The hard-core PowerPC
              processor is also available for use.</p>
            <p>Source code: <a href="https://github.com/chris-wood/CacheTimingAttack" target="_blank">here</a></p>
          </li>
          
          <li>
            <h3><b>ABLS - Attribute Based Logging System</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
            <p>Source code: <a href="https://github.com/chris-wood/SecureLoggingSystem" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>ThoughtPoll</b> <span class="floatRight">TIME</span></h3>
            <p>TODO<a href="http://scratch.mit.edu" title="Scratch" target="_blank">http://scratch.mit.edu</a></p>
            <p>Source code: <a href="https://github.com/chris-wood/ThoughtPoll" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>Kanban Taskboard</b> <span class="floatRight">TIME</span></h3>
            <p>This Kanban Taskboard provides software development teams with a tool that allows for 
              more transparency towards project requirements, tasks, and milestones. This application can be 
              synchronized between multiple platforms. It was built using 
              Java, BlazeDS, Flex (MXML+Actionscript), and Tomcat.</p>
            <p>Source code: <a href="https://github.com/chris-wood/KanbanTaskboard-1" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>FTP Client</b> <span class="floatRight">TIME</span></h3>
            <p>This is a simple command-line driven FTP client written entirely in Java. It supports both
            active and passive modes of transmission to avoid problems introduced by firewalls. Only "get"
            support was implemented.</p>
            <p>Source code: <a href="https://github.com/chris-wood/FTPClient" target="_blank">here</a></p>
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
        
        <h5>Journal Articles</h5>
        <ul>
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">C. Wood, 
          </span> and </b> <span itemprop="author">J. Jacob</span>,
          <span itemprop="name">"Characterization Results for the L(2,1)-Labeling Problem on Trees,"
            <i>in preparation</i></span>.
          
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">C. Wood, 
          </span> and </b> <span itemprop="author">J. Jacob</span>, 
          <span itemprop="name">"Forbidden Subtree Construction Techniques for Trees Under the L(2,1)-Labeling Problem,"
             <i>submitted to the Wiley Networks journal</i></span>.

          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">P. Bajorski, 
          </span>, <span itemprop="author">A. Kaminsky</span>, <span itemprop="author">M. Kurdziel</span>,
          <span itemprop="author">M. Lukowiak</span>, <span itemprop="author">S. Radziszowski</span>,
          and <b><span itemprop="author">C. Wood</span></b>
          <span itemprop="name">"Statistical Analysis and Modeling of a Tree-Based Group Key Distribution Method in Tactical Wireless Networks,"
            <i>submitted to the IEEE Transactions on Wireless Communications</i></span>. 

          <li itemscope itemtype="http://schema.org/Article"><p>
          <span itemprop="author">M. Lukowiak</span>, <span itemprop="author">S. Radziszowski</span>,
          <span itemprop="author">J. Vallino</span>, and <b><span itemprop="author">C. Wood</span></b>
          <span itemprop="name">"Cybersecurity Education: Bridging the Gap between Hardware and Software Domains,"
            <i>submitted to the IEEE Transactions on Education</i></span>.
        </ul>

        <h5>Conference Proceedings</h5>
        <ul>
          <li itemscope itemtype="http://schema.org/Article"><p>
          <span itemprop="author">M. Lukowiak</span>, <span itemprop="author">A. Meneely</span>, <span itemprop="author">S. Radziszowski</span>,
          <span itemprop="author">J. Vallino</span>, and <b><span itemprop="author">C. Wood</span></b>
          <span itemprop="name">"Developing an Applied, Security-Oriented Computing Curriculum,"</span>
          In <i>Proceedings of the ASEE 2012, San Antonio, Texas. June 2012.</i></p></li>

          <li itemscope itemtype="http://schema.org/Article"><p>
          <b><span itemprop="author">C. Wood</span></b>
          <span itemprop="name">"Chaos-Based Symmetric Key Cryptosystems,"</span>
          In <i>Proceedings of the 2011 International Conference on Security & Management, Las Vegas, Nevada. July 2011.</i></p></li>

          <li itemscope itemtype="http://schema.org/Article"><p>
          <b><span itemprop="author">C. Wood</span></b> and <span itemprop="author">R. K. Raj</span>
          <span itemprop="name">"Keyloggers in Cybersecurity Education,"</span>
          In <i>Proceedings of the 2010 International Conference on Security & Management, Las Vegas, Nevada. July 2010.</i></p></li>
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
          <li><p><b>Hardware and Software Design with Cryptographic Applications.</b> 
            <i>Teaching Assistant and Lecturer</i>, RIT, February 2011 - present. With Dr. Marcin Lukowiak (CE).</p></li>

          <li><p><b>Computer Science I, II, and IV</b> 
            <i>Student Lab Assistant and Grader</i>, RIT, January 2009 - present.</p></li>

          <li><p><b>Personal Software Engineering.</b> 
            <i>Teaching Assistant</i>, RIT, December 2011 - March 2012. With Professor Tom Reichlmayr (SE).</p></li>

          <li><p><b>Engineering of Software Subsystems</b> 
            <i>Teaching Assistant</i>, RIT, September 2011 - December 2011. With Dr. James Vallino (SE).</p></li>
        </ul>
      </section>
    </div> <!-- end #contentWrapper -->
  </div> <!-- end #outerWrapper -->
</body>
</html>