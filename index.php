
<?php 
    $about_us=get_field("about_us");
    $about_content="";
    if(!empty($about_us)){
        $about_content=$about_us["about_us_title"];
    }
    $services=get_field("services")
?>
<?php get_header(); ?>
<?php get_template_part("page-templates/home/banner", null, [
    "title" => "Better Solutions For Your Business",
    "sub_title" => "We are team of talanted developers making applications and websites",
    "btn_text" => "Get Started",
    "btn_url" => "/about",
    "video_url" => ""
]) ?>
<?php get_template_part("page-templates/home/about", null, [
    'content'=>$about_content
]) ?>
<?php get_template_part("page-templates/home/services", null, [
    'content'=>"Hello",
    'services'=>$services
]) ?>
<?php get_template_part("page-templates/home/cta", null, []) ?>
<?php get_template_part("page-templates/home/portfolio", null) ?>
<?php get_template_part("page-templates/home/contact", null, []) ?>
<?php get_footer(); ?>