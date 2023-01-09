 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="card card-stats">
           <div class="card-header card-header-warning card-header-icon">
             <div class="card-icon">
               <i class="material-icons">content_copy</i>
             </div>
             <p class="card-category">All Debts</p>
             <h3 class="card-title"><?php echo $all_debts; ?>
               <small></small>
             </h3>
           </div>
           <div class="card-footer">
             <div class="stats">

             </div>
           </div>
         </div>
       </div>

       <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="card card-stats">
           <div class="card-header card-header-danger card-header-icon">
             <div class="card-icon">
               <i class="material-icons">info_outline</i>
             </div>
             <p class="card-category">Today debts</p>
             <h3 class="card-title"><?php echo $today_debts; ?></h3>
           </div>
           <div class="card-footer">
             <div class="stats">

             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="card card-stats">
           <div class="card-header card-header-success card-header-icon">
             <div class="card-icon">
               <i class="material-icons">store</i>
             </div>
             <p class="card-category">Total Debts Amount</p>
             <h3 class="card-title">$<?php echo number_format($total_debt_amount); ?></h3>
           </div>
           <div class="card-footer">
             <div class="stats">

             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
     <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="card card-stats">
           <div class="card-header card-header-warning card-header-icon">
             <div class="card-icon">
               <i class="material-icons">person</i>
             </div>
             <p class="card-category">All Agents</p>
             <h3 class="card-title"><?php echo $all_agents; ?>
               <small></small>
             </h3>
           </div>
           <div class="card-footer">
             <div class="stats">

             </div>
           </div>
         </div>
       </div>
       

       <div class="col-lg-4 col-md-6 col-sm-6">
         <div class="card card-stats">
           <div class="card-header card-header-danger card-header-icon">
             <div class="card-icon">
               <i class="material-icons">person</i>
             </div>
             <p class="card-category">All Admin</p>
             <h3 class="card-title"><?php echo $all_admins; ?></h3>
           </div>
           <div class="card-footer">
             <div class="stats">

             </div>
           </div>
         </div>
       </div>
     </div>

   </div>
 </div>