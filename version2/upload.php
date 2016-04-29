<?php session_start(); 

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysqli_connect_error());
	}

$sql=mysqli_select_db($con,"hitachi");

if($sql)
{
$j=$_SESSION['jobid'];
$res=mysqli_query($con,"SELECT * from skills where Job_ID='".$j."'");

if($res)
{

$row = mysqli_fetch_assoc($res);
$skils=$row["skill"];
$skillArray = explode(".", $skils);




$cover = $_POST['your-cover-letter'];
$pieces = explode(" ", $cover);
$count=0;
foreach ($pieces as $strr) {
str_replace('.',' ', $strr);
echo $strr;
echo "<br/>";
if (in_array($strr, $skillArray)) {

echo "bla bla blu "; 
 $count++;
 echo $count;
}
}

if($count>4)
{
$name=$_POST['your-name'];
$email=$_POST['your-email'];
$tel=$_POST['your-phone'];
$exp_y=$_POST['your-experience-years'];
$exp_m=$_POST['your-experience-months'];
$notice=$_POST['your-notice-period'];
$ctc_curr=$_POST['your-current-ctc'];
$ctc_exp=$_POST['your-expected-ctc'];
$loc_curr=$_POST['your-current-location'];
$loc_pref=$_POST['your-prefLocation'];
$company=$_POST['your-current-company'];




$res1=mysqli_query($con,"INSERT INTO JobApplicants(Job_ID, Name, Email, Telephone, Experience_Years, Experience_Months, Notice_Period, Current_CTC, Expected_CTC, Current_Location, Preferred_Location, Current_Company, Cover_Letter) VALUES ('$job_id','$name','$email','$tel','$exp_y','$exp_m','$notice','$ctc_curr','$ctc_exp','$loc_curr','$loc_pref','$company','$cover')");
if($res1)
{
echo "<script language=\"javascript\">";
echo "alert('you applied for the job successfully.')";
echo "</script>";

}
echo "Record Inserted!";






/* File upload code */
$username = $_SESSION['foldername']."_uploads";
$target_dir = "uploads/".$username;
if (!file_exists($target_dir)) {
mkdir($target_dir);
}
$target_dir .= "/";



$time = time(); 


$name = $_FILES["fileToUpload"]["name"];
$ext = end((explode(".", $name)));


$target_file = $target_dir . $username . '_' . $time . '.' . $ext;

$fileid =  $username . '_' . $time ;

$filename = $_POST['filename'];

echo '<h1>'.$ext.'</h1>';


$uploadOk = 1;
$txtFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


if($txtFileType != "docx" && $txtFileType != "pdf" && $txtFileType != "doc" ) {
    echo "Sorry, only doc, docx & Pdf  files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$query = "INSERT INTO ".$username."_uploadedfiles (filename, type, fileid) VALUES ('$filename','$ext','$fileid')";
		$results = mysqli_query($con, $query);
        header("Location:index.html");
	
	} else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
echo "no insert no count>5";
}
echo "no select skill ";
}
echo "no db";
?>