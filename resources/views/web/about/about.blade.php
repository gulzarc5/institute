	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div class="breadcrumb-area">
			    <div class="breadcrumb-top default-overlay bg-img pt-30 pb-30">
			        <div class="container">
			            <h2>About Us</h2>
			        </div>
			    </div>
			    <div class="breadcrumb-bottom">
			        <div class="container">
			            <ul>
			                <li><a href="{{route('web.index')}}">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
			            </ul>
			        </div>
			    </div>
			</div>		    
			<div class="about-us pt-50 pb-50">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12 col-md-12">
			                <div class="about-content mb-30">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>About <span>Us</span></h2>
			                        <p>Thank you for visiting <strong>RISING GLOBE TECHNOLOGY & MANAGENENT, RGTM, Academy for IT & Management</strong></p>                      
			                    </div>
			                    <p> RGTM was setup on 02.08.2017 with goal to serve Information Technology. It was started up as a partnership venture and Regd. as Educational Societies under Govt. of Assam Act I.P of 1932 & Act XXI OF 1860, bearing Registration No-RF/HAI/183/A/37 of 2017-2018. It is also ISO 9001:2015 Certified Institution under Govt. of India.<br>
								It believes in the foundation of technology that computer science has brought new opportunities and challenges to traditional study style, and has changed the foundational concepts in education.</p><br>

								<p><strong>RISING GLOBE TECHNOLOGY & MANAGENENT, RGTM, Academy for IT & Management</strong>, is started for computer Software, Hardware, Management and Vocational Programs.  And Courses at RGTM are specially designed to help the semi urban or rural youth strengthen their skill sets & employability value in the job market as soon as they finish schooling. We have providing <strong>Certificate & Diploma in Computer Software, Hardware & Networking, Fashion Designing, Beautician, Cutting & Tailoring, NTT, NPTT and English Speaking</strong>. And the team of experts who teaches student in modern technique and providing live training projects to students for better understanding. We also have top-level labs which are spacious and well equipped with latest technology.</p>
			                </div>
			            </div>
			            <div class="col-lg-12 col-md-12">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Director <span>Message</span></h2>
			                        <p><strong>“A good education is the first step to building a stable career”</strong></p>                       
			                    </div>
			                    <p> It is my privilege to welcome you to <strong>RGTM, Academy for IT & Management</strong> and invite you to explore the multidimensional facets of this Technical Institute using the official website. The Institute has marked its presence as a leading teaching Institute. The Institute challenging and inspiring environment designed to mould students into leaders of tomorrow. The Institute is headed by a competent well experienced dedicated and devoted faculty.</p><br>

			                    <p> The key to our success depends on the dedication of each individual. We need to work hard to maintain excellence in teaching in order to compete with other Technological Institutes. The Institute is committed to equity and promoting talent without any prejudice.</p><br>

								<p> Therefore, I believe in building strong future for our students. I am confident that pursuing our higher education through <strong>RGTM, Academy for IT & Management</strong> would be one of the most exciting and rewarding.</p>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="event-area bg-img default-overlay pt-50 pb-50" style="background-image:url({{asset('web/img/bg/bg-3.jpg')}});">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-6 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Skill <span>Development</span></h2>                     
			                    </div>
			                    <p> The Skill development is to raise confidence, improve productivity and give direction through proper skills. It initiative aims to connect with the youth by upgrading their skills as per their competencies</p>
			                </div>
			            </div>
			            <div class="col-lg-6 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Our <span>Facility</span></h2>                      
			                    </div>
			                    <p> The faculty of<strong>RGTM, Academy for IT & Management</strong> is carefully selected team who are not only well qualified but highly dedicated to their profession. They walk the extra mile through personal mentoring. We have a team of excellent faculty with impeccable credentials and excellent qualification.</p>
			                </div>
			            </div>			            
			            <div class="col-lg-12 col-md-12">
			                <div class="about-content mb-30">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Our <span>Aim</span></h2>                    
			                    </div>
			                    <p> The main aim of our institution is to look into the overall growth of a students apart from computer education. What they learn in their home, school & colleges is not enough to survive in this globalized world. Hence the institute prepares students in all aspects to face the challenges in both professional as well as personal life. Regarding the same RGTM also conducts personality Development programs for students. PDP include – Communication skills, Eye contact, Body language, Discipline, Time management and Coping with stress etc. The Institute aims at expanding its wings in various levels of IT & Education globally through various projects, associating with Govt. projects, Quasi Govt. agencies, Public & Private Companies E- programs etc. RGTM focuses on Computer Education. The aim of the institution is to become a world No-1 Education Centre in IT by providing quality Education.</p>

			                    <p> The Institution derives its strength from its well researched curriculum, patented delivery methodology & its ability to keep pace with changing Technology</p>
			                </div>
			            </div>			            
			            <div class="col-lg-6 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Our <span>Mission</span></h2>                     
			                    </div>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To build teaching environment that responds to future challenges.</p>
								<p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To provide quality education in both theoretical & practical.</p>
								<p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To be Education Centric.</p>
								<p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To be technology driven.</p>
								<p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To be innovative, adaptive.</p>
								<p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To attain excellent.</p>
			                </div>
			            </div>
			            <div class="col-lg-6 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Our <span>Vision</span></h2>                      
			                    </div>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;To provide quality education to every corner of our country to contribute to the Computer world by focusing on education and research.</p>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Staying one step ahead in providing the latest Information in Technology Education.</p>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Sustain quality in academic delivery.</p>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Make the institution student friendly.</p>
			                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Deliver service to the society.</p>
			                </div>
			            </div>	
			        </div>
			    </div>
			</div>	

			<div class="about-us pt-50 pb-50">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-5 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Computer <span>Education</span></h2>
			                        <p>Computer Education has become an integral part of the twenty-first century. It has gained a lot of importance in today’s life. Today, Computers are used in almost every field. Therefore, It has become necessary to learn about Computers.</p>                      
			                    </div>
			                    <p> Some importance of Computer Education are-</p>
								<p>•&nbsp;&nbsp;It improves research Skills.</p>
								<p>•&nbsp;&nbsp;It helps in getting good Jobs.</p>
								<p>•&nbsp;&nbsp;It helps in enhancing Technology.</p>
								<p>•&nbsp;&nbsp;It increases the efficiency of a Person.</p>
								<p>•&nbsp;&nbsp;It helps in creating a better education environment.</p>
								<p>•&nbsp;&nbsp;It makes communication easy.</p>
			                </div>
			            </div>
			            <div class="col-lg-7 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>Our <span>Objectives</span></h2>
			                        <p>The Computer studies are designed for students to understand and operate the Computer and have special emphasis on sound design principles and programming development.</p>                       
			                    </div>
			                    <p> The objectives of the courses are-</p>

								<p>•&nbsp;&nbsp;To provide opportunity for the study of modern methods of information processing and its applications.</p>
								<p>•&nbsp;&nbsp;To acquaint students with knowledge of the computer systems with emphasis on their uses and limitation.</p>
								<p>•&nbsp;&nbsp;To develop among students the programming techniques and the problem solving skills through programming.</p>
								<p>•&nbsp;&nbsp;To foster among students an interest and confidence in using computers.</p>
								<p>•&nbsp;&nbsp;To encourage an understanding of the implications of computers in the modern world.</p>
								<p>•&nbsp;&nbsp;To prepare students who wish to go on to further studies in computer technology and other related subjects.</p>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
    	@endsection   

      