<div class="form-row">
<!--    to upload xml file-->
<form action="?content=upload" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label >Select Data (xml file)* </label>
    <input  type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <input type="file" class="form-control-file" name="data" required> 
        </div>
       
    <input type="submit" class="btn btn-primary" value="Upload">
</form>
<!--to upload multiple images-->
<form action="?content=upload" method="POST" enctype="multipart/form-data">
        <div class="form-group mr-3">
            <label>Select Images (maximum 19)</label>
            <input type="file" class="form-control-file" name="images[]" multiple required>
        </div>
       
    <input type="submit" class="btn btn-primary" value="Upload">
</form>
     </div>

