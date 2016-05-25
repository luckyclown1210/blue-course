
<div class="container-contact-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div id="contact-form">
            
            <form method="POST" id="ajax-contact-form" enctype="multipart/form-data" action="index.php?action=upload">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" name="coursename" id="fname" placeholder="Course name (required)">
                </div>
                  
                   <div class="col-lg-6">
                  <input type="text" name="coursedes" id="fname" placeholder="Description (required)">
                </div>
                
              </div>
                
                
                
           
              
              <textarea name="message" id="message" placeholder="Your message..."></textarea>
              
              <div class="row">
                    <div class="col-lg-8">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
              
              <input type="submit"  value="Submit" class="button" name="submit">
          
            </form>
            
            
        </div>
      </div>
      
  

    </div>
  </div>
</div>