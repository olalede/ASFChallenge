<form action="validations/profile_update.php" method="post" enctype="multipart/form-data" id="UploadForm">

    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General Information</a></li>
      <li><a href="#personal" data-toggle="tab">Personal Information</a></li>
    </ul>
  
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>

                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                </div>

                <div class="form-group float-label-control">
            <label for="">City</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_city'];?>" name="user_city" value="<?php echo $rws['user_city'];?>">
                 </div>

                 <div class="form-group float-label-control">
            <label for="">State</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_state'];?>" name="user_state" value="<?php echo $rws['user_state'];?>">
                 </div>


                 <div class="form-group float-label-control">
            <label for="">Country</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_country'];?>" name="user_country" value="<?php echo $rws['user_country'];?>">
                 </div>


                <div class="form-group float-label-control">
        <label for="">Gradaute Year</label>
            <select class="form-control"placeholder="<?php echo $rws['user_graduate'];?>" name="user_graduate" value="<?php echo $rws['user_graduate'];?>">
            <option value="">Graduate Year</option>
            <option>1961-1965</option>
              <option>1966-1970</option>
              <option >1971-1975</option>
              <option >1976-1980</option>
              <option selected>1981-1985</option>
              <option >1986-1990</option>
              <option >1991-1995</option>
              <option >1996-2000</option>
              <option>2001-2005</option>
              <option>2006-2010</option>
              <option >2011-2015</option>
              <option >2016-2019</option>
            </select>
            
            </div>


            <div class="form-group float-label-control">
        <label for="">Major</label>
            <select class="form-control"placeholder="<?php echo $rws['user_major'];?>" name="user_major" value="<?php echo $rws['user_major'];?>">
            <option value="">Major</option>
              <option>B.S. in Computer Science</option>
              <option>B.A. in Computer Science</option>
              <option >B.S. in Software Engineering</option>
              <option selected>M.S. in Computer Science, Graduate</option>
              <option >M.S. in Software Engineering, Graduate</option>
            </select>
            </div>


            <div class="form-group float-label-control">
        <label for="">Profession</label>
       
            <input type="text" class="form-control"  type="text" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>">
          </div>

          <div class="form-group float-label-control">
        <label for="">About</label>
            <input type="text" class="form-control"  type="text" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>">
          </div> 

            </div>  


            <div class="tab-content">
        <div class="tab-pane fade in active" id="personal"> 
            <div class="col-md-6">
                <label for="">Username</label>
                <div class="form-group float-label-control">
                    <a href="http://<?php echo $rws['domain_websiteaddress'];?>/<?php echo $rws['user_username'];?>">        
                        <div class="input-group">
                            <span class="input-group-addon">http://<?php echo $rws['domain_websiteaddress'];?>/</span>
                            <fieldset disabled> 
                                <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>  
                        </div>
                    </a>
                </div>

                <div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>">
                </div>  
            </div>
        </div>


        <div class="form-group float-label-control">
                    <label for="">Profile Picture</label>
                    <input name="ImageFile" type="file" class="img-thumbnail" width="150" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Profile Picture </label>
                            <br> 
                            <img src="alumniFiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>

 
                <div class="col-md-6">
                    <div class="shortpreview" id="uploadImagePreview">
                        <label for="">Current Uploaded Profile Picture </label>
                        <br> 
                    <div id="imagePreview"></div>
                    </div>
                    </div>
                </div>

                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_website'];?>" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div> 

    </div>
    </div>
    

    <div class="submit">
        <center>
            <button class="btn btn-default ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="float:left; height:45px;width:160px;border: #FF7300;border-style:groove;color:brown;size:20px"/>Save Your Profile</button>
        </center>
    </div>
</form>