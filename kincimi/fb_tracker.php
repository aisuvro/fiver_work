<?php
$rem=explode(".",$_SERVER['REMOTE_ADDR']);
if($rem[0].".".$rem[1].".".$rem[2]=="173.252.120"){ the_post(); ?>
<!DOCType html>
<html>
<head>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:site_name" content="<?php wp_title( '' ); ?>"/>
<meta property="og:type" content="article" />
<meta property="og:locale" content="en_US" />            

<?php
$apvp[]='[vc_row]';
$apvp[]='[vc_column width="1/1"]';
$apvp[]='[vc_column_text]';
$apvp[]='[/vc_column_text]';
$apvp[]='[/vc_column]';
$apvp[]='[/vc_row]';

$the_removed_tag_value=strip_tags(get_the_content());
$remove_vc_image=preg_replace('/[vc_single_image "(.+?)">(.+?)]/i', "[$2]", $the_removed_tag_value);
$replaced_val=str_replace($apvp,"",$remove_vc_image);

if ( has_post_thumbnail() ) {  echo '<meta property="og:image" content="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).'" />'; } ?>

<meta property="og:description" content="<?php echo $replaced_val; ?>" />
</head>
<body>
</body>
</html>

<?php exit(); } ?>
 
 

