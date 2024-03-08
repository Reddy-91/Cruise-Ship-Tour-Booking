<style>
body {
  background-image: url('images/image.jpg');
}
</style>
<body>
<h2 align="center">Customer Registration</h2>				
<form name="formID" id="formID" class="login100-form validate-form p-b-33 p-t-5" method="post" action="customer_details_insert.php">
  <table width="707" height="443" border="0" align="center">
  
    <tr>
      <td width="394">Customer_name</td>
      <td width="446"><input name="customer_name" type="text" id="customer_name" class="validate[required,custom[onlyLetter]]" form-control></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" class="validate[required,custom[onlyLetter]]" id="address" form-control></textarea></td>
    </tr>
    <tr>
      <td>Contact_Number</td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required,custom[mobile]]" form-control></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="Male" class="validate[required]]" form-control>
        Male 
          <input name="gender" type="radio" value="radiobutton" class="validate[required]]" form-control>
        Female</td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="DOB" type="date" id="DOB" class="validate[required,custom[date]]" form-control></td>
    </tr>
    <tr>
      <td>E-mail_Id</td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]]" form-control></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="password" id="password" class="validate[required,custom[passw]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-success btn"> 
      &nbsp;</div></td>
    </tr>
  
  </table>
</form>
</body>
<?php
include('val.php');
?>