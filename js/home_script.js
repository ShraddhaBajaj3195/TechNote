$(document).ready(function()
{
    const quill = new Quill('#inputCoding', {
    theme: 'snow'
  });
    
    $('#html_notes_submit').click(function()
    {
    
        var inputTitle = $('#inputTitle').val();
        var inputDescription = $('#inputDescription').val();
        var inputRefrenceLink = $('#inputRefrenceLink').val();
        var inputPdfFile = $('#inputPdfFile').val();
        var inputCoding = $('#inputCoding').text();

        var i=0;
        if((inputTitle=='')||(inputTitle==null))
        {
            $('#inputTitle_required').text('* Please fill out this field.');
             i++;
        }
        else
        {
            $('#inputTitle_required').text(' ');
        }
       
        if((inputDescription=='')||(inputDescription==null))
        {
            $('#inputDescription_required').text('* Please fill out this field.');
             i++;
        }
        else
        {
            $('#inputDescription_required').text(' ');
        }

        if((inputRefrenceLink=='')||(inputRefrenceLink==null))
        {
            $('#inputRefrenceLink_required').text('* Please fill out this field.');
             i++;
        }
        else
        {
            $('#inputRefrenceLink_required').text(' ');
        }
        
        if((inputPdfFile=='')||(inputPdfFile==null))
        {
            $('#inputPdfFile_required').text('* Please fill out this field.');
             i++;
        }
        else
        {
            $('#inputPdfFile_required').text(' ');
        }
        
        if((inputCoding=='')||(inputCoding==null))
        {
            $('#inputCoding_required').text('* Please fill out this field.');
             i++;
        }
        else{
            $('#inputCoding').val(inputCoding);
            $('#inputCoding_required').text(' ');
        }

        var inputCoding=  $('#inputCoding').val();

        if(i==0)
        {
            
            alldata = {'inputTitle': inputTitle, 'inputDescription' : inputDescription, 'inputRefrenceLink': inputRefrenceLink, 'inputPdfFile':inputPdfFile,'inputCoding':inputCoding };
            $.ajax({
                type : 'post',
                url : 'add_html_notes_save.php',
                dataType: "json",
                data : alldata,
                success: function(result)
                {
                    console.log(result);
                 pageReload();
                }

            });
        }
        
        
    });

    function pageReload()
    {
        window.location.href = 'html_notes.php';
    }


     
});

