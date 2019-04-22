<form action="validations/validate_profile_reg.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">

<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
 
    <div class="col-md-6">

    <div class="form-group float-label-control">
            <label for="">Profile Picture</label>
            <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file"/></center>
        </div>    
        
        <div class="form-group float-label-control">
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>" required>
        </div>

        <div class="form-group float-label-control">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>" required>
        </div>

        <div class="form-group float-label-control">
            <label for="">City</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_city'];?>" name="user_city" value="<?php echo $rws['user_city'];?>" required>
        </div>

        <div class="form-group float-label-control">
            <label for="">State</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_state'];?>" name="user_state" value="<?php echo $rws['user_state'];?>" required>
        </div>

        <div class="form-group float-label-control">
            <label for="">Country</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_country'];?>" name="user_country" value="<?php echo $rws['user_country'];?>" required>
        </div>
        

      <div class="form-group float-label-control">
        <label for="">Gradaute Year</label>
            <select name="user_graduate" class="form-control selectpicker"placeholder="<?php echo $rws['user_graduate'];?>" name="user_graduate" value="<?php echo $rws['user_graduate'];?>" required>
              <option value="">Please select your Graduate Year</option>
              <option>1961-1965</option>
              <option>1966-1970</option>
              <option >1971-1975</option>
              <option >1976-1980</option>
              <option >1981-1985</option>
              <option >1986-1990</option>
              <option >1991-1995</option>
              <option selected>1996-2000</option>
              <option>2001-2005</option>
              <option>2006-2010</option>
              <option >2011-2015</option>
              <option >2016-2019</option>
            </select>
          </div>

      <div class="form-group float-label-control">
        <label for="">Major</label>
            <select name="user_major" class="form-control selectpicker" >
              <option value="">Please select your Major</option>
              <option>B.S. in Computer Science</option>
              <option selected>B.A. in Computer Science</option>
              <option >B.S. in Software Engineering</option>
              <option >M.S. in Computer Science, Graduate</option>
              <option >M.S. in Software Engineering, Graduate</option>
            </select>
          </div>


      <div class="form-group float-label-control">
        <label for="">Profession</label>
       
            <input name="user_profession" placeholder="Profession" class="form-control"  type="text" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" required>
          </div>

          <div class="form-group float-label-control">
        <label for="">About</label>
            <input name="user_shortbio" placeholder="Bio" class="form-control"  type="text" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>" required>
          </div>      
          

    </div>  


    <div class="col-md-6">
        <label for="">Username</label>
        <div class="form-group float-label-control">
            <a href="http://<?php echo $rws['domain_websiteaddress'];?>/<?php echo $rws['user_username'];?>">        
                <div class="input-group">
                    <span class="input-group-addon">http://<?php echo $rws['domain_websiteaddress'];?>/</span>
                    <fieldset disabled> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off" required>
                    </fieldset>
                </div>
            </a>
        </div>
        
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>" required>
        </div>

       

    </div> 


<?php
    $user_username =  $_REQUEST['user_username'];
?>   

    <hr>                 
    <div class="submit">           
        <center>
            <button class="btn btn-default ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="float:left; height:45px;width:160px;border: #FF7300;border-style:groove;color:brown;size:20px"/>Save Your Profile</button>
        </center>
    </div>
</form>