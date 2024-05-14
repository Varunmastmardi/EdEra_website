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
                        <div>+91 9096451662</div>
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
            <li class="menu_mm"><a href="about.php">About</a></li>
            <li class="menu_mm"><a href="courses.php">Courses</a></li>
            <li class="menu_mm"><a href="blog.php">Blog</a></li>
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
                <div class="course_title">Certified Information Systems Security Professional(CISSP) </div>
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
                  <img src="images/CISSP.png" alt="" />
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
                        Certified Information Systems Security Professional(CISSP)
                      </div>
                      <div class="tab_panel_content">
                        <div class="tab_panel_text">
                          <p>
                            The CISSP (Certified Information Systems Security Professional) course is a globally recognized certification program for information security professionals. It covers a broad range of topics including security and risk management, asset security, security architecture and engineering, communication and network security, identity and access management, security assessment and testing, security operations, and software development security. CISSP certification demonstrates expertise in designing, implementing, and managing cybersecurity programs. Successful completion of the CISSP exam validates one's ability to effectively protect organizations against cybersecurity threats.
                          </p>
                        </div>
                        <div class="tab_panel_section">
                          <div class="tab_panel_subtitle">Requirements</div>
                          <ul class="tab_panel_bullets">
                            <li>
                              Professional Experience: Candidates must have a minimum of five years of cumulative paid work experience in two or more of the eight domains of the CISSP Common Body of Knowledge (CBK).
                            </li>
                            <li>
                              Education: A four-year college degree or an approved alternative credential is required to pursue CISSP certification.

                            </li>
                            <li>
                              Endorsement: Candidates need to be endorsed by another CISSP certified professional in good standing before the certification can be awarded.

                            </li>
                            <li>
                              Passing the Exam: Successfully passing the CISSP exam, which consists of 100-150 multiple-choice questions, is a crucial requirement for certification.

                            </li>
                            <li>
                              Adherence to Code of Ethics: Candidates must agree to adhere to the (ISC)² Code of Ethics and provide their consent to the CISSP Candidate Agreement.

                            </li>
                          </ul>
                        </div>
                        <div class="tab_panel_section">
                          <div class="tab_panel_subtitle">
                            What is the target audience?
                          </div>
                          <div class="tab_panel_text">
                            <p>
                              
                              The CISSP certification is tailored for a wide range of professionals in the field of information security, including security consultants, IT managers, architects, auditors, and aspiring security leaders. It offers a comprehensive validation of expertise across various domains of cybersecurity, making it relevant across industries such as finance, healthcare, government, and technology. CISSP is also beneficial for individuals involved in risk management, compliance, and incident response roles. By earning CISSP certification, professionals demonstrate their commitment to upholding the highest standards of information security and furthering their career in the field.                            </p>
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
                                    Enrolling in a single CISSP course is not possible as CISSP certification requires passing an exam covering multiple domains. However, comprehensive training programs are available from authorized providers, covering all CISSP domains for exam preparation. Choosing a reputable provider ensures quality instruction and maximizes success in obtaining CISSP certification..
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
                                    If you're not interested in pursuing the entire CISSP certification, you might explore individual courses or workshops focused on specific aspects of cybersecurity. Look for targeted courses covering areas like network security, cryptography, risk management, or ethical hacking, depending on your interests and career goals. These shorter courses can provide valuable skills and knowledge without the commitment of the full CISSP certification process.
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
                                    Refund policies for CISSP courses can vary depending on the training provider or institution offering the course. It's essential to review the specific terms and conditions outlined by the provider you're considering. Generally, refund policies may include provisions for full or partial refunds within a specified timeframe before the course begins or under certain circumstances, such as cancellation or dissatisfaction with the course content. Be sure to read the refund policy carefully before enrolling to understand your options in case you need to request a refund.                                  </p>
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
                                    A strong background in information security, computer science, or related fields is essential for pursuing CISSP certification. Candidates should have a solid understanding of fundamental concepts like network security, cryptography, and access control. Professional experience in roles related to information security and familiarity with industry standards and best practices are also necessary.                                  </p>
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
                                    There's no strict order for CISSP courses, but following a structured study plan aligned with the eight domains of the CISSP CBK is recommended. Many training providers offer courses following this framework, allowing flexibility based on individual learning preferences. Ultimately, choose the order that best suits your needs and study style.


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
                          CISSP
                        </div>
                        <div class="tab_panel_content">
                          <div class="tab_panel_text">
                            <p>
                              CISSP (Certified Information Systems Security Professional) is a premier cybersecurity certification recognized globally. It validates expertise in designing, implementing, and managing security programs. Requirements include passing an exam, meeting professional experience criteria, and adhering to ethical standards.
                            </p>
                          </div>

                          <!-- Dropdowns -->
                          <ul class="dropdowns">
                            <li class="has_children">
                              <div class="dropdown_item">
                                <div class="dropdown_item_title">
                                  <span>Lecture 1:</span> Security and Risk Management
            
                                </div>
                                <div class="dropdown_item_text">
                                
                                </div>
                              </div>
                              <ul>
                                <li>
                                  <div class="dropdown_item">
                                    
                                    <div class="dropdown_item_text">
                                      <p>
                                        Understand, adhere to, and promote professional ethics<br>
                                        Understand and apply security concepts  <br>
                                        Evaluate and apply security governance principles<br>
                                        Understand legal, regulatory, and compliance issues that pertain to information security in a holistic context<br>
                                        Understand requirements for investigation types (i.e., administrative, criminal, civil, regulatory, industry standards)<br>
                                        Develop, document, and implement security policy, standards, procedures, and guidelines<br>
                                        Identify, analyze, assess, prioritize, and implement Business Continuity (BC) requirements<br>
                                        Contribute to and enforce personnel security policies and procedures<br>
                                        Understand and apply risk management concepts<br>
                                        Understand and apply threat modeling concepts and methodologies<br>
                                        Apply Supply Chain Risk Management (SCRM) concepts<br>
                                        Establish and maintain a security awareness, education, and training program<br>
                                  
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
                                  <span>Lecture 2:</span> Asset Security
            
                                </div>
                                <div class="dropdown_item_text">
                                
                                </div>
                              </div>
                              <ul>
                                <li>
                                  <div class="dropdown_item">
                                    
                                    <div class="dropdown_item_text">
                                      <p>
                                        Identify and classify information and assets<br>
                                        Establish information and asset handling requirements<br>
                                        Provision information and assets securely<br>
										                    Manage data lifecycle<br>
                                        Ensure appropriate asset retention (e.g., End of Life (EOL), End of Support)<br>
                                        Determine data security controls and compliance requirements<br>
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
									  <span>Lecture 3:</span>  Security Architecture and Engineering
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Research, implement and manage engineering processes using secure design principles<br>
                        Understand the fundamental concepts of security models (e.g., Biba, Star Model, Bell-LaPadula)<br>
                        Select controls based upon systems security requirements<br>
                        Understand security capabilities of Information Systems (IS) (e.g., memory protection, Trusted Platform Module (TPM), encryption/decryption)<br>
                        Assess and mitigate the vulnerabilities of security architectures, designs, and solution elements<br>
                        Select and determine cryptographic solutions<br>
                        Understand methods of cryptanalytic attacks<br>
                        Apply security principles to site and facility design<br>
                        Design site and facility security controls<br>
                        Manage the information system lifecycle<br>

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
									  <span>Lecture 4:</span>Communication and Network Security	
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Apply secure design principles in network architectures<br>
                        Secure network components<br>
                        Implement secure communication channels according to design<br>


											
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
									  <span>Lecture 5:</span> Identity and Access Management (IAM)
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Control physical and logical access to assets<br>
                        Design identification and authentication strategy (e.g., people, devices, and services)<br>
                        Federated identity with a third-party service<br>
                        Implement and manage authorization mechanisms<br>
                        Manage the identity and access provisioning lifecycle<br>
                        Implement authentication systems<br>

											
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
									  <span>Lecture 6:</span> Security Assessment and Testing
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Design and validate assessment, test, and audit strategies<br>
                        Conduct security control testing<br>
                        Collect security process data (e.g., technical and administrative)<br>
                        Analyze test output and generate report<br>
                        Conduct or facilitate security audits<br>

											
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
									  <span>Lecture 7:</span> Security Operations
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understand and comply with investigations<br>
                        Conduct logging and monitoring activities<br>
                        Perform Configuration Management (CM) (e.g., provisioning, baselining, automation)<br>
                        Apply foundational security operations concepts<br>
                        Apply resource protection<br>
                        Conduct incident management<br>
                        Operate and maintain detection and preventative measures<br>
                        Implement and support patch and vulnerability management<br>
                        Understand and participate in change management processes <br>
                        Implement recovery strategies<br>
                        Implement Disaster Recovery (DR) processes<br>
                        Test Disaster Recovery Plans (DRP)<br>
                        Participate in Business Continuity (BC) planning and exercises<br>
                        Implement and manage physical security<br>
                        Address personnel safety and security concerns<br>
											
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
									  <span>Lecture 8:</span> Software Development Security
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understand and integrate security in the Software Development Life Cycle (SDLC)<br>
                        Identify and apply security controls in software development ecosystems<br>
                        Assess the effectiveness of software security<br>
                        Assess security impact of acquired software<br>
                        Define and apply secure coding guidelines and standards<br>

											
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




<!-- 								
							<ul class="dropdowns">
								<li class="has_children">
								  <div class="dropdown_item">
									<div class="dropdown_item_title">
									  <span>Lecture 9:</span> Audit Process 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understanding the Audit Program <br>
                        Audit Program Objectives and Scope <br>
                        Audit Program Extent <br>
                        Audit Program Responsibilities <br>
                        Audit Program Resources <br>
                        Audit Program Procedures <br>
                        Audit Program Implementation <br>
                        Audit Program Records <br>
                        Audit Program Monitoring and Review <br>
                        Planning Individual Audits <br>
                        Establishing and Approving an Audit Charter <br>
                        Role of the Audit Committee <br>
                        Preplanning Specific Audits <br>
                        Understanding the Variety of Audits <br>
                        Identifying Restrictions on Scope <br>
                        Gathering Detailed Audit Requirements<br>

											
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
									  <span>Lecture 10:</span> Performing the Audit
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Selecting the Audit Team <br>
                        Determining Competence and Evaluating Auditors <br>
                        Ensuring Audit Quality Control <br>
                        Establishing Contact with the Auditee <br>
                        Making Initial Contact with the Auditee <br>
                        Using Data Collection Techniques <br>
                        Conducting Document Review <br>
                        Understanding the Hierarchy of Internal Controls <br>
                        Reviewing Existing Controls <br>
                        Preparing the Audit Plan <br>
                        Assigning Work to the Audit Team <br>
                        Preparing Working Documents <br>
                        Conducting Onsite Audit Activities<br>

											
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
									  <span>Lecture 11:</span> Gathering Audit Evidence
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Using Evidence to Prove a Point <br>
                        Understanding Types of Evidence <br>
                        Selecting Audit Samples <br>
                        Recognizing Typical Evidence for IS Audits <br>
                        Using Computer-Assisted Audit Tools <br>
                        Understanding Electronic Discovery <br>
                        Grading of Evidence <br>
                        Timing of Evidence<br>
                        Following the Evidence Life Cycle<br>

											
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
									  <span>Lecture 12:</span> Conducting Audit Evidence Testing 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Compliance Testing <br>
                        Substantive Testing <br>
                        Tolerable Error Rate <br>
                        Recording Test Results<br> 
                        Generating Audit Findings <br>
                        Detecting Irregularities and Illegal Acts <br>
                        Indicators of Illegal or Irregular Activity <br>
                        Responding to Irregular or Illegal Activity <br>
                        Findings Outside of Audit Scope<br>
                        Report Findings <br>
                        Approving and Distributing the Audit Report <br>
                        Identifying Omitted Procedures <br>
                        Conducting Follow-up (Closing Meeting)<br>
											
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
									  <span>Lecture 13:</span> Networking Technology Basics
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Introducing the Open Systems Interconnection Model <br>
                        Layer 1: Physical Layer <br>
                        Layer 2: Data-Link Layer <br>
                        Layer 3: Network Layer <br>
                        Layer 4: Transport Layer <br>
                        Layer 5: Session Layer <br>
                        Layer 6: Presentation Layer <br>
                        Layer 7: Application Layer <br>
                        Understanding How Computers Communicate<br>
											
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
									  <span>Lecture 14:</span> Understanding Network Cable Topologies
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understanding Network Cable Topologies <br>
                        Bus Topologies <br>
                        Star Topologies <br>
                        Ring Topologies<br>
                        Meshed Networks <br>
                        Differentiating Network Cable Types <br>
                        Coaxial Cable <br>
                        Unshielded Twisted-Pair (UTP) Cable <br>
                        Fiber-Optic Cable <br>
                        Connecting Network Devices <br>
                        Using Network Services <br>
                        Domain Name System <br>
                        Dynamic Host Configuration Protocol<br>

											
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
									  <span>Lecture 15:</span> Expanding the Network 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Using Telephone Circuits<br>
                        Network Firewalls <br>
                        Remote VPN Access <br>
                        Using Wireless Access Solutions <br>
                        Firewall Protection for Wireless Networks <br>
                        Remote Dial-Up Access <br>
                        WLAN Transmission Security <br>
                        Achieving 802.11i RSN Wireless Security <br>
                        Intrusion Detection Systems <br>
                        Summarizing the Various Area Networks<br>
											
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
									  <span>Lecture 16:</span> Information Systems Life Cycle 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Governance in Software Development <br>
                        Management of Software Quality <br>
                        Capability Maturity Model <br>
                        International Organization for Standardization <br>
                        Typical Commercial Records Classification Method <br>
                        Overview of the Executive Steering Committee <br>
                        Identifying Critical Success Factors <br>
                        Using the Scenario Approach <br>
                        Aligning Software to Business Needs <br>
                        Change Management <br>
                        Management of the Software Project <br>
                        Choosing an Approach <br>
                        Using Traditional Project Management<br>

											
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
									  <span>Lecture 17:</span> Overview of the System Development Life Cycle 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Overview of the System Development Life Cycle <br>
                        Phase 1: Feasibility Study <br>
                        Phase 2: Requirements Definition <br>
                        Phase 3: System Design <br>
                        Phase 4: Development <br>
                        Phase 5: Implementation <br>
                        Phase 6: Postimplementation<br> 
                        Phase 7: Disposal <br>
                        Overview of Data Architecture <br>
                        Databases 
                        Database Transaction Integrity <br>
                        Decision Support Systems <br>
                        Presenting Decision Support Data <br>
                        Using Artificial Intelligence <br>
                        Program Architecture <br>
                        Centralization vs. Decentralization <br>
                        Electronic Commerce<br>
											   
									
											
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
									  <span>Lecture 18:</span> System Implementation and Operations  
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understanding the Nature of IT Services <br>
                        Performing IT Operations Management <br>
                        Meeting IT Functional Objectives <br>
                        Using the IT Infrastructure Library <br>
                        Supporting IT Goals <br>
                        Understanding Personnel Roles and Responsibilities <br>
                        Using Metrics <br>
                        Evaluating the Help Desk <br>
                        Performing Service-Level Management <br>
                        Outsourcing IT Functions <br>
                        Performing Capacity Management <br>
                        Using Administrative Protection <br>
                        Information Security Management <br>
                        IT Security Governance <br>
                        Authority Roles over Data <br>
                        Data Retention Requirements <br>
                        Document Physical Access Paths<br>
                        
 

											
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
									  <span>Lecture 19:</span> Protecting Information Assets 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Understanding the Threat <br>
                        Recognizing Types of Threats and Computer Crimes <br>
                        Identifying the Perpetrators <br>
                        Understanding Attack Methods <br>
                        Implementing Administrative Protection <br>
                        Using Technical Protection <br>
                        Technical Control Classification <br>
                        Application Software Controls<br> 
                        Authentication Methods <br>
                        Network Access Protection<br>
                        Encryption Methods <br>
                        Public-Key Infrastructure<br> 
                        Network Security Protocols <br>
                        Telephone Security <br>
                        Technical Security Testing <br>

											
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
									  <span>Lecture 20:</span> Business Continuity and Disaster Recovery 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Debunking the Myths <br>
                        Myth 1: Facility Matters <br>
                        Myth 2: IT Systems Matter <br>
                        From Myth to Reality <br>
                        Understanding the Five Conflicting Disciplines<br>
                        Called Business Continuity <br>
                        Defining Disaster Recovery <br>
                        Surviving Financial Challenges <br>
                        Valuing Brand Names <br>
                        Rebuilding after a Disaster <br>
                        Defining the Purpose of Business Continuity <br>
                        Uniting Other Plans with Business Continuity <br>
                        Identifying Business Continuity Practices <br>
                        Identifying the Management Approach <br>
                        Following a Program Management Approach<br>

											
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
									  <span>Lecture 21:</span> Understanding the Five Phases of a Business 
                    Continuity Program 
				
									</div>
									<div class="dropdown_item_text">
									
									</div>
								  </div>
								  <ul>
									<li>
									  <div class="dropdown_item">
										
										<div class="dropdown_item_text">
										  <p>
                        Phase 1: Setting Up the BC Program <br>
                        Phase 2: The Discovery Process <br>
                        Phase 4: Plan Implementation <br>
                        Phase 5: Maintenance and Integration<br>

											
										  </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li> -->



								
							<!-- <ul class="dropdowns">
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
											Overview Data types <br> -->

											
											
										  <!-- </p>
										</div>
									  </div>
									</li>
									<li>
									  <div class="dropdown_item">
										
									  </div>
									</li>
								  </ul>
								</li> -->




								
							<!-- <ul class="dropdowns">
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
                          


 -->








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
                    <div class="course_price">74499</div>

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
                        <div class="feature_text ml-auto">21 </div>
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
                        <div class="feature_text ml-auto">21</div>
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
                        <div class="feature_text ml-auto">21</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Feature -->
                 <div class="sidebar_section">
                      <button type="submit" class="course_buy_button"><a href="">Download Broucher</a></button>
                     <button type="submit" class="course_buy_button"><a href="pay.php">BUY THIS COURSE</a></button>
                  <!--div class="sidebar_section_title">Teacher</div>
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
                      Teacher Rating
                      <div
                        class="teacher_meta d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="teacher_meta_title">Average Rating:</div>
                        <div class="teacher_meta_text ml-auto">
                          <span>4.7</span
                          ><i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                      </div>
                      Teacher Review
                      <div
                        class="teacher_meta d-flex flex-row align-items-center justify-content-start"
                      >
                        <div class="teacher_meta_title">Review:</div>
                        <div class="teacher_meta_text ml-auto">
                          <span>12k</span
                          ><i class="fa fa-comment" aria-hidden="true"></i>
                        </div>
                      </div>
                      Teacher Quizzes
                      <div
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
                </div> -->

                <!-- Latest Course -->
                <div class="sidebar_section">
                  <div class="sidebar_section_title">Sub Courses</div>
                  <div class="sidebar_latest">
                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                       <div>
                                        <a href="CISA.php"><img src="images/CISA.jpg" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CISA.php"
                            >CISA</a
                          >
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>

                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="CISSP.php"><img src="images/CISSP.png" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CISSP.php"
                            >CISSP</a
                          >
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>

                    <div
                    class="latest d-flex flex-row align-items-start justify-content-start"
                  >
                    <div class="latest_image">
                      <div>
                                        <a href="CRISC.php"><img src="images/CRISC.png" alt=""></a></div>
                    </div>
                    <div class="latest_content">
                      <div class="latest_title">
                        <a href="CRISC.php"
                          >CRISC</a
                        >
                      </div>
                      <div class="latest_price">74499</div>
                    </div>
                  </div>




                  <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="CCSP.php"><img src="images/CCSP.jpeg" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CCSP.php"
                            >CCSP</a
                          >
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>







                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="CSAM.php"><img src="images/CSAM.png" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CSAM.php"
                            >CSAM</a
                          >
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>









                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="CCNA.php"><img src="images/CCNA.jpg" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CCNA.php"
                            >CCNA</a
                          >
                        </div>
                        <div class="latest_price">74499</div>
                      </div>
                    </div>







                    <!-- Latest Course -->
                    <div
                      class="latest d-flex flex-row align-items-start justify-content-start"
                    >
                      <div class="latest_image">
                        <div>
                                        <a href="CEH.php"><img src="images/CEH.jpg" alt=""></a></div>
                      </div>
                      <div class="latest_content">
                        <div class="latest_title">
                          <a href="CEH.php">CEH</a>
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
                          <li>Email: hr@edera.in</li>
                          <li>Phone: +91 9096451662</li>
                          <li>
                           Address: Ganga Trueno Business Park, Air Force Area, New Airport Rd, Sanjay Park, Pune, Maharashtra 411014
                          </li>
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
                    <li><a href="disclaimer.php"></a>Disclaimer</li>
                    <li><a href="refund.php"></a>Refund/Cancellation</li>
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
