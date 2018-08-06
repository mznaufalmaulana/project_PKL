<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('layout/header');
      $this->load->view('layout/csshandler');
    ?>
  </head>

  <body>
    <?php
      $this->load->view('layout/menu');
    ?>
    <div class="am-mainpanel">
      <div class="am-pagebody">

        <!-- your content goes here -->
        <?php 
          $this->load->view('detail/dokter');
         ?>

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <?php
      $this->load->view('layout/jshandler');
    ?>
    <?php 
      $this->load->view('layout/footer');
    ?>

    <script>
      $(document).ready(function(){
        $(function(){

          'use strict';
          var date = $('.fc-datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

          // Datepicker
          $(".fc-datepicker").datepicker("setDate", new Date());

          $('.fc-datepicker').datepicker({
            "setDate": new Date(),
            "autoclose": true,
            showOtherMonths: true,
            selectOtherMonths: true
          });

          $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
          });
        });
        // $(document).on("click","#filter", function(){

        // })

        //filtering
        $('#filter').click(function(){
          var dateSelection = $('#dateSelection').val();
          if (dateSelection != '')
          {
            $.ajax({
              url:"<?php echo base_url('c_detail/get_data_selection') ?>",
              method:"POST",
              data:{dateSelection:dateSelection},
              success:function(data)
              {
                $('#dataTable').html(data);
              }
            });
          }
        });

        //open modal
        $(document).on("click", "#loketPelayanan", function () {
            var myBookId = $(this).data('id');
            $(".modal-body #jenisLayanan").val( myBookId );
        });

        //booking
        $(document).on('click', 'a[data-role=booking]',function(){
          var id = $(this).data('id');
          if (id != '')
          {
            $.ajax({
              url:"<?php echo base_url('c_detail/get_data_loket') ?>",
              method:"POST",
              data:{id:id},
              success:function(data)
              {
                $('#pilihLoket').modal('toggle');
              }
            });
          }
        })
        
      });
    </script>

  </body>
</html>
