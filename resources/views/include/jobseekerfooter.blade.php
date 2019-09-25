<footer class="footer">
<center>HRMS © 2019 - 2020 HRMS Softwares. All rights reserved.</center>
</footer>
    <style>
.footer {
    background-color: #f9f9f9;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    bottom: 0px;
    color: #58666e;
    text-align: left;
    padding: 20px 30px;
    position: absolute;
    right: 0;
    left: 0px;
}
    </style>
<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('assets/js/detect.js')}}"></script>
        <script src="{{url('assets/js/fastclick.js')}}"></script>
        <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{url('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('assets/js/waves.js')}}"></script>
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
        
        <!-- jQuery -->
        <script src="{{url('/plugins/moment/moment.min.js')}}"></script>
        
        <!-- Counter js  -->
        <script src="{{url('/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{url('/plugins/counterup/jquery.counterup.min.js')}}"></script>
        
        <!-- sweet alerts -->
        <script src="{{url('/plugins/sweetalert2/sweetalert2.js')}}"></script>
        
        <!-- flot Chart -->
        <script src="{{url('/plugins/flot-chart/jquery.flot.min.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{url('/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Todoapp -->
        <script src="{{url('assets/pages/jquery.todo.js')}}"></script>
        
        <!-- jQuery  -->
        <script src="{{url('assets/pages/jquery.chat.js')}}"></script>
        
        <!-- Dashboard js  -->
        <script src="{{url('assets/pages/jquery.dashboard.js')}}"></script>

        <!-- App js  -->
        <script src="{{url('assets/js/jquery.app.js')}}"></script>
        <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
          <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
         <script src="{{url('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
          <script src="{{url('plugins/datatables/dataTables.buttons.min.js')}}"></script>
           <script src="{{url('plugins/datatables/dataTables.buttons.min.js')}}"></script>
            <script src="{{url('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
            <script src="{{url('plugins/datatables/jszip.min.js')}}"></script>
         <script src="{{url('plugins/datatables/pdfmake.min.js')}}"></script>
           <script src="{{url('plugins/datatables/vfs_fonts.js')}}"></script>
            <script src="{{url('plugins/datatables/buttons.html5.min.js')}}"></script>
            <script src="{{url('plugins/datatables/buttons.print.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.keyTable.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.keyTable.min.js')}}"></script>
             <script src="{{url('plugins/datatables/dataTables.scroller.min.js')}}"></script>
             <script src="{{url('plugins/datatables/dataTables.scroller.min.js')}}"></script>
             <script src="{{url('plugins/datatables/dataTables.responsive.min.js')}}"></script>
            <script src="{{url('plugins/datatables/dataTables.responsive.min.js')}}"></script>
             <script src="{{url('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
             <script src="{{url('plugins/ckeditor/ckeditor.js')}}"></script> 
             <!-- <script src="{{url('assets/js/ckeditor.js')}}" ></script> -->
        <script>
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            
        </script>


<!-- for ckeditor -->
<script src="{{url('assets/js/ckeditor.js')}}"></script>
    <script>
        // CKEDITOR.replace( 'article-ckeditor' );
        CKEDITOR.replace( 'article-ckeditor', {
    toolbar: [
     { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
     // { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
     { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
     // [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
     '/',                   
     { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
    ]
   });
</script>

<script>
        // CKEDITOR.replace( 'article-ckeditor' );
        CKEDITOR.replace( 'editor', {
    toolbar: [
     { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
     // { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
     { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
     // [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
     '/',                   
     { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
    ]
   });

// CKEDITOR.replace( 'article-ckeditor', {
//     toolbar: [
//     { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
//     { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
//     { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
//     { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
//     '/',
//     { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
//     { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
//     { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
//     { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
//     '/',
//     { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
//     { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
//     { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
//     { name: 'others', items: [ '-' ] },
//     { name: 'about', items: [ 'About' ] }
// ]
// });
</script>
        


 <script src="{{('assets/pages/datatables.init.js')}}"></script>


        <script>
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "{{('plugins/datatables/json/scroller-demo.json')}}", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>
<script >
    
    $('#edit_model').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var cityname = button.data('mycityname')
        var state = button.data('mystate')
        var cityid = button.data('cityid')
        var modal = $(this)


        modal.find('.modal-body #cityname').val(cityname);
        modal.find('.modal-body #state').val(state);
         modal.find('.modal-body #cityid').val(cityid);

    })

</script>


<script >
    $('#edit_model_qualification').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var myqualificationval = button.data('myqualificationval')
        var myqualificationtxt = button.data('myqualificationtxt')
        var myqualificationid = button.data('myqualificationid')
        var modal = $(this)


        modal.find('.modal-body #qual').val(myqualificationval);
        modal.find('.modal-body #txt').val(myqualificationtxt); 
        modal.find('.modal-body #id').val(myqualificationid);

    })
</script>


<script >
    $('#edit_modal_ins').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var myinsitute = button.data('institute')
        var myinsituteid = button.data('instituteid')
        var modal = $(this)


        modal.find('.modal-body #institutename').val(myinsitute);
        modal.find('.modal-body #instituteid').val(myinsituteid); 
        // modal.find('.modal-body #id').val(myqualificationid);

    })
</script>

<script >
    $('#edit_model_visa').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var visatype=button .data('visatype')
        var visaid =button.data('visaid')
        var modal =$(this)

        
        modal.find('.modal-body #visatype').val(visatype);
        modal.find('.modal-body #idtype').val(visaid);
    })
</script>

<script >
    $('#edit_modal_CMS').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var mypagetitle = button.data('mypagetitle')
        var mypageslug = button.data('mypageslug')
       
        var myseometa =   button.data('myseometa')
        var myseokey  =   button.data('myseokey')
        var myseodes  =   button.data('myseodes')
        var mypagecontent=button.data('mycontent')
        var myid   =  button.data('myid')

        var modal = $(this)


        modal.find('.modal-dialog #page_heading').val(mypagetitle);
        modal.find('.modal-dialog #page_slug').val(mypageslug); 
      
        modal.find('.modal-dialog #seoMetaTitle').val(myseometa);
        modal.find('.modal-dialog #seoMetaKeyword').val(myseokey);
        modal.find('.modal-dialog #seoMetaDescription').val(myseodes);
        modal.find('.modal-dialog #id').val(myid);
		// modal.find('.modal-dialog #editor').val(mypagecontent);
		document.getElementById('editor').value=mypagecontent;
    })
</script>

<script >
    $('').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var mypagetitle = button.data('mypagetitle')
        var mypageslug = button.data('mypageslug')
       
        var myseometa =   button.data('myseometa')
        var myseokey  =   button.data('myseokey')
        var myseodes  =   button.data('myseodes')
        var mypagecontent=button.data('mycontent')
        var myid   =  button.data('myid')

        var modal = $(this)


        modal.find('.modal-dialog #page_heading').val(mypagetitle);
        modal.find('.modal-dialog #page_slug').val(mypageslug); 
      
        modal.find('.modal-dialog #seoMetaTitle').val(myseometa);
        modal.find('.modal-dialog #seoMetaKeyword').val(myseokey);
        modal.find('.modal-dialog #seoMetaDescription').val(myseodes);
        modal.find('.modal-dialog #id').val(myid);
        // modal.find('.modal-dialog #editor').val(mypagecontent);
        document.getElementById('editor').value=mypagecontent;
    })
</script>
<script >
    $('#edit_model_countries').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var countriescitizen = button.data('countriescitizen')
        var countriesname = button.data('countriesname')
        var countriesid = button.data('countriesid')
        var modal = $(this)


        modal.find('.modal-body #country_name').val(countriescitizen);
            modal.find('.modal-body #country_citizen').val(countriesname); 
            modal.find('.modal-body #countries_id').val(countriesid);

    })
</script>
<script >
    
    $('#edit_model_keyword').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var mykey = button.data('mykeyword')
        var myid=button.data('myid')
        var modal = $(this)

        modal.find('.modal-body #field').val(mykey);
        
        modal.find('.modal-body #myid').val(myid);
    


    })
</script>
 <script >
    $('#edit_modal_team_member_type').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var teamtypename = button.data('teamtypename')
        var teamtypeid = button.data('teamtypeid')
     
        var modal = $(this)


        modal.find('.modal-body #team_type_name').val(teamtypename);
            modal.find('.modal-body #team_type_id').val(teamtypeid); 
            

    })
</script>
<script >
    $('#edit_model_pay_umo').on('show.bs.modal' , function (event){

        var button = $(event.relatedTarget)
        var payval = button.data('payval')
        var payid=button.data('payid')
        var modal = $(this)

        modal.find('.modal-body #payumo').val(payval);
        
        modal.find('.modal-body #payid').val(payid);
    
    })
</script>


        <!-- Datatable init js -->
       </body>

<!-- Mirrored from coderthemes.com/moltran/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:15:40 GMT -->
</html>
        