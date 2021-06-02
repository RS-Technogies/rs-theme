
<?php 
    $title=get_bloginfo("name");
    $excerpt=get_the_excerpt();
    $address=get_theme_mod('address');
    $email=get_theme_mod('email');
    $phone=get_theme_mod('phone');
    $about_us=get_field("about_us");
    $about_content="";
    if(!empty($about_us)){
        $about_content=$about_us["about_us_title"];
    }
    $services=get_field("services");
    $portfolio = get_posts([
        'post_type' => 'portfolio',
        'numberposts'=>'-1'
    ]);
    $cta = get_field('call_to_action');
    if(!empty($portfolio)){
        $portfolio=array_map(function($pt){
            $pt->permalink=get_permalink($pt->ID);
            $pt->external_url=get_field("external_link",$pt->ID);
            return $pt;
        },$portfolio);
    }
    $terms = get_terms( 'portfolio_areas', array(
        'hide_empty' => true,
    ));
    $social_medias=[
        'facebook'=>[
            'url'=>get_theme_mod("facebook"),
            'icon'=>"bx bxl-twitter"
        ],
        'twitter'=>[
            'url'=>get_theme_mod("twitter"),
            'icon'=>"bx bxl-facebook"
        ],
        'instagram'=>[
            'url'=>get_theme_mod("instagram"),
            'icon'=>"bx bxl-instagram"
        ]
    ];

?>
<?php get_header(null,[
    'title'=>$title,
    'excerpt'=>$excerpt
]); ?>
<?php get_template_part("page-templates/home/banner", null, [
    "title" => "Better Solutions For Your Business",
    "sub_title" => "We are team of talanted developers making applications and websites",
    "btn_text" => "Get Started",
    "btn_url" => "/about",
    "video_url" => "",
    "featured_image"=>wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()))
]) ?>
<?php get_template_part("page-templates/home/about", null, [
    'content'=>$about_content
]) ?>
<?php get_template_part("page-templates/home/services", null, [
    'content'=>"Hello",
    'services'=>$services
]) ?>
<?php get_template_part("page-templates/home/cta", null, [
    'cta'=>$cta
]) ?>
<?php get_template_part("page-templates/home/portfolio", null,[
    'portfolio'=>$portfolio,
    'terms'=>$terms
]) ?>
<?php get_template_part("page-templates/home/contact", null, [
    'address'=>$address,
    'email'=>$email,
    'phone'=>$phone,
    'map_iframe'=>get_theme_mod('map_iframe'),
    
]) ?>
<?php get_footer(null,[
    'title'=>$title,
    'address'=>$address,
    'email'=>$email,
    'phone'=>$phone,
    'portfolio'=>$portfolio,
    'social_medias'=>$social_medias
]); ?>