<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projection Report</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img style="width:180px;" src="https://storage.googleapis.com/piggybankservice.appspot.com/statics/piggy-png_1_.png">
      </div>
      <h1>Projection Report</h1>
      <div id="company">
      
         <div><span>TIME</span> <?php
                                        echo date('H:i:s');
                                        ?></div>
        
      </div>
      <div id="project">
        
        <div><span>DATE</span> <?php
                                        echo date('M D, Y');
                                        ?></div>
        
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
               
            <th class="desc">Daily Investment</th>
            <th>Duration</th>
            <th>Intrest</th>
            <th>Service</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
          
            <?php  
            echo '<td class="desc">NGN '.$_GET['amount'].'</td>
<td class="unit">'.$_GET['days'].' Days</td>
<td class="qty">NGN '.$_GET['tot'].'</td>
<td class="total">'.$_GET['for'].'</td>';?>
               
             <td></td>
          </tr>
         
        </tbody>
      </table>
      <div id="notices">
        <div>NOTE:</div>
        <div class="notice">Report was generated for refrence purposes only.</div>
      </div>
    </main>
    <footer>
      
    </footer>
  </body>
</html>