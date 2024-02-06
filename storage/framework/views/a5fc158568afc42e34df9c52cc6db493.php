  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Verification note for Business Guest Visa  </title>
    <style>
        @page {
        header: page-header;
        footer: page-footer;
        margin: 140px 25px;
      }

      * { box-sizing: border-box;}

      .column {float: left;}

      .left {
        width: 16%;
        text-align: left;
        padding: 20px 4px 6px 40px;
      }

      .right {
        width: 16%;
        text-align: right;
        padding: 20px;
      }

      .middle {
        width: 54%;
        text-align: center;
      }

      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      .float-left {
        width: 75%;
        font-size: 14px;
        font-weight: 400;
        text-align: left;
      }

      .float-right {
        width: 15%;
        font-size: 14px;
        font-weight: 400;
        text-align: right;
      }

      .logo{
          height: 60px;
          width: auto;
          float: right;
        }

      .jhomolhari{
        font-family: 'dzongkha', sans-serif;
        font-size: 22px;
        line-height: 1.2em;
      }

      .padding-top-0{ padding-top: 0px;} 
      .padding-top-20{ padding-top: 20px;} 
      .padding-top-60{ padding-top: 60px;} 

      .product-photo-center {
          margin: auto;
          width: 50%;
          border: 3px solid #b4b09e;
          padding: 3px;
          text-align: center;
        }

      .underline {
        text-decoration: underline;
        font-weight: bold;
      }

      .container{
        padding: 40px 50px;
        line-height: 1.5em;
        font-size: 14px;
      }

      .footer{
          padding: 10px 10px 40px 10px;
          text-align: center;
          font-size: 0.7em;
      } 

      table {
          border-collapse: collapse;
          margin: 10px 0;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
          width: 100%;
          font-size: 14px;
      }

      .styled-table thead tr {
          text-align: left;
      }

      .styled-table th,
      .styled-table td {
          padding: 4px;
          border: 1px solid;
      }

      .no-border-table thead tr {
          text-align: left;
      }

      .no-border-table th,
      .no-border-table td {
          padding: 2px;
      }

      .signature{
        height: 60px;
        width: auto;
      }

      .seal{
        height: 120px;
        width: auto;
      }

       .note{
        font-size: 11px;
        margin-top:0px;
      }

      .text-center{
        text-align: center;
      }

      .center{text-align: center;}
      .left{text-align: left;}
      .right{text-align: right;}
      .font-bold{font-weight: bold;}

    </style>
  </head>
  <body>
  <htmlpageheader name="page-header">
  <div class="row">
    <div class="column left">
      <div class="logo">
          <img src="<?php echo e(public_path().'/assets/img/rgob.png'); ?>" class="rgob">
      </div>
    </div>
    <div class="column middle">
      <div class="jhomolhari padding-top-20">དཔལ་ལྡན་འབྲུག་གཞུང་། བཟོ་གྲྭ་ཚོང་ལས་དང་ལཱ་གཡོག་ལྷན་ཁག།</div>
        <div class="jhomolhari">ཚོང་འབྲེལ་ལས་ཁུངས་ ཐིམ་ཕུག།</div>
        <div>Department of Industry</div>
        <div>Ministry of Industry, Commerce and Employment</div>
        <div>Royal Government of Bhutan, Thimphu</div>
    </div>
    <div class="column right">
      <div class="logo">
        <img src="<?php echo e(public_path().'/assets/img/rgob1.png'); ?>" class="">
        </div>
    </div>
  </div>
  </htmlpageheader>

<main class="container">
        <div class="text-center font-bold">BUSINESS VISA VERIFICATION NOTE</div>
        <p>1.	Details of the Applicant:</p>
          <table class="styled-table">
            <tr>
              <td>Name of the Applicant & Designation</td>
              <td><?php echo e($application->applicant_name); ?></td>
            </tr>
            <tr>
              <td>Business License Name:</td>
              <td><?php echo e($application->licensename); ?></td>
            </tr>
            <tr>
              <td>Business License No</td>
              <td><?php echo e($application->licenseno); ?></td>
            </tr>
          </table>

          <p>2.	Details of the Guest:</p>
          <table class="styled-table">
            <thead>
              <tr>
                <td>Sl#</td>
                <td>Name of the Guest</td>
                <td>Designation</td>
                <td>Work Place</td>
              </tr>
            </thead>
             <?php $__currentLoopData = $guestlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td> <?php echo e($index+1); ?> </td>
                <td> <?php echo e($item->name); ?> </td>
                <td> <?php echo e($item->passport_number); ?> </td>
                <td> <?php echo e($item->nationality); ?> </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </table>

          <p>3.	Duration of Visit:</p>
          <table class="styled-table">
            <thead>
              <tr>
                <td>Sl#</td>
                <td>Arrival Date</td>
                <td>Visit/Meeting Date</td>
                <td>Departure Date</td>
                <td>Total Days</td>
              </tr>
            </thead>
            <?php $__currentLoopData = $guestlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td> <?php echo e($index+1); ?> </td>
                <td> <?php echo e($item->start_at); ?> </td>
                <td> <?php echo e($item->start_at); ?> </td>
                <td> <?php echo e($item->end_at); ?> </td>
                <td> 3 Days </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </table>

          <p>4.	Purpose of Visit:</p>
          <div><?php echo $verificationote->purpose; ?>

          </div>

          <p>5.	Recommendation/Remarks:</p>
          <div><?php echo $verificationote->recom_remark; ?></div>

          <div class="row">
            <div class="column left"></div>
            <div class="column middle">
                <img src="<?php echo e(public_path().'/uploads/guestvisa/ministry-seal.png'); ?>" class="seal">
                <img src="<?php echo e(public_path().'/uploads/guestvisa/department-seal.png'); ?>" class="seal">
            </div>
          </div>
          <p class="center note">
                This e-Verification Note is equivalent to the original Verification Note.
          </p>
  </main>

<htmlpagefooter name="page-footer">
   <hr>
    <div class="footer times">
      Post Box 141 Tel# (975)-2-325323, 323597,322295,321733,322406, Fax: (975)-2-323507, 325112, 321796
    </div>
</htmlpagefooter>
</body>
</html><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/reports/pdf/guestvisa/verification-note.blade.php ENDPATH**/ ?>