<!-- div sidebar -->
<div class="enroll-sidenav">


</div>


<!-- div main section -->
<div class="enrol-main">
<form class="create-course">
  <div class="form-group">
    <label for="level">Course Level</label>
    <Select name="level" id="course-category">
    <option value="primary">Primary</option>
    <option value="secondary">Secondary</option>
    <option value="University">College and University</option>
    </select>
  </div>
  <div class="form-group">
    <label for="category">Course Category</label>
    <input type="text" class="form-control" name="course_category" id="course_category" placeholder="Arts and Science">
  </div>

<div class="form-group">
<label for="description">Course description</label>
<textarea name="comment">Enter description here...</textarea>
<h1>Resources</h1>
  <div class="form-group">
    <label for="files">Select files:</label>
    <input type="file" class="form-control" name="files" id="files" multiple>
  </div>

  <div class="button">
  <button type="submit" id="submit-button">Submit</button>
  </div>

</form> 
<div>