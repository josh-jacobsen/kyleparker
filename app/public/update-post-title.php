<?php
// Load WordPress
require_once('wp-config.php');
require_once('wp-load.php');

// Get the first published post
$posts = get_posts(array(
    'numberposts' => 1,
    'post_status' => 'publish',
    'post_type' => 'post',
    'orderby' => 'ID',
    'order' => 'ASC'
));

if (!empty($posts)) {
    $post = $posts[0];
    
    echo "Found post: ID = {$post->ID}, Current title = '{$post->post_title}'\n";
    
    // Check if it's the "Hello World!" post
    if (strtolower(trim($post->post_title)) === 'hello world!') {
        // Update the post title
        $updated_post = array(
            'ID' => $post->ID,
            'post_title' => 'Hello World, from Kyle'
        );
        
        $result = wp_update_post($updated_post);
        
        if (!is_wp_error($result)) {
            echo "Successfully updated post title to 'Hello World, from Kyle'\n";
        } else {
            echo "Error updating post: " . $result->get_error_message() . "\n";
        }
    } else {
        echo "First post title is not 'Hello World!', it's: {$post->post_title}\n";
        echo "Do you want to update this post title to 'Hello World, from Kyle'? (y/n)\n";
    }
} else {
    echo "No published posts found.\n";
}
?>