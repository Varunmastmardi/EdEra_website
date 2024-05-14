<!DOCTYPE php>
<php lang="en">
  <head>
    <title>Course Details</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Unicat project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      href="styles/bootstrap4/bootstrap.min.css"
    />
    <link
      href="plugins/font-awesome-4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="plugins/colorbox/colorbox.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/OwlCarousel2-2.2.1/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="plugins/OwlCarousel2-2.2.1/animate.css"
    />
    <link rel="stylesheet" type="text/css" href="styles/course.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="styles/course_responsive.css"
    />
  </head>
  <body>
    <div class="super_container">
      <!-- Header -->

      <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
          <div class="top_bar_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div
                    class="top_bar_content d-flex flex-row align-items-center justify-content-start"
                  >
                    <ul class="top_bar_contact_list">
                      <li><div class="question">Have any questions?</div></li>
                      <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div>+9096649556</div>
                      </li>
                      <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div>hr@edera.in</div>
                      </li>
                    </ul>
                    <div class="top_bar_login ml-auto">
                      <div class="login_button">
                        <a href="#">Register or Login</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  class="header_content d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="logo_container">
                    <a href="#">
                        <img class="logo" src="images/edera%20logo.png">
                    </a>
                  </div>
                  <nav class="main_nav_contaner ml-auto">
                    <ul class="main_nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="courses.php">Courses</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="#">Page</a></li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="search_button">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </div>

                    <!-- Hamburger -->

                    <div class="shopping_cart">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="hamburger menu_mm">
                      <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Search Panel -->
        <div class="header_search_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div
                  class="header_search_content d-flex flex-row align-items-center justify-content-end"
                >
                  <form action="#" class="header_search_form">
                    <input
                      type="search"
                      class="search_input"
                      placeholder="Search"
                      required="required"
                    />
                    <button
                      class="header_search_button d-flex flex-column align-items-center justify-content-center"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Menu -->

      <div
        class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400"
      >
        <div class="menu_close_container">
          <div class="menu_close">
            <div></div>
            <div></div>
          </div>
        </div>
        <div class="search">
          <form action="#" class="header_search_form menu_mm">
            <input
              type="search"
              class="search_input menu_mm"
              placeholder="Search"
              required="required"
            />
            <button
              class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm"
            >
              <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        <nav class="menu_nav">
          <ul class="menu_mm">
            <li class="menu_mm"><a href="index.php">Home</a></li>
            <li class="menu_mm"><a href="#">About</a></li>
            <li class="menu_mm"><a href="#">Courses</a></li>
            <li class="menu_mm"><a href="#">Blog</a></li>
            <li class="menu_mm"><a href="#">Page</a></li>
            <li class="menu_mm"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Home -->

      <div class="home">
        <div class="breadcrumbs_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="breadcrumbs">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li>Course Details</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course -->

      <div class="course">
        <div class="container">
          <div class="row">
            <!-- Course -->
            <div class="col-lg-8">
              <div class="course_container">
                <div class="course_title">Full Stack Python Developer</div>
                <div
                  class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start"
                >
                  <!-- Course Info Item -->
                  <div class="course_info_item">
                    <div class="course_info_title">Teacher:</div>
                    <div class="course_info_text">
                      <a href="#">Jacke Masito</a>
                    </div>
                  </div>

                  <!-- Course Info Item -->
                  <div class="course_info_item">
                    <div class="course_info_title">Reviews:</div>
                    <div class="rating_r rating_r_4">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                  </div>

                  <!-- Course Info Item -->
                  <div class="course_info_item">
                    <div class="course_info_title">Categories:</div>
                    <div class="course_info_text">
                      <a href="#">Languages</a>
                    </div>
                  </div>
                </div>

                <!-- Course Image -->
                <div class="course_image">
                  <img src="images/py.png" alt="" />
                </div>

                <!-- Course Tabs -->
                <div class="course_tabs_container">
                  <div
                    class="tabs d-flex flex-row align-items-center justify-content-start"
                  >
                    <div class="tab active">description</div>
                    <div class="tab">curriculum</div>
                    <div class="tab">reviews</div>
                  </div>
                  <div class="tab_panels">
                    <!-- Description -->
                    <div class="tab_panel active">
                      <div class="tab_panel_title">
                        Full Stack Python Developer
                      </div>
                      <div class="tab_panel_content">
                        <div class="tab_panel_text">
                          <p>
                            full stack Python course offers a comprehensive
                            exploration of both front-end and back-end web
                            development using Python. Participants dive into
                            Python fundamentals, mastering its syntax and
                            capabilities. On the front-end side, they delve into
                            php/CSS for structuring and styling web content,
                            JavaScript for creating dynamic user experiences,
                            and often, modern frameworks like React or Angular
                            for building interactive interfaces. Meanwhile, on
                            the back-end, students learn how to utilize Python
                            web frameworks such as Django or Flask to create
                            powerful server-side applications, manage databases
                            using SQL or NoSQL solutions, and develop RESTful
                            APIs for seamless communication between client and
                            server. Throughout the course, students also gain
                            proficiency in version control with Git, deployment
                            strategies, testing methodologies, and essential
                            security practices.
                          </p>
                        </div>
                        <div class="tab_panel_section">
                          <div class="tab_panel_subtitle">Requirements</div>
                          <ul class="tab_panel_bullets">
                            <li>
                              Learn Python fundamentals including data
                              structures and object-oriented programming.
                            </li>
                            <li>
                              Master front-end development with php, CSS, and
                              JavaScript.
                            </li>
                            <li>
                              Dive into frameworks like Django and Flask for
                              back-end development.
                            </li>
                            <li>
                              Gain proficiency in database management with SQL
                              and ORMs.
                            </li>
                            <li>
                              Understand deployment processes, version control
                              with Git, and additional skills like RESTful APIs
                              and testing
                            </li>
                          </ul>
                        </div>
                        <div class="tab_panel_section">
                          <div class="tab_panel_subtitle">
                            What is the target audience?
                          </div>
                          <div class="tab_panel_text">
                            <p>
                              The target audience for a full-stack Python
                              developer course encompasses a wide spectrum,
                              including novice programmers eager to grasp both
                              front-end and back-end web development, seasoned
                              developers keen on transitioning to Python-centric
                              full-stack development, computer science students
                              or graduates aiming to specialize in web
                              development, industry professionals seeking to
                              augment their skill sets to cover the entire
                              stack, and individuals with a general interest in
                              constructing dynamic web applications utilizing
                              Python and associated technologies.
                            </p>
                          </div>
                        </div>
                        <div class="tab_panel_faq">
                          <div class="tab_panel_title">FAQ</div>

                          <!-- Accordions -->
                          <div class="accordions">
                            <div class="elements_accordions">
                              <div class="accordion_container">
                                <div
                                  class="accordion d-flex flex-row align-items-center"
                                >
                                  <div>
                                    Can I just enroll in a single course?
                                  </div>
                                </div>
                                <div class="accordion_panel">
                                  <p>
                                    Yes, there are comprehensive full-stack
                                    Python developer courses available that
                                    cover all necessary topics. However,
                                    depending on your learning preferences and
                                    prior knowledge, you may opt to enroll in
                                    multiple individual courses or pursue
                                    self-study through various resources.
                                  </p>
                                </div>
                              </div>

                              <div class="accordion_container">
                                <div
                                  class="accordion d-flex flex-row align-items-center active"
                                >
                                  <div>
                                    I'm not interested in the entire
                                    Specialization?
                                  </div>
                                </div>
                                <div class="accordion_panel">
                                  <p>
                                    Certainly! Many platforms offer individual
                                    courses covering specific aspects of
                                    full-stack development, such as front-end
                                    frameworks, back-end frameworks, databases,
                                    or deployment. You can choose to enroll in
                                    single courses that align with your
                                    interests and learning goals
                                  </p>
                                </div>
                              </div>

                              <div class="accordion_container">
                                <div
                                  class="accordion d-flex flex-row align-items-center"
                                >
                                  <div>What is the refund policy?</div>
                                </div>
                                <div class="accordion_panel">
                                  <p>
                                    Refund policies vary by platform and course.
                                    Typically, there's a window (usually 7-30
                                    days) for refunds after enrollment, but
                                    terms differ. It's crucial to review the
                                    specific policy before enrolling, as it may
                                    include eligibility criteria or offer
                                    partial refunds.
                                  </p>
                                </div>
                              </div>

                              <div class="accordion_container">
                                <div
                                  class="accordion d-flex flex-row align-items-center"
                                >
                                  <div>
                                    What background knowledge is necessary?
                                  </div>
                                </div>
                                <div class="accordion_panel">
                                  <p>
                                    A foundational understanding of programming
                                    concepts and logic is essential. Familiarity
                                    with Python basics is particularly helpful,
                                    as well as understanding concepts like
                                    variables, data types, loops, and functions.
                                    For front-end development, basic knowledge
                                    of php, CSS, and JavaScript is beneficial.
                                    No prior experience with full-stack
                                    development is required, but a willingness
                                    to learn and problem-solving skills are
                                    invaluable.
                                  </p>
                                </div>
                              </div>

                              <div class="accordion_container">
                                <div
                                  class="accordion d-flex flex-row align-items-center"
                                >
                                  <div>
                                    Do i need to take the courses in a specific
                                    order?
                                  </div>
                                </div>
                                <div class="accordion_panel">
                                  <p>
                                    While some courses may suggest a sequence,
                                    it's not strictly necessary to follow a
                                    specific order. Starting with foundational
                                    concepts like Python basics before
                                    progressing to web frameworks and front-end
                                    technologies can be beneficial, but adapt
                                    the sequence to your learning goals and
                                    skill level.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Curriculum -->
                    <div class="tab_panel tab_panel_2">
                      <div class="tab_panel_content">
                        <div class="tab_panel_title">
                          Full Stack Python Developer
                        </div>
                        <div class="tab_panel_content">
                          <div class="tab_panel_text">
                            <p>
                              A full stack Python course offers a comprehensive
                              exploration of both front-end and back-end web
                              development using Python. . On the front-end side,
                              they delve into php/CSS for structuring and
                              styling web content, JavaScript for creating
                              dynamic user experiences, and often, modern
                              frameworks like React or Angular for building
                              interactive interfaces.
                            </p>
                          </div>

                          <!-- Dropdowns -->
                          <ul class="dropdowns">
                            <li class="has_children">
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 1:</span> Python Language Fundamental
            
                                </div>
                                <div class="dropdown_item_text">
                                
                                </div>
                              </div>
                              <ul>
                                <li>
                                  <div class="dropdown_item">
                                    
                                    <div class="dropdown_item_text">
                                      <p>
									  Features of Python Programming Portability	
                                      Why Python is a Multi paradigm language? <br>
									  Why Python is a Multi purpose language?<br> 
									  Python Virtual Machine <br>
									  Keywords Identifiers Constants/Literals <br>
									  Python Syntax <br>
									  Data Types <br>
									  Importance of Indentation <br>
                                      </p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="dropdown_item">
                                    
                                  </div>
                                </li>
                              </ul>
                            </li>


<ul class="dropdowns">
                            <li class="has_children">
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 2:</span> Python Variables 
            
                                </div>
                                <div class="dropdown_item_text">
                                
                                </div>
                              </div>
                              <ul>
                                <li>
                                  <div class="dropdown_item">
                                    
                                    <div class="dropdown_item_text">
                                      <p>
										Arithmetic operators <br>
										Comparison operators <br>
									   Assignment operators <br>
									   Logical operators <br>
									   Bitwise operators <br>
									   Shift operators <br>
									   Membership operators <br>
									   Identity operators<br> 
									   Ternary operators <br>
									   Operator precedence <br>
										
                                      </p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="dropdown_item">
                                    
                                  </div>
                                </li>
                              </ul>
                            </li>

							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 3:</span> Control Statements 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Conditional / Control statements <br>
                                            If, elif, else, if-elif-else ladder <br>
											Nested if <br>
											Branching statements <br>
											Loop control Statements: for and while loops <br>
											Nested loops <br>
											break, continue, pass, return <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 4:</span> Methods and Functions in python 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Types of methods and functions <br>
												Calling Methods and functions <br>
												Parameter Passing <br>
												Control flow during execution of methods and functions <br>
												Activation Record <br>
												Filter and Map Function <br>
												Lambda Functions <br>
												Nested Functions <br>


											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>





								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 5:</span> Tuple Collection 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Introduction to collections/data structures <br>
											What is a tuple? 
											Different ways of creating a Tuple 
											Methods of Tuple object 
											Mutability of Tuples 
											Process tuple through Indexing and Slicing 
											List v/s Tuple 

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>





								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 6:</span> String in Python 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Introduction to Strings <br>
											Representation of Strings <br>
											Processing elements using indexing and Iterators <br>
											Manipulation of String using Indexing <br>
											String Slicing <br>
											String operators, methods, and functions <br>
											String Formatting<br> 
											String Mutability <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>





								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 7:</span> List Collection  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											What is a List and its importance<br>
											Different ways of creating Lists <br>
											List comprehension <br>
											Processing elements of List through Indexing and Slicing <br>
											List object methods <br>
											 Mutability of lists <br>
											Nested Lists and List of lists <br>
											 Shallow Copy and Deep Copy <br>
											zip() and unzipping in Python? <br>
											
											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>





								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 8:</span> Set Collection  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											What is set? <br>
											Different ways of creating a set <br>
											Difference between list and set <br>
											Iteration Over Sets <br>
											Python Set operations, methods, and functions <br>
											Frozen set <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>




								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 9:</span> Dictionary Collection 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											What is a dictionary? <br>
											Difference between list, set, and dictionary <br>
											How to create a dictionary? <br>
											Accessing values of the dictionary <br>
											Python Dictionary Methods and Functions <br>
											Reading keys, values, and items from Dictionary <br>
											Delete Keys from the dictionary <br>
											Sorting the Dictionary <br>
											Dictionary comprehension <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>




								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 10:</span> Exception Handling And types of errors  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											What is an Exception? <br>
											Why exception handling? <br>
											Syntax error v/s Runtime error <br>
											Exception codes Attribute Error, Value <br>
											Error, Index Error, Type Error. <br>
											Handling exceptions  try and except block <br>
											How the try, except, and finally blocks work with each other. <br>
											Handling multiple exceptions with a single except block <br>
											Raise keyword Custom exceptions / User-defined exceptions <br>
											Need for Customized exceptions <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 11:</span> File and Directory handling 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Introduction to files Opening files in various File modes <br>
											Reading data from and writing data into a file <br>
											Appending data into a file <br>
											Line count in File Creating, Reading, and writing operations with CSV Files. <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>


								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 12:</span> Regular Expression 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											String v/s Regular expression string <br>
											Methods used for pattern matching Position, Special literal, Character class, and Repetition matching <br>
											 Mobile number extraction using regular expressions <br>
											Mailextractionusingregular expressions <br>
											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 13:</span> OOP 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Procedural v/s Object-oriented Programming <br>
													Principles of OOP  Encapsulation, Polymorphism, Inheritance, and Abstraction Classes and Objects <br>
													Types of variables  instance variables, class variables. <br>
													Types of methods  instance methods, class methods, static method <br>
													Object initialization <br>
													“self” variable <br>
													Access modifiers <br>
													Method Overloading <br>
													Constructor Overloading <br>
													Delegation <br>
													Inheritance  single, multilevel, multiple, hierarchical & hybrid inheritance, and Diamond inheritance <br>
													Order of Constructor calling in inheritance <br>
													Runtime polymorphism <br>
													Method Resolution Order(MRO) <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 14:</span> php 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											INTRODUCTION <br>
											BASIC STRUCTURE OF php <br>
											FORMATTING TAGS(ELEMENTS) <br>
											SEMANTIC TAGS(ELEMENTS) <br>
											phpATTRIBUTES <br>
											TABLES <br>
											LISTS <br>
											FORMS <br>
											phpMEDIA <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 15:</span> CSS 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											INTRODUCTION <br>
											TYPES OF CSS <br>
											CSS COLORS <br>
											CSS PROPERTIES <br>
											CSS SELECTORS <br>
											CSS TABLES <br>
											CSS LIST <br>
											CSS BOX MODEL <br>
											CSS FONTAND TEXT <br>
											CSS OVERFLOW <br>
											CSS POSITION <br>
											CSS INLINE-BLOCK <br>
											CSS NAVIGATION BAR <br>
											CSS GRADIENTS <br>
											CSS 2D,3D TRANSFORMS <br>
											CSS ANIMATION CSS PAGINATION <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>


								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 16:</span> Bootstrap Syllabus  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Bootstrap Buttons <br>
											Bootstrap Forms <br>
											Bootstrap Navbars 
											Bootstrap Grid System <br>
											Bootstrap images <br>
											Bootstrap Tables <br>
											Bootstrap - Jumbotron <br>
											Bootstrap - Button Groups <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 17:</span> Javascripts 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											JavaScript Output <br>
											JavaScript Statements <br>
										   JavaScript Syntax <br>
										   JavaScript Variables<br> 
											JavaScript Operators <br>
										   Control Statements <br>
											Conditional Statements <br>
											   
									
											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 18:</span> Javascripts Functions 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Syntax <br>
											Function Invocation <br>
											return statement <br>
											Local Variables <br>
											Object Methods <br>
											this Keyword <br>
 

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 19:</span> Javascripts Form 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Form Validation <br>
											phpForm Validation <br>
											Data Validation <br>
											Constraint Validation <br>
											Validation API <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>


								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 20:</span> Javascripts Array 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Creating an Array <br>
											New keyword <br>
											Properties and Methods <br>
											Looping through elements <br>
											Array Methods <br>
											Array Sorting <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>


								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 21:</span> DOM Elements 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Document Object Model <br>
											DOM Methods<br> 
											DOM Document <br>
											php DOM <br>
											Changing CSS <br>
											DOM Events <br>
											DOM Navigation <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 22:</span> MySQL Syllabus 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Database models <br>
											ER Model <br>
											Overview Data types <br>

											
											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>




								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 23:</span> Django Syallabus 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											What is a web framework? <br>
											MVT design pattern <br>
											Importance of Django framework <br>
											Creating and running a Django project <br>
											Creating multiple applications <br>
											Defining URL patterns inside an application <br>
											Form handling process <br>
											Form fields and validation <br>
											Model Forms <br>
											Implementing custom validators <br>
											Template inheritance and template filters <br>
											Creating a course registration form <br>
											Creating an employee information form <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 24:</span> Templates And Static Files 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Creating template based application <br>
											Defining template tags <br>
											Application to display employee information <br>
											Inserting static files <br>
											Developing a blog application using static files <br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>




								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 25:</span> Database Operation 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Configuring the database with sqlite3 <br><br>
											Configuring the database with mysql <br><br>
											Configuring the database with mongodb <br><br>
											Importance make migrations and migrate <br><br>
											Creating a Bank database <br><br>
											Creating a Student database Module Django Forms <br><br>
											Difference between php forms and Django forms<br><br> 
											Form handling process <br><br>
											Form fields and val idation Model Forms <br><br>
											Implementing custom validators <br><br>
											Template inheritance and template filters <br><br>
											Creating a course registration form Creating an employee information forms <br><br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>




								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 26:</span> CRUD Operations  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Creating views at class level <br>
											Creating a template file for ListView<br> 
											Developing an online movie booking application<br> 
											Developing an employee profile application <br>
											Developing a customer database application <br>

										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>



								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 27:</span> REST Api 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
											Setting up of Django Rest framework Rest Framework views <br><br>
											Creating custom action PUT, POST, PATCH, DELETE methods <br><br>
											Working with Serializers classes <br><br>
											JWT Authentication <br><br>
											Handling relationships <br><br>
											Consuming third party API <br><br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li>
                          











                            <!-- <li class="has_children">
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 2:</span> Python Variables 
                                  
                                </div>
                                <div class="dropdown_item_text"> -->
                                  <!-- <p>
                                    Lorem Ipsn gravida nibh vel velit auctor
                                    aliquet. Aenean sollicitudin, lorem quis
                                    bibendum auci elit consequat ipsutis sem
                                    nibh id elit. Duis sed odio sit amet nibh
                                    vulputate cursus.
                                  </p> -->
                                <!-- </div>
                              </div>
                              <ul>
                                <li>
                                  <div class="dropdown_item">
                                    <div class="dropdown_item_title">
                                      <span>Lecture 2.1:</span> Lorem Ipsn
                                      gravida nibh vel velit auctor aliquet.
                                    </div>
                                    <div class="dropdown_item_text">
                                      <p>
                                        Lorem Ipsn gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis
                                        bibendum auci elit consequat ipsutis sem
                                        nibh id elit. Duis sed odio sit amet
                                        nibh vulputate cursus.
                                      </p>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="dropdown_item">
                                    <div class="dropdown_item_title">
                                      <span>Lecture 2.2:</span> Lorem Ipsn
                                      gravida nibh vel velit auctor aliquet.
                                    </div>
                                    <div class="dropdown_item_text">
                                      <p>
                                        Lorem Ipsn gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin, lorem quis
                                        bibendum auci elit consequat ipsutis sem
                                        nibh id elit. Duis sed odio sit amet
                                        nibh vulputate cursus.
                                      </p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </li>
                            <li> -->
                              <!-- <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 3:</span> Lorem Ipsn gravida
                                  nibh vel velit auctor aliquet.
                                </div>
                                <div class="dropdown_item_text">
                                  <p>
                                    Lorem Ipsn gravida nibh vel velit auctor
                                    aliquet. Aenean sollicitudin, lorem quis
                                    bibendum auci elit consequat ipsutis sem
                                    nibh id elit. Duis sed odio sit amet nibh
                                    vulputate cursus.
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 4:</span> Lorem Ipsn gravida
                                  nibh vel velit auctor aliquet.
                                </div>
                                <div class="dropdown_item_text">
                                  <p>
                                    Lorem Ipsn gravida nibh vel velit auctor
                                    aliquet. Aenean sollicitudin, lorem quis
                                    bibendum auci elit consequat ipsutis sem
                                    nibh id elit. Duis sed odio sit amet nibh
                                    vulputate cursus.
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 5:</span> Lorem Ipsn gravida
                                  nibh vel velit auctor aliquet.
                                </div>
                                <div class="dropdown_item_text">
                                  <p>
                                    Lorem Ipsn gravida nibh vel velit auctor
                                    aliquet. Aenean sollicitudin, lorem quis
                                    bibendum auci elit consequat ipsutis sem
                                    nibh id elit. Duis sed odio sit amet nibh
                                    vulputate cursus.
                                  </p>
                                </div>
                              </div>
                            </li>
                          </ul> -->
                        </div>
                      </div>
                    </div>

                    <!-- Reviews -->
                    <div class="tab_panel tab_panel_3">
                      <div class="tab_panel_title">Course Review</div>

                      <!-- Rating -->
                      <div class="review_rating_container">
                        <div class="review_rating">
                          <div class="review_rating_num">4.5</div>
                          <div class="review_rating_stars">
                            <div class="rating_r rating_r_4">
                              <i></i><i></i><i></i><i></i><i></i>
                            </div>
                          </div>
                          <div class="review_rating_text">(28 Ratings)</div>
                        </div>
                        <div class="review_rating_bars">
                          <ul>
                            <li>
                              <span>5 Star</span>
                              <div class="review_rating_bar">
                                <div style="width: 90%"></div>
                              </div>
                            </li>
                            <li>
                              <span>4 Star</span>
                              <div class="review_rating_bar">
                                <div style="width: 75%"></div>
                              </div>
                            </li>
                            <li>
                              <span>3 Star</span>
                              <div class="review_rating_bar">
                                <div style="width: 32%"></div>
                              </div>
                            </li>
                            <li>
                              <span>2 Star</span>
                              <div class="review_rating_bar">
                                <div style="width: 10%"></div>
                              </div>
                            </li>
                            <li>
                              <span>1 Star</span>
                              <div class="review_rating_bar">
                                <div style="width: 3%"></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <!-- Comments -->
                      <div class="comments_container">
                        <ul class="comments_list">
                          <li>
                            <div
                              class="comment_item d-flex flex-row align-items-start jutify-content-start"
                            >
                              <div class="comment_image">
                                <div>
                                  <img src="images/comment_1.jpg" alt="" />
                                </div>
                              </div>
                              <div class="comment_content">
                                <div
                                  class="comment_title_container d-flex flex-row align-items-center justify-content-start"
                                >
                                  <div class="comment_author">
                                    <a href="#">Milley Cyrus</a>
                                  </div>
                                  <div class="comment_rating">
                                    <div class="rating_r rating_r_4">
                                      <i></i><i></i><i></i><i></i><i></i>
                                    </div>
                                  </div>
                                  <div class="comment_time ml-auto">
                                    1 day ago
                                  </div>
                                </div>
                                <div class="comment_text">
                                  <p>
                                    There are many variations of passages of
                                    Lorem Ipsum available, but the majority have
                                    alteration in some form, by injected humour.
                                  </p>
                                </div>
                                <div
                                  class="comment_extras d-flex flex-row align-items-center justify-content-start"
                                >
                                  <div class="comment_extra comment_likes">
                                    <a href="#"
                                      ><i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                      ></i
                                      ><span>15</span></a
                                    >
                                  </div>
                                  <div class="comment_extra comment_reply">
                                    <a href="#"
                                      ><i
                                        class="fa fa-reply"
                                        aria-hidden="true"
                                      ></i
                                      ><span>Reply</span></a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul>
                              <li>
                                <div
                                  class="comment_item d-flex flex-row align-items-start jutify-content-start"
                                >
                                  <div class="comment_image">
                                    <div>
                                      <img src="images/comment_2.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="comment_content">
                                    <div
                                      class="comment_title_container d-flex flex-row align-items-center justify-content-start"
                                    >
                                      <div class="comment_author">
                                        <a href="#">John Tyler</a>
                                      </div>
                                      <div class="comment_rating">
                                        <div class="rating_r rating_r_4">
                                          <i></i><i></i><i></i><i></i><i></i>
                                        </div>
                                      </div>
                                      <div class="comment_time ml-auto">
                                        1 day ago
                                      </div>
                                    </div>
                                    <div class="comment_text">
                                      <p>
                                        There are many variations of passages of
                                        Lorem Ipsum available, but the majority
                                        have alteration in some form, by
                                        injected humour.
                                      </p>
                                    </div>
                                    <div
                                      class="comment_extras d-flex flex-row align-items-center justify-content-start"
                                    >
                                      <div class="comment_extra comment_likes">
                                        <a href="#"
                                          ><i
                                            class="fa fa-heart"
                                            aria-hidden="true"
                                          ></i
                                          ><span>15</span></a
                                        >
                                      </div>
                                      <div class="comment_extra comment_reply">
                                        <a href="#"
                                          ><i
                                            class="fa fa-reply"
                                            aria-hidden="true"
                                          ></i
                                          ><span>Reply</span></a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div
                              class="comment_item d-flex flex-row align-items-start jutify-content-start"
                            >
                              <div class="comment_image">
                                <div>
                                  <img src="images/comment_3.jpg" alt="" />
                                </div>
                              </div>
                              <div class="comment_content">
                                <div
                                  class="comment_title_container d-flex flex-row align-items-center justify-content-start"
                                >
                                  <div class="comment_author">
                                    <a href="#">Milley Cyrus</a>
                                  </div>
                                  <div class="comment_rating">
                                    <div class="rating_r rating_r_4">
                                      <i></i><i></i><i></i><i></i><i></i>
                                    </div>
                                  </div>
                                  <div class="comment_time ml-auto">
                                    1 day ago
                                  </div>
                                </div>
                                <div class="comment_text">
                                  <p>
                                    There are many variations of passages of
                                    Lorem Ipsum available, but the majority have
                                    alteration in some form, by injected humour.
                                  </p>
                                </div>
                                <div
                                  class="comment_extras d-flex flex-row align-items-center justify-content-start"
                                >
                                  <div class="comment_extra comment_likes">
                                    <a href="#"
                                      ><i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                      ></i
                                      ><span>15</span></a
                                    >
                                  </div>
                                  <div class="comment_extra comment_reply">
                                    <a href="#"
                                      ><i
                                        class="fa fa-reply"
                                        aria-hidden="true"
                                      ></i
                                      ><span>Reply</span></a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="add_comment_container">
                          <div class="add_comment_title">Add a review</div>
                          <div class="add_comment_text">
                            You must be <a href="#">logged</a> in to post a
                            comment.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4">
              <div class="sidebar">
                <!-- Feature -->
                <div class="sidebar_section">
                  <div class="sidebar_section_title">Course Feature</div>
                  <div class="sidebar_feature">
                    <div class="course_price">49999</div>

                    <!-- Features -->
                    <div class="feature_list">
                      <!-- Feature -->
                      <div
                        class="feature d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="feature_title">
                          <i class="fa fa-clock-o" aria-hidden="true"></i
                          ><span>Duration:</span>
                        </div>
                        <div class="feature_text ml-auto">6 Months</div>
                      </div>

                      <!-- Feature -->
                      <div
                        class="feature d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="feature_title">
                          <i class="fa fa-file-text-o" aria-hidden="true"></i
                          ><span>Lectures:</span>
                        </div>
                        <div class="feature_text ml-auto">27 </div>
                      </div>

                      <!-- Feature -->
                      <div
                        class="feature d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="feature_title">
                          <i
                            class="fa fa-question-circle-o"
                            aria-hidden="true"
                          ></i
                          ><span>Quizes:</span>
                        </div>
                        <div class="feature_text ml-auto">27</div>
                      </div>

                      <!-- Feature -->
                      <div
                        class="feature d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="feature_title">
                          <i class="fa fa-list-alt" aria-hidden="true"></i
                          ><span>Assignments:</span>
                        </div>
                        <div class="feature_text ml-auto">6</div>
                      </div>

                      <!-- Feature -->
                      <div
                        class="feature d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="feature_title">
                          <i class="fa fa-users" aria-hidden="true"></i
                          ><span>Notes:</span>
                        </div>
                        <div class="feature_text ml-auto">27</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Feature -->
                <div class="sidebar_section">
                     <button type="submit" class="course_buy_button"><a href="">Download Broucher</a></button>
                    <button type="submit" class="course_buy_button"><a href="pay.php">BUY THIS COURSE</a></button>
                  <!--div class="sidebar_section_title"></div>
                  <div class="sidebar_teacher">
                    <div
                      class="teacher_title_container d-flex flex-row align-items-center justify-content-start"
                    >
                      <div class="teacher_image">
                        <img src="images/teacher.jpg" alt="" />
                      </div>
                      <div class="teacher_title">
                        <div class="teacher_name">
                          <a href="#">Jacke Masito</a>
                        </div>
                        <div class="teacher_position">
                          Marketing & Management
                        </div>
                      </div>
                    </div>
                    <div class="teacher_meta_container">
                      <!-- Teacher Rating -->
                      <!--div
                        class="teacher_meta d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="teacher_meta_title">Average Rating:</div>
                        <div class="teacher_meta_text ml-auto">
                          <span>4.7</span
                          ><i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                      </div>
                      <!-- Teacher Review -->
                      <!--div
                        class="teacher_meta d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="teacher_meta_title">Review:</div>
                        <div class="teacher_meta_text ml-auto">
                          <span>12k</span
                          ><i class="fa fa-comment" aria-hidden="true"></i>
                        </div>
                      </div>
                      <!-- Teacher Quizzes -->
                      <!--div
                        class="teacher_meta d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="teacher_meta_title">Quizzes:</div>
                        <div class="teacher_meta_text ml-auto">
                          <span>600</span
                          ><i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <div class="teacher_info">
                      <p>
                        Hi! I am Masion, I’m a marketing & management eros
                        pulvinar velit laoreet, sit amet egestas erat dignissim.
                        Sed quis rutrum tellus, sit amet viverra felis. Cras
                        sagittis sem sit amet urna feugiat rutrum nam nulla
                        ipsum.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Latest Course -->
                <div class="sidebar_section">
                  <div class="sidebar_section_title">Latest Courses</div>
                  <div class="sidebar_latest">
                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                       <div>
                                        <a href="coursep.php"><img src="images/py.png" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="coursep.php"
                            >Full stack python developer</a
                          >
                        </div>
                        <div class="latest_price">49999</div>
                      </div>
                    </div>

                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="coursephp.php"><img src="images/php1.png" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="coursephp.php"
                            >full stack PHP developer</a
                          >
                        </div>
                        <div class="latest_price">49999</div>
                      </div>
                    </div>

                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="coursecy.php"><img src="images/cyber1.png" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="coursecy.php">Cybersecurity</a>
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter -->

      <div class="newsletter">
        <div
          class="newsletter_background"
          style="background-image: url(images/newsletter_background.jpg)"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col">
              <div
                class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start"
              >
                <!-- Newsletter Content -->
                <div class="newsletter_content text-lg-left text-center">
                  <div class="newsletter_title">
                    sign up for news and offers
                  </div>
                  <div class="newsletter_subtitle">
                    Subcribe to lastest smartphones news & great deals we offer
                  </div>
                </div>

                <!-- Newsletter Form -->
                <div class="newsletter_form_container ml-lg-auto">
                  <form
                    action="#"
                    id="newsletter_form"
                    class="newsletter_form d-flex flex-row align-items-center justify-content-center"
                  >
                    <input
                      type="email"
                      class="newsletter_input"
                      placeholder="Your Email"
                      required="required"
                    />
                    <button type="submit" class="newsletter_button">
                      subscribe
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->

      <footer class="footer">
        <div
          class="footer_background"
          style="background-image: url(images/footer_background.png)"
        ></div>
        <div class="container">
          <div class="row footer_row">
            <div class="col">
              <div class="footer_content">
                <div class="row">
                  <div class="col-lg-3 footer_col">
                    <!-- Footer About -->
                    <div class="footer_section footer_about">
                      <div class="footer_logo1_container">
										<a href="#">
											<img class="logo1" src="images/edera%20logo1.png">
										</a>
									</div>
                      <div class="footer_about_text">
                        <p>
                          At the core of Edera's mission is a commitment to providing top-notch education. We aim to equip our students with the tools,strategies, and insights necessary to navigate the complex.
                        </p>
                      </div>
                      <div class="footer_social">
                        <ul>
                          <li>
                            <a href="#"
                              ><i class="fa fa-facebook" aria-hidden="true"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i
                                class="fa fa-google-plus"
                                aria-hidden="true"
                              ></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-instagram" aria-hidden="true"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="fa fa-twitter" aria-hidden="true"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col">
                    <!-- Footer Contact -->
                    <div class="footer_section footer_contact">
                      <div class="footer_title">Contact Us</div>
                      <div class="footer_contact_info">
                        <ul>
                          <li>Email:  hr@edera.in</li>
                          <li>Phone: +91 9096649556</li>
                         <li>Address: Ganga Trueno Business Park, Air Force Area, New Airport Rd, Sanjay Park, Pune, Maharashtra 411014</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col">
                    <!-- Footer links -->
                    <div class="footer_section footer_links">
                      <div class="footer_title">Contact Us</div>
                      <div class="footer_links_container">
                        <ul>
                          <li><a href="index.php">Home</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="contact.php">Contact</a></li>
                          <li><a href="#">Features</a></li>
                          <li><a href="courses.php">Courses</a></li>
                          <li><a href="#">Events</a></li>
                          <li><a href="#">Gallery</a></li>
                          <li><a href="#">FAQs</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 footer_col clearfix">
                    <!-- Footer links -->
                    <div class="footer_section footer_mobile">
                      <div class="footer_title">Mobile</div>
                      <div class="footer_mobile_content">
                        <div class="footer_image">
                          <a href="#"
                            ><img src="images/mobile_1.png" alt=""
                          /></a>
                        </div>
                        <div class="footer_image">
                          <a href="#"
                            ><img src="images/mobile_2.png" alt=""
                          /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row copyright_row">
            <div class="col">
              <div
                class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start"
              >
                <div class="cr_text">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved by EDERA
                  <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="ml-lg-auto cr_links">
                  <ul class="cr_list">
                    
								<li><a href="terms.php">Terms of Use</a></li>
								<li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="disclaimer.php">Disclaimer</a></li>
                                	<li><a href="refund.php">Refund/Cancellation</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/course.js"></script>
     <!--script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-a9915a02-03f0-4f84-8446-fd89e02a819a" data-elfsight-app-lazy></div>-->
                               
  </body>
</php>
