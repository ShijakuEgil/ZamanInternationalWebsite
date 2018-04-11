<?php
get_header(  );
get_template_part( 'templates/content', 'banner' );
get_template_part( 'templates/content', 'page-title' );
 ?>

 <div class="container-fluid">
   <nav>
     <ul class="nav nav-tabs nav-justified" id="fundsTab" role="tablist">
       <li class="funds-nav-item nav-item">
         <a class="funds-nav-link nav-link active display-4" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cooking Classes</a>
       </li>
       <li class="funds-nav-item nav-item">
         <a class="funds-nav-link nav-link display-4" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Host an Event</a>
       </li>
       <li class="funds-nav-item nav-item">
         <a class="funds-nav-link nav-link display-4" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Zaman Essentials</a>
       </li>
     </ul>
   </nav>

 </nav>
   <div class="tab-content" id="nav-tabContent">
 <div class="funds-tab-content tab-pane text-center fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     <div class="content container-fluid row">
   <img src="<?php echo get_template_directory_uri();?>/img/desk.jpg" class="left col-lg-6"/>
   <p class="col-lg-6">
   Lorem Ipsum is simply dummy text of the printing and typesetting industry.
   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
   when an unknown printer took a galley of type and scrambled it to make a type
   specimen book. It has survived not only five centuries, but also the leap into
   electronic typesetting, remaining essentially unchanged. It was popularised in the
   1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
   recently with desktop publishing software like Aldus PageMaker including versions of
   Lorem Ipsum.
   <button type="button" class="btn btn-primary">Sign Up</button>
   </p>
 </div>
 </div>

 <div class="funds-tab-content tab-pane text-center fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
     <div class="content container-fluid row">
   <img src="<?php echo get_template_directory_uri();?>/img/office-front.jpeg" class="left col-lg-6"/>
   <p class="col-lg-6">
   Lorem Ipsum is simply dummy text of the printing and typesetting industry.
   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
   when an unknown printer took a galley of type and scrambled it to make a type
   specimen book.
   <button type="button" class="btn btn-primary">Sign Up</button>
   </p>
 </div>
 </div>

 <div class="funds-tab-content tab-pane text-center fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
     <div class="content container-fluid row">
   <img src="<?php echo get_template_directory_uri();?>/img/building.jpg" class="left col-lg-6"/>
   <p class="col-lg-6">
   Lorem Ipsum has survived not only five centuries, but also the leap into
   electronic typesetting, remaining essentially unchanged. It was popularised in the
   1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
   recently with desktop publishing software like Aldus PageMaker including versions of
   Lorem Ipsum.
   <button type="button" class="btn btn-primary">Sign Up</button>
   </p>
 </div>
 </div>

</div>

 <?php get_footer() ?>