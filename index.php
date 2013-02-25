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
          <li><a href="#publications">Publications</a></li>
          <li><a href="#presentations">Presentations</a></li>
          <li><a href="#experience">Work Experience</a></li>
          <li><a href="#skills">Skills</a></li>
          <!--<li><a href="#training">Additional Training</a></li>-->
          <li><a href="#projects">Highlighted Projects</a></li>
          <!--<li><a href="#articles">Opinion Articles</a></li>-->
          <!--<li><a href="#press">Press</a></li>-->
          <li><a href="#honors">Honors</a></li>
          <!--<li><a href="#mentoring">Mentoring</a></li>-->
          <li><a href="#service">Service</a></li>
          <li><a href="#activities">Extracurricular Activities</a></li>
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
      
      <!-- start the content here -->
      <section id="about">
        <p>
        I am a fifth year student at the <a href="http://www.rit.edu">Rochester Institute of Technology (RIT)</a> 
        pursuing a dual BS degree in <a href="http://www.cs.rit.edu">Computer Science</a> and 
        <a href="http://www.se.rit.edu">Software Engineering</a> with an accelerated BS/MS option in
        Computer Science. I also have minors in Mathematics and Writing Studies. I expect to graduate
        in August of 2013.
        </p>

        <p>
        My <a href="#interests">research interests</a> are very diverse, and include everything from applied cryptography,
        computer and network security, computational graph theory, combinatorics, and operating systems.
        Fortunately, I have had many opportunities at RIT to pursue research
        projects in these areas, which have resulted in several <a href="#publications">publications</a> and 
        <a href="#presentations">presentations</a>. As a student I try to be involved in projects that span several
        disciplines to exercise my skills in multiple fields. I also actively pursue <a href="#teaching">teaching assistant</a>
        positions to share my passion for science and technology with younger students. 
        </p>

        <p>
        In my spare time I also enjoy actively working on my own <a href="#projects">side projects</a> that are typically unrelated to
        my main areas of research. These are usually an excuse to learn a new programming language, library, framework,
        or other technology. Some of my notable projects include a replication of the AES cache timing 
        attack on software-based implementations of the AES in embedded platforms, as well as a 
        multi-threaded password cracking tool called Wedge that mimics the behavior of John the Ripper
        for breaking standard operating system passwords.
        </p>

        <p>
        The remainder of whatever free time I have left is devoted to music and exercise. My main musical interests
        are hard rock and heavy metal (i.e. bands such as <a href="http://www.youtube.com/watch?v=A7ry4cx6HfY" target="_blank">Avenged Sevenfold</a>, 
        <a href="http://www.youtube.com/watch?v=KTiQ75HY0DA" target="_blank">In Flames</a>, 
        <a href="http://www.youtube.com/watch?v=vVLDbWlsV3o" target="_blank">Lamb of God</a>, 
        <a href="http://www.youtube.com/watch?v=ugPxKkDmh5M" target="_blank">August Burns Red</a>, and
        <a href="http://www.youtube.com/watch?v=sxQmOAkny0k&list=SP15AD531E3A907CB7" target="_blank">Trivium</a>),
        but I also branch out into acoustic rock, jazz, and classical music. I am the proud owner of a 
        <a href="http://www.schecterguitars.com/Products/Guitar/Hellraiser-C-1.aspx">Schecter Hellraiser C-1</a>
        (a black model), and am slowly teaching myself the ropes.
        </p>
      </section>

      <section id="edu">
        <h2>Education</h2>
        
        <ul>
          <li>
            <h3><b>Rochester Institute of Technology</b> <span class="floatRight">August, 2013</span></h3>
            <p>Master of Science in Computer Science</p>
            <p>Thesis: Large Substitutionn Boxes with Efficient Combinational Implementations (in progress)</p>
            <p>Committee: Stanislaw Radziszowski and Marcin Lukowiak</p>
            <p>Main Elective Courses: Cryptography, Intelligent Security Systems, Data Communications and
Networks, Algorithms, Optimization Methods, Secure Database Systems, Security Measurement and Testing, and Parallel Computing</p>
          </li>
          
          <li>
            <h3><b>Rochester Institute of Technology</b> <span class="floatRight">May, 2012</span></h3>
            <p>Bachelor of Science in Computer Science and Software Engineering</p>
            <p>Minors in Mathematics and Writing Studies</p>
            <p>Main electives: Number Theory, Graph Theory, Operating Systems, Programming Language
Concepts, Computer Organization, Modern Physics, Real-Time and Embedded Systems</p>
          </li>
        </ul>
      </section>

      <section id="interests">
        <h2>Research Interests</h2>
        
        <p>
          Applied Cryptography, Computer and Network Security, Computational Graph Theory, Combinatorial Optimization, 
          Operating Systems, Chaos Theory and Dynamical Systems
        </p>
      </section>

       <section id="research">
        <h2>Research Projects</h2>
        
        <ul>
          <li>
            <h3><b>Narrowing the Edge Folkman Number Bounds<span class="floatRight">RIT</b></span></h3>
            <p><i>Combinatorics, Computational Graph Theory</i><span class="floatRight">January 2013 - present</span></p>
            <p>Advisor: Dr. Stanislaw Radziszowski (CS)</p>
            <p>TODO
            </p>
          </li>

          <li>
            <h3><b>Secure Logging System for Cloud-Based Applications<span class="floatRight">RIT</b></span></h3>
            <p><i>Cryptography, Computer Security, Secure Software Design</i><span class="floatRight">July 2012 - present</span></p>
            <p>Advisors: Dr. Rajendra K. Raj (CS) and Dr. Andy Meneely (SE)</p>
            <p>I am developing a secure logging architecture for cloud-based SaaS applications that utilizes 
              ciphertext-policy attribute based encryption (CP-ABE) for log file confidentiality and 
              authenticated hash chains for log file integrity. It features offline public and online 
              private verifiability of the log files to detect modification, addition, deletion, and 
              truncation attacks.
            </p>
          </li>
          
          <li>
            <h3><b>Wireless Ad-hoc Network Group Key Management <span class="floatRight">RIT</b></span></h3>
            <p><i>Applied Cryptography, Wireless Networking</i><span class="floatRight">May 2011 - present</span></p>
            <p>Colleagues: Dr. Marcin Lukowiak (CE), Dr. Stanislaw Radziszowski (CS), Dr. Peter Bajorski (Statistics), 
              Professor Alan Kaminsky (CS), and Dr. Michael Kurdziel (Harris RF)</p>
            <p>We are investigating group key management protocols for wireless ad-hoc radio networks with constrained 
              channel bandwidths and computational power. Our current solution is a protocol based on the standardized 
              Internet Key Exchange protocol. My role in this team is to implement network simulators in SMURPH/SIDE 
              and NS-3 to obtain empirical performance measurements, and also conduct experiments with Monte Carlo 
              simulations to verify the correctness of our protocol statistical model. We have a patent pending on 
              our protocol.
            </p>
          </li>

          <li>
            <h3><b>Keyboard Biometric-Based Continuous Authentication Service <span class="floatRight">RIT</b></span></h3>
            <p><i>Intelligent Security Systems, Artificial Intelligence, Machine Learning</i><span class="floatRight">September 2012 - November 2012</span></p>
            <p>Advisor: Dr. Leonid Reznik (CS)</p>
            <p>I am implementing a continuous authentication service based on dynamic, free-form user input for 
              UNIX systems. It features a real-time keylogger for data acquisition and a cross-platform feature 
              extraction and classification engine for authentication. WEKA is used to experiment with feature 
              extraction and filtering techniques that account for a variety of use cases.
            </p>
          </li>

          <li>
            <h3><b>L(2,1)-Labeling Problem<span class="floatRight">RIT</b></span></h3>
            <p><i>Computational Graph Theory</i><span class="floatRight">September 2011 - November 2012</span></p>
            <p>Advisor: Dr. Jobby Jacob (Mathematics)</p>
            <p>
              I worked on defining a characterization of the L(2,1)-span of trees based on their 
              structural properties. I implemented a labeling algorithm based on dynamic programming to 
              assist in the study of tree characterization, which helped to develop tree construction 
              algorithms that can be used to produce infinitely many trees with a specific L(2,1)-span. 
              Building upon this result, we then found a complete L(2,1) label span characterization of 
              all trees with up to twenty vertices.
            </p>
          </li>

          <li>
            <h3><b>Secure Operating System Design Principles<span class="floatRight">RIT</b></span></h3>
            <p><i>Computer Security, Operating Systems</i><span class="floatRight">March 2011 - June 2011</span></p>
            <p>Advisor: Dr. Rajendra K. Raj (CS)</p>
            <p>
              I researched secure operating system design principles at all levels of the software stack. 
              The main deliverable was a case study for popular operating systems built for various purposes, 
              including Microsoft Singularity, Chrome OS, Android, QNX, and Microsoft Azure.
            </p>
          </li>

          <li>
            <h3><b>Rootkit Design, Implementation, and Detection<span class="floatRight">RIT</b></span></h3>
            <p><i>Computer Security, Operating Systems, Malware Design</i><span class="floatRight">May 2009 - August 2009</span></p>
            <p>Advisor: Dr. Rajendra K. Raj (CS)</p>
            <p>
              I examined rootkit malware that targeted the Windows NT family of operating systems. This study 
              included user-mode and kernel-mode rootkit implementations and state-of-the-art static and 
              dynamic techniques. I developed a kernel filter driver for the keyboard device driver stack in C to 
              help determine the presence of a specific kind of keystroke-monitoring malware.
            </p>
          </li>
        </ul>
      </section>

      <section id="publications">
        <h2>Publications</h2>

        <h3><b>Forthcoming</b></h3>
        <br/>
        <ul>
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">C. Wood</span>,
          <span itemprop="name">"An Architecture for Supporting Automated Audits Over Encrypted Log Data in the Cloud,"
            <i>in preparation</i></span>.

          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">C. Wood, 
          </span></b> and <span itemprop="author">J. Jacob</span>,
          <span itemprop="name">"Characterization Results for the L(2,1)-Labeling Problem on Trees,"
            <i>in preparation</i></span>.
        </ul>
        
        <h3><b>Journal Articles</b></h3>
        <br/>
        <ul>
          <li itemscope itemtype="http://schema.org/Article"><p><b><span itemprop="author">C. Wood, 
          </span></b> and <span itemprop="author">J. Jacob</span>, 
          <span itemprop="name">"Forbidden Subtree Construction Techniques for Trees Under the L(2,1)-Labeling Problem,"
             <i>submitted to the Wiley Networks journal</i></span>.

          <li itemscope itemtype="http://schema.org/Article"><p><span itemprop="author">P. Bajorski, 
          </span>, <span itemprop="author">A. Kaminsky</span>, <span itemprop="author">M. Kurdziel</span>,
          <span itemprop="author">M. Lukowiak</span>, <span itemprop="author">S. Radziszowski</span>,
          and <b><span itemprop="author">C. Wood</span></b>,
          <span itemprop="name">"Statistical Analysis and Modeling of a Tree-Based Group Key Distribution Method in Tactical Wireless Networks,"
            <i>submitted to the IEEE Transactions on Wireless Communications</i></span>. 

          <li itemscope itemtype="http://schema.org/Article"><p>
          <span itemprop="author">M. Lukowiak</span>, <span itemprop="author">S. Radziszowski</span>,
          <span itemprop="author">J. Vallino</span>, and <b><span itemprop="author">C. Wood</span></b>,
          <span itemprop="name">"Cybersecurity Education: Bridging the Gap between Hardware and Software Domains,"
            <i>submitted to the ACM Transactions on Computing Education</i></span>.
        </ul>
        <br/>

        <h3><b>Conference Proceedings</b></h3>
        <br/>
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

      <section id="experience">
        <h2>Work Experience</h2>
        
        <ul>
          <li>
            <h3><b>Intel Corporation, Virtual and Parallel Computing Group<span class="floatRight">Folsom, CA</b></span></h3>
            <p><i>Graphics Software Engineer</i><span class="floatRight">June 2012 - August 2012</span></p>
            <p>Developed production features for tool that processes hardware specifications to generate web content and source code for VHDL and C/C++ testbeds.
            Interacted with internal customers within the VPG to utilize debug tools and environments for architecture specification and post-silicon testing.</p>
          </li>
          
          <li>
            <h3><b>L-3 Communications, Linkabit Division<span class="floatRight">Victor, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">March 2011 - August 2011</span></p>
            <p>Designed and implemented a library and supporting drivers for the u-blox NEO5/6 GPS receiver driven by an Analog Devices Blackfin processor.
            Extended an existing FAT file system driver to add support for SD devices.
            Improved functionality of a CPLD controller for an embedded power supply.</p>
          </li>

          <li>
            <h3><b>Rochester Software Associates<span class="floatRight">Rochester, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">November 2010 - March 2011</span></p>
            <p>Led the design, development, and documentation efforts for a new printer job management application that would service any number of jobs from clients across the network.
            Tested and debugged an existing .NET implementation of an LPD client.</p>
          </li>

          <li>
            <h3><b>C Speed, LLC<span class="floatRight">Liverpool, NY</b></span></h3>
            <p><i>Software Engineer Intern</i><span class="floatRight">May 2010 - August 2010</span></p>
            <p>Designed and implemented an internal manufacturing part supply management system.
            Implemented embedded firmware features and test routines in C, C++, and assembly for Coldfire V2 processors.</p>
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
          <li><p><i>Markup Languages: </i>LaTeX, HTML5, CSS3</p></li>
          <!--<li><p><i>Project Management</i> – Hiring and managing technical teams.</p></li>-->
        </ul>
      </section>

      <section id="projects">
        <h2>Highlighted Projects</h2>

        <ul>
          <li>
            <h3><b>FTPredator - A FTP Scraping Tool for Penetration Testing</b> <span class="floatRight">February 2013 - present</span></h3>
            <p>
              FTPredator is a simple forensic tool that will scrape vulnerable FTP servers for sensitive information that
              can be used in manual penetration tests (i.e. database credential information, user accounts, etc). 
            </p>
            <p>Source code: <a href="https://github.com/chris-wood/FTPredator" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>AskSG - A Community Overlay for</b> <span class="floatRight">December 2012 - present</span></h3>
            <p>
              ASKSG is a comprehensive platform that corrals student ideas, questions, and concerns from a variety of 
              online sources into a single portal for the RIT Student Government (SG). The goal is to enhance their 
              relationship with students and to provide a channel for advice on what the governance body should focus 
              on, such as programs or policies on campus to change, replace or recreate. ASKSG provides a common 
              interface for all directed student questions and inquiries to provide an overarching picture of student 
              sentiment. This interface, which meets federal accessibility requirements, will funnel student questions 
              submitted through SMS, phone calls, and social media private messaging, and then enable responses to be 
              reciprocated using the same incoming interface.
            </p>
            <p>Source code: <a href="https://github.com/ithunt/asksg" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>ABLS - Attribute Based Logging System</b> <span class="floatRight">July 2012 - present</span></h3>
            <p>
              ABLS is a logging service for cloud applications that provides atrribute-based log confidentiality
              and high data-integrity guarantees. It is intended to aid application developers in storing system
              events that can be used to build audit trails. Such audit trails can be used to enforce organizational
              security policies and support user-based non-repudiation through manual and automated audits.
            </p>
            <p>Source code: <a href="https://github.com/chris-wood/SecureLoggingSystem" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>Wedge - A Cross-Platform Password Cracking Utility</b> <span class="floatRight">November 2012 - February 2013</span></h3>
            <p>
              Wedge is a cross-platform password cracking utility that mimics the behavior of John the 
              Ripper. It currently supports standard dictionary and brute-force attacks for a variety of
              unsalted password digests, but I expect to integrate more advanced password cracking techniques, 
              such as the use of rainbow tables and those based on Markov-chains, in the future. 
            </p>
            <p>Source code: <a href="https://github.com/chris-wood/Wedge" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>AES Cache Timing Attack</b> <span class="floatRight">May 2012 - present</span></h3>
            <p>I am replicating the original cache timing attack on the AES (first
              introduced by <a href="http://cr.yp.to/antiforgery/cachetiming-20050414.pdf">Daniel Bernstein</a> and
              later studied by <a href="http://research.microsoft.com/pubs/64024/aes-timing.pdf">Joseph Bonneau and
              Ilya Mironov</a>) on the Xilinx MicroBlaze soft-core processor. Our development platform is a Xilinx ML507
              board with a Virtex5 FPGA that implements the MicroBlaze processor. The hard-core PowerPC
              processor is also available for use.</p>
            <p>Source code: <a href="https://github.com/chris-wood/CacheTimingAttack" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>ThoughtPoll</b> <span class="floatRight">November 2012 - present (very inactive development)</span></h3>
            <p>
              ThoughtPoll is an online service for collecting, organizing, and visualizing human opinions
              on various topics in technology, politics, economics, etc. It was started
              as an endeavor to learn the Play Framework with Java, and has since become a project
              that I work on only sporadically in my free time. 
            </p>
            <p>Source code: <a href="https://github.com/chris-wood/ThoughtPoll" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>Continuous Authentication System</b> <span class="floatRight">September 2012 - November 2012</span></h3>
            <p>
              This project is a partially-complete prototype service for *nix-based operating systems that captures
              user typing patterns in real-time and uses this information to identify the user. It is the result of 
              my research on continuous authentication systems. The system features a C-based keylogger that 
              streams data to a classification and authentication engine written in Python. Users must enroll 
              in the system via typing sessions in order to be identified. 
            </p>
            <p>Source code: <a href="https://github.com/chris-wood/ContinuousAuthenticationSystem" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>Kanban Taskboard</b> <span class="floatRight">September 2010 - November 2010</span></h3>
            <p>This Kanban Taskboard provides software development teams with a tool that allows for 
              more transparency towards project requirements, tasks, and milestones. This application can be 
              synchronized between multiple platforms. It was built using 
              Java, BlazeDS, Flex (MXML+Actionscript), and Tomcat.</p>
            <p>Source code: <a href="https://github.com/chris-wood/KanbanTaskboard-1" target="_blank">here</a></p>
          </li>

          <li>
            <h3><b>FTP Client</b> <span class="floatRight">February 2012 - May 2012</span></h3>
            <p>This is a simple command-line driven FTP client written entirely in Java. It supports both
            active and passive modes of transmission to avoid problems introduced by firewalls. Only "get"
            support was implemented.</p>
            <p>Source code: <a href="https://github.com/chris-wood/FTPClient" target="_blank">here</a></p>
          </li>
        </ul>
      </section>

      <section id="honors">
        <h2>Honors</h2>
        <ul>
          <li><p>RIT Honors Program <span class="floatRight">2009 - present</span></p></li>
          <li><p>Recipient of RIT Outstanding Undergraduate Student award<span class="floatRight">Winter 2012</span></p></li>
          <li><p>RIT Computer Science Graduate student delegate, selected<span class="floatRight">Winter 2012</span></p></li>
          <li><p>RIT Computer Science Undergraduate student delegate, nominated<span class="floatRight">Fall 2012</span></p></li>
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
            <h3>Rochester Foodlink volunteer<span class="floatRight">Winter 2012/2013 - present</span></h3>
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
            <i>Student Lab Assistant and Grader</i>, RIT, January 2009 - December 2012.</p></li>

          <li><p><b>Personal Software Engineering.</b> 
            <i>Teaching Assistant</i>, RIT, December 2011 - March 2012. With Professor Tom Reichlmayr (SE).</p></li>

          <li><p><b>Engineering of Software Subsystems.</b> 
            <i>Teaching Assistant</i>, RIT, September 2011 - December 2011. With Dr. James Vallino (SE).</p></li>

          <li><p><b>Computer Organization.</b> 
            <i>Grader</i>, RIT, September 2010 - December 2010. With Professor Phil White (CS).</p></li>
        </ul>
      </section>

    </div> <!-- end #contentWrapper -->
  </div> <!-- end #outerWrapper -->
<p>Design by 
<a href="http://www.mit.edu/~amonroy/">André Monroy-Hernánd</a>.
</p>
<p>Used with permission.</p>
</body>
</html>
