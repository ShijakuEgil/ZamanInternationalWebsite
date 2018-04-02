<?php
get_header();
get_template_part( 'templates/content', 'banner' );
get_template_part('templates/content', 'page-title');
 ?>
 <div class="funds-wrapper container-fluid">
   <ul class="nav nav-tabs nav-justified">
     <li class="nav-item">
       <a class="nav-link active" data-toggle="tab" href="#recurringDonations">Recurring Donation</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="tab" href="#menu1">One Time Donation</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" data-toggle="tab" href="#menu2">Donate Your Goods</a>
     </li>
   </ul>
   <div class="tab-content">
     <div id="recurringDonations" class="container-fluid tab-pane active"><br>
       <div class="container-fluid funds-recurring-donations-title-wrapper">
         <h2>Recurring Donations</h2>
         <p>Please select a program that you would like your donation to be applied.</p>
       </div>
       <div class="row no-gutters container-fluid">

           <?php
           $args = array(
             'post_type'    =>  'donation-page-url',
             'post_per_page'=>  -1,
           );

           $query = new WP_Query($args);

           while($query->have_posts()): $query->the_post();

           if(get_field('type_of_donation_page') == "recurring"): ?>
              <div class="col-4 funds-link-wrapper">
               <a class="funds-recurring-donation-link" href="<?php the_field('donation_page_url');?>">
                 <div class="funds-recurring-donation-button" style="background-image: url('<?php echo zaman_get_featured_image();?>')">
                    <h2><?php the_field('name_of_department') ?></h2>
                 </div>
               </a>
            </div>
           <?php
         endif;
         endwhile;
         wp_reset_postdata();?>
       </div>
     </div>
     <div id="menu1" class="container-fluid tab-pane fade"><br>
       <h3>Menu 1</h3>
       <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
     </div>
     <div id="menu2" class="container-fluid tab-pane fade"><br>
       <h3>Menu 2</h3>
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
     </div>
   </div>
 </div>

 <?php
 get_footer()
?>
