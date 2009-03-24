<?php
/*
Template Name: Front Page
*/
?>
<?php get_header() ?>
   <div id="frontpage_info">
      <div class='inner_container'>
         <h2>Connecting developers across projects, languages, and backgrounds.</h2>
         <div id="frontpage_sidebar">
            <p id="conference-summary">
               <strong>Open Source Bridge</strong> is a new conference for developers working with open source technologies and for people interested in learning the open source way.
            </p>
            <ul class='soc'>
               <li class='pre-bulletted'><a href='http://twitter.com/osbridge' title='@osbridge on twitter' class='twitter chicklet'>Twitter</a></li>
               <li class='pre-bulletted'><a href='http://friendfeed.com/osbridge' title='osbridge on FriendFeed' class='friendfeed chicklet'>FriendFeed</a></li>
               <li class='pre-bulletted'><a href='http://www.facebook.com/group.php?gid=50942172062' title='Open Source Bridge Facebook Group' class='facebook chicklet'>Facebook</a></li>
               <li class='pre-bulletted'><a href='http://identi.ca/group/osbridge' title='!osbridge on identi.ca' class='identica chicklet'>identi.ca</a></li>
               <li class='pre-bulletted'><a href='http://www.linkedin.com/groups?home=&amp;gid=1853451' title='Open Source Bridge on LinkedIn' class='linkedin chicklet'>LinkedIn</a></li>
               <li class='pre-bulletted'><a href='http://dplr.it/osbridge09' class='dopplr chicklet'>Add trip to Dopplr</a></li>
               <li class='pre-bulletted'>
                  <a href='http://opensourcebridge.org/feed/' title='Open Source Bridge Blog Feed' class='rss chicklet'>Blog feed</a>
                  <p>
                     <a href="http://feeds2.feedburner.com/OpenSourceBridge" class='feedburner'>
                        <img src="http://feeds2.feedburner.com/~fc/OpenSourceBridge.gif?bg=FFFFFF&amp;fg=116DB6&amp;anim=0" height="26" width="88" style="border:0" alt="" />
                     </a>
                  </p>
               </li>
               <li class='pre-bulletted'><a href='http://opensourcebridge.org/comments/feed/' class='chicklet'>Comments Feed</a></li>
               <li class='pre-bulletted'><a href='http://opensourcebridge.org/proposals.atom' class='chicklet'>Proposals Feed</a></li>
            </ul>
            
         </div>
         <div id="frontpage_callouts">
            <div class='register-callout'>
               Registration is only <strong>$175</strong> until <strong>March 31</strong>.
               <a href='/attend' class='register-button'>Register Today</a>
            </div>
            <div class='submit-callout'>
               Proposals are due <strong>March 31</strong>.
               <a href='/attend' class='propose-button'>Submit Yours Now</a>
            </div>
         </div>
         <div id="frontpage_content">
            <div class='frontpage_snippet' id='citizen_snippet'>
               <h4>Open Source Citizenship</h4>
                  <p>What are the rights and responsibilities of an open source citizen?
                  We're exploring what open source means to us, what it offers, 
                  where we struggle, and why we do this day in and day out, even when 
                  we’re not paid for it.</p>
            </div>
            
            <div class='frontpage_snippet' id='tracks_snippet'>
               <h4>Innovative Track Structure</h4>
                  <p>Our session tracks are technology agnostic, based around shared 
                  community experiences and focus on the similarities between 
                  projects, not the differences. 
                  <a href="/events/2009/tracks">View the tracks.</a></p>
            </div>
            
            <div class='frontpage_snippet' id='lounge_snippet'>
               <h4>All-Hours Hacker Lounge</h4>
                  <p>The geekery doesn’t end when the sessions do. There will also be 
                  a 24-hour hacker lounge for code sprints, bug bashes, session deep 
                  dives, bouncing ideas, starting new projects or just mingling and 
                  taking in the vibe.</p>
            </div>
                  
            <div class='frontpage_snippet' id='volunteer_snippet'>
               <h4>100% Volunteer-Run</h4>
                  <p>Your software is peer-produced. Why not your conference? 
                  Open Source Bridge is pioneered and planned by a team of 
                  open source developers and technologists. What's more, we're
                  <a href='http://github.com/igal/openconferenceware'>building an
                  open source application</a> to manage talk proposals.</p>
            </div>
         </div>
      </div>
      </div>
      <div class='inner_container'>
         <div id="frontpage_blog">
            <h2 id='latest_news_head'>Latest News</h2>
            
            <?php query_posts('showposts=1'); ?>
            
            <?php while ( have_posts() ) : the_post() ?>

            			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
            				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
            				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></div>
            				<div class="entry-content">
            <?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

            				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
            				</div>
            				<div class="entry-meta">
            					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
            					<span class="meta-sep">|</span>
            					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
            					<span class="meta-sep">|</span>
            					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
            <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
            					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
            				</div>
            			</div><!-- .post -->

            <?php comments_template() ?>

            <?php endwhile; ?>
            
         </div>
      </div>

   </div><!-- #container -->

<?php get_footer() ?>