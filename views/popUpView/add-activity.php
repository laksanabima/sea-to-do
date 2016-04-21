<div id="dialog_content" class="dialog_content" style="display:none">
    <div class="dialogModal_header">Add Activity</div>
    <div class="dialogModal_content">
        <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Due Date</label>
              <input type="date" class="form-control" placeholder="dd/mm/yyyy">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
                <textarea name="area1" cols="40" class="form-control"></textarea>
            </div>
            <hr />
            <label>Attachments</label>
            <form action="" method="post" enctype="multipart/form-data">                
                <div class="form-group">
                  <label for="exampleInputFile">Add File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Add reference : image or pdf file.</p>
                <p align="right"><button type="button" name = "add-ref" class="button">Add reference</button></p>
                </div>
            </form>
            <hr />
            <label>List Attachments : </label>
            <p>1. Weleh</p>
          </div>
    </div>
    <div class="dialogModal_footer">
        <button type="button" class="btn btn-primary">Submit</button>
        <button type="button" class="btn"data-dialogmodal-but="cancel">Cancel</button>
    </div>
</div>