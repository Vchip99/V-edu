<!DOCTYPE html >
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
        <title> ONLINE TEST SERIES</title>
        
        <style>
            div, ul, li, p, h1, h2, h3, h4, h5, h6, strong, span{ margin:0px; padding:0px; list-style:none; }



            img{ border:none;}
            .tab-box {float:left;
            }
            .tab-box ul {width:auto; overflow:hidden; }

            .tab-box ul li{ float:left; margin:0 0 0 4px;}
            .tab-box ul li a{ text-decoration:none; color:#9f9f9f;}
            .tab-box ul li a:hover{text-decoration:none; color:#292929;}


            .tab-box ul li span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#ececec;  border-radius:4px 4px 0px 0px ; -webkit-border-radius:4px 4px 0px 0px ; }
            .tab-box ul li a span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#e4e4e4; }
            .tab-box ul li a:hover span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#ff0000; }


            .tab-box a#cont-1 span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#d8d8d8;  border-radius:4px 4px 0px 0px ; -webkit-border-radius:4px 4px 0px 0px ;
            }

            .tab-box a#cont-2 span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#d8d8d8;  border-radius:4px 4px 0px 0px ; -webkit-border-radius:4px 4px 0px 0px ;
            }
            .tab-box a#cont-1.activeLink span { display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#ededed; color:#000; }
            .tab-box a#cont-2.activeLink span {  display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#ededed; color:#000; }
            .tab-box a#cont-3 span{ display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#d8d8d8;  border-radius:4px 4px 0px 0px ; -webkit-border-radius:4px 4px 0px 0px ;
            }
            .tab-box a#cont-3.activeLink span {  display:block; padding:4px 12px; border-top:1px #c2c2c2 solid; border-left:1px #c2c2c2 solid; border-right:1px #c2c2c2 solid; background-color:#ededed; color:#000; }
            .tabcontent{ width:auto;  margin:-2px 0 0 0px;}
            .hide { display: none}
            #toggleText{ position:absolute; margin:30px 0 0 -20px;    z-index:1;}


            .previous{ float:left; }

            .previous a{  background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/next-back.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px; margin:0 0 0 10px; border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#000000;}

            .previous a:hover{ background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/end.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px; margin:0 0 0 10px; border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#FFF; background-color:#3173b4;}


            .previous-q{ float:left; margin:0 0 0 24%; }

            .previous-q a{  background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/next-back.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px;  border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#000000;}

            .previous-q a:hover{ background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/end.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px;  border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#FFF; background-color:#3173b4;}


            .Questions{ float:right; margin:0 10px 0 0px; }
            .Questions a{ background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/next-back.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px;  border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#000000;}
            .Questions a:hover{ background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/end.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px;  border-radius:4px ; -webkit-border-radius:4px ; text-decoration:none; color:#FFF; background-color:#3173b4;}
            .pleloaderline{  border-radius: 4px;
    color: #000000;
    display: block;
    float: right;
    margin: 0 10px 0 0;
    padding: 3px 8px;
    text-decoration: none;
}
            .submit{ float:right; margin:0px 10px 0px 0px; padding:0px; background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/next-back.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px; border-radius:4px ; -webkit-border-radius:4px ;  text-decoration:none; color:#000000; display:block;  }
            .submit1{ float:right; margin:0px 10px 0px 0px; padding:0px; background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/next-back.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px; border-radius:4px ; -webkit-border-radius:4px ;  text-decoration:none; color:#000000; display:block;  }
            .submit:hover{ float:right; margin:0px 10px 0px 0px; padding:0px; background-image:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/end.gif); background-repeat:repeat-x;  border:1px #bdbdbd solid; padding:3px 8px; border-radius:4px ; -webkit-border-radius:4px ;  text-decoration:none; color:#000000; display:block; background-color:#3173b4;  }
            .submit-button{ margin:0px; padding:0px; background:none; border:none; cursor:pointer; }
            .submit-button:hover{ margin:0px; padding:0px; background:none; border:none; cursor:pointer;color:white }
            .submit-button1{ margin:0px; padding:0px; background:none; border:none;  }
            .coloumn-black{ background-color:#eff0f0;   border-right:1px #d8d9db solid; color:#000000; font-weight:bold;}
            .coloumn-gray{ background-color:#ffffff; word-wrap:break-word;  border-top:1px #d8d9db solid;  border-right:1px #d8d9db solid;  color:#202020;}
            .newdivinstruction{width:auto;}
            .newdivinstruction center{margin:20px 0px; font-size:16px;}
			.newdivinstruction ol{width:90%; margin: 0px 0px 0px 20px;}
			.newdivinstruction ol li{list-style:decimal; line-height:16px; margin:5px 0px;}
			.newdivinstruction #white{width:42px; padding:3px 0px 0px 0px; height:21px; background:#FFF; color:#000000; font-size:11px; text-align:center; border:1px #a5abb1 solid;}
			.newdivinstruction #red{width:42px; padding:3px 0px 0px 0px; height:21px; background:#DD2F2F; color:#ffffff; font-size:11px; text-align:center;  border:1px #a23b35 solid;}
			.newdivinstruction #green{width:42px; padding:3px 0px 0px 0px; height:21px; background:#79c15e; color:#ffffff; font-size:11px; text-align:center; border:1px #6cac54 solid;}
			.newdivinstruction #violet{width:42px; padding:3px 0px 0px 0px; height:21px; background:#9397cb; color:#ffffff; font-size:11px; text-align:center; border:1px #7b80c7 solid;}
			.newdivinstruction #greenviolet{width:42px; padding:3px 0px 0px 0px; height:21px; background:#9397cb; color:#ffffff; font-size:11px; text-align:center; border:1px #7b80c7 solid; overflow:hidden;}
			.newdivinstruction #greenviolet span{width:14px; margin:-3px 0px 0px 0px; height:24px; display:inline-block; background:#79c15e; float:right;}
			.newdivinstruction .noliststyle{list-style:none;}
			.newdivinstruction .noliststyle i{color:red;}
			.newdivinstruction ol li ul{width:auto; margin:0px 0px 0px 30px;}
			.newdivinstruction ol li ul li{list-style:lower-alpha; line-height:14px;}
			.newdivinstruction ol li ul li i{color:red;}
        </style>

    </head>

    <script src="student/js/jquery.js"></script>

    

    <body style=" margin:0px; padding:0px; background-color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:10pt;position: fixed;height:100%;width:100%" onunload ="return onBrowserClose();"  onbeforeunload="return onBrowserClose();">



        <!--main div start-->


        <div style="width:100%; margin:0 auto;" >

            <!--header start-->

            <div style="width:auto; background:url(https://s3-ap-southeast-1.amazonaws.com/gw-mdsy/student/images/test/header.gif) repeat-x; overflow:hidden; padding:10px 0 15px 0px;">
               
           	 <div style="float:left; color:#345895; font-family:Levenim MT; font-size:22px; margin:0px 0 0 0px; padding:10px 0 0 50px; text-transform:uppercase; font-weight:bold;width:100%">Online Test</div>
            </div>

        </div>


        

                    <div style="float:left; background-color:#FFF; margin:0px 0px;left:0px; right:150px;position: absolute;top:66px;bottom:0px;">


                        
                        <!--content start-->

                        <div  style="position:absolute;bottom:95px;top:0px; text-align:justify; line-height:16pt; padding:0 15px 0px 15px; border-top:1px #f0f0f0 solid; border-left:1px #f0f0f0 solid; border-right:1px #f0f0f0 solid; margin:0 0px; overflow:auto;">




                            <!--match-question start-->

                           

                            <!--match-question close-->














                            <!--print start-->
     <div style="width:auto;">
     <div>
	         <p align="CENTER" style="margin-bottom: 0in; line-height: 0.22in">
		      <font color="#000000"><font face="Century Gothic, serif"><font size="4"><b>General Instructions</b></font></font></font></p>
	<ol>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">The clock will be set at the server. The countdown timer at the right corner of the screen will display the remaining time available for you to complete the examination. When the timer reaches zero the examination ends by itself. You need to terminate the examination or submit the paper.</font></font></font></p>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">The question palette displayed on the right side of the screen will show the status of each question using one of the following color:</font></font></font></p>
			<br />
			<table border="0" cellpadding="5" cellspacing="0" style="font-size:13px" width="597">
				<colgroup>
					<col width="6" />
					<col width="570" />
				</colgroup>
				<tbody>
					<tr>
						<td class="insnotVisited" style="text-align:center;width:32px">
							White:</td>
						<td width="570">
							<p>
								<font face="Century Gothic, serif">You have not visited the question yet.</font></p>
						</td>
					</tr>
					<tr>
						<td class="insunattempt" style="text-align:center">
						Red:</td>
						<td width="570">
							<p>
								<font face="Century Gothic, serif">You have not answered the question.</font></p>
						</td>
					</tr>
					<tr>
						<td class="insattempt" style="text-align:center;">
							Green:</td>
						<td width="570">
							<p>
								<font face="Century Gothic, serif">You have answered the question.</font></p>
						</td>
					</tr>
					<tr>
						<td class="insmark" style="text-align:center">
							Violet:</td>
						<td width="570">
							<p>
								<font face="Century Gothic, serif"> Marked the question for review.</font></p>
						</td>
					</tr>
					
				</tbody>
			</table>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font face="Century Gothic, serif"><font size="2">The Marked for Review status for a question simply indicates that you would like to look at that question again.</font></font><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font><font face="Century Gothic, serif"><font size="2">If a question is answered, but marked for review, then the answer to that question will be considered in the evaluation, unless the status is modified by the candidate.</font></font></p>
		</li>
	</ol>
	<p align="JUSTIFY" style="margin-bottom: 0in; line-height: 0.22in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>Navigating to a Question</b></font></font></font></p>
	<ol start="4">
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">To answer a question, do the following:</font></font></font></p>
			<ul>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">Click on the question number in the Question Palette to go to that question directly.</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">Select an answer for a multiple choice type question by clicking on bubble placed before the 4 choices A, B, C, D. Use the virtual numeric keypad to enter a number as an answer to a numerical type question.</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">Click on</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Save and Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">to save your answer for the current question and then go to the next question.</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">Click on</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Mark for Review and Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">to save your answer for the current question, mark it for review, and then go to the next question.</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font face="Century Gothic, serif"><font size="2">Caution: Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on its question number.</font></font></p>
				</li>
			</ul>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">You can view all the questions by clicking on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Question Paper</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button. This feature is provided so that you can see the entire question paper at a glance. Note that the options for multiple choice type questions will not be shown.</font></font></font></p>
		</li>
	</ol>
	<p align="JUSTIFY" style="margin-bottom: 0in; line-height: 0.22in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>Answering a Question</b></font></font></font></p>
	<ol start="6">
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">Procedure for answering a multiple choice type question:</font></font></font></p>
			<ul>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To select your answer, click on the button of one of the options A, B, C, D</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To deselect your chosen answer, click on the button of the chosen option again or click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Clear Response button</b></font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To change your chosen answer, click on the button of another option</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To save your answer, you MUST click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Save &amp; Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To mark the question for review, click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Mark for Review &amp; Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button.</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font face="Century Gothic, serif"><font size="2">If an answer is selected for a question that is </font></font><font face="Century Gothic, serif"><font size="2"><b>Marked for Review</b></font></font><font face="Century Gothic, serif"><font size="2">, that answer will be considered in the evaluation.</font></font></p>
				</li>
			</ul>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.17in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">Procedure for answering a numerical answer type question:</font></font></font></p>
		</li>
	</ol>
	<ol type="a">
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">To enter a number as your answer, use the virtual numerical keypad</font></font></font></p>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>In Numerical Type Questions, you are limited to answer till two decimal points.</b></font></font></font></p>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">A fraction (eg. -0.3 or -.3) can be entered as an answer with or without &quot;0&quot; before the decimal point</font></font></font></p>
		</li>
		<li>
			<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
				<font color="#000000"><font face="Century Gothic, serif"><font size="2">To clear your answer, click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Clear Response</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button</font></font></font></p>
			<ol type="a">
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To save your answer, you MUST click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Save &amp; Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To mark the question for review, click on the</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>Mark for Review and Next</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">button.</font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2">&nbsp;</font></font></font><font face="Century Gothic, serif"><font size="2">If an answer is entered for a question that is </font></font><font face="Century Gothic, serif"><font size="2"><b>Marked for Review</b></font></font><font face="Century Gothic, serif"><font size="2">, that answer will be considered in the evaluation.</font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</font></font></font></p>
				</li>
				<li>
					<p align="JUSTIFY" style="margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
						<font color="#000000"><font face="Century Gothic, serif"><font size="2">Note that ONLY Questions for which answers are saved or </font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"><b>MARKED FOR REVIEW</b></font></font></font><font color="#000000"><font face="Century Gothic, serif"><font size="2"> after answering will be considered for evaluation</font></font></font></p>
				</li>
			</ol>
		</li>
	</ol>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<br />
		&nbsp;</p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>8. Sections</b></font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; text-indent: -0.22in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">a. Sections in the question paper will be displayed in the top bar of the screen. Questions in a section can be viewed by clicking on the name of that Section. The Section you are currently viewing will be highlighted</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; text-indent: -0.22in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">b. After clicking on Save &amp; the Next button for the last question in a Section, you will be automatically taken to the first question of the next Section in a sequence.</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; text-indent: -0.22in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">c. You can move the mouse cursor over the name of the Section to view the answering status of that Section.</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; text-indent: -0.22in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">d. You can shuffle between different Sections or change the optional Sections any number of times.</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<br />
		&nbsp;</p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>9. Calculators</b></font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">Online Scientific Calculators will be available in GATE Online Test Platform.</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<br />
		&nbsp;</p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>Disclaimer:</b></font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">This Online Test Series is designed by studying and surveying the previous platforms of the respective examinations. And efforts are made to replicate the actual exam patterns in all the aspects. However ONLINE TEST will not be responsible for any changes in exam pattern or functionality updates in the actual examinations.</font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<br />
		&nbsp;</p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#c00000"><font face="Century Gothic, serif"><font size="2"><b>Declaration:</b></font></font></font></p>
	<p align="JUSTIFY" style="margin-left: 0.53in; margin-top: 0.05in; margin-bottom: 0.05in; line-height: 0.15in">
		<font color="#000000"><font face="Century Gothic, serif"><font size="2">I have read and understood all the above mentioned instructions. Also, I confirm that at the start of the examination all the computer hardware and internet connection are in proper working condition.</font></font></font></p>
                         </div>                      
					   </div>
                      
                    </div>

                        <form name = "instructionForm" method = "post" action = "" onsubmit="return generateTest();">

                            <!--content close-->

                            <!--panel-row-down start-->
                            <div style="width:auto; right:0px;left:0px;position:absolute;background-color:#e8e9e9;  border:1px #dddddd solid; border-radius:0px 0px 4px 4px ; -webkit-border-radius:0px 0px 4px 4px ; overflow:hidden; padding:7px 0 7px 0px;bottom:40px;height:40px;">


                              <div style="text-align:right">
							  <button type="button"  onclick="self.close()">close</button>
							  
							  </div>


                                <!--checkbutton start-->

                               

                                


                            </div>


                            <!--panel-row-down start-->


                            
                        </form>
						
						  </div> 
						  
          <div style="margin-top:15%;position: absolute;right:20px;">
             <input type="hidden" name="mode"  id="mode" value=""/>
                 <img src="img/avatar.png" width="110" />
                  <br/>
                 <span><b>Name :</b> </span>GATE
            </div>

			
			
			
<script>

    function generateTest(){
        
        $("#chaclass").attr("style","display:none;");
      
        $("#pleloderline").show(); 
    

        document.instructionForm.action="quiz.php?";
  
      document.instructionForm.submit();

    }
</script>

<script>
    function onBrowserClose(){

        var mode=document.getElementById('mode').value;
        var urlData="mode="+mode;

        $.ajax({
            type: "post",
            url: "index.php?pageName=test/updateTest",
            data: urlData ,
            async: false,
            error:function() {

            },
            success: function(result){
//                location.href="index.php?pageName=test/testSummary&exam=2"  ;
            }});
    }
    function checkCondition(){

        if ($('#termcondition').attr('checked')) {

            $("#startTest").attr('disabled',false);

            $("#chaclass").removeClass("submit1");
            $("#chaclass").addClass("submit");
            $("#startTest").removeClass("submit-button1");
            $("#startTest").addClass("submit-button");
        }
        else{
            $("#startTest").attr('disabled',true);
            $("#chaclass").removeClass("submit");
            $("#chaclass").addClass("submit1");
            $("#startTest").removeClass("submit-button");
            $("#startTest").addClass("submit-button1");
        }



    }
    $("#condition").click(function(){
        checkCondition();
    });
</script>

    </body>
</html>