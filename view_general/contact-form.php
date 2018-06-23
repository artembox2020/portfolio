<form method="post">
    
  <div class="form-group">  
      <label class="form-label" for="name">Your Name</label>
      <input class="form-control" required name="name" id="name" />
  </div>
  
   <div class="form-group">  
      <label class="form-label" for="topic">Select Topic</label>
      <select class="form-control" name="topic" id="topic" >
          <option>Business proposition</option>
          <option>Consultation</option>
          <option>Other</option>
      </select>
  </div>
  
  <div class="form-group">
     <label class="form-label" for="desc">Describe your problem</label> 
     <textarea class="form-control" required rows="12" name="desc" id="desc" placeholder="Describe your problem here"></textarea>
  </div>
  
  <div class="form-group">
      <button class="btn btn-promary">Submit</button>
  </div>
  
</form>
<script>
    jQuery(function($){
      
    })
</script>