<?php 
$page = 'people';
include("header.php");
?>

<style>


.fixedElement {
			margin-left:-215px; 
			margin-top:-325px; 
			position:fixed; 
			/*background-color:rgba(0, 102, 102, 0.6); */
			background-color:#FFFFFF;
			color:#000; 
			padding:15px; 
			border-radius:5px;
			box-shadow: 3px 2px 10px #888888;
			}
.past-members,
.people-line {
			clear: both;
			float: none;
			width: auto;
			max-width: 100%;
			margin: 0;
			box-sizing: border-box;
			}
.past-members {
			margin-top: 36px;
			}
.past-members > [class*="col-"],
.past-members > .row,
.people-line {
			clear: both;
			float: none !important;
			display: block;
			width: auto !important;
			max-width: 100%;
			margin-left: 0 !important;
			margin-right: 0 !important;
			padding-left: 0 !important;
			padding-right: 0 !important;
			box-sizing: border-box !important;
			}
#content > .container .container {
			width: auto !important;
			max-width: 100% !important;
			margin-left: 0 !important;
			margin-right: 0 !important;
			padding-left: 0 !important;
			padding-right: 0 !important;
			}
#content > .container .container:has(> .col-lg-3) {
			padding-left: 15px !important;
			padding-right: 15px !important;
			}
#content > .container .container > .row {
			width: auto !important;
			max-width: 100%;
			margin-left: 15px !important;
			margin-right: 15px !important;
			}
#content > .container .row .container > .row {
			margin-left: 0 !important;
			margin-right: 0 !important;
			}
#content .people-line,
#content .past-members {
			margin-left: 15px !important;
			margin-right: 15px !important;
			width: auto !important;
			max-width: calc(100% - 30px) !important;
			}
#content .past-members > .row {
			margin-left: 0 !important;
			margin-right: 0 !important;
			width: auto !important;
			max-width: 100% !important;
			}
@media (min-width: 768px) {
#content > .container .container > .row > .col-lg-3,
#content > .container .container > .col-lg-3 {
			width: 25%;
			float: left;
			}
#content > .container .container > .row > .col-lg-9,
#content > .container .container > .col-lg-9 {
			width: 75%;
			float: left;
			}
}
#content > .container .container .col-lg-3 img {
			width: 100%;
			height: auto;
			display: block;
			}
.past-members > [class*="col-"] > p,
.past-members > [class*="col-"] > h2,
.people-line > p {
			display: block;
			width: auto;
			max-width: 100%;
			box-sizing: border-box;
			margin: 0 0 10px 0;
			padding: 10px 15px !important;
			}
.past-members > .row > [class*="col-"],
.people-line.row > [class*="col-"] {
			float: none;
			width: auto;
			padding-left: 15px;
			padding-right: 15px;
			box-sizing: border-box;
			}
</style>
	
	<!--<section id="inner-headline" style="background-image: url(img/bg-breadcrum-flexe.jpg);"  onclick="window.location.href='http://ncflexe.in/'">-->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="about.php">People</a><i class="icon-angle-right"></i></li>
					<!--<li class="active">Components</li>-->
				</ul>
				
				
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row demobtn">
			<div class="col-lg-12">
				<div class="row">
				
					<div class="col-lg-12">
					<h2 align="center" style="color:royalblue;  letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;"><strong>People</strong><br clear="all"><span style="font-size:16px;"> </span></h2></div>
				</div>
					<br>
					
					<h5 class="fixedElement">
					<!--<a href="#dst" style="text-decoration:none;">DST Inspire Faculty</a><hr>-->
					<!--<a href="#ipdf" style="text-decoration:none;">Institute Post Doctoral</a><hr>-->
					<a href="#Ph.D Students" style="text-decoration:none;">Ph.D Students</a><hr>
					<a href="#M.Tech. Students" style="text-decoration:none;">M.Tech. Students</a><hr>
					<a href="#Fare Fellows" style="text-decoration:none;">Fare Fellows</a><hr>
					<a href="#Past Members" style="text-decoration:none;">Past Members</a>
					</h5>
						
			

<!--<div class="col-lg-12" id="ipdf">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> FARE Fellows </strong></p>
</div>

<div class="container">

<!--<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/Post doc image/satishkv.jpg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Dr. Satish Kumar Verma </strong></h4>

<strong>Ph.D.</strong> : (Physics) from Banaras Hindu University (2022)<br>
<strong>Email</strong> : <a href="mailto:satish16kumar@gmail.com">satish16kumar@gmail.com</a>, <a href="mailto:satishkv@iitk.ac.in">satishkv@iitk.ac.in</a><br>
<strong>Research Area</strong> : H2 storage & generation<br>
<ul>
<li>Hydrogen storage and Refrigeration</li>
<li>Metal Hydrides, Complex Hydrides </li>
<li>Metal Organic Frameworks & Porous carbons</li>
</ul>


</div>
</div>

</div>-->

<div class="col-lg-12" id="FARE Fellows">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> FARE Fellow/ Post Doctoral Fellow</strong></p>
</div>
</div>
</div>

<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img\team\PhD image\Raghav Photo.jpg.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Raghav Mundra</strong><a href="https://www.linkedin.com/in/raghav-mundra17/" target="_blank">
 Linkedin</a></h4>
<strong>PhD</strong> :   Material Science and Engineering, Indian Institute of Technology Kanpur (2026)<br>
<strong>Email</strong> : <a href="mailto:rmundra20@iitk.ac.in">rmundra20@iitk.ac.in</a><br>
<strong>Research area</strong> : Flash sintering and metal ceramic joining<br>
<ul>
<li>Interface study</li>
<li>Composite material processing</li>
<li>Electrical and mechanical property analysis</li>
</ul>
</div>
</div>





<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/saurabh-sharma.png" width="100%"></div>
<div class="col-lg-9"><h4><strong>Saurabh Sharma </strong><a href="https://www.linkedin.com/in/saurabh-sharma-264a501a4/" target="_blank">
 Linkedin</a></h4>
<strong>PhD</strong> :   Material Science and Engineering, Indian Institute of Technology Kanpur (2026)<br>
<strong>Email</strong> :   <a href="mailto:saurabhs21@iitk.ac.in">saurabhs21@iitk.ac.in</a><br>
<strong>Research area</strong> : All-Solid-state Na-ion batteries<br>
<ul>
<li>Preparation and characterization of electrolyte and electrode materials.</li>
<li>Exploring Na -ion batteries using NASICON framework.</li>
<li>Coin cells fabrication and performance testing by electrochemical methods.</li>
</ul>
</div>
</div>


<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img\team\Post doc image\Tushar.jpeg" width="80%"></div>
<div class="col-lg-9">
<h4><strong>Dr. Tushar Balasaheb Deshmukh</strong><a href="https://www.linkedin.com/in/dr-tushar-deshmukh-9843a0111?utm_source=share_via&utm_content=profile&utm_medium=member_android/" target="_blank">
 Linkedin</a></h4
>
<strong>PhD</strong> : Visvesvaraya Natioanl Institute of Technology(VNIT),Nagpur<br>
  <strong>Email</strong> :   <a href="mailto:tusharbd@iitk.ac.in">tusharbd@iitk.ac.in</a><br>
  <strong>Research area</strong> : 
<ul>
  <li>Bi- Metal Phosphate composite for energy storage. </li>
<li>Na- ion Batteries, Super capacitors.</li>
<li>Thin Film Deposition and Solar cells .</li>
</ul>
</div>
</div>
</div>
</div>

<!--<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/sunil.jpeg" width="100%"></div>
<div class="col-lg-9">
<h4><strong>Dr. Sunil Kumar</strong></h4>
<strong>B.Tech</strong> : Material Science and Metallurgical Engineering from UIET, Kanpur (2016).<br>
<strong>PhD</strong> : Material Science and Metallurgical Engineering from IIT, Kanpur (2025).<br>
<strong> Email</strong> : <a href="mailto:krsunil@iitk.ac.in">krsunil@iitk.ac.in</a><br>
<strong>Research Area</strong> : Developing Solid Oxide Fuel Cell (SOFC)
<ul>
<li>Designing symmetrical electrodes for SOFC.</li>
<li>Fabrication and testing of symmetrical cells and single cells.</li>
<li>Exploring solid electrolytes for SOFC.</li>
</ul>
</div>
</div>
</div>-->



			 			 
<!--<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/amit.jpg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Amit Das</strong></h4>

<strong>Ph.D.</strong> : Materials Science and Engineering, Indian Institute of Technology, Kanpur, Uttar Pradesh, India.<br>
<strong>M.Tech</strong> : Materials Science and Engineering, Indian Institute of Technology Kanpur, Uttar Pradesh, India (2015).<br>
<strong>Email</strong> : <a href="mailto:dasamit@iitk.ac.in">dasamit@iitk.ac.in</a><br>
<strong>Research Area</strong> : Hot corrosion behaviour of stabilized zirconia based thermal barrier coatings.

</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/RAGHUNAYAKULA.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Raghunayakula Thirupathi</strong></h4>
<strong>B.Tech</strong> : Metallurgy and Materials Science Engineering from RGUKT, BASAR, TELANGANA (2016).<br>
<strong>Email </strong>: <a href="mailto:rthiru@iitk.ac.in">rthiru@iitk.ac.in</a><br>
<strong>Research area</strong> : All-Solid-state Na-ion batteries<br>
<ul>
<li>NASICON framework for electrolyte and electrode material optimization.</li>
<li>Coin cells and Swagelok cells fabrication and characterization.</li>
<li>Synthesis methods like sol-gel, hydro-thermal, solid-state reaction, etc.</li>
</ul>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/sunil.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Sunil Kumar</strong></h4>
<strong>B.Tech</strong> : Material Science and Metallurgical Engineering from UIET, Kanpur (2016).<br>
<strong> Email</strong> : <a href="mailto:krsunil@iitk.ac.in">krsunil@iitk.ac.in</a><br>
 <strong>Research Area</strong> : Developing Solid Oxide Fuel Cell (SOFC)
 <ul>
 <li>Designing symmetrical electrodes for SOFC.</li>
 <li>Fabrication and testing of symmetrical cells and single cells.</li>
 <li>Exploring solid electrolytes for SOFC.</li>
</ul>
</div>
</div>-->
<!--<div class="col-lg-12" id="phd">
<p style="color:white; background:#0099FF; padding:10px;"><strong> Ph.D Students</strong></p>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="container">-->

<!--<div class="col-lg-2" id="PhD Students">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> PhD Students </strong></p>
</div>
<div class="container">-->




<!--<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/saurabh.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Saurabh Kumar Jha</strong></h4>
<strong>B.Tech </strong>:  Mechanical engineering from Darbhanga engineering college(2011-2015)<br>
<strong>PG diploma </strong>: power plant engineering (Jindal steel power limited)(2016-2017)<br>
<strong>M.Tech</strong> : Surface science and engineering from  National Institute of Technology Jamshedpur(2018-2020)<br>
<strong>Email</strong> : <a href="mailto:saurabhj20@iitk.ac.in">saurabhj20@iitk.ac.in</a><br>
<strong>Research Area</strong> : Solid Oxide Fuel Cell, Solid-state electrolyte, Symmetrical electrode for solid oxide    fuel cell (SOFC)
</div>
</div>-->


<!--<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/vandana.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Vandana Kumari</strong></h4>
<strong>B.Tech - M.Tech Dual Degree</strong> : Ceramic Engineering, Indian Institute of Technology, BHU, Varanasi (2020)<br>
<strong>Email</strong> : <a href="mailto:vandana20@iitk.ac.in">vandana20@iitk.ac.in</a><br>
<strong>Research area </strong>: NASICON framework structure electrolyte and electrode material for Na-ion Battery || All-solid-state Na-ion Battery system.
</div>
</div>-->
<br>
<div class="col-lg-12" id="Ph.D Students">	
<p style="color:white; background:#0099FF; padding:10px;"><strong>Ph.D Students</strong></p>
</div>

<div class="container">
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">	
<div class="col-lg-3"><img src="img/team/PhD image/ramakrishnan.jpg" width="100%"></div>
<div class="col-lg-9"><h4><strong>S. Ramakrishnan </strong> (Ph.D. External)</h4>
<strong>Current Status</strong>: ARCI, Chennai<br>
<strong>M.S</strong>: Department of Metallurgical & Materials Engineering, Indian Institute of Technology Madras<br>
<strong> Email</strong>: <a href="mailto:ramki@iitk.ac.in">ramki@iitk.ac.in</a><br>
 <strong>Research Area</strong>: PEM Fuel Cells 
 <ul>
 <li>Design, Development of Metallic Bipolar Plates.</li>
 <li>Synthesis & Characterization of Durable coatings on metallic flow field plates.</li>
 <li>Assembly and testing of PEM Fuel Cell stacks with various electrode configurations.</li>
 <li>Testing of PEMFC stacks at sub-zero temperatures.</li>
 </ul>
</div>
</div>
</div>


<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/darshil2.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Darshil Chhatrodiya </strong> (PMRF)<a href="https://www.linkedin.com/in/Darshil-Chhatrodiya-2260b3199/" target="_blank">
 Linkedin</a></h4>
<!--<strong>BSc</strong> : Industrial Chemistry(Ramakrishna Mission Vidyamandira 2015-18)<br>-->
<strong>Co-Supervisor:</strong> Dr. Santunu De (Mechanical Engg, IIT Kanpur)<br>
<strong>B.Tech.</strong> : Mechanical Engineering, SVNIT Surat (2021)<br>
<strong>Email</strong> : <a href="mailto:darshil21@iitk.ac.in">darshil21@iitk.ac.in</a><br>
<strong>Research Area</strong> : High Purity H<sub>2</sub> production by MIEC membrane
<ul>
<li>Preparation and optimization of MIEC.</li>
<li>Design and Multi-physics modeling.</li>
<li>Fabrication and testing of MIEC membrane.</li>
</ul>
</div>
</div>



<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/MTech Image/sandipan.jpeg" width="100%"></div>
<div class="col-lg-9">
  <h4><strong>Sandipan Bhattacharyya</strong><!-- LinkedIn Button -->
  <a href="https://www.linkedin.com/in/sandipan-bhattacharyya-73b46b13a/" target="_blank">
 Linkedin</a></h4
  
 
    ><!--<strong>BSc</strong> : Industrial Chemistry(Ramakrishna Mission Vidyamandira 2015-18)<br>-->
    <strong>MSc</strong> : Applied Chemistry, Ramakrishna Mission Vidyamandira (2020)<br>
    <strong>Email</strong> : <a href="mailto:sandipan20@iitk.ac.in">sandipan20@iitk.ac.in</a><br>
    <strong>Research Area</strong> : Cold Sintering Process </h4>
    <ul>
    <li>Densification of NZSP for Na-ion batteries.</li>
<li>Electrode-electrolyte interface study for solid-state Na-ion batteries.</li>
<li>Field assisted sintering techniques.</li>
</ul>
</div>
</div>
</div>




<div class="container">
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/halder.jpeg" width="100%"></div>
<div class="col-lg-9"><h4><strong> Anupam Halder</strong>
 <br></h4>
  <strong>Co-supervisor</strong> : Shikhar Krishn Jha (Rochester Institute of Technology, USA)<br>
 <strong>MSc</strong> : Materials Science, Sardar Patel University,  Gujarat (2020)<br>
 <strong>Email</strong> : <a href="mailto:anupam20@iitk.ac.in">anupam20@iitk.ac.in</a><br>
 <strong>Research Area</strong> : Supercapacitors and green hydrogen generation
  <ul>
<li>Structure - electrochemical property correlation in MOFs <br>
  Synthesis and characterization of 2D materials and sulfides<br>
  Operando studies for electrocatalytic reaction mechanisms</li>
</ul>
</div>
</div>


<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/Bhumika.jpg" width="100%"></div>
<div class="col-lg-9"><h4><strong> Bhumika Patankar</strong><a href="https://www.linkedin.com/in/Bhumika-patankar/" target="_blank">
 Linkedin</a>
 <br></h4>
 <strong>MSc</strong> : Materials Science, Sardar Patel University,  Gujarat (2023)<br>
 <strong>Email</strong> : <a href="mailto:bhumika24@iitk.ac.in">bhumika24@iitk.ac.in</a><br>
 <strong>Research Area</strong> : Na-ion battery cathode material
  <ul>
<li> Design, synthesis and characterization of high energy density layered oxide cathode materials.</li>
<li>Evaluating the electrochemical performance of full cell Na-ion battery.</li>
<li>Fabrication of solid electrolyte for All Solid- State Na-ion battery.</li>
  </ul>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/raj nandhini.jpeg" width="100%"></div>
<div class="col-lg-9">
  <h4><strong> Raj Nandani</strong><a href="https://www.linkedin.com/in/raj-nandani-b7a24727b" target="_blank">
 Linkedin </a>    </h4>
 <strong>B.Tech.</strong> : Metallurgical and Materials Enginnering, NIT Jaipur (2024)<br>
    <strong>Email</strong> : <a href="mailto:rajnandani25@iitk.ac.in">rajnandani25@iitk.ac.in</a> <br>
    <strong>Research Area</strong> : Solid Oxide Fuel cells &amp; Hydrogen Production.
  <ul>
<li> Development and optimization of advanced solid oxide fuel cell materials.</li>
  </ul>
</div>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/WhatsApp Image 2025-08-07 at 23.54.16_7ec29712.jpg" width="100%"> </div>
<div class="col-lg-9"><h4><strong>Suraj Kalia  </strong> <a href="https://www.linkedin.com/in/suraj-kalia-a055b289/" target="_blank">
 Linkedin </a></h4>
<!--<strong>BSc</strong> : Industrial Chemistry(Ramakrishna Mission Vidyamandira 2015-18)<br>-->
<strong>Co-Supervisor:</strong> Dr. RT Durai Prabhakaran (Mechanical Engg, IIT Jammu)<br>
<strong>M.Tech.</strong> : Computer Aided Design (Mechanical), Harcourt Butler Technical University, Kanpur (2016)<br>
<strong>Email</strong> : <a href="mailto:2021rme2025@iitjammu.ac.in">2021rme2025@iitjammu.ac.in</a><br>
<strong>Research Area</strong> : Structural Battery
<ul>
<li> Preparation and characterization of solid polymeric electrolyte.</li>
<li>Evaluating the electrochemical and mechanical performance of carbon fiber-based pouch cell.</li>
</ul>

</div>



</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/Melita.JPG" width="100%"></div>
<div class="col-lg-9">
  <h4><strong>Melita Saha</strong><a href="https://www.linkedin.com/in/melita-saha-01o10t12003b/" target="_blank">
 Linkedin</a></h4>
  <strong>B.Tech.</strong> : Metallurgical and Materials Engineering, National Institute of Technology, Durgapur (2026)<br>
  <strong>Email</strong> : <a href="mailto:melitasaha26@iitk.ac.in">melitasaha26@iitk.ac.in</a><br>
  <ul>
	<li> Solid State Na-ion batteries.</li>
	<li>High Energy density cathode designing</li>
	<li>Solid electrolyte interface study</li>
	<li>Numerical Modelling</li>
</ul>
</div>
</div>
</div>

<div class="col-lg-12" id="M.Tech. Students">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> M.Tech. Students </strong></p>
 </div>			 
<div class="container">
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">

<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/MTech Image/pritam2.jpeg", width="100%" ></div>
<div class="col-lg-9">
  <p><strong>Pritam Ghosh</strong><a href="https://www.linkedin.com/in/pritam-ghosh-11a268373/" target="_blank">
 Linkedin</a></p>
  <p><strong>MSc.</strong> :  Applied Chemisty, RamaKrishna Mission Vidyamandira (2025)<br>
    <strong>Email</strong> : <a href="mailto:pritamg25@iitk.ac.in">pritamg25@iitk.ac.in</a><br>
    <strong>Research Area</strong> : 
  Solid-state Na-ion batteries</p>
<ul>
<li>Synthesis and characterizaton of batteries.</li>
<li>Fabrication and electrochemical testing of Na-ion coin cells. </li>
</ul>
</div>
</div>
</div>
<div class="container">
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/MTech Image/palash.jpeg", width="100%" ></div>
<div class="col-lg-9">
  <p><strong>Palash Jana</strong><a href="https://www.linkedin.com/in/palash-jana-3180bb259?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
 Linkedin</a></p>
  <p><strong>MSc.</strong> :  Applied Chemisty, RamaKrishna Mission Vidyamandira (2025)<br>
    <strong>Email</strong> : <a href="mailto:palashjana25@iitk.ac.in">palashjana25@iitk.ac.in</a><br>
    <strong>Research Area</strong> : Developing Solid state Na metal batteries</p>
<ul>
<li>Interface designing of NASICON type solid electrolyte</li>
<li>Improvement of Na metal solid electrolyte interface using an interlayer</li>
</ul>
</div>
</div>
</div>

<div class="container">
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/MTech Image/Ankan Dhara.jpeg" width="100%"></div>
<div class="col-lg-9">
  <p><strong>Ankan Dhara</strong><a href="https://www.linkedin.com/in/ankan-dhara-692586255?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank">
 Linkedin</a></p>
  <p><strong>MSc</strong> : Applied Chemistry, Ramakrishna Mission Vidyamandira, Belur Math, Howrah (2026)<br>
    <strong>Email</strong> : <a href="mailto:ankand26@iitk.ac.in">ankand26@iitk.ac.in</a></p>
	<strong>Research Area</strong> : Modern energy storage devices</p>
<ul>
<li> </li>
<li> </li>
</ul>
</div>
</div>
</div>

<!---<div class="col-lg-12" id="Junior Research Fellow">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> Junior Research Fellow </strong></p>
 </div>			 
<div class="container">
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/PhD image/MANISH 2.jpg" width="100%"></div>
<div class="col-lg-9">

   <p><strong>Manish</strong><a href="https://www.linkedin.com/in/manish-kumar-772b3a233/" target="_blank">
 Linkedin</a></p>
   <p><strong>MSc.: </strong> Physics, Delhi Technological University (D.T.U) <br>
     <strong>Email</strong> : <a href="mailto:manishnarnoliya357797@gmail.com">manishnarnoliya357797@gmail.com</a><br>
     <strong>Research Area</strong> :  Metal Sulfur Batteries 
   </p>
   <ul>
    <li> Fabrication and characterization of  metal sulfur based batteries.</li>
<li>Coin cells and pouch cells fabrication.</li>
</ul>
</div>
</div>
 </div>	 --->
<br>
 
</div>
<div class="col-lg-12 people-line" id="Junior">	
<p style="color:white; background:#0099FF; padding:10px;"><strong> Lab Staffs</strong></p>
</div>	 
<div class="row people-line" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px;">
<div class="col-lg-12"><strong>Bharat Raj Singh </strong> (Lab Incharge)<br>
      <strong>Email</strong> : <a href="mailto:brsingh@iitk.ac.in">brsingh@iitk.ac.in</a><br>
  	  
</div>
</div>
<div class="row people-line" style="margin-top:-25px; background-color:aliceblue; padding-top:30px;">
<div class="col-lg-12"><strong>Gaurav Mishra</strong> (Project Staff)<br>
      <strong>Email</strong> : <a href="mailto:gauravmi@iitk.ac.in">gauravmi@iitk.ac.in</a><br>
  	  
</div>
</div>	





<!--<br>
<div class="col-lg-12" id="project"><p style="color:white; background:#0099FF; padding:10px;"><strong>Research Associate</strong></p>
</div>

			 
<div class="container">

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-3"><img src="img/team/project associate image/manuja.jpg" width="100%"></div>
<div class="col-lg-9"><h4><strong>Manuj Awasthi </strong></h4>
<strong>M.Tech.</strong> : Thermal engineering from Bundelkhand Institute of Engineering and Technology (2022) .<br>
<strong>Email</strong> : <a href="mailto:manuj@iitk.ac.in">manuj@iitk.ac.in</a>, <a href="mailto:manujawasthi96@gmail.com">manujawasthi96@gmail.com</a> <br>
<strong>Research Area</strong> : Hydrogen Storage system 
<ul>
<li>Hydrogen Storage in metal hydrides synthesized using accumulated roll bonding</li>
<li>Nano enhanced phase change material for Thermal Energy Storage</li>
</ul>
</div>
</div>-->

<div class="past-members">
<div class="col-lg-12" id="Past Members">	
<h2 style="background-color:#d6d6d6; padding:10px; text-align:center;"><strong>Past Members</strong></h2>
<hr>
</div>
<br>
<div class="col-lg-12" id="dst">	
			<p style="color:white; background:#0099FF; padding:10px;"><strong> DST Inspire Faculty</strong></p>
      </div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<!--<div class="col-lg-3"><img src="img/team/Inspired faculty/Dr. Vikas Sharma.jpg" width="100%"></div>-->
<div class="col-lg-12">
<h4><strong>Dr. Vikas Sharma</strong></h4>
<strong>Current Status</strong> : Assistant Manager- Hindustan Pertroleum Corporation Ltd.<br>
<strong>Email</strong> : <a href="mailto:vikas2008.123@gmail.com">vikas2008.123@gmail.com</a><br>
</div>
</div>
<br>

     <div class="col-lg-12" id="ipdf"><p style="color:white; background:#0099FF; padding:10px;"><strong>Institute Post Doctoral</strong></p>
			
          </div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<!--<div class="col-lg-3"><img src="img/team/Post doc image/kushal.jpeg" width="100%"></div>-->
<div class="col-lg-12">
<h4><strong>Dr. Kushal Singh</strong></h4>
<strong>Current Status</strong> : Lead Scientist,  GFCLEV product Ltd Gujarat <br>
<strong> Email</strong> : <a href="mailto:kush.87ald@gmail.com">kush.87ald@gmail.com</a> <br>


</div>
</div>
<br>


<div class="col-lg-12" id="past-member">
  <p style="color:white; background:#0099FF; padding:10px;"><strong>Project Scientist/ Associate </strong></p>
          </div>
		

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Manish</strong><br>
<strong>Currect Status</strong>: Doctoral Researcher, Slovak Academy of Sciences and Comenius<br>
<strong>Email</strong> : <a href="mailto:manishnarnoliya357797@gmail.com">manishnarnoliya357797@gmail.com</a><br>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<!--<div class="col-lg-3"><img src="img/team/Inspired faculty/Dr. Vikas Sharma.jpg" width="100%"></div>-->
<div class="col-lg-12"><strong>Dr. Ravi Prakash Srivastava</strong><br>
  <strong>Current Status</strong> : Assisstant Professor, IIT Jodhpur<br>
    <strong>Email</strong> : <a href="mailto:ravip@iitj.ac.in">ravip@iitj.ac.in</a><br>
</div>
</div>


<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Anuj Kumar</strong><br>
<strong>Currect Status</strong>: Convener Admissions, DMIHER (DU), Adani Foundation<br>
<strong>Email</strong> : <a href="mailto:anujkpjnv@gmail.com">anujkpjnv@gmail.com</a><br>
</div>
</div>


<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Satish Kumar Verma</strong><br>
<strong>Currect Status</strong>: Assistant Professor, Department of Physics, Sharda University, Greater Noida,<br>
<strong>Email</strong> : <a href="mailto:satish16kumar@gmail.com">satish16kumar@gmail.com</a><br>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Arindam Chatterjee</strong><br>
<strong>Currect Status</strong>: Reliance Industries New Energy <br>
<strong>Email</strong> : <a href="mailto:arindamchatterjee015@gmail.com">arindamchatterjee015@gmail.com</a><br>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Preeti Bajpai</strong><br>

<strong>Current status</strong> : IIT Kanpur, U.P. (2018)<br>
<strong>Email</strong> : <a href="mailto:pretty.bajpai@gmail.com">pretty.bajpai@gmail.com</a><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Santosh K. Pal</strong><br>
<strong>Current Status</strong> : Delft University of Technology<br>
<strong>Email</strong> : <a href="mailto:skpal099@gmail.com">skpal099@gmail.com</a><br>

</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Alok Mani Tripathi</strong><br>
<strong>Current Status</strong> : Lead Scientist, Exide Energy Solutions <br>

</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Ashutosh Kumar</strong><br>
<strong>Current Status</strong> : Christ Church College, Kanpur<br>
<strong>Email</strong> : <a href="mailto:ashutoshais@gmail.com">ashutoshais@gmail.com</a><br>
</div>
</div>

<br>

<div class="col-lg-12">	
<p style="color:white; background:#0099FF; padding:10px;"><strong>Ph.D. Students </strong></p>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">

<strong>Dr. Parmanand Kumar Tyagi</strong> (2026)<br>
<strong>Current Status</strong> : ANRF, Indian Institute of Technology Roorkee<br>
<strong>Email</strong> :<a href="mailto:pktyagi@iitk.ac.in">pktyagi@iitk.ac.in</a><br>
<strong>Thesis Topic:</strong>Flash Sintering as a Sustainable Route for Tailoring Structure and Magnetism in Ferrites</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">


<strong>Dr. Anant Srivastava</strong> (2026)<br>
<strong>Current Status</strong> : Assistant Professor, MIT World Peace University <br>
<strong>Email</strong> :<a href="mailto:anantsr@iitk.ac.in">anantsr@iitk.ac.in</a><br>
<strong>Thesis Topic:</strong>Development of Substrate for Surface-Enhanced Raman Spectroscopy (SERS) and Detection of Environmental Pollutants</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">

<strong>Dr. Mohd Aman</strong> (2026)<br>
<strong>Current Status</strong> : Insitute Post Doctoral Fellow, IIT Delhi. <br>
<strong>Email</strong> : <a href="mailto:mohdaman199898@gmail.com">mohdaman199898@gmail.com</a><br>
<strong>Thesis Topic:</strong>Engineering Core-Shell Nanoarchitectures of Transition Metal Layered Double Hydroxides and Oxides for Next-Generation Energy Storage and Conversion.</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">

<strong>Dr. Anupam Raj</strong> (2026)<br>
<strong>Current Status</strong> :	Developing Functional Materials using Flash Sintering and their Applications in Photocatalysis and Na-ion Batteries <br>
<strong>Email</strong> : <a href="mailto:anupamr20@iitk.ac.in">anupamr20@iitk.ac.in</a><br>
<strong>Thesis Topic:</strong>Developing Functional Materials using Flash Sintering and their Applications in Photocatalysis and Na-ion Batteries.</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">




<strong>Dr. Sunil Kumar</strong> (2025)<br>
<strong>Current Status</strong> : R&amp;D Engineer, Elcogen AS,Estonia. <br>
<strong>Email</strong> : <a href="mailto:kumarsk01120@gmail.com">kumarsk01120@gmail.com</a><br>
<strong>Thesis Topic:</strong>High-Performing SrFeO<sub>3</sub>-derived Materials as Electrodes for Symmetrical Solid Oxide Fuel Cells</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">

<strong>Dr. Raghunayakula Thirupathi</strong> (2025)<br>
<strong>Current Status</strong> : Gujarat Flruorochemicals Ltd.<br>
<strong>Email</strong> : <a href="mailto:rtr568@gmail.com">rtr568@gmail.com</a> <br>
<strong>Thesis Topic:</strong> Development of NASICON-structured Materials for Rechargeable Solid-state Sodium-ion Batteries</div>
</div>





<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Amit Das</strong> (2023)<br>
<strong>Current Status</strong> : Scientist-C, ARCI, Hyderabad<br>
<strong>Email</strong> : <a href="mailto:amitdas@arci.res.in">amitdas@arci.res.in</a><br>
<strong>Thesis Topic</strong> : Development of High-Performance xGd0.1Ce0.9O2-δ/SrM0.1Mo0.9O3-δ (M = Mg2+, Fe3+)-Based Composite for Solid Oxide Fuel Cell Anodes<br>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Rubia Hassan</strong> (2021)<br>
<strong>Current Status</strong> : Postdoctoral Researcher, Missouri University of Science and Technology<br>
<strong>Thesis Topic</strong> : Microstructural evolution in ZrB2 with SiC and HfB2 addition: Effect on oxidation and wear<br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Vandana</strong> (2018)<br>
<strong>Thesis Topic</strong> : Study of Phase Formation and Oxygen–ion Conductivity in doped Sc2O3 –ZrO2 Based Ceramics<br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Rahul Bhattacharyya</strong> (2018)<br>
<strong>Current Status</strong> : Assistant Manager, Sudeep Advanced Materials.<br>
<strong>Thesis Topic</strong> :	Enhanced Oxygen-ion Conductivity of Na0.5Bi0.5TiO3-based Ceramics
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Alka Gupta</strong> (2016)<br>
<strong>Current Status</strong> : Assistant Professor,CSJM University<br>
<strong>Email</strong> : <a href="mailto:alkagupta@csjmu.ac.in">alkagupta@csjmu.ac.in</a><br>
<strong>Thesis Topic</strong> : 	Effect of Dissolution and Composite Formation of Ceria on the Ionic Conductivity of Yttria Stabilized Zirconia<br>
</div>
</div>
<br>
<div class="col-lg-12">	
<p style="color:white; background:#0099FF; padding:10px;"><strong>M.Tech. Students</strong></p>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Thutta Mohan </strong>(2026)<br>
<strong>Current Status</strong>: EXIDE Industries<br>
<strong>Email</strong> : <a href="mailto:thuttam24@iitk.ac.in">thuttam24@iitk.ac.in</a><br>
<strong>Thesis Topic</strong> :	Hierarchically Porous Carbon Hosts and Catalytic Interlayers for Stable Carbonate-Electrolyte Lithium-sulfur Batteries.
</div> 
</div>


<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
 <strong>Mr. Sourabh Shyamal </strong>(2025)<br>
 <strong>Current Status</strong>: Applied Materials <br>
<strong>Email</strong> : <a href="mailto:sourabhshyamal1999@gmail.com">sourabhshyamal1999@gmail.com</a> <br>
<strong>Thesis Topic</strong> : Designing Composite Cathode with High Active Mass Loading for Rechargeable Na-ion Batteries


</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Anmol Singh </strong>(2025)<br>
<strong>Current Status</strong>: Research and Development Engineer, Dixon Technologies.<br>
<strong>Email</strong> : <a href="mailto:anmol.annu2010@gmail.com">anmol.annu2010@gmail.com</a><br>
<strong>Thesis Topic</strong> : Performance Testing of Symmetric Solid-Oxide Fuel Cell using Gadolinium-doped Ceria as Solid-Electrolyte
</div> 
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Parthadhwaj Konduparty </strong>(2024)<br>
<strong>Current Status</strong>: Tata Steel Ltd<br>
<strong>Email</strong> : <a href="mailto:partha29k@gmail.com">partha29k@gmail.com</a><br>
<strong>Thesis Topic</strong> : Development of Nanostructured Freestanding Supercapacitor Electrodes by Tuning the Solvothermal Method
<br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Pratap Sharma</strong> (2024)<br>
<strong>Current Status</strong>: Assistant Manager, Exide Industries <br>
<strong>Email</strong> : <a href="mailto:Sharma.pratap16@gmail.com">Sharma.pratap16@gmail.com</a><br>
<strong>Thesis Topic</strong> : Developing Polymer-Ceramic Composite Electrolyte for Rechargeable Solid-State Na-ion Batteries
</div>
</div>


<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Anjan Chakraborty</strong> (2022)<br>
<strong>Current Status</strong>: Manager -Technology, TRL Krosaki Refractories LTD.<br>
<strong>Email</strong> : <a href="mailto:anjanchakraborty.a1995@gmail.com">anjanchakraborty.a1995@gmail.com</a><br>
<strong>Thesis Topic</strong> : Designing High Na+ Conducting Mg-doped NASICON-type Electrolyte for Na-Ion Batteries
<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Santu Panja</strong> (2022)<br>
<strong>Current Status</strong>: Materials Engineer at TVS Motor Company Limited,Bangalore <br>
<strong>Email</strong> : <a href="mailto:santu.panja1998@gmail.com">santu.panja1998@gmail.com</a><br>
<strong>Thesis Topic</strong> : Influence of PVDF Binder Crystallinity on the Performance of LiFePO4 Cathode in Li-ion Batteries
<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Sandeep Kumar</strong> (2019)<br>

<strong>Thesis Topic</strong> : Electrochemical Cell Performance of Gd<sub>0.10</sub>Ce<sub>0.90O2-δ</sub>-SrFe<sub>0.1</sub>Mo<sub>0.9O2.9</sub> Based Composite Anode Material in SOFC



Structural and electrical properties of CeO<sub>2</sub>-doped SrTiO<sub>3</sub> ceramics
<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Biswajit Jana</strong> (2019)<br>
<strong>Current Status</strong>: PhD, IIT Kharagpur<br>
<strong>Thesis Topic</strong> : Development of Gd<sub>0.10</sub>Ce<sub>0.90O2-δ </sub>- SrMo<sub>0.90</sub>Mg<sub>0.10O3-δ</sub> Composite Anode Materials for Solid Oxide Fuel Cells
<br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Ritobrata Saha</strong> (2019)<br>
<strong>Current Status</strong>: ICICI Bank<br>
<strong>Thesis Topic</strong> : Acceptor doped Na3Zr2Si2PO12 for the Electrolyte Applications in Solid-state Na-ion batteries
<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Sumanta Chakraborty</strong> (2019)<br>
<strong>Current Status</strong>: Deputy Manager (Sr. Battery Pack Development Engineer) MAN Truck &amp; Bus India Pvt Ltd<br>
<strong>Email</strong> : <a href="mailto:sumanta1395@gmail.com">sumanta1395@gmail.com</a><br>
<strong>Thesis Topic</strong> : NASICON Framework-Based Si-doped Na3V2(PO4)3 Cathodes for Sodium-Ion Batteries
<br><br>
</div>
</div>



<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Soumitra Das</strong> (2018)<br>
<strong>Current Status</strong>: Tata Steel, Jamsedpur <br>
<strong>Email</strong> : <a href="mailto:dasoumitra63@gmail.com">dasoumitra63@gmail.com</a><br>
<strong>Thesis Topic</strong> : Enhanced Bulk Ionic Conductivity of B-site Mg2+-doped Non-stoichiometric Sodium Bismuth Titanate
<br>
<br>
</div>
</div>


<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Dr. Shashwat Singh</strong> (2017)<br>
<strong>Current Status</strong>: Postdoctoral Researcher, University of Waterloo<br>
<strong>Thesis Topic</strong> : Structural, Ionic Conductivity and Temporal Stability Study of Yb2O3/Nb2O5 co-doped Sc2O3 Stabilized ZrO2
<br>
<br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Mohit Sanbui</strong> (2016)<br>
<strong>Current Status</strong>: Manager-R&D and Tech Services(SNF-PCE), Himadri Speciality Chemical Ltd.
<br>
<strong>Thesis Topic</strong> : 	Structural and Ionic Conductivity Study of Ceria Co-doped Scandia Stabilized Zirconia as an Electrolyte for Intermediate Temperature-Solid Oxide Fuel Cell
<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
  <p><strong>Mr. Sunil Kumar</strong> (2015)<br>
    <strong>Current Status</strong>: SAIL, Durgapur.<br>
    
    <strong>Thesis Topic</strong> : Structure and Conductivity Relationships in Lu2O3 Doped CeO2
    <br><br>
  </p>
</div>
</div>


<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Ms. Ishamol L B</strong> (2015)<br>
<strong>Current Status</strong>: New Product Program Manager, EssilorLuxottica <br>

<strong>Email</strong> : <a href="mailto:ishalb1325@gmail.com">ishalb1325@gmail.com</a><br>
<strong>Thesis Topic</strong> : Ionic conductivity study of ytterbia co-doped scandia stabilized zirconia electrolyte

<br><br>
</div>
</div>

<div class="row" style="margin-top:-25px; background-color:aliceblue; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Ram Pyar Singh</strong> (2015)<br>
<strong>Current Status</strong>: Physics Faculty, Aakash Educational Services Limited<br>
<strong>Email</strong> : <a href="mailto:rampyarsingh22@gmail.com">rampyarsingh22@gmail.com</a><br>
<strong>Thesis Topic</strong> : Structural and electrical properties of CeO<sub>2</sub>-doped SrTiO<sub>3</sub> ceramics
<br><br>
</div>
</div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<div class="col-lg-12">
<strong>Mr. Manoj Chintapatra </strong>(2014)<br>
<strong>Current Status</strong>: Laboratory Manager, TRL Krosaki Refractories Limited <br>

<strong>Thesis Topic</strong> : Ionic Conductivity of Sm0.075Nd0.075Ce0.85O2-δ Ceramic Synthesized using spark plasma sintering.
<br><br>
</div>
</div>
<br>
<div class="col-lg-12" id="ipdf">	
			<p style="color:white; background:#0099FF; padding:10px;"><strong> Intern</strong></p>
			
          </div>
<div class="row" style="margin-top:-25px; background-color:#f6f6f6; padding-top:30px; width:100%">
<!--<div class="col-lg-3"><img src="img/team/Post doc image/kushal.jpeg" width="100%"></div>-->
<div class="col-lg-12">
<h4><strong>Ms. Anshika Sharma </strong></h4>
  <p><strong>Current status:</strong>BTech in Mechanical Engineering from VIT Vellore<br>
    <strong>SURGE Summer Research Intern</strong> from Indian Institute of Technology, Kanpur(2026).<br>
    <strong>Email:</strong> <a href="mailto:a7985626089@gmail.com">a7985626089@gmail.com</a>  </p>
 
    <h4><strong>Ms. Tejal R. Patil</strong></h4>
  <p><strong>Current status:</strong> Integrated BSc-MSc Nanoscience and Technology ,Shivaji University, Kolhapur.<br>
    <strong>SARIP Summer Research Intern</strong> from Indian Institute of Technology, Kanpur(2026).<br>
    <strong>Email:</strong> <a href="mailto:tejal31snkop@gmail.com">tejal31snkop@gmail.com</a>  </p>
  <h4><strong>Mr. Aritra Mandal</strong></h4>
  <strong>Current status:</strong> MSc Applied Chemistry, Ramakrishna Mission Vidyamandira<br>
  <strong>INSPIRE Summer Research Intern</strong> from Ramakrishna Mission Vidyamandira (2025)<br>
  <strong>Email</strong>: <a href="mailto:aritramondal4499@gmail.com">aritramondal4499@gmail.com</a>
 
   <h4><strong>Mr. Animesh Dutt Mishra</strong></h4>
  <p><strong>Current status:</strong> EV Materials Engineer at Jaguar Landrover<br>
    <strong>SURGE Summer Research Intern</strong> from Indian Institute of Technology, Jodhpur (2023).<br>
    <strong>Email:</strong> <a href="mailto:admishra0504@gmail.com">admishra0504@gmail.com</a>  </p>
    <br>
 
</div>
</div>
</div>
</div>
<br>
<div class="col-lg-12"><h4><br><br>

</h4>
</div>


		</div>
					
				
	</section>
	
	
	
<?php 
include("footer.php");
?>
	