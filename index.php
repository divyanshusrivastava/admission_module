<?php 
error_reporting( ~E_NOTICE ); // avoid notice
require 'php/database_config.php';
?>

<!DOCTYPE html> 
<html lang="en">
<head>
	<title>IIIT Delhi Application Form</title>
	<!---Including CSS for different screen size -->
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Validation Script -->
	<script src="js/validationScript.js"></script>

</head>
<body>
	<div class="jumbotron text-center">
		<header>
	    	<h2>B.Tech 2017 Application Form for Foreign Students/PIO/OCI/NRI Admissions</h2>
	    	<p>Indraprastha Institute of Information Technology Delhi</p>
		</header>
	</div>
	<div class="container">	
		<form name="main_form" action="" onsubmit="return validateForm()" method="post" class="form-horizontal">  
			<div class="form-group">
				<label class="control-label col-sm-2">Name </label>
				<div class="col-sm-10">
					<input type="text" name="name" id="name" width="100px;" class="form-control">
				</div>
			</div>
			<fieldset>
				<legend>Personal Information</legend>
				<div class="form-group">
					<label>Contact Phone Number</label><br>
					<label class="control-label col-sm-2">Primary </label>
					<div class="col-sm-4">
						<input type="number" name="ccode1" id="ccode1" placeholder="Country Code"class="form-control">
					</div>
					<div class="col-sm-6">
						<input type="number" name="phno1" id="phno1" placeholder="Phone Number"class="form-control">
					</div>
					<label class="control-label col-sm-2">Secondary </label>
					<div class="col-sm-4">
						<input type="number" name="ccode2" id="ccode2"  placeholder="Country Code" class="form-control">
					</div>
					<div class="col-sm-6">
						<input type="number" name="phno2" id="phno2" placeholder="Phone Number"class="form-control">
					</div>
				</div>		
				<div class="form-group">
					<label class="control-label col-sm-2">Current Address </label>
					<div class="col-sm-10">
						<textarea rows="3" name="address" id="address" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Gender</label>	
					<div class="col-sm-10">
						<label class="radio-inline"><input type="radio" name="gender" value="Male" checked>Male</label>	
						<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
						<label class="radio-inline"><input type="radio" name="gender" value="Transgender">Transgender</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Date of Birth </label>
					<div class="col-sm-10">
						<input type="Date" name="dob" class="form-control">
					</div>
				</div>	
				<div class="form-group">
					<label class="control-label col-sm-2">Country of Birth </label>
					<div class="col-sm-10">
						<input type="text" name="cob" id="cob" class="form-control">
					</div>
				</div>
				<div class="form-group">	
					<label class="control-label col-sm-2">Citizenship </label>
					<div class="col-sm-10">	
						<input type="text" name="citizenship" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Email Address </label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control">
					</div>
				</div>				
			</fieldset>
			<fieldset>
				<legend>Family Details</legend>
				<p>Parent 1 [Mother/Father]</p><br>
				<div class="form-group">
					<label class="control-label col-sm-2">Name </label>
					<div class="col-sm-10">
						<input type="text" name="p1name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Address </label>
					<div class="col-sm-10">
						<textarea rows="3" name="p1address" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Email Address </label>
					<div class="col-sm-10">
						<input type="email" name="p1email" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Citizenship </label>
					<div class="col-sm-10">
						<input type="text" name="p1citizenship" class="form-control">
					</div>
				</div>
				<p>Parent 2 [Mother/Father]</p><br>
				<div class="form-group">
					<label class="control-label col-sm-2">Name </label>
					<div class="col-sm-10">
						<input type="text" name="p2name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Address </label>
					<div class="col-sm-10">
						<textarea rows="3" name="p2address" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Email Address </label>
					<div class="col-sm-10">
						<input type="email" name="p2email" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Citizenship </label>
					<div class="col-sm-10">
						<input type="text" name="p2citizenship" class="form-control">
					</div>
				</div>	
			</fieldset>
			<fieldset>
				<legend>Educational Qualification </legend>
				<ol>
					<p><li>School Information<br>
					(Current or Most Recent School)</p>
					<div class="form-group">
						<label class="control-label col-sm-2">School Name</label>
						<div class="col-sm-10">
							<input type="text" name="schoolname" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">School Address</label>
						<div class="col-sm-10">
							<textarea rows="3" name="schooladdress" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4">
							<label class="control-label col-sm-2">Country</label>
							
								<input type="text" name="schoolname" class="form-control">
							
						</div>
						<div class="col-sm-4">
							<label class="control-label col-sm-2">State</label>
							
								<input type="text" name="schoolname" class="form-control">
							
						</div>
						<div class="col-sm-4">
							<label class="control-label col-sm-2">Pincode</label>
							
								<input type="text" name="schoolname" class="form-control">
							
						</div>
					</div>
						<!-- <label class="control-label col-sm-2">Country</label>
						<div class="col-sm-10">
							<input class="col-sm-2" type="text" name="" class="form-control">
							<label class="col-sm-2">State</label>
							<input class="col-sm-2" type="text" name="" class="form-control">
							<label class="col-sm-2">Pincode</label>
							<input class="col-sm-2" type="text" name="" class="form-control">
						</div>
						 -->
					
					<div class="form-group">
						<label class="control-label col-sm-2">Date of Entry in the School</label>
						<div class="col-sm-10">
							<input type="Date" name="schoolentrydate" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Date/Expected date of graduation from this school</label>
						<div class="col-sm-10">
							<input type="Date" name="schoolexitdate" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Name of School Official</label>
						<div class="col-sm-10">
							<input type="text" name="nameschoolofficial" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Email of School Official</label>
						<div class="col-sm-10">
							<input type="email" name="emailschoolofficial" class="form-control">
						</div>
					</div>
					<p><li>Program Applying For<br>
					(Please put 1-5 as order or preference against the program)</p>
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Program</th>
								<th>Preference Order</th>
							</tr>
							<tr>
								<td>B.Tech Computer Science and Engineering(CSE)</td>
								<td><select name="preforder1" width:100%>
									<option selected disabled>Choose here</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select></td>
							</tr>
							<tr>
								<td>B.Tech Electronics and Communications Engineering(ECE)</td>
								<td><select name="preforder2" width:100%>
									<option selected disabled>Choose here</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select></td>	
							</tr>
							<tr>
								<td>B.Tech Computer Science and Applied Mathematics(CSAM)</td>
								<td><select name="preforder3" width:100%>
									<option selected disabled>Choose here</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select></td>
							</tr>
							<tr>
								<td>B.Tech Computer Science and Design (CSD)</td>
								<td><select name="preforder4" width:100%>
									<option selected disabled>Choose here</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select></td>
							</tr>
							<tr>
								<td>B.Tech Information Technology and Social Sciences (ITSS)</td>
								<td><select name="preforder5" width:100%>
									<option selected disabled>Choose here</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select></td>
							</tr>
						</table>
					</div>
					<p><li>Standardized Test Persormance <br>
					(Give your performance in the standardized test/s that is/are conducted in your country such as SAT, ACT and GCE Advanced level. Do not provide any information about any exams that are conducted by your school.)</p>
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>Test</th>
								<th>Subject</th>
								<th>Score</th>
							</tr>
							<tr>
								<td><input type="tabletext" name="test1"></td>
								<td><input type="tabletext" name="subject1"></td>
								<td><input type="tabletext" name="score1"></td>
							</tr>
							<tr>
								<td><input type="tabletext" name="test2"></td>
								<td><input type="tabletext" name="subject2"></td>
								<td><input type="tabletext" name="score2"></td>
							</tr>
							<tr>
								<td><input type="tabletext" name="test3"></td>
								<td><input type="tabletext" name="subject3"></td>
								<td><input type="tabletext" name="score3"></td>
							</tr>
							<tr>
								<td><input type="tabletext" name="test4"></td>
								<td><input type="tabletext" name="subject4"></td>
								<td><input type="tabletext" name="score4"></td>
							</tr>
							<tr>
								<td><input type="tabletext" name="test5"></td>
								<td><input type="tabletext" name="subject5"></td>
								<td><input type="tabletext" name="score5"></td>
							</tr>
						</table>
					</div>	
				</ol>
				<div class="form-group">
					<label>List 5 High School Achievements and Awards</label>
					<textarea rows="10" name="awards" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>Extra Curricular Activities that you participated in your High School.</label><br><p>Highlight your achievements or awards (specify the year of participation and duration of each activity)</p>
					<textarea rows="10" name="activities" class="form-control"></textarea>
				</div>
				<label>Name and email id of 2 High School teachers who will send recommendation letters for you. </label><br>
				<p>The subject line should be "THE LETTER OF RECOMMENDATION OF XYZ" where XYZ will be replaced by the name of the student.</p>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>Name</th>
							<th>Email ID</th>
						</tr>
						<tr>
							<td><input type="text" name="lorname1"></td>
							<td><input type="email" name="loremail1"></td>
						</tr>
						<tr>
							<td><input type="text" name="lorname2"></td>
							<td><input type="email" name="loremail2"></td>
						</tr>
					</table>
				</div>
			</fieldset>
			<fieldset>
				<legend>Essay</legend><br>
				<div class="form-group">
					<label>
					<p>Write an essay of about 500 words describing any one of the following<br>
					<ol>
						<li>An Experience that has changed your life</li>
						<li>A difficult challenge you faced, how you overcame, and what you learnt from it.</li>
					</ol>
					<br>Please be strict to the word limit.</p>
					</label>
					<textarea rows="25" name="essay" class="form-control"></textarea>
				</div>
			</fieldset>
			<fieldset>
				<legend>Upload Files</legend>
				<div class="form-group">
					<label class="control-label col-sm-4">Recent Photograph (jpg)</label>
					<div class="col-sm-8">
						<input type="file" name="pic" accept=".jpg" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Signature (jpg)</label>
					<div class="col-sm-8">
						<input type="file" name="sign" accept=".jpg" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Proof of Date of Birth (pdf)</label>
					<div class="col-sm-8">
						<input type="file" name="dobproof" accept=".jpg" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Official High School transcripts (pdf)</label>
					<div class="col-sm-8">
						<input type="file" name="hstranscript" accept=".pdf" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Certified/attested copies of standardized test score</label>
					<div class="col-sm-8">
						<input type="file" name="testscorepdf" accept=".pdf" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Recommendation Letters</label>
					<div class="col-sm-8">
						<input type="file" name="lorpdf" accept=".pdf" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Copy of Passport/Citizen Card, PIO Card, OCI Card and Visa (if applicable) (pdf)</label>
					<div class="col-sm-8">
						<input type="file" name="passportvisapdf" accept=".pdf" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Payment Proof Receipt</label>
					<div class="col-sm-8">
						<input type="file" name="paymentreceipt" accept=".pdf" class="form-control">
					</div>
				</div>
			</fieldset>
			<input type="submit" value="SUBMIT" id="submit" class="col-sm-6 col-sm-offset-4 btn btn-default">		
		</form>
	</div>
	<div class="container">
		<h3>Note</h3>
		<p>Any document that is not in English or French <b>must be accompanied</b> by the English translation.</p>
		<h4>Important</h4>
		<ul>
			<li>Recent photograph must be smaller than 5 MB.</li>
			<li>Signature file must be smaller thatn 5 MB.</li>
			<li>All transcripts must be compiled in a single pdf file.</li>
			<li>All Standardized/attested copies of test score must be compiled in a single pdf file.</li>
			<li>All Recommendation letters must be compiled in a single pdf file.</li>
			<li>Copy of Passport/Citizen Card, PIO Card, OCI Card and Visa (if applicable) must be compiled in a single pdf file.</li>
		</ul>
	</div>
</body>
</html>