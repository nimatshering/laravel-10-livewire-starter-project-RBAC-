  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Application for Certification of Locally Manufactured Construction Materials</title>
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

       .capitalize{
        text-transform: capitalize;
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
            border-bottom: 1px solid #009879;
        }

    </style>
     
  </head>
  <body>
    <h2>Application for Certification of Locally Manufactured Construction Materials</h2>
       <hr class="divider">

      <table class="styled-table">
          <tbody>
            <tr>
                <td>Application ID</td>
                <td><?php echo $application->app_id; ?></td>
              </tr>
              <tr>
                <td>Business Licence Number</td>
                <td><?php echo $application->licenseno; ?></td>
              </tr>

              <tr>
                <td> Business Scale</td>
                <td class="capitalize"><?php echo $application->business_scale; ?></td>
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
                <td>Phone </td>
                <td><?php echo $application->phone; ?></td>
              </tr>

              <tr>
                <td>Email </td>
                <td><?php echo $application->email; ?></td>
              </tr>

              <tr>
                <td>Dzongkhag </td>
                <td>
                  <?php if(isset($application->dzongkhag_id)): ?>
                  <?php echo e(\App\Models\Dzongkhag::find($application->dzongkhag_id)->name); ?>

                  <?php endif; ?>
                </td>
              </tr>

              <tr>
                <td>Gewog </td>
                <td>
                  <?php if(isset($application->gewog_id)): ?>
                  <?php echo e(\App\Models\Gewog::find($application->gewog_id)->name); ?>

                  <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td>Reason </td>
                <td><?php echo $application->reason; ?></td>
              </tr>
          </tbody>
      </table>
  </body>
  </html>
  
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/reports/pdf/locally-manufactured-material.blade.php ENDPATH**/ ?>