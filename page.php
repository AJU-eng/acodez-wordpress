<?php get_header(); 


   if (get_the_title() === "about-us") {
         
       get_template_part("/template-parts/about");
        
   }elseif (get_the_title() === "contact-us") {
        get_template_part("/template-parts/contact");
   }elseif (get_the_title() === "employees") {
        get_template_part("/template-parts/Employees");
   }
   else if (get_the_title()==="Blogs") {
      get_template_part("/template-parts/Blogs");
     
   }