<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
session_start();
if(isset($_SESSION['user_email']))
{
include('header.php'); ?>
<div class="container-fluid pt-4 px-4">
<div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Add HTML Notes</h6>
    </div>
    <div >
        <div class="bg-light rounded h-100 p-4">
            <form id="html_notes_form" action="#">
                <div class="row mb-6">
                    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputTitle" required>
                    </div>
                    <div class="col-sm-2"></div>
                    <div id="inputTitle_required" class="col-sm-10"></div>
                </div>
                <div class="row mb-6">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                       <textarea class="form-control" name="description" style="height: 150px;" id="inputDescription" required></textarea>
                    </div>
                    <div class="col-sm-2"></div>
                    <div id="inputDescription_required" class="col-sm-10"></div>
                </div>
               
                <div class="row mb-3">
                    <label for="inputRefrenceLink" class="col-sm-2 col-form-label">Refrence Link</label>
                    <div class="col-sm-10">
                        <input type="text" name="refrence_link" class="form-control" id="inputRefrenceLink" required>
                    </div>
                    <div class="col-sm-2"></div>
                    <div id="inputRefrenceLink_required" class="col-sm-10"></div>
                </div>
                <div class="row mb-3">
                     <label for="inputPdfFile" class="col-sm-2 col-form-label">Upload Pdf File</label>
                     <div class="col-sm-10">
                    <input class="form-control" name="pdf_file" type="file" accept=".pdf,.docx" id="inputPdfFile" required>
                    <div class="col-sm-2"></div>
                    <div id="inputPdfFile_required" class="col-sm-10"></div>
                    </div>
                </div>
                 <div class="row mb-3">
                    <label for="inputCoding" class="col-sm-2 col-form-label">HTML Code</label>
                    <div class="col-sm-10">
                        <div id="inputCoding" class="form-control"></div>
                        <div id="inputCoding_required"></div>
                       <input type="hidden" name="inputCoding" id="inputCoding">
                    </div>
                </div>
                <br><br>
                
                <button type="button" class="btn btn-primary" id="html_notes_submit">Save</button>
                <!-- <button type="cancel" value="Cancel" class="btn btn-primary">Cancel</button> -->
            </form>
        </div>
    </div>
</div>
</div>

<?php include('footer.php'); 
}
else
{
    echo "No Page Found";
}
?>