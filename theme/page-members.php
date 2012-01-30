<?php


if (false === ($members = get_transient('foundation_members_list'))) {

    $members_url = "http://foundation.gnome.org/membership/members.php?format=json";

    $members = json_decode(file_get_contents($members_url));
    
    // keeps a 12-hour cache until another HTTP request
    // to get the members list
    set_transient('foundation_members_list', $members, 60*60*12);
    
}




require_once("header.php"); ?>

    <!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
        
            <div class="page_title">
                <h1><?php the_title(); ?></h1>
            </div>
            
            <div class="content without_sidebar">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                
                <?php
                
                echo '<ul class="foundation_members_list">'."\n";
                $antispam = array(".", "@");
                foreach ($members as $member) {
                    $email = str_replace($antispam, " ", $member["email"]);
                    echo "    <li title=\"&lt;" . $email . "&gt; / " . "Last Renewed on " . $member['last_renewed_on'] . "\">" . $member['firstname'] . " " . $member['lastname'] . "</li>\n";
                }
                echo '</ul>'."\n";
                
                ?>
                
            <?php endwhile; // End the loop. Whew. ?>
                <br />
                <div class="clear"></div>
            </div>
            
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
