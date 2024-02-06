  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Application for Business Guest Visa</title>
    <style>
       h2{
         padding: 2px;
         font-size: 18px;
       }

       h3{
         padding: 2px;
         font-size: 16px;
       }
       p{
         padding: 1px;
       }
       
      .styled-table {
          border-collapse: collapse;
          margin: 25px 0;
          font-size: 0.7em;
          font-family: sans-serif;
          width: 100%;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }

      .styled-table thead tr {
          background-color: #009879;
          color: #ffffff;
      }

      .styled-table th,
      .styled-table td {
          padding: 12px 15px;
          text-align: left;
      }

      .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

         .column {
          float: left;
          width: 50%;
        }

        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .date{
          text-align: right;
        }

         .divider {
            border-bottom: 2px solid #009879;
        }

    </style>
     
  </head>
  <body>
    <h2>Application for Business Guest Visa</h2>
      <div class="row">
        <div class="column">Application ID: <?php echo $application->app_id; ?></div>
      </div>
       <hr class="divider">

      <table class="styled-table">
          <tbody>
              <tr>
                <td>Business Licence Number</td>
                <td><?php echo $application->licenseno; ?></td>
              </tr>

              <tr>
                <td>Application Type</td>
                <td><?php echo $application->application_type; ?></td>
              </tr>

              <tr>
                <td> Business Scale</td>
                <td><?php echo $application->business_scale; ?></td>
              </tr>

              <tr>
                <td>Contact Number</td>
                <td><?php echo $application->phone; ?></td>
              </tr>


              <tr>
                <td>Applicant Name</td>
                <td><?php echo $application->applicant_name; ?></td>
              </tr>

                <tr>
                <td>CID</td>
                <td><?php echo $application->cidnumber; ?></td>
              </tr>


              <tr>
                <td>Designation</td>
                <td><?php echo $application->designation; ?></td>
              </tr>

              <tr>
                <td>Address </td>
                <td><?php echo $application->address; ?></td>
              </tr>

              <tr>
                <td>Phone </td>
                <td><?php echo $application->phone; ?></td>
              </tr>

                <tr>
                <td>Email </td>
                <td><?php echo $application->email; ?></td>
              </tr>
              <tr>
                <td>Visit Reason </td>
                <td><?php echo $application->visitreason; ?></td>
              </tr>
          </tbody>
      </table>

      <h3>Guest List</h3>
      <table class="styled-table">
        <tr>
          <th>Sl#</th>
          <th>Name</th>
          <th>Nationality</th>
          <th>Passport Number</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Duration</th>
          <th>Accomodation</th>
        </tr>
        <tbody>
            <?php $__currentLoopData = $guestlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($index+1); ?></td>
              <td><?php echo e($item->name); ?></td>
              <td><?php echo e($item->nationality); ?></td>
              <td><?php echo e($item->passport_number); ?></td>
              <td> <?php echo e($item->start_at); ?></td>
              <td><?php echo e($item->end_at); ?></td>
              <td><?php echo e($item->duration); ?></td>
              <td><?php echo $item->accomodation; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

        <h3>Previous Visit</h3>
      <table class="styled-table">
        <tr>
          <th>Sl#</th>
          <th>Name</th>
          <th>Nationality</th>
          <th>Visit Date</th>
        </tr>
        <tbody>
            <?php $__currentLoopData = $guestvisit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($index+1); ?></td>
              <td><?php echo e($item->name); ?></td>
              <td><?php echo e($item->nationality); ?></td>
              <td> <?php echo e($item->visit_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

      <div>
        <h2>Declaration</h2>
         <ol>
            <li class="my-2">I hereby declare that all the information furnished by me in this application is true and correct. Should any false or misleading information be provided or this privilege be abused then the applicant is liable to be penalized. I also agree to abide by the following conditions for the issue of a “Business Guest Visa” for the above mentioned person.</li>
            <li class="my-2">The visiting guest is not a tourist and in the event, it is established that the guest is a tourist, I undertake to refund the entire tourist charges and bear the applicable fines as may be imposed by the relevant Agencies.</li>
            <li class="my-2">Be responsible for the cost of his/her stay in the kingdom and repatriation thereof, if necessary.</li>
            <li class="my-2">Comply with the provisions of the Immigration Act and any regulations made thereunder or any notification thereof for the time being in force in the Kingdom of Bhutan.</li>
            <li class="my-2">Not engage in any form of employment paid or unpaid unless he/she is holding a work permit or in any business, profession or occupation or any activity and does not engage in any activities detrimental to the security, reputation and well-being of the Kingdom.</li>
          </ol>
      </div>
  </body>
  </html>
  
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/reports/pdf/guest-visa.blade.php ENDPATH**/ ?>