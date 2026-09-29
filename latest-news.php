<?php 
$page = '';
include("header.php");
?>

<style>
.news-year {
	color: #fff;
	background: #0099FF;
	padding: 10px 15px;
	margin: 28px 0 8px;
	font-size: 20px;
}
.news-item {
	display: flex;
	align-items: flex-start;
	gap: 20px;
	padding: 20px;
	overflow: auto;
}
.news-item img {
	display: block;
	float: none;
	width: 360px;
	height: auto;
	max-width: 100%;
	margin: 0 0 12px 0;
	object-fit: contain;
}
.news-photos {
	flex: 0 0 auto;
}
.news-photos img {
	width: 280px;
}
.news-item > p {
	margin: 0;
	flex: 1 1 auto;
}
</style>






	
	
	
	<!--<section id="inner-headline" style="background-image: url(img/bg-breadcrum.jpg);">-->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="latest-news.php">Latest News</a><i class="icon-angle-right"></i></li>
					<!--<li class="active">Components</li>-->
				</ul>
				
				<!--<h3 style="padding:10px; ">About Me</h3>-->
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
						<h2 align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</h2>
						<h2 align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</h2>
						<h2 align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</h2>
						<h2 align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</h2>
						<h2 align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;"><strong>Latest News and Events</strong></h2>
						<p align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</p>
					<p align="center" style="color:royalblue; letter-spacing:1.5px; line-height:1em; margin-top:-30px; text-shadow: 2px 2px 3px #fff;">&nbsp;</p>
						<!--<a href="#" class="btn btn-theme">btn theme</a>
						<a href="#" class="btn btn-primary">btn-primary</a>
						<a href="#" class="btn btn-warning">btn-warning</a>
						<a href="#" class="btn btn-danger">btn-danger</a>
						<a href="#" class="btn btn-info">btn-info</a>
						<a href="#" class="btn btn-success">btn-success</a>-->
						<hr>
						
					
				  </div>
				  <div class="col-lg-12 animated slideInUp">
<!-- News is grouped by year, newest year first. Within a year, newer events come first.
     To add an event, copy a news-item block and place it under that year's heading. -->

<p class="news-year"><strong>2026</strong></p>
<!-- Add new 2026 events below this heading. -->

<div class="news-item">
<div class="news-photos">
<img src="img/news/2026/Teacher's day.jpeg" alt="Teachers' Day 2026">
<img src="img/news/2026/Teachers day.jpeg" alt="Teachers' Day 2026 celebration">
</div>
<p><strong>Teachers' Day 2026</strong> celebration in the Electroceramics Laboratory.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<div class="news-photos">
<img src="img/team/PhD image/Melita.JPG" alt="Melita Saha">
<img src="img/team/MTech Image/Ankan Dhara.jpeg" alt="Ankan Dhara">
</div>
<p>We welcome <strong>Melita Saha</strong> and <strong>Ankan Dhara</strong> to the Electroceramics Laboratory.</p>
</div>
<br clear="all">
<hr>


<div class="news-item">
<img src="img/news/2026/Sintering-Sandipan 1.jpeg" alt="Sandipan at Sintering 2026">
<p><strong>Mr. Sandipan</strong> has attended the Sintering 2026 conference.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/team/PhD image/raj nandhini.jpeg" alt="Raj Nandani">
<p>Congratulations to <strong>Ms. Raj Nandani</strong> for successfully completing her comprehensive examination.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/2026/Convocation of Aman &amp; Mohan.jpeg" alt="Convocation of Aman and Mohan">
<p>Congratulations to <strong>Dr. Mohd. Aman</strong> and <strong>Mr. Thutta Mohan</strong> for receiving their degrees at the convocation.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<div class="news-photos">
<img src="img/news/2026/SURGE 1.jpeg" alt="SURGE intern Anshika">
<img src="img/news/2026/SURGE 2.jpeg" alt="SARIF intern Tejal">
<img src="img/news/2026/Intern poster presentation.jpeg" alt="Intern poster presentation">
</div>
<p>Congratulations to SURGE intern <strong>Anshika</strong> and SARIF intern <strong>Tejal</strong> for completing their internship and giving a presentation.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/2026/aman conference.jpeg" alt="Dr. Mohd. Aman at ISE 2026">
<p><strong>Dr. Mohd. Aman</strong> attended the 42nd Topical Meeting of the International Society of Electrochemistry (ISE), held from June 23 to 26, 2026, at Aalto University in Espoo (Helsinki), Finland.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/2026/Aman defense.jpeg" alt="Dr. Mohd. Aman Ph.D. defense">
<p>Congratulations to <strong>Dr. Mohd. Aman</strong> for successfully defending his Ph.D. thesis.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/2026/Raghav open seminar.jpeg" alt="Raghav open seminar">
<p>Congratulations to <strong>Mr. Raghav</strong> for successfully delivering his Open Seminar.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/2026/Anupam raj defense.jpeg" alt="Dr. Anupam Raj defense">
<p>5 February 2026: Congratulations to <strong>Dr. Anupam Raj</strong> for attending a conference and successfully defending his Ph.D. thesis.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<div class="news-photos">
<img src="img/news/2026/Bhumika SOTA-1.jpeg" alt="Bhumika SOTA seminar">
<img src="img/news/2026/Bhumika SOTA-2.jpeg" alt="Bhumika comprehensive examination">
</div>
<p>Congratulations to <strong>Ms. Bhumika</strong> for successfully completing her comprehensive examination and SOTA seminar.</p>
</div>
<br clear="all">
<hr>


<div class="news-item">
<img src="img/news/2026/surabh open seminar.jpeg" alt="Saurabh Sharma open seminar">
<p>Congratulations to <strong>Mr. Saurabh Sharma</strong> for successfully delivering his Open Seminar.</p>
</div>
<br clear="all">
<hr>
<!--
<div class="news-item">
<img src="img/team/PhD image/saurabh-sharma.png" alt="Saurabh Sharma">
<p>Congratulations to <strong>Mr. Saurabh Sharma</strong> for receiving the Lotus and RSD prize.</p>
</div>
<br clear="all">
<hr>
-->
<div class="news-item">
<img src="img/news/2026/Mohan defense.jpeg" alt="Thutta Mohan M.Tech defense">
<p>Congratulations to <strong>Mr. Thutta Mohan</strong> for successfully defending his M.Tech. thesis and joining Exide Industries.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<p>Congratulations to <strong>Mr. Anant</strong> for successfully defending his M.Tech. thesis.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/team/PhD image/darshil2.jpeg" alt="Darshil">
<p>Congratulations to <strong>Mr. Darshil</strong> for successfully defending his M.Tech. thesis.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/team/PhD image/WhatsApp Image 2025-08-07 at 23.54.16_7ec29712.jpg" alt="Suraj Kalia">
<p><strong>Mr. Suraj Kalia</strong> has attended a conference.</p>
</div>
<br clear="all">
<hr>

<!--<div class="news-item">
<img src="img/team/somar.jpg" alt="Prof. Shobit Omar">
<p><strong>Prof. Shobit Omar</strong> visited IIT Jammu and IIT (BHU) Varanasi.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/team/MTech Image/pritam2.jpeg" alt="Pritam Ghosh">
<p>Congratulations to <strong>Mr. Pritam Ghosh</strong> for completing his internship at TCG.</p>
</div>
<br clear="all">
<hr>-->

<div class="news-item">
<img src="img/news/2026/Lab defense party of Mohan, Anupam Raj &amp; Aman.jpeg" alt="Lab defense celebration">
<p>Lab defense celebration for <strong>Mr. Thutta Mohan</strong>, <strong>Dr. Anupam Raj</strong>, and <strong>Dr. Mohd. Aman</strong>.</p>
</div>
<br clear="all">
<hr>


<div class="news-item">
<p><img src="img/news/aceps conference - Copy.jpeg"></p>
<p><strong>Mr. Aman, Mr Saurabh & Mr Sandipan </strong> has recently attended an conference at Asian Conference on Electrochemical Powder Sources(ACEPS-13)(2026)    </p>
</div>
<br clear="all">
<hr>

<p class="news-year"><strong>2025</strong></p>
<!-- Add new 2025 events below this heading. -->

<div class="news-item">
<img src="img/news/samvanay.jpg">
<p>Represented <strong> Our lab work </strong> and had insighful conversations with industry and academic experts on the topic "Next generation Rechargeable batteries"(Sodium ion batteries) at IITK Samanvay 2025 </p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/teachers day.jpeg">
<p><strong>Teacher's Day </strong> Celebrations 2025 at Electroceramics lab.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/aman_open.jpg">
<p>Congratulations to <strong>Mr. Aman </strong> for successfully delivered his Open Seminar on July. 2025</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/darshil_sunil.png">
<p><strong>Dr. Sunil & Mr Darshil </strong> has recently attended an international conference at 19th International Symposium on Solid Oxide Fuel Cells, Sweden under (SOFC-XIX) (July, 2025)</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/Convocation.jpg">
<p><strong> IIT Kanpur Convocation 2025</strong> - Congratulations to <strong> Dr. Sunil, Dr.Thirupathi </strong> for receiving PhD degree <strong> and Saurabh Shyamal & Anmol </strong> for receiving Mtech degree.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<p>@Congratulations to <strong>Mr.Aritaro Mandol </strong> from Ramakrishna vidhya mandir, West Bengal for completing his summer internship 2025.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/saurabh medal.jpg">
<p>Congratulations to <strong>Mr.Saurabh Shyamal </strong> for getting <strong> Baldev Upadhyaya Gold Medal & Bogninenu chenchu </strong> award 2025.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/saurabh _aman.png">
<p><strong>Mr. Aman & Mr Saurabh sharma </strong> has recently attended an international conference at European Materials Research Society, Europe under E-MRS 2025 (May, 2025)</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/Defence_Anmol+Sourabh.jpg">
<p>Congratulations to <strong>Mr. Anmol & Mr. Shyamal </strong> for successfully defending his Mtech thesis on May. 2025</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/sunil.jpeg">
Congratulations to <strong>Mr. Sunil </strong> for successfully defending his PHD thesis on May. 2025
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/NSRS 2025.jpeg">
<strong> Ms. Bhumika , Mr Anmol & Mr. Shyamal  </strong> Presented their posters in National Symposium Research Scholars(NSRS- 2025 )
</div>
<br clear="all">
<hr> 

<p class="news-year"><strong>2024</strong></p>
<!-- Add new 2024 events below this heading. -->

<div class="news-item">
<img src="img/news/RAGHUNAYAKULA.jpeg">
Congratulations to <strong>Mr. R.Thirupathi </strong> for successfully defending his PHD thesis on December. 2024
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/Aman defence-2.jpg">
Congratulations to <strong>Mr. Mohd. Aman</strong> for successfully defending his M.Tech. thesis on Oct. 2024
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/sunil.jpeg">
Congratulations to <strong>Mr. Sunil Kumar</strong> for successfully delevering his Open Seminar on Oct. 2024
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/parthdhwaj.jpg">
Congratulations to <strong>Mr. Parthadhwaj K</strong> for successfully defending his M.Tech. thesis on June. 2024
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/Pratap defence-4.jpg">
Congratulations to <strong>Mr. Pratap Sharma</strong> for successfully defending his M.Tech. thesis on June. 2024
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/anmol.jpg">
We would like to congratulate <strong>Mr. Anmol Singh </strong> for getting selected as Departmental Placement Coordinator for the session 2024-25(2024).
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/Sourav_academic excellence.jpg">
We would like to congratulate <strong>Mr. Sourabh Shyamal</strong> for getting Academic Excellence Award for securing 10 CPI in academic year 2023-24. (2024)
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/r-thirupathi2023.jpg">
Congratulations to <strong>Mr. R Thirupathi</strong> for successfully delevering his Open Seminar on Jan. 2024
</div>
<br clear="all">
<hr>

<p class="news-year"><strong>2023</strong></p>
<!-- Add new 2023 events below this heading. -->

<div class="news-item">
<img src="img/news/parthdhwaj.jpg">
Congratulations to <strong>Mr. Parthadhwaj K</strong> for being appointed as <strong>DPGC student Nominee</strong> (Sept 2023)
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/news1.jpg">
<p>Recently published a review article entitled "<strong>Recent Progress and Prospects of NASICON Framework Electrodes for Na-ion Batteries</strong>" in journal "<strong>Progress in Materials Science</strong>" (IF = 48.1) (August, 2023).
The online link for the paper is: <a href="https://doi.org/10.1016/j.pmatsci.2023.101128" target="_blank">https://doi.org/10.1016/j.pmatsci.2023.101128</a>
</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/sota-1.jpg">
<p>Congratulations to <strong>Mr. Aman, Mr. Darshil, Mr. Saurabh, Mr. Sandipan</strong> for successfully delivering SOTA seminar.</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/amit-das.jpg">
<p>We would like to congratulate <strong>Dr. Amit Das</strong> for earning a PhD degree, a big stepping stone towards a brighter future (June, 2023).</p>
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/thirupathi-1.jpg">
<strong>Mr. R Thirupathi</strong> has recently attended an international conference  at Materials Research Society, Suntec, Singapore under <strong>IUMRS-ICAM & ICMAT 2023</strong> (June, 2023)
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/saurabh-award.jpg">
We would like to congratulate <strong>Mr. Pratap Sharma</strong> for getting Academic Excellence Award for securing 10 CPI in academic year 2022-23. (2023)
</div>
<br clear="all">
<hr>

<div class="news-item">
<img src="img/news/pratap-1.jpg">
We would like to congratulate <strong>Mr. Pratap Sharma</strong> for getting Academic Excellence Award for securing 10 CPI in academic year 2022-23. (2023)
</div>
<br clear="all">
<hr>

<p class="news-year"><strong>2017</strong></p>
<!-- Add new 2017 events below this heading. -->

<div class="news-item">
@ Congratulations to Soumitra Das for sucessfully defending his M.Tech. defense (2017)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Ramakrishnan S from ARCI, Chennai joined Electroceramics Research Group as an external Ph.D. student (2017)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Biswajit Jana, Sandeep Kumar, Ritobrata Saha & Sumanta Chakraborty joined Electroceramics Research Group as M.Tech. students (2017)
</div>
<br clear="all">
<hr>

<p class="news-year"><strong>2016</strong></p>
<!-- Add new 2016 events below this heading. -->

<div class="news-item">
@ Congratulations to Shashwat Singh for sucessfully defending his M.Tech. defense (2016)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Our group started working on Solid-state Na-ion batteries (2016)
</div>
<br clear="all">
<hr>

<p class="news-year"><strong>2015</strong></p>
<!-- Add new 2015 events below this heading. -->

<div class="news-item">
@ Welcome back Ram Pyar Singh and Amit Das to Electroceramics Research Group!! Good luck for your Ph.D. (30th July 2015)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Congratulations to Sunil Kumar for sucessfully defending his M.Tech. defense (26th June 2015)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Congratulations to Ram Pyar Singh, Ishamol L B & Amit Das for recieving your M.Tech. Degree (7th June 2015)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Congratulations to Amit Das for sucessfully defending his M.Tech. defense (9th MAy 2015)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Congratulations to Ram Pyar Singh for sucessfully defending his M.Tech. defense (8th May 2015)
</div>
<br clear="all">
<hr>

<div class="news-item">
@ Congratulations to Ishamol for sucessfully defending her M.Tech. defense (8th May 2015)
</div>
<br clear="all">
<hr>
					
					
						
				  </div>
					
					</div>
					
					<hr> 
				<!-- divider -->
				
				<!-- end divider -->
				
	</div>
	</section>
	
	
<?php 
include("footer.php");
?>
	